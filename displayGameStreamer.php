<?php
include ("common.php");
$conn = new mysqli($host, $username, $password, $dbname);

$url = "http://untz.xen.prgmr.com/stat.xml";

if($xml == NULL) {
$xml = new SimpleXMLElement(file_get_contents($url));
}
if($xml->server->application->live->stream->active) {
if($xml->server->application->live->stream->name[1] == 'untz') {

	$query = "SELECT username FROM $usertablename WHERE currentstreamer = 2";
	$result = $conn->query($query);
	if ($result->num_rows > 0) {
    	// output data of each row
    	while($row = $result->fetch_assoc()) {
        $currentStreamer = "Current Streamer: " . $row["username"] . "<br>";
    }
}

	echo $currentStreamer;
}

}

 else {
	echo "Nobody Streaming";
}

$conn->close();

?>

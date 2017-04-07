<?php
require_once('./includes/dbconnect.php');

$url = "http://untz.xen.prgmr.com/stat.xml";

if($xml == NULL) {
$xml = new SimpleXMLElement(file_get_contents($url));
}
if($xml->server->application->live->stream->active) {
if($xml->server->application->live->stream->name == 'untz') {

	$query = "SELECT username FROM users WHERE currentstreamer = 1";
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


<?php
$url = "http://untz.xen.prgmr.com/stat.xml";

if($xml == NULL) {
$xml = new SimpleXMLElement(file_get_contents($url));
}

$untzlive = 0;
$index = 0;
while($untzlive == 0) {
	
	if($xml->server->application->live->stream[$index]->name == 'game') {
		$untzlive = 1;
} 	
	else {$index++;
}
}
	if ($xml->server->application->live->stream[$index]->active){

	echo 'Current Viewers: ' . $xml->server->application->live->stream[$index]->nclients;

}elseif($xml->server->application->live->nclients < '1'){
	echo "Stream Offline";
}
else{
	echo "Stream Offline";
}

?>

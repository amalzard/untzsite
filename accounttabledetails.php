<?php
$host = "untz";
$username = "root";
$password = "Aa030193";
$dbname = "untz";
$usertablename = "accounts";
$streamurl = "rtmp://untz.xen.prgmr.com/live";
$baseurl = "http://untz.xen.prgmr.com";

function genkey() {
	return bin2hex(openssl_random_pseudo_bytes(10));
}
?>

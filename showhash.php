<?php
require_once('./includes/dbconnect.php');
$baseurl = "http://untz.xen.prgmr.com";
$usertablename = 'users';

session_start();
if ($conn->connect_errno) {
	die('Could not connect: ' . $conn->connect_error);
}
#if (empty($_SESSION["username"])) {
	#header("location: login.html");
#}
$uname = $_SESSION["username"];

$query = "SELECT idhash FROM $usertablename WHERE username = '$uname'";
$result = $conn->query($query);
$row = $result->fetch_array(MYSQLI_ASSOC);

echo "Stream Key/Playpath: untz?user=" . $row["idhash"] . "<br>";
echo "<br><a href=$baseurl/profile.php>Go back</a>";
?>

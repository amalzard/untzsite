<?php
require_once('./includes/dbconnect.php');

$usertablename = 'users';

session_start();
if ($conn->connect_errno) {
        die('Could not connect: ' . $conn->connect_error);
}

#if (empty($_SESSION["username"])) {
	#header("location: login.html");
#}

$uname = $_SESSION["username"];

$newhash = uniqid();
$query = "UPDATE users SET idhash='$newhash' WHERE username='$uname'";
$conn->query($query);

echo "Stream Key/Playpath: " . $newhash . "<br>";
echo "<br><a href=$baseurl/profile.php>Go back</a>";
?>

<?php
require_once('./includes/dbconnect.php');
$baseurl = "http://untz.xen.prgmr.com";


if ($conn->connect_errno) {
        die('Could not connect: ' . $conn->connect_error);
}

if (empty($_POST["username"]) || empty($_POST["password"])) {
	echo "Empty required field";
	echo "<br><a href=$baseurl/login.html>Go back</a>";
	die();
}

$username = mysqli_real_escape_string($conn, $_POST["username"]);
$password = hash('sha256', $_POST["password"]);

$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($query);
if (mysqli_num_rows($result) == 1) {
	session_start();
	$_SESSION["username"] = $username;
	header("location: profile.php");
}
else {
	echo "Invalid username/password combination";
	echo "<br><a href=$baseurl/pizzalogin.html>Go back</a>";
	die();
}
?>

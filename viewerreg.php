<?php
include "accounttabledetails.php";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_errno) {
	die('Could not connect: ' . $conn->connect_error);
}
if (empty($_POST["username"]) || empty($_POST["email"]) || empty($_POST["password"])) {
	echo "Empty required field";
	echo "<br><a href=$baseurl/viewerregister.html>Go back</a>";
	die();
}
$username = mysqli_real_escape_string($conn, $_POST["username"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$password = hash('sha256', $_POST["password"]);	
if (strlen($username) > 64) {
	echo "Username too long";
	echo "<br><a href=$baseurl/viewerregister.html>Go back</a>";
	die();
}
if (strlen($email) > 64) {
	echo "Email too long";
	echo "<br><a href=$baseurl/viewerregister.html>Go back</a>";
	die();
}
$namequery = "SELECT username FROM $usertablename WHERE username = '$username'";
$emailquery = "SELECT email FROM $usertablename WHERE email = '$email'";
$nameresult = $conn->query($namequery);
$emailresult = $conn->query($emailquery);
if (mysqli_num_rows($nameresult) >= 1) {
	echo "Duplicate username";
	echo "<br><a href=$baseurl/viewerregister.html>Go back</a>";
	die();
}
if (mysqli_num_rows($emailresult) >=1) {
	echo "Duplicate email";
	echo "<br><a href=$baseurl/viewerregister.html>Go back</a>";
	die();
}
$query = "INSERT INTO $usertablename (username, email, password, reg_date) VALUES ('$username', '$email', '$password', 'CURRENT_TIMESTAMP')";
$conn->query($query);
echo "Account Created";
echo "<br><a href=$baseurl/index.php>Main page</a>";
die();

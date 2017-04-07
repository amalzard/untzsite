<?php
require_once ('./includes/dbconnect.php');

session_start();
if ($conn->connect_errno) {
        die('Could not connect: ' . $conn->connect_error);
}

if (empty($_SESSION["username"])) {
	header("location: login.html");
}
?>
<html>
<head>
<title>Untz User Profile</title>
</head>
<body>
Hi, <?php echo $_SESSION["username"];?><br>
<br><a href=<?php echo $baseurl;?>/showhash.php>Show your Stream Key/Playpath</a><br>
<br><a href=<?php echo $baseurl;?>/resethash.php>Reset your Stream Key/Playpath</a><br>
<br>Change your password:<br>
<form action="changepass.php" method="post">
Old password: <input type="password" name="oldpass"><br>
New password: <input type="password" name="newpass"><br>
<input type="submit">
</form>
<a href=<?php echo $baseurl;?>/logout.php>Logout</a><br>
</body>
</html>

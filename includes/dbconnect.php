<?php
function db_connect() {

	static $conn;

	if(!isset($conn)) {
		$config = parse_ini_file('../private/config.ini');
		$conn = mysqli_connect($config['host'],$config['username'],$config['password'],$config['dbname']);
	}

	if($conn === false) {
		return mysql_connect_error();
	}
	return $conn;
}

$conn = db_connect();

if($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
?>

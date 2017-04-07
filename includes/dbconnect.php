<?php
function db_connect() {

	static $connection;

	if(!isset($connection)) {
		$config = parse_ini_file('../private/config.ini');
		$connection = mysql_connect($config['servername'],$config['username'],$config['password'],$config['dbname']);
	}

	if($connection === false) {
		return mysql_connect_error();
	}
	return $connection;
}

$connection = db_connnect();

if($connection->connect_error) {
	die("Connection failed: " . $connection->connect_error);
}
?>

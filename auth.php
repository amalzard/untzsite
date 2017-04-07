<?php
require_once('./includes/dbconnect.php');



if(empty($_GET['user']))

   {

    //no querystrings or wrong syntax

    echo "wrong query input";

    header('HTTP/1.0 404 Not Found');

    exit(1);

   }


else

   {

    //querystring exist

    $testusername = $_GET['user'];

    $_SESSION["streamerID"] = $_GET['user'];

    $query = "SELECT idhash FROM $usertablename WHERE idhash = '$testusername'";
    $result = $conn->query($query);



   }





//check pass and user string

if (strcmp($testusername,$result)==0 )

      {
	$setstreamer = "UPDATE users SET currentstreamer='0'";
	$conn->query($setstreamer);
	
	$url = "http://untz.xen.prgmr.com/stat.xml";

	if($xml->server->application->live->stream->name == 'untz') {
	if($xml->server->application->live->stream->active) {
	
	}
	}
	elseif($xml->server->application->live->stream->name == 'game') {
	if($xml->server->application->live->stream->active) {
	$setstreamer = "UPDATE users SET currentstreamer='1' WHERE idhash = '$testusername'";
	$conn->query($setstreamer);
	}
	}
	else {
	$setstreamer = "UPDATE users SET currentstreamer='1' WHERE idhash = '$testusername'";
	$conn->query($setstreamer);
	}

	echo "Password and Username OK! ";
	$conn->close();

	}


else

      {

	echo "password or username wrong! ";

	header('HTTP/1.0 404 Not Found');

        }



?>

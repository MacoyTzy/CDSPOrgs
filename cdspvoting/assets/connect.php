<?php 

	$host = "localhost";
	$username = "id16665184_ocram";
	$password = "Akosimarcs23.";
	$db_name = "id16665184_db_evoting";

	$con = mysqli_connect($host, $username, $password, $db_name);

	if(!$con) {
		die("Cannot connect to the database");
	}

?>
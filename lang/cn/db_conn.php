<?php
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$db_name = 'sbh_tcm';

	$conn = mysqli_connect($hostname, $username, $password, $db_name);
	mysqli_set_charset($conn, "utf8");

	//check connection
	if(mysqli_connect_errno()){
		echo "unable to connect to MySQL";
	}
?>
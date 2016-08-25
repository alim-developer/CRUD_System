<?php

	$db_host = 'localhost';
	$db_username = 'root';
	$db_password = '';
	$db_name = 'student';

	$db_connection = mysqli_connect($db_host, $db_username, $db_password, $db_name);

	if(!$db_connection){
		echo 'Database qosulmadi';
	}


?>
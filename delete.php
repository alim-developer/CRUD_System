<?php
	//islemir
	$id = $_GET['id'];
	include 'config.php';
	$sql = "DELETE FROM list_student WHERE id=".$id;
	$query = mysqli_query($db_connection, $sql);

	if($query){
	header("Location: index.php");
	}else{
	echo "Data silinmedi";
	}

?>
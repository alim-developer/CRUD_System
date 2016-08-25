<?php

		include 'config.php';
		$id = $_GET['id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$number = $_POST['numbr'];

		$sql = "UPDATE list_student SET name='$name',email='$email',numb='$number' WHERE id=".$id;
		$query = mysqli_connect($db_connection, $sql);

		if($query){
			header('Location: index.php');
		}else{
			echo 'Update olunan zaman problemle qarsilasildi';
		}
	


?>
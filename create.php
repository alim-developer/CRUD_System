<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		form{
			width: 500px;
			margin: 50px auto;
		}
		input{
			background-color: white;
			border: 1px solid red;
			border-radius: 2px;
			text-indent: 7px;
			padding: 2px 0;
			float:right;

		}

		span{
			color: darkred;
		}
		div{
			margin: 10px 0;
		}
		clearFix{
			clear:both;
		}
	</style>
</head>
<body>
	
	<form action="create.php" method="POST">
	<h2>Create a Customer</h2>
	<div>
		<span>Name:</span>
		<input type="text" name="name" placeholder="Ad">
	</div>
	<div>
		<span>Email Address:</span>
		<input type="email" name="email" placeholder="Email Address">
	</div>
	<div>
		<span>Mobile Number:</span>
		<input type="number" name="numb" placeholder="Mobile Number">
	</div>
		<input type="submit" name="create" value="Create">
		<input type="submit" name="back" value="Back">
		

	</form>

	
	<?php

		if(isset($_POST['create'])){
			include 'config.php';
			$name = $_POST["name"];
			$email = $_POST["email"];
			$numb = $_POST["numb"];


			$sql = "INSERT INTO list_student(name,email,numb) VALUES ('$name','$email','$numb')";

			$query = mysqli_query($db_connection,$sql);

			if($query){
				header('Location: index.php');

			}else{
				echo 'Gonderilmedi';
			}


		}

		if(isset($_POST['back'])){
			header('Location: index.php');
		}

	?>
</body>
</html>
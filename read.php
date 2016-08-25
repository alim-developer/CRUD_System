<!DOCTYPE html>
<html>
<head>
	<title>Read</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">

		#read{
			width: 400px;
			margin: 0 auto;
		}
		#read h2{
			margin: 100px 0 20px 0;
		}
		div{
			width: 100%;
		}
		p{
			font-size: 20px;
		}
		div p:nth-child(2){
			float: right;
			color:red;
			text-decoration: underline;
			cursor: pointer;
		}
		p{
			display: inline-block;
		}
	</style>
</head>
<body>


	<?php 
		include 'config.php';
		$id = $_GET['id'];
		$sql = "SELECT * FROM list_student WHERE id=$id";
		$query = mysqli_query($db_connection, $sql);
		while($row = mysqli_fetch_assoc($query)){
	?>
	 	<section id="read">
	 		<h2>Read a Customer</h2>
		 	<div>
		 		<p>Name:&nbsp; </p><p><?=$row['name'];?></p>
		 	</div>
		 	<div>
		 		<p>Email Address:&nbsp; </p><p><?=$row['email'];?></p>
		 	</div>
		 	<div>
		 		<p>Mobile Number:&nbsp;</p><p><?=$row['numb'];?></p>
		 	</div>
		 	<div>
		 		<a class="btn btn-default pull-right" href="index.php">Back</a>
		 	</div>
	 	</section>

	 	<?php } ?>

</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<style type="text/css">
			#update{
				width: 500px;
				margin: 0 auto;
			}
			#update h2{
				margin: 70px 0 20px 0;
			}
		</style>
	</head>
	<body>
		<section id="update">
			<h2>Update a Customer</h2>
			<form class="form-horizontal" action="" method="POST">
				<div class="form-group">
					<label class="col-sm-2 control-label">Name</label>
					<div class="col-sm-10">
						<input type="text" name="name" class="form-control" placeholder="Name">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" name="email" class="form-control"  placeholder="Email Address">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Number</label>
					<div class="col-sm-10">
						<input type="number" name="numbr" class="form-control" placeholder="Mobile Number">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" name="submit" class="btn btn-success">Update</button>
						<a class="btn btn-default" href="index.php">Back</a>
					</div>
				</div>
			</form>
		</section>

		<?php
			if(isset($_POST['submit'])){
				include 'config.php';
				$id = $_GET['id'];
				$name = $_POST['name'];
				$email = $_POST['email'];
				$number = $_POST['numbr'];

				$sql = "UPDATE list_student SET name='$name',email='$email',numb='$number' WHERE id=".$id;
				$query = mysqli_query($db_connection, $sql);

				if($query){
					header('Location: index.php');
				}else{
					echo 'Update olunan zaman problemle qarsilasildi';
				}
			}
		?>
	</body>
</html>
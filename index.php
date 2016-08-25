<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">
		#main{
			margin: 0 auto;
			width: 500px;

		}
		th{
			border: 1px solid lightgray;
			padding: 5px 10px;
			
		}
		
		td{
			border: 1px solid lightgray;
			padding: 3px 5px;
		}
		input[name="create"]{
			background-color: white;
			border: 1px solid red;
			border-radius: 2px;
			padding: 3px 5px;
			margin: 10px 0;
		}
		input[name="read"], input[name="update"], input[name="delete"]{
			background-color: white;
			border: 1px solid red;
			border-radius: 2px;
			padding: 3px 5px;	

		}
	</style>
</head>
<body>

	<section id="main">
		<h2>PHP CRUD Grid</h2>
		<form action="create.php">
			<input type="submit" name="create" value="Create">
		</form>
		<table>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email Address</th>
				<th>Mobile Number</th>
				<th></th>
				<th>Action</th>
				<th></th>
			</tr>
			<?php
			include 'config.php';
			if($db_connection){
				$sql = "SELECT * FROM list_student";
				$query = mysqli_query($db_connection, $sql);

				
				while($row = mysqli_fetch_assoc($query)){ ?>
					<tr>

					<?php
					foreach ($row as $key => $value) { 

						echo "<td>";
						echo $value;
						echo "</td>";

					}
					?>

						<td><a class="btn btn-default" href="read.php?id=<?=$row['id'];?>">Read</a></td>
						<td><a class="btn btn-success" href="update.php?id=<?=$row['id'];?>">Update</a></td>
						<td><a class="btn btn-danger" href="delete.php?id=<?=$row['id'];?>">Delete</a></td>
					</tr>
			
			<?php
				}			
			}else{
				echo 'Elaqe kesildi';
			}
			if(isset($_POST['read'])){
				header('Location: read.php');
			}

		?>
				
		</table>
	</section>

	


</body>
</html>
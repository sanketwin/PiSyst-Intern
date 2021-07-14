<html>
<head>
	<title>Update User Data</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<style type="text/css" media="screen">
		.center {
		  margin-left: auto;
		  margin-right: auto;
		}
	</style>
</head>

<body>
<a href="index.php" class="m-3 btn btn-primary">Home</a>
	<br/><br/>
	<div class="m-5 text-center shadow card">
		<div class="card-header">
			    Add New User
		</div>
		<div class="p-5 card-body">
			<form action="add.php" method="post" name="form1">
				<table width="25%" border="0" class="center">
					<tr>
						<td>Name</td>
						<td><input type="text" class="m-1 form-control" name="name"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="text" class="m-1 form-control" name="email"></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><input type="text" class="m-1 form-control" name="address"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" class="m-1 form-control" name="password"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" class="btn btn-success" name="Submit" value="Add"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	<?php
		if(isset($_POST['Submit']))
		{
			$name = $_POST['name'];
			$email = $_POST['email'];
			$address = $_POST['address'];
			$password = $_POST['password'];
			
			// Include database connection file
			include_once('config.php');

			// Insert user into database
			$data = Array(
				"name" => $name,
				"email" => $email,	
				"address" => $address,	
				"password" => $password,	
			);
			$db -> insert('users',$data);
			echo "<script>
			Swal.fire({
				title: 'Done !',
				icon:'success',
				text: 'User Added Successfully!',
				})
		</script>";
			// Show message when user added
			echo "User added successfully. <a href='index.php'>View Users</a>";
			
		}
	?>

</body>
</html>
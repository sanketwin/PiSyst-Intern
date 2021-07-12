<html>
<head>
	<title>Add Users</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
	<style type="text/css" media="screen">
		.center {
		  margin-left: auto;
		  margin-right: auto;
		}
	</style>
</head>

<body>
	<a href="index.php" class="btn btn-primary m-3">Home</a>
	<br/><br/>
	<div class="card shadow text-center m-5">
		<div class="card-header">
			    Add New User
		</div>
		<div class="card-body p-5">
			<form action="add.php" method="post" name="form1">
				<table width="25%" border="0" class="center">
					<tr>
						<td>Name</td>
						<td><input type="text" class="form-control m-1" name="name"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="text" class="form-control m-1" name="email"></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><input type="text" class="form-control m-1" name="address"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" class="form-control m-1" name="password"></td>
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

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$password = $_POST['password'];

		// include database connection file
		include_once("config.php");

		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO phpuser(name,email,address,password) VALUES('$name','$email','$address','$password')");

		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>
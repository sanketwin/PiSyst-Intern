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
						<td><input type="submit" id="#add" class="btn btn-success" name="Submit" value="Add"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	<script src="jquery-3.6.0.min.js"></script>
	<script src="sweetalert2.all.min.js"></script>
	
	<script>
		$(`#add`).on('click',function() {
			Swal.fire({
				type: 'success',
				title: 'Done !',
				text: 'User Added Successfully !'
			});
		});
	</script>

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
<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$name=$_POST['name'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$address=$_POST['address'];

	// update user data
	$result = mysqli_query($mysqli, "UPDATE phpuser SET name='$name',email='$email',address='$address', password='$password' WHERE id=$id");

	if ($result) {
		$_SESSION['status'] = "User updated successfully";
		$_SESSION['status_code'] = "success";
		// Redirect to homepage to display updated user in list
		header("Location: index.php");
	}
	
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM phpuser WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$email = $user_data['email'];
	$address = $user_data['address'];
	$password = $user_data['password'];
}
?>
<html>
<head>
	<title>Update User Data</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script>
		swal("Good job!", "You clicked the button!", "success");
	</script>
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
			    Update User Information
		</div>
		<div class="p-5 card-body">
			<form name="update_user" method="post" action="update.php">
				<table border="0" class="center">
					<tr>
						<td>Name</td>
						<td><input type="text" name="name" class="m-1 form-control" value="<?php echo $name;?>"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="text" name="email" class="m-1 form-control" value=<?php echo $email;?>></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><input type="text" name="address" class="m-1 form-control" value="<?php echo $address;?>"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="text" name="password" class="m-1 form-control" value="<?php echo $password;?>"></td>
					</tr>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" class="btn btn-success" name="update" value="Update"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html>
<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update

?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$db->where('id', $id);
$users = $db->get('users');

foreach ($users as $user) {
    $name = $user['name'];
    $email = $user['email'];
    $address = $user['address'];
    $password = $user['password'];

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
	<?php
		if(isset($_POST['update']))
		{
			$id = $_POST['id'];
			$name=$_POST['name'];
			$password=$_POST['password'];
			$email=$_POST['email'];
			$address=$_POST['address'];
			// // update user data
			$data = Array(
                'name' => $name,
                'email' => $email,
                'address' => $address,
                'password' => $password,
            );
            $db->where('id',$id);
            $db->update('users',$data);
            
			header("Location:index.php");
		}
	?>
</body>
</html>
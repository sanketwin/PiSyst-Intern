<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">CODE IGNITER 3</a>
        </div>
    </div>
    <div class="m-5 containter">
        <h3>Create User</h3>
        <form name="createUser" method="POST" action="<?php echo base_url().'welcome/create'; ?>">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="<?php echo set_value('name');?>" class="mb-3 form-control">
                        <?php echo form_error('name');?>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="<?php echo set_value('email');?>" class="mb-3 form-control">
                        <?php echo form_error('email');?>

                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" value="<?php echo set_value('address');?>" class="mb-3 form-control">
                        <?php echo form_error('address');?>

                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" value="<?php echo set_value('password');?>" class="mb-3 form-control">
                        <?php echo form_error('password');?>

                    </div>
                    <div class="form-group">
                        <!-- <button class="btn btn-primary">Add User</button> -->
                        <input type="submit" class="btn btn-success" name="Submit">
                        <a href="<?php echo base_url().'welcome/index';?>" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- <?php
		if(isset($_POST['Submit']))
		{
			echo "<script>
			Swal.fire({
				title: 'Done !',
				icon:'success',
				text: 'User Added Successfully!',
				})
		</script>";
			// // Show message when user added
			// echo "User added successfully. <a href='index.php'>View Users</a>";	
		}
	?> -->
</body>
</html>
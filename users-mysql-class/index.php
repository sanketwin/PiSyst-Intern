<?php
    // Including database connection
    include_once('config.php');
?>

<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
<a href="add.php" class="btn btn-success p-2 m-3 " style="float: right;">Add New User</a><br/><br/>
    <div class="card shadow m-5">
        <div class="card-body">
            
            <table id="#dTable" width='100%' border=1 class="table table-striped" >
            <tr>
                <th>Name</th> <th>Email</th> <th>Address</th> <th>Action</th>
            </tr>
            <?php
                // Fetch all the users from database
                $users = $db->get ("users");
                    foreach ($users as $user) { 
                        echo "<tr>";
                        echo "<td>".$user['name']."</td>";
                        echo "<td>".$user['email']."</td>";
                        echo "<td>".$user['address']."</td>";
                        
                        echo "<td><a href='update.php?id=$user[id]' class='btn btn-success btn-sm updatebtn'>Update</a>  <a href='delete.php?id=$user[id]' class='btn btn-danger btn-sm'>Delete</a></td></tr>";
                    }    
            ?>
            </table>
        </div>
    </div>
 <script>
     $('.btn-danger').on('click', function (event) {
        event.preventDefault();
        const url = $(this).attr('href');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then(function(value) {
            if (value.isConfirmed) {
                window.location.href = url;
                Swal.fire(
                'Deleted!',
                'User has been deleted.',
                'success',
                )
            }
        });
});
 </script>
</body>
</html>
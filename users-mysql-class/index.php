<?php
    // Including database connection
    include_once('config.php');
?>

<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
</head>
<body>
<a href="add.php" class="btn btn-success p-2 m-3 " style="float: right;">Add New User</a><br/><br/>
<div class="card shadow m-5">
    <div class="card-body">
    <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th> 
                        <th>Email</th> 
                        <th>Address</th> 
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
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
                </tbody>
            </div>
        </div>
    </table>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
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
<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM phpuser ORDER BY id DESC");
?>

<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script>
        
    </script>
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

            while($user_data = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$user_data['name']."</td>";
                echo "<td>".$user_data['email']."</td>";
                echo "<td>".$user_data['address']."</td>";
                echo "<td><a href='update.php?id=$user_data[id]' class='btn btn-success btn-sm'>Update</a>  <a href='delete.php?id=$user_data[id]' class='btn btn-danger btn-sm'>Delete</a></td></tr>";
            }
            ?>
            </table>
        </div>
    </div>

</body>
</html>
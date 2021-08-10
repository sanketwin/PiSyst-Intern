<?php include 'upload.php';
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($con, "SELECT * FROM files ORDER BY id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <title>File Upload</title>
    <style>
        form{
            display:flex;
        }
    </style>
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <input type="file" class="form-control" name="file"/>
                <button type="submit" class="btn btn-primary" name="save">Upload</button>
            </form>
        </div>
        <div class="row">
            <div class="card shadow mt-5">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>File Name</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    while($user_data = mysqli_fetch_array($result)) {?>
                        <tr>
                            <td><?php echo$user_data['id'];?></td>
                            <td><?php echo$user_data['file'];?></td>
                            <td><a href="uploads/<?php echo $user_data['file']; ?>" target="_blank">View</a></td>
                        </tr>
                   <?php }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">CODE IGNITER 3</a>
        </div>
    </div>
    <div class="containter m-5">
        <h3>Dashboard</h3>
        <div class="card shadow">
            <div class="card-content">
                <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    <?php if(!empty($users)){ foreach($users as $user) {?>
                        <tr>
                            <td><?php echo $user['id']?></td>
                            <td><?php echo $user['name']?></td>
                            <td><?php echo $user['email']?></td>
                            <td><?php echo $user['address']?></td>
                            <td>
                                <a href="" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } } else { ?>
                        <tr>
                            <td colspan="5">Records not found</td>
                        </tr>
                    <?php }?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
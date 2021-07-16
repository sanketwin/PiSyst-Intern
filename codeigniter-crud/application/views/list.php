<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <title>Dashboard</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dashboard').DataTable();
        } );
    </script>

</head>
<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">CODE IGNITER 3</a>
        </div>
    </div>
    <div class="m-5 containter">
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Dashboard</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="<?php echo base_url().'welcome/create';?>" class="btn btn-success" style="float:right;">Create User</a>
                    </div>
                </div>
            <div class="mt-2 shadow card">
            <div class="p-3 card-content">
                <table id="dashboard" class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                    <?php if(!empty($users)){ foreach($users as $user) {?>
                        <tr>
                            <td><?php echo $user['id']?></td>
                            <td><?php echo $user['name']?></td>
                            <td><?php echo $user['email']?></td>
                            <td><?php echo $user['address']?></td>
                            <td width="70">
                                <a href="<?php echo base_url().'welcome/edit/'.$user['id']?>" class="btn btn-primary btn-sm">Update</a>
                            </td>
                            <td width="100">
                                <a href="<?php echo base_url().'welcome/delete/'.$user['id']?>" class="btn btn-danger btn-sm">Delete</a>
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
            </div>
        </div>
</body>
</html>
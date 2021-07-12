<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
    <button class="del-btn">Click Me</button>
    <script>
        $('.del-btn').on('click',function(e){
            e.preventDefault();
            Swal.fire({
                type: 'success',
                title: 'Are you sure to delete?',
                text: "You won't be able to revert this!",
                })
         })
    </script>
</body>
</html>
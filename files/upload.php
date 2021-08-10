<?php
// connect to the database
include_once("config.php");

// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['file']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['file']['tmp_name'];


    if (!in_array($extension, ['zip', 'pdf'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (file) VALUES ('$filename')";
            if (mysqli_query($con, $sql)) {
                header("Location: index.php");
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}
<?php
    // Include database connection file
    include_once('config.php');

    // Get id from database
    $id = $_GET['id'];

    $db->where('id', $id);
    $db->delete('users');


    // Show message when user added
    header("Location:index.php");
?>
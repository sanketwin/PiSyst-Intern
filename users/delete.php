<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user from database 
$result = mysqli_query($mysqli, "DELETE FROM phpuser WHERE id=$id");
// Show message when user added
header("Location:index.php");

?>
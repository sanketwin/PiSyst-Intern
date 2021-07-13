<?php
/**
 * using mysqli_connect for database connection
 */
$databaseHost = 'localhost';
$databaseName = 'sanket';
$databaseUsername = 'root';
$databasePassword = 'root';

$con = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
?>
<?php
session_start();
/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'localhost';
$databaseName = 'sanket';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
?>
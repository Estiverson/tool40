<?php

$databaseHost = 'localhost';
$databaseName = 'tool40';
$databaseUsername = 'tool';
$databasePassword = 'tool';
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

if($mysqli === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
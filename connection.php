<?php

$serverName = 'localhost';
$dbUserName = 'root';
$dbPasswordName = '';
$dbName = 'busticket_database';


$connection = mysqli_connect($serverName, $dbUserName , $dbPasswordName,$dbName);

if (!$connection) {
    die("connection failed : " . mysqli_connect_error());
}



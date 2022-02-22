<?php 
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'itadmin';

    $conn = mysqli_connect($server, $username, $password, $dbname);

    if(!$conn){

        echo "No any database is connected.";
    }
 ?>
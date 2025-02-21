<?php 
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "loginsystem";


    $conn = mysqli_connect($server, $username, $password, $database);
    
    if (!$conn ) {
        die("connection Failed:". mysqli_connect_error());
    }

?>
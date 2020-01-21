<?php
    $host = "localhost";
    $user = "root";
    $password = "12345678";
    $dbname = "practicandopi";
    $conn = mysqli_connect($host, $user, $password, $dbname);

    /*Si la conexion es erronea*/
    if (!$conn) {
        die("error in connection");
    }

    
?>
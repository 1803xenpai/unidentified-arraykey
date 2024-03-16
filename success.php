<?php
    $servername = "localhost";
    $username = "root";
    $password = "admin";
    $db_name = "gytg";

    $conn = mysqli_connect($servername,$username,$password,$db_name);

    if ($conn->connect_error)
    {
        die("Connection failed ".$conn->connect_error);
    }
?>
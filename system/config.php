<?php 
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "bagus_db";
    
    $conn = mysqli_connect($server, $user, $pass, $database);
    
    if (!$conn) {
        die("<script>alert('Failed Connect Databases')</script>");
    }

?>
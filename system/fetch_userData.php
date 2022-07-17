<?php
    include_once("config.php");
 
    $dataResult = mysqli_query($conn, "SELECT * FROM user ORDER BY id ASC");
?>
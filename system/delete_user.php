<?php
include('config.php');
$id = $_GET['id'];
$query = "DELETE FROM user WHERE id = '$id'";

if($conn->query($query)) {
    header("location: ../");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>
<?php
    include('config.php');

    $id       = $_POST['id'];
    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $pass = isset($_POST['password']) ? md5($_POST['password']) : null;

    $query = "UPDATE user SET name = '$name', email = '$email', WHERE id = '$id'";

    if ($pass) {
        $query = "UPDATE user SET name = '$name', email = '$email', pass = '$pass' WHERE id = '$id'";
    }

    if($conn->query($query)) {
        header("location: ../");
    } else {
        echo "<script>alert('Data Gagal Disimpan!')</script>";
    }
?>
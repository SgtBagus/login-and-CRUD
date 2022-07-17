<?php
    include('config.php');
    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $password   = md5($_POST['password']);

    $query = "INSERT INTO user (name, email, pass, created_at, updated_at) VALUES ('$name', '$email', '$password', now(), now())";

    if($conn->query($query)) {
        header("location: ../");
    } else {
        echo "<script>alert('Data Gagal Disimpan!')</script>";
    }
?>
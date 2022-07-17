<?php
    include('config.php');
    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $password   = md5($_POST['password']);
    $login_func = isset($_POST['login_func'][1]) ? 1 : 0;

    $query = "INSERT INTO user (name, email, pass, login_func, created_at, updated_at) VALUES ('$name', '$email', '$password', '$login_func', now(), now())";

    if($conn->query($query)) {
        header("location: ./");
    } else {
        echo "<script>alert('Data Gagal Disimpan!')</script>";
        header("location: ../../userForm.php");
    }
?>
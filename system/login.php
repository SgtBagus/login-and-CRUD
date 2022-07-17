<?php    
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $pass = md5($_POST['pass']);
    
        $sql = "SELECT * FROM user WHERE email='$email' AND pass='$pass'";
        $result = mysqli_query($conn, $sql);
        if ($result !== false && $result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['name'] = $row['name'];
            header("Location: ./");
        } else {
            echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
        }
    }
?>
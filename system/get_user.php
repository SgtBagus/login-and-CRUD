<?php 
  include('config.php');
  $id = $_GET['id'];

  $sql = "SELECT * FROM user WHERE id = $id";

  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
?>
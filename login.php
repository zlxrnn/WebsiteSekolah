<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$cek = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
if(mysqli_num_rows($cek) > 0){
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
}else{
    echo "<script>alert('Username atau password salah');window.location='index.php';</script>";
}
?>

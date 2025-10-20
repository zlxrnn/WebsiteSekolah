<?php
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM guru WHERE id='$id'");
header("location: ./teacher.php");
?>
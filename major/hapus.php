<?php
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM jurusan WHERE id='$id'");
header("location: ./major.php");
?>
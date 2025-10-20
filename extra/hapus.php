<?php
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM ekstra WHERE id='$id'");
header("location: ./extra.php");
?>
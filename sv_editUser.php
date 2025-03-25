<?php
// Memanggil file pustaka fungsi
require "fungsi.php";

// Memindahkan data kiriman dari form ke variabel biasa
$iduser = $_POST["iduser"];
$username = $_POST["username"];
$status = $_POST["status"];

// Membuat query update
$sql = "UPDATE user SET username='$username', status='$status' WHERE iduser='$iduser'";

mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
header("location:ajaxupdateUser.php");

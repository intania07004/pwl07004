<?php
// Memanggil file pustaka fungsi
require "fungsi.php";

// Memindahkan data kiriman dari form ke variabel biasa
$iduser = $_GET["kode"];

// Mengambil data user berdasarkan ID
$sql = $koneksi->query("SELECT * FROM user WHERE iduser='$iduser'");
$data = $sql->fetch_assoc();

// Membuat query hapus data
$sql = "DELETE FROM user WHERE iduser='$iduser'";
mysqli_query($koneksi, $sql);

// Redirect kembali ke halaman daftar user
header("location:ajaxUpdateUser.php");

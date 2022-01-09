<?php
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$semester = $_POST['semester'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
 
// menginput data ke database
mysqli_query($db,"insert into mahasiswa values('$nama','$nim','$semester','$jurusan','$alamat')");
 
// mengalihkan halaman kembali ke index.php
header("location:tampil.php");

?>
<?php
//koneksi daatabse 
include 'koneksi.php';

//menangkap data dari yang dikrim form 
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

//input data ke database
mysqli_query($koneksi,"insert into mahasiswa values('','$nim','$nama','$jurusan','$alamat')");


//kembali kehalaman indek
header("location:mahasiswa.php");

?>

<?php

include 'koneksi.php';

$nim = $_GET['nim'];


mysqli_query($koneksi,"delete from mahasiswa where nim='$nim'");

header("location:mahasiswa.php");


?>
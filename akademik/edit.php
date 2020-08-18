<!DOCTYPE html>
<html>
<head>
	<title>Halaman Edit</title>
</head>
<body>
	<br/>
	<br/>
	<a href="mahasiswa.php">KEMBALI</a>
	<br/>
	<br/>
	<h2>Edit Data Mahasiswa</h2>
<?php
include 'koneksi.php';
$id = $_GET['nim'];
$data = mysqli_query($koneksi,"select * from mahasiswa where nim='$id'");
while($d = mysqli_fetch_array($data)){
	?>
	<form method = "post" action ="update.php">
		<table>
			<tr>
				<td>Nim</td>
				<td>
					<input type="hidden" name="nim" value="<?php echo $d['nim']; ?>">
					<input type="number" name="nim" value="<?php echo $d['nim'];?>">

				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>
					<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
				</td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>
					<input type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>
					<input type="text" name="alamat" value="<?php echo $d['alamat']; ?>">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value ="SIMPAN"> </td>
			</tr>

		</table>
	</form>
	<?php
}
?>

</body>
</html>
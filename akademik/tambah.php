<!DOCTYPE html>
<html>
<head>
	<title>Halaman Tambah</title>
</head>
<body>
	<br/>
	<br/>
	<a href="mahasiswa.php">KEMBALI</a>
	<br/>
	<br/>
	<h2>Tambah Data Mahasiswa</h2>
	<form method="post" action ="koneksitambah.php">
		<table cellpadding="10" cellspacing="0">
			<tr>
				<td>Nim</td>
				<td><input type="number" name ="nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name ="nama"></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td><input type="text" name ="jurusan"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name ="alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value ="SIMPAN"></td>
			</tr>

		</table>
	</form>

</body>
</html>
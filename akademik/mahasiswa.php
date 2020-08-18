

<html>
<head>
	<title>Halaman Admin </title>

</head>
<body>

<h1>Daftar Mahasiswa</h1>
<br/>
<br/>

<table border="1" cellpadding="10" cellspacing="0">

	<tr> 
		<th>No</th>
		<th>Nim</th>
		<th>Nama</th>
		<th>Jurusan</th>
		<th>Alamat</th>
		<th>Opsi</th>

	</tr>
	<?php
	include 'koneksi.php';
	$no = 1;
	$data = mysqli_query($koneksi, "select * from mahasiswa");
	while($d = mysqli_fetch_array($data)){
		?>

		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['nim']; ?></td>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['jurusan']; ?></td>
			<td><?php echo $d['alamat']; ?></td>

			<td>  |
				<a href="edit.php?nim=<?php echo $d['nim']; ?>"> EDIT</a>	|
				<a href="hapus.php?nim=<?php echo $d['nim']; ?>"> HAPUS</a>

	
		</td>
		</tr>
		<?php

	}

		?>


</table>
<a href="tambah.php"> TAMBAH MAHASISWA</a>
</body>
</html>
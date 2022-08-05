<?php
include '../koneksi/koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulir Masukan Data Petugas</title>
</head>
<body>
	<header>
		<h3>Formulir Masukan Data Petugas</h3>
	</header>

<form action="../proses/proses.php" method="POST">
	<fieldset>
	
	<p>
		<label for="id"> Id Petugas: </label>
		<input type="text" name="id" />
	</p>
	<p>
		<label for="nama"> Nama Petugas: </label>
		<input type="text" name="nama" />
	</p>
	<p>
		<label for="gender">Jenis Kelamin: </label>
		<label><input type="radio" name="gender" value="L">L</label>
		<label><input type="radio" name="gender" value="P">P</label>
	</p>
	<p>
		<label for="jabatan">Jabatan: </label>
		<select name="jabatan">
			<option>Direktur</option>
			<option>Wakil Direktur</option>
			<option>Manager</option>
			<option>Kasir</option>
			<option>Sopir</option>
		</select>
	</p>
	<p>
		<label for="gaji">Gaji: </label>
		<input type="text" name="gaji">
	</p>
	<p>
		<button type="submit">TAMBAH</button> <a href="petugas.php"></a>
	</p>
</fieldset>
</form>
</body>
</html>


	</fieldset>
</form>
</body>
</html>
<br>

	<a href="../admin/petugas.php">Lihat Semua Data</a>

	<br/>
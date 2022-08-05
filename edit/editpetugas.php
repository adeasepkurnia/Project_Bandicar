<?php
include '../koneksi/koneksi.php';
//Ambil id dari query
$id 	=$_GET['id'];

//Buat query untuk ambil data dari database
$sql = "select * from Petugas where id_petugas ='$id'";
$query = mysqli_query($conn, $sql);
	while ($row = mysqli_fetch_array($query)) {
?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulir Edit Data</title>
</head>
<body>
<header>Formulir Edit Data Petugas</header>
<form method="post" action="../proses/prosesedit.php">
	<fieldset>
	
	<p>
		<label for="id"> Id Petugas: </label>
		<input type="hidden" name="id" value="<?php echo $row['id_petugas']?>" />
	</p>
	<p>
		<label for="nama"> Nama Petugas: </label>
		<input type="text" name="nama" value="<?php echo $row['nm_petugas']?>" required="required" />
	</p>
	<p>
		<label for="gender">Jenis Kelamin: </label>
		<?php $jk = $row['jk'];?>
		<label><input type="radio" name="gender" value="L" <?php echo ($jk == 'L') ? "checked": "" ?>>L</label>
		<label><input type="radio" name="gender" value="P" <?php echo ($jk == 'P') ? "checked": "" ?>>P</label>
	</p>
	<p>
		<label for="jabatan">Jabatan: </label>
		<?php $jabatan = $row['jabatan']; ?>
		<select name="jabatan">
			<option <?php echo ($jabatan == 'Direktur') ? "selected": "" ?>>Direktur</option>
			<option <?php echo ($jabatan == 'Wakil Direktur') ? "selected": "" ?>>Wakil Direktur</option>
			<option <?php echo ($jabatan == 'Manager') ? "selected": "" ?>>Manager</option>
			<option <?php echo ($jabatan == 'Kasir') ? "selected": "" ?>>Kasir</option>
			<option <?php echo ($jabatan == 'Sopir') ? "selected": "" ?>>Sopir</option>
		</select>
	</p>
	<p>
		<label for="gaji">Gaji: </label>
		<input type="text" name="gaji" value="<?php echo $row['gaji'] ?>" required="required" />
	</p>
	<p>
		<button type="submit">EDIT</button> <a href="petugas.php"></a>
	</p>
</fieldset>
	
		
	</form>
	</body>
</html>
	<?php
	}
	?>
<br/>

	<a href="../admin/petugas.php">Lihat Semua Data</a>

	<br/>
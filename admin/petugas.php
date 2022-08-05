<?php
include '../koneksi/koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Petugas</title>
	<link rel="stylesheet" type="text/css" href="../css/petugas.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<h3>Bendi Car</h3>
			<span>Admin: <i>Dimas Budi Pratama</i></span>
		</div>
		<div id="menu-wrap">
      <ul id="menu">
          <li>
          	<a href="#"> Petugas</a>
          </li>
          <li>
          	<a href="#"> Penyewa</a>
       	  </li>
          <li>
          	<a href="#"> Kendaraan</a>
          </li>
     	    <li>
     	  	  <a href="#"> Denda</a>
          </li>
          <li>
            <a href="#"> Peminjaman</a>
          </li>
            <li>
            <a href="#"> Pengembalian</a>
          </li>
      </ul>
    </div>
		<div class="content">
			<button type="submit" class="btn-success" onclick="location.href='../form/form.php'">TAMBAH</button>
			<table>
				<tr>
					<th>No</th>
					<th>ID PETUGAS</th>
					<th>NAMA</th>
					<th>SEX</th>
					<th>JABATAN</th>
					<th>GAJI</th>
					<th>OPSI</th>
				</tr>
				<?php 
					// Sql untuk menampilkan data
					$no = 1;
					$sql 	= "select * from Petugas";
					$query	= $conn -> query($sql);
						while ($row = mysqli_fetch_array($query)) {
				 ?>
		<tr>
			<td><?php echo $no++;?></td>
			<td><?php echo $row['id_petugas'] ?></td>
			<td><?php echo $row['nm_petugas'] ?></td>
			<td><?php echo $row['jk'] ?></td>
			<td><?php echo $row['jabatan'] ?></td>
			<td><?php echo $row['gaji'] ?></td>
			<td>
				<button type="submit" class="btn-warning" onclick="location.href='../edit/editpetugas.php?id=<?php echo $row['id_petugas']; ?>'">EDIT</button>
				<button type="submit" class="btn-danger" onclick="location.href='../delete/deletepetugas.php?id=<?php echo $row['id_petugas']; ?>'">DELETE</button>
			</td>
		</tr>
		<?php
					}
				 ?>
		</table>
		<p>Total: <?php echo mysqli_num_rows($query) ?></p>
	</div>
</div>
	
</body>
</html>


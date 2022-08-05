<?php
include "../koneksi/koneksi.php";

	// Ambil id dari query
	$id 	=$_GET['id'];

	// Buat query hapus
	$sql = "delete from Petugas where id_petugas='$id'";
	$query = mysqli_query($conn, $sql);

	//Apakah query berhasil dihapus
	if( $query ){
		echo "<script>alert('Data Berhasil DiHapus'); window.location = '../admin/petugas.php'; </script>";
		} else {
		echo "<script>alert('Data Gagal DiHapus'); window.location = '../admin/petugas.php'; </script>";

		} 
?>
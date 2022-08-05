<?php
include '../koneksi/koneksi.php';

//Ambil data dari query
$id 	= $_POST['id'];
$nm 	= $_POST['nama'];
$j_k	= $_POST['gender'];
$jab 	= $_POST['jabatan'];
$gj 	= $_POST['gaji'];

//Buat Query
$sql = "UPDATE Petugas set id_petugas='$id', nm_petugas='$nm', jk='$j_k', jabatan='$jab', gaji='$gj' where id_petugas='$id'";
$query = mysqli_query($conn, $sql);

//Apakah query disimpan berhasil?
if( $query ){
	//Kalau berhasil
			echo "<script>alert('Data Berhasil diperbarui'); window.location = '../admin/petugas';</script>";
			header('location: ../admin/menupetugas.php?status=sukses');
		} else {
			echo "<script>alert('Data Gagal diperbarui'); window.location = '../admin/petugas';</script>";
}
?>
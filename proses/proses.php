<?php
include "../koneksi/koneksi.php";

//Ambil data dari query
$id 	=$_POST['id'];
$nm 	=$_POST['nama'];
$j_k	=$_POST['gender'];
$jab 	=$_POST['jabatan'];
$gj 	=$_POST['gaji'];

//Buat Query
$sql = "INSERT INTO Petugas(id_petugas, nm_petugas, jk, jabatan, gaji)
VALUES ('$id','$nm', '$j_k', '$jab', '$gj')";
$query = mysqli_query($conn, $sql);

//Apakah query disimpan berhasil?
if( $query ){
	//Kalau berhasil
			header('location: ../admin/petugas.php?status=sukses');
		} else {
			// Kalau Gagal
			header('location: ../admin/petugas.php?status=gagal');
		}	

?>
<?php 
	include "../koneksi/koneksi.php";

	$sql	= "DELETE FROM petugas WHERE id_petugas = '$_GET[id]'";

	if ($koneksi -> query($sql) === TRUE) {
		echo "<script>window.alert('Deleted!'); location.href='../admin/home.php'</script>";
	} else {
		echo "Error: " . $sql . "<br>" . $koneksi -> error;
	}
 ?>
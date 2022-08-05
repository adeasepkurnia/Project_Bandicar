<?php
$servername = "localhost";
$username 	= "root";
$password 	= "";
$dbname 	= "dbbendicar_18753021";

//membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

if( !$conn){
	die("Gagal Terhubung dengan database: " . mysqli_connect_error());
}
?>
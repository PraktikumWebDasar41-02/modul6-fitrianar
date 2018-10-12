<?php
session_start();
	$koneksi = mysqli_connect('localhost','root','','jurnal');

	$pk = $_SESSION['pk'];

	$sql = "SELECT * FROM identitas WHERE NIM = '$pk' ";
	$query = mysqli_query($conn, $sql);

	echo "Nama : ".$hasil['Nama']."<br>";
	echo "NIM : ".$hasil['NIM']."<br>";
	echo "Kelas : ".$hasil['Kelas']."<br>";
	echo "Jenis Kelamini : ".$hasil['Jenis_Kelamin']."<br>";
	echo "Hobi : ".$hasil['Hobi']."<br>";
	echo "Fakultas : ".$hasil['Fakultas']."<br>";
	echo "Alamat : ".$hasil['Alamat']."<br>";

	session_destroy();
?>
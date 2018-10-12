<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
	<h1>REGISTASI</h1>
	<table>
		<form method="POST">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td>
					<input type="radio" name="kelas" value="01">01
					<input type="radio" name="kelas" value="02">02
					<input type="radio" name="kelas" value="03">03
					<input type="radio" name="kelas" value="04">04
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<input type="radio" name="jk" value="L">Laki-laki
					<input type="radio" name="jk" value="P">Perempuan
				</td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td>:</td>
				<td>
					<input type="checkbox" name="hobi" value="Membaca">Membaca
					<input type="checkbox" name="hobi" value="Menulis">Menulis
					<input type="checkbox" name="hobi" value="Menggambar">Menggambar
					<input type="checkbox" name="hobi" value="Melukis">Melukis
				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td>
					<select name="fak">
  						<option value="fit">FIT</option>FIT
  						<option value="fik">FIK</option>FIK
  						<option value="fkb">FKB</option>FKB
  						<option value="fkb">FEB</option>FEB
  						<option value="fkb">FRI</option>FRI
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name ="alamat"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="sumbmit"></td>
			</tr>
		</form>
	</table>
</center>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
	
	if(strlen($_POST['nama']<=35)){
		$namaa = $_POST['nama'];
	}
	else{
		echo "Nama tidak boleh lebih dari 35 karakter";
	}

	if(strlen($_POST['nim']==10 && is_numeric($_POST['nim']))){
		$nimm = $_POST['nim'];
	}
	else{
		echo "NIM harus 10 karakter";
	}

	$kelass = $_POST['kelas'];

	if(isset($_POST['jk'])){
		$jkk = $_POST['jk'];
	}

	$hobii = $_POST['hobi'];
	$fakk = $_POST['fak'];
	$alamatt = $_POST['alamat'];


session_start();
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$kelas = $_POST['kelas'];
$jk = $_POST['jk'];
$hobi = $_POST['hobi'];
$fak = $_POST['fak'];
$alamat = $_POST['alamat'];

$conn = mysqli_connect('localhost','root','','jurnal');
$sql = "INSERT INTO identitas values ('$nama', '$nim', '$kelas','$jk', '$hobi', '$fak', '$alamat') ";

if($sql){
	header("Location:login.php");
	}
	else{
		echo "Gagal";
	}
}
?>
<?php
$koneksi=mysqli_connect('localhost','root','','pedulidirii');

$nik       =$_POST['fnik'];
$nama   	=$_POST['fnama']; 

$queri=mysqli_query($koneksi," INSERT INTO user (nik,nama) VALUES ('$nik','$nama')");

if($queri){
	echo '<script>alert("Data berhasil disimpan. Terimakasih.")</script>';
	header("location:indek.html");
	exit;
} else {
	echo '<script>alert("Data GAGAL disimpan")</script>';
	header("location:yes.php");
	exit;
}


?>
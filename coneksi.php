<?php

$host="localhost";
$user="root";
$pass="";
$database="pedulidirii";

//proses koneksi 
$link=mysqli_connect($host,$user,$pass,$database);
$koneksi=mysqli_connect($host,$user,$pass,$database);

//periksa koneksi, jika gagal akan menampilkan pesan eror
if(!$link) {
    die ("koneksi dengan database gagal: ".mysql_connect_error());
}
?>
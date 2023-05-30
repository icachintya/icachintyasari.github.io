<?php
$nik  		= $_POST['nik'];
$nama       = $_POST['nama'];

$connect=mysqli_connect('localhost','root','','pedulidirii');


$user = mysqli_query($connect,"select * from user where 
nik='$nik' and nama='$nama'");
$chek = mysqli_num_rows($user);
if($chek>0)
{

    header("location:indek.html");
}else
{
    echo "<center>Username dan Password anda salah<br>";
    echo "Silahkan <a href=index.html> Login</a> kembali</center>";
}
?>
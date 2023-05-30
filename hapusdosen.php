<?php
//buka koneksi dengan MYSQL
    include("coneksi.php");

    // cek apakah di url ada GET idDosen
    if(isset($_GET["idDosen"])) {

        // menyimpan variable id dari url ke dalam variable $idDosen
        $id = $_GET["idDosen"];

        // jalankan query DELETE untuk menghapus data
        $query = "DELETE FROM t_dosen WHERE idDosen='$id'";
        $hasil_query = mysqli_query($link, $query);

        // periksa query,, apakah ada kesalahan
        if(!$hasil_query){
            die("Gagal menghapus data: ".mysqli_errno($link).
            " - ".mysqli_error($link));
        }
    }
    // melakukan redirect ke halaman viewdosen.php
    header("location:viewdosen.php");

?>

<?php
// cek apakah tombol edit telah di klik
if(isset($_POST['edit'])) {
    //buat koneksi dengan database
    include("coneksi.php");

    //membuat variable untuk menampung data dari form edit
    $id = $_POST['idDosen'];
    $namaDosen = $_POST['namaDosen'];
    $noHP = $_POST['noHP'];

    // menampilkan nilai $_POST
    var_dump($_POST);

        // buat dan jalankan querry UPDATE
        $query = "UPDATE t_dosen SET namaDosen = '$namaDosen', noHP = '$noHP' WHERE idDosen ='$id'";

        $result =mysqli_query($link, $query);

        // periksa hasil query apakah ada error
        if(!$result){
            die("Query Eror : ".mysqli_errno($link)
            ." - ".mysqli_error($link));
        }
}

// lakukan redirect ke halaman viewdosen.php
header("location:viewdosen.php");

?>
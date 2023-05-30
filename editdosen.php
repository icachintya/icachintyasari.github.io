<?php
    // memanggil file koneksi.php untuk membuat koneksi
    include 'coneksi.php';

    // cek apahak di url ada nilai GET idDosen
    if (isset($_GET['idDosen'])) {
        // ambil nilai idDosen dari url dan disimpan dalam variable $id
        $id = ($_GET["idDosen"]);

        // menampilkan data t_dosen dari database yang mempunyai idDoen=$id
        $query = "SELECT * FROM t_dosen WHERE idDosen='$id'";
        $result = mysqli_query($link,$query);
        // cek apakah querry gagal 
        if(!$result){
            die ("Query Error :".mysqli_errno($link)
            ." - ".mysqli_error($link));
        }
        // mengambil data dari database dan membuat variable-variable untuk menampung data 
        // variiable ini nantinya akan ditampilkan pada form
        $data = mysqli_fetch_assoc($result);
        $idDosen = $data["idDosen"];
        $namaDosen = $data["namaDosen"];
        $noHP = $data["noHP"];
    }else{
        // apabila tidak ada data GET id pada akan di redirect ke index.php
        header("location:viewdosen.php");
    }
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS Desain dan Pemrograman WEB</title>
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/profil.css">
</head>
<body>
	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul><br></ul>
		</div>
	</div>
	<header>
		<div class="container">
			<h1><a href="index.html">Welcome To Ica WEBSITE</a></h1>
			<ul>
				<li><a href="viewdosen.php">HOME</a></li>
                <li><a href="input.php">Tambah Data</a></li>
				<li><a href="profil.html">Profil Saya</a></li>
				<li><a href="index.html">Logout</a></li>
			</ul>
		</div>
	</header>
	

	<!-- label -->
	<section class="label">
		<div class="container">
			<p>Home / Edit Data</p>
		</div>
	</section>
        <center><h1>Edit Data</h1></center>
        <div class="container">
            <form id="form_mahasiswa" action="proses_editdosen.php" method="post">

            <fieldset>
                <legend>Edit Data </legend><br><br>
                <p>
                    <label for="idDosen">ID : </label>
                    <input type="hidden" name="idDosen" value="<?php echo $idDosen; ?>">
                    <input type="text" name="idDosenDisabled" value="<?php echo $idDosen ?>" disabled>
                </p><br>
                <p>
                    <label for="nama">Nama : </label>
                    <input type="text" name="namaDosen" id="namaDosen" value="<?php echo $namaDosen ?>">
                </p><br>
                <p>
                    <label for="noHP">No HP :</label>
                    <input type="text" name="noHP" id="noHP" value="<?php echo $noHP ?>">
                </p><br>
            </fieldset>
            <p>
                <input type="submit" name="edit" value="Update Data">
            </p>
        </form>
        </div>
        <a href="viewdosen.php">Back</a>
        <footer>
		<div class="container">
			<small>By: Ica Chintyasari_223307044</small>
		</div>
	</footer>


	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
    </body>
</html>
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
                <li class="active"><a href="input.php">Tambah Data</a></li>
				<li><a href="profil.html">Profil Saya</a></li>
				<li><a href="index.html">Logout</a></li>
			</ul>
		</div>
	</header>
	

	<!-- label -->
	<section class="label">
		<div class="container">
			<p>Home / Tambah Data</p>
		</div>
	</section>
       <center><h1>Input data</h1></center>
        <div class="container">
            <form id="form_dosen" action="proses_inputdosen.php" method="post">
                <fieldset>
                    <legend>Input Data </legend><br><br>
                    <p>
                        <label for="nama">Nama : </label>
                        <input type="text" name="namaDosen" id="namaDosen">
                    </p><br>
                    <p>
                        <label for="ipk">No HP : </label>
                        <input type="text" name="noHP" id="noHP" placeholder="Contoh: 081223344">
                    </p><br>
                </fieldset>
                <p>
                    <input type="submit" name="input" value="simpan">
                </p><br>
            </form>
            <a href="viewdosen.php">Back</a>
        <br/>
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

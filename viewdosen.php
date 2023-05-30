<?php
include 'coneksi.php' // memanggil file koneksi.php untuk melakukan koneksi database
?>
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
				<li class="active"><a href="viewdosen.php">HOME</a></li>
                <li><a href="input.php">Tambah Data</a></li>
				<li><a href="profil.html">Profil Saya</a></li>
				<li><a href="index.html">Logout</a></li>
			</ul>
		</div>
	</header>
	

	<!-- label -->
	<section class="label">
		<div class="container">
			<p>Home / Tampil Data</p>
		</div>
	</section>
        <center><h1>Tabel DATA</h1></center>
        <center><a href="input.php">Input Data</a>
        <br/></center>
    
    <center><table border="1">
        <tr>
            <th>ID</th>
            <th>Nama </th>
            <th>No HP</th>
            <th>Pilihan</th>
        </tr>
        <?php
        // jalankan query untuk menampilkan semua data diurutkan ascending berdasarkan idDosen
        $query = "SELECT * FROM t_dosen ORDER BY idDOsen ASC";
        $result = mysqli_query($link, $query);

        // cek apakah ada eror ketika menjalankan query
        if(!$result){
            die ("Query Error :".mysqli_error($link));
        }

        // hasil querry akan disimpan dalam variable $data dalam bentuk array 
        // kemudian dicetak dengan perulangan while
        while ($data = mysqli_fetch_assoc($result))
        {
            // mencetak / menampilkan data
            echo "<tr>";
            echo "<td>$data[idDosen]</td>"; // menampilkan data idDosen
            echo "<td>$data[namaDosen]</td>"; // menampilkan data namaDosen
            echo "<td>$data[noHP]</td>"; // menampilkan data noHP
            // membuat link untuk mengedit dan menghapus data
            echo '<td>
                <a href="editdosen.php?idDosen='.$data['idDosen'].'">Edit</a>
                <a href="hapusdosen.php?idDosen='.$data['idDosen'].'"
                    onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
            </td>';
            echo "<tr/>";
        }
        ?>
    </table></center>
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
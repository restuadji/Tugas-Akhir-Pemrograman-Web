<!DOCTYPE html>
<html>
<head>
	<title>Tugas Akhir</title>
	<link rel="stylesheet" type="text/css" href="csspost.css"> <!-- Untuk Menambahkan CSS pada File yang berbeda-->
	<script src="jsnya.js"></script> <!-- Untuk Menambahkan Javascript pada File yang berbeda-->
</head>
<body bgcolor="black"> <!-- bgcolor digunakan untuk pemberian warna pada background-->

	<div class="header">
		<h1><strong>Selamat Datang</strong></h1> <!-- h1 digunakan untuk ukuran font dan strong untuk mempertebal -->
		<h4>Tugas Akhir Pemrograman Web</h4> <!-- h4 berupa ukuran font yang lebih kecil dari h1 -->
			<div class="navbar"> <!-- membuat masing masing class div-->
				<nav>
					<a href="home.html">HOME</a> <!-- hyperlink menuju home.html -->
					<a href="biodata.html">PROFILE</a> <!-- hyperlink menuju biodata.html-->
					<a href="CONTACT.html">CONTACT</a> <!-- hyperlink menuju contact.html-->
				</nav>
			</div>
	</div>

	<div class="content"> <!-- membuat masing masing class div-->
		<div class="kiri"> <!-- membuat masing masing class div-->
			<p>
				<li><a href="index.php">FORM</a></li> <!-- hyperlink menuju index.php-->
				<li><a href="javas.html">Javascript</a></li> <!-- hyperlink menuju javas.html-->
				<li><a href="hasildata.php">Data</a></li> <!-- hyperlink menuju hasildata.php-->
			</p>
		</div>

		<div class="kanan"> <!-- membuat masing masing class div-->
			<h1 align="center"><strong>Hasil Data</strong></h1>
  				<?php
 					 $txt_file    = file_get_contents('filenya.txt'); // digunakan untk mengambil data dari filenya.txt dan kemudian ditampilkan kembali
					 $rows        = explode("\n", $txt_file); // explode untuk pemisah data
 					 array_shift($rows);
  					$i=1; // i akan dimulai dari 1

  					foreach($rows as $row => $data) //digunakan untuk membuat file array
  					{
        				$row_data = explode('|', $data); // 

       					$info[$row]['Nama']           = $row_data[0]; // data array yang dimulai dengan index ke 0
        				$info[$row]['Email']          = $row_data[1]; // data array dengan index 1

        				echo 'Data Ke- ' . $i++ . '<br />'; // nilai data akan selalu bertambah 1 pada setiap penginputan
        				echo ' Nama: <b>' . $info[$row]['Nama'] . '</b><br />'; //digunakan untuk menampilkan Nama dari inputan
        				echo ' Email: <b>' . $info[$row]['Email'] . '</b><br />'; // digunakan untuk menampilkan Email dari inputan
        				echo "<hr>";

  					}
  				?>
		</div>
	</div>

	<div class="footer"> <!-- membuat masing masing class div-->
		<p>&copy; Muhamad Restu Adji Pratama - 1800018041</p> <!-- &copy; digunakan untuk membuat lambang copyright -->
	</div>

</body>
</html>
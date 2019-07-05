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
			<h1 align="center"><strong>Mohon Diisi</strong></h1>
			<div class="form">
				<form action="datanya.php" method="post"> <!-- digunakan untuk membuat form dan disimpan menuju datanya.php serta menggunakan method post yaitu tidak menampilkan hasil pada url setelah penginputan-->
					<tr> <!-- tr atau table rows digunakan untuk membuat tabel -->
							   <td>Nama</td> 
							   <td>:</td>
								<td><input type="text" name="Nama" placeholder="Masukkan Nama" ><br></td> <!-- br digunakan untuk break yaitu membuat garis baru -->
						</tr>

						<tr>
								<td>Email</td>
								<td>:</td>
							<td> 
								<input type="text" name="Email" placeholder="Masukkan Email"></td> <!-- type bisa saja terdiri dari radio, number atau text dan lain lain, sesuai dengan kebutuhan. name berupa variable simpanan untuk inputan dan place holder untuk tulisan samar sebelum adanya inputan -->
						</tr>

						<tr>
							<td>
								<br>
								<input type="reset" name="Reset"> <!-- reset digunakan untuk mereset atau mengulang untuk penginputan -->
								<input type="submit" name="Submit" value="Simpan"></td> <!-- Submit digunakan untuk mengumpulkan atau men-submit inputan -->
                        </tr>
				</form>
			</div>
		</div>
	</div>

	<div class="footer"> <!-- membuat masing masing class div-->
		<p>&copy; Muhamad Restu Adji Pratama - 1800018041</p> <!-- &copy; digunakan untuk membuat lambang copyright -->
	</div>

</body>
</html>
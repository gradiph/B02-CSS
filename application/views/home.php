<!DOCTYPE html>
<html>
	<head>
		<title>BELAJAR CSS</title>
		<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
	</head>
	<body>
		
		<!--Bagian Header -->
		<header>
			<center>
			<a name="logo">
				<img src="<?php echo base_url ("assets/img/css3.jpg"); ?>" width="200px" height="200px" alt="gambar css">
			</a>
			<h1>CSS 3</h1>
			</center>
			<br>
		</header>
		<hr class="panjang" id="panjang">
		<nav>
			<table class="tabel" id="css-border">
				<tr>
					<th>
						<a href="#panjang-garis" class="rata-tengah">Form</a>
					</th>
					<th>
						<a href="#panjang-garis-bawah" class="rata-tengah">Tabel</a>
					</th>
				</tr>
			</table>
		</nav>
		<hr class="panjang-garis" id="panjang-garis">
		<a name="panjang-garis">
		</a>
		
		<!-- Bagian Form -->
		<main>
			<section id="sec-form">
				<h1>FORM</h1>
				<form method="post" action="home.php" id="form-daftar">
					<table class="tabel-form" id="tabel-form">
						<tr>
							<td><label for="input-nama">Nama</label></td>
							<td>:</td>
							<td><input type="text" id="input-nama" name="input-nama"></td>
						</tr>
						<tr>
							<td><label for="input-email">Email</label></td>
							<td>:</td>
							<td><input type="email" id="input-email" name="input-nama"></td>
						</tr>
						<tr>
							<td><label for="input-password">Password</label></td>
							<td>:</td>
							<td><input type="Password" id="input-password" name="input-password" class="input-password"></td>
						</tr>
					</table>
					<br>
					<button type="submit" id="btn-simpan">Simpan</button>
					<button type="reset" id="btn-reset">Reset</button>
				</form>
				<br>
			</section>
			<hr class="panjang-garis-bawah" id="panjang-garis-bawah">
			<a name="panjang-garis-bawah">
			</a>
			
			<!-- Isi Tabel-->
			<section id="sec-form">
				<h1>TABEL</h1>
				<table class="tabel-isi" id="tabel-isi">
					<thead>
						<tr>
							<th scope="col" class="hitam">NO</th>
							<th scope="col" class="hitam">NAMA</th>
							<th scope="col" class="hitam">JENIS</th>
							<th scope="col" class="hitam">QTY</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="rata-tengah-nomor">1</td>
							<td class="Kemeja-Topten">Kemeja Topten</td>
							<td class="Atasan">Atasan</td>
							<td class="rata-kanan">3</td>
						</tr>
						<tr>
							<td class="rata-tengah-nomor">2</td>
							<td class="syal">Syal</td>
							<td class="Aksesoris">Aksesoris</td>
							<td class="rata-kanan">11</td>
						</tr>
						<tr>
							<td class="rata-tengah-nomor">3</td>
							<td class="Celana-jeans">Celana Jeans</td>
							<td class="Bawahan">Bawahan</td>
							<td class="rata-kanan">7</td>
						</tr>
					</tbody>
				</table>
			</section>
		</main>
		<hr class="panjang-garis-footer" id="panjang-garis-footer">
		
		<!-- Isi Footer -->
		<footer class="footer">
			Baruna, 15 Desember 2018 &copy; Baruna IT
		</footer>
	</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<title>BELAJAR CSS</title>
		
		<style>
			div {
				height: 50px;
				border: 2px solid black;
				margin: 20px;
			}
				.table {width: 100%;}
			a {
				text-decoration: none;
			}
			
			#btn-simpan {
				cursor: pointer;
			}
			#btn-reset{
				cursor: pointer;
			}
		.table1 {
			font-family: sans-serif;
			color: black;
			border-collapse: collapse;
			padding: 8px 20px;
		}
		.table1, th, td {
			border: 1px solid #999;
			padding: 8px 20px;
		}
		.table1 th {
			background: #868e96;
			color: #f8f9fa;
			padding: 8px 20px;
			text-align: left;
		}
		.footer {
			background-color: #343a40;
			color: #f8f9fa;
			padding: 8px;
		}
		.syal {
			text-align: left;
		}
		.Aksesoris {
			text-align: left;
		}
		.Celana-jeans {
			text-align: left;
		}
		.Kemeja-TOPTEN {
			text-align: center;
		}
		.Bawahan{
			text-align: left;
		}
		.rata-kanan {
			text-align: right;
		}
		.rata-tengah {
			text-align: center;
		}
		#css-border {
			border: 0;
		}
		.panjang, .panjang-garis, .panjang-garis-bawah, .panjang-garis-footer {
			width: 100%;
		}
		#garis-form {
			border: 0;
		}
		</style>
	</head>
	<body>
		
		<!--Bagian Header -->
		<header>
			<center>
			<a name="logo">
				<img src="<?php echo base_url ("assets/img/css3.jpg"); ?>" width="200px" height="200px" alt="gambar css">
				<a/>
					<h1>CSS 3</h1>
					</center>
					<hr class="panjang" id="panjang">
					<br>
				</header>
				
				<nav>
					<table class="table" id="css-border">
						<thead>
							<tr>
								<th>
									<a href="#form" class="rata-tengah">Form</a>
								</th>
								<th>
									<a href="#tabel" class="rata-tengah">Tabel</a>
								</th>
							</tr>
						</thead>
					</table>
				</nav>
				
				<!-- Bagian Form -->
				<main>
					<a name="form">
					</a>
					<br>
					<hr class="panjang-garis" id="panjang-garis">
					<h1>FORM</h1>
					<section id="sec-form">
						<form method="post" action="home.php" id="form-daftar">
							<table class="garis-form" id="garis-form">
								<tr>
									<td><label for="input-name">Nama</label></td>
									<td>:</td>
									<td><input type="text" id="input-name"></td>
								</tr>
								<tr>
									<td><label for="input-email">Email</label></td>
									<td>:</td>
									<td><input type="email" id="input-email"></td>
								</tr>
								<tr>
									<td><label for="input-password">Password</label></td>
									<td>:</td>
									<td><input type="Password" id="input-password"></td>
								</tr>
							</form>
						</table>
						<br>
						<button type="submit" id="btn-simpan">Simpan</button>
						<button type="reset" id="btn-reset">Reset</button>
						<br>
						<hr class="panjang-garis-bawah" id="panjang-garis-bawah">
					</section>
					
					<!-- Isi Tabel-->
					<section id="sec-form">
						<a name="tabel">
						</a>
						<table border="2" class="table1" id="table1">
							<br>
							<h1>TABEL</h1>
								<tbody>
									<tr>
										<th scope="row">NO</th>
										<th scope="row">NAMA</th>
										<th scope="row">JENIS</th>
										<th scope="row">QTY</th>
									</tr>
									<tr>
										<th scope="row">1</th>
										<td>
											<p class="Kemeja-Topten">
												Kemeja Topten
											</td>
											<td>Atasan</td>
											<td class="rata-kanan">3</td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td>
												<p class="syal">
													Syal
												</td>
												<td>
													<p class="Aksesoris">
														Aksesoris
													</td>
													<td class="rata-kanan">11</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>
														<p class="Celana-jeans">
															Celana Jeans
														</td>
														<td>
															<p class="Bawahan">
																Bawahan
															</td>
															<td class="rata-kanan">7</td>
														</tr>
													</tbody>
												</table>
										</section>
									</main>
									<!-- Isi Footer -->
									<br>
									<hr class="panjang-garis-footer" id="panjang-garis-footer">
									<footer class="footer">
										Baruna, 15 Desember 2018 &copy; Baruna IT
									</footer>
								</body>
							</html>
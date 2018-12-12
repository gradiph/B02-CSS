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

.table1 th{
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
.tujuh {
	text-align: right;
}
.syal {
	text-align: left;
}

.Aksesoris {
	text-align: left;
}
.sebelas {
	text-align: right;
}
.Celana-jeans {
	text-align: left;
}
.Kemeja-TOPTEN {
	text-align: center;
}
.Bawaham{
	text-align: left;
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
		</p>
			<h1>CSS 3</h1>
		</center>
	</header>
	
	<nav>		
		<table border="1" class="table">
					<thead>
					<tr>
						<th>
		 					<a href="#form" style="text-align: center;">Form</a>
						</th>
						<th>
		 					<a href="#tabel" style="text-align: center;">Tabel</a>
						</th>
					</tr>
				</thead>
		</table>
		
	</nav>

	<!-- Bagian Form -->
	<main>
		<a name="form">
		</a>
		<h1>FORM</h1>
		<table class="table2">
			<section id="sec-form">
					<form method="post" action="home.php" id="form-daftar">
					<table border="0" id="form-daftar">
						<p>	
						<label for="input-username">Nama:</label>
							<input type="text" id="input-username" placeholder=""/>
					</p>
					<p>
						<label for="input-email">Email:</label>
							<input type="Email" id="input-email" placeholder=""/>
					</p>
					<p>
						<label for="input-tanggal_lahir">Password:</label>
							<input type="Password" id="Password" placeholder=""/>
					<br>
					<br>
					<button type="submit">Simpan</button>
   					<button type="reset">Reset</button>
			</section>
<br>
<!-- Isi Tabel-->
<section id="">
	<a name="tabel">
		<table border="2"> 
			<br>
			<h1>TABEL</h1>
			<table class="table1" id="table1">
			<thead>
				<tr>
			<th>NO</th>
			<th>NAMA</th>
			<th>JENIS</th>
			<th>QTY</th>
		</tr>
		<tr>
			<td>1</td>
			<td>
				<p class="Kemeja-Topten">
					Kemeja Topten
			</td>
			<td>Atasan</td>
			<td>3</td>
		</tr>
		<tr>
			<td>2</td>
			<td>
				<p class="syal">
					Syal
			</td>
			<td>
				<p class="Aksesoris">
					Aksesoris
			</td>
			<td>
				<p class="sebelas">
					11
			</td>
		</tr>
		<tr>
			<td>3</td>
			<td>
				<p class="Celana-jeans">
					Celana Jeans
			</td>
			<td>
				<p class="Bawahan">
					Bawahan
			</td>
			<td>
				<p class="tujuh">
					7
			</td>
		</tr>
			</thead>
		</table>
		</table>	
</section>
	</main>

	<!-- Isi Footer -->
	<br>
	<footer>
		<p class="footer">
		Baruna, 15 Desember 2018 &copy; Baruna IT
	</footer>
</body>
</html>



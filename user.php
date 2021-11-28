<?php 
	require 'functions.php';
		session('login.php');
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>User</title>
	<link rel="stylesheet" type="text/css" href="reset.css">
	<link rel="stylesheet" type="text/css" href="user.css">
</head>
<body>
	<div class="container">
		<div class="header">
				<div class="search">
					<input type="text" name="search" placeholder="Search..">
					<button type="submit" class="cari"></button>
					<a href="logout.php"><button type="submit" class="logout">logout</button></a>
				</div>
				<div class="option">
					<ul>
						<li class="option1">
							<a href="#">Profil</a>
						</li>
						<li>
							<a href="#">Program Sekolah</a>
						</li>
						<li>
							<a href="#">Program Keahlian</a>
						</li>
						<li>
							<a href="#">Sarana Prasana</a>
						</li>
						<li>
							<a href="#">Kegiatan Sekolah</a>
						</li>
						<li>
							<a href="#">Berita</a>
						</li>
						<li>
							<a href="#">Galeri</a>
						</li>
						<li>
							<a href="#">Kontak</a>
						</li>
						<li>
							<a href="#">Form PPDB</a>
						</li>
						<a href="main.php"><button class="user"></button></a>
					</ul>
				</div>
			</div>
		<div class="img"></div>
		<div class="img1"></div>
		<div class="judul">
			<h1><?php echo $_SESSION['nama']; ?></h1>
			<h2></h2>
		</div>
	</div>
</body>
</html>
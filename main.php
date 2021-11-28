<?php 
	require 'functions.php';
	session('login.php');
 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Main</title>
		<link rel="stylesheet" type="text/css" href="reset.css">
		<link rel="stylesheet" type="text/css" href="main.css">
		<link rel="stylesheet" type="text/css" href="main1.css">
	</head>
	<body>
		<div class="container">
			<div class="header">
				<div class="search">
					<input type="text" name="search" placeholder="Search..">
					<button type="submit" name="cari"></button>
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
						<a href="user.php"><button class="user"></button></a>
					</ul>
				</div>
			</div>
			<div class="img">
				<div class="judul">
					<img src="img/smkybm.jpg">
					<h1>SMK YBM</h1>
					<h2>SMK Bisa! SMK YBM Smart Competent Religius!</h2>
					<div class="clm">
						<div class="clm1">
							<h3>Jurusan</h3>
							<p>
								TKJ
								<br>
							TKRO
							</p>
						</div>
						<div class="clm2">
							<h3>EkstraKulikuler</h3>
							<p>
							Musik,Kejuruan,VolleyBall,<br>Futsal,Qasidah,B.inggris,Dll.
						</p>
						</div>
						<div class="clm3">
							<h3>Kemitraan Dengan</h3>
							<p>PT. ASTRA Internasional Jl. Asia Afrika Bandung,
								 TUNAS DAIHATSU Bandung,
								 HINO “ PT Maya Graha Indah “ Jl. Soekarno-Hatta Bandung,
								 PO.PERUM DAMRI Jl. Soekarno-Hatta Bandung,
								 PT.PINDAD (Persero) Jl. Gatot Subroto Bandung,
								 PO. Bandung Express, Jl. Soekarno-Hatta Bandung,
								 RAKA Auto Care Bandung,
								 PO.Harum Prima. Bandung,
								  INDO MOBIL. Bandung,
								YHUNDAI MOTOR. Bandung,
								TOYOTA AUTO 2000. Bandung.
							</p>
						</div>
						<div class="clm4">
							<h3>Fasilitas</h3>
							<p>
								Lab 1, Lab 2, Multimedia, Lab bengkel, Mushola, Lab Fiber Optik, Lab evercross, Dll.
							</p>
						</div>
					</div>
				</div>
			</div>
<!-- 			<div class="wadahkolom">
				<div class="kolom1">
					<h1>Data Siswa :</h1>
					<ul>
						<li>Angkatan ke-1</li>
						<li>
							<a href="#">TKJ A</a>
						</li>
						<li>
							<a href="#">TKRJ B</a>
						</li>
						<li>
							<a href="#">TKJ C</a>
						</li>
						<li>
							<a href="#">TKJ D</a>
						</li>
						<li>
							<a href="#">TKRO A</a>
						</li>
						<li>
							<a href="#">TKRO B</a>
						</li>
						<li>
							<a href="#">TKRO C</a>
						</li>
						<li>
							<a href="#">TKRO D</a>
						</li>
						<li>Angkatan ke-2</li>
						<li>
							<a href="#">TKJ A</a>
						</li>
						<li>
							<a href="#">TKJ B</a>
						</li>
					</ul>
				</div>
				<div class="kolom2">
					<h1>SMK YBM</h1>
					<h2>Sekolah Menengah Khusus Yayasan Budi Mandiri</h2>
					<h3>VISI</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<h3>MISI</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<h3>Alamat Sekolah</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="kolom3">
					<h1>Data Guru :</h1>
					<ul>
						<li>
							Pemilik
						</li>
						<li>
							Kepala Sekolah
						</li>
						<li>
							Guru A
						</li>
						<li>
							Guru B
						</li>
						<li>
							Guru C
						</li>
						<li>
							Guru D
						</li>
						<li>
							<a href="https://www.facebook.com/SMKbudimandiritanjungsari/">SMK Budi Mandiri Tanjungsari</a>
						</li>
						<li>
							<a href="https://www.instagram.com/ybm.tv/">ybm.tv</a>
						</li>
						<li>
							<a href="https://www.instagram.com/smk_ybm/">smk_ybm</a>
						</li>
						<li>
							<a href="https://www.youtube.com/channel/UC9T5o75FfHAc5wKdmD9b8bg">SMK Budi Mandiri</a>
						</li>
					</ul>
				</div>
				<div class="clear"></div>
			 --></div>
		</div>
	</body>
</html>
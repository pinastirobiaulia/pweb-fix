<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TUGAS PWEB HTML CSS</title>
	<link rel="stylesheet" type="text/css" href="tugaskelompokk.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+30JU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
	<SCRIPT LANGUAGE="JavaScript">
	function plh(pilihan){
		alert("Apakah anda yakin pindah di " + pilihan);
		document.bgColor=pilihan;
	}
</SCRIPT>
	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="https://id-id.facebook.com/humaspemdadiy/"><i class="fab fa-facebook"></i></a></li>
				<li><a href="https://twitter.com/humas_jogja"><i class="fab fa-twitter"></i></a></li>
				<li><a href="https://www.instagram.com/humasjogja/"><i class="fab fa-instagram"></i></a></li>
				<li><a href="https://www.youtube.com/channel/UC6vcKVVzPxWw3eVxfa-gkJQ"><i class="fab fa-youtube"></i></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
			<h1>DAERAH ISTIMEWA YOGYAKARTA</h1>
			<ul>
				<li class="active"><a href="tugaskelompok.php" onclick="plh('Home')">Home</a></li>
				<li class="active"><a href="about.php" onclick="plh('Tentang Jogja')">Tentang Jogja</a></li>
				<li class="active"><a href="sejarah.php" onclick="plh('Sejarah')">Sejarah</a></li>
				<li class="active"><a href="berita.php" onclick="plh('Berita')">Berita</a></li>
				<li class="active"><a href="galeri.php" onclick="plh('Galeri')">Galeri</a></li>
			</ul>
		</div>
	</header>

	</section>
	<!-- about -->
	<section class="about">
		<div class="container">
			<a href="https://www.detik.com/jateng/jogja/d-6047449/pemkot-jogja-buka-posko-aduan-wisata-libur-lebaran-cek-di-sini-lokasinya">Posko aduan wisata liburan</a><br>
			<a href="https://www.detik.com/jateng/berita/d-6047299/catat-tahun-ini-sbmptmu-kembali-dibuka-dalam-2-gelombang">SBMPTN</a><br>
			<a href="https://www.detik.com/jateng/jogja/d-6044332/aksi-demo-di-tugu-jogja-arus-lalu-lintas-sempat-tersendat">Demo Di Tugu Jogja</a><br>

		</div>
	</section> 

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2022 - PWEB . All Rights Reserved.</small>
		</div>
	</footer>

</body>
</html>
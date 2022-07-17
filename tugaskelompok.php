<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TUGAS PWEB HTML CSS JAVASCRIPT</title>
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
</SCRIPT>/
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
			<p>Kota Yogya adalah ibu kota dan pusat pemerintahan <strong>Daerah Istimewa Yogyakarta, Indonesia.</strong> Kota ini adalah kota besar yang mempertahankan konsep tradisional dan budaya jawa. Kota Yogyakarta adalah kediaman bagi Sultan Hamengkubuwana dan Adipati Paku Alam. Kota Yogyakarta merupakan salah satu kota terbesar di Indonesia dan kota terbesar keempat di wilayah Pulau Jawa bagian selatan menurut jumlah penduduk. Kota Yogyakarta juga pernah menjadi ibu kota RI pada tahun 1946. Salah satu kecamatan di Yogyakarta, yaitu Kotagede pernah menjadi pusat Kesultanan Mataram antara kurun tahun 1575–1640. Keraton (Istana) yang masih berfungsi dalam arti yang sesungguhnya adalah Keraton Ngayogyakarta dan Puro Paku Alaman, yang merupakan pecahan dari Kesultanan Mataram. Pada masa revolusi, Yogyakarta juga pernah menjadi ibu kota Indonesia antara tahun 1946 hingga 1950.</p>
			<h3>VISI KOTA YOGYAKARTA</h3>
			<p>Meneguhkan Kota Yogyakarta sebagai Kota Nyaman Huni dan Pusat Pelayanan Jasa yang Berdaya Saing Kuat untuk Keberdayaan Masyarakat dengan Berpijak pada Nilai Keistimewaan</p>
			<h3>MISI KOTA YOGYAKARTA</h3>
			<p>Meningkatkan kesejahteraan dan keberdayaan masyarakat</p> 
			<p>Memperkuat ekonomi kerakyatan dan daya saing Kota Yogyakarta</p>
			<p>Memperkuat moral, etika dan budaya masyarakat Kota Yogyakarta</p>
			<p>Meningkatkan kualitas pendidikan, kesehatan, sosial dan budaya</p>
			<p>Memperkuat tata kota dan kelestarian lingkungan</p>
			<p>Membangun sarana prasarana publik dan permukiman</p>
			<p>Meningkatkan tatakelola pemerintah yang baik dan bersih</p>
		</div>
	</section> 

	<section class="service">
		<div class="container">
			<h3>CONTACT INFO</h3>
			<div class="box">
				<div class="col-4">
					<h4>Address</h4>
					<li><a href="https://goo.gl/maps/5KMrYAkNqXD7ENFV9">Jl. Malioboro No.2, Ngupasan, Kec. Gondomanan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55271</a></li>
				</div>
				<div class="col-4">
					<h4>Email</h4>
					<li><a href="santel@jogjaprov.go.id">santel@jogjaprov.go.id</a></li>
				</div>
				<div class="col-4">
					<h4>Telp.</h4>
					<li><a href="(021) 12345678">(021) 12345678</a></li>
				</div>
			</div>	
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
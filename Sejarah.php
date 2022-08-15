<?php
session_start();
$host = "localhost";
$username = "root";
$password = "";
$db = "db_webakademis_php";
@mysql_connect($host,$username,$password) or die ("error");
@mysql_select_db($db) or die("error");
if ( !isset($_SESSION['logged-mhs-in']) || $_SESSION['logged-mhs-in'] !== true) {
// not logged in, move to login page
header('Location: index.php');
exit;
} else { $query = "SELECT * FROM mengajar";
$result= mysql_query($query);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Sejarah</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top">
			<h1><a href="user_homepage.php"><img src = "css/images/STMIKKianSantang2.png"></a></h1>
			<div id="top-navigation">
				<strong>
				<?php
				echo "Welcome, ".$_SESSION['NIM_MHS']."";?>
				</strong><span>|</span>
				<a href="logout.php">Log out</a>
			</div>
		</div>
		<!-- End Logo + Top Nav -->
		
		<!-- Main Nav -->
		<div id="navigation">
			<ul>
			    <li><a href="user_homepage.php" class="active"><span>Home</span></a></li>
			    <li><a href="dosen.php"><span>Dosen</span></a></li>
				<li><a href="jadwal.php"><span>Jadwal</span></a></li>
				<li><a href="mata_kuliah.php"><span>Mata Kuliah</span></a></li>
				<li><a href="nilai.php"><span>Nilai</span></a></li>
				<li><a href="ruangan.php"><span>Ruangan</span></a></li>
			</ul>
		</div>
		<!-- End Main Nav -->
	</div>
</div>
<!-- End Header -->

<!-- Container -->
<div id="container">
	<div class="shell">
		
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				
				<!-- Box -->
				<div class="box">
				<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Sejarah</h2>
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="news">
<p>Jurusan Teknik Komputer STMIK KIAN SANTANG merupakan Sekolah Tinggi pertamaa yang menyelenggarakan pendidikan diploma di bidang Teknologi Informasi [TI]. Jurusan ini telah menyelenggarakan pendidikan D3 (diploma 3) bidang teknik komputer dan informatika selama kurang lebih 27 tahun. Dengan daya tampung sekitar 60-80 mahasiswa per tahun, sampai saat ini STMIK Kian Santang telah menghasilkan lebih dari 2500 alumni, yang bekerja pada berbagai sektor industri baik di dalam maupun di luar negeri.
Selain menjalankan pendidikan, STMIK Kian Santang juga menyelenggarakan penelitian dan pengabdian kepada masyarakat dalam bidang Teknologi Informasi. Sebagai Sekolah Tinggi pertama yang menyelenggarakan pendidikan profesional bidang Teknologi Informasi, STMIK Kian Santang-Polban selalu dijadikan tolok ukur dan telah banyak memberikan bantuan teknis/nonteknis kepada institusi lain, maupun kepada masyarakat pada umumnya. Beberapa aktivitas yang sering dilakukan di antaranya adalah pembinaan institusi, pelatihan bidang TI, konsultasi pemanfatan TI untuk menunjang kegiatan kerja, pengembangan sistem informasi dan lab/bengkel komputer layanan masyarakat.
<p><br>STMIK Kian Santang telah berpengalaman lebih 20 tahun dalam menyelenggarakan kegiatan :</p>
<p>pembinaan institusi<br></li>
<p>pelatihan dalam bidang teknologi informasi</p>
<p>konsultasi pengembangan sistem informasi</p>
<p>pengembangan sistem informasi</p>

					</div>
					<!-- Table -->
				</div>
				<!-- End Box -->
				
				
			</div>
			<!-- End Content -->
			
			<!-- Sidebar -->
			<div id="sidebar">
				
				<!-- Box -->
				<div class="box">
					
					<!-- Box Head -->
					<div class="box-head">
						<h2>Sekilas STMIK Kian Santang</h2>
					</div>
					<!-- End Box Head-->
					
					<div class="box-content">
						
						<p><a href="Sejarah.php">Sejarah</a></p>
						<p><a href="programstudi.php">Program Studi</a></p>
						<p><a href="prestasi.php">Prestasi</a></p>
						<p><a href="informasi.php">Informasi</a></p>
						<p><a href="#"></a></p>
						
						
					</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->

<!-- Footer -->
<div id="footer">
	<div class="shell">
		<span class="left">@copyright 2013 - STMIK Kian Santang</span>
		<span class="right">
			Design by SKYERES</a>
		</span>
	</div>
</div>
<!-- End Footer -->
	<?php
	}
	?>
</body>
</html>
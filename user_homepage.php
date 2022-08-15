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
} else { 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>BERANDA</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
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
			    <li><a href="user_homepage.php" class="active"><span>Beranda</span></a></li>
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
				<div class="news">
				
						<br>
						<h2><center><b>Recruitment dan Beasiswa</b><center></h2><br>
						<p>  PT Falcon Telemunika Janggo akan mengadakan Recruitment on Campus yang ditujukan bagi : <p><br>

							<p>Mahasiswa Semester Akhir (D3/D4) dan Alumni untuk Employment</p>
							<p>Mahasiswa Semester IV untuk Program Beasiswa</p><br>
							<p>recruitment tersebut akan dilaksanakan pada :
							<p>Hari/tanggal  :  Minggu/1 April 2012</p>
							<p>Waktu         :  Pk 07.30 s.d. selesai</p>
							<p>Tempat        :  Cornferece Room Gedung P2T Lantai 3</p><br>
							<p>INFORMASI LOWONGAN</p><br>
							<p>Mine Engineer (ME)</p>
							<p>Production Group Leader (PRGL)</p>
							<p>Corporate Planning (CPSD)</p>
							<p>Business Development (BUDEV)</p>
							<p>General Service Officer (GSO)</p>
							<p>Human Capital Group Leader (HCGL)</p>
							<p>Safety, Health, & Environment Officer (SHE)</p>
							<p>Accounting Officer (ACOF)</p>
							<p>Supply Management Officer (SMO) : Fresh Graduate D3 in Mechanical Eng/ Information Technology</p>
							<p>Plant Group Leader (PLGL)</p>
							<p>Information System Officer (ISO) :  Fresh Graduate D3 in Information Technology</p><br>
							
							<p>Ruquirements :</p><br>
							<p>Computer literacy, English Proficiency, Age Max 35 years for expert, willing to be based at all over PAMA operation areas</p><br>
							<p>Please send:</p><br>
							<p>Your resume and indicate the position applied on the top left corner of the envelope not later than 26 March 2012 to: JPAC – POLBAN</p><br>
				
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
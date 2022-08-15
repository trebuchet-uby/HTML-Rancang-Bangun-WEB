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
 $query = "SELECT * FROM jadwal";
$result= mysql_query($query);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>JADWAL</title>
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
			    <li><a href="user_homepage.php"><span>Beranda</span></a></li>
			    <li><a href="dosen.php"><span>Dosen</span></a></li>
			    <li><a href="jadwal.php" class="active"><span>Jadwal</span></a></li>
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
					
						

					<!-- Table -->
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0" align='center'>
							<tr align='center'>
								<td width="200px"> <b> ID MATA KULIAH </b> </td>
								<td width="200px"> <b> ID RUANGAN</b> </td>
								<td width="200px"> <b> HARI</b> </td>
								<td width="200px"> <b> JAM</b> </td>
								<td width="200px"> <b> STATUS</b> </td>
							</tr>
							<?php
							while ($data = mysql_fetch_array($result)) 
							{
							echo "
								<tr align='center'>
								<td>".$data['ID_MATKUL']."</td>
								<td>".$data['ID_RUANGAN']."</td>
								<td>".$data['HARI']."</td>
								<td>".$data['JAM']."</td>
								<td>".$data['STATUS']."</td>
								</tr>";
							}
							?>
						</table>
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
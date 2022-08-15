<?php
session_start();
$host = "localhost";
$username = "root";
$password = "";
$db = "db_webakademis_php";
@mysql_connect($host,$username,$password) or die ("error");
@mysql_select_db($db) or die("error");
if ( !isset($_SESSION['logged-in']) || $_SESSION['logged-in'] !== true) {
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
	<title>Admin</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top">
			<h1><a href="admin_homepage.php"><img src = "css/images/STMIKKianSantang2.png"></a></h1>
			<div id="top-navigation">
				<strong>
				<?php
				echo "Welcome, ".$_SESSION['USERNAME']."";?>
				</strong><span>|</span>
				<a href="logout.php">Log out</a>
			</div>
		</div>
		<!-- End Logo + Top Nav -->
		
		<!-- Main Nav -->
		<div id="navigation">
			<ul>
			    <li><a href="admin_homepage.php" class="active"><span>Home</span></a></li>
			    <li><a href="insert.php"><span>Insert</span></a></li>
			    <li><a href="edit.php"><span>Edit</span></a></li>
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
						<h2 class="left">Tabel Mengajar</h2>
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0" align='center'>
							<tr align='center'>
								<td width="200px"> <b> ID MENGAJAR</b> </td>
								<td width="200px"> <b> ID MATA KULIAH </b> </td>
								<td width="200px"> <b> ID DOSEN</b> </td>
							</tr>
							<?php
							while ($data = mysql_fetch_array($result)) 
							{
							echo "
								<tr align='center'>
								<td>".$data['ID_MENGAJAR']."</td>
								<td>".$data['ID_MATKUL']."</td>
								<td>".$data['ID_DOSEN']."</td>
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
						<h2>Tabel</h2>
					</div>
					<!-- End Box Head-->
					
					<div class="box-content">
						
						<p><a href="sdosen.php">Data Dosen</a></p>
						<p><a href="smahasiswa.php">Data Mahasiswa</a></p>
						<p><a href="smatakuliah.php">Mata Kuliah</a></p>
						<p><a href="sruangan.php">Ruangan</a></p>
						<p><a href="snilai.php">Data Nilai</a></p>
						<p><a href="smengajar.php">Data Mengajar</a></p>
						<p><a href="sjadwal.php">Jadwal</a></p><p><a href="sadmin.php">Admin</a></p>
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
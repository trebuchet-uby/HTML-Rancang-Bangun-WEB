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
} else { 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script type='text/javascript'>
function formValidator(){
	// Make quick references to our fields
	var NIM_MHS= document.getElementById('nim_mhs');
	var ID_MATKUL = document.getElementById('id_matkul');
	var NILAI = document.getElementById('nilai');
	
	// Check each input in the order that it appears in the form!
	if(notEmpty(NIM_MHS, "Masukkan NIM Mahasiswa")){
		if(isNumeric(NIM_MHS, "NIM Mahasiswa Masukkannya hanya angka")){
			if(lengthRestriction(NIM_MHS, 9,9)) {
				if(notEmpty(ID_MATKUL, "Masukkan ID Mata Kuliah")){
					if(isAlphanumeric(ID_MATKUL, "ID mata kuliah Masukkannya hanya alphanumeric")){
						if(lengthRestriction(ID_MATKUL, 6,10)) {
							if(notEmpty(NILAI, "Masukkan Nilai")){
								if(isAlphabet(NILAI, "Nilai Masukkannya hanya huruf")){
									if(lengthRestriction(NILAI, 1,1)) {
									return true;
									}
								}
							}
						}
					}
				}		
			}
		}
	}
	return false;
}
function notEmpty(elem, helperMsg){
	if(elem.value.length == 0){
		alert(helperMsg);
		elem.focus(); // set the focus to this input
		return false;
	}
	return true;
}
function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function lengthRestriction(elem, min, max){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters");
		elem.focus();
		return false;
	}
}
function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z ]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

	</script>
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
			    <li><a href="admin_homepage.php"><span>Home</span></a></li>
			    <li><a href="insert.php" class="active"><span>Insert</span></a></li>
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
				<div class="box-head">
						<h2>Insert Nilai</h2>
					</div>
					<!-- End Box Head -->
					<br><br>
					<form name='Insert' method = 'post' action='insert_nilai.php' onSUBMIT='return formValidator()'>
						
						<!-- Form -->
						<div class="form">
							<center>
							<table border="0">
							<tr>
										<td width="200px"><p align="left"><label>NIM : </label></p></td>
										<td><input name="nim_mhs" id="nim_mhs" type="text"class="field size1" ></td>
									
							</tr>
							<tr>
										<td width="200px"><p align="left"><label>ID MATA KULIAH : </label></p></td>
										<?php
										$query = "SELECT * FROM mata_kuliah";
										$result= mysql_query($query);
										?>
										<td>
										<select  name="id_matkul" id="id_matkul" type="text" class="field size1" required="required">
											 <option value="">-Mata Kuliah-</option>
											 <?php while ($data = mysql_fetch_array($result)) 
													{ ?>
											 <option value='<?php echo $data['ID_MATKUL'] ?>'><?php echo $data['ID_MATKUL'] ?> | <?php echo $data['NAMA_MATKUL'] ?></option>
											 <?php } ?>
										</select>
										</td>	
							</tr>
							<tr>
										<td width="100px"><p align="left"><label>NILAI : </label></p></td>
										<td>
										<select name="nilai" id="nilai" type="text" class="field size1" required="required">
											 <option value="">-Nilai-</option>
											 <option value="A">A</option>
											 <option value="B">B</option>
											 <option value="C">C</option>
											 <option value="D">D</option>
											 <option value="E">E</option>
										</select>
										</td>	
									
									
							</tr>
							
							</table>
							</center>
						</div>
						<!-- End Form -->
						
						<!-- Form Buttons -->
						<br><br><br>
						<div class="buttons">
							<input type="SUBMIT" class="button" value="INSERT" />
						</div>
						<!-- End Form Buttons -->
					</form>
				</div>
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
						
						<p><a href="i_dosen.php">Data Dosen</a></p>
						<p><a href="i_mahasiswa.php">Data Mahasiswa</a></p>
						<p><a href="i_matakuliah.php">Mata Kuliah</a></p>
						<p><a href="i_ruangan.php">Ruangan</a></p>
						<p><a href="i_nilai.php">Data Nilai</a></p>
						<p><a href="i_mengajar.php">Data Mengajar</a></p>
						<p><a href="i_jadwal.php">Jadwal</a></p><p><a href="i_admin.php">Admin</a></p></p>
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
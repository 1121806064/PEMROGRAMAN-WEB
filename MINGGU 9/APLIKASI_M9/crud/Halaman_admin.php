<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['Hak']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
	<div class="kotak_login">
		<h1>Halaman Admin</h1>
		<br>
		<center>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['Hak']; ?></b>.</center>
	 
		<br/>
		<br/>
		
		<form action="1.php" method="post">
			<input type="submit" class="tombol_login" value="Aksess">
		</form>
	</div>
</body>
</html>
<?php 
	include 'fungsi/connect.php'; 
	session_start();
	// Mencegah kembali ke halaman Login sebelum melakukan Logout
	if (ISSET($_SESSION['level'])) {
		header('Location: beranda.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- End of Meta -->
	<title>Sistem Penilaian Efisiensi Maskapai</title>

	<!-- Materialize -->
	<link rel="stylesheet" type="text/css" href="assets/css/materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/materialize/fonts/roboto">
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Enf of Materialize -->

	<!-- Jquery -->
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/notify.js"></script>
	<script src="assets/css/materialize/js/materialize.min.js"></script>

	<!-- End of Jquery -->
</head>
<body class="loginbg" style="background: url(assets/img/logo1.jpg) no-repeat center center">
<?php
	if (ISSET($_SESSION['error'])) {
		// Terdapat Error Saat Login
		echo "<script type=\"text/javascript\"> Materialize.toast('Username atau Password Salah', 1000,'rounded red'); </script>";
	}
?>
    <div class="container">  
		<div class="row">
			<span class="elem-demo"></span>
			<div class="col s12 m6 l4 offset-m3 offset-l4" style="margin-top:150px;margin-bottom:150px;">
				<div class="box" style="box-shadow:6px 8px 6px #696969;background-color:white;padding:40px 20px 30px 20px;border-right: 1px solid #81BEF7;border-left: 1px solid #81BEF7">
					<div style="font-size:16pt;padding-bottom:10px;" align="center">
		      			MASUK PENGGUNA
		      		</div>
		      		<div class="toast-container"></div>
		      		<!-- <?php 
						if (ISSET($_SESSION['error'])) {
							// Terdapat Error Saat Login
							echo "<div class='row' style='background-color:red;text-align:center;color:white'>".$_SESSION['error']."</div>";
						}
					?>	 -->
		      		<form id="notifHere" action="fungsi/login.php" method="post" role="form">
			        	<div class="input-field">
			          		<i class="material-icons prefix">person</i>
			          		<input id="username" name="username" type="text" maxlength="40" class="validate" >
			          		<label for="username">username</label>
			        	</div>
			        	<div class="input-field">
			          		<i class="material-icons prefix">lock</i>
			          		<input id="password" name="password" type="text" maxlength="40" class="validate" >
			          		<label for="password">password</label>
			        	</div>
			      		<br/>
			      		<button type="submit" style="width:100%;" name="login" value="login" id="login-button" class="waves-effect waves-light btn blue darken-1">Masuk</button>
			      	</form>
			      	<div style="margin-top:40px;font-size:9pt;" align="center">
			      		<hr/>
			      		<b>Informatika/Ilmu Komputer &copy 2017</b><br/>
			      	</div>
				</div>
			</div>
		</div>
	</div>
</body>
<?php
	include ('footerLayout.php');
?>
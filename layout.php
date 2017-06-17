<?php 
	session_start();
	if ((!ISSET($_SESSION['username'])) AND (!ISSET($_SESSION['password']))) {
		// Mencegah direct access melalui url
		header('Location: index.php');
	} else {
		// Berhasil Login
		include "fungsi/connect.php";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Meta -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- End of Meta -->

    <!-- Tittle -->
	<title>Sistem Penilaian Efisiensi Maskapai</title>
	<!-- End of Tittle -->

	<!-- Materialize -->
	<link rel="stylesheet" type="text/css" href="assets/css/materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/materialize/fonts/roboto">
	<!-- End Materialize -->
	
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- End of Google Font -->

	<!-- Start of Script -->
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/css/materialize/js/materialize.min.js"></script>
	<!-- End of Script -->

	<!-- Start of Styler -->
	<style type="text/css">

	header, main{
      padding-left: 225px;
    }
    footer{
    	
    	padding-top: 20px;
    }

    @media only screen and (max-width:  992px) {
      header, main, footer {
        padding-left: 0;
      }
    }
    .collection-t{border:2px ; background-color: white; width: 100%}
    .collection{border:1px solid #d1d1d1; background-color: white}
    body{background-color: #f2f2f2;}
	nav {display: inline-block !important;}
	li  a  i {color: white !important;}
	li  a  p {color: white !important;}
	li  a {color: white !important; font-size: 20px !important; margin-top: 15px; margin-bottom: 15px;}
	.login-box-t{background:url('assetsimglogo.jpg') no-repeat center center;padding:20px;margin-top:100px;margin-bottom:100px;opacity:0.5;box-shadow:4px 4px 6px #696969;}
	.shadow{box-shadow: 8px 8px 8px #696969 !important; }
	.p-t{font-weight: bold;font-size: }
	h4{font-family: "Roboto";}
	table > thead{font-weight:bold;}
	table{word-wrap:break-word;}
	</style>
	<!-- End of Style -->
</head>
<body>
	<div class="row">
		
	</div>
	<header>
		<ul style="background-color: #4c90ff;" id="slide-out" class="side-nav fixed shadow">
		<img src="assets/img/2.png" class="responsive-img center" style="display: block;width: 150px;height: 150px;margin:auto;margin-top: 15px;margin-bottom: 30px"><hr>
		    <li>
		      	<a class="waves-effect waves-purple" href="beranda.php"> 
		      		<i class="material-icons">web</i>
		      		Beranda
		      	</a>
		    </li>
		    <li>
		      	<a class="waves-effect waves-purple" href="kelolaDMU.php"> 
		      		<i class="material-icons">store</i>
		      		Kelola DMU
		      	</a>
		    </li>
		    <li>
		      	<a class="waves-effect waves-purple" href="kelolaMaskapai.php"> 
		      		<i class="material-icons">work</i>
		      		Kelola Maskapai
		      	</a>
		    </li>
		    <li>
		      	<a class="waves-effect waves-purple" href="kelolaPengguna.php"> 
		      		<i class="material-icons">perm_identity</i>
		      		Kelola Pengguna
		      	</a>
		    </li>
		    <li>
		      	<a class="waves-effect waves-purple" href="kelolaVariabel.php"> 
		      		<i class="material-icons">assignment</i>
		      			Kelola Variabel
		      	</a>
		    </li>
		     <li>
		      	<a class="waves-effect waves-purple" href="perhitungan.php"> 
		      		<i class="material-icons">pageview</i>
		      			Hasil Perhitungan
		      	</a>
		    </li>
		    <li>
		      	<a class="waves-effect waves-purple" href="fungsi/logout.php"> 
		      		<i class="material-icons">power_settings_new</i>
		      			Keluar
		      	</a>
		    </li>
		</ul>
	</header>
  


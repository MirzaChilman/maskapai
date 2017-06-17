<?php 
	session_start();
	require 'connect.php';
	// Memastikan Data Terkirim Melalui Form
	if (ISSET($_POST["cabangMaskapai"])) 
	{
		$cabang = $_POST["cabangMaskapai"];
	}
	$query = "INSERT INTO tb_maskapai (cabang_maskapai) VALUES ('$cabang')";
	if (mysqli_query($conn, $query)) {
	    header('Location: ../kelolaMaskapai.php?balasan=1');
	} else {
	    header('Location: ../kelolaMaskapai.php?balasan=2');
	}
?>
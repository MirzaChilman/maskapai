<?php 
	session_start();
	require 'connect.php';
	// Memastikan Data Terkirim Melalui Form
	if (ISSET($_POST["namaPengguna"])) 
	{
		$nama = $_POST["namaPengguna"];
		$username = $_POST["usernamePengguna"];
		$password = md5($_POST["passwordPengguna"]);
		$cabang = $_POST["maskapaiPengguna"];
	}
	$query = "INSERT INTO tb_pengguna (nama, username, password, id_maskapai, level) VALUES ('$nama','$username','$password','$cabang','p')";
	if (mysqli_query($conn, $query)) {
	    header('Location: ../kelolaPengguna.php?balasan=1');
	} else {
	    header('Location: ../kelolaPengguna.php?balasan=2');
	}
?>
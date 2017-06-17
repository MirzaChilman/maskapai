<?php
	session_start();
	require 'connect.php';
	$id = $_GET['id'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$id_maskapai = $_POST['cabang_maskapai'];
	$query = 'UPDATE tb_pengguna SET nama="'.$nama.'", username="'.$username.'", password="'.$password.'", id_maskapai="'.$id_maskapai.'", level="p" WHERE id_pengguna="'.$id.'"';
	if (mysqli_query($conn, $query)) {
	    header('Location: ../kelolaPengguna.php?balasan=5');
	} else {
	    header('Location: ../kelolaPengguna.php?balasan=6');
	}
?>
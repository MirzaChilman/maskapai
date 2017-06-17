<?php
	session_start();
	require 'connect.php';
	$id = $_GET['id'];
	$nama = $_POST['namaVariabel'];
	$jenis = $_POST['jenisVariabel'];
	$satuan = $_POST['satuanVariabel'];
	$query = 'UPDATE tb_variabel SET nama_variabel ="'.$nama.'", jenis_variabel ="'.$jenis.'",satuan ="'.$satuan.'"  WHERE id_variabel="'.$id.'"';
	if (mysqli_query($conn, $query)) {
	    header('Location: ../kelolaVariabel.php?balasan=5');
	} else {
	    header('Location: ../kelolaVariabel.php?balasan=6');
	}
?>
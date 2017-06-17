<?php 
	session_start();
	require 'connect.php';
	// Memastikan Data Terkirim Melalui Form
	if (ISSET($_POST["namaVariabel"])) 
	{
		$nama = $_POST["namaVariabel"];
		$jenis = $_POST["jenisVariabel"];
		$satuan = $_POST["satuanVariabel"];
	}
	$query = "INSERT INTO tb_variabel (nama_variabel,jenis_variabel,satuan) VALUES ('$nama','$jenis','$satuan')";
	if (mysqli_query($conn, $query)) {
	    header('Location: ../kelolaVariabel.php?balasan=1');
	} else {
	    header('Location: ../kelolaVariabel.php?balasan=2');
	}
?>
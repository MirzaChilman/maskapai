<?php
	session_start();
	require 'connect.php';
	$id = $_GET['id'];
	$cabang_maskapai = $_POST['cabang_maskapai'];
	$query = 'UPDATE tb_maskapai SET cabang_maskapai="'.$cabang_maskapai.'" WHERE id_maskapai="'.$id.'"';
	if (mysqli_query($conn, $query)) {
	    header('Location: ../kelolaMaskapai.php?balasan=5');
	} else {
	    header('Location: ../kelolaMaskapai.php?balasan=6');
	}
?>
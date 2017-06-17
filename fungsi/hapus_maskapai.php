<?php
	include 'connect.php';
	$id = $_GET['id'];
	$query = 'DELETE FROM tb_maskapai WHERE id_maskapai='.$id.'';
	if (mysqli_query($conn, $query)) {
	    header('Location: ../kelolaMaskapai.php?balasan=3');
	} else {
	    header('Location: ../kelolaMaskapai.php?balasan=4');
	}
?>
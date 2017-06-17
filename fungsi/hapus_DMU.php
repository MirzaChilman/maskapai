<?php
	include 'connect.php';
	$id = $_GET['id'];
	$query = 'DELETE FROM tb_detail_dmu WHERE id_maskapai='.$id.'';
	if (mysqli_query($conn, $query)) {
	    header('Location: ../kelolaDMU.php?balasan=3');
	} else {
	    header('Location: ../kelolaDMU.php?balasan=4');
	}
?>
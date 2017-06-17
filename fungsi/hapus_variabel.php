<?php
	include 'connect.php';
	$id = $_GET['id'];
	$query = 'DELETE FROM tb_variabel WHERE id_variabel='.$id.'';
	if (mysqli_query($conn, $query)) {
	    header('Location: ../kelolaVariabel.php?balasan=3');
	} else {
	    header('Location: ../kelolaVariabel.php?balasan=4');
	}
?>
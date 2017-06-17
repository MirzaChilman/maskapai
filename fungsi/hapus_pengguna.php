<?php
	include 'connect.php';
	$id = $_GET['id'];
	$query = 'DELETE FROM tb_pengguna WHERE id_pengguna='.$id.'';
	if (mysqli_query($conn, $query)) {
	    header('Location: ../kelolaPengguna.php?balasan=3');
	} else {
	    header('Location: ../kelolaPengguna.php?balasan=4');
	}
?>
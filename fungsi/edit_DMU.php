<?php
	session_start();
	include 'connect.php';
	if (ISSET($_GET['id'])) {
		$id = $_GET['id']; // Id baris data yang dipilih untuk diubah

		$query = "SELECT * FROM tb_variabel";
		if (mysqli_query($conn, $query)) {
			$query = mysqli_query($conn, $query);
		 	if (mysqli_num_rows($query) > 0) {
				while($var = mysqli_fetch_assoc($query)){
					$name = str_replace(' ','_',$var['nama_variabel']);
					$nilai_var = $_POST[$name];
					$query2 = mysqli_query($conn, 'UPDATE tb_detail_dmu SET nilai_variabel="'.$nilai_var.'" WHERE id_maskapai="'.$id.'" AND id_variabel="'.$var['id_variabel'].'"');
				}
			}
			header('Location: ../kelolaDmu.php?balasan=5');
		} else {
		    header('Location: ../kelolaDmu.php?balasan=6&a');
		}
	} else {
		header('Location: ../kelolaDmu.php?balasan=6');
	}
	
		
	
?>
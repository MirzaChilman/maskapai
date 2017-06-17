<?php
	include ('layout.php');
?>

<main>	
	<div class="container" style="width: 80%">
		<div class="row">
			<div class="col s12 collection-t shadow" >
				<h3>Sistem Evaluasi Efisiensi Unit Kerja pada Maskapai </h3><hr>
			</div>
		</div>
		<div class="row">
		<?php
  			if (ISSET($_GET['balasan']) AND ($_GET['balasan']==1)) {
  			  	echo "<script type=\"text/javascript\"> Materialize.toast('Data Berhasil di Tambahkan', 2000,'rounded green'); </script>";
  			  } elseif (ISSET($_GET['balasan']) AND ($_GET['balasan']==2)) {
  			  		echo "<script type=\"text/javascript\"> Materialize.toast('Terjadi Kesalahan Ulangi', 2000,'rounded red'); </script>";
  			  } elseif (ISSET($_GET['balasan']) AND ($_GET['balasan']==3)) {
  			  		echo "<script type=\"text/javascript\"> Materialize.toast('Data Berhasil di Hapus', 2000,'rounded green'); </script>";
  			  } elseif (ISSET($_GET['balasan']) AND ($_GET['balasan']==4)) {
  			  		echo "<script type=\"text/javascript\"> Materialize.toast('Gagal Menghapus Data', 2000,'rounded red'); </script>";
  			  } elseif (ISSET($_GET['balasan']) AND ($_GET['balasan']==5)) {
  			  		echo "<script type=\"text/javascript\"> Materialize.toast('Data Berhasil di Ubah', 2000,'rounded green'); </script>";
  			  } elseif (ISSET($_GET['balasan']) AND ($_GET['balasan']==6)) {
  			  		echo "<script type=\"text/javascript\"> Materialize.toast('Data Gagal di Ubah', 2000,'rounded red'); </script>";
  			  }
		?>
			<div class="col s12 collection" >
				<table class="table centered highlight bordered">
					<thead>
						<tr>
							<th style="text-align: center">No</th>
							<th style="text-align: center">Maskapai</th>
							<th style="text-align: center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i=1;
							$query = mysqli_query($conn, "SELECT * FROM tb_maskapai");
							if (mysqli_num_rows($query) > 0) {
							    // output data of each row
							    while($pengguna = mysqli_fetch_assoc($query)) {
							    	// Query untuk mengkonversi id_klinik menjadi nama cabangnya
							        echo '
										<tr>
											<td>'.$i.'</td>
											<td>'.ucwords($pengguna['cabang_maskapai']).'</td>
											<td>
												<a class="btn-floating blue tooltipped" data-tooltip="Edit Maskapai" data-delay="1" href="formEditMaskapai.php?id='.$pengguna['id_maskapai'].'">
													<i class="material-icons">zoom_in</i>
												</a>
												<a class="del btn-floating red tooltipped" href="fungsi/hapus_maskapai.php?id='.$pengguna['id_maskapai'].'" id="" data-tooltip="Hapus Maskapai" data-delay="1">
													<i class="material-icons">clear</i>
												</a>
							        		</td>
										</tr>
									';

									$i++;
							    }
							} 
						?>
					</tbody>
					</tbody>
				</table>
				<footer>
					<div class="row">
						<div class="col s3">
							<a class="waves-effect waves-light btn" href="formTambahMaskapai.php"><i class="material-icons left">add</i>Tambah Maskapai</a>
						</div>
					</div>
				</footer>
			</div>
		</div>
	</div>
</main>

<?php
	include 'footerLayout.php';
?>
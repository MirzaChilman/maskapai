<?php
	include('layout.php')
?>

<main>	
	<div class="container" style="width: 80%">
		<div class="row">
			<div class="col s12 collection-t shadow" >
				<h3>Sistem Evaluasi Efisiensi Unit Kerja pada Maskapai </h3><hr>
			</div>
		</div>
		<div class="row">
			<div class="col s12 collection" >
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
		  			
		  			// Menghitung jumlah var input dan output
					$query = mysqli_query($conn, "SELECT * FROM tb_variabel ORDER BY jenis_variabel ASC, id_variabel ASC");
					$list_var = '';
					$input = 0;
					$output = 0;
					if (mysqli_num_rows($query) > 0) {
						// output data of each row
						while($var = mysqli_fetch_assoc($query)) {
							if ($var['jenis_variabel'] == 'i') {
								$input++;
							} else {
								$output++;
							}
							$nama = str_replace('_',' ',$var['nama_variabel']);
							$list_var .= "<th>$nama</th>";
						}
					}
		  		?>
				<table class="table highlight bordered">
					<thead>
						<tr>
							<th rowspan="2">No</th>
							<th rowspan="2">DMU</th>
							<th colspan="<?php echo $input; ?>" style="text-align: center">Input</th>
							<th colspan="<?php echo $output; ?>" style="text-align: center">Output</th>
							<th >Aksi</th>
						</tr>
						<tr>
							<?php echo $list_var; ?>
						</tr>
					</thead>
					<tbody>
					<?php
						$i = 1;
						$query = mysqli_query($conn, "SELECT k.cabang_maskapai, d.id_maskapai FROM tb_maskapai AS k, tb_detail_dmu AS d WHERE k.id_maskapai=d.id_maskapai GROUP BY id_maskapai ORDER BY id_detail");
						if (mysqli_num_rows($query)) {
							while ($cabang = mysqli_fetch_assoc($query)) {
								echo '
									<tr>
										<td>'.$i.'</td>
										<td>'.$cabang["cabang_maskapai"].'</td>
								';
								$id_maskapai = $cabang['id_maskapai'];

								// Variabel Input
								$query_input = mysqli_query($conn, 'SELECT d.nilai_variabel FROM tb_detail_dmu AS d, tb_variabel AS v WHERE d.id_variabel=v.id_variabel AND id_maskapai='.$id_maskapai.' AND v.jenis_variabel="i" ORDER BY v.jenis_variabel ASC, d.id_variabel');
								$count = 0;
								if (mysqli_num_rows($query_input)) {
									while ($nilai_var = mysqli_fetch_assoc($query_input)) {
										echo '<td>'.$nilai_var["nilai_variabel"].'</td>';
										$count++;
									}
								}
								if ($count < $input) {
									for ($k=$count; $k < $input; $k++) { 
										echo '<td></td>';
									}
								}

								// Variabel Output
								$query_output = mysqli_query($conn, 'SELECT d.nilai_variabel FROM tb_detail_dmu AS d, tb_variabel AS v WHERE d.id_variabel=v.id_variabel AND id_maskapai='.$id_maskapai.' AND v.jenis_variabel="o" ORDER BY v.jenis_variabel ASC, d.id_variabel');
								$count = 0;
								if (mysqli_num_rows($query_output)) {
									while ($nilai_var = mysqli_fetch_assoc($query_output)) {
										echo '<td>'.$nilai_var["nilai_variabel"].'</td>';
										$count++;
									}
								}
								if ($count < $output) {
									for ($j=$count; $j < $output; $j++) { 
										echo '<td></td>';
									}
								}
								echo '
										<td>
											<a class="btn-floating blue tooltipped" data-tooltip="Edit DMU" data-delay="1" href="formEditDMU.php?id='.$id_maskapai.'">
													<i class="material-icons">zoom_in</i>
												</a>
											<a class="del btn-floating red tooltipped" href="fungsi/hapus_DMU.php?id='.$id_maskapai.'" id="" data-tooltip="Hapus DMU" data-delay="1">
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
				</table>
				<footer>
					<div class="row">
						<div class="col s12">
							<a class="waves-effect waves-light btn" href="formTambahDMU.php"><i class="material-icons left">add</i>Tambah DMU</a>
							<a class="waves-effect waves-light btn" href="formTambahDMU.php"><i class="material-icons left">add</i>Hitung Efisiensi</a>
						</div>
					</div>

				</footer>
			</div>
		</div>
	</div>
</main>
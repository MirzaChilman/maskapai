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
				?>
				<table class="table highlight bordered">
					<thead>
						<tr>
							<th style="width: 5%">No</th>
							<th style="width: 20%">DMU</th>
							<th style="width: 25%">Nilai Efisiensi</th>
							<th style="width: 25%">Rekomendasi</th>
							
						</tr>
					</thead>
					<tbody>
					<tr>
						<td>1</td>
						<td>Garuda</td>
						<td>0.5</td>
						<td><strong>Belum Optimal</strong><br>Pilot: awal 2 Orang, direkomendasikan menjadi 1 Orang
						<br>Fuel: awal 1 Drum, direkomendasikan menjadi 1 Drum
						<br>Staff: awal 1 Orang, direkomendasikan menjadi 1 Orang
						<br>Harga Tiket: awal 100 ribu, direkomendasikan menjadi 100 ribu
						<br>On Time Performance: awal 85%, direkomendasikan menjadi 87%</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Citilink</td>
						<td>1</td>
						<td><strong>Sudah Optimal</strong></td>
					</tr>
					<tr>
						<td>2</td>
						<td>Air Asia</td>
						<td>0.8</td>
						<td><strong>Belum Optimal</strong><br>Pilot: awal 2 Orang, direkomendasikan menjadi 1 Orang
						<br>Fuel: awal 1 Drum, direkomendasikan menjadi 1 Drum
						<br>Staff: awal 1 Orang, direkomendasikan menjadi 1 Orang
						<br>Harga Tiket: awal 100 ribu, direkomendasikan menjadi 100 ribu
						<br>On Time Performance: awal 85%, direkomendasikan menjadi 87%</td>
					</tr>
					</tbody>
				</table>
				<footer>
					<div class="row">
						<div class="col s3">
							<a class="waves-effect waves-light btn" href="formTambahPengguna.php"><i class="material-icons left">add</i>Tambah Pengguna</a>
						</div>
					</div>
				</footer>
			</div>
		</div>
	</div>
</main>

<?php
	include ('footerLayout.php')
?>
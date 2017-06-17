<?php
	include('layout.php');
?>
<main>	
	<div class="container" style="width: 80%;">
		<div class="row">
			<div class="col s12 collection-t shadow" >
				<h3>Sistem Evaluasi Efisiensi Unit Kerja pada Maskapai </h3><hr>
			</div>
		</div>
		<?php
					if (ISSET($_GET['balasan']) AND ($_GET['balasan']==1)) {
		  			  	echo "<script type=\"text/javascript\"> Materialize.toast('DMU sudah digunakan, Pilih DMU yang lain', 2000,'rounded green'); </script>";
		  			  }
		?>
		<div class="row">
			<div class="col s12 collection">
				<div class="row">
			    	<form class="col s12" style="height: 100%" action="fungsi/add_DMU.php" method="post">
			      		<div class="row" style="margin-top: 30px;margin-left: 110px; width: 50%;margin-bottom: -20px">
			        		<div class="input-field col s12">
			        			<i class="material-icons prefix">language</i>
			          			<select name="id_maskapai" required="">
			          			<option value="" disabled selected style="background-color: red">Pilih Maskapai</option>
						      		<?php
							        	$query = mysqli_query($conn, "SELECT * FROM tb_maskapai");
							        	if (mysqli_num_rows($query) > 0) {
											// output data of each row
											while($id = mysqli_fetch_assoc($query)) {
												$id_maskapai = $id['id_maskapai'];
												    echo '<option value="'.$id_maskapai.'">'.$id["cabang_maskapai"].'</option>';
												}
											}
							        	?>
						    	</select>
						    	<label>Maskapai</label>
						  	</div>
			        	</div>	<br>
			        	<?php
					    	$input = 0;
					    	$output = 0;
							$query = mysqli_query($conn, "SELECT * FROM tb_variabel ORDER BY jenis_variabel ASC, id_variabel ASC");
							if (mysqli_num_rows($query) > 0) {
								while ($var = mysqli_fetch_assoc($query)) {
									$name = str_replace(' ','_',$var['nama_variabel']);
									$satuan = $var['satuan'];
									// Pemisah var
									if (($var['jenis_variabel'] == 'i') AND ($input == 0)) {
										echo '
										<div class="row" style="margin-left: 110px; width: 100%">
											<div class="input-field col s6">
												<b><legend for="icon_prefix">Variabel Input</legend></b>
											</div>
										</div>' ;
										$input = 1;
									} elseif (($var['jenis_variabel'] == 'o') AND ($output == 0)) {
										echo '<div class="row" style="margin-left: 110px; width: 100%">
											<div class="input-field col s6">
												<b><legend for="icon_prefix">Variabel Output</legend></b>
											</div>
										</div>';
										$output = 1;
									}
									echo '
										<div class="row" style="margin-left: 110px; width: 100%;">
							        		<div class="input-field col s6">
							          			<i class="material-icons prefix">contacts</i>
										        <input id="icon_prefix" type="text" class="validate" name="'.$name.'">
										        <label for="icon_prefix">'.$var["nama_variabel"].'</label>
										    </div>
							        	</div>				
									';
								}
							}
						?>
			      		<footer>
			      			<div class="container">
			      				<div class="row" style="width: 100%">
			      					<button class="waves-effect waves-blue btn"><i class="material-icons left">input</i>Submit</button>
			      					<!-- <a class="waves-effect waves-light btn"><i class="material-icons left">input</i>Submit</a> -->
			      				</div>
			      			</div>
			      			
			      		</footer>
			    	</form>
			  	</div>
			</div>
		</div>
	</div>
</main>
<?php
	include 'footerLayout.php';
?>
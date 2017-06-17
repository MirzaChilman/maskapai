<?php
	include('layout.php');
	$id = $_GET['id'];
?>
<main>	
	<div class="container" style="width: 80%;">
		<div class="row">
			<div class="col s12 collection-t shadow" >
				<h3>Sistem Evaluasi Efisiensi Unit Kerja pada Maskapai </h3><hr>
			</div>
		</div>
		<div class="row">
			<div class="col s12 collection">
				<div class="row">
			    	<form class="col s12" style="height: 100%" action="fungsi/edit_DMU.php" method="post">
			      		<div class="row" style="margin-top: 30px;margin-left: 110px; width: 50%;margin-bottom: -20px">
			        		<div class="input-field col s12">
			        			<i class="material-icons prefix">language</i>
			          			<select name="maskapaiPengguna" required="">
			          			<option value="" disabled selected style="background-color: red">Pilih Maskapai</option>
					      		<?php
				        			$query = mysqli_query($conn, "SELECT k.cabang_maskapai, d.id_maskapai FROM tb_maskapai AS k, tb_detail_dmu AS d WHERE k.id_maskapai=d.id_maskapai GROUP BY id_maskapai");
				        			if (mysqli_num_rows($query) > 0) {
									    // output data of each row
									    while($cabang = mysqli_fetch_assoc($query)) {
									    	$id_cabang = $cabang['id_maskapai'];
									    	if ($id == $id_cabang) { // Jika sesuai id yang sedang diubah
									    		echo '<option value="'.$id_cabang.'" selected>'.$cabang["cabang_maskapai"].'</option>';
									    	} else { // Jika bukan id yang sedang diubah
									    		echo '<option value="'.$id_cabang.'">'.$cabang["cabang_maskapai"].'</option>';
									    	}
									    }
									}
				        		?>
						    	</select>
						    	<label>Maskapai</label>
						  	</div>
			        	</div>	<br>
			        	<!-- <div class="row" style="margin-left: 150px; width: 100%">
			        		<div class="input-field col s6">
			          			<i class="material-icons prefix">contacts</i>
						        <input id="icon_prefix" type="text" class="validate" name="usernamePengguna">
						        <label for="icon_prefix">Username</label>
			        		</div>	
			      		</div> -->
			        	<?php
					    	$input = 0;
					    	$output = 0;
							$query = mysqli_query($conn, 'SELECT * FROM tb_variabel v, tb_detail_dmu d WHERE v.id_variabel=d.id_variabel AND d.id_maskapai='.$id.' ORDER BY v.jenis_variabel ASC, v.id_variabel ASC');
							if (mysqli_num_rows($query) > 0) {
								while ($var = mysqli_fetch_assoc($query)) {
									$name = str_replace(' ','_',$var['nama_variabel']);
									$satuan = $var['satuan'];
									$value = $var["nilai_variabel"];
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
										        <input id="icon_prefix" type="text" class="validate" name='.$name.' value='.$value.' ">
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
<?php 
	include 'layout.php';
	$id = $_GET['id'];
	$query = mysqli_query($conn, 'SELECT * FROM tb_variabel');
	if (mysqli_num_rows($query) > 0) {
		// output data of each row
		while($var = mysqli_fetch_assoc($query)) {
			$nama = $var['nama_variabel'];
			$jenis = $var['jenis_variabel'];
			$satuan = $var['satuan'];
		}
	}
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
			    	<form class="col s12" style="height: 550px" action="<?php echo "fungsi/edit_variabel.php?id=".$id.""; ?>" method="post">
			      		<div class="row" style="margin-top: 30px;margin-left: 150px; width: 50%;margin-bottom: -20px">
			        		<div class="input-field col s12">
			        			<i class="material-icons prefix">language</i>
			          			<select name="jenisVariabel">
			          			<option value="" disabled selected style="background-color: red">Pilih Maskapai</option>
						      		<?php
					        			if ($jenis == 'i') {
					        				echo '<option value="i" selected="selected">Input</option><option value="o">Output</option>';
					        			} elseif ($jenis == 'o') {
					        				echo '<option value="i">Input</option><option value="o" selected="selected">Output</option>';
					        			}
					        		?>
						    	</select>
						    	<label>Maskapai</label>
						  	</div>
			        	</div>	
			      		<div class="row" style="margin-top: 30px;margin-left: 150px; width: 100%;">
			        		<div class="input-field col s6">
			          			<i class="material-icons prefix">account_circle</i>
						        <input id="icon_prefix" type="text" class="validate" name="namaVariabel" value="<?php echo ucwords($nama); ?>">
						        <label for="icon_prefix">Nama Variabel</label>
			        		</div>	
			      		</div>
			      		<div class="row" style="margin-top: 30px;margin-left: 150px; width: 100%;">
			        		<div class="input-field col s6">
			          			<i class="material-icons prefix">contacts</i>
						        <input id="icon_prefix" type="text" class="validate" name="satuanVariabel" value="<?php echo ucwords($satuan); ?>">
						        <label for="icon_prefix">Satuan</label>
			        		</div>	
			      		</div>
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
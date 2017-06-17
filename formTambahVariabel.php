<?php
	include('layout.php')
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
			    	<form class="col s12" style="height: 550px" action="fungsi/add_variabel.php" method="post">
				    	<div class="row" style="margin-top: 30px;margin-left: 150px; width: 50%;margin-bottom: -20px">
			        		<div class="input-field col s12">
			        			<i class="material-icons prefix">language</i>
			          			<select name="jenisVariabel" required="">
			          			<option value="" disabled selected style="background-color: red">Pilih Jenis</option>
				          		<option value="i">Input</option>
				          		<option value="o">Output</option>
						    	</select>
						    	<label>Jenis Variabel</label>
						  	</div>
				        </div>	
			      		<div class="row" style="margin-top: 30px;margin-left: 150px; width: 100%;">
			        		<div class="input-field col s6">
			          			<i class="material-icons prefix">account_circle</i>
						        <input id="icon_prefix" type="text" class="validate" name="namaVariabel">
						        <label for="icon_prefix">Nama Variabel</label>
			        		</div>	
			      		</div>
			      		<div class="row" style="margin-top: 30px;margin-left: 150px; width: 100%;">
			        		<div class="input-field col s6">
			          			<i class="material-icons prefix">contacts</i>
						        <input id="icon_prefix" type="text" class="validate" name="satuanVariabel">
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
	include 'footerLayout.php'
?>
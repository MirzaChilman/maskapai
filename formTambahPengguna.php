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
			    	<form class="col s12" style="height: 550px" action="fungsi/add_pengguna.php" method="post">
			      		<div class="row" style="margin-top: 30px;margin-left: 150px; width: 50%;margin-bottom: -20px">
			        		<div class="input-field col s12">
			        			<i class="material-icons prefix">language</i>
			          			<select name="maskapaiPengguna" required="">
			          			<option value="" disabled selected style="background-color: red">Pilih Maskapai</option>
						      		<?php
					        			$query = mysqli_query($conn, "SELECT * FROM tb_maskapai");
					        			if (mysqli_num_rows($query) > 0) {
										    // output data of each row
										    while($cabang = mysqli_fetch_assoc($query)) {
										    	$id_cabang = $cabang['id_maskapai'];
										    	echo '<option value="'.$id_cabang.'">'.$cabang["cabang_maskapai"].'</option>';
										    }
										}
					        		?>
						    	</select>
						    	<label>Maskapai</label>
						  	</div>
			        	</div>	
			      		<div class="row" style="margin-top: 30px;margin-left: 150px; width: 100%;">
			        		<div class="input-field col s6">
			          			<i class="material-icons prefix">account_circle</i>
						        <input id="icon_prefix" type="text" class="validate" name="namaPengguna">
						        <label for="icon_prefix">Nama</label>
			        		</div>	
			      		</div>
			      		<div class="row" style="margin-left: 150px; width: 100%">
			        		<div class="input-field col s6">
			          			<i class="material-icons prefix">contacts</i>
						        <input id="icon_prefix" type="text" class="validate" name="usernamePengguna">
						        <label for="icon_prefix">Username</label>
			        		</div>	
			      		</div>
			      		<div class="row" style="margin-left: 150px; width: 100%">
			        		<div class="input-field col s6">
			          			<i class="material-icons prefix">vpn_key</i>
						        <input id="icon_prefix" type="text" class="validate" name="passwordPengguna">
						        <label for="icon_prefix">Password</label>
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
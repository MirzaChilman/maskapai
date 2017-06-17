<?php 
	include 'layout.php';
	$id = $_GET['id'];
	$query = mysqli_query($conn, 'SELECT * FROM tb_maskapai WHERE id_maskapai='.$id.'' );
	if (mysqli_num_rows($query) > 0) {
		// output data of each row
		while($cabang = mysqli_fetch_assoc($query)) {
			$cabang_maskapai = $cabang['cabang_maskapai'];
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
			    	<form class="col s12" style="height: 550px" action="<?php echo "fungsi/edit_maskapai.php?id=".$id.""; ?>" method="post">
			      		<div class="row" style="margin-top: 30px;margin-left: 150px; width: 100%;">
			        		<div class="input-field col s6">
			          			<i class="material-icons prefix">account_circle</i>
						        <input id="icon_prefix" type="text" class="validate" name="cabang_maskapai" value="<?php echo ucwords($cabang_maskapai); ?>">
						        <label for="icon_prefix">Nama Maskapai</label>
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
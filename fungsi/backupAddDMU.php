<!--  <?php
		//connect database
		require_once('connect.php');
		$db = new mysqli($servername, $username, $password, $database);
		
		$nama_dmu = "";
		$error_nama_dmu = "";
		$valid_nama_dmu= "";
		
		if ($db->connect_errno){
			die ("Could not connect to the database: <br/>". $db->connect_error);
		}
		
			if(isset($_POST["submit"])){
				$nama_dmu = $_POST["nama_dmu"];
				$id_user = $_SESSION["id"];
				
				$nama_dmu = test_input($_POST['nama_dmu']);
				if ($nama_dmu == ''){
					$error_nama_dmu = "Required";
					$valid_nama_dmu = FALSE;
				}else if(!preg_match("/^[a-zA-Z ]*$/",$nama_dmu)){
					$error_nama_dmu = "Hanya huruf dan spasi yang diperbolehkan";
					$valid_nama_dmu = FALSE;
				}else{
					$valid_nama_dmu = TRUE;
				}
				
				$query2 = "SELECT * FROM dmu WHERE nama_dmu='$nama_dmu'";
				$result2 = $db->query($query2);
				if ($result2->num_rows > 0){
					echo "<script>alert('Sudah Ada')</script>";
				}else{
				
					//update data into database
					if ($valid_nama_dmu){
						//escape inputs data
						$nama_dmu = $db->real_escape_string($nama_dmu);
						$id_user = $db->real_escape_string($id_user);
						
						//Assign a query
						$query = "INSERT INTO `tb_dmu`(`nama_dmu`) VALUES ('$_POST[nama_dmu]')";
						
						//execute the query
						$result = $db->query($query);
						if (!$result){
							die ("Could not query the database: <br />". $db->error);
						}else{						
							$last_id = $db->insert_id;
							
							$report = true;
							$query_krit = $db->query("SELECT * FROM tb_variabel ORDER BY jenis_variabel, id_variabel ASC");
							while ($row = $query_krit->fetch_object()){
								$query5 = "INSERT INTO `tb_detail_dmu`(`id_dmu`,`id_variabel`,`nilai_dmu`) VALUES ('$last_id','".$row->id_variabel."', '".$_POST['krit_'.$row->id_variabel]."')";
								$result5 = $db->query($query5);
								if (!$result5){
									$report = false;
									die ("Could not query the database:<br />". $db->error);
								}
								else{
									$report = true;
								}
							}
							if($report==true){
								echo "<script language='javascript'>alert('Data Berhasil Ditambahkan!')</script>";
								echo "<script language='javascript'>window.location.href='lihat_dmu.php'</script>";
							}else{
								echo "<script language='javascript'>alert('Data gagal Ditambahkan!')</script>";
							}
						}					
					}
				}
			}
			
			//Kode untuk validasi field lainnya
			function test_input($data){
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
		
	  ?> -->
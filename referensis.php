<style>
#dds {
	
	color: transparent;
	background: linear-gradient(-45deg,
	#1E90FF,
	#87CEFA,
	#F0F8FF,
	#87CEEB,
	#00BFFF,
	#E6E6FA
	
);
	background-size: 400% 400%;
	-webkit-animation: Gradient 30s ease infinite;
	-moz-animation: Gradient 30s ease infinite;
	animation: Gradient 30s ease infinite;
}

@-webkit-keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

@-moz-keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

@keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}
</style>
<?php
    //cek session
    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {
		if(isset($_POST['tambahjabat'])){
			$tambahkelas=mysqli_real_escape_string($config,$_POST['tambahkelas']);
			$tambahadmin=mysqli_real_escape_string($config,$_POST['tambahadmin']);
			$koig=mysqli_query($config,"INSERT INTO tbl_role(admin,role) VALUES('$tambahadmin','$tambahkelas')");
			echo'<script>
						
						window.location.href="./admin.php?page=sett&sub=ref";
						</script>';
		}
		if(isset($_POST['tambahgaji'])){
			$kjabatan=mysqli_real_escape_string($config,$_POST['kjabatan']);
			$statkar=mysqli_real_escape_string($config,$_POST['statkar']);
			$stattug=mysqli_real_escape_string($config,$_POST['stattug']);
			$gaji=mysqli_real_escape_string($config,$_POST['gaji']);
			$tunjab=mysqli_real_escape_string($config,$_POST['tunjab']);
			$tunfung=mysqli_real_escape_string($config,$_POST['tunfung']);
			$tuntrans=mysqli_real_escape_string($config,$_POST['tuntrans']);
			$tunut=mysqli_real_escape_string($config,$_POST['tunut']);
			$tunper=mysqli_real_escape_string($config,$_POST['tunper']);
			$tunkom=mysqli_real_escape_string($config,$_POST['tunkom']);
			
			$koig=mysqli_query($config,"INSERT INTO tbl_gaji_pokok(kelas_jabatan,gaji,status_karyawan,status_tugas,t_jabatan,t_fungsional,t_transportasi,t_utilitas,t_perumahan,t_komunikasi) VALUES('$kjabatan','$gaji','$statkar','$stattug','$tunjab','$tunfung','$tuntrans','$tunut','$tunper','$tunkom')");
			echo'<script>
						
						window.location.href="./admin.php?page=sett&sub=ref";
						</script>';
			
		}
		if(isset($_POST['nambahjabat'])){
			$tambahjabatan=mysqli_real_escape_string($config,$_POST['tambahjabatan']);
			$tambahsub=mysqli_real_escape_string($config,$_POST['tambahsub']);
			$tambahsubunit=mysqli_real_escape_string($config,$_POST['tambahsubunit']);
			$mx=mysqli_query($config,"INSERT INTO tbl_ref_jabatan(jabatan,kode_unit,kode_sub) VALUES('$tambahjabatan','$tambahsub','$tambahsubunit')");
			echo'<script>
						
						window.location.href="./admin.php?page=sett&sub=ref";
						</script>';
		}
		if(isset($_POST['nambahsub'])){
			$ketsub=mysqli_real_escape_string($config,$_POST['ketsub']);
			$nyub=mysqli_real_escape_string($config,$_POST['nyub']);
			
		
			
				
					$mxz=mysqli_query($config,"INSERT INTO tbl_sub_unit(sub_unit,kode_unit) VALUES('$ketsub','$nyub')");
					echo'<script>
						
						window.location.href="./admin.php?page=sett&sub=ref";
						</script>';
					
		}
					
		if(isset($_POST['nambahunit'])){
			$unitnya=mysqli_real_escape_string($config,$_POST['unitnya']);
			$kodeunit=mysqli_real_escape_string($config,$_POST['kodeunit']);
			$tukimans=mysqli_query($config,"SELECT * FROM tbl_department WHERE kode_unit='$kodeunit'");
			
				if(mysqli_num_rows($tukimans)<=0){
					$mxz=mysqli_query($config,"INSERT INTO tbl_department(unit_kerja,kode_unit) VALUES('$unitnya','$kodeunit')");
					echo'<script>
						
						window.location.href="./admin.php?page=sett&sub=ref";
						</script>';}
					else {
						echo'<script>
						alert(\'Kode Unit Tidak Boleh sama (harus unik) !\');
						window.location.href="./admin.php?page=sett&sub=ref";
						</script>';
					}
			
			
		}
		
		if(isset($_POST['tambahpenerimaan'])){
			
			$uraianpenerimaan=mysqli_real_escape_string($config,$_POST['uraianpenerimaan']);
			$mvs=mysqli_query($config,"INSERT INTO tbl_jenis_penerimaan(uraian) VALUES('$uraianpenerimaan')");
				if($mvs==true){
					echo'<script>
				window.location.href="./admin.php?page=sett&sub=ref";
				</script>';}
					else {
						echo'<script>
						alert(\'Error !\');
						window.location.href="./admin.php?page=sett&sub=ref";
						</script>';
					}
		}
		
		if(isset($_REQUEST['tambahpotongan'])){
			
			$uraianpotongan=mysqli_real_escape_string($config,$_REQUEST['uraianpotongan']);
			$jenis_bankpotong=mysqli_real_escape_string($config,$_REQUEST['jenis_bankpotong']);
			$atasnama=mysqli_real_escape_string($config,$_REQUEST['atasnama']);
			$norek=mysqli_real_escape_string($config,$_REQUEST['norek']);
			$gjz=mysqli_query($config,"SELECT * FROM tbl_ref_potongan WHERE uraian='$uraianpotongan'");
			if(mysqli_num_rows($gjz)>0){
				echo'<script>
				alert(\'Error Uraian sudah ada !\');
				window.location.href="./admin.php?page=sett&sub=ref";
				</script>';	
			} else {

			$mvsd=mysqli_query($config,"INSERT INTO tbl_ref_potongan(uraian,jenis_bank,atas_nama,no_rekening) VALUES('$uraianpotongan','$jenis_bankpotong','$atasnama','$norek')");
				if($mvsd==true){
					echo'<script>
				window.location.href="./admin.php?page=sett&sub=ref";
				</script>';}
					else {
						echo'<script>
						alert(\'Error !\');
						window.location.href="./admin.php?page=sett&sub=ref";
						</script>';
					}}
		}

		if(isset($_POST['tambahbank'])){
			
			$uraibank=mysqli_real_escape_string($config,$_REQUEST['uraibank']);
			$ngecek=mysqli_query($config,"SELECT kode_bank FROM tbl_ref_bank ORDER BY kode_bank DESC LIMIT 1");
			list($ngecek)=mysqli_fetch_array($ngecek);
			$cekcok=$ngecek+1;
			$mvsd=mysqli_query($config,"INSERT INTO tbl_ref_bank(kode_bank,nama_bank) VALUES('$cekcok','$uraibank')");
				if($mvsd==true){
					echo'<script>
				window.location.href="./admin.php?page=sett&sub=ref";
				</script>';}
					else {
						echo'<script>
						alert(\'Error !\');
						window.location.href="./admin.php?page=sett&sub=ref";
						</script>';
					}
		}
		
			$cekmaks=mysqli_query($config,"SELECT MAX(id) FROM tbl_gaji_pokok");
			list($maksimal)=mysqli_fetch_array($cekmaks);
			for($i=1;$i<=$maksimal;$i++){
				if(isset($_POST['editgaji'.$i.''])){
					
					$keljab=mysqli_real_escape_string($config,$_POST['keljab'.$i.'']);
					$statkaryawan=mysqli_real_escape_string($config,$_POST['statkaryawan'.$i.'']);
					$stattugas=mysqli_real_escape_string($config,$_POST['stattugas'.$i.'']);
					$gajis=mysqli_real_escape_string($config,$_POST['gajis'.$i.'']);
					$tunjanganjabatan=mysqli_real_escape_string($config,$_POST['tunjanganjabatan'.$i.'']);
					$tunjanganfungsional=mysqli_real_escape_string($config,$_POST['tunjanganfungsional'.$i.'']);
					$tunjangantransport=mysqli_real_escape_string($config,$_POST['tunjangantransport'.$i.'']);
					$tunjanganutilitas=mysqli_real_escape_string($config,$_POST['tunjanganutilitas'.$i.'']);
					$tunjanganperumahan=mysqli_real_escape_string($config,$_POST['tunjanganperumahan'.$i.'']);
					$tunjangankomunikasi=mysqli_real_escape_string($config,$_POST['tunjangankomunikasi'.$i.'']);
				$simpang=mysqli_query($config,"UPDATE tbl_gaji_pokok SET kelas_jabatan='$keljab',gaji='$gajis',status_karyawan='$statkaryawan',status_tugas='$stattugas',t_jabatan='$tunjanganjabatan',t_fungsional='$tunjanganfungsional',t_transportasi='$tunjangantransport',t_utilitas='$tunjanganutilitas',t_perumahan='$tunjanganperumahan',t_komunikasi='$tunjangankomunikasi' WHERE id='$i'");}
				
				if(isset($_POST['hapusgaji'.$i.''])){
					
					$ngampung=mysqli_query($config,"DELETE FROM tbl_gaji_pokok WHERE id='$i'");
				}
			}
			
			$maksjabat=mysqli_query($config,"SELECT MAX(id) FROM tbl_ref_jabatan");
			list($maksimaljabat)=mysqli_fetch_array($maksjabat);
			for($i=1;$i<=$maksimaljabat;$i++){
				if(isset($_REQUEST['simpanjabat'.$i.''])){
					
					$editjabat=mysqli_real_escape_string($config,$_REQUEST['editjabat'.$i.'']);
					$jabatsub=mysqli_real_escape_string($config,$_REQUEST['jabatsub'.$i.'']);
					$subsub=mysqli_real_escape_string($config,$_REQUEST['subsub'.$i.'']);
				
				$simpang=mysqli_query($config,"UPDATE tbl_ref_jabatan SET jabatan='$editjabat',kode_unit='$jabatsub',kode_sub='$subsub' WHERE id='$i'");}
				
				if(isset($_REQUEST['hapusjabat'.$i.''])){
					
					$ngampung=mysqli_query($config,"DELETE FROM tbl_ref_jabatan WHERE id='$i'");
				}
			}
		
		
			$maksje=mysqli_query($config,"SELECT MAX(id) FROM tbl_jenis_penerimaan");
			list($maksjenispenerimaan)=mysqli_fetch_array($maksje);
			for($i=1;$i<=$maksjenispenerimaan;$i++){
				if(isset($_REQUEST['editpen'.$i.''])){
					
					$uraiterima=mysqli_real_escape_string($config,$_REQUEST['uraiterima'.$i.'']);
					
				
				$simpangx=mysqli_query($config,"UPDATE tbl_jenis_penerimaan SET uraian='$uraiterima' WHERE id='$i'");}
				
				if(isset($_REQUEST['hapuspen'.$i.''])){
					
					$ngampunz=mysqli_query($config,"DELETE FROM tbl_jenis_penerimaan WHERE id='$i'");
				}
			}
			
		
			$maksjabatb=mysqli_query($config,"SELECT MAX(id) FROM tbl_ref_potongan");
			list($makspotong)=mysqli_fetch_array($maksjabatb);
			for($i=1;$i<=$makspotong;$i++){
				if(isset($_REQUEST['editpotong'.$i.''])){
					
					$uraipotong=mysqli_real_escape_string($config,$_REQUEST['uraipotong'.$i.'']);
					$jenisbank=mysqli_real_escape_string($config,$_REQUEST['jenis_bank'.$i.'']);
					$atasnama=mysqli_real_escape_string($config,$_REQUEST['atas_nama'.$i.'']);
					$nomerek=mysqli_real_escape_string($config,$_REQUEST['nomerek'.$i.'']);
				
				$simpangx=mysqli_query($config,"UPDATE tbl_ref_potongan SET uraian='$uraipotong',jenis_bank='$jenisbank',atas_nama='$atasnama',no_rekening='$nomerek' WHERE id='$i'");}
				
				if(isset($_REQUEST['hapuspotong'.$i.''])){
					
					$ngampunxg=mysqli_query($config,"DELETE FROM tbl_ref_potongan WHERE id='$i'");
				}
			}


			$maksbank=mysqli_query($config,"SELECT MAX(id) FROM tbl_ref_bank");
			list($maksjenisbank)=mysqli_fetch_array($maksbank);
			for($i=1;$i<=$maksjenisbank;$i++){
				if(isset($_REQUEST['editbank'.$i.''])){
					
					$uraianbank=mysqli_real_escape_string($config,$_REQUEST['uraianbank'.$i.'']);
					
				
				$simpangx=mysqli_query($config,"UPDATE tbl_ref_bank SET nama_bank='$uraianbank' WHERE id='$i'");}
				
				if(isset($_REQUEST['hapusbank'.$i.''])){
					
					$ngampunz=mysqli_query($config,"DELETE FROM tbl_ref_bank WHERE id='$i'");
				}
			}

			$makssub=mysqli_query($config,"SELECT MAX(id) FROM tbl_sub_unit");
			list($maksub)=mysqli_fetch_array($makssub);
			for($i=1;$i<=$maksub;$i++){
				if(isset($_REQUEST['editsubunit'.$i.''])){
					
					$subunits=mysqli_real_escape_string($config,$_REQUEST['subunits'.$i.'']);
					$jenis_unit=mysqli_real_escape_string($config,$_REQUEST['jenis_unit'.$i.'']);
					
				
				$simpangx=mysqli_query($config,"UPDATE tbl_sub_unit SET sub_unit='$subunits',kode_unit='$jenis_unit' WHERE id='$i'");}
				
				if(isset($_REQUEST['hapussubunit'.$i.''])){
					
					$ngampunz=mysqli_query($config,"DELETE FROM tbl_sub_unit WHERE id='$i'");
				}
			}

			$makssub=mysqli_query($config,"SELECT MAX(id) FROM tbl_sub_unit");
			list($maksub)=mysqli_fetch_array($makssub);
			for($i=1;$i<=$maksub;$i++){
				if(isset($_REQUEST['editsubunit'.$i.''])){
					
					$subunits=mysqli_real_escape_string($config,$_REQUEST['subunits'.$i.'']);
					$jenis_unit=mysqli_real_escape_string($config,$_REQUEST['jenis_unit'.$i.'']);
					
				
				$simpangx=mysqli_query($config,"UPDATE tbl_sub_unit SET sub_unit='$subunits',kode_unit='$jenis_unit' WHERE id='$i'");}
				
				if(isset($_REQUEST['hapussubunit'.$i.''])){
					
					$ngampunz=mysqli_query($config,"DELETE FROM tbl_sub_unit WHERE id='$i'");
				}
			}

			if(isset($_POST['tambahmerah'])){
				$tglmerah=mysqli_real_escape_string($config,$_POST['tglmerah']);
				$updatemerah=mysqli_query($config,"INSERT INTO tbl_ref_tgl_merah(tgl_merah) VALUES ('".$tglmerah."') ");
			}

			if(isset($_POST['simpanmerah'])){
				$bv=count($_POST['tgl_merah']);
				for($i=0;$i<$bv;$i++){
					$tgl_merah=mysqli_real_escape_string($config,$_POST['tgl_merah'][$i]);
					$sim=mysqli_query($config,"UPDATE tbl_ref_tgl_merah SET tgl_merah='$tgl_merah' WHERE id='$i'");

				}
			}

			$makssubs=mysqli_query($config,"SELECT MAX(id) FROM tbl_ref_tgl_merah");
			list($maksubs)=mysqli_fetch_array($makssubs);
			for($i=1;$i<=$maksubs;$i++){
				if(isset($_REQUEST['hapusmerah'.$i.''])){
					$ngampunz=mysqli_query($config,"DELETE FROM tbl_ref_tgl_merah WHERE id='$i'");
				}
			}





		?>
		
				<style>
				th,td,select {font-size:14px!important;text-align:center}
				</style>
				
				<div id="modald">
				<div id="modals" class="modal" style="background-color:white">
                <div class="modal-content white">
				<div class="input-field col s12">
				<h5><i class="material-icons" style="margin-bottom:8px">lock</i> Tabel Referensi Kelas Jabatan</h5>
				<small class="red-text">* Klik Tambah untuk menambah Data.</small><br>
				<small class="red-text">* Tambah Data dilakukan <strong>HANYA JIKA</strong> ada jabatan / sub unit / department baru.</small><br>
				<small class="red-text">* <strong> HATI - HATI</strong> dalam mengubah dan menambah data karena dapat merubah kestabilan sistem.</small>
				<form method="POST">
					<div class="col m12" id="colres">
                        <table class="bordered">
                            <thead class="blue lighten-4" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" id="head">
                                 <tr>
										<th width="1%"style="color:#fff">Nomor</th>
                                        <th width="25%"style="color:#fff">Kelas Jabatan</th>
										<th width="25%"style="color:#fff">Kode</th>
										<th width="20%"style="color:#fff">Tindakan</th>	
                                </tr>
								</thead>
								<tr>
								<td style="text-align:center" >-</td>
								<td style="text-align:center"><input style="text-align:center" type="text" name="tambahkelas"></td>
								<td style="text-align:center"><input  style="text-align:center" type="number" name="tambahadmin" min="2"></td>
								<td><button type="submit" name="tambahjabat" style="width:100%;color:white!important" class="btn small green waves-effect waves-light" onclick="return confirm('Anda yakin ingin menambah data ini?');">TAMBAH</button></td>
								</tr>
								
								<tbody>
								<tr style="background-color:#39424c!important;">
										<th width="1%"style="color:#fff">Nomor</th>
                                        <th width="25%"style="color:#fff">Kelas Jabatan</th>
										<th width="25%"style="color:#fff">Kode</th>
										<th width="20%"style="color:#fff">Tindakan</th>
                                </tr>
								</tbody>
                            
							<?php $mo=mysqli_query($config,"SELECT * FROM tbl_role");
							$no=1;
							while($row=mysqli_fetch_array($mo)){
								echo'
                            <tbody>
							<tr>
							<td style="text-align:center" >'.$no++.'</td>
							<td style="text-align:center" >'.$row['role'].'</td>
							<td style="text-align:center" disabled>'.$row['admin'].'</td>
							<td style="text-align:center" >-</td>
							</tr>
							</tbody>';} ?>
							
							</table>
							</div>
												
				
				</form>
				</div>
				</div>
				</div>
				</div>
				
				
				
				<div id="modald1">
				<div id="modals2" class="modal" style="background-color:white;width:90%" >
                <div class="modal-content white">
				<div class="input-field col s12">
				<h5><i class="material-icons" style="margin-bottom:8px">lock</i> Tabel Referensi Gaji</h5>
				<small class="red-text">* Klik Tambah untuk menambah Data.</small><br>
				<small class="red-text">* Tambah Data dilakukan <strong>HANYA JIKA</strong> ada jabatan / sub unit / department baru.</small><br>	
				<small class="red-text">* <strong> HATI - HATI</strong> dalam mengubah dan menambah data karena dapat merubah kestabilan sistem.</small>
				<br>
				<small class="red-text">* Kode harus unik / Tidak Boleh Sama !.</small>
				<form method="POST">
					<div class="col m12" id="colres">
                        <table class="bordered">
                            <thead class="blue lighten-4" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" id="head">
                                 <tr>
										<th width="1%"style="color:#fff">Nomor</th>
                                        <th width="15%"style="color:#fff;text-align:center">Kelas Jabatan</th>
										<th width="15%"style="color:#fff;text-align:center">Status Karyawan</th>
										<th width="15%"style="color:#fff;text-align:center">Status Tugas</th>
										<th width="35%"style="color:#fff;text-align:center">Gaji</th>
										<th width="35%"style="color:#fff;text-align:center">Tunjangan Jabatan</th>
										<th width="15%"style="color:#fff;text-align:center">Tunjangan Fungsional</th>
										<th width="15%"style="color:#fff;text-align:center">Tunjangan Transportasi</th>
										<th width="15%"style="color:#fff;text-align:center">Tunjangan Utilitas</th>
										<th width="15%"style="color:#fff;text-align:center">Tunjangan Perumahan</th>
										<th width="15%"style="color:#fff;text-align:center">Tunjangan Komunikasi</th>
										<th width="1%"style="color:#fff;text-align:center">Tindakan</th>
                                </tr>
								</thead>
								
								<tr>
								<td style="text-align:center" >-</td>
								<td style="text-align:center">
								<select name="kjabatan" class="browser-default">
								<?php 
								$kj=mysqli_query($config,"SELECT * FROM tbl_kelas_jabatan");
								while($row=mysqli_fetch_array($kj)){
									echo' 
									<option value="'.$row['kelas_jabatan'].'">'.$row['uraian_jabatan'].'</option>';
									
								}
								?>
								</select>
								
								</td>
								<td>
								<select name="statkar" class="browser-default">
									<option value="1">Komisaris</option>
                                    <option value="2">Direksi</option>
									<option value="3">Karyawan Perbantuan</option>
									<option value="4">Karyawan Tetap</option>
									<option value="5">PKWT</option>
									<option value="6">Koperasi</option>
								</select>
								</td>
								<td>
								<select name="stattug" class="browser-default">
									<option value="1">Penugasan JM</option>
                                    <option value="2">JMP</option>
									</select>
								</td>
								
								<td style="text-align:center"><input style="text-align:center" type="number" name="gaji"></td>
								<td style="text-align:center"><input style="text-align:center" type="number" name="tunjab"></td>
								<td style="text-align:center"><input style="text-align:center" type="number" name="tunfung"></td>
								<td style="text-align:center"><input style="text-align:center" type="number" name="tuntrans"></td>
								<td style="text-align:center"><input style="text-align:center" type="number" name="tunut"></td>
								<td style="text-align:center"><input style="text-align:center" type="number" name="tunper"></td>
								<td style="text-align:center"><input style="text-align:center" type="number" name="tunkom"></td>
								
								<td><button type="submit" name="tambahgaji" style="width:100%;color:white!important" class="btn small green waves-effect waves-light" onclick="return confirm('Anda yakin ingin menambah data ini?');">TAMBAH</button></td>
								</tr>
								</form>
								<tbody>
								<tr style="background-color:#39424c!important">
										<th width="1%"style="color:#fff">Nomor</th>
                                        <th width="20%"style="color:#fff;text-align:center">Kelas Jabatan</th>
										<th width="10%"style="color:#fff;text-align:center">Status Karyawan</th>
										<th width="10%"style="color:#fff;text-align:center">Status Tugas</th>
										<th width="35%"style="color:#fff;text-align:center">Gaji</th>
										<th width="35%"style="color:#fff;text-align:center">Tunjangan Jabatan</th>
										<th width="10%"style="color:#fff;text-align:center">Tunjangan Fungsional</th>
										<th width="10%"style="color:#fff;text-align:center">Tunjangan Transportasi</th>
										<th width="10%"style="color:#fff;text-align:center">Tunjangan Utilitas</th>
										<th width="10%"style="color:#fff;text-align:center">Tunjangan Perumahan</th>
										<th width="10%"style="color:#fff;text-align:center">Tunjangan Komunikasi</th>
										<th width="1%"style="color:#fff;text-align:center">Tindakan</th>
                                </tr>
								</tbody>
                            
							<?php $mo=mysqli_query($config,"SELECT * FROM tbl_gaji_pokok");
							$no=1;
							while($row=mysqli_fetch_array($mo)){
								
								echo'
								<form method="POST">
                            <tbody>
							<tr>
							<td style="text-align:center" >'.$no++.'</td>
							<td style="text-align:center" >
							<select name="keljab'.$row['id'].'" class="browser-default" style="width:100px!important">';
							$co=mysqli_query($config,"SELECT * FROM tbl_kelas_jabatan");
							while($rows=mysqli_fetch_array($co)){
								if($row['kelas_jabatan']==$rows['kelas_jabatan']){
							echo' 
								<option value="'.$rows['kelas_jabatan'].'" selected>'.$rows['uraian_jabatan'].'</option>';}
								else {
							echo' 
								<option value="'.$rows['kelas_jabatan'].'">'.$rows['uraian_jabatan'].'</option>';	
								}
							}
							echo'
							</select>
							</td>
							<td style="text-align:center" >
							<select name="statkaryawan'.$row['id'].'" class="browser-default" style="width:100px!important">';
							$cof=mysqli_query($config,"SELECT * FROM tbl_ref_status_karyawan");
							while($rowd=mysqli_fetch_array($cof)){
								if($row['status_karyawan']==$rowd['id']){
							echo' 
								<option value="'.$rowd['id'].'" selected>'.$rowd['status_karyawan'].'</option>';}
								else {
							echo' 
								<option value="'.$rowd['id'].'">'.$rowd['status_karyawan'].'</option>';	
								}
							}
							echo'
							</select></td>
														
							<td style="text-align:center">
							<select name="stattugas'.$row['id'].'" class="browser-default" style="width:100px!important">'; 
														if($row['status_tugas'] == 1) {
                                                         echo 
														'<option value="1" selected>Penugasan JM</option>
													   	<option value="2">JMP</option>';
                                                        }
														  else if($row['status_tugas'] == 2) {
                                                             echo 
														'<option value="1">Penugasan JM</option>
													   	<option value="2" selected>JMP</option>';
                                                        } echo'
														</select></td>
							<td style="text-align:center">Rp 
							<input type="number" name="gajis'.$row['id'].'" value="'.$row['gaji'].'" style="width:140%!important;text-align:center"></td>
							<td style="text-align:center">Rp 
							<input type="number" name="tunjanganjabatan'.$row['id'].'" value="'.$row['t_jabatan'].'" style="width:100%!important;text-align:center"></td>
							<td style="text-align:center" >Rp 
							<input type="number" name="tunjanganfungsional'.$row['id'].'" value="'.$row['t_fungsional'].'" style="width:100%!important;text-align:center"></td>
							<td style="text-align:center" >Rp 
							<input type="number" name="tunjangantransport'.$row['id'].'" value="'.$row['t_transportasi'].'" style="width:100%!important;text-align:center"></td>
							<td style="text-align:center" >Rp 
							<input type="number" name="tunjanganutilitas'.$row['id'].'" value="'.$row['t_utilitas'].'" style="width:100%!important;text-align:center"></td>
							<td style="text-align:center" >Rp 
							<input type="number" name="tunjanganperumahan'.$row['id'].'" value="'.$row['t_perumahan'].'" style="width:100%!important;text-align:center"></td>
							<td style="text-align:center" >Rp 
							<input type="number" name="tunjangankomunikasi'.$row['id'].'" value="'.$row['t_komunikasi'].'" style="width:100%!important;text-align:center"></td>
							<td style="text-align:center">
							<button type="submit" name="editgaji'.$row['id'].'" style="width:100%;color:white!important" class="btn small blue waves-effect waves-light" onclick="return confirm(\'Anda yakin ingin mengubah data ini?\');">EDIT</button>
							<button type="submit" name="hapusgaji'.$row['id'].'" style="width:100%;color:white!important" class="btn small red waves-effect waves-light" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');">HAPUS</button>
							</td>
							</tr>
							</tbody>
							</form>';} ?>
						
							</table>
							</div>
												
				
				
				</div>
				</div>
				</div>
				</div>
				
				<div id="modald2">
				<div id="modals3" class="modal" style="background-color:white">
                <div class="modal-content white">
				<div class="input-field col s12">
				<h5><i class="material-icons" style="margin-bottom:8px">lock</i> Tabel Referensi Jabatan</h5>
				<small class="red-text">* Klik Tambah untuk menambah Data.</small><br>
				<small class="red-text">* Tambah Data dilakukan <strong>HANYA JIKA</strong> ada jabatan / sub unit / department baru.</small><br>
				<small class="red-text">* <strong> HATI - HATI</strong> dalam mengubah dan menambah data karena dapat merubah kestabilan sistem.</small>
				<br>
				<small class="red-text">* Kode harus unik / Tidak Boleh Sama !.</small>
				<form method="POST">
					<div class="col m12" id="colres">
                        <table class="bordered" id="tblr">
                            <thead class="blue lighten-4" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" id="head">
                                 <tr>
										<th width="1%"style="color:#fff">Nomor</th>
                                        <th width="25%"style="color:#fff">Jabatan</th>
										<th width="25%"style="color:#fff">Unit Kerja</th>
										<th width="25%"style="color:#fff">Sub Unit</th>
										<th width="20%"style="color:#fff">Tindakan</th>	
                                </tr>
								</thead>
								<tr>
								<td style="text-align:center" >-</td>
								<td style="text-align:center"><input style="text-align:center" type="text" name="tambahjabatan"></td>
								<td style="text-align:center">
								<select class="browser-default" name="tambahsub">
								<?php 
								$gk=mysqli_query($config,"SELECT * FROM tbl_department");
								while($row=mysqli_fetch_array($gk)){
								echo '<option value="'.$row['kode_unit'].'">'.$row['unit_kerja'].'</option>';	
								}
								?>
								</select>
								</td>
								<td style="text-align:center">
								<select class="browser-default" name="tambahsubunit">
								<?php 
								$gkd=mysqli_query($config,"SELECT * FROM tbl_sub_unit");
								while($row=mysqli_fetch_array($gkd)){
								echo '<option value="'.$row['id'].'">'.$row['sub_unit'].'</option>';	
								}
								?>
								</select>
								</td>
								<td><button type="submit" name="nambahjabat" style="width:100%;color:white!important" class="btn small green waves-effect waves-light" onclick="return confirm('Anda yakin ingin menambah data ini?');">TAMBAH</button></td>
								</tr>
								
								<tbody>
								<tr style="background-color:#39424c!important;">
										<th width="1%"style="color:#fff">Nomor</th>
                                        <th width="25%"style="color:#fff">Jabatan</th>
										<th width="25%"style="color:#fff">Unit Kerja</th>
										<th width="25%"style="color:#fff">Sub Unit</th>
										<th width="20%"style="color:#fff">Tindakan</th>
                                </tr>
								</tbody>
                            
							<?php $mo=mysqli_query($config,"SELECT * FROM tbl_ref_jabatan");
							$no=1;
							while($rowd=mysqli_fetch_array($mo)){
								
								echo'
                            <tbody>
							<tr>
							<td style="text-align:center" >'.$no++.'</td>
							<td style="text-align:center" ><input style="text-align:center" type="text" name="editjabat'.$rowd['id'].'" value="'.$rowd['jabatan'].'"></input></td>
							<td style="text-align:center" ><select class="browser-default" name="jabatsub'.$rowd['id'].'">';
								
								$gkz=mysqli_query($config,"SELECT * FROM tbl_department");
								while($row=mysqli_fetch_array($gkz)){
								if($row['kode_unit']==$rowd['kode_unit']){
							echo' 
								<option value="'.$row['kode_unit'].'" selected>'.$row['unit_kerja'].'</option>';}
								else {
							echo' 
								<option value="'.$row['kode_unit'].'">'.$row['unit_kerja'].'</option>';	
								}	
								}
								echo'
								</select></td>
								<td style="text-align:center" ><select class="browser-default" name="subsub'.$rowd['id'].'">';
								
								$gkzd=mysqli_query($config,"SELECT * FROM tbl_sub_unit");
								while($row=mysqli_fetch_array($gkzd)){
								if($row['id']==$rowd['kode_sub']){
							echo' 
								<option value="'.$row['id'].'" selected>'.$row['sub_unit'].'</option>';}
								else {
							echo' 
								<option value="'.$row['id'].'">'.$row['sub_unit'].'</option>';	
								}	
								}
								echo'
								</select></td>
							<td style="text-align:center" >
							<button type="submit" name="simpanjabat'.$rowd['id'].'" style="width:100%;color:white!important" class="btn small blue waves-effect waves-light" onclick="return confirm(\'Anda yakin ingin mengubah data ini?\');">EDIT</button>
							<button type="submit" name="hapusjabat'.$rowd['id'].'" style="width:100%;color:white!important" class="btn small red waves-effect waves-light" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');">HAPUS</button>
							</td>
							</tr>
							</tbody>';} ?>
							
							</table>
							</div>
												
				
				</form>
				</div>
				</div>
				</div>
				</div>
				
				
				
				
				<div id="modald4">
				<div id="modals4" class="modal" style="background-color:white">
                <div class="modal-content white">
				<div class="input-field col s12">
				<h5><i class="material-icons" style="margin-bottom:8px">lock</i> Tabel Referensi Sub Unit</h5>
				<small class="red-text">* Klik Tambah untuk menambah Data.</small><br>
				<small class="red-text">* Tambah Data dilakukan <strong>HANYA JIKA</strong> ada jabatan / sub unit / department baru.</small><br>
				<small class="red-text">* <strong> HATI - HATI</strong> dalam mengubah dan menambah data karena dapat merubah kestabilan sistem.</small>
				<br>
				<small class="red-text">* Kode harus unik / Tidak Boleh Sama !.</small>
				<form method="POST">
					<div class="col m12" id="colres">
                        <table class="bordered" id="tblr">
                            <thead class="blue lighten-4" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" id="head">
                                 <tr>
										<th width="1%"style="color:#fff">Nomor</th>
										
                                        <th width="25%"style="color:#fff">Sub Unit</th>
										<th width="25%"style="color:#fff">Unit Kerja</th>
										<th width="20%"style="color:#fff">Tindakan</th>	
                                </tr>
								</thead>
								<tr>
								<td style="text-align:center" >-</td>
								
								<td style="text-align:center"><input style="text-align:center" type="text" name="ketsub"></td>
								<td style="text-align:center">
								<select class="browser-default" name="nyub">
								<?php 
								$gkz=mysqli_query($config,"SELECT * FROM tbl_department");
								while($row=mysqli_fetch_array($gkz)){
								echo '<option value="'.$row['kode_unit'].'">'.$row['unit_kerja'].'</option>';	
								}
								?>
								</select>
								</td>
								<td><button type="submit" name="nambahsub" style="width:100%;color:white!important" class="btn small green waves-effect waves-light" onclick="return confirm('Anda yakin ingin menambah data ini?');">TAMBAH</button></td>
								</tr>
								
								<tbody>
								<tr style="background-color:#39424c!important;">
										<th width="1%"style="color:#fff">Nomor</th>
										
                                        <th width="25%"style="color:#fff">Sub Unit</th>
										<th width="25%"style="color:#fff">Unit Kerja</th>
										<th width="20%"style="color:#fff">Tindakan</th>
                                </tr>
								</tbody>
                            
							<?php $mo=mysqli_query($config,"SELECT * FROM tbl_sub_unit");
							$no=1;
							while($row=mysqli_fetch_array($mo)){
								
								echo'
                            <tbody>
							<tr>
							<td style="text-align:center" >'.$no++.'</td>
							
							<td style="text-align:center" ><input type="text" name="subunits'.$row['id'].'" value="'.$row['sub_unit'].'"></td>
							<td style="text-align:center" >
							<select class="browser-default" name="jenis_unit'.$row['id'].'">';
							$kgsm=mysqli_query($config,"SELECT * FROM tbl_department");
							while($data=mysqli_fetch_array($kgsm)){
								if($row['kode_unit']==$data['kode_unit']){
								echo' <option value="'.$data['kode_unit'].'" selected>'.$data['unit_kerja'].'</option>';}
								else { echo' <option value="'.$data['kode_unit'].'">'.$data['unit_kerja'].'</option>';}
							}
							echo'
							</select
							></td>
							<td style="text-align:center" >
							<button type="submit" name="editsubunit'.$row['id'].'" style="width:100%;color:white!important" class="btn small blue waves-effect waves-light" onclick="return confirm(\'Anda yakin ingin merubah data ini?\');">EDIT</button>
							<button type="submit" name="hapussubunit'.$row['id'].'" style="width:100%;color:white!important" class="btn small red waves-effect waves-light" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');">HAPUS</button>
							</td>
							</tr>
							</tbody>';} ?>
							
							</table>
							</div>
												
				
				</form>
				</div>
				</div>
				</div>
				</div>
				
				
				
				
				
				<div id="modald5">
				<div id="modals5" class="modal" style="background-color:white">
                <div class="modal-content white">
				<div class="input-field col s12">
				<h5><i class="material-icons" style="margin-bottom:8px">lock</i> Tabel Referensi Unit Kerja</h5>
				<small class="red-text">* Klik Tambah untuk menambah Data.</small><br>
				<small class="red-text">* Tambah Data dilakukan <strong>HANYA JIKA</strong> ada jabatan / sub unit / department baru.</small><br>
				<small class="red-text">* <strong> HATI - HATI</strong> dalam mengubah dan menambah data karena dapat merubah kestabilan sistem.</small>
				<br>
				<small class="red-text">* Kode harus unik / Tidak Boleh Sama !.</small>
				<form method="POST">
					<div class="col m12" id="colres">
                        <table class="bordered" id="tblr">
                            <thead class="blue lighten-4" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" id="head">
                                 <tr>
										<th width="1%"style="color:#fff">Nomor</th>
										<th width="25%"style="color:#fff">Unit Kerja</th>
                                        <th width="25%"style="color:#fff">Kode Unit</th>
										<th width="20%"style="color:#fff">Tindakan</th>	
                                </tr>
								</thead>
								<tr>
								<td style="text-align:center" >-</td>
								<td style="text-align:center"><input style="text-align:center" type="text" name="unitnya"></td>
								<td style="text-align:center"><input style="text-align:center" type="text" name="kodeunit"></td>
								
								<td><button type="submit" name="nambahunit" style="width:100%;color:white!important" class="btn small green waves-effect waves-light" onclick="return confirm('Anda yakin ingin menambah data ini?');">TAMBAH</button></td>
								</tr>
								
								<tbody>
								<tr style="background-color:#39424c!important;">
										<th width="1%"style="color:#fff">Nomor</th>
										<th width="25%"style="color:#fff">Unit Kerja</th>
										<th width="25%"style="color:#fff">Kode Unit</th>
										<th width="20%"style="color:#fff">Tindakan</th>
                                </tr>
								</tbody>
                            
							<?php $mov=mysqli_query($config,"SELECT * FROM tbl_department");
							$no=1;
							while($row=mysqli_fetch_array($mov)){
								echo'
                            <tbody>
							<tr>
							<td style="text-align:center" >'.$no++.'</td>
							<td style="text-align:center" ><input type="text" min="0" name="unitku'.$row['id'].'" value="'.$row['unit_kerja'].'"></td>
							<td style="text-align:center" ><input type="number" min="0"  name="kodeku'.$row['id'].'" value="'.$row['kode_unit'].'"></td>
							<td style="text-align:center" >
							<button type="submit" name="editunitkerja'.$row['id'].'" style="width:100%;color:white!important" class="btn small blue waves-effect waves-light" onclick="return confirm(\'Anda yakin ingin merubah data ini?\');">EDIT</button>
							<button type="submit" name="hapusunitkerja'.$row['id'].'" style="width:100%;color:white!important" class="btn small red waves-effect waves-light" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');">HAPUS</button>
							</td>
							</tr>
							</tbody>';} ?>
							
							</table>
							</div>
												
				
				</form>
				</div>
				</div>
				</div>
				</div>
				
				<div id="modald6">
				<div id="modals6" class="modal" style="background-color:white">
                <div class="modal-content white">
				<div class="input-field col s12">
				<h5><i class="material-icons" style="margin-bottom:8px">lock</i> Tabel Referensi Penerimaan Lain</h5>
				<small class="red-text">* Klik Tambah untuk menambah Data.</small><br>
				<small class="red-text">* Tambah Data dilakukan <strong>HANYA JIKA</strong> ada penerimaan baru.</small><br>
				<small class="red-text">* <strong> HATI - HATI</strong> dalam mengubah dan menambah data karena dapat merubah kestabilan sistem.</small><br>
				<small class="red-text">* Kode harus unik / Tidak Boleh Sama !.</small>
				<form method="POST">
					<div class="col m12" id="colres">
                        <table class="bordered">
                            <thead class="blue lighten-4" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" id="head">
                                 <tr>
										<th width="1%"style="color:#fff">Nomor</th>
                                        <th width="25%"style="color:#fff">Kode</th>
										<th width="25%"style="color:#fff">Uraian</th>
										<th width="20%"style="color:#fff">Tindakan</th>	
                                </tr>
								</thead>
								<tr>
								<td style="text-align:center" >-</td>
								<td style="text-align:center"><input style="text-align:center" type="text" placeholder="otomatis" disabled></td>
								<td style="text-align:center"><input style="text-align:center" type="text" name="uraianpenerimaan"></td>
								<td><button type="submit" name="tambahpenerimaan" style="width:100%;color:white!important" class="btn small green waves-effect waves-light" onclick="return confirm('Anda yakin ingin menambah data ini?');">TAMBAH</button></td>
								</tr>
								
								<tbody>
								<tr style="background-color:#39424c!important;">
										<th width="1%"style="color:#fff">Nomor</th>
                                        <th width="25%"style="color:#fff">Kode</th>
										<th width="25%"style="color:#fff">Uraian</th>
										<th width="20%"style="color:#fff">Tindakan</th>
                                </tr>
								</tbody>
                            
					  <?php $moy=mysqli_query($config,"SELECT * FROM tbl_jenis_penerimaan");
							$no=1;
							while($row=mysqli_fetch_array($moy)){
								echo'
                            <tbody>
							<tr>
							<td style="text-align:center" >'.$no++.'</td>
							<td style="text-align:center" >'.$row['id'].'</td>
							<td style="text-align:center" >
							<form method="POST">
							<input type="text" name="uraiterima'.$row['id'].'" value="'.$row['uraian'].'"></td>
							<td style="text-align:center" >
							
							<button type="submit" name="editpen'.$row['id'].'" style="width:100%;color:white!important" class="btn small blue waves-effect waves-light" onclick="return confirm(\'Anda yakin ingin merubah data ini?\');">EDIT</button>
							<button type="submit" name="hapuspen'.$row['id'].'" style="width:100%;color:white!important" class="btn small red waves-effect waves-light" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');">HAPUS</button>
							</form>
							</td>
							</tr>
							</tbody>';} ?>
							
							</table>
							</div>
												
				
				</form>
				</div>
				</div>
				</div>
				</div>
				
				<div id="modald7">
				<div id="modals7" class="modal" style="background-color:white;width:90%">
                <div class="modal-content white">
				<div class="input-field col s12">
				<h5><i class="material-icons" style="margin-bottom:8px">lock</i> Tabel Referensi Potongan Lain</h5>
				<small class="red-text">* Klik Tambah untuk menambah Data.</small><br>
				<small class="red-text">* Tambah Data dilakukan <strong>HANYA JIKA</strong> ada potongan baru.</small><br>
				<small class="red-text">* <strong> HATI - HATI</strong> dalam mengubah dan menambah data karena dapat merubah kestabilan sistem.</small><br>
				<small class="red-text">* Kode harus unik / Tidak Boleh Sama !.</small>
				<form method="POST">
					<div class="col m12" id="colres">
                        <table class="bordered">
                            <thead class="blue lighten-4" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" id="head">
                                 <tr>
										<th width="1%"style="color:#fff">Nomor</th>
                                        <th width="10%"style="color:#fff">Kode</th>
										<th width="25%"style="color:#fff">Uraian</th>
										<th width="25%"style="color:#fff">Jenis Bank</th>
										<th width="25%"style="color:#fff">Atas Nama</th>
										<th width="20%"style="color:#fff">Nomor Rekening</th>
										<th width="20%"style="color:#fff">Tindakan</th>										
                                </tr>
								</thead>
								<tr>
								<td style="text-align:center" >-</td>
								<td style="text-align:center"><input style="text-align:center" type="text" placeholder="Otomatis"></td>
								<td style="text-align:center"><input style="text-align:center" type="text" name="uraianpotongan"></td>
								<td style="text-align:center" >
							<select class="browser-default" name="jenis_bankpotong">
							<?php
							$kgm=mysqli_query($config,"SELECT * FROM tbl_ref_bank");
							while($data=mysqli_fetch_array($kgm)){
								if($row['jenis_bank']==$data['kode_bank']){
								echo' <option value="'.$data['kode_bank'].'" selected>'.$data['nama_bank'].'</option>';}
								else { echo' <option value="'.$data['kode_bank'].'">'.$data['nama_bank'].'</option>';}
							}?>
							
							</select>
								<td style="text-align:center"><input style="text-align:center" type="text" name="atasnama"></td>
								<td style="text-align:center"><input style="text-align:center" type="text" name="norek"></td>
								<td><button type="submit" name="tambahpotongan" style="width:100%;color:white!important" class="btn small green waves-effect waves-light" onclick="return confirm('Anda yakin ingin menambah data ini?');">TAMBAH</button>
								</td>
								</tr>
								
								<tbody>
								<tr style="background-color:#39424c!important;">
										<th width="1%"style="color:#fff">Nomor</th>
                                        <th width="10%"style="color:#fff">Kode</th>
										<th width="25%"style="color:#fff">Uraian</th>
										<th width="25%"style="color:#fff">Jenis Bank</th>
										<th width="25%"style="color:#fff">Atas Nama</th>
										<th width="20%"style="color:#fff">Nomor Rekening</th>
										<th width="20%"style="color:#fff">Tindakan</th>
                                </tr>
								</tbody>
                            
							<?php $moye=mysqli_query($config,"SELECT * FROM tbl_ref_potongan");
							$no=1;
							while($row=mysqli_fetch_array($moye)){
								echo'
                            <tbody>
							<tr>
							<form method="POST">
							<td style="text-align:center" >'.$no++.'</td>
							<td style="text-align:center" >'.$row['id'].'</td>
							<td style="text-align:center" ><input type="text" name="uraipotong'.$row['id'].'" value="'.$row['uraian'].'"></td>
							<td style="text-align:center" >
							<select class="browser-default" name="jenis_bank'.$row['id'].'">';
							$kgm=mysqli_query($config,"SELECT * FROM tbl_ref_bank");
							while($data=mysqli_fetch_array($kgm)){
								if($row['jenis_bank']==$data['kode_bank']){
								echo' <option value="'.$data['kode_bank'].'" selected>'.$data['nama_bank'].'</option>';}
								else { echo' <option value="'.$data['kode_bank'].'">'.$data['nama_bank'].'</option>';}
							}
							echo'
							</select>
							</td>
							<td style="text-align:center" ><input type="text" name="atas_nama'.$row['id'].'" value="'.$row['atas_nama'].'"></td>
							<td style="text-align:center" ><input type="text" name="nomerek'.$row['id'].'" value="'.$row['no_rekening'].'"></td>
							<td style="text-align:center" >
							<button type="submit" name="editpotong'.$row['id'].'" style="width:100%;color:white!important" class="btn small blue waves-effect waves-light" onclick="return confirm(\'Anda yakin ingin merubah data ini?\');">EDIT</button>
							<button type="submit" name="hapuspotong'.$row['id'].'" style="width:100%;color:white!important" class="btn small red waves-effect waves-light" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');">HAPUS</button>
							</td>
							</form>
							</tr>
							</tbody>';} ?>
							
							</table>
							</div>
												
				
				</form>
				</div>
				</div>
				</div>
				</div>
				
				




					<div id="modald8">
				<div id="modals8" class="modal" style="background-color:white">
                <div class="modal-content white">
				<div class="input-field col s12">
				<h5><i class="material-icons" style="margin-bottom:8px">lock</i> Tabel Referensi Jenis Bank</h5>
				<small class="red-text">* Klik Tambah untuk menambah Data.</small><br>
				<small class="red-text">* Tambah Data dilakukan <strong>HANYA JIKA</strong> ada jenis Bank baru.</small><br>
				<small class="red-text">* <strong> HATI - HATI</strong> dalam mengubah dan menambah data karena dapat merubah kestabilan sistem.</small><br>
				<small class="red-text">* Kode harus unik / Tidak Boleh Sama !.</small>
				<form method="POST">
					<div class="col m12" id="colres">
                        <table class="bordered">
                            <thead class="blue lighten-4" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" id="head">
                                 <tr>
										<th width="1%"style="color:#fff">Nomor</th>
                                        <th width="10%"style="color:#fff">Kode Bank</th>
										<th width="25%"style="color:#fff">Nama Bank</th>
										<th width="20%"style="color:#fff">Tindakan</th>										
                                </tr>
								</thead>
								<tr>
								<td style="text-align:center" >-</td>
								<td style="text-align:center"><input style="text-align:center" type="text" placeholder="Otomatis"></td>
								<td style="text-align:center"><input style="text-align:center" type="text" name="uraibank"></td>
								<td><button type="submit" name="tambahbank" style="width:100%;color:white!important" class="btn small green waves-effect waves-light" onclick="return confirm('Anda yakin ingin menambah data ini?');">TAMBAH</button>
								</td>
								</tr>
								
								<tbody>
								<tr style="background-color:#39424c!important;">
										<th width="1%"style="color:#fff">Nomor</th>
                                        <th width="10%"style="color:#fff">Kode Bank</th>
										<th width="25%"style="color:#fff">Nama Bank</th>
										<th width="20%"style="color:#fff">Tindakan</th>	
                                </tr>
								</tbody>
                            
							<?php $moyed=mysqli_query($config,"SELECT * FROM tbl_ref_bank");
							$no=1;
							while($row=mysqli_fetch_array($moyed)){
								echo'
                            <tbody>
							<tr>
							<form method="POST">
							<td style="text-align:center" >'.$no++.'</td>
							<td style="text-align:center" >'.$row['kode_bank'].'</td>
							<td style="text-align:center" ><input type="text" name="uraianbank'.$row['id'].'" value="'.$row['nama_bank'].'"></td>
							<td style="text-align:center" >
							<button type="submit" name="editbank'.$row['id'].'" style="width:100%;color:white!important" class="btn small blue waves-effect waves-light" onclick="return confirm(\'Anda yakin ingin merubah data ini?\');">EDIT</button>
							<button type="submit" name="hapusbank'.$row['id'].'" style="width:100%;color:white!important" class="btn small red waves-effect waves-light" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');">HAPUS</button>
							</td>
							</form>
							</tr>
							</tbody>';} ?>
							
							</table>
							</div>
												
				
				</form>
				</div>
				</div>
				</div>
				</div>

								<?php 
								if(isset($_POST['tambahbaku'])){
									$jumlah_cuti=mysqli_real_escape_string($config,$_POST['jumlahcuti']);
									$menit_telat=mysqli_real_escape_string($config,$_POST['menittelat']);
									$tarif_manager=mysqli_real_escape_string($config,$_POST['tarifmanager']);
									$jam_bulan=mysqli_real_escape_string($config,$_POST['jambulan']);
									$menit_kerja=mysqli_real_escape_string($config,$_POST['menitkerja']);

									$updatebaku=mysqli_query($config,"UPDATE tbl_handle SET cuti='$jumlah_cuti',menit_telat='$menit_telat',tarif_manager='$tarif_manager',jam_bulan='$jam_bulan',menit_kerja='$menit_kerja' WHERE id=1");
								}
								
								?>

				<div id="modald9">
				<div id="modals9" class="modal" style="background-color:white">
                <div class="modal-content white">
				<div class="input-field col s12">
				<h5><i class="material-icons" style="margin-bottom:8px">lock</i> Tabel Referensi Nilai Baku</h5>
				<small class="red-text">* Klik Tambah untuk menambah Data.</small><br>
				<small class="red-text">* Tambah Data dilakukan <strong>HANYA JIKA</strong> ada perubahan keputusan.</small><br>
				<small class="red-text">* <strong> HATI - HATI</strong> dalam mengubah dan menambah data karena dapat merubah kestabilan sistem.</small><br>
				
				<form method="POST">
					<div class="col m12" id="colres">
                        <table class="bordered">
                            <thead class="blue lighten-4" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" id="head">
                                 <tr>
										<th width="1%"style="color:#fff">Jumlah Cuti Pertahun</th>
                                        <th width="10%"style="color:#fff">Menit Telat</th>
										<th width="25%"style="color:#fff">Tarif Lembur Manager keatas</th>
										<th width="20%"style="color:#fff">Jam Kerja Perbulan</th>
										<th width="20%"style="color:#fff">Menit Kerja Perbulan</th>
										<th width="20%"style="color:#fff">Tindakan</th>											
                                </tr>
								</thead>
								<?php 
								$kemski=mysqli_query($config,"SELECT cuti,menit_telat,tarif_manager,jam_bulan,menit_kerja FROM tbl_handle WHERE id=1");
								list($jumlahcuti,$menittelat,$tarifmanager,$jambulan,$menitkerja)=mysqli_fetch_array($kemski);
								?>
								<tr>
								<td style="text-align:center" ><input type="text" style="text-align:center" name="jumlahcuti" value="<?php echo $jumlahcuti; ?>"></td>
								<td style="text-align:center"><input type="text" style="text-align:center" name="menittelat" value="<?php echo $menittelat; ?>"></td>
								<td style="text-align:center"><input type="text" style="text-align:center" name="tarifmanager" value="<?php echo $tarifmanager; ?>"></td>
								<td style="text-align:center"><input type="text" style="text-align:center" name="jambulan" value="<?php echo $jambulan; ?>"></td>
								<td style="text-align:center"><input type="text" style="text-align:center" name="menitkerja" value="<?php echo $menitkerja; ?>"></td>
								<td><button type="submit" name="tambahbaku" style="width:100%;color:white!important" class="btn small blue waves-effect waves-light" onclick="return confirm('Anda yakin ingin mengubah data ini?');">SIMPAN</button>
								</td>
								</tr>
							
                            
							</table>
							</div>
												
				
				</form>
				</div>
				</div>
				</div>
				</div>		

<style>
.picker--opened .picker__holder{
	height:150%!important;
}
</style>







					<div id="modald10">
				<div id="modals10" class="modal" style="background-color:white">
                <div class="modal-content white">
				<div class="input-field col s12">
				<h5><i class="material-icons" style="margin-bottom:8px">lock</i> Tabel Referensi Tanggal Merah</h5>
				<small class="red-text">* Klik Tambah untuk menambah Data.</small><br>
				<small class="red-text">* Klik Simpan untuk mengubah data pada baris tertentu.</small><br>
				
				
				<form method="POST">
					<div class="col m12" id="colres">
                        <table class="bordered">
                            <thead class="blue lighten-4" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" id="head">
                                 <tr>
										<th width="1%"style="color:#fff">No.</th>
                                        <th width="50%"style="color:#fff">Tanggal</th>
										<th width="20%"style="color:#fff">Tindakan</th>											
                                </tr>
								</thead>
								<tbody>
								<tr>
								<td style="text-align:center" >-</td>
								<td style="text-align:center"><input type="text" class="datepicker" id="tgl_surat" style="text-align:center" name="tglmerah"></td>
								<td><button type="submit" name="tambahmerah" style="width:100%;color:white!important" class="btn small green waves-effect waves-light" onclick="return confirm('Anda yakin ingin menambah data ini?');">TAMBAH</button>
								</td>
								</tr>
								</tbody>
								<thead class="blue lighten-4" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" id="head">
                                 <tr>
										<th width="1%"style="color:#fff">No.</th>
                                        <th width="50%"style="color:#fff">Tanggal</th>
										<th width="20%"style="color:#fff">Tindakan</th>											
                                </tr>
								</thead>
								<tbody>
								<?php 
								$no=1;
								$kemsking=mysqli_query($config,"SELECT * FROM tbl_ref_tgl_merah ORDER BY tgl_merah DESC LIMIT 20");
								while($row=mysqli_fetch_array($kemsking)){
							echo'
								<tr>
								<td style="text-align:center" >'.$no++.'</td>
								<td style="text-align:center"><input type="text" class="datepicker" id="tgl_surat" style="text-align:center" name="tgl_merah[]" value="'.date('d - F - Y',strtotime($row['tgl_merah'])).'"></td>
								<td>
								
								<button type="submit" name="simpanmerah" style="width:100%;color:white!important" class="btn small blue waves-effect waves-light" onclick="return confirm(\'Anda yakin ingin mengubah data ini?\');">SIMPAN</button>
								<button type="submit" name="hapusmerah'.$row['id'].'" style="width:100%;color:white!important" class="btn small red waves-effect waves-light" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');">HAPUS</button>
								
								</td>
								</tr>';}
							?>
                            </tbody>
							</table>
							</div>
												
				
				</form>
				</div>
				</div>
				</div>
				</div>			





				
				
				
				<div class="row">
				<div class="card col m4" id="dds" style="background-color:blue">
				<div class="card-content" style="text-align:center!important">
				<a class="btn small blue darken-4 waves-effect waves-light tooltipped" id="refjabatan" style="background-color: #39424c!important;color:white"data-position="bottom" data-tooltip="Klik Untuk Melihat Tabel Kode Jabatan">Tabel Referensi Kode Jabatan</a>					
				</div>
				</div>
				
				<div class="card col s12 m4" id="dds" style="background-color:orange">
				<div class="card-content" style="text-align:center!important">
				<a style="background-color: #39424c!important;color:white" id="refgaji" class="btn small blue darken-4 waves-effect waves-light tooltipped" data-position="bottom" data-tooltip="Klik Untuk Melihat Tabel Gaji">Tabel Referensi Gaji</a>
				
				</div>
				</div>
				
				<div class="card col s12 m4" id="dds" style="background-color:orange">
				<div class="card-content" style="text-align:center!important">
				<a style="background-color: #39424c!important;color:white" id="refjabats" class="btn small blue darken-4 waves-effect waves-light tooltipped" data-position="bottom" data-tooltip="Klik Untuk Melihat Tabel Jabatan">Tabel Referensi Jabatan</a>
				
				</div>
				</div>
				
				<div class="card col s12 m4" id="dds" style="background-color:orange">
				<div class="card-content" style="text-align:center!important">
				<a style="background-color: #39424c!important;color:white" id="refsubunit" class="btn small blue darken-4 waves-effect waves-light tooltipped" data-position="bottom" data-tooltip="Klik Untuk Melihat Tabel Sub Unit">Tabel Referensi Sub Unit</a>
				
				</div>
				</div>
				
				<div class="card col s12 m4" id="dds" style="background-color:orange">
				<div class="card-content" style="text-align:center!important">
				<a style="background-color: #39424c!important;color:white" id="refunit" class="btn small blue darken-4 waves-effect waves-light tooltipped" data-position="bottom" data-tooltip="Klik Untuk Melihat Tabel Unit Kerja">Tabel Referensi Unit Kerja</a>
				
				</div>
				</div>
				
				<div class="card col s12 m4" id="dds" style="background-color:orange">
				<div class="card-content" style="text-align:center!important">
				<a style="background-color: #39424c!important;color:white" id="refpenerimaan" class="btn small blue darken-4 waves-effect waves-light tooltipped" data-position="bottom" data-tooltip="Klik Untuk Melihat Tabel Penerimaan Lain">Tabel Referensi Penerimaan Lain</a>
				
				</div>
				</div>
				
				<div class="card col s12 m4" id="dds" style="background-color:orange">
				<div class="card-content" style="text-align:center!important">
				<a style="background-color: #39424c!important;color:white" id="refpotongan" class="btn small blue darken-4 waves-effect waves-light tooltipped" data-position="bottom" data-tooltip="Klik Untuk Melihat Tabel Jabatan">Tabel Referensi Potongan Lain</a>
				
				</div>
				</div>

				<div class="card col s12 m4" id="dds" style="background-color:orange">
				<div class="card-content" style="text-align:center!important">
				<a style="background-color: #39424c!important;color:white" id="refbank" class="btn small blue darken-4 waves-effect waves-light tooltipped" data-position="bottom" data-tooltip="Klik Untuk Melihat Tabel Jabatan">Tabel Referensi Bank</a>
				
				</div>
				</div>
				
				<div class="card col s12 m4" id="dds" style="background-color:orange">
				<div class="card-content" style="text-align:center!important">
				<a style="background-color: #39424c!important;color:white" id="refbaku" class="btn small blue darken-4 waves-effect waves-light tooltipped" data-position="bottom" data-tooltip="Klik Untuk Melihat Tabel Jabatan">Tabel Nilai Baku</a>
				
				</div>
				</div>


				<div class="card col s12 m4" id="dds" style="background-color:orange">
				<div class="card-content" style="text-align:center!important">
				<a style="background-color: #39424c!important;color:white" id="refmerah" class="btn small blue darken-4 waves-effect waves-light tooltipped" data-position="bottom" data-tooltip="Klik Untuk Melihat Tabel Jabatan">Tabel Tanggal Merah</a>
				
				</div>
				</div>
				
				</div>
<?php }
?>
<script type="text/javascript" src="asset/js/halamanuser.js"></script>
<script>
$(document).ready(function(){
	$("#refjabatan").click(function(){
	var x = confirm('anda yakin?');
	if(x == true){
	alert('Harap berhati - hati dalam melakukan penambahan data!');
	$("#modals").openModal()}
						});
	$("#refgaji").click(function(){
	var xs = confirm('anda yakin?');
	if(xs == true){
	alert('Harap berhati - hati dalam melakukan penambahan data!');
	$("#modals2").openModal()}
						});
						
	$("#refjabats").click(function(){
	var xd = confirm('anda yakin?');
	if(xd == true){
	alert('Harap berhati - hati dalam melakukan penambahan data!');
	$("#modals3").openModal()}
						});
						
	$("#refsubunit").click(function(){
	var xd = confirm('anda yakin?');
	if(xd == true){
	alert('Harap berhati - hati dalam melakukan penambahan data!');
	$("#modals4").openModal()}
						});
						
	$("#refunit").click(function(){
	var xd = confirm('anda yakin?');
	if(xd == true){
	alert('Harap berhati - hati dalam melakukan penambahan data!');
	$("#modals5").openModal()}
						});
						
	$("#refpenerimaan").click(function(){
	var xd = confirm('anda yakin?');
	if(xd == true){
	alert('Harap berhati - hati dalam melakukan penambahan data!');
	$("#modals6").openModal()}
						});
						
	$("#refpotongan").click(function(){
	var xd = confirm('anda yakin?');
	if(xd == true){
	alert('Harap berhati - hati dalam melakukan penambahan data!');
	$("#modals7").openModal()}
						});
					
	$("#refbank").click(function(){
	var xd = confirm('anda yakin?');
	if(xd == true){
	alert('Harap berhati - hati dalam melakukan penambahan data!');
	$("#modals8").openModal()}
						});

	$("#refbaku").click(function(){
	var xd = confirm('anda yakin?');
	if(xd == true){
	alert('Harap berhati - hati dalam melakukan penambahan data!');
	$("#modals9").openModal()}
						});

	$("#refmerah").click(function(){
	var xd = confirm('anda yakin?');
	if(xd == true){
	alert('Harap berhati - hati dalam melakukan penambahan data!');
	$("#modals10").openModal()}
						});


						});



						</script>
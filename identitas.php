
<?php

if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else { 
	$id_user=mysqli_real_escape_string($config,$_REQUEST['id_user']);
	$menampung=mysqli_query($config,"SELECT tgl_bakti,jenis_kelamin,tempat_lahir,tanggal_lahir,status_keluarga,agama,goldarah,alamat,kelurahan,kecamatan,kota,propinsi,kode_pos,no_telpon,KTP,KK,NPWP,BPJSKT,BPJSKS,no_ktp,no_npwp,no_bpjsks,no_bpjskt,no_rekening,atas_nama,jenis_bank FROM tbl_identitas WHERE id_user='$id_user'");
	list($tgl_bakti,$jenis_kelamin,$tempat_lahir,$tanggal_lahir,$status_keluarga,$agama,$goldarah,$alamat,$kelurahan,$kecamatan,$kota,$propinsi,$kode_pos,$no_telpon,$ktp,$kk,$npwp,$bpjskt,$bpjsks,$noktp,$nonpwp,$nobpjsks,$nobpjskt,$no_rekening,$atas_nama,$jenis_bank)=mysqli_fetch_array($menampung);
		
	?>
			
			<div class="input-field col s6" style="width:100%;text-align:center">
						<h5><u><i class="material-icons md-36">perm_identity</i>Identitas</u></h5><br>
						</div>
                              <form method="POST" enctype="multipart/form-data">
								<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">group_add</i><label>Status Keluarga</label><br/>
                                        <div class="input-field col s11 right">
                                            <select class="browser-default" name="status_keluarga" id="status_keluarga" required>
                                                <option value="<?php echo $status_keluarga; ?>">
                                                    <?php
                                                        if($status_keluarga == 0){
                                                            echo 'Duda / Anak 0';
                                                        } else if($status_keluarga == 1) {
                                                            echo 'Duda / Anak 1';
                                                        } else if($status_keluarga == 2) {
                                                            echo 'Duda / Anak 2';
                                                        } else if($status_keluarga == 3) {
                                                            echo 'Duda / Anak 3';
                                                        } else if($status_keluarga == 4) {
                                                            echo 'Duda / Anak 4';
                                                        } else if($status_keluarga == 5) {
                                                            echo 'Duda / Anak 5';
                                                        } else if($status_keluarga == 6) {
                                                            echo 'Duda / Anak 1';
                                                        } else if($status_keluarga == 7) {
                                                            echo 'Duda / Anak 1';
                                                        } else if($status_keluarga == 8) {
                                                            echo 'Duda / Anak 1';
                                                        } else if($status_keluarga == 9) {
                                                            echo 'Duda / Anak 1';
                                                        } else if($status_keluarga == 11) {
                                                            echo 'Janda / Anak 0';
                                                        } else if($status_keluarga == 12) {
                                                            echo 'Janda / Anak 1';
                                                        } else if($status_keluarga == 13) {
                                                            echo 'Janda / Anak 2';
                                                        } else if($status_keluarga == 14) {
                                                            echo 'Janda / Anak 3';
                                                        } else if($status_keluarga == 15) {
                                                            echo 'Janda / Anak 4';
                                                        } else if($status_keluarga == 16) {
                                                            echo 'Janda / Anak 5';
                                                        } else if($status_keluarga == 17) {
                                                            echo 'Janda / Anak 6';
                                                        } else if($status_keluarga == 18) {
                                                            echo 'Janda / Anak 7';
                                                        } else if($status_keluarga == 19) {
                                                            echo 'Janda / Anak 8';
                                                        } else if($status_keluarga == 20) {
                                                            echo 'Janda / Anak 9';
                                                        } else if($status_keluarga == 22) {
                                                            echo 'Kawin / Anak 0';
                                                        } else if($status_keluarga == 23) {
                                                            echo 'Kawin / Anak 1';
                                                        } else if($status_keluarga == 24) {
                                                            echo 'Kawin / Anak 2';
                                                        } else if($status_keluarga == 25) {
                                                            echo 'Kawin / Anak 3';
                                                        } else if($status_keluarga == 26) {
                                                            echo 'Kawin / Anak 4';
                                                        } else if($status_keluarga == 27) {
                                                            echo 'Kawin / Anak 5';
                                                        } else if($status_keluarga == 28) {
                                                            echo 'Kawin / Anak 6';
                                                        } else if($status_keluarga == 29) {
                                                            echo 'Kawin / Anak 7';
                                                        } else if($status_keluarga == 30) {
                                                            echo 'Kawin / Anak 8';
                                                        } else if($status_keluarga == 31) {
                                                            echo 'Kawin / Anak 9';
                                                        } else if($status_keluarga == 32) {
                                                            echo 'Tidak Kawin';
                                                        } else if($status_keluarga == 33) {
                                                            echo 'Belum Kawin';
                                                        } 
														
														 
                                                    ?>
                                                </option>
												<?php
												$y=11;
												$z=22;
												for ($i=0;$i<10;$i++)  
														{ echo' <option value="'.$i.'">Duda / Anak '.$i.' </option>';}
													  for ($i=11;$i<21;$i++)  
														{ echo' <option value="'.$i.'">Janda / Anak '.($i-$y).' </option>';}
													for ($i=22;$i<32;$i++)  
														{ echo' <option value="'.$i.'">Kawin / Anak '.($i-$z).' </option>';}
											?>
												<option value="32">Tidak Kawin</option>
												<option value="33">Belum Kawin</option>
                                            </select>
                                        </div>
                                          
										  
										   
                                    </div>	
									<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">wc</i><label>Jenis Kelamin</label><br/>
                                        <div class="input-field col s11 right">
                                            <select class="browser-default" name="jenis_kelamin" id="jenis_kelamin" style="margin-bottom:24px;" required>
											
											<?php
											
                                                if($jenis_kelamin == 'L'){
                                                            echo '<option value="L" selected>Laki - Laki</option>
																  <option value="P">Perempuan</option>';
                                                        } else if($jenis_kelamin == 'P') {
                                                            echo '<option value="L">Laki - Laki</option>
																  <option value="P" selected>Perempuan</option>';
                                                        }
														else {
															echo '<option value="L">Laki - Laki</option>
																  <option value="P">Perempuan</option>';
														}?>
														
														
											
                                            </select>
                                        </div>
                                          
                                    </div>	
									
							<div class="input-field col s6">
                                <i class="material-icons prefix md-prefix">date_range</i>
                                <input id="tgl_surat" type="text" name="tgl_bakti" class="datepicker" value="<?php echo $tgl_bakti ;?>" required>
                                   
                                <label for="tgl_bakti" id="tgl_surat">Tanggal Bakti</label>
                            </div>
								
							  
									
									<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">place</i>
                                        <input id="tempat_lahir" type="text" name="tempat_lahir" value="<?php echo $tempat_lahir ;?>">
										
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                    </div>
								
							<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">wc</i><label>Golongan Darah</label><br/>
                                        <div class="input-field col s11 right">
                                            <select class="browser-default" name="goldarah" id="goldarah" style="margin-bottom:24px;">
											<?php
											
														if($goldarah == 'A'){
                                                            echo '<option value="A" selected>A</option>
																  <option value="B">B</option>
																  <option value="AB">AB</option>
																  <option value="O">O</option>';
                                                        } else if($goldarah == 'B') {
                                                            echo '<option value="A">A</option>
																  <option value="B" selected>B</option>
																  <option value="AB">AB</option>
																  <option value="O">O</option>';
                                                        } else if($goldarah == 'AB') {
                                                            echo '<option value="A">A</option>
																  <option value="B">B</option>
																  <option value="AB" selected>AB</option>
																  <option value="O">O</option>';
                                                        } else if($goldarah == 'O') {
                                                            echo '<option value="A">A</option>
																  <option value="B">B</option>
																  <option value="AB">AB</option>
																  <option value="O" selected>O</option>';
                                                        } else{
															echo '<option value="A">A</option>
																  <option value="B">B</option>
																  <option value="AB">AB</option>
																  <option value="O">O</option>';}
														
														
														?>
                                    
                                            </select>
                                        </div>
                                          
                                    </div>
							<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">wb_sunny</i><label>Agama</label><br/>
                                        <div class="input-field col s11 right">
                                            <select class="browser-default" name="agama" id="agama" style="margin-bottom:24px;" required>
                                              
                                                    <?php
                                                        if($agama == 1){
                                                            echo ' <option value="1" selected>Islam</option>
																	<option value="2">Protestan</option>
																	<option value="3">katholik</option>
																	<option value="4">Hindu</option>
																	<option value="5">Budha</option>
																	<option value="6">Konghucu</option>';
                                                        } 
														else if($agama == 2) {
                                                             echo ' <option value="1">Islam</option>
																	<option value="2" selected>Protestan</option>
																	<option value="3">katholik</option>
																	<option value="4">Hindu</option>
																	<option value="5">Budha</option>
																	<option value="6">Konghucu</option>';
                                                        }
														else if($agama == 3) {
                                                             echo ' <option value="1">Islam</option>
																	<option value="2">Protestan</option>
																	<option value="3" selected>katholik</option>
																	<option value="4">Hindu</option>
																	<option value="5">Budha</option>
																	<option value="6">Konghucu</option>';
                                                        }
														else if($agama == 4) {
                                                            echo ' <option value="1">Islam</option>
																	<option value="2">Protestan</option>
																	<option value="3">katholik</option>
																	<option value="4" selected>Hindu</option>
																	<option value="5">Budha</option>
																	<option value="6">Konghucu</option>';
                                                        }
														else if($agama == 5) {
                                                            echo ' <option value="1">Islam</option>
																	<option value="2">Protestan</option>
																	<option value="3">katholik</option>
																	<option value="4">Hindu</option>
																	<option value="5" selected>Budha</option>
																	<option value="6">Konghucu</option>';
                                                        }
														else if($agama == 6) {
                                                            echo ' <option value="1">Islam</option>
																	<option value="2">Protestan</option>
																	<option value="3">katholik</option>
																	<option value="4">Hindu</option>
																	<option value="5">Budha</option>
																	<option value="6" selected>Konghucu</option>';
                                                        } else {
															echo ' <option value="1">Islam</option>
																	<option value="2">Protestan</option>
																	<option value="3">katholik</option>
																	<option value="4">Hindu</option>
																	<option value="5">Budha</option>
																	<option value="6">Konghucu</option>';
														}
														 
                                                    ?>
                                               
                                   
                                            </select>
                                        </div>
                                          
                                    </div>	
							<div class="input-field col s6">
                                <i class="material-icons prefix md-prefix">cake</i>
                                <input id="tgl_surat" type="text" name="tanggal_lahir" class="datepicker" value="<?php echo $tanggal_lahir ;?>" required>
                                    
                                <label for="tgl_lahir" id="tgl_surat">Tanggal Lahir</label>
                            </div>
									
									<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">home</i>
                                        <input id="alamat" type="text" name="alamat" value="<?php echo $alamat ;?>" required>
                                        <label for="alamat">Alamat</label>
                                    </div>
									
									<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">turned_in</i>
                                        <input id="kelurahan" type="text" name="kelurahan" value="<?php echo $kelurahan ;?>">
                                        <label for="kelurahan">Kelurahan</label>
                                    </div>
									<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">turned_in_not</i>
                                        <input id="kecamatan" type="text" name="kecamatan" value="<?php echo $kecamatan ;?>">
                                        <label for="kecamatan">Kecamatan</label>
                                    </div>
									<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">flag</i>
                                        <input id="kota" type="text" name="kota" value="<?php echo $kota ;?>">
                                        <label for="kota">Kota</label>
                                    </div>
									<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">public</i>
                                        <input id="propinsi" type="text" name="propinsi" value="<?php echo $propinsi ;?>">
                                        <label for="propinsi">Propinsi</label>
                                    </div>
									<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">markunread_mailbox</i>
                                        <input id="kodepos" type="text" name="kode_pos" value="<?php echo $kode_pos ;?>">
                                        <label for="kodepos">Kode Pos</label>
                                    </div>
									<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">phone</i>
                                        <input id="telepon" type="text" name="no_telpon" value="<?php echo $no_telpon ;?>">
                                        <label for="telepon">No. Telepon</label>
                                    </div>
									
									<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">credit_card</i>
                                        <input id="noktp" type="text" name="no_ktp" value="<?php echo $noktp ;?>">
                                        <label for="no_ktp">No. KTP</label>
                                    </div>
									<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">credit_card</i>
                                        <input id="nonpwp" type="text" name="no_npwp" value="<?php echo $nonpwp ;?>" required>
                                        <label for="no_npwp">No. NPWP</label>
                                    </div>
									<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">credit_card</i>
                                        <input id="nobpjsks" type="text" name="no_bpjsks" value="<?php echo $nobpjsks ;?>">
                                        <label for="no_bpjsks">No. BPJS Kesehatan</label>
                                    </div>
									<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">credit_card</i>
                                        <input id="nobpjskt" type="text" name="no_bpjskt" value="<?php echo $nobpjskt ;?>">
                                        <label for="no_bpjskt">No. BPJS Ketenagakerjaan</label>
                                    </div>
									<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">attach_money</i>
                                        <input id="norekening" type="text" name="no_rekening" value="<?php echo $no_rekening ;?>">
                                        <label for="no_rekening">Nomor Rekening</label>
                                    </div>
									<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">style</i>
                                        <input id="atasnama" type="text" name="atas_nama" value="<?php echo $atas_nama ;?>">
                                        <label for="atas_nama">Atas Nama</label>
                                    </div>
									<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">account_balance</i><label>Jenis Bank</label><br/>
                                        <div class="input-field col s11 right">
                                            <select class="browser-default" name="jenis_bank" id="jenisbank" style="margin-bottom:24px;" required>
											
											<?php
														
														$jiod=mysqli_query($config,"SELECT jenis_bank FROM tbl_identitas WHERE id_user='$id_user'");
														list($bank)=mysqli_fetch_array($jiod);
														
														
                                               $bangku=mysqli_query($config,"SELECT * FROM tbl_ref_bank");
											   while($row=mysqli_fetch_array($bangku)){
												   if($row['kode_bank']==$bank){
												   echo '<option value="'.$row['kode_bank'].'" selected>'.$row['nama_bank'].'</option>';
												   }else{
												   echo '<option value="'.$row['kode_bank'].'">'.$row['nama_bank'].'</option>';}
											   }
											   
														?>
														
														
											
                                            </select>
                                        </div>
                                          
                                    </div>
									
									<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">not_interested</i><label>BPJS Jaminan Pensiun Di-nolkan</label><br/>
                                        <div class="input-field col s11 right">
                                            <select class="browser-default" name="bpjsjampesnol" id="bpjsjampesnol" style="margin-bottom:24px;" required>
											
											<?php
														
														$jios=mysqli_query($config,"SELECT bpjs_jampes_nol FROM tbl_identitas WHERE id_user='$id_user'");
														list($kel)=mysqli_fetch_array($jios);
														
												   if($kel==0){
												   echo '<option value="0" selected>Tidak</option>';
												   echo '<option value="1">Ya</option>';
												   }else{
												   echo '<option value="0">Tidak</option>';
												   echo '<option value="1" selected>Ya</option>';}
											   
											   
														?>
														
														
											
                                            </select>
                                        </div>
                                          
                                    </div>
									
									<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">not_interested</i><label>BPJS Jaminan Kesehatan Di-nolkan</label><br/>
                                        <div class="input-field col s11 right">
                                            <select class="browser-default" name="bpjsjamkesnol" id="bpjsjamkesnol" style="margin-bottom:24px;" required>
											
											<?php
														
														$jiosd=mysqli_query($config,"SELECT bpjs_jamkes_nol FROM tbl_identitas WHERE id_user='$id_user'");
														list($keld)=mysqli_fetch_array($jiosd);
														
												   if($keld==0){
												   echo '<option value="0" selected>Tidak</option>';
												   echo '<option value="1">Ya</option>';
												   }else{
												   echo '<option value="0">Tidak</option>';
												   echo '<option value="1" selected>Ya</option>';}
											   
											   
														?>
														
														
											
                                            </select>
                                        </div>
                                          
                                    </div>
									
									
								<script type="text/javascript">
								
            $(document).ready(function(){
				
            $('#bpjsjampesnol').change(function(){
                //Selected value
				
                var inputValue = $(this).val();
                var jampes = 'jampes';

                //Ajax for calling php function
                $.post('./js/bpjsnol.php', { bpjs : jampes , input : inputValue , id_user : <?php echo $id_user; ?>}, function(data){
                    
                    //do after submission operation in DOM
					$("#keljab").html(data);
                });
            });
			
			$('#bpjsjamkesnol').change(function(){
                //Selected value
				
                var inputValue = $(this).val();
				var jamkes = 'jamkes';

                //Ajax for calling php function
                $.post('./js/bpjsnol.php', { bpjs : jamkes , input : inputValue , id_user : <?php echo $id_user; ?>}, function(data){
                    
                    //do after submission operation in DOM
					$("#keljab").html(data);
                });
            });
        });
									
								</script>	
									
									
									<?php if($_SESSION['admin']==1){?>
									
									 <div class="row">
									<div class="col s12 m12">
									  <div class="card blue-grey darken-1" style="background-color:white!important">
										<div class="card-content black-text">
									<div class="input-field col s6" style="width:100%;text-align:center">
						<h5><u><i class="material-icons md-36">account_balance</i>Departemen</u></h5><br>
						</div>
						
						
					
		
		
									<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">account_balance</i><label>Unit Kerja</label><br/>
                                        <div class="input-field col s11 right">
                                            <select class="browser-default" name="unit_kerja" id="unit_kerja" style="margin-bottom:24px;" required>
											
											<?php
														
														$jio=mysqli_query($config,"SELECT unit FROM tbl_user WHERE id_user='$id_user'");
														list($unit)=mysqli_fetch_array($jio);
														
														
                                               $departement=mysqli_query($config,"SELECT * FROM tbl_department");
											   while($row=mysqli_fetch_array($departement)){
												   if($row['kode_unit']==$unit){
												   echo '<option value="'.$row['kode_unit'].'" selected>'.$row['unit_kerja'].'</option>';
												   }else{
												   echo '<option value="'.$row['kode_unit'].'">'.$row['unit_kerja'].'</option>';}
											   }
											   
														?>
														
														
											
                                            </select>
                                        </div>
                                          
                                    </div>		
									
									<script type="text/javascript">
								
            $(document).ready(function(){
				
            $('#unit_kerja').click(function(){
                //Selected value
				
                var inputValue = $(this).val();
               

                //Ajax for calling php function
                $.post('./js/subunit.php', { kode_unit: inputValue }, function(data){
                    
                    //do after submission operation in DOM
					$("#sub_unit").html(data);
                });
            });
        });
									
								</script>
									<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">wc</i><label>Sub Unit Kerja</label><br/>
                                        <div class="input-field col s11 right">
										<?php $jio=mysqli_query($config,"SELECT sub_unit FROM tbl_user WHERE id_user='$id_user'");
														list($unit)=mysqli_fetch_array($jio);
														$ghgod=mysqli_query($config,"SELECT sub_unit FROM tbl_sub_unit WHERE id='$unit'");
														list($goblok)=mysqli_fetch_array($ghgod);?>
                                            <select class="browser-default" name="sub_unit" id="sub_unit" style="margin-bottom:24px;" required>
												<option value="<?php echo $goblok; ?>"><?php echo $goblok; ?></option>
											
                                            </select>
                                        </div>
                                          
                                    </div>	
									
									<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">star</i><label>Jabatan</label><br/>
                                        <div class="input-field col s11 right">
                                            <select class="browser-default" name="jabatan" id="jabatan" style="margin-bottom:24px;" required>
											
											<?php
													
														$jios=mysqli_query($config,"SELECT jabatan FROM tbl_user WHERE id_user='$id_user'");
														list($jabatan)=mysqli_fetch_array($jios);
														$koyi=mysqli_query($config,"SELECT * FROM tbl_department");
														while($data=mysqli_fetch_array($koyi)){
                                               $departement=mysqli_query($config,"SELECT * FROM tbl_ref_jabatan WHERE kode_unit='".$data['kode_unit']."'");
											   while($row=mysqli_fetch_array($departement)){
												  if($row['id']==$jabatan){
													  
										    if (preg_match('/-/',$row['jabatan'])){
													echo '<option style="background-color:yellow;font-weight:bold!important;" value="'.$row['id'].'" disabled>'.$row['jabatan'].'</option>';
												}else{											   
												  echo '<option value="'.$row['id'].'" selected>'.$row['jabatan'].'</option>';}}
												  else {
											 if (preg_match('/-/',$row['jabatan'])){
													echo '<option style="background-color:yellow;font-weight:bold!important;" value="'.$row['id'].'" disabled>'.$row['jabatan'].'</option>';
												}else{											   
												  echo '<option value="'.$row['id'].'">'.$row['jabatan'].'</option>';}
												  }
											   }
														}
														?>
														
											
                                            </select>
                                        </div>
                                          
                                    </div>	
									
									
									
									<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">star</i><label>Kelas Jabatan</label><br/>
                                        <div class="input-field col s11 right">
                                            <select class="browser-default" name="keljab" id="keljab" style="margin-bottom:24px;" required>
											
											<?php
														
														$jios=mysqli_query($config,"SELECT kelas_jabatan FROM tbl_user WHERE id_user='$id_user'");
														list($kel)=mysqli_fetch_array($jios);
														
														
                                               $kelaz=mysqli_query($config,"SELECT * FROM tbl_kelas_jabatan ORDER BY kelas_jabatan");
											   while($row=mysqli_fetch_array($kelaz)){
												   if($row['kelas_jabatan']==$kel){
												   echo '<option value="'.$row['kelas_jabatan'].'" selected>'.$row['kelas_jabatan'].' - '.$row['uraian_jabatan'].'</option>';
												   }else{
												   echo '<option value="'.$row['kelas_jabatan'].'">'.$row['kelas_jabatan'].' - '.$row['uraian_jabatan'].'</option>';}
											   }
											   
														?>
														
														
											
                                            </select>
                                        </div>
                                          
                                    </div>
								<script type="text/javascript">
								
            $(document).ready(function(){
				
            $('#keljab').change(function(){
                //Selected value
				
                var inputValue = $(this).val();
               

                //Ajax for calling php function
                $.post('./js/kelas_jabatan.php', { input : inputValue , id_user : <?php echo $id_user; ?>}, function(data){
                    
                    //do after submission operation in DOM
					$("#keljab").html(data);
                });
            });
        });
									
								</script>	
								
								
								<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">directions</i><label>JMP / JMRB</label><br/>
                                        <div class="input-field col s11 right">
                                            <select class="browser-default" name="jmrb" id="jmrb" style="margin-bottom:24px;" required>
											
											<?php
														
														$jiv=mysqli_query($config,"SELECT jmrb FROM tbl_user WHERE id_user='$id_user'");
														list($jmrb)=mysqli_fetch_array($jiv);
														
														
                                               if($jmrb==0){
												   echo ' <option value="0" selected>JMP</option>';
												   echo ' <option value="1">JMRB</option>';
											   } else {
												   echo ' <option value="0">JMP</option>';
												   echo ' <option value="1" selected>JMRB</option>';
											   }
											   
														?>
														
														
											
                                            </select>
                                        </div>
                                          
                                    </div>
								<script type="text/javascript">
								
            $(document).ready(function(){
			
            $('#jmrb').change(function(){
                //Selected value
				
                var inputValue = $(this).val();
				var nilai = $("#jmrb option:selected").text();	
               
				var x = confirm('Apa anda yakin? akan merubah status kerja karyawan tersebut menjadi ' +nilai+ '?');
				if(x == true){
                $.post('./js/jmrb.php', { input : inputValue , id_user : <?php echo $id_user; ?>}, function(data){
                    
                    //do after submission operation in DOM
					$("#jmrb").html(data);
                });}
				
            });
        });
									
								</script>
								</div>
		</div>
		</div>
		
									
					<?php } ?>
									<div class="input-field col s6" style="width:100%;text-align:center">
						<h5><u><i class="material-icons md-36">attach_file</i>Attachment</u></h5><br>
						</div>
						
									<div class="input-field col s6"><h6> - KTP</h6>
                            <div class="file-field input-field tooltipped" data-position="top" data-tooltip="Upload KTP">
                                <div class="btn light-green darken-1">
                                    <span>File</span>
                                    <input type="file" id="file" name="file[0]">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Upload KTP" value="<?php echo $ktp ;?>" disabled>
                                    <small class="red-text">*Format file yang diperbolehkan *.JPG, *.PNG, *.JPEG *.DOC *.DOCX *.PDF dan ukuran maksimal file 3 MB</small>
									<?php echo'
								<strong>Lihat file : </strong><a class="blue-text" href="./upload/KTP/'.$ktp.'" target="_blank">'.$ktp.'</a>';?>									
                                </div>
                            </div>
							
                        </div>
						
						<div class="input-field col s6"><h6> - Kartu Keluarga</h6>
                            <div class="file-field input-field tooltipped" data-position="top" data-tooltip="Upload Kartu Keluarga">
                                <div class="btn light-green darken-1">
                                    <span>File</span>
                                    <input type="file" id="file" name="file[1]">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text"  placeholder="Upload Kartu Keluarga" value="<?php echo $kk ;?>" disabled>
                                    <small class="red-text">*Format file yang diperbolehkan *.JPG, *.PNG, *.JPEG *.DOC *.DOCX *.PDF dan ukuran maksimal file 3 MB</small><?php echo'
								<strong>Lihat file : </strong><a class="blue-text" href="./upload/KK/'.$kk.'" target="_blank">'.$kk.'</a>';?>    
                                </div>
                            </div>
                        </div>
						
						<div class="input-field col s6"><h6> - NPWP</h6>
                            <div class="file-field input-field tooltipped" data-position="top" data-tooltip="Upload NPWP">
                                <div class="btn light-green darken-1">
                                    <span>File</span>
                                    <input type="file" id="file" name="file[2]">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text"  placeholder="Upload NPWP" value="<?php echo $npwp ;?>" disabled>
                                    <small class="red-text">*Format file yang diperbolehkan *.JPG, *.PNG, *.JPEG *.DOC *.DOCX *.PDF dan ukuran maksimal file 3 MB</small><?php echo'
								<strong>Lihat file : </strong><a class="blue-text" href="./upload/NPWP/'.$npwp.'" target="_blank">'.$npwp.'</a>';?>	
                                </div>
                            </div>
                        </div>
						
						<div class="input-field col s6"><h6> - BPJS Ketenagakerjaan</h6>
                            <div class="file-field input-field tooltipped" data-position="top" data-tooltip="Upload BPJS Ketenagakerjaan">
                                <div class="btn light-green darken-1">
                                    <span>File</span>
                                    <input type="file" id="file" name="file[3]">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Upload BPJS Ketenagakerjaan" value="<?php echo $bpjskt ;?>" disabled>
                                    <small class="red-text">*Format file yang diperbolehkan *.JPG, *.PNG, *.JPEG *.DOC *.DOCX *.PDF dan ukuran maksimal file 3 MB</small><?php echo'
								<strong>Lihat file : </strong><a class="blue-text" href="./upload/BPJSKT/'.$bpjskt.'" target="_blank">'.$bpjskt.'</a>';?>    
                                </div>
                            </div>
                        </div>
						
						<div class="input-field col s6"><h6> - BPJS Kesehatan</h6>
                            <div class="file-field input-field tooltipped" data-position="top" data-tooltip="Upload BPJS Kesehatan">
                                <div class="btn light-green darken-1">
                                    <span>File</span>
                                    <input type="file" id="file" name="file[4]">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Upload BPJS Kesehatan"value="<?php echo $bpjsks ;?>"  disabled>
                                    <small class="red-text">*Format file yang diperbolehkan *.JPG, *.PNG, *.JPEG *.DOC *.DOCX *.PDF dan ukuran maksimal file 3 MB</small><?php echo'
								<strong>Lihat file : </strong><a class="blue-text" href="./upload/BPJSKS/'.$bpjsks.'" target="_blank">'.$bpjsks.'</a>';?> 
																
                                </div>
                            </div>
                        </div>
										
									<div class="input-field col s6" style="width:100%;text-align:left">	
									<?php 
									$id_user=mysqli_real_escape_string($config,$_REQUEST['id_user']);
									$oij=mysqli_query($config,"SELECT * FROM tbl_identitas WHERE id_user='$id_user'");
									if(mysqli_num_rows($oij)>0){
										echo'	
									<button type="submit" name="submitidentitas" class="btn-large blue waves-effect waves-light">SIMPAN <i class="material-icons">done</i></button>';}
									else {
										echo'
                                    <button type="submit" name="tambahidentitas" class="btn-large green waves-effect waves-light">TAMBAH <i class="material-icons">add</i></button>';}
									?>
                                </div>
									</form>
									
						<?php } ?>
						
					
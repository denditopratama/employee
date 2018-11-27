<?php
    ob_start();
    //cek session
	
    session_start();
	require('./include/config.php');

    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {
		
							
?>

<!doctype html>
<html lang="en">




<!-- Include Head START -->
<!-- E-mployee JMP By Dendito Pratama || denditoprtm@gmail.com -->
<?php include('./include/head.php'); ?>

	
  

<!-- Body START -->
<body id="vv" class="bg">

<!-- Header START -->
<header>



<!-- Include Navigation START -->
<?php include('./include/menutm.php'); ?>
<!-- Include Navigation END -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

</header>
<!-- Header END -->

<!-- Main START -->
<main>

<style>
.previous {
margin-right:50px!important;
}
body ,header {
    font-size:14px!important;
}
a.paginate_button:hover {
   color:transparent!important;
}
a.paginate_button.current {
    color:transparent!important;
}
.paginate{
    padding:110px !important;
}


</style>
    <!-- container START -->
    <div class="container">
    <?php
        if(isset($_REQUEST['page'])){
            $page = $_REQUEST['page'];
            switch ($page) {
                case 'add':
                    include "./tm/customer.php";
                    break;}
            } else { ?>
   
        <!-- Row START -->
        <div class="row">

            <div class="col m12" id="colres">
              
            
	
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
						<h5><u><i class="material-icons md-36">perm_identity</i>Prospective Costumer</u></h5><br>
						</div>
                              <form method="POST" enctype="multipart/form-data">
							
								
							
							
							<div class="input-field col s6">
                                <i class="material-icons prefix md-prefix">perm_identity</i>
                                <input type="text" name="nama_depan" value="<?php echo $tanggal_lahir ;?>" required>
                                    
                                <label for="nama_depan">Nama Depan</label>
                            </div>
									
							<div class="input-field col s6">
                                <i class="material-icons prefix md-prefix">perm_identity</i>
                                <input type="text" name="nama_belakang" value="<?php echo $tanggal_lahir ;?>" required>
                                    
                                <label for="nama_belakang">Nama Belakang</label>
                            </div>

                            	<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">flag</i><label>Provinsi</label><br/>
                                        <div class="input-field col s11 right">
                                            <select class="browser-default" name="provinsi" id="propinsi" style="margin-bottom:24px;" required>
											
											<?php
														
														// $jiod=mysqli_query($configtm,"SELECT jenis_bank FROM tbl_identitas WHERE id_user='$id_user'");
														// list($bank)=mysqli_fetch_array($jiod);
														
                                               $bangku=mysqli_query($configtm,"SELECT * FROM propinsi");
											   while($row=mysqli_fetch_array($bangku)){
												   echo '<option value="'.$row['id'].'">'.$row['propinsi'].'</option>';}
											   
														?>
														
                                            </select>
                                        </div>
                                          
                                    </div>

                                 <script>
                                  $(document).ready(function() {		

                                $("#propinsi").change(function ()      
                                { 
                                    var propinsi = $(this).val();       	       			
                                    $.post('./tm/proses_kota.php', { propinsi : propinsi }, function(data){
                    
                                            $("#kota").html(data);
                                        });
                                });			    
                                });
                                </script>	

                                    <div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">flag</i><label>Kota</label><br/>
                                        <div class="input-field col s11 right">
                                            <select class="browser-default" name="kota" id="kota" style="margin-bottom:24px;" required>
					
													
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
														$ghgod=mysqli_query($config,"SELECT id,sub_unit FROM tbl_sub_unit WHERE id='$unit'");
														list($idgoblok,$goblok)=mysqli_fetch_array($ghgod);?>
                                            <select class="browser-default" name="sub_unit" id="sub_unit" style="margin-bottom:24px;" required>
												<option value="<?php echo $idgoblok; ?>"><?php echo $goblok; ?></option>
											
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
						
					



            </div>
            <!-- Welcome Message END -->

				
				
            </div>
			
	
	
	
	
    <!-- container END -->

</main>
<!-- Main END -->

<!-- Include Footer START -->
<?php include('./include/footer.php'); ?>
<!-- Include Footer END -->


	
</body>
<!-- Body END -->

</html>

<?php
    }}
?>

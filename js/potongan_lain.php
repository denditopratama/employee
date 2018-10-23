<?php 


$host = "localhost";
    $username = "root";
    $password = "";
    $database = "dbjmproperti";
    $config = mysqli_connect($host, $username, $password, $database);

    if(!$config){
        die("Koneksi database gagal: " . mysqli_connect_error());
    }


												
												$id_select=mysqli_real_escape_string($config,$_REQUEST['id_select']);
												$id_user=mysqli_real_escape_string($config,$_REQUEST['id_user']);
												$id_gaji=mysqli_real_escape_string($config,$_REQUEST['id_gaji']);
												$nilai=mysqli_real_escape_string($config,$_REQUEST['nilai']);
												
												
												if($id_select==1){
												
												
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET pot_thr='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");}
												
												else if($id_select==2){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET pot_jasprod='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==3){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET pot_ongkos_cuti='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==4){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET pot_bantuan='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==5){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET pot_kesehatan='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==6){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET pot_koperasi='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==7){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET pot_koperasi_pusat='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==8){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET pot_iuran_dapen='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==9){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET pot_iuran_purnakarya='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==10){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET pot_iuran_tht='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==11){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET pot_asuransi_kendaraan='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==12){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET pot_saham_jasamarga='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==13){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET pot_umr='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==14){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET pot_koperasi_jmb='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==15){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET pot_koperasi_cirebon='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==16){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET pot_iuran_dplk='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==17){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET pot_rapel_jaminan_pensiun='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==18){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET pot_jaminan_pensiun='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==19){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET pot_bpjs_karyawan='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==20){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET pot_jamsostek='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==21){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET pot_iuran_pasti='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==22){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET pot_iuran_skjm='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==23){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET pot_premi='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==24){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET pot_rapel_bpjs_kesehatan='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==25){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET pot_rapel_bpjs_ketenagakerjaan='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												if(!empty($_REQUEST['input'])){
												$input=mysqli_real_escape_string($config,$_REQUEST['input']);
												if($input=='anjay1'){
													$jm=mysqli_query($config,"UPDATE tbl_gaji SET absen='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");
												}
												else if($input=='anjay2'){
												$jm=mysqli_query($config,"UPDATE tbl_gaji SET telat='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");} }
												
												
												
												
												
												/* $ages = mysqli_real_escape_string($config,date_diff(date_create($tgl_bakti), date_create('now'))->m);
												if($ages<=0){
													$tehar=0;
												} else {
													$tehar=1000;
												} */
												
											
											?>
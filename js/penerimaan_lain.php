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
												$numpang=mysqli_query($config,"SELECT admin,status_karyawan,status_tugas FROM tbl_user WHERE id_user='$id_user'");
												list($admin,$status_karyawan,$status_tugas)=mysqli_fetch_array($numpang);
												$ngambil=mysqli_query($config,"SELECT tgl_bakti FROM tbl_identitas WHERE id_user='$id_user'");
												list($lama)=mysqli_fetch_array($ngambil);
												$gajing=mysqli_query($config,"SELECT gaji,t_jabatan,t_fungsional FROM tbl_gaji_pokok WHERE admin='$admin' AND(status_karyawan='$status_karyawan' AND status_tugas='$status_tugas')");
												list($gaji,$tun_jabatan,$tun_fungsional)=mysqli_fetch_array($gajing);
												$ages = date_diff(date_create($lama), date_create('now'))->m;
												$gajih=$gaji+$tun_jabatan+$tun_fungsional;
												if($ages>=12){$ages=1;}
												if($status_tugas==1){$ages=12;}
												if($admin==2 && $admin==3 && $admin==10){
												$jumlahthr=$ages/12*$gaji;
												} else {
												$jumlahthr=$ages/12*$gajih;}
												
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET thr='$jumlahthr' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");
												echo $jumlahthr;}
												
												else if($id_select==2){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET jasprod='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==3){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET ongkos_cuti='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==4){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET bantuan_pengobatan='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==5){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET lembur='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==6){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET rapel_lembur='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==7){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET rapel_penerimaan='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==8){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET fas_cop='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==9){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET rapel_honor='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==10){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET tam_jamsos='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==11){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET jaminan_pensiun='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==12){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET bpjsks='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==13){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET rapel_jaminan='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==14){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET rapel_bpjsks='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==15){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET rapel_bpjskt='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												
												else if($id_select==16){
												$kos=mysqli_query($config,"UPDATE tbl_gaji SET penerimaan_lainnya='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");	
													
												}
												if(!empty($_REQUEST['input'])){
												$input=mysqli_real_escape_string($config,$_REQUEST['input']);
												if($input=='anjay'){
													$jm=mysqli_query($config,"UPDATE tbl_gaji SET gaji_jm='$nilai' WHERE id_user='$id_user' AND id_gaji='$id_gaji'");
												}}
												
												
												
												
												
												/* $ages = mysqli_real_escape_string($config,date_diff(date_create($tgl_bakti), date_create('now'))->m);
												if($ages<=0){
													$tehar=0;
												} else {
													$tehar=1000;
												} */
												
											
											?>
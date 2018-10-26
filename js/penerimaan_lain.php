<?php 


require('../include/config.php');


												
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
												
												$kos=mysqli_query($config,"INSERT INTO tbl_penerimaan(id_gaji,id_user,kode_penerimaan,jumlah) VALUES('$id_gaji','$id_user','$id_select','$jumlahthr')");
												echo $jumlahthr;}
												
												else {
												$kos=mysqli_query($config,"INSERT INTO tbl_penerimaan(id_gaji,id_user,kode_penerimaan,jumlah) VALUES('$id_gaji','$id_user','$id_select','$nilai')");}	
													
												
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
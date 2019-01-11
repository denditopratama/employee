
<?php

    //cek session
    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {
	

     

            if($_SESSION['id_user'] != $_REQUEST['id_user'] && $_SESSION['admin']!=1){
                echo '<script language="javascript">
                        window.alert("ERROR! Anda tidak diperbolehkan mengedit akun lain");
                        window.location.href="./admin.php?page=usr";
                      </script>';
            } else {

                if(isset($_REQUEST['submit'])){

                    $id_user = mysqli_real_escape_string($config,$_REQUEST['id_user']);
					$admin = mysqli_real_escape_string($config,$_SESSION['admin']);
					if(!empty($_POST['admin'])){
						$admins=mysqli_real_escape_string($config,$_POST['admin']);
					}
					
					$nip = mysqli_real_escape_string($config,$_REQUEST['nip']);
					$nama = mysqli_real_escape_string($config,$_POST['nama']);
					if(!empty($_POST['statkaryawan'])){
						$status_karyawan = mysqli_real_escape_string($config,$_POST['statkaryawan']);
					}
					if(!empty($_POST['divisi'])){
						$divisi = mysqli_real_escape_string($config,$_POST['divisi']);
					}
					
				    $username = trim(htmlspecialchars(mysqli_real_escape_string($config, $_POST['username'])));
					$password = trim(htmlspecialchars(mysqli_real_escape_string($config, $_POST['password'])));
					if(!empty($_POST['password'])){
						if(strlen($_POST['password'])<5){
							echo '<script language="javascript">
											window.alert("ERROR! Password Minimal 5 Karakter");
											window.location.href="./admin.php?page=usr&act=edit&id_user='.$_SESSION['id_user'].'";
										  </script>';
										  die();
						}
					}
					
					if(!empty($_POST['status_tugas'])){
						$status_tugas = mysqli_real_escape_string($config,$_POST['status_tugas']);
					}
					
					if($_SESSION['admin']!=1){
					$password_lama = mysqli_real_escape_string($config, $_POST['password_lama']);}
					

                   

											$ekstensi = array('jpg','png','jpeg');
                                            $file = $_FILES['file']['name'];
                                            $x = explode('.', $file);
                                            $eks = strtolower(end($x));
                                            $ukuran = $_FILES['file']['size'];
                                            $target_dir = "upload/foto/";
											

                                            //jika form file tidak kosong akan mengeksekusi script dibawah ini
                                            if($file != ""){

                                                $rand = rand(1,10000);
                                                $nfile = $rand."-".$file;

                                                //validasi file
                                                if(in_array($eks, $ekstensi) == true){
                                                    if($ukuran < 5500000){

                                                       

                                                        //jika file sudah ada akan mengeksekusi script dibawah ini
                                                        if(!empty($file)){
															
                                                            
                                                            move_uploaded_file($_FILES['file']['tmp_name'], $target_dir.$nfile);
													if($_SESSION['admin']==1){
														
													if($password!=""){
														$do = mysqli_query($config, "UPDATE tbl_user SET username='$username', password=MD5('$password'), nama='$nama', nip='$nip',foto='$nfile',admin='$admins',status_karyawan='$status_karyawan',divisi='$divisi',status_tugas='$status_tugas' WHERE id_user='$id_user'");}
													else{
														$do = mysqli_query($config, "UPDATE tbl_user SET username='$username', nama='$nama', nip='$nip',foto='$nfile',admin='$admins',status_karyawan='$status_karyawan',divisi='$divisi',status_tugas='$status_tugas' WHERE id_user='$id_user'");}
													}
													else {
													if($password!=""){
														$query = mysqli_query($config, "SELECT password FROM tbl_user WHERE id_user='$id_user' AND password=MD5('$password_lama')");
														if(mysqli_num_rows($query) > 0){
														$do = mysqli_query($config, "UPDATE tbl_user SET username='$username', password=MD5('$password'), nama='$nama', nip='$nip',foto='$nfile' WHERE id_user='$id_user'");
														}
														else {
										echo '<script language="javascript">
                                        window.alert("ERROR! Password Lama Tidak Sama");
										window.location.href="./admin.php?page=usr&act=edit&id_user='.$_SESSION['id_user'].'";
                                      </script>';
													}}else{
										$do = mysqli_query($config, "UPDATE tbl_user SET username='$username', nama='$nama', nip='$nip',foto='$nfile' WHERE id_user='$id_user'");
													}
													}
                                           if($do == true){
                                $_SESSION['succEdit'] = 'SUKSES! user berhasil diupdate';
                                header("Location: ./admin.php?page=usr");
                                die();
                            } else {
                                $_SESSION['errQ'] = 'ERROR! Ada masalah dengan query';
                                echo '<script language="javascript">
                                        window.location.href="./admin.php?page=usr&act=edit&id_user='.$id_user.'";
							</script>';  }
                                                        } else {

                                                            //jika file kosong akan mengeksekusi script dibawah ini
                                                            move_uploaded_file($_FILES['file']['tmp_name'], $target_dir.$nfile);
															
													if($_SESSION['admin']==1){
														
													if($password!=""){
														$do = mysqli_query($config, "UPDATE tbl_user SET username='$username', password=MD5('$password'), nama='$nama', nip='$nip',admin='$admins',status_karyawan='$status_karyawan',divisi='$divisi',status_tugas='$status_tugas' WHERE id_user='$id_user'");}
													else{
														$do = mysqli_query($config, "UPDATE tbl_user SET username='$username', nama='$nama', nip='$nip',admin='$admins',status_karyawan='$status_karyawan',divisi='$divisi',status_tugas='$status_tugas' WHERE id_user='$id_user'");}
													}
													else {
													if($password!=""){
														$query = mysqli_query($config, "SELECT password FROM tbl_user WHERE id_user='$id_user' AND password=MD5('$password_lama')");
														if(mysqli_num_rows($query) > 0){
														$do = mysqli_query($config, "UPDATE tbl_user SET username='$username', password=MD5('$password'), nama='$nama', nip='$nip' WHERE id_user='$id_user'");
														}
														else {
										echo '<script language="javascript">
                                        window.alert("ERROR! Password Lama Tidak Sama");
										window.location.href="./admin.php?page=usr&act=edit&id_user='.$_SESSION['id_user'].'";
                                      </script>';
													}}else{
										$do = mysqli_query($config, "UPDATE tbl_user SET username='$username', nama='$nama', nip='$nip' WHERE id_user='$id_user'");
													}
													}
                                           if($do == true){
                                $_SESSION['succEdit'] = 'SUKSES! user berhasil diupdate';
                                header("Location: ./admin.php?page=usr");
                                die();
                            } else {
                                $_SESSION['errQ'] = 'ERROR! Ada masalah dengan query';
                                echo '<script language="javascript">
                                        window.location.href="./admin.php?page=usr&act=edit&id_user='.$id_user.'";
							</script>';  }
                                         
                                                       

                                                        }
                                                    } else {
                                                        $_SESSION['errSize'] = 'Ukuran file yang diupload terlalu besar!';
                                                        echo '<script language="javascript">window.history.back();</script>';
                                                    }
                                                } else {
                                                    $_SESSION['errFormat'] = 'Format file yang diperbolehkan hanya *.JPG, *.PNG, *.JPEG !';
                                                    echo '<script language="javascript">window.history.back();</script>';
                                                }
                                            } else {

                                                //jika form file kosong akan mengeksekusi script dibawah ini
                                             if($_SESSION['admin']==1){
														
													if($password!=""){
														$do = mysqli_query($config, "UPDATE tbl_user SET username='$username', password=MD5('$password'), nama='$nama', nip='$nip',admin='$admins',status_karyawan='$status_karyawan',divisi='$divisi',status_tugas='$status_tugas' WHERE id_user='$id_user'");}
													else{
														$do = mysqli_query($config, "UPDATE tbl_user SET username='$username', nama='$nama', nip='$nip',admin='$admins',status_karyawan='$status_karyawan',divisi='$divisi',status_tugas='$status_tugas' WHERE id_user='$id_user'");}
													}
													else {
													if($password!=""){
														$query = mysqli_query($config, "SELECT password FROM tbl_user WHERE id_user='$id_user' AND password=MD5('$password_lama')");
														if(mysqli_num_rows($query) > 0){
														$do = mysqli_query($config, "UPDATE tbl_user SET username='$username', password=MD5('$password'), nama='$nama', nip='$nip' WHERE id_user='$id_user'");
														}
														else {
										echo '<script language="javascript">
                                        window.alert("ERROR! Password Lama Tidak Sama");
										window.location.href="./admin.php?page=usr&act=edit&id_user='.$_SESSION['id_user'].'";
                                      </script>';
													}}else{
										$do = mysqli_query($config, "UPDATE tbl_user SET username='$username', nama='$nama', nip='$nip' WHERE id_user='$id_user'");
													}
													}
                                           if($do == true){
                                $_SESSION['succEdit'] = 'SUKSES! user berhasil diupdate';
                                header("Location: ./admin.php?page=usr");
                                die();
                            } else {
                                $_SESSION['errQ'] = 'ERROR! Ada masalah dengan query';
                                echo '<script language="javascript">
                                        window.location.href="./admin.php?page=usr&act=edit&id_user='.$id_user.'";
							</script>';  }
                                        

                                                
                                            }
                        
                    
                 }

                    $id_user = mysqli_real_escape_string($config, $_REQUEST['id_user']);
                    $query = mysqli_query($config, "SELECT * FROM tbl_user WHERE id_user='$id_user'");
                    if(mysqli_num_rows($query) > 0){
                        $no = 1;
                        while($row = mysqli_fetch_array($query)){?>

                        <!-- Row Start -->
                        <div class="row">
                            <!-- Secondary Nav START -->
                            <div class="col s12">
                                <nav class="secondary-nav">
                                    <div class="nav-wrapper blue-grey darken-1">
                                        <ul class="left">
                                            <li class="waves-effect waves-light tooltipped" data-position="right" data-tooltip="Menu ini hanya untuk mengedit tipe user. Username dan password bisa diganti lewat menu profil"><a href="#" class="judul"><i class="material-icons">mode_edit</i> Edit Data User</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Secondary Nav END -->
                        </div>
                        <!-- Row END -->

                        <?php
                            if(isset($_SESSION['errQ'])){
                                $errQ = $_SESSION['errQ'];
                                echo '<div id="alert-message" class="row">
                                        <div class="col m12">
                                            <div class="card red lighten-5">
                                                <div class="card-content notif">
                                                    <span class="card-title red-text"><i class="material-icons md-36">clear</i> '.$errQ.'</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                unset($_SESSION['errQ']);
                            }
							if(isset($_SESSION['succd'])){
                        $succd= $_SESSION['succd'];
                        echo '<div id="alert-message" class="row">
                                <div class="col m12">
                                    <div class="card green lighten-5">
                                        <div class="card-content notif">
                                            <span class="card-title green-text"><i class="material-icons md-36">done</i> '.$succd.'</span>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        unset($_SESSION['succd']);
                    }
                        ?>

                        <!-- Row form Start -->
                        <div class="row jarak-form">

                            <!-- Form START -->
                            <form class="col s12" method="POST" enctype="multipart/form-data">
							

                                <!-- Row in form START -->
                                <div class="row">
							<div class="input-field col s6">
							<div class="card">
							<?php
				
				$querye = mysqli_query($config,"SELECT foto FROM tbl_user WHERE id_user='$id_user'");
           while($rows=mysqli_fetch_array($querye)){ 
		   if($rows['foto']==""){
			echo'<img class="file" src="./upload/foto/batman.jpg" style="display:block;width:100%;">';
		   }
		   else{
		   echo'<img class="file" src="./upload/foto/'.$rows['foto'].'" style="display:block;width:100%;">'; }} ?>
					</div>
					</div>
					<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">text_fields</i>
                                        <input id="nama" type="text" name="nama" value="<?php echo $row['nama'] ;?>">
										
                                        <label for="nama">Nama</label>
                                    </div>
									
								<div class="input-field col s6 tooltipped" data-position="top" data-tooltip="Jika belum memiliki NIP, isi dengan minus(-)">
                            <i class="material-icons prefix md-prefix">looks_one</i>
							
                            
							<?php if ($_SESSION['admin']==1 && $_SESSION['divisi']==2){
								echo '
								<input id="nip" type="text" class="validate" name="nip" value="'.$row['nip'].'" required>';
							
							} else {
								echo '
								<input id="nip" type="text" class="validate" name="nips" value="'.$row['nip'].'" required>
							<input type="hidden" name="nip" value="'.$row['nip'].'">
								<script>
								$(document).ready(function(){
									$("#nip,#username").prop(\'disabled\',\'true\');
								});
								</script>';
							} ?>
							 <label for="nip">NIP</label>
                        </div>
                                   <div class="input-field col s6">
								<i class="material-icons prefix md-prefix">account_circle</i>
								<input id="username" type="text" class="validate" name="usernames" value="<?php echo $row['username'];?>" disabled>
								<input type="hidden" name="username" value="<?php echo $row['username'];?>">
								<label for="username">Username</label>
								</div>
						<?php if($_SESSION['admin']!=1){
									echo'
							<div class="input-field col s12 m6 tooltipped" data-position="top" data-tooltip="Isikan password lama Anda">
                                <i class="material-icons prefix md-prefix">lock_outline</i>
                                <input id="password_lama" type="password" class="validate" name="password_lama" placeholder="	             		 (Kosongkan Jika tidak ingin mengganti Password)">
                                <label for="password_lama">Password Lama</label>
						</div>';}?>
							
							  <div class="input-field col s12 m6 tooltipped" data-position="top" data-tooltip="Password minimal 5 karakter">
                            <i class="material-icons prefix md-prefix">lock</i>
                            <input id="password" type="password" class="validate" name="password" placeholder="	                       (Kosongkan Jika tidak ingin mengganti Password)"> 
                            <label for="password">Password Baru</label>
							  </div>
							  	<?php if($_SESSION['admin']==1){
									
									echo'
							<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">supervisor_account</i><label>Pilih tipe user</label><br/>
                                        <div class="input-field col s11 right">
                                            <select class="browser-default" name="admin" id="admin" required>';
											$gompo=mysqli_query($config,"SELECT * FROM tbl_role");
									while($rowz=mysqli_fetch_array($gompo)){
									
												if($row['admin']==$rowz['admin']){
													echo'
                                                <option value="'.$rowz['admin'].'" selected>'.$rowz['role'].'</option>';
												} else {
													echo'
                                                <option value="'.$rowz['admin'].'">'.$rowz['role'].'</option>';}
                                                   
                                                       
									}
                                                echo'  
                                 
                                            </select>
                                        </div>
                                           
								</div>
									';
									
									echo'

							<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">contacts</i><label>Status Karyawan</label><br/>
                                        <div class="input-field col s11 right">
                                            <select class="browser-default" name="statkaryawan" id="statkaryawan" required>';
											
											$yogs=mysqli_query($config,"SELECT * FROM tbl_ref_status_karyawan");
											while($data=mysqli_fetch_array($yogs)){
												if($row['status_karyawan']==$data['id']){
												echo'
                                                <option value="'.$data['kode'].'" selected>'.$data['status_karyawan'].'';}
												else {
												echo'
                                                <option value="'.$data['kode'].'">'.$data['status_karyawan'].'';	
												}
                                                   
                                              
														
											} 
                                                echo'  
                               
                                            </select>
                                        </div>
										</div>
										<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">account_balance</i><label>Divisi</label><br/>
                                        <div class="input-field col s11 right">
                                            <select class="browser-default" name="divisi" id="divisi" required>';
											$yda=mysqli_query($config,"SELECT * FROM tbl_ref_divisi");
											while($data=mysqli_fetch_array($yda)){
												if($row['divisi']==$data['kode']){
												echo'
                                                <option value="'.$data['kode'].'" selected>'.$data['uraian'].'';}
												else {
												echo'
                                                <option value="'.$data['kode'].'">'.$data['uraian'].'';	
												}
                                                   
                                              
														
											}
														  
														
														 
                                                echo'  
                                               
                                            </select>
                                        </div>
										</div>
										
										<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">location_on</i><label>Status Tugas</label><br/>
                                        <div class="input-field col s11 right">
                                            <select class="browser-default" name="status_tugas" id="status_tugas" required>
                                                <option value="'.$row['status_tugas'].'">';
                                                   
                                                        if($row['status_tugas'] == 1) {
                                                            echo 'Penugasan JM';
                                                        }
														  else if($row['status_tugas'] == 2) {
                                                            echo 'JMP';
                                                        }
														  
                                                echo'  
                                                </option>
                                    <option value="1">Penugasan JM</option>
                                    <option value="2">JMP</option>
									
                                            </select>
                                        </div>
										</div>
										
                                           
									';
						}}?>
									<?php 
									$id_user=mysqli_real_escape_string($config,$_REQUEST['id_user']);
									$yaman=mysqli_query($config,"SELECT foto FROM tbl_user WHERE id_user =$id_user");
									list($foto)=mysqli_fetch_array($yaman);
									?>
									<div class="input-field col s12 m6">
                                <div class="file-field input-field tooltipped" data-position="top" data-tooltip="Upload Foto Profile">
                                    <div class="btn light-green darken-1">
                                        <span>File</span>
                                        <input type="file" id="file" name="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" value="<?php echo $foto ;?>" placeholder="Upload Foto Profile" disabled>
										
                                            <?php
                                                if(isset($_SESSION['errSize'])){
                                                    $errSize = $_SESSION['errSize'];
                                                    echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$errSize.'</div>';
                                                    unset($_SESSION['errSize']);
                                                }
                                                if(isset($_SESSION['errFormat'])){
                                                    $errFormat = $_SESSION['errFormat'];
                                                   echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$errFormat.'</div>';
                                                    unset($_SESSION['errFormat']);
                                                }
                                            ?>
                                        <small class="red-text">*Format file yang diperbolehkan *.JPG, *.PNG, *.JPEG dan ukuran maksimal file 5 MB</small>
                                    </div>
                                </div>
                            </div>
							  <div class="input-field col m6 s12" style="text-align:center!important">	
							  <style>
                        .g-signin2{
                            width: 100%;
                            }

                            .g-signin2 > div{
                            margin: 0 auto;
                            }
                            .abcRioButton{
                                width:200%;
                            }
                        </style>
						
						<h6> Akun Google anda terdaftar atas nama : <b id="ans"></b></h6><br>
						<input type="hidden" id="namyeng" value="<?php echo $id_user; ?>">
							  <div id="DivID" data-width="250" class="g-signin2"  data-onsuccess="onSignIn" data-longtitle="true" data-theme="light"></div><br>
                                        <button type="submit"  name="submit" class="btn-large blue waves-effect waves-light">SIMPAN <i class="material-icons">done</i></button>
                                        <a href="?page=usr" class="btn-large deep-orange waves-effect waves-light">BATAL <i class="material-icons">clear</i></a>
										<?php 
										if(!empty($_SESSION['tokengmail'])){
											echo '
											<script>
											$.get(\'https://www.googleapis.com/oauth2/v3/tokeninfo?id_token='.$_SESSION['tokengmail'].'\', function(response){
	
												$("#ans").html(response.email);
											});
											</script>
											';
										}
										 ?>
                                </div>
						<script>
						$(document).ready(function(){
							setTimeout(function () {
        $('#DivID div div span span:last').text("Tambahkan Akun Google Anda");
        $('#DivID div div span span:first').text("Tambahkan Akun Google Anda");
	}, 100);

	
	  

						});
						
						</script>
				 
				 <script src="https://apis.google.com/js/platform.js" async defer></script>


				<script type="text/javascript" src="js/gsignup.js"></script>
						<br/>
								
                              
							</form>
						</div>
						
						<!-- BAGIAN TAB PROFILE-->
						<form method="POST">
										
										  <button type="submit" name="identitas" class="tablink">Identitas</button>
										  <button type="submit" name="pendidikan" class="tablink">Pendidikan</button>
										  <button type="submit" name="jabatans" class="tablink">Jabatan</button>
										  <button type="submit" name="disiplin" class="tablink">Hukuman</button>
										  <button type="submit" name="organisasi" class="tablink">Organisasi</button>
										  <button type="submit" name="keahlian" class="tablink">Keahlian</button>
										  <button type="submit" name="keluarga" class="tablink">Keluarga</button>
										  <button type="submit" name="perjanjian" class="tablink">Perjanjian</button>
										  
										  
										 
									
										</form>
					
						
						<?php
						if(isset($_REQUEST['submitidentitas'])){
							$id_user=mysqli_real_escape_string($config,$_REQUEST['id_user']);
							$tgl_bakti=mysqli_real_escape_string($config,$_REQUEST['tgl_bakti']);
							$jabatan=mysqli_real_escape_string($config,$_REQUEST['jabatan']);
							$unit_kerja=mysqli_real_escape_string($config,$_REQUEST['unit_kerja']);
							$sub_unit=mysqli_real_escape_string($config,$_REQUEST['sub_unit']);
							$jenis_kelamin=mysqli_real_escape_string($config,$_REQUEST['jenis_kelamin']);
							$tempat_lahir=mysqli_real_escape_string($config,$_REQUEST['tempat_lahir']);
							$tanggal_lahir=mysqli_real_escape_string($config,$_REQUEST['tanggal_lahir']);
							$status_keluarga=mysqli_real_escape_string($config,$_REQUEST['status_keluarga']);
							$agama=mysqli_real_escape_string($config,$_REQUEST['agama']);
							$goldarah=mysqli_real_escape_string($config,$_REQUEST['goldarah']);
							$alamat=mysqli_real_escape_string($config,$_REQUEST['alamat']);
							$kelurahan=mysqli_real_escape_string($config,$_REQUEST['kelurahan']);
							$kecamatan=mysqli_real_escape_string($config,$_REQUEST['kecamatan']);
							$kota=mysqli_real_escape_string($config,$_REQUEST['kota']);
							$propinsi=mysqli_real_escape_string($config,$_REQUEST['propinsi']);
							$kode_pos=mysqli_real_escape_string($config,$_REQUEST['kode_pos']);
							$no_telpon=mysqli_real_escape_string($config,$_REQUEST['no_telpon']);
							$no_ktp=mysqli_real_escape_string($config,$_REQUEST['no_ktp']);
							$no_npwp=mysqli_real_escape_string($config,$_REQUEST['no_npwp']);
							$no_bpjsks=mysqli_real_escape_string($config,$_REQUEST['no_bpjsks']);
							$no_bpjskt=mysqli_real_escape_string($config,$_REQUEST['no_bpjskt']);
							$no_rekening=mysqli_real_escape_string($config,$_REQUEST['no_rekening']);
							$atas_nama=mysqli_real_escape_string($config,$_REQUEST['atas_nama']);
							$jenis_bank=mysqli_real_escape_string($config,$_REQUEST['jenis_bank']);
							$gaji_jm=mysqli_real_escape_string($config,str_replace('.', '', $_POST['gaji_jm']));
							
							$apdet=mysqli_query($config,"UPDATE tbl_identitas SET tgl_bakti='$tgl_bakti',jenis_kelamin='$jenis_kelamin',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',status_keluarga='$status_keluarga',agama='$agama',goldarah='$goldarah',alamat='$alamat',kelurahan='$kelurahan',kecamatan='$kecamatan',kota='$kota',propinsi='$propinsi',kode_pos='$kode_pos',no_telpon='$no_telpon',no_ktp='$no_ktp',no_npwp='$no_npwp',no_bpjsks='$no_bpjsks',no_bpjskt='$no_bpjskt',no_rekening='$no_rekening',atas_nama='$atas_nama',jenis_bank='$jenis_bank',gaji_jm='$gaji_jm' WHERE id_user='$id_user'");
							if($_SESSION['admin']==1){
								$apdepartment=mysqli_query($config,"UPDATE tbl_user SET unit='$unit_kerja',sub_unit='$sub_unit',jabatan='$jabatan' WHERE id_user='$id_user'");
							} else {
								$apdepartment=true;
							}
							
							
							
							for($i=0;$i<=4;$i++){
							$ekstensi = array('jpg','png','jpeg','doc','docx','pdf');
							$file[$i] = $_FILES['file']['name'][$i];
							$x[$i] = explode('.', $file[$i]);
							$eks[$i] = strtolower(end($x[$i]));
							$ukuran[$i] = $_FILES['file']['size'][$i];
							if($i==0){
							$target_dir = "upload/KTP/";}
							else if($i==1){
							$target_dir = "upload/KK/";}
							else if($i==2){
							$target_dir = "upload/NPWP/";}
							else if($i==3){
							$target_dir = "upload/BPJSKT/";}
							else if($i==4){
							$target_dir = "upload/BPJSKS/";}
												

                                                    //jika form file tidak kosong akan mengeksekusi script dibawah ini
                                                   
														if($file[$i] != ""){
                                                        $rand = rand(1,10000);
                                                        $nfile = $rand."-".$file[$i];

                                                        //validasi file
                                                        if(in_array($eks[$i], $ekstensi) == true){
                                                            if($ukuran[$i] < 3200000){

                                                                move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_dir.$nfile);
																	if($i==0){
																$query = mysqli_query($config, "UPDATE tbl_identitas SET KTP='$nfile' WHERE id_user='$id_user'");}
																	else if($i==1){
																$query = mysqli_query($config, "UPDATE tbl_identitas SET KK='$nfile' WHERE id_user='$id_user'");}
																	else if($i==2){
																$query = mysqli_query($config, "UPDATE tbl_identitas SET NPWP='$nfile' WHERE id_user='$id_user'");}
																	else if($i==3){
																$query = mysqli_query($config, "UPDATE tbl_identitas SET BPJSKT='$nfile' WHERE id_user='$id_user'");}
																	else if($i==4){
																$query = mysqli_query($config, "UPDATE tbl_identitas SET BPJSKS='$nfile' WHERE id_user='$id_user'");}
																
                                                                
																
                                                            } else {
                                                                $_SESSION['errQ'] = 'Ukuran file yang diupload terlalu besar!';
                                                                header("Location: ./admin.php?page=usr&act=edit&id_user=".$id_user."");
                                                            }
                                                        } else {
                                                            $_SESSION['errQ'] = 'Format file yang diperbolehkan hanya *.JPG, *.JPEG, *.PNG, *.DOC, *.DOCX atau *.PDF!';
                                                            header("Location: ./admin.php?page=usr&act=edit&id_user=".$id_user."");
                                                        }
                                                    	
                                                        
                                                    }
													
							}
							
																					
							if($apdet && $apdepartment && $query==true){
									$_SESSION['succd']="SUKSES Data Berhasil Di Simpan";
									header("Location: ./admin.php?page=usr&act=edit&id_user=".$id_user."");
									die();
								}			
						
						}
						if(isset($_REQUEST['tambahidentitas'])){
							$id_user=mysqli_real_escape_string($config,$_REQUEST['id_user']);
							$tgl_bakti=mysqli_real_escape_string($config,$_REQUEST['tgl_bakti']);
							$jabatan=mysqli_real_escape_string($config,$_REQUEST['jabatan']);
							$unit_kerja=mysqli_real_escape_string($config,$_REQUEST['unit_kerja']);
							$sub_unit=mysqli_real_escape_string($config,$_REQUEST['sub_unit']);
							$jenis_kelamin=mysqli_real_escape_string($config,$_REQUEST['jenis_kelamin']);
							$tempat_lahir=mysqli_real_escape_string($config,$_REQUEST['tempat_lahir']);
							$tanggal_lahir=mysqli_real_escape_string($config,$_REQUEST['tanggal_lahir']);
							$status_keluarga=mysqli_real_escape_string($config,$_REQUEST['status_keluarga']);
							$agama=mysqli_real_escape_string($config,$_REQUEST['agama']);
							$goldarah=mysqli_real_escape_string($config,$_REQUEST['goldarah']);
							$alamat=mysqli_real_escape_string($config,$_REQUEST['alamat']);
							$kelurahan=mysqli_real_escape_string($config,$_REQUEST['kelurahan']);
							$kecamatan=mysqli_real_escape_string($config,$_REQUEST['kecamatan']);
							$kota=mysqli_real_escape_string($config,$_REQUEST['kota']);
							$propinsi=mysqli_real_escape_string($config,$_REQUEST['propinsi']);
							$kode_pos=mysqli_real_escape_string($config,$_REQUEST['kode_pos']);
							$no_telpon=mysqli_real_escape_string($config,$_REQUEST['no_telpon']);
							$no_ktp=mysqli_real_escape_string($config,$_REQUEST['no_ktp']);
							$no_npwp=mysqli_real_escape_string($config,$_REQUEST['no_npwp']);
							$no_bpjsks=mysqli_real_escape_string($config,$_REQUEST['no_bpjsks']);
							$no_bpjskt=mysqli_real_escape_string($config,$_REQUEST['no_bpjskt']);
							$no_rekening=mysqli_real_escape_string($config,$_REQUEST['no_rekening']);
							$atas_nama=mysqli_real_escape_string($config,$_REQUEST['atas_nama']);
							$jenis_bank=mysqli_real_escape_string($config,$_REQUEST['jenis_bank']);
							$gaji_jm=mysqli_real_escape_string($config,str_replace('.', '', $_POST['gaji_jm']));
							
							
							$nambah=mysqli_query($config,"INSERT INTO tbl_identitas(id_user,tgl_bakti,jenis_kelamin,tempat_lahir,tanggal_lahir,status_keluarga,agama,goldarah,alamat,kelurahan,kecamatan,kota,propinsi,kode_pos,no_telpon,no_ktp,no_npwp,no_bpjsks,no_bpjskt,no_rekening,atas_nama,jenis_bank,gaji_jm) VALUES('$id_user','$tgl_bakti','$jenis_kelamin','$tempat_lahir','$tanggal_lahir','$status_keluarga','$agama','$goldarah','$alamat','$kelurahan','$kecamatan','$kota','$propinsi','$kode_pos','$no_telpon','$no_ktp','$no_npwp','$no_bpjsks','$no_bpjskt','$no_rekening','$atas_nama','$jenis_bank','$gaji_jm')");
							$apdepartment=mysqli_query($config,"UPDATE tbl_user SET unit='$unit_kerja',sub_unit='$sub_unit',jabatan='$jabatan' WHERE id_user='$id_user'");
							
							for($i=0;$i<=4;$i++){
							$ekstensi = array('jpg','png','jpeg','doc','docx','pdf');
							$file[$i] = $_FILES['file']['name'][$i];
							$x[$i] = explode('.', $file[$i]);
							$eks[$i] = strtolower(end($x[$i]));
							$ukuran[$i] = $_FILES['file']['size'][$i];
							if($i==0){
							$target_dir = "upload/KTP/";}
							else if($i==1){
							$target_dir = "upload/KK/";}
							else if($i==2){
							$target_dir = "upload/NPWP/";}
							else if($i==3){
							$target_dir = "upload/BPJSKT/";}
							else if($i==4){
							$target_dir = "upload/BPJSKS/";}
												

                                                    //jika form file tidak kosong akan mengeksekusi script dibawah ini
                                                   
														if($file[$i] != ""){
                                                        $rand = rand(1,10000);
                                                        $nfile = $rand."-".$file[$i];

                                                        //validasi file
                                                        if(in_array($eks[$i], $ekstensi) == true){
                                                            if($ukuran[$i] < 3200000){

                                                                move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_dir.$nfile);
																	if($i==0){
																$query = mysqli_query($config, "UPDATE tbl_identitas SET KTP='$nfile' WHERE id_user='$id_user'");}
																	else if($i==1){
																$query = mysqli_query($config, "UPDATE tbl_identitas SET KK='$nfile' WHERE id_user='$id_user'");}
																	else if($i==2){
																$query = mysqli_query($config, "UPDATE tbl_identitas SET NPWP='$nfile' WHERE id_user='$id_user'");}
																	else if($i==3){
																$query = mysqli_query($config, "UPDATE tbl_identitas SET BPJSKS='$nfile' WHERE id_user='$id_user'");}
																	else if($i==4){
																$query = mysqli_query($config, "UPDATE tbl_identitas SET BPJSKT='$nfile' WHERE id_user='$id_user'");}
																
                                                                
																
                                                            } else {
                                                                $_SESSION['errQ'] = 'Ukuran file yang diupload terlalu besar!';
                                                                header("Location: ./admin.php?page=usr&act=edit&id_user=".$id_user."");
                                                            }
                                                        } else {
                                                            $_SESSION['errQ'] = 'Format file yang diperbolehkan hanya *.JPG, *.JPEG, *.PNG, *.DOC, *.DOCX atau *.PDF!';
                                                            header("Location: ./admin.php?page=usr&act=edit&id_user=".$id_user."");
                                                        }
                                                    	
                                                        
                                                    }
													
							}
													
													
								if($nambah && $apdepartment && $query==true){
									$_SESSION['succd']="SUKSES Data Berhasil Di Tambahkan";
									header("Location: ./admin.php?page=usr&act=edit&id_user=".$id_user."");
									die();
								}					
													
													
													
							
						}
						?>
						
					
							  
					  <?php
										$id_user=mysqli_real_escape_string($config,$_REQUEST['id_user']);
										
										if(isset($_REQUEST['pendidikannonformal'])){
										
										$tgl_awal=mysqli_real_escape_string($config,$_REQUEST['tgl_awal']);
										$tgl_akhir=mysqli_real_escape_string($config,$_REQUEST['tgl_akhir']);
										$tempat=mysqli_real_escape_string($config,$_REQUEST['tempat']);
										$uraian=mysqli_real_escape_string($config,$_REQUEST['uraianpendidikan']);
										$update=mysqli_query($config,"INSERT INTO tbl_pendidikan (id_user,jenis,uraian,tgl_awal,tgl_akhir,tempat) VALUES ('$id_user',2,'$uraian','$tgl_awal','$tgl_akhir','$tempat') ");
										}
										if(isset($_REQUEST['pendidikanformal'])){
										$tingkat=mysqli_real_escape_string($config,$_REQUEST['tingkat']);
										$instansi=mysqli_real_escape_string($config,$_REQUEST['namainstansi']);
										$jurusan=mysqli_real_escape_string($config,$_REQUEST['jurusan']);
										$lulus=mysqli_real_escape_string($config,$_REQUEST['lulus']);
										$no_serti=mysqli_real_escape_string($config,$_REQUEST['no_serti']);
										$update=mysqli_query($config,"INSERT INTO tbl_pendidikan (id_user,jenis,tingkat,instansi,jurusan,lulus,no_serti) VALUES ('$id_user',1,'$tingkat','$instansi','$jurusan','$lulus','$no_serti')");	
										}
										
										$nampung=mysqli_query($config,"SELECT MAX(id) as maks FROM tbl_pendidikan WHERE id_user='$id_user'");
										$datas=mysqli_fetch_array($nampung);
										$datamaks= $datas['maks'];
										
										for($i=1;$i<=$datamaks;$i++){
										if(isset($_REQUEST['simpans'.$i.''])){
										$tingkat=mysqli_real_escape_string($config,$_REQUEST['tingkat'.$i.'']);
										$instansi=mysqli_real_escape_string($config,$_REQUEST['namainstansi'.$i.'']);
										$jurusan=mysqli_real_escape_string($config,$_REQUEST['jurusan'.$i.'']);
										$lulus=mysqli_real_escape_string($config,$_REQUEST['lulus'.$i.'']);
										$no_serti=mysqli_real_escape_string($config,$_REQUEST['no_serti'.$i.'']);
											
											$ngapdet=mysqli_query($config,"UPDATE tbl_pendidikan SET tingkat='$tingkat',instansi='$instansi',jurusan='$jurusan',lulus='$lulus',no_serti='$no_serti' WHERE id='".$i."' ");
										} else if(isset($_REQUEST['hapuss'.$i.''])){
											
											$ngapus=mysqli_query($config,"DELETE FROM tbl_pendidikan WHERE id='".$i."' ");
										}
										
											}
										
										for($i=1;$i<=$datamaks;$i++){
										if(isset($_REQUEST['simpan'.$i.''])){
										$tgl_awal=mysqli_real_escape_string($config,$_REQUEST['tgl_awal'.$i.'']);
										$tgl_akhir=mysqli_real_escape_string($config,$_REQUEST['tgl_akhir'.$i.'']);
										$tempat=mysqli_real_escape_string($config,$_REQUEST['tempat'.$i.'']);
										$uraian=mysqli_real_escape_string($config,$_REQUEST['uraian'.$i.'']);
											
											$ngapdet=mysqli_query($config,"UPDATE tbl_pendidikan SET uraian='$uraian',tgl_awal='$tgl_awal',tgl_akhir='$tgl_akhir',tempat='$tempat' WHERE id='".$i."' ");
										} else if(isset($_REQUEST['hapus'.$i.''])){
											
											$ngapus=mysqli_query($config,"DELETE FROM tbl_pendidikan WHERE id='".$i."' ");
										}
										
											}
											
										
										if(isset($_REQUEST['tambahjabatan'])){
											$id_user=mysqli_real_escape_string($config,$_REQUEST['id_user']);
											$jabatang=mysqli_real_escape_string($config,$_REQUEST['jabatang']);
											
											$unitkerja=mysqli_real_escape_string($config,$_REQUEST['unitkerja']);
											$tanggaljabatan=mysqli_real_escape_string($config,$_REQUEST['tanggaljabatan']);
											$no_sk=mysqli_real_escape_string($config,$_REQUEST['no_sk']);
											
											
													$ekstensi = array('jpg','png','jpeg','doc','docx','pdf');
                                                    $file = $_FILES['file']['name'];
                                                    $x = explode('.', $file);
                                                    $eks = strtolower(end($x));
                                                    $ukuran = $_FILES['file']['size'];
                                                    $target_dir = "upload/SK_jabatan/";
												

                                                    //jika form file tidak kosong akan mengeksekusi script dibawah ini
                                                    if($file != ""){

                                                        $rand = rand(1,10000);
                                                        $nfile = $rand."-".$file;

                                                        //validasi file
                                                        if(in_array($eks, $ekstensi) == true){
                                                            if($ukuran < 250000000){

                                                                move_uploaded_file($_FILES['file']['tmp_name'], $target_dir.$nfile);
																

                                                               $update=mysqli_query($config,"INSERT INTO tbl_jabatan (id_user,jabatan,file,unit_kerja,tanggal,no_sk) VALUES ('$id_user','$jabatang','$nfile','$unitkerja','$tanggaljabatan','$no_sk')");
																
                                                                if($query == true){
                                                                    $_SESSION['succAdd'] = 'SUKSES! Data berhasil ditambahkan';
																	header("Location: ./admin.php?page=usr&act=edit&id_user=".$id_user.""); 
                                                                    die();
                                                                } else {
                                                                    $_SESSION['errQ'] = 'ERROR! Ada masalah dengan query';
                                                                    echo '<script language="javascript">window.history.back();</script>';
                                                                }
                                                            } else {
                                                                $_SESSION['errSize'] = 'Ukuran file yang diupload terlalu besar!';
                                                                echo '<script language="javascript">window.history.back();</script>';
                                                            }
                                                        } else {
                                                            $_SESSION['errFormat'] = 'Format file yang diperbolehkan hanya *.JPG, *.PNG, *.DOC, *.DOCX atau *.PDF!';
                                                            echo '<script language="javascript">window.history.back();</script>';
                                                        }
                                                    } else {

                                                        //jika form file kosong akan mengeksekusi script dibawah ini
                                                       $update=mysqli_query($config,"INSERT INTO tbl_jabatan (id_user,jabatan,unit_kerja,tanggal,no_sk) VALUES ('$id_user','$jabatang','$unitkerja','$tanggaljabatan','$no_sk')");
															
                                                        if($query != true){
                                                            
                                                            $_SESSION['errQ'] = 'ERROR! Ada masalah dengan query';
                                                            echo '<script language="javascript">window.history.back();</script>';
                                                        }
                                                    }
										}
										
										$nampungjabatans=mysqli_query($config,"SELECT MAX(id) as maksimaljabatan FROM tbl_jabatan WHERE id_user='$id_user'");
										$datas2=mysqli_fetch_array($nampungjabatans);
										$maksjabat= $datas2['maksimaljabatan'];
										
										for($i=1;$i<=$maksjabat;$i++){
										if(isset($_REQUEST['simpanjabatan'.$i.''])){
										$jabatans=mysqli_real_escape_string($config,$_REQUEST['jabatans'.$i.'']);
										$unitkerja=mysqli_real_escape_string($config,$_REQUEST['unit_kerja'.$i.'']);
										$tanggaljabatan=mysqli_real_escape_string($config,$_REQUEST['tanggaljabatan'.$i.'']);
										$no_sk=mysqli_real_escape_string($config,$_REQUEST['no_sk'.$i.'']);
											
													$ekstensi = array('jpg','png','jpeg','doc','docx','pdf');
                                                    $file = $_FILES['file'.$i.'']['name'];
                                                    $x = explode('.', $file);
                                                    $eks = strtolower(end($x));
                                                    $ukuran = $_FILES['file'.$i.'']['size'];
                                                    $target_dir = "upload/SK_jabatan/";
												

                                                    //jika form file tidak kosong akan mengeksekusi script dibawah ini
                                                    if($file != ""){

                                                        $rand = rand(1,10000);
                                                        $nfile = $rand."-".$file;

                                                        //validasi file
                                                        if(in_array($eks, $ekstensi) == true){
                                                            if($ukuran < 250000000){

                                                                move_uploaded_file($_FILES['file'.$i.'']['tmp_name'], $target_dir.$nfile);
																

                                                               $ngapdet=mysqli_query($config,"UPDATE tbl_jabatan SET jabatan='$jabatans',file='$nfile',unit_kerja='$unitkerja',tanggal='$tanggaljabatan',no_sk='$no_sk' WHERE id='".$i."' ");
																
                                                                if($query == true){
                                                                    $_SESSION['succAdd'] = 'SUKSES! Data berhasil ditambahkan';
																	header("Location: ./admin.php?page=usr&act=edit&id_user=".$id_user.""); 
                                                                    die();
                                                                } else {
                                                                    $_SESSION['errQ'] = 'ERROR! Ada masalah dengan query';
                                                                    echo '<script language="javascript">window.history.back();</script>';
                                                                }
                                                            } else {
                                                                $_SESSION['errSize'] = 'Ukuran file yang diupload terlalu besar!';
                                                                echo '<script language="javascript">window.history.back();</script>';
                                                            }
                                                        } else {
                                                            $_SESSION['errFormat'] = 'Format file yang diperbolehkan hanya *.JPG, *.PNG, *.DOC, *.DOCX atau *.PDF!';
                                                            echo '<script language="javascript">window.history.back();</script>';
                                                        }
                                                    } else {

                                                        //jika form file kosong akan mengeksekusi script dibawah ini
                                                       $ngapdet=mysqli_query($config,"UPDATE tbl_jabatan SET jabatan='$jabatans',unit_kerja='$unitkerja',tanggal='$tanggaljabatan',no_sk='$no_sk' WHERE id='".$i."' ");
															
                                                        if($query != true){
                                                            
                                                            $_SESSION['errQ'] = 'ERROR! Ada masalah dengan query';
                                                            echo '<script language="javascript">window.history.back();</script>';
                                                        }
                                                    }
											
										} else if(isset($_REQUEST['hapusjabatan'.$i.''])){
											
											$ngapus=mysqli_query($config,"DELETE FROM tbl_jabatan WHERE id='".$i."' ");
										}
										
											}
											
										if(isset($_REQUEST['tambahhukuman'])){
											$id_user=mysqli_real_escape_string($config,$_REQUEST['id_user']);
											$jenishukum=mysqli_real_escape_string($config,$_REQUEST['jenishukum']);
											$uraihukum=mysqli_real_escape_string($config,$_REQUEST['uraihukum']);
											$tanggalhukumawal=mysqli_real_escape_string($config,$_REQUEST['tanggalhukumawal']);
											$tanggalhukumakhir=mysqli_real_escape_string($config,$_REQUEST['tanggalhukumakhir']);
											$nomorhukum=mysqli_real_escape_string($config,$_REQUEST['nomorhukum']);
											$update=mysqli_query($config,"INSERT INTO tbl_hukuman (id_user,jenis_hukuman,uraianhukuman,tanggalawal,tanggalakhir,no_surat) VALUES ('$id_user','$jenishukum','$uraihukum','$tanggalhukumawal','$tanggalhukumakhir','$nomorhukum')");
										}
											$nampunghukuman=mysqli_query($config,"SELECT MAX(id) as maksimalhukuman FROM tbl_hukuman WHERE id_user='$id_user'");
										$datas3=mysqli_fetch_array($nampunghukuman);
										$makshukum= $datas3['maksimalhukuman'];
										
										for($i=1;$i<=$makshukum;$i++){
										if(isset($_REQUEST['simpanhukuman'.$i.''])){
										$jenishukum=mysqli_real_escape_string($config,$_REQUEST['jenishukum'.$i.'']);
										$uraihukum=mysqli_real_escape_string($config,$_REQUEST['uraihukum'.$i.'']);
										$tanggalhukumawal=mysqli_real_escape_string($config,$_REQUEST['tanggalhukumawal'.$i.'']);
										$tanggalhukumakhir=mysqli_real_escape_string($config,$_REQUEST['tanggalhukumakhir'.$i.'']);
										$nomorhukum=mysqli_real_escape_string($config,$_REQUEST['nomorhukum'.$i.'']);
											
											$ngapdet=mysqli_query($config,"UPDATE tbl_hukuman SET jenis_hukuman='$jenishukum',uraianhukuman='$uraihukum',tanggalawal='$tanggalhukumawal',tanggalakhir='$tanggalhukumakhir',no_surat='$nomorhukum' WHERE id='".$i."' ");
										} else if(isset($_REQUEST['hapushukuman'.$i.''])){
											
											$ngapus=mysqli_query($config,"DELETE FROM tbl_hukuman WHERE id='".$i."' ");
										}
										
											}
											
										if(isset($_REQUEST['tambahorganisasi'])){
											$id_user=mysqli_real_escape_string($config,$_REQUEST['id_user']);
											$namaorganisasi=mysqli_real_escape_string($config,$_REQUEST['namaorganisasi']);
											$jabatanorganisasi=mysqli_real_escape_string($config,$_REQUEST['jabatanorganisasi']);
											$tanggalorganisasiawal=mysqli_real_escape_string($config,$_REQUEST['tanggalorganisasiawal']);
											$tanggalorganisasiakhir=mysqli_real_escape_string($config,$_REQUEST['tanggalorganisasiakhir']);
											$nomororganisasi=mysqli_real_escape_string($config,$_REQUEST['nomororganisasi']);
											$update=mysqli_query($config,"INSERT INTO tbl_organisasi (id_user,nama_organisasi,jabatan,tanggal_masuk,tanggal_keluar,nomor_surat) VALUES ('$id_user','$namaorganisasi','$jabatanorganisasi','$tanggalorganisasiawal','$tanggalorganisasiakhir','$nomororganisasi')");
										}
											
											$nampungorganisasi=mysqli_query($config,"SELECT MAX(id) as maksimalorg FROM tbl_organisasi WHERE id_user='$id_user'");
										$datas4=mysqli_fetch_array($nampungorganisasi);
										$maksorg= $datas4['maksimalorg'];
										
										for($i=1;$i<=$maksorg;$i++){
										if(isset($_REQUEST['simpanorganisasi'.$i.''])){
										$namaorganisasi=mysqli_real_escape_string($config,$_REQUEST['namaorganisasi'.$i.'']);
										$jabatanorganisasi=mysqli_real_escape_string($config,$_REQUEST['jabatanorganisasi'.$i.'']);
										$tanggalorganisasiawal=mysqli_real_escape_string($config,$_REQUEST['tanggalorganisasiawal'.$i.'']);
										$tanggalorganisasiakhir=mysqli_real_escape_string($config,$_REQUEST['tanggalorganisasiakhir'.$i.'']);
										$nomororganisasi=mysqli_real_escape_string($config,$_REQUEST['nomororganisasi'.$i.'']);
											
											$ngapdet=mysqli_query($config,"UPDATE tbl_organisasi SET nama_organisasi='$namaorganisasi',jabatan='$jabatanorganisasi',tanggal_masuk='$tanggalorganisasiawal',tanggal_keluar='$tanggalorganisasiakhir',nomor_surat='$nomororganisasi' WHERE id='".$i."' ");
										} else if(isset($_REQUEST['hapusorganisasi'.$i.''])){
											
											$ngapus=mysqli_query($config,"DELETE FROM tbl_organisasi WHERE id='".$i."'");
										}
										
											}
											
											
											
											if(isset($_REQUEST['tambahkeahlian'])){
											$id_user=mysqli_real_escape_string($config,$_REQUEST['id_user']);
											$jeniskeahlian=mysqli_real_escape_string($config,$_REQUEST['jeniskeahlian']);
											
											  $ekstensi = array('jpg','png','jpeg','doc','docx','pdf');
                                                    $file = $_FILES['file']['name'];
                                                    $x = explode('.', $file);
                                                    $eks = strtolower(end($x));
                                                    $ukuran = $_FILES['file']['size'];
                                                    $target_dir = "upload/sertifikat/";
												

                                                    //jika form file tidak kosong akan mengeksekusi script dibawah ini
                                                    if($file != ""){

                                                        $rand = rand(1,10000);
                                                        $nfile = $rand."-".$file;

                                                        //validasi file
                                                        if(in_array($eks, $ekstensi) == true){
                                                            if($ukuran < 250000000){

                                                                move_uploaded_file($_FILES['file']['tmp_name'], $target_dir.$nfile);
																

                                                                $query = mysqli_query($config, "INSERT INTO tbl_keahlian(id_user,jenis_keahlian,sertifikat)
                                                                        VALUES('$id_user','$jeniskeahlian','$nfile')");
																
                                                                if($query == true){
                                                                    $_SESSION['succAdd'] = 'SUKSES! Data berhasil ditambahkan';
																	header("Location: ./admin.php?page=usr&act=edit&id_user=".$id_user.""); 
                                                                    die();
                                                                } else {
                                                                    $_SESSION['errQ'] = 'ERROR! Ada masalah dengan query';
                                                                    echo '<script language="javascript">window.history.back();</script>';
                                                                }
                                                            } else {
                                                                $_SESSION['errSize'] = 'Ukuran file yang diupload terlalu besar!';
                                                                echo '<script language="javascript">window.history.back();</script>';
                                                            }
                                                        } else {
                                                            $_SESSION['errFormat'] = 'Format file yang diperbolehkan hanya *.JPG, *.PNG, *.DOC, *.DOCX atau *.PDF!';
                                                            echo '<script language="javascript">window.history.back();</script>';
                                                        }
                                                    } else {

                                                        //jika form file kosong akan mengeksekusi script dibawah ini
                                                        $query = mysqli_query($config, "INSERT INTO tbl_keahlian(id_user,jenis_keahlian)
                                                            VALUES('$id_user','$jeniskeahlian')");
															
                                                        if($query == true){
                                                            $_SESSION['succAdd'] = 'SUKSES! Data berhasil ditambahkan';
																header("Location: ./admin.php?page=usr&act=edit&id_user=".$id_user.""); 
                                                            die();
                                                        } else {
                                                            $_SESSION['errQ'] = 'ERROR! Ada masalah dengan query';
                                                            echo '<script language="javascript">window.history.back();</script>';
                                                        }
                                                    }
										}
										
										$id_user=mysqli_real_escape_string($config,$_REQUEST['id_user']);
										$nampungkeahlian=mysqli_query($config,"SELECT MAX(id) as maksimalkeahlian FROM tbl_keahlian WHERE id_user='$id_user'");
										$datas5=mysqli_fetch_array($nampungkeahlian);
										$makskeahlian= $datas5['maksimalkeahlian'];
										
										for($i=1;$i<=$makskeahlian;$i++){
										if(isset($_REQUEST['simpankeahlian'.$i.''])){
										$jeniskeahlian=mysqli_real_escape_string($config,$_REQUEST['jeniskeahlian'.$i.'']);
										
										
													$ekstensi = array('jpg','png','jpeg','doc','docx','pdf');
                                                    $file = $_FILES['file'.$i.'']['name'];
                                                    $x = explode('.', $file);
                                                    $eks = strtolower(end($x));
                                                    $ukuran = $_FILES['file'.$i.'']['size'];
                                                    $target_dir = "upload/sertifikat/";
												

                                                    //jika form file tidak kosong akan mengeksekusi script dibawah ini
                                                    if($file != ""){

                                                        $rand = rand(1,10000);
                                                        $nfile = $rand."-".$file;

                                                        //validasi file
                                                        if(in_array($eks, $ekstensi) == true){
                                                            if($ukuran < 250000000){

                                                                move_uploaded_file($_FILES['file'.$i.'']['tmp_name'], $target_dir.$nfile);
																

                                                                $queryv = mysqli_query($config,"UPDATE tbl_keahlian SET id_user='$id_user',jenis_keahlian='$jeniskeahlian',sertifikat='$nfile' WHERE id='".$i."'");
																
                                                                if($queryv == true){
                                                                    $_SESSION['succAdd'] = 'SUKSES! Data berhasil ditambahkan';
																	header("Location: ./admin.php?page=usr&act=edit&id_user=".$id_user.""); 
                                                                    die();
                                                                } else {
                                                                    $_SESSION['errQ'] = 'ERROR! Ada masalah dengan query';
                                                                    echo '<script language="javascript">window.history.back();</script>';
                                                                }
                                                            } else {
                                                                $_SESSION['errSize'] = 'Ukuran file yang diupload terlalu besar!';
                                                                echo '<script language="javascript">window.history.back();</script>';
                                                            }
                                                        } else {
                                                            $_SESSION['errFormat'] = 'Format file yang diperbolehkan hanya *.JPG, *.JPEG, *.PNG, *.DOC, *.DOCX atau *.PDF!';
                                                            echo '<script language="javascript">window.history.back();</script>';
                                                        }
                                                    } else {

                                                        //jika form file kosong akan mengeksekusi script dibawah ini
                                                        $queryv = mysqli_query($config,"UPDATE tbl_keahlian SET id_user='$id_user',jenis_keahlian='$jeniskeahlian' WHERE id='".$i."'");
															
                                                        if($queryv == true){
                                                            $_SESSION['succAdd'] = 'SUKSES! Data berhasil ditambahkan';
																header("Location: ./admin.php?page=usr&act=edit&id_user=".$id_user.""); 
                                                            die();
                                                        } else {
                                                            $_SESSION['errQ'] = 'ERROR! Ada masalah dengan query';
                                                            echo '<script language="javascript">window.history.back();</script>';
                                                        }
                                                    }
										
										
										} else if(isset($_REQUEST['hapuskeahlian'.$i.''])){
											
											$ngapus=mysqli_query($config,"DELETE FROM tbl_keahlian WHERE id='".$i."'");
										}
										
											}
											
											if(isset($_REQUEST['tambahkeluarga'])){
											$id_user=mysqli_real_escape_string($config,$_REQUEST['id_user']);
											$namakeluarga=mysqli_real_escape_string($config,$_REQUEST['namakeluarga']);
											$jeniskelaminkeluarga=mysqli_real_escape_string($config,$_REQUEST['jeniskelaminkeluarga']);
											$tempatlahir=mysqli_real_escape_string($config,$_REQUEST['tempatlahir']);
											$tanggallahir=mysqli_real_escape_string($config,$_REQUEST['tanggallahir']);
											$hubungankeluarga=mysqli_real_escape_string($config,$_REQUEST['hubungankeluarga']);
											$ages = mysqli_real_escape_string($config,date_diff(date_create($tanggallahir), date_create('now'))->y);
											$update=mysqli_query($config,"INSERT INTO tbl_keluarga (id_user,nama,jenis_kelamin,tempat_lahir,tanggal_lahir,usia,hubungan_keluarga) VALUES ('$id_user','$namakeluarga','$jeniskelaminkeluarga','$tempatlahir','$tanggallahir','$ages','$hubungankeluarga')");
										}
										
										$nampungkeluarga=mysqli_query($config,"SELECT MAX(id) as maksimalkeluarga FROM tbl_keluarga WHERE id_user='$id_user'");
										$datax=mysqli_fetch_array($nampungkeluarga);
										$makskeluarga= $datax['maksimalkeluarga'];
										
										for($i=1;$i<=$makskeluarga;$i++){
										if(isset($_REQUEST['simpankeluarga'.$i.''])){
											$id_user=mysqli_real_escape_string($config,$_REQUEST['id_user']);
											$namakeluarga=mysqli_real_escape_string($config,$_REQUEST['namakeluarga'.$i.'']);
											$jeniskelaminkeluarga=mysqli_real_escape_string($config,$_REQUEST['jeniskelaminkeluarga'.$i.'']);
											$tempatlahir=mysqli_real_escape_string($config,$_REQUEST['tempatlahir'.$i.'']);
											$tanggallahir=mysqli_real_escape_string($config,$_REQUEST['tanggallahir'.$i.'']);
											$hubungankeluarga=mysqli_real_escape_string($config,$_REQUEST['hubungankeluarga'.$i.'']);
											$ages = mysqli_real_escape_string($config,date_diff(date_create($tanggallahir), date_create('now'))->y);
											
											$ngapdet=mysqli_query($config,"UPDATE tbl_keluarga SET nama='$namakeluarga',jenis_kelamin='$jeniskelaminkeluarga',tempat_lahir='$tempatlahir',tanggal_lahir='$tanggallahir',usia='$ages',hubungan_keluarga='$hubungankeluarga' WHERE id='".$i."' ");
										} else if(isset($_REQUEST['hapuskeluarga'.$i.''])){
											
											$ngapus=mysqli_query($config,"DELETE FROM tbl_keluarga WHERE id='".$i."' ");
										}
										
											}
											
										if(isset($_REQUEST['tambahkontrak'])){
											$id_user=mysqli_real_escape_string($config,$_REQUEST['id_user']);
											$tgl_awal=mysqli_real_escape_string($config,$_REQUEST['tanggalawals']);
											$tgl_akhir=mysqli_real_escape_string($config,$_REQUEST['tanggalakhirs']);
											
													$ekstensi = array('jpg','png','jpeg','doc','docx','pdf');
                                                    $file = $_FILES['file']['name'];
                                                    $x = explode('.', $file);
                                                    $eks = strtolower(end($x));
                                                    $ukuran = $_FILES['file']['size'];
                                                    $target_dir = "upload/kontrak/";
												

                                                    //jika form file tidak kosong akan mengeksekusi script dibawah ini
                                                    if($file != ""){

                                                        $rand = rand(1,10000);
                                                        $nfile = $rand."-".$file;

                                                        //validasi file
                                                        if(in_array($eks, $ekstensi) == true){
                                                            if($ukuran < 250000000){

                                                                move_uploaded_file($_FILES['file']['tmp_name'], $target_dir.$nfile);
																

                                                                $query = mysqli_query($config, "INSERT INTO tbl_kontrak(id_user,tgl_awal,tgl_akhir,file)
                                                                        VALUES('$id_user','$tgl_awal','$tgl_akhir','$nfile')");
																$updetkontrak=mysqli_query($config,"UPDATE tbl_kontrak SET status='habis' WHERE status='mauhabis' AND id_user='$id_user'");
																
                                                                if($query == true){
                                                                    $_SESSION['succAdd'] = 'SUKSES! Data berhasil ditambahkan';
																	header("Location: ./admin.php?page=usr&act=edit&id_user=".$id_user.""); 
                                                                    die();
                                                                } else {
                                                                    $_SESSION['errQ'] = 'ERROR! Ada masalah dengan query';
                                                                    echo '<script language="javascript">window.history.back();</script>';
                                                                }
                                                            } else {
                                                                $_SESSION['errSize'] = 'Ukuran file yang diupload terlalu besar!';
                                                                echo '<script language="javascript">window.history.back();</script>';
                                                            }
                                                        } else {
                                                            $_SESSION['errFormat'] = 'Format file yang diperbolehkan hanya *.JPG, *.PNG, *.DOC, *.DOCX atau *.PDF!';
                                                            echo '<script language="javascript">window.history.back();</script>';
                                                        }
                                                    } else {

                                                        //jika form file kosong akan mengeksekusi script dibawah ini
                                                        $query = mysqli_query($config, "INSERT INTO tbl_kontrak(id_user,tgl_awal,tgl_akhir)
                                                                        VALUES('$id_user','$tgl_awal','$tgl_akhir')");
														$updetkontrak=mysqli_query($config,"UPDATE tbl_kontrak SET status='habis' WHERE status='mauhabis' AND id_user='$id_user'");	
                                                        if($query == true){
                                                            $_SESSION['succAdd'] = 'SUKSES! Data berhasil ditambahkan';
																header("Location: ./admin.php?page=usr&act=edit&id_user=".$id_user.""); 
                                                            die();
                                                        } else {
                                                            $_SESSION['errQ'] = 'ERROR! Ada masalah dengan query';
                                                            echo '<script language="javascript">window.history.back();</script>';
                                                        }
                                                    }
													
											
										}
										
										$nampungkontrak=mysqli_query($config,"SELECT MAX(id) as maksimalkontrak FROM tbl_kontrak WHERE id_user='$id_user'");
										$datay=mysqli_fetch_array($nampungkontrak);
										$makskontrak= $datay['maksimalkontrak'];
										
										for($i=1;$i<=$makskontrak;$i++){
										if(isset($_REQUEST['simpankontrak'.$i.''])){
											$id_user=mysqli_real_escape_string($config,$_REQUEST['id_user']);
											$tgl_awal=mysqli_real_escape_string($config,$_REQUEST['tanggalawals'.$i.'']);
											$tgl_akhir=mysqli_real_escape_string($config,$_REQUEST['tanggalakhirs'.$i.'']);
											
													$ekstensi = array('jpg','png','jpeg','doc','docx','pdf');
                                                    $file = $_FILES['file'.$i.'']['name'];
                                                    $x = explode('.', $file);
                                                    $eks = strtolower(end($x));
                                                    $ukuran = $_FILES['file'.$i.'']['size'];
                                                    $target_dir = "upload/kontrak/";
												

                                                    //jika form file tidak kosong akan mengeksekusi script dibawah ini
                                                    if($file != ""){

                                                        $rand = rand(1,10000);
                                                        $nfile = $rand."-".$file;

                                                        //validasi file
                                                        if(in_array($eks, $ekstensi) == true){
                                                            if($ukuran < 250000000){

                                                                move_uploaded_file($_FILES['file'.$i.'']['tmp_name'], $target_dir.$nfile);
																

                                                                $queryv = mysqli_query($config,"UPDATE tbl_kontrak SET id_user='$id_user',tgl_awal='$tgl_awal',tgl_akhir='$tgl_akhir',file='$nfile' WHERE id='".$i."'");
																
                                                                if($queryv == true){
                                                                    $_SESSION['succAdd'] = 'SUKSES! Data berhasil ditambahkan';
																	header("Location: ./admin.php?page=usr&act=edit&id_user=".$id_user.""); 
                                                                    die();
                                                                } else {
                                                                    $_SESSION['errQ'] = 'ERROR! Ada masalah dengan query';
                                                                    echo '<script language="javascript">window.history.back();</script>';
                                                                }
                                                            } else {
                                                                $_SESSION['errSize'] = 'Ukuran file yang diupload terlalu besar!';
                                                                echo '<script language="javascript">window.history.back();</script>';
                                                            }
                                                        } else {
                                                            $_SESSION['errFormat'] = 'Format file yang diperbolehkan hanya *.JPG, *.JPEG, *.PNG, *.DOC, *.DOCX atau *.PDF!';
                                                            echo '<script language="javascript">window.history.back();</script>';
                                                        }
                                                    } else {

                                                        //jika form file kosong akan mengeksekusi script dibawah ini
                                                        $queryv = mysqli_query($config,"UPDATE tbl_kontrak SET id_user='$id_user',tgl_awal='$tgl_awal',tgl_akhir='$tgl_akhir' WHERE id='".$i."'");
															
                                                        if($queryv == true){
                                                            $_SESSION['succAdd'] = 'SUKSES! Data berhasil ditambahkan';
																header("Location: ./admin.php?page=usr&act=edit&id_user=".$id_user.""); 
                                                            die();
                                                        } else {
                                                            $_SESSION['errQ'] = 'ERROR! Ada masalah dengan query';
                                                            echo '<script language="javascript">window.history.back();</script>';
                                                        }
                                                    }
										
										
										} else if(isset($_REQUEST['hapuskontrak'.$i.''])){
											
											$ngapus=mysqli_query($config,"DELETE FROM tbl_kontrak WHERE id='".$i."'");
										}
										}
										
										
										
										
					
						if(isset($_REQUEST['identitas'])){
							echo'<div class="input-field col s12" style="border: 1px dashed black;
							border-radius: 5px;">';
							include "identitas.php";
							echo'</div>';
						}				
						if(isset($_REQUEST['pendidikan'])){ 
						echo'<div class="input-field col s12" style="border: 1px dashed black;
							border-radius: 5px;">';
							include "pendidikan.php";
							echo'</div>';}
							
							if(isset($_REQUEST['jabatans'])){ 
						echo'<div class="input-field col s12" style="border: 1px dashed black;
							border-radius: 5px;">';
							include "jabatan.php";
							echo'</div>';}
							
							if(isset($_REQUEST['disiplin'])){ 
						echo'<div class="input-field col s12" style="border: 1px dashed black;
							border-radius: 5px;">';
							include "disiplin.php";
							echo'</div>';}
							
							if(isset($_REQUEST['penugasan'])){ 
						echo'<div class="input-field col s12" style="border: 1px dashed black;
							border-radius: 5px;">';
							include "penugasan.php";
							echo'</div>';}
							
							if(isset($_REQUEST['organisasi'])){ 
						echo'<div class="input-field col s12" style="border: 1px dashed black;
							border-radius: 5px;">';
							include "organisasi.php";
							echo'</div>';}
							
							if(isset($_REQUEST['keahlian'])){ 
						echo'<div class="input-field col s12" style="border: 1px dashed black;
							border-radius: 5px;">';
							include "keahlian.php";
							echo'</div>';}
							
							if(isset($_REQUEST['keluarga'])){ 
						echo'<div class="input-field col s12" style="border: 1px dashed black;
							border-radius: 5px;">';
							include "keluarga.php";
							echo'</div>';}
							
							if(isset($_REQUEST['perjanjian'])){ 
						echo'<div class="input-field col s12" style="border: 1px dashed black;
							border-radius: 5px;">';
							include "perjanjian.php";
							echo'</div>';}
						?>
								 
								 
                                <!-- Row in form END -->
                                
                            
                            <!-- Form END -->

                        </div>
                        <!-- Row form END -->

<?php
                        }
                    }
                
            
        }
	  
   
	
?>

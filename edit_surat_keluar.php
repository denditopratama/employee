<?php
    //cek session
    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {

        if(isset($_REQUEST['submit'])){

            //validasi form kosong
            if($_REQUEST['tujuan'] == "" || $_REQUEST['isi'] == ""
                || $_REQUEST['tgl_surat'] == ""  || $_REQUEST['keterangan'] == ""){
                    $_SESSION['errEmpty'] = 'ERROR! Semua form wajib diisi';
                    echo '<script language="javascript">window.history.back();</script>';
            } else {

                $id_surat = $_REQUEST['id_surat'];
                $no_surat = $_REQUEST['no_surat'];
                $tujuan = $_REQUEST['tujuan'];
                $isi = $_REQUEST['isi'];
             
                $tgl_surat = $_REQUEST['tgl_surat'];
                $keterangan = $_REQUEST['keterangan'];
                $id_user = $_SESSION['id_user'];
				$tunjukan=mysqli_real_escape_string($config,$_POST['tunjukan']);
				$ditujukan=mysqli_real_escape_string($config,$_POST['ditujukan']);

                //validasi input data
               

                    

                        if(!preg_match("/^[a-zA-Z0-9.,() \/ -]*$/", $tujuan)){
                            $_SESSION['tujuan_surat'] = 'Form Tujuan Surat hanya boleh mengandung karakter huruf, angka, spasi, titik(.), koma(,), minus(-),kurung() dan garis miring(/)';
                            echo '<script language="javascript">window.history.back();</script>';
                        } else {

                            if(!preg_match("/^[a-zA-Z0-9.,_()%&@\/\r\n -]*$/", $isi)){
                                $_SESSION['isik'] = 'Form Isi Ringkas hanya boleh mengandung karakter huruf, angka, spasi, titik(.), koma(,), minus(-), garis miring(/), kurung(), underscore(_), dan(&) persen(%) dan at(@)';
                                echo '<script language="javascript">window.history.back();</script>';
                            } else {

                                if(!preg_match("/^[a-zA-Z0-9., ]*$/", $nkode)){
                                    $_SESSION['kodek'] = 'Form Kode Klasifikasi hanya boleh mengandung karakter huruf, angka, spasi, titik(.) dan koma(,)';
                                    echo '<script language="javascript">window.history.back();</script>';
                                } else {

                                    if(!preg_match("/^[0-9.-]*$/", $tgl_surat)){
                                        $_SESSION['tgl_suratk'] = 'Form Tanggal Surat hanya boleh mengandung angka dan minus(-)';
                                        echo '<script language="javascript">window.history.back();</script>';
                                    } else {

                                        if(!preg_match("/^[a-zA-Z0-9.,()\/ -]*$/", $keterangan)){
                                            $_SESSION['keterangank'] = 'Form Keterangan hanya boleh mengandung karakter huruf, angka, spasi, titik(.), koma(,), minus(-), garis miring(/), dan kurung()';
                                            echo '<script language="javascript">window.history.back();</script>';
                                        } else {

											$ekstensi = array('jpg','png','jpeg','doc','docx','pdf','mp4','xls','xlsx','mov','rar','zip','ppt');
                                            $file = $_FILES['file']['name'];
                                            $x = explode('.', $file);
                                            $eks = strtolower(end($x));
                                            $ukuran = $_FILES['file']['size'];
                                            $target_dir = "upload/surat_keluar/";
											$target_dir2 = "upload/surat_masuk/";
											

                                            //jika form file tidak kosong akan mengeksekusi script dibawah ini
                                            if($file != ""){

                                                $rand = rand(1,10000);
                                                $nfile = $rand."-".$file;

                                                //validasi file
                                                if(in_array($eks, $ekstensi) == true){
                                                    if($ukuran < 2500000000000000000000000000){

                                                        $id_surat = $_REQUEST['id_surat'];
                                                        $query = mysqli_query($config, "SELECT file FROM tbl_surat_keluar WHERE id_surat='$id_surat'");
                                                        list($file) = mysqli_fetch_array($query);

                                                        //jika file sudah ada akan mengeksekusi script dibawah ini
                                                        if(!empty($file)){
															$id_surat = $_REQUEST['id_surat'];
                                                            unlink($target_dir.$file);
                                                            move_uploaded_file($_FILES['file']['tmp_name'], $target_dir.$nfile);
															copy($target_dir.$nfile, $target_dir2.$nfile);

															

                                                            if($_POST['tujuan']==2){
                                                           $result_explode = explode('.', $tunjukan);
													
                                                            $query = mysqli_query($config, "UPDATE tbl_surat_keluar SET tujuan='".$result_explode[1]."',no_surat='$no_surat',isi='$isi',kode='$kode',tgl_surat='$tgl_surat',tgl_catat=NOW(),file='$nfile',keterangan='$keterangan',id_user='$id_user',dari='".$_SESSION['nama']."' WHERE id_surat='$id_surat' ");
	
															$queryzz = mysqli_query($config, "UPDATE tbl_surat_masuk SET kode='$no_surat',asal_surat='".$_SESSION['nama']."',isi='$isi',tgl_surat='$tgl_surat',tgl_diterima=NOW(),file='$nfile',keterangan='$keterangan',id_user='".$result_explode[0]."' WHERE kode='$no_surat'");
															}
															else{
															$query = mysqli_query($config, "UPDATE tbl_surat_keluar SET tujuan='$ditujukan',no_surat='$no_surat',isi='$isi',kode='$kode',tgl_surat='$tgl_surat',tgl_catat=NOW(),file='$nfile',keterangan='$keterangan',id_user='$id_user',dari='".$_SESSION['nama']."' WHERE no_surat='$no_surat' ");
															
															}

                                                            if($query == true){
                                                                $_SESSION['succEdit'] = 'SUKSES! Data berhasil diupdate';
																if($_SESSION['admin']==1){
																	header("Location: ./admin.php?page=tskall");}
																else {
																	header("Location: ./admin.php?page=tsk");
																}
                                                                die();
                                                            } else {
                                                                $_SESSION['errQ'] = 'ERROR! Ada masalah dengan query';
                                                                echo '<script language="javascript">window.history.back();</script>';
                                                            }
                                                        } else {

                                                            //jika file kosong akan mengeksekusi script dibawah ini
                                                            move_uploaded_file($_FILES['file']['tmp_name'], $target_dir.$nfile);
															

                                                          if($_POST['tujuan']==2){
														
														$result_explode = explode('.', $tunjukan);
													
                                                            $query = mysqli_query($config, "UPDATE tbl_surat_keluar SET tujuan='".$result_explode[1]."',no_surat='$no_surat',isi='$isi',kode='$kode',tgl_surat='$tgl_surat',tgl_catat=NOW(),file='$nfile',keterangan='$keterangan',id_user='$id_user',dari='".$_SESSION['nama']."' WHERE id_surat='$id_surat' ");
	
															$queryzz = mysqli_query($config, "UPDATE tbl_surat_masuk SET kode='$no_surat',asal_surat='".$_SESSION['nama']."',isi='$isi',tgl_surat='$tgl_surat',tgl_diterima=NOW(),file='$nfile',keterangan='$keterangan',id_user='".$result_explode[0]."' WHERE id_surat='$id_surat'");
															}
															else{
															$query = mysqli_query($config, "UPDATE tbl_surat_keluar SET tujuan='$ditujukan',no_surat='$no_surat',isi='$isi',kode='$kode',tgl_surat='$tgl_surat',tgl_catat=NOW(),file='$nfile',keterangan='$keterangan',id_user='$id_user',dari='".$_SESSION['nama']."' WHERE id_surat='$id_surat' ");
															}

                                                            if($query == true){
                                                                 $_SESSION['succEdit'] = 'SUKSES! Data berhasil diupdate';
																if($_SESSION['admin']==1){
																	header("Location: ./admin.php?page=tskall");}
																else {
																	header("Location: ./admin.php?page=tsk");
																}
                                                                die();
                                                            } else {
                                                                $_SESSION['errQ'] = 'ERROR! Ada masalah dengan query';
                                                                echo '<script language="javascript">window.history.back();</script>';
                                                            }
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
                                                $id_surat = $_REQUEST['id_surat'];

															if($_POST['tujuan']==2){
														
															$result_explode = explode('.', $tunjukan);
													
                                                            $query = mysqli_query($config, "UPDATE tbl_surat_keluar SET tujuan='".$result_explode[1]."',no_surat='$no_surat',isi='$isi',kode='$kode',tgl_surat='$tgl_surat',tgl_catat=NOW(),keterangan='$keterangan',id_user='$id_user',dari='".$_SESSION['nama']."' WHERE id_surat='$id_surat' ");
	
															$queryzz = mysqli_query($config, "UPDATE tbl_surat_masuk SET kode='$no_surat',asal_surat='".$_SESSION['nama']."',isi='$isi',tgl_surat='$tgl_surat',tgl_diterima=NOW(),keterangan='$keterangan',id_user='".$result_explode[0]."' WHERE kode='$no_surat'");
															}
															else{
															$query = mysqli_query($config, "UPDATE tbl_surat_keluar SET tujuan='$ditujukan',no_surat='$no_surat',isi='$isi',kode='$kode',tgl_surat='$tgl_surat',tgl_catat=NOW(),keterangan='$keterangan',id_user='$id_user',dari='".$_SESSION['nama']."' WHERE no_surat='$no_surat' ");
															
															}

                                                if($query == true){
                                                    $_SESSION['succEdit'] = 'SUKSES! Data berhasil diupdate';
                                                      $_SESSION['succEdit'] = 'SUKSES! Data berhasil diupdate';
																if($_SESSION['admin']==1){
																	header("Location: ./admin.php?page=tskall");}
																else {
																	header("Location: ./admin.php?page=tsk");
																}
                                                                die();
                                                } else {
                                                    $_SESSION['errQ'] = 'ERROR! Ada masalah dengan query';
                                                    echo '<script language="javascript">window.history.back();</script>';
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    
                
            }
        } else {

            $id_surat = mysqli_real_escape_string($config, $_REQUEST['id_surat']);
            $query = mysqli_query($config, "SELECT id_surat, no_agenda, tujuan, no_surat, isi, kode, tgl_surat, file, keterangan, id_user FROM tbl_surat_keluar WHERE id_surat='$id_surat'");
            list($id_surat, $no_agenda, $tujuan, $no_surat, $isi, $kode, $tgl_surat, $file, $keterangan, $id_user) = mysqli_fetch_array($query);
            if(empty($_SESSION['admin'])){
                echo '<script language="javascript">
                        window.alert("ERROR! Anda tidak memiliki hak akses untuk mengedit data ini");
                        window.location.href="./admin.php?page=tsk";
                      </script>';
            } else {?>

                <!-- Row Start -->
                <div class="row">
                    <!-- Secondary Nav START -->
                    <div class="col s12">
                        <nav class="secondary-nav">
                            <div class="nav-wrapper blue-grey darken-1">
                                <ul class="left">
                                    <li class="waves-effect waves-light"><a href="#" class="judul"><i class="material-icons">edit</i> Edit Data Surat Keluar</a></li>
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
                    if(isset($_SESSION['errEmpty'])){
                        $errEmpty = $_SESSION['errEmpty'];
                        echo '<div id="alert-message" class="row">
                                <div class="col m12">
                                    <div class="card red lighten-5">
                                        <div class="card-content notif">
                                            <span class="card-title red-text"><i class="material-icons md-36">clear</i> '.$errEmpty.'</span>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        unset($_SESSION['errEmpty']);
                    }
                ?>

                <!-- Row form Start -->
                <div class="row jarak-form">

                    <!-- Form START -->
                    <form class="col s12" method="POST" enctype="multipart/form-data">

                        <!-- Row in form START -->
                        <div class="row">
                          <script>

								function tampil1() {
									
										document.getElementById("tunjukan").style.visibility = "hidden";
										document.getElementById("ditujukan").style.visibility = "visible";
										document.getElementById("tunjukan").disabled = true;
										document.getElementById("rere").style.color = "green";
										document.getElementById("ditujukan").disabled = false;	
										document.getElementById("roro").style.color = "red";
										document.getElementById("no_surat").disabled = false;	
										document.getElementById("surat").style.color = "green";
										document.getElementById("no_surat").style.visibility = "visible";
										document.getElementById("usaha").style.visibility = "visible";
										document.getElementById("suraha").style.visibility = "visible";
										
									
										}
								function tampil2() {
									
										document.getElementById("ditujukan").disabled = true;
										document.getElementById("roro").style.color = "green";
										document.getElementById("tunjukan").disabled = false;	
										document.getElementById("rere").style.color = "red";
										document.getElementById("tunjukan").style.visibility = "visible";
										document.getElementById("ditujukan").style.visibility = "hidden";
										document.getElementById("no_surat").disabled = true;	
										document.getElementById("surat").style.color = "red";
										document.getElementById("no_surat").style.visibility = "hidden";
										document.getElementById("usaha").style.visibility = "hidden";
										document.getElementById("suraha").style.visibility = "hidden";
										
										}
							</script>
                          
                          <div class="input-field col s6">
                            <i class="material-icons prefix md-prefix">place</i>
                            <input id="kesatu" type="radio" class="validate" name="tujuan" value="1" onclick="tampil1()" required>
                            <label id="kk" for="kesatu" style="margin-left:25px">Institusi / Perusahaan Luar</label>
							<input id="kedua" type="radio" class="validate" name="tujuan" value="2" onclick="tampil2()">
						    <label id ="gogo" for="kedua"style="margin-left:25px">Karyawan Internal</label>
							

						</div>
                            <div id="asd" class="input-field col s6" >
                            <i id="roro" class="material-icons prefix md-prefix" >account_circle</i><label>Ditujukan</label><br/>	
                            <select class="browser-default" name="tunjukan" id="tunjukan" style="margin-bottom:15px;">
						<?php	$query = mysqli_query($config,"SELECT * FROM tbl_user WHERE id_user<>9999 AND(admin<>1 AND admin<>9)");	
							while ($row = mysqli_fetch_array($query)) {		
									if($tujuan==$row['nama']){
									echo "<option value='".$row['id_user'].".".$row['nama']."' selected>".$row['nama']."</option>";	
									} else {
									echo "<option value='".$row['id_user'].".".$row['nama']."'>".$row['nama']."</option>";}
								
								}
								echo "</select>";			
						?>
							</div>
							
							 <div class="input-field col s6">
                            <i id="surat" class="material-icons prefix md-prefix">looks_two</i>
                            <input id="no_surat" type="text" class="validate" name="no_surat" value="<?php echo $no_surat;?>">
                                <?php
                                    if(isset($_SESSION['eno_surat'])){
                                        $eno_surat = $_SESSION['eno_surat'];
                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$eno_surat.'</div>';
                                        unset($_SESSION['eno_surat']);
                                    }
                                    if(isset($_SESSION['errDup'])){
                                        $errDup = $_SESSION['errDup'];
                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$errDup.'</div>';
                                        unset($_SESSION['errDup']);
                                    }
                                ?>
                            <label id="suraha" for="no_surat">Nomor Surat</label>
                        </div>
							
						<div id="dsa" class="input-field col s6" >
                            <i id="rere" class="material-icons prefix md-prefix">work</i>
                            <input id="ditujukan" type="text" class="" name="ditujukan" value="<?php echo $tujuan; ?>"> 
                            <label id="usaha" for="ditujukan">Perusahaan Tujuan</label>
                        </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix md-prefix">date_range</i>
                                <input id="tgl_surat" type="text" name="tgl_surat" class="datepicker" value="<?php echo $tgl_surat ;?>" required>
                                    <?php
                                        if(isset($_SESSION['tgl_suratk'])){
                                            $tgl_suratk = $_SESSION['tgl_suratk'];
                                            echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$tgl_suratk.'</div>';
                                            unset($_SESSION['tgl_suratk']);
                                        }
                                    ?>
                                <label for="tgl_surat">Tanggal Surat</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix md-prefix">featured_play_list</i>
                                <input id="keterangan" type="text" class="validate" name="keterangan" value="<?php echo $keterangan ;?>" required>
                                    <?php
                                        if(isset($_SESSION['keterangank'])){
                                            $keterangank = $_SESSION['keterangank'];
                                            echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$keterangank.'</div>';
                                            unset($_SESSION['keterangank']);
                                        }
                                    ?>
                                <label for="keterangan">Keterangan</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix md-prefix">description</i>
                                <textarea id="isi" class="materialize-textarea validate" name="isi" required><?php echo $isi ;?></textarea>
                                    <?php
                                        if(isset($_SESSION['isik'])){
                                            $isik = $_SESSION['isik'];
                                            echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$isik.'</div>';
                                            unset($_SESSION['isik']);
                                        }
                                    ?>
                                <label for="isi">Isi</label>
                            </div>
                            <div class="input-field col s6">
                                <div class="file-field input-field tooltipped" data-position="top" data-tooltip="Jika tidak ada file/scan gambar surat, biarkan kosong">
                                    <div class="btn light-green darken-1">
                                        <span>File</span>
                                        <input type="file" id="file" name="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" value="<?php echo $file ;?>" placeholder="Upload file/scan gambar surat keluar" disabled>
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
                                        <small class="red-text">*Format file yang diperbolehkan *.JPG, *.PNG, *.DOC, *.DOCX, *.PDF dan ukuran maksimal file 2 MB!</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Row in form END -->

                        <div class="row">
                            <div class="col 6">
                                <button type="submit" name="submit" class="btn-large blue waves-effect waves-light">SIMPAN <i class="material-icons">done</i></button>
                            </div>
                            <div class="col 6">
							<?php if($_SESSION['admin']==1) {?>
                                <a class="btn-large deep-orange waves-effect waves-light" href="?page=tskall">BATAL <i class="material-icons">clear</i></a>
							<?php } else { ?>
							   <a class="btn-large deep-orange waves-effect waves-light" href="?page=tsk">BATAL <i class="material-icons">clear</i></a>
							<?php } ?>
                            </div>
                        </div>

                    </form>
                    <!-- Form END -->
				
                </div>
                <!-- Row form END -->

<?php
            }
        }
		
		
		
    }
	
?>

<script>
$(document).ready(function(){
	<?php 
	$kunyuk=mysqli_query($config,"SELECT nama FROM tbl_user WHERE nama='$tujuan'");
	if(mysqli_num_rows($kunyuk)>0){
		echo'tampil2();
		$("#kedua").prop("checked", true);';
	} else {
		echo'tampil1();
		$("#kesatu").prop("checked", true);';
	}
	?>
	
});
</script>
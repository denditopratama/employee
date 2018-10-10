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

                $no_agenda = $_REQUEST['no_agenda'];
                $no_surat = $_REQUEST['no_surat'];
                $tujuan = $_REQUEST['tujuan'];
                $isi = $_REQUEST['isi'];
				$kode=$_POST['nomor_surat'];
                $tgl_surat = $_REQUEST['tgl_surat'];
                $keterangan = $_REQUEST['keterangan'];
                $id_user = $_SESSION['id_user'];
				$ditujukan= mysqli_real_escape_string($config,$_POST['ditujukan']);
				$tunjukan= mysqli_real_escape_string($config,$_POST['tunjukan']);

                //validasi input data
                 

                    if(!preg_match("/^[a-zA-Z0-9.\/ -]*$/", $no_surat)){
                        $_SESSION['no_suratk'] = 'Form No Surat hanya boleh mengandung karakter huruf, angka, spasi, titik(.), minus(-) dan garis miring(/)';
                        echo '<script language="javascript">window.history.back();</script>';
                    } else {

                        if(!preg_match("/^[a-zA-Z0-9.,() \/ -]*$/", $tujuan)){
                            $_SESSION['tujuan_surat'] = 'Form Tujuan Surat hanya boleh mengandung karakter huruf, angka, spasi, titik(.), koma(,), minus(-), kurung() dan garis miring(/)';
                            echo '<script language="javascript">window.history.back();</script>';
                        } else {

                            if(!preg_match("/^[a-zA-Z0-9.,_()%&@\/\r\n -]*$/", $isi)){
                                $_SESSION['isik'] = 'Form Isi Ringkas hanya boleh mengandung karakter huruf, angka, spasi, titik(.), koma(,), minus(-), garis miring(/), kurung(), underscore(_), dan(&) persen(%) dan at(@)';
                                echo '<script language="javascript">window.history.back();</script>';
                            } else {

                                if(!preg_match("/^[a-zA-Z0-9., ]*$/", $kode)){
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

                                            $cek = mysqli_query($config, "SELECT * FROM tbl_surat_keluar WHERE no_surat='$no_surat'");
                                            $result = mysqli_num_rows($cek);

                                           

                                                $ekstensi = array('jpg','png','jpeg','doc','docx','pdf');
                                                $file = $_FILES['file']['name'];
                                                $x = explode('.', $file);
                                                $eks = strtolower(end($x));
                                                $ukuran = $_FILES['file']['size'];
                                                $target_dir = "upload/surat_keluar/";

                                                //jika form file tidak kosong akan mengekse
                                                if($file != ""){

                                                    $rand = rand(1,10000);
                                                    $nfile = $rand."-".$file;
                                                    if(in_array($eks, $ekstensi) == true){
                                                        if($ukuran < 2500000){

                                                            move_uploaded_file($_FILES['file']['tmp_name'], $target_dir.$nfile);

															if($_POST['tujuan']==2){
                                                            $query = mysqli_query($config, "INSERT INTO tbl_surat_keluar(no_agenda,tujuan,no_surat,isi,kode,tgl_surat,tgl_catat,file,keterangan,id_user)
															VALUES('$no_agenda','$tunjukan','$no_surat','$isi','$kode','$tgl_surat',NOW(),'$nfile','$keterangan','$id_user')");
														
															$queryzz = mysqli_query($config, "INSERT INTO tbl_surat_masuk(no_agenda,kode,asal_surat,isi,indeks,tgl_surat,tgl_diterima,file,keterangan,id_user)
															VALUES('$no_agenda','$kode','$id_user','$isi',NULL,'$tgl_surat','$tgl_surat',NOW(),'$nfile','$keterangan','$tunjukan')");
															
															}
															
															else{
															$query = mysqli_query($config, "INSERT INTO tbl_surat_keluar(no_agenda,tujuan,no_surat,isi,kode,tgl_surat,
                                                                tgl_catat,file,keterangan,id_user)
															VALUES('$no_agenda','$ditujukan','$no_surat','$isi','$kode','$tgl_surat',NOW(),'$nfile','$keterangan','$id_user')");
															
															}

                                                        if($query == true){
													
														 $_SESSION['succAdd'] = 'SUKSES! Data berhasil ditambahkan';
                                                        header("Location: ./admin.php?page=tsk");	
														
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
													
														
													
                                                    if($_POST['tujuan']==2){
														
														
                                                            $query = mysqli_query($config, "INSERT INTO tbl_surat_keluar(no_agenda,tujuan,no_surat,isi,kode,tgl_surat,tgl_catat,file,keterangan,id_user,dari)
														VALUES('$no_agenda','$tunjukan','$no_surat','$isi','$kode','$tgl_surat',NOW(),'','$keterangan','$id_user','".$_SESSION['nama']."')");
	
															$queryzz = mysqli_query($config, "INSERT INTO tbl_surat_masuk(kode,asal_surat,isi,tgl_surat,tgl_diterima,file,keterangan,id_user)
															VALUES('$no_surat','".$_SESSION['nama']."','$isi','$tgl_surat',NOW(),'$file','$keterangan','$tunjukan')");
															}
															else{
															$query = mysqli_query($config, "INSERT INTO tbl_surat_keluar(no_agenda,tujuan,no_surat,isi,kode,tgl_surat,
                                                                tgl_catat,file,keterangan,id_user,dari)
															VALUES('$no_agenda','$ditujukan','$no_surat','$isi','$kode','$tgl_surat',NOW(),'$file','$keterangan','$id_user','".$_SESSION['nama']."')");
															
															}


                                                    if($query == true){
												
														 $_SESSION['succAdd'] = 'SUKSES! Data berhasil ditambahkan';
                                                        header("Location: ./admin.php?page=tsk");	
														
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
                
            }
        } else {?>

            <!-- Row Start -->
            <div class="row">
                <!-- Secondary Nav START -->
                <div class="col s12">
                    <nav class="secondary-nav">
                        <div class="nav-wrapper blue-grey darken-1">
                            <ul class="left">
                                <li class="waves-effect waves-light"><a href="?page=tskall&act=add" class="judul"><i class="material-icons">drafts</i> Tambah Data Surat Keluar</a></li>
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
										
									
										}
								function tampil2() {
									
										document.getElementById("ditujukan").disabled = true;
										document.getElementById("roro").style.color = "green";
										document.getElementById("tunjukan").disabled = false;	
										document.getElementById("rere").style.color = "red";
										document.getElementById("tunjukan").style.visibility = "visible";
										document.getElementById("ditujukan").style.visibility = "hidden";}
							</script>
					<div class="input-field col s6">
                            <i class="material-icons prefix md-prefix">place</i>
                            <input id="kesatu" type="radio" class="validate" name="tujuan" value="1" onclick="tampil1()" required>
                            <label for="kesatu" style="margin-left:25px">Institusi / Perusahaan Luar</label>
							<input id="kedua" type="radio" class="validate" name="tujuan" value="2" onclick="tampil2()">
						    <label for="kedua"style="margin-left:25px">Karyawan Internal</label>
							

					</div>
						<div id="asd" class="input-field col s6" >
                            <i id="roro" class="material-icons prefix md-prefix" >account_circle</i><label>Ditujukan</label><br/>	
                            <select class="browser-default" name="tunjukan" id="tunjukan">
						<?php	$query = mysqli_query($config,"SELECT * FROM tbl_user");	
							while ($row = mysqli_fetch_array($query)) {											
								echo "<option id='qq' value='".$row['id_user']."'>".$row['nama']."</option>";}
								echo "</select>";
							
								
					?>
					</div>
						<div id="dsa" class="input-field col s6" >
                            <i id="rere" class="material-icons prefix md-prefix">work</i>
                            <input id="ditujukan" type="text" class="" name="ditujukan">
                              
                            <label for="ditujukan">Perusahaan Tujuan</label>
                        </div>
						
                        <div class="input-field col s6">
                            <i class="material-icons prefix md-prefix">looks_two</i>
                            <input id="no_surat" type="text" class="validate" name="no_surat">
                                <?php
                                    if(isset($_SESSION['no_suratk'])){
                                        $no_suratk = $_SESSION['no_suratk'];
                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$no_suratk.'</div>';
                                        unset($_SESSION['no_suratk']);
                                    }
                                    if(isset($_SESSION['errDup'])){
                                        $errDup = $_SESSION['errDup'];
                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$errDup.'</div>';
                                        unset($_SESSION['errDup']);
                                    }
                                ?>
                            <label for="no_surat">Nomor Surat</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix md-prefix">date_range</i>
                            <input id="tgl_surat" type="text" name="tgl_surat" class="datepicker" required>
                                <?php
                                    if(isset($_SESSION['tgl_suratk'])){
                                        $tgl_suratk = $_SESSION['tgl_suratk'];
                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$tgl_suratk.'</div>';
                                        unset($_SESSION['tgl_suratk']);
                                    }
                                ?>
                            <label for="tgl_surat" style="margin-top:5px">Tanggal Surat</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix md-prefix">featured_play_list</i>
                            <input id="keterangan" type="text" class="validate" name="keterangan" required>
                                <?php
                                    if(isset($_SESSION['keterangank'])){
                                        $keterangank = $_SESSION['keterangank'];
                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$keterangank.'</div>';
                                        unset($_SESSION['keterangank']);
                                    }
                                ?>
                            <label for="keterangan">Perihal</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix md-prefix">description</i>
                            <textarea id="isi" class="materialize-textarea validate" name="isi" required></textarea>
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
                                    <input class="file-path validate" type="text" placeholder="Upload file/scan gambar surat keluar">
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
					
						<a href="?page=tsk" class="btn-large deep-orange waves-effect waves-light">BATAL <i class="material-icons">clear</i></a>
					
							
                        </div>
                    </div>

                </form>
                <!-- Form END -->

            </div>
            <!-- Row form END -->

<?php
        }
    }
?>

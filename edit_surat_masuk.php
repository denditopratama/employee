 <?php
    //cek session
    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {

        if(isset($_REQUEST['submit'])){

            //validasi form kosong
            if($_REQUEST['no_surat'] == "" || $_REQUEST['asal_surat'] == "" || $_REQUEST['isi'] == ""
                ||  $_REQUEST['tgl_surat'] == ""  || $_REQUEST['keterangan'] == ""){
                $_SESSION['errEmpty'] = 'ERROR! Semua form wajib diisi';
                echo '<script language="javascript">window.history.back();</script>';
            } else {

               
                $no_surat = $_REQUEST['no_surat'];
                $asal_surat = $_REQUEST['asal_surat'];
                $isi = $_REQUEST['isi'];
                
                $kode=$_REQUEST['kode'];
                $tgl_surat = $_REQUEST['tgl_surat'];
                $keterangan = $_REQUEST['keterangan'];
                $id_user = $_SESSION['id_user'];
				$tunjukan = mysqli_real_escape_string($config,$_POST['tunjukan']);

                //validasi input data
               

                    if(!preg_match("/^[a-zA-Z0-9.\/ -]*$/", $no_surat)){
                        $_SESSION['eno_surat'] = 'Form No Surat hanya boleh mengandung karakter huruf, angka, spasi, titik(.), minus(-) dan garis miring(/)';
                        echo '<script language="javascript">window.history.back();</script>';
                    } else {

                        if(!preg_match("/^[a-zA-Z0-9.,() \/ -]*$/", $asal_surat)){
                            $_SESSION['easal_surat'] = 'Form Asal Surat hanya boleh mengandung karakter huruf, angka, spasi, titik(.), koma(,), minus(-),kurung() dan garis miring(/)';
                            echo '<script language="javascript">window.history.back();</script>';
                        } else {

                            if(!preg_match("/^[a-zA-Z0-9.,_()%&@\/\r\n -]*$/", $isi)){
                                $_SESSION['eisi'] = 'Form Isi Ringkas hanya boleh mengandung karakter huruf, angka, spasi, titik(.), koma(,), minus(-), garis miring(/), kurung(), underscore(_), dan(&) persen(%) dan at(@)';
                                echo '<script language="javascript">window.history.back();</script>';
                            } else {

                                

                                    if(!preg_match("/^[a-zA-Z0-9., -]*$/", $indeks)){
                                        $_SESSION['eindeks'] = 'Form Indeks hanya boleh mengandung karakter huruf, angka, spasi, titik(.) dan koma(,) dan minus (-)';
                                        echo '<script language="javascript">window.history.back();</script>';
                                    } else {

                                        if(!preg_match("/^[0-9.-]*$/", $tgl_surat)){
                                            $_SESSION['etgl_surat'] = 'Form Tanggal Surat hanya boleh mengandung angka dan minus(-)';
                                            echo '<script language="javascript">window.history.back();</script>';
                                        } else {

                                            if(!preg_match("/^[a-zA-Z0-9.,()\/ -]*$/", $keterangan)){
                                                $_SESSION['eketerangan'] = 'Form Keterangan hanya boleh mengandung karakter huruf, angka, spasi, titik(.), koma(,), minus(-), garis miring(/), dan kurung()';
                                                echo '<script language="javascript">window.history.back();</script>';
                                            } else {

                                                $ekstensi = array('jpg','png','jpeg','doc','docx','pdf','mp4','xls','xlsx','mov','rar','zip','ppt');
                                                $file = $_FILES['file']['name'];
                                                $x = explode('.', $file);
                                                $eks = strtolower(end($x));
                                                $ukuran = $_FILES['file']['size'];
                                                $target_dir = "upload/surat_masuk/";
												

                                            //jika form file tidak kosong akan mengeksekusi script dibawah ini
                                            if($file != ""){

                                                $rand = rand(1,10000);
                                                $nfile = $rand."-".$file;

                                                //validasi file
                                                if(in_array($eks,$ekstensi) == true){
                                                    if($ukuran < 230000000000000){

                                                        $id_surat = $_REQUEST['id_surat'];
                                                        $query = mysqli_query($config, "SELECT file FROM tbl_surat_masuk WHERE id_surat='$id_surat'");
                                                        list($file) = mysqli_fetch_array($query);

                                                        //jika file tidak kosong akan mengeksekusi script dibawah ini
                                                        if(!empty($file)){
                                                            unlink($target_dir.$file);

                                                            move_uploaded_file($_FILES['file']['tmp_name'], $target_dir.$nfile);
															

                                                            $query = mysqli_query($config, "UPDATE tbl_surat_masuk SET kode='$no_surat',asal_surat='$asal_surat',isi='$isi',indeks='$indeks',tgl_surat='$tgl_surat',file='$nfile',keterangan='$keterangan',id_user='$tunjukan' WHERE id_surat='$id_surat'");
															$queryz = mysqli_query($config, "UPDATE tbl_surat_keluar SET tujuan='".$result_explode[1]."',no_surat='$no_surat',isi='$isi',kode='$kode',tgl_surat='$tgl_surat',tgl_catat=NOW(),file='$nfile',keterangan='$keterangan',id_user='$id_user',dari='$asal_surat' WHERE id_surat='$id_surat' ");

                                                            if($query == true){
                                                                $_SESSION['succEdit'] = 'SUKSES! Data berhasil diupdate';
                                                                header("Location: ./admin.php?page=tsmall");
                                                                die();
                                                            } else {
                                                                $_SESSION['errQ'] = 'ERROR! Ada masalah dengan query';
                                                                echo '<script language="javascript">window.history.back();</script>';
                                                            }
                                                        } else {

                                                            //jika file kosong akan mengeksekusi script dibawah ini
                                                            move_uploaded_file($_FILES['file']['tmp_name'], $target_dir.$nfile);
															

                                                            $query = mysqli_query($config, "UPDATE tbl_surat_masuk SET kode='$no_surat',asal_surat='$asal_surat',isi='$isi',indeks='$indeks',tgl_surat='$tgl_surat',file='$nfile',keterangan='$keterangan',id_user='$tunjukan' WHERE id_surat='$id_surat'");
															$queryz = mysqli_query($config, "UPDATE tbl_surat_keluar SET tujuan='".$result_explode[1]."',no_surat='$no_surat',isi='$isi',kode='$kode',tgl_surat='$tgl_surat',tgl_catat=NOW(),file='$nfile',keterangan='$keterangan',id_user='$id_user',dari='$asal_surat' WHERE id_surat='$id_surat' ");

                                                            if($query == true){
                                                                $_SESSION['succEdit'] = 'SUKSES! Data berhasil diupdate';
                                                                header("Location: ./admin.php?page=tsmall");
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
												$result_explode=explode('.',$tunjukan);

                                                $query = mysqli_query($config, "UPDATE tbl_surat_masuk SET kode='$no_surat',asal_surat='$asal_surat',isi='$isi',tgl_surat='$tgl_surat',keterangan='$keterangan',id_user='".$result_explode[0]."' WHERE id_surat='$id_surat'");
												
												$queryz = mysqli_query($config, "UPDATE tbl_surat_keluar SET tujuan='".$result_explode[1]."',no_surat='$no_surat',isi='$isi',kode='$kode',tgl_surat='$tgl_surat',tgl_catat=NOW(),keterangan='$keterangan',id_user='$id_user',dari='$asal_surat' WHERE id_surat='$id_surat' ");

                                                if($query == true){
                                                    $_SESSION['succEdit'] = 'SUKSES! Data berhasil diupdate';
                                                    header("Location: ./admin.php?page=tsmall");
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
    } else {

        $id_surat = mysqli_real_escape_string($config, $_REQUEST['id_surat']);
        $query = mysqli_query($config, "SELECT id_surat, no_agenda, kode, asal_surat, isi, indeks, tgl_surat, file, keterangan, id_user FROM tbl_surat_masuk WHERE id_surat='$id_surat'");
        list($id_surat, $no_agenda, $kode, $asal_surat, $isi, $indeks, $tgl_surat, $file, $keterangan, $id_user) = mysqli_fetch_array($query);

        if($_SESSION['admin']!=1){
            echo '<script language="javascript">
                    window.alert("ERROR! Anda tidak memiliki hak akses untuk mengedit data ini");
                    window.location.href="./admin.php?page=tsm";
                  </script>';
        } else {?>

            <!-- Row Start -->
            <div class="row">
                <!-- Secondary Nav START -->
                <div class="col s12">
                    <nav class="secondary-nav">
                        <div class="nav-wrapper blue-grey darken-1">
                            <ul class="left">
                                <li class="waves-effect waves-light"><a href="#" class="judul"><i class="material-icons">edit</i> Edit Data Surat Masuk</a></li>
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
                <form class="col s12" method="POST" action="?page=tsmall&act=edit" enctype="multipart/form-data">

                    <!-- Row in form START -->
                    <div class="row">
                        <div class="input-field col s6 tooltipped" data-position="top" data-tooltip="Isi dengan angka">
                            <input type="hidden" name="id_surat" value="<?php echo $id_surat ;?>">
                            
							
							<i class="material-icons prefix md-prefix" >account_circle</i><label>Ditujukan</label><br/>
								<div class="input-field col s11 right">
                                            <select class="browser-default" name="tunjukan" id="tunjukan" required>
                                <?php
                                   
									
									$query = mysqli_query($config,"SELECT * FROM tbl_user WHERE admin<>1 AND(admin<>9 AND id_user!=9999)");
					
										while ($row = mysqli_fetch_array($query)) {	
											if($id_user==$row['id_user']){
											echo "<option value='".$row['id_user'].".".$row['nama']."' selected>".$row['nama']."</option>";	
											} else {
											echo "<option value='".$row['id_user'].".".$row['nama']."'>".$row['nama']."</option>";}
										
												}
												
												
												
										echo "</select>";
                                   
                                ?>
										
                                    
                                
                          
                        </div>
                        
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix md-prefix">place</i>
                            <input id="asal_surat" type="text" class="validate" name="asal_surat" value="<?php echo $asal_surat ;?>" required>
                                <?php
                                    if(isset($_SESSION['easal_surat'])){
                                        $easal_surat = $_SESSION['easal_surat'];
                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$easal_surat.'</div>';
                                        unset($_SESSION['easal_surat']);
                                    }
                                ?>
                            <label for="asal_surat">Asal Surat</label>
                        </div>
                     
                        <div class="input-field col s6">
                            <i class="material-icons prefix md-prefix">looks_two</i>
                            <input id="no_surat" type="text" class="validate" name="no_surat" value="<?php echo $kode ;?>" required>
                                <?php
                                    if(isset($_SESSION['eno_surat'])){
                                        $eno_surat = $_SESSION['eno_surat'];
                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$eno_surat.'</div>';
                                        unset($_SESSION['eno_surat']);
                                    }
                                ?>
                            <label for="no_surat">Nomor Surat</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix md-prefix">date_range</i>
                            <input id="tgl_surat" type="text" name="tgl_surat" class="datepicker" value="<?php echo $tgl_surat ;?>" required>
                                <?php
                                    if(isset($_SESSION['etgl_surat'])){
                                        $etgl_surat = $_SESSION['etgl_surat'];
                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$etgl_surat.'</div>';
                                        unset($_SESSION['etgl_surat']);
                                    }
                                ?>
                            <label for="tgl_surat">Tanggal Surat</label>
                        </div>
						<div class="input-field col s6">
                            <i class="material-icons prefix md-prefix">description</i>
                            <input type="text" id="isi" class="validate" name="isi" value="<?php echo $isi ;?>" required>
                                <?php
                                    if(isset($_SESSION['eisi'])){
                                        $eisi = $_SESSION['eisi'];
                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$eisi.'</div>';
                                        unset($_SESSION['eisi']);
                                    }
                                ?>
                            <label for="isi">Perihal</label>
                        </div>
						 <div class="input-field col s6">
                            <i class="material-icons prefix md-prefix">featured_play_list</i>
                            <textarea id="keterangan" class="materialize-textarea validate" name="keterangan" required><?php echo $keterangan ;?></textarea>
                                <?php
                                    if(isset($_SESSION['eketerangan'])){
                                        $eketerangan = $_SESSION['eketerangan'];
                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$eketerangan.'</div>';
                                        unset($_SESSION['eketerangan']);
                                    }
                                ?>
                            <label for="keterangan">Isi Surat</label>
                        </div>
                        
                       
                        <div class="input-field col s6">
                            <div class="file-field input-field tooltipped" data-position="top" data-tooltip="Jika tidak ada file/scan gambar surat, biarkan kosong">
                                <div class="btn light-green darken-1">
                                    <span>File</span>
                                    <input type="file" id="file" name="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" value="<?php echo $file ;?>" placeholder="Upload file/scan gambar surat masuk" disabled>
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
                            <a href=<?php if ($_SESSION['admin']==1 || $_SESSION['admin']==8){
														echo'
                                                        "?page=tsmall"' ;}
														else {
														echo'
                                                        "?page=tsm"'	;
														}?> class="btn-large deep-orange waves-effect waves-light">BATAL <i class="material-icons">clear</i></a>
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

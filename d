[1mdiff --git a/tambah_surat_keluar_x.php b/tambah_surat_keluar_x.php[m
[1mdeleted file mode 100644[m
[1mindex f112106..0000000[m
[1m--- a/tambah_surat_keluar_x.php[m
[1m+++ /dev/null[m
[36m@@ -1,365 +0,0 @@[m
[31m-<?php[m
[31m-    //cek session[m
[31m-    if(empty($_SESSION['admin'])){[m
[31m-        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';[m
[31m-        header("Location: ./");[m
[31m-        die();[m
[31m-    } else {[m
[31m-[m
[31m-        if(isset($_REQUEST['submit'])){[m
[31m-[m
[31m-            //validasi form kosong[m
[31m-            if($_REQUEST['tujuan'] == "" || $_REQUEST['isi'] == ""[m
[31m-                || $_REQUEST['tgl_surat'] == ""  || $_REQUEST['keterangan'] == ""){[m
[31m-                $_SESSION['errEmpty'] = 'ERROR! Semua form wajib diisi';[m
[31m-                echo '<script language="javascript">window.history.back();</script>';[m
[31m-            } else {[m
[31m-[m
[31m-                $no_agenda = $_REQUEST['no_agenda'];[m
[31m-                $no_surat = $_REQUEST['no_surat'];[m
[31m-                $tujuan = $_REQUEST['tujuan'];[m
[31m-                $isi = $_REQUEST['isi'];[m
[31m-				$kode=$_POST['nomor_surat'];[m
[31m-                $tgl_surat = $_REQUEST['tgl_surat'];[m
[31m-                $keterangan = $_REQUEST['keterangan'];[m
[31m-                $id_user = $_SESSION['id_user'];[m
[31m-				$ditujukan= mysqli_real_escape_string($config,$_POST['ditujukan']);[m
[31m-				$tunjukan= mysqli_real_escape_string($config,$_POST['tunjukan']);[m
[31m-[m
[31m-                //validasi input data[m
[31m-                 [m
[31m-[m
[31m-                    if(!preg_match("/^[a-zA-Z0-9.\/ -]*$/", $no_surat)){[m
[31m-                        $_SESSION['no_suratk'] = 'Form No Surat hanya boleh mengandung karakter huruf, angka, spasi, titik(.), minus(-) dan garis miring(/)';[m
[31m-                        echo '<script language="javascript">window.history.back();</script>';[m
[31m-                    } else {[m
[31m-[m
[31m-                        if(!preg_match("/^[a-zA-Z0-9.,() \/ -]*$/", $tujuan)){[m
[31m-                            $_SESSION['tujuan_surat'] = 'Form Tujuan Surat hanya boleh mengandung karakter huruf, angka, spasi, titik(.), koma(,), minus(-), kurung() dan garis miring(/)';[m
[31m-                            echo '<script language="javascript">window.history.back();</script>';[m
[31m-                        } else {[m
[31m-[m
[31m-                            if(!preg_match("/^[a-zA-Z0-9.,_()%&@\/\r\n -]*$/", $isi)){[m
[31m-                                $_SESSION['isik'] = 'Form Isi Ringkas hanya boleh mengandung karakter huruf, angka, spasi, titik(.), koma(,), minus(-), garis miring(/), kurung(), underscore(_), dan(&) persen(%) dan at(@)';[m
[31m-                                echo '<script language="javascript">window.history.back();</script>';[m
[31m-                            } else {[m
[31m-[m
[31m-                                if(!preg_match("/^[a-zA-Z0-9., ]*$/", $kode)){[m
[31m-                                    $_SESSION['kodek'] = 'Form Kode Klasifikasi hanya boleh mengandung karakter huruf, angka, spasi, titik(.) dan koma(,)';[m
[31m-                                    echo '<script language="javascript">window.history.back();</script>';[m
[31m-                                } else {[m
[31m-[m
[31m-                                    if(!preg_match("/^[0-9.-]*$/", $tgl_surat)){[m
[31m-                                        $_SESSION['tgl_suratk'] = 'Form Tanggal Surat hanya boleh mengandung angka dan minus(-)';[m
[31m-                                        echo '<script language="javascript">window.history.back();</script>';[m
[31m-                                    } else {[m
[31m-[m
[31m-                                        if(!preg_match("/^[a-zA-Z0-9.,()\/ -]*$/", $keterangan)){[m
[31m-                                            $_SESSION['keterangank'] = 'Form Keterangan hanya boleh mengandung karakter huruf, angka, spasi, titik(.), koma(,), minus(-), garis miring(/), dan kurung()';[m
[31m-                                            echo '<script language="javascript">window.history.back();</script>';[m
[31m-                                        } else {[m
[31m-[m
[31m-                                            $cek = mysqli_query($config, "SELECT * FROM tbl_surat_keluar WHERE no_surat='$no_surat'");[m
[31m-                                            $result = mysqli_num_rows($cek);[m
[31m-[m
[31m-                                           [m
[31m-[m
[31m-                                                $ekstensi = array('jpg','png','jpeg','doc','docx','pdf');[m
[31m-                                                $file = $_FILES['file']['name'];[m
[31m-                                                $x = explode('.', $file);[m
[31m-                                                $eks = strtolower(end($x));[m
[31m-                                                $ukuran = $_FILES['file']['size'];[m
[31m-                                                $target_dir = "upload/surat_keluar/";[m
[31m-[m
[31m-                                                //jika form file tidak kosong akan mengekse[m
[31m-                                                if($file != ""){[m
[31m-[m
[31m-                                                    $rand = rand(1,10000);[m
[31m-                                                    $nfile = $rand."-".$file;[m
[31m-                                                    if(in_array($eks, $ekstensi) == true){[m
[31m-                                                        if($ukuran < 2500000){[m
[31m-[m
[31m-                                                            move_uploaded_file($_FILES['file']['tmp_name'], $target_dir.$nfile);[m
[31m-[m
[31m-															if($_POST['tujuan']==2){[m
[31m-                                                            $query = mysqli_query($config, "INSERT INTO tbl_surat_keluar(no_agenda,tujuan,no_surat,isi,kode,tgl_surat,tgl_catat,file,keterangan,id_user)[m
[31m-															VALUES('$no_agenda','$tunjukan','$no_surat','$isi','$kode','$tgl_surat',NOW(),'$nfile','$keterangan','$id_user')");[m
[31m-														[m
[31m-															$queryzz = mysqli_query($config, "INSERT INTO tbl_surat_masuk(no_agenda,kode,asal_surat,isi,indeks,tgl_surat,tgl_diterima,file,keterangan,id_user)[m
[31m-															VALUES('$no_agenda','$kode','$id_user','$isi',NULL,'$tgl_surat','$tgl_surat',NOW(),'$nfile','$keterangan','$tunjukan')");[m
[31m-															[m
[31m-															}[m
[31m-															[m
[31m-															else{[m
[31m-															$query = mysqli_query($config, "INSERT INTO tbl_surat_keluar(no_agenda,tujuan,no_surat,isi,kode,tgl_surat,[m
[31m-                                                                tgl_catat,file,keterangan,id_user)[m
[31m-															VALUES('$no_agenda','$ditujukan','$no_surat','$isi','$kode','$tgl_surat',NOW(),'$nfile','$keterangan','$id_user')");[m
[31m-															[m
[31m-															}[m
[31m-[m
[31m-                                                        if($query == true){[m
[31m-													[m
[31m-														 $_SESSION['succAdd'] = 'SUKSES! Data berhasil ditambahkan';[m
[31m-                                                        header("Location: ./admin.php?page=tsk");	[m
[31m-														[m
[31m-                                                        die();[m
[31m-                                                            } else {[m
[31m-                                                                $_SESSION['errQ'] = 'ERROR! Ada masalah dengan query';[m
[31m-                                                                echo '<script language="javascript">window.history.back();</script>';[m
[31m-                                                            }[m
[31m-                                                        } else {[m
[31m-                                                            $_SESSION['errSize'] = 'Ukuran file yang diupload terlalu besar!';[m
[31m-                                                            echo '<script language="javascript">window.history.back();</script>';[m
[31m-                                                        }[m
[31m-                                                    } else {[m
[31m-                                                        $_SESSION['errFormat'] = 'Format file yang diperbolehkan hanya *.JPG, *.PNG, *.DOC, *.DOCX atau *.PDF!';[m
[31m-                                                        echo '<script language="javascript">window.history.back();</script>';[m
[31m-                                                    }[m
[31m-                                                } else {[m
[31m-													[m
[31m-														[m
[31m-													[m
[31m-                                                    if($_POST['tujuan']==2){[m
[31m-														[m
[31m-														[m
[31m-                                                            $query = mysqli_query($config, "INSERT INTO tbl_surat_keluar(no_agenda,tujuan,no_surat,isi,kode,tgl_surat,tgl_catat,file,keterangan,id_user,dari)[m
[31m-														VALUES('$no_agenda','$tunjukan','$no_surat','$isi','$kode','$tgl_surat',NOW(),'','$keterangan','$id_user','".$_SESSION['nama']."')");[m
[31m-	[m
[31m-															$queryzz = mysqli_query($config, "INSERT INTO tbl_surat_masuk(kode,asal_surat,isi,tgl_surat,tgl_diterima,file,keterangan,id_user)[m
[31m-															VALUES('$no_surat','".$_SESSION['nama']."','$isi','$tgl_surat',NOW(),'$file','$keterangan','$tunjukan')");[m
[31m-															}[m
[31m-															else{[m
[31m-															$query = mysqli_query($config, "INSERT INTO tbl_surat_keluar(no_agenda,tujuan,no_surat,isi,kode,tgl_surat,[m
[31m-                                                                tgl_catat,file,keterangan,id_user,dari)[m
[31m-															VALUES('$no_agenda','$ditujukan','$no_surat','$isi','$kode','$tgl_surat',NOW(),'$file','$keterangan','$id_user','".$_SESSION['nama']."')");[m
[31m-															[m
[31m-															}[m
[31m-[m
[31m-[m
[31m-                                                    if($query == true){[m
[31m-												[m
[31m-														 $_SESSION['succAdd'] = 'SUKSES! Data berhasil ditambahkan';[m
[31m-                                                        header("Location: ./admin.php?page=tsk");	[m
[31m-														[m
[31m-                                                        die();[m
[31m-                                                    } else {[m
[31m-                                                        $_SESSION['errQ'] = 'ERROR! Ada masalah dengan query';[m
[31m-                                                        echo '<script language="javascript">window.history.back();</script>';[m
[31m-                                                    }[m
[31m-                                                }[m
[31m-                                            [m
[31m-                                        }[m
[31m-                                    }[m
[31m-                                }[m
[31m-                            }[m
[31m-                        }[m
[31m-                    }[m
[31m-                [m
[31m-            }[m
[31m-        } else {?>[m
[31m-[m
[31m-            <!-- Row Start -->[m
[31m-            <div class="row">[m
[31m-                <!-- Secondary Nav START -->[m
[31m-                <div class="col s12">[m
[31m-                    <nav class="secondary-nav">[m
[31m-                        <div class="nav-wrapper blue-grey darken-1">[m
[31m-                            <ul class="left">[m
[31m-                                <li class="waves-effect waves-light"><a href="?page=tskall&act=add" class="judul"><i class="material-icons">drafts</i> Tambah Data Surat Keluar</a></li>[m
[31m-                            </ul>[m
[31m-                        </div>[m
[31m-                    </nav>[m
[31m-                </div>[m
[31m-                <!-- Secondary Nav END -->[m
[31m-            </div>[m
[31m-            <!-- Row END -->[m
[31m-[m
[31m-            <?php[m
[31m-                if(isset($_SESSION['errQ'])){[m
[31m-                    $errQ = $_SESSION['errQ'];[m
[31m-                    echo '<div id="alert-message" class="row">[m
[31m-                            <div class="col m12">[m
[31m-                                <div class="card red lighten-5">[m
[31m-                                    <div class="card-content notif">[m
[31m-                                        <span class="card-title red-text"><i class="material-icons md-36">clear</i> '.$errQ.'</span>[m
[31m-                                    </div>[m
[31m-                                </div>[m
[31m-                            </div>[m
[31m-                        </div>';[m
[31m-                    unset($_SESSION['errQ']);[m
[31m-                }[m
[31m-                if(isset($_SESSION['errEmpty'])){[m
[31m-                    $errEmpty = $_SESSION['errEmpty'];[m
[31m-                    echo '<div id="alert-message" class="row">[m
[31m-                            <div class="col m12">[m
[31m-                                <div class="card red lighten-5">[m
[31m-                                    <div class="card-content notif">[m
[31m-                                        <span class="card-title red-text"><i class="material-icons md-36">clear</i> '.$errEmpty.'</span>[m
[31m-                                    </div>[m
[31m-                                </div>[m
[31m-                            </div>[m
[31m-                        </div>';[m
[31m-                    unset($_SESSION['errEmpty']);[m
[31m-                }[m
[31m-            ?>[m
[31m-[m
[31m-            <!-- Row form Start -->[m
[31m-            <div class="row jarak-form">[m
[31m-[m
[31m-                <!-- Form START -->[m
[31m-                <form class="col s12" method="POST" enctype="multipart/form-data">[m
[31m-[m
[31m-                    <!-- Row in form START -->[m
[31m-                    <div class="row">[m
[31m-                       	<script>[m
[31m-[m
[31m-								function tampil1() {[m
[31m-									[m
[31m-										document.getElementById("tunjukan").style.visibility = "hidden";[m
[31m-										document.getElementById("ditujukan").style.visibility = "visible";[m
[31m-										document.getElementById("tunjukan").disabled = true;[m
[31m-										document.getElementById("rere").style.color = "green";[m
[31m-										document.getElementById("ditujukan").disabled = false;	[m
[31m-										document.getElementById("roro").style.color = "red";[m
[31m-										[m
[31m-									[m
[31m-										}[m
[31m-								function tampil2() {[m
[31m-									[m
[31m-										document.getElementById("ditujukan").disabled = true;[m
[31m-										document.getElementById("roro").style.color = "green";[m
[31m-										document.getElementById("tunjukan").disabled = false;	[m
[31m-										document.getElementById("rere").style.color = "red";[m
[31m-										document.getElementById("tunjukan").style.visibility = "visible";[m
[31m-										document.getElementById("ditujukan").style.visibility = "hidden";}[m
[31m-							</script>[m
[31m-					<div class="input-field col s6">[m
[31m-                            <i class="material-icons prefix md-prefix">place</i>[m
[31m-                            <input id="kesatu" type="radio" class="validate" name="tujuan" value="1" onclick="tampil1()" required>[m
[31m-                            <label for="kesatu" style="margin-left:25px">Institusi / Perusahaan Luar</label>[m
[31m-							<input id="kedua" type="radio" class="validate" name="tujuan" value="2" onclick="tampil2()">[m
[31m-						    <label for="kedua"style="margin-left:25px">Karyawan Internal</label>[m
[31m-							[m
[31m-[m
[31m-					</div>[m
[31m-						<div id="asd" class="input-field col s6" >[m
[31m-                            <i id="roro" class="material-icons prefix md-prefix" >account_circle</i><label>Ditujukan</label><br/>	[m
[31m-                            <select class="browser-default" name="tunjukan" id="tunjukan">[m
[31m-						<?php	$query = mysqli_query($config,"SELECT * FROM tbl_user");	[m
[31m-							while ($row = mysqli_fetch_array($query)) {											[m
[31m-								echo "<option id='qq' value='".$row['id_user']."'>".$row['nama']."</option>";}[m
[31m-								echo "</select>";[m
[31m-							[m
[31m-								[m
[31m-					?>[m
[31m-					</div>[m
[31m-						<div id="dsa" class="input-field col s6" >[m
[31m-                            <i id="rere" class="material-icons prefix md-prefix">work</i>[m
[31m-                            <input id="ditujukan" type="text" class="" name="ditujukan">[m
[31m-                              [m
[31m-                            <label for="ditujukan">Perusahaan Tujuan</label>[m
[31m-                        </div>[m
[31m-						[m
[31m-                        <div class="input-field col s6">[m
[31m-                            <i class="material-icons prefix md-prefix">looks_two</i>[m
[31m-                            <input id="no_surat" type="text" class="validate" name="no_surat">[m
[31m-                                <?php[m
[31m-                                    if(isset($_SESSION['no_suratk'])){[m
[31m-                                        $no_suratk = $_SESSION['no_suratk'];[m
[31m-                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$no_suratk.'</div>';[m
[31m-                                        unset($_SESSION['no_suratk']);[m
[31m-                                    }[m
[31m-                                    if(isset($_SESSION['errDup'])){[m
[31m-                                        $errDup = $_SESSION['errDup'];[m
[31m-                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$errDup.'</div>';[m
[31m-                                        unset($_SESSION['errDup']);[m
[31m-                                    }[m
[31m-                                ?>[m
[31m-                            <label for="no_surat">Nomor Surat</label>[m
[31m-                        </div>[m
[31m-                        <div class="input-field col s6">[m
[31m-                            <i class="material-icons prefix md-prefix">date_range</i>[m
[31m-                            <input id="tgl_surat" type="text" name="tgl_surat" class="datepicker" required>[m
[31m-                                <?php[m
[31m-                                    if(isset($_SESSION['tgl_suratk'])){[m
[31m-                                        $tgl_suratk = $_SESSION['tgl_suratk'];[m
[31m-                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$tgl_suratk.'</div>';[m
[31m-                                        unset($_SESSION['tgl_suratk']);[m
[31m-                                    }[m
[31m-                                ?>[m
[31m-                            <label for="tgl_surat" style="margin-top:5px">Tanggal Surat</label>[m
[31m-                        </div>[m
[31m-                        <div class="input-field col s6">[m
[31m-                            <i class="material-icons prefix md-prefix">featured_play_list</i>[m
[31m-                            <input id="keterangan" type="text" class="validate" name="keterangan" required>[m
[31m-                                <?php[m
[31m-                                    if(isset($_SESSION['keterangank'])){[m
[31m-                                        $keterangank = $_SESSION['keterangank'];[m
[31m-                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$keterangank.'</div>';[m
[31m-                                        unset($_SESSION['keterangank']);[m
[31m-                                    }[m
[31m-                                ?>[m
[31m-                            <label for="keterangan">Perihal</label>[m
[31m-                        </div>[m
[31m-                        <div class="input-field col s6">[m
[31m-                            <i class="material-icons prefix md-prefix">description</i>[m
[31m-                            <textarea id="isi" class="materialize-textarea validate" name="isi" required></textarea>[m
[31m-                                <?php[m
[31m-                                    if(isset($_SESSION['isik'])){[m
[31m-                                        $isik = $_SESSION['isik'];[m
[31m-                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$isik.'</div>';[m
[31m-                                        unset($_SESSION['isik']);[m
[31m-                                    }[m
[31m-                                ?>[m
[31m-                            <label for="isi">Isi</label>[m
[31m-                        </div>[m
[31m-                        <div class="input-field col s6">[m
[31m-                            <div class="file-field input-field tooltipped" data-position="top" data-tooltip="Jika tidak ada file/scan gambar surat, biarkan kosong">[m
[31m-                                <div class="btn light-green darken-1">[m
[31m-                                    <span>File</span>[m
[31m-                                    <input type="file" id="file" name="file">[m
[31m-                                </div>[m
[31m-                                <div class="file-path-wrapper">[m
[31m-                                    <input class="file-path validate" type="text" placeholder="Upload file/scan gambar surat keluar">[m
[31m-                                        <?php[m
[31m-                                            if(isset($_SESSION['errSize'])){[m
[31m-                                                $errSize = $_SESSION['errSize'];[m
[31m-                                                echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$errSize.'</div>';[m
[31m-                                                unset($_SESSION['errSize']);[m
[31m-                                            }[m
[31m-                                            if(isset($_SESSION['errFormat'])){[m
[31m-                                                $errFormat = $_SESSION['errFormat'];[m
[31m-                                                echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$errFormat.'</div>';[m
[31m-                                                unset($_SESSION['errFormat']);[m
[31m-                                            }[m
[31m-                                        ?>[m
[31m-                                    <small class="red-text">*Format file yang diperbolehkan *.JPG, *.PNG, *.DOC, *.DOCX, *.PDF dan ukuran maksimal file 2 MB!</small>[m
[31m-                                </div>[m
[31m-                            </div>[m
[31m-                        </div>[m
[31m-                    </div>[m
[31m-                    <!-- Row in form END -->[m
[31m-[m
[31m-                    <div class="row">[m
[31m-                        <div class="col 6">[m
[31m-						[m
[31m-                            <button type="submit" name="submit" class="btn-large blue waves-effect waves-light">SIMPAN <i class="material-icons">done</i></button>[m
[31m-                        </div>[m
[31m-                        <div class="col 6">[m
[31m-					[m
[31m-						<a href="?page=tsk" class="btn-large deep-orange waves-effect waves-light">BATAL <i class="material-icons">clear</i></a>[m
[31m-					[m
[31m-							[m
[31m-                        </div>[m
[31m-                    </div>[m
[31m-[m
[31m-                </form>[m
[31m-                <!-- Form END -->[m
[31m-[m
[31m-            </div>[m
[31m-            <!-- Row form END -->[m
[31m-[m
[31m-<?php[m
[31m-        }[m
[31m-    }[m
[31m-?>[m

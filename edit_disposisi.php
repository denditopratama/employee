<?php
    //cek session
    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {


        $id_surat = mysqli_real_escape_string($config,$_REQUEST['id_surat']);
        $id_disposisi = mysqli_real_escape_string($config,$_REQUEST['id_disposisi']);
        $brok=mysqli_query($config,"SELECT tbl_disposisi.nama,tbl_disposisi.dari,tbl_surat_masuk.tujuan,tbl_surat_masuk.id_user FROM tbl_disposisi,tbl_surat_masuk WHERE tbl_disposisi.id_surat=tbl_surat_masuk.id_surat AND (tbl_disposisi.id_disposisi='$id_disposisi' AND tbl_surat_masuk.id_surat='$id_surat') ");
        list($mana,$irad,$tuj,$aid)=mysqli_fetch_array($brok);
        if($mana!=$_SESSION['nama'] && $irad!=$_SESSION['nama'] || $tuj!=$_SESSION['nama'] && $aid!=$_SESSION['id_user']){
            echo '<script language="javascript">
            window.alert("ERROR! Anda tidak memiliki hak akses untuk mengubah data ini");
            window.location.href="./admin.php?page=tsm";
          </script>';
        }

        if(isset($_REQUEST['submit'])){

        
            $query = mysqli_query($config, "SELECT * FROM tbl_surat_masuk WHERE id_surat='$id_surat'");
            list($id_surat) = mysqli_fetch_array($query);
		

            //validasi form kosong
            if($_REQUEST['isi_disposisi'] == "" || $_REQUEST['sifat'] == "" || $_REQUEST['batas_waktu'] == ""
                || $_REQUEST['catatan'] == ""){
                $_SESSION['errEmpty'] = 'ERROR! Semua form wajib diisi';
                echo '<script language="javascript">window.history.back();</script>';
            } else {

               
               // $nama = $_REQUEST['nama'];
                $isi_disposisi = mysqli_real_escape_string($config,$_REQUEST['isi_disposisi']);
                $sifat = mysqli_real_escape_string($config,$_REQUEST['sifat']);
                $batas_waktu = mysqli_real_escape_string($config,$_REQUEST['batas_waktu']);
                $catatan = mysqli_real_escape_string($config,$_REQUEST['catatan']);
                $id_user = $_SESSION['id_user'];
				$idzuser=mysqli_real_escape_string($config,$_POST['idzuser']);

                //validasi input data
                

                    if(!preg_match("/^[a-zA-Z0-9.,_()%&@\/\r\n -]*$/", $isi_disposisi)){
                        $_SESSION['isi_disposisi'] = 'Form Isi Disposisi hanya boleh mengandung karakter huruf, angka, spasi, titik(.), koma(,), minus(-), garis miring(/), dan(&), underscore(_), kurung(), persen(%) dan at(@)';
                        echo '<script language="javascript">window.history.back();</script>';
                    } else {

                        if(!preg_match("/^[0-9 -]*$/", $batas_waktu)){
                            $_SESSION['batas_waktu'] = 'Form Batas Waktu hanya boleh mengandung karakter huruf dan minus(-)';
                            echo '<script language="javascript">window.history.back();</script>';
                        } else {

                            if(!preg_match("/^[a-zA-Z0-9.,()%@\/ -]*$/", $catatan)){
                                $_SESSION['catatan'] = 'Form catatan hanya boleh mengandung karakter huruf, angka, spasi, titik(.), koma(,), minus(-) garis miring(/), dan kurung()';
                                echo '<script language="javascript">window.history.back();</script>';
                            } else {

                                if(!preg_match("/^[a-zA-Z0 ]*$/", $sifat)){
                                    $_SESSION['catatan'] = 'Form SIFAT hanya boleh mengandung karakter huruf dan spasi';
                                    echo '<script language="javascript">window.history.back();</script>';
                                } else {

                                    $query = mysqli_query($config, "UPDATE tbl_disposisi SET nama='$idzuser', isi_disposisi='$isi_disposisi', sifat='$sifat', batas_waktu='$batas_waktu', catatan='$catatan', id_surat='$id_surat', dari='".$_SESSION['nama']."' WHERE id_disposisi='$id_disposisi'");
									
									$queroy= mysqli_query($config, "UPDATE tbl_surat_masuk SET tujuan='$idzuser' WHERE id_surat='$id_surat'");
                                    if($query == true){
                                        $_SESSION['succEdit'] = 'SUKSES! Data berhasil diupdate';
                                        echo '<script language="javascript">
                                                window.location.href="./admin.php?page=tsm&act=disp&id_surat='.$id_surat.'";
                                              </script>';
                                    } else {
                                        $_SESSION['errQ'] = 'ERROR! Ada masalah dengan query';
                                        echo '<script language="javascript">window.history.back();</script>';
                                    }
                                }
                            }
                        }
                    }
                
            }
        } else {

            $id_disposisi = mysqli_real_escape_string($config, $_REQUEST['id_disposisi']);
            $querys = mysqli_query($config, "SELECT * FROM tbl_disposisi WHERE id_disposisi='$id_disposisi'");
            if(mysqli_num_rows($querys) > 0){
                $no = 1;
                while($rows = mysqli_fetch_array($querys)){?>

                <!-- Row Start -->
                <div class="row">
                    <!-- Secondary Nav START -->
                    <div class="col s12">
                        <nav class="secondary-nav">
                            <div class="nav-wrapper blue-grey darken-1">
                                <ul class="left">
                                    <li class="waves-effect waves-light"><a href="#" class="judul"><i class="material-icons">edit</i> Edit Disposisi Surat</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!-- Secondary Nav END -->
                </div>
                <!-- Row END -->

                <?php
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
                ?>

                <!-- Row form Start -->
                <div class="row jarak-form">

                    <!-- Form START -->
                    <form class="col s12" method="post" action="">

                        <!-- Row in form START -->
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix md-prefix">account_box</i><label>Ditujukan</label><br/>
								<div class="input-field col s11 right">
                                  <?php
                                   
									
									 $query = mysqli_query($config,"SELECT * FROM tbl_user WHERE admin<>1 AND(admin<>9 AND id_user<>9999)");
									
									
										echo "<select class='browser-default' name='idzuser' select id='idzuser'>";
										while ($row = mysqli_fetch_array($query)) {
												if($rows['nama']==$row['nama']){
												echo "<option value='" . $row['nama'] . "'selected>" . $row['nama'] . "</option>";}
												else
													{
												echo "<option value='" . $row['nama'] . "'>" . $row['nama'] . "</option>";}
												}
										echo "</select>";
                                    if(isset($_SESSION['eno_surat'])){
                                        $eno_surat = $_SESSION['eno_surat'];
                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$eno_surat.'</div>';
                                        unset($_SESSION['eno_agenda']);
										
                                    }
                                ?>
                                </div>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix md-prefix">alarm</i>
                                <input id="batas_waktu" type="text" name="batas_waktu" class="datepicker" value="<?php echo $rows['batas_waktu']; ?>"required>
                                    <?php
                                        if(isset($_SESSION['batas_waktu'])){
                                            $batas_waktu = $_SESSION['batas_waktu'];
                                            echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$batas_waktu.'</div>';
                                            unset($_SESSION['batas_waktu']);
                                        }
                                    ?>
                                <label for="batas_waktu">Batas Waktu</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix md-prefix">description</i>
                                <textarea id="isi_disposisi" class="materialize-textarea validate" name="isi_disposisi" required><?php echo $rows['isi_disposisi'] ;?></textarea>
                                    <?php
                                        if(isset($_SESSION['isi_disposisi'])){
                                            $isi_disposisi = $_SESSION['isi_disposisi'];
                                            echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$isi_disposisi.'</div>';
                                            unset($_SESSION['isi_disposisi']);
                                        }
                                    ?>
                                <label for="isi_disposisi">Perihal</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix md-prefix">featured_play_list   </i>
                                <input id="catatan" type="text" class="validate" name="catatan" value="<?php echo $rows['catatan'] ;?>" required>
                                    <?php
                                        if(isset($_SESSION['catatan'])){
                                            $catatan = $_SESSION['catatan'];
                                            echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$catatan.'</div>';
                                            unset($_SESSION['catatan']);
                                        }
                                    ?>
                                <label for="catatan">Isi Surat</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix md-prefix">low_priority</i><label>Pilih Sifat Disposisi</label><br/>
                                <div class="input-field col s11 right">
                                    <select class="browser-default validate" name="sifat" id="sifat" required>
                                        <option value="<?php echo $rows['sifat']; ?>"><?php echo $rows['sifat']; ?></option>
                                        <option value="Biasa">Biasa</option>
                                        <option value="Penting">Penting</option>
                                        <option value="Segera">Segera</option>
                                        <option value="Rahasia">Rahasia</option>
                                </select>
                            </div>
                                <?php
                                    if(isset($_SESSION['sifat'])){
                                        $sifat = $_SESSION['sifat'];
                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$sifat.'</div>';
                                        unset($_SESSION['sifat']);
                                    }
                                ?>
                        </div>
                        <!-- Row in form END -->

                        <div class="row">
                            <div class="col 6">
                                <button type="submit" name ="submit" class="btn-large blue waves-effect waves-light">SIMPAN <i class="material-icons">done</i></button>
                            </div>
                            <div class="col 6">
                                <button type="reset" onclick="window.history.back();" class="btn-large deep-orange waves-effect waves-light">BATAL <i class="material-icons">clear</i></button>
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
    }
?>

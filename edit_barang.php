<?php
    //cek session
    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {

        $id_barangs=mysqli_real_escape_string($config,$_GET['id']);
        $id_barang=base64_decode($id_barangs);
        $tm=mysqli_query($config,"SELECT nama_barang,tipe_barang,kode_jenis_barang,no_seri,tanggal_invent,pj,KD_UNIT,foto FROM tbl_inventaris WHERE id_invent='$id_barang' ");
        list($nambar,$tipbar,$kodjes,$noser,$tglinvent,$pjs,$kdunit,$fotis)=mysqli_fetch_array($tm);
			
        if(isset($_POST['submit'])){

          
                $nama_barang = mysqli_real_escape_string($config,$_POST['namabarang']);
                $tipebarang = mysqli_real_escape_string($config,$_POST['tipebarang']);
                $jenis_barang = mysqli_real_escape_string($config,$_POST['jenisbarang']);
                $nomorseri = mysqli_real_escape_string($config,$_POST['nomorseri']);
                $tgl_invent = mysqli_real_escape_string($config,$_POST['tgl_invent']);
                $pic = mysqli_real_escape_string($config,$_POST['pic']);
                $m=mysqli_query($config,"SELECT sub_unit FROM tbl_user WHERE id_user='$pic' ");
                list($sub_unit)=mysqli_fetch_array($m);
               

                                                    $ekstensi = array('jpg','png','jpeg','doc','docx','pdf');
                                                    $file = $_FILES['file']['name'];
                                                    $x = explode('.', $file);
                                                    $eks = strtolower(end($x));
                                                    $ukuran = $_FILES['file']['size'];
                                                    $target_dir = "upload/inventaris/";
												

                                                    //jika form file tidak kosong akan mengeksekusi script dibawah ini
                                                    if($file != ""){

                                                        $rand = rand(1,10000);
                                                        $nfile = $rand."-".$file;

                                                        //validasi file
                                                        if(in_array($eks, $ekstensi) == true){
                                                            if($ukuran < 5500000){

                                                                move_uploaded_file($_FILES['file']['tmp_name'], $target_dir.$nfile);
																

                                                                $query = mysqli_query($config, "INSERT INTO tbl_inventaris(nama_barang,tipe_barang,kode_jenis_barang,no_seri,tanggal_invent,pj,KD_UNIT,foto)
                                                                        VALUES('$nama_barang','$tipebarang','$jenis_barang','$nomorseri','$tgl_invent','$pic','$sub_unit','$nfile')");
																
                                                                if($query == true){
                                                                    $_SESSION['succg'] = 'SUKSES! Data berhasil ditambahkan';
																	header("Location: ./admin.php?page=inve"); 
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
                                                        $query = mysqli_query($config, "INSERT INTO tbl_inventaris(nama_barang,tipe_barang,kode_jenis_barang,no_seri,tanggal_invent,pj,KD_UNIT)
                                                        VALUES('$nama_barang','$tipebarang','$jenis_barang','$nomorseri','$tgl_invent','$pic','$sub_unit')");
															
                                                            if($query == true){
                                                                $_SESSION['succg'] = 'SUKSES! Data berhasil ditambahkan';
                                                                header("Location: ./admin.php?page=inve"); 
                                                                die();
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
                                <li class="waves-effect waves-light"><a href="?page=inve&act=add" class="judul"><i class="material-icons">devices</i> Tambah Barang</a></li>
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
                        <div class="input-field col s12 m6">
						<i class="material-icons prefix md-prefix">assignment</i>
						<input id="namabarang" type="text" value="<?php echo $nambar; ?>" class="validate" name="namabarang" required> 
                         <label for="namabarang">Nama Barang</label>
                            
                        
						</div>

                        <div class="input-field col s12 m6">
						<i class="material-icons prefix md-prefix">devices</i>
						<input id="tipebarang" type="text" class="validate" value="<?php echo $tipbar; ?>" name="tipebarang" required> 
                         <label for="tipebarang">Tipe Barang</label>
                            
                        
						</div>

                        <div class="input-field col s12 m6">
						<i class="material-icons prefix md-prefix">looks_one</i>
						<input id="nomorseri" type="text" class="validate" value="<?php echo $noser; ?>" name="nomorseri" required> 
                         <label for="nomorseri">Nomor Seri</label>
                            
                        
						</div>
                 
                        <div class="input-field col s12 m6">
                            <i class="material-icons prefix md-prefix">date_range</i>
                            <input id="tgl_surat" type="text" name="tgl_invent" value="<?php echo $tglinvent; ?>" class="datepicker" required>
                                <?php
                                    if(isset($_SESSION['tgl_suratk'])){
                                        $tgl_suratk = $_SESSION['tgl_suratk'];
                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$tgl_suratk.'</div>';
                                        unset($_SESSION['tgl_suratk']);
                                    }
                                ?>
                            <label for="tgl_invent" style="margin-top:5px">Tanggal Inventaris</label>
                        </div>

                        <div class="input-field col s12 m6">
						<i class="material-icons prefix md-prefix">dock</i><label  style="margin-top:-8px!important" for="jenisbarang">Jenis Barang</label>
                        <div  style="margin-top:18px!important" class="input-field col s11 right">
						<select class="browser-default" name="jenisbarang" id="jenisbarang">
                        <?php 
                        $usd=mysqli_query($config,"SELECT * FROM tbl_ref_jenis_barangs");
                        while($zs=mysqli_fetch_array($usd)){
                            if($kodjes==$zs['id']){
                                echo '<option value="'.$zs['id'].'" selected>'.$zs['jenis_barang'].'</option>';
                            } else {
                                echo '<option value="'.$zs['id'].'">'.$zs['jenis_barang'].'</option>';
                            }
                            
                        }
                        ?>
                        </select>
                         
                         </div>
                         </div>
						
						<div class="input-field col s12 m6">
						<i class="material-icons prefix md-prefix">people</i><label  style="margin-top:-8px!important" for="namabarang">PIC</label>
                        <div  style="margin-top:18px!important" class="input-field col s11 right">
						<select class="browser-default" name="pic" id="pic">
                        <?php 
                        $us=mysqli_query($config,"SELECT * FROM tbl_user WHERE status_aktif=1 AND(admin<>9 AND id_user<>9999)");
                        while($z=mysqli_fetch_array($us)){
                            echo '<option value="'.$z['id_user'].'">'.$z['nama'].'</option>';
                        }
                        ?>
                        </select>
                         
                         </div>
                         </div>
                      
                    
                        <div class="input-field col s12 m6">
                            <div class="file-field input-field tooltipped" data-position="top" data-tooltip="Upload Foto Barang">
                                <div class="btn light-green darken-1">
                                    <span>File</span>
                                    <input type="file" id="file" name="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Upload Foto Barang">
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
                                    <small class="red-text">*Format file yang diperbolehkan *.JPG, *.PNG, *.JPEG, *.DOC, *.DOCX, *.PDF dan ukuran maksimal file 5 MB</small>
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
                           <a href="?page=inve" class="btn-large deep-orange waves-effect waves-light">BATAL <i class="material-icons">clear</i></a>
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

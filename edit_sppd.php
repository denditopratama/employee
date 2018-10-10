<?php
    //cek session
    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {
		$id=mysqli_real_escape_string($config,$_REQUEST['id']);
		$rqwr=mysqli_query($config,"SELECT id_user FROM tbl_sppd WHERE id='$id'");
		list($id_user)=mysqli_fetch_array($rqwr);
		if($id_user != $_SESSION['id_user'] && $_SESSION['admin']!=1){
                echo '<script language="javascript">
                        window.alert("ERROR! Anda tidak diperbolehkan mengedit SPPD lain");
                        window.location.href="./admin.php?page=sppd";
                      </script>';
            } else {


        if(isset($_REQUEST['submit'])){
		
            //validasi form kosong
           

                
				$id_user = mysqli_real_escape_string($config,$_SESSION['id_user']);
				$karyawan = mysqli_real_escape_string($config,$_REQUEST['karyawan']);
				$tgl_berangkat = mysqli_real_escape_string($config,$_REQUEST['tgl_berangkat']);
				$tgl_pulang = mysqli_real_escape_string($config,$_REQUEST['tgl_pulang']);
				$berangkat = mysqli_real_escape_string($config,$_REQUEST['berangkat']);
				$destinasi = mysqli_real_escape_string($config,$_REQUEST['destinasi']);
				$maksud = mysqli_real_escape_string($config,$_REQUEST['maksud']);
               

                //validasi input data
               


                                                    $ekstensi = array('jpg','png','jpeg','doc','docx','pdf');
                                                    $file = $_FILES['file']['name'];
                                                    $x = explode('.', $file);
                                                    $eks = strtolower(end($x));
                                                    $ukuran = $_FILES['file']['size'];
                                                    $target_dir = "upload/sppd/";
												

                                                    //jika form file tidak kosong akan mengeksekusi script dibawah ini
                                                    if($file != ""){

                                                        $rand = rand(1,10000);
                                                        $nfile = $rand."-".$file;

                                                        //validasi file
                                                        if(in_array($eks, $ekstensi) == true){
                                                            if($ukuran < 250000000){

                                                                move_uploaded_file($_FILES['file']['tmp_name'], $target_dir.$nfile);
																
																if($_SESSION['admin']==1){
                                                                $query = mysqli_query($config, "UPDATE tbl_sppd SET id_user='$karyawan',keberangkatan='$berangkat',destinasi='$destinasi',tanggal_awal='$tgl_berangkat',tanggal_akhir='$tgl_pulang',deskripsi='$maksud',status_sdm=1,file='$nfile' WHERE id='$id'");}
																else{
																$query = mysqli_query($config, "UPDATE tbl_sppd SET id_user='$id_user',keberangkatan='$berangkat',destinasi='$destinasi',tanggal_awal='$tgl_berangkat',tanggal_akhir='$tgl_pulang',deskripsi='$maksud',file='$nfile' WHERE id='$id'");
																}
																
                                                                if($query == true){
                                                                    $_SESSION['succAdd'] = 'SUKSES! Data berhasil ditambahkan';
																	header("Location: ./admin.php?page=sppd"); 
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
                                                        if($_SESSION['admin']==1){
                                                                $query = mysqli_query($config, "UPDATE tbl_sppd SET id_user='$karyawan',keberangkatan='$berangkat',destinasi='$destinasi',tanggal_awal='$tgl_berangkat',tanggal_akhir='$tgl_pulang',deskripsi='$maksud' WHERE id='$id'");}
																else{
																$query = mysqli_query($config, "UPDATE tbl_sppd SET id_user='$id_user',keberangkatan='$berangkat',destinasi='$destinasi',tanggal_awal='$tgl_berangkat',tanggal_akhir='$tgl_pulang',deskripsi='$maksud' WHERE id='$id'");}
																
															
                                                        if($query == true){
                                                            $_SESSION['succAdd'] = 'SUKSES! Data berhasil ditambahkan';
																header("Location: ./admin.php?page=sppd"); 
                                                            die();
                                                        } else {
                                                            $_SESSION['errQ'] = 'ERROR! Ada masalah dengan query';
                                                            echo '<script language="javascript">window.history.back();</script>';
                                                        }
                                                    }
                                                
                                            
                                        
                                    
                                
                            
                        
                    
                
            
        } else {?>
<?php
$id=mysqli_real_escape_string($config,$_REQUEST['id']);
$okok=mysqli_query($config,"SELECT * FROM tbl_sppd WHERE id='$id'");
while($rows=mysqli_fetch_array($okok)){?>
            <!-- Row Start -->
            <div class="row">
                <!-- Secondary Nav START -->
                <div class="col s12">
                    <nav class="secondary-nav">
                        <div class="nav-wrapper blue-grey darken-1">
                            <ul class="left">
                                <li class="waves-effect waves-light"><a href="?page=sppd&act=add" class="judul"><i class="material-icons">airplanemode_active</i> Edit SPPD</a></li>
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
                        <?php if($_SESSION['admin']==1) { ?>
						<div class="row col s6" data-position="top">
						<i class="material-icons prefix md-prefix" style="margin-top:-8px;">group</i>&nbsp&nbsp<a style="color:#000000!important;font-size:1.1rem;">Karyawan</a>
						<select class="browser-default" name="karyawan" id="karyawan" style="background-color:transparent" required>
									<?php
                                	$ijwtq=mysqli_query($config,"SELECT id_user FROM tbl_sppd WHERE id='$id'");
									list($yoman)=mysqli_fetch_array($ijwtq);
									$query = mysqli_query($config,"SELECT * FROM tbl_user WHERE id_user='$yoman'");
									
										while ($row = mysqli_fetch_array($query)) {	
										
										echo "<option value='".$row['id_user'].".".$row['nama']."' selected>".$row['nama']."</option>";}
									
										
										
									$queryzf = mysqli_query($config,"SELECT * FROM tbl_user WHERE id_user<>'$yoman' AND (id_user<>9999 AND id_user<>8)");
									
										while ($row = mysqli_fetch_array($queryzf)) {	
										echo "<option value='".$row['id_user'].".".$row['nama']."'>".$row['nama']."</option>";
										}
                                    echo "</select>";
                                ?>
                            
                        
						</div>
						<?php }?>
                 
                        <div class="row col s6">
						
                            <i class="material-icons prefix md-prefix" style="margin-top:-10px;">help</i>&nbsp&nbsp<a style="color:#000000!important;font-size:1.1rem;">Maksud dan Tujuan</a>
							
                            <input type="text" name="maksud" style="margin-top:9px;" value="<?php echo $rows['deskripsi']; ?>" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                              
                        </div>
						
						<div class="input-field col s6">
                            <i class="material-icons prefix md-prefix">date_range</i>
                            <input id="tgl_surat" type="text" name="tgl_berangkat" class="datepicker" value="<?php echo $rows['tanggal_awal']; ?>" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                               
                            <label for="tgl_berangkat" style="margin-top:5px">Tanggal Berangkat</label>
                        </div>
						
						<div class="input-field col s6">
                            <i class="material-icons prefix md-prefix">date_range</i>
                            <input id="tgl_surat" type="text" name="tgl_pulang" class="datepicker" value="<?php echo $rows['tanggal_akhir']; ?>" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                               
                            <label for="tgl_pulang" style="margin-top:5px">Tanggal Pulang</label>
                        </div>
						
						<div class="input-field col s6" >
                            <i class="material-icons prefix md-prefix">flight_takeoff</i>
                            <input id="ditujukan" class="validate" type="text" class="" name="berangkat" value="<?php echo $rows['keberangkatan']; ?>"> 
                            <label for="berangkat">Keberangkatan</label>
                        </div>
						
						<div class="input-field col s6" >
                            <i class="material-icons prefix md-prefix">flight_land</i>
                            <input id="tunjukan" class="validate" type="text" class="" name="destinasi" value="<?php echo $rows['destinasi']; ?>" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"> 
                            <label for="destinasi">Destinasi</label>
                        </div>
						
						
						
						
                      
                    <?php if($_SESSION['admin']==1){?>
                        <div class="input-field col s6">
                            <div class="file-field input-field tooltipped" data-position="top" data-tooltip="Upload Tiket">
                                <div class="btn light-green darken-1">
                                    <span>File</span>
                                    <input type="file" id="file" name="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Upload Tiket" disabled>
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
					<?php }?>
						
                    </div>
                    <!-- Row in form END -->

                    <div class="row">
                        <div class="col 6">
                            <button type="submit" name="submit" class="btn-large blue waves-effect waves-light">SIMPAN <i class="material-icons">done</i></button>
                        </div>
                        <div class="col 6">
                           <a href="?page=sppd" class="btn-large deep-orange waves-effect waves-light">BATAL <i class="material-icons">clear</i></a>
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

 
<?php
    //cek session
    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {
		
		
		$id = mysqli_real_escape_string($config,$_REQUEST['id']);
        if(isset($_REQUEST['submit'])){

            //validasi form kosong
           

                $tanggal = mysqli_real_escape_string($config,$_REQUEST['tanggal']);
				$divisi = mysqli_real_escape_string($config,$_REQUEST['divisi']);
               

                //validasi input data
               


                                                    $ekstensi = array('jpg','png','jpeg','doc','docx','pdf');
                                                    $file = $_FILES['file']['name'];
                                                    $x = explode('.', $file);
                                                    $eks = strtolower(end($x));
                                                    $ukuran = $_FILES['file']['size'];
                                                    $target_dir = "upload/presensi/";
												

                                                    //jika form file tidak kosong akan mengeksekusi script dibawah ini
                                                    if($file != ""){

                                                        $rand = rand(1,10000);
                                                        $nfile = $rand."-".$file;

                                                        //validasi file
                                                        if(in_array($eks, $ekstensi) == true){
                                                            if($ukuran < 250000000){

                                                                move_uploaded_file($_FILES['file']['tmp_name'], $target_dir.$nfile);
																

                                                                $query = mysqli_query($config, "UPDATE tbl_presensi SET divisi='$divisi',bulan='$tanggal',file='$nfile' WHERE id='$id'");
																
                                                                if($query == true){
                                                                    $_SESSION['succg'] = 'SUKSES! Data berhasil diubah';
																	header("Location: ./admin.php?page=pres"); 
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
                                                        $query = mysqli_query($config, "UPDATE tbl_presensi SET divisi='$divisi',bulan='$tanggal' WHERE id='$id'");
															
                                                        if($query == true){
                                                            $_SESSION['succg'] = 'SUKSES! Data berhasil diubah';
																header("Location: ./admin.php?page=pres"); 
                                                            die();
                                                        } else {
                                                            $_SESSION['errQ'] = 'ERROR! Ada masalah dengan query';
                                                            echo '<script language="javascript">window.history.back();</script>';
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
                                <li class="waves-effect waves-light"><a href="?page=pres&act=add" class="judul"><i class="material-icons">note_add</i> Edit File Presensi</a></li>
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
				<?php $kog=mysqli_query($config,"SELECT divisi,bulan,file FROM tbl_presensi WHERE id='$id'");
				list($divisi,$tanggals,$file)=mysqli_fetch_array($kog); ?>
                <!-- Form START -->
                <form class="col s12" method="POST" enctype="multipart/form-data">

                    <!-- Row in form START -->
                    <div class="row">
                        <div class="row col s6" data-position="top">
						<i class="material-icons prefix md-prefix" style="margin-top:-8px;">group</i>&nbsp&nbsp<a style="color:#000000!important;font-size:1.1rem;">Divisi</a>
						<select class="browser-default" name="divisi" id="divisi" required>
						<?php 	if($divisi==1){
							echo'
									<option value="1" selected>Direktur</option>
                                    <option value="2">SDM dan Umum</option>
									<option value="3">Keuangan</option>
									<option value="4">Teknik</option>
									<option value="5">Pengembangan Bisnis</option>
									<option value="6">Marketing</option>
									<option value="7">TIP</option>
									<option value="8">Koperasi</option>';
						} else if($divisi==2){
							echo'
							
									<option value="1">Direktur</option>
									<option value="2" selected>SDM dan Umum</option>
									<option value="3">Keuangan</option>
									<option value="4">Teknik</option>
									<option value="5">Pengembangan Bisnis</option>
									<option value="6">Marketing</option>
									<option value="7">TIP</option>
									<option value="8">Koperasi</option>';
						} else if($divisi==3){
							echo'
							
									<option value="1">Direktur</option>
                                    <option value="2">SDM dan Umum</option>
									<option value="3" selected>Keuangan</option>
									<option value="4">Teknik</option>
									<option value="5">Pengembangan Bisnis</option>
									<option value="6">Marketing</option>
									<option value="7">TIP</option>
									<option value="8">Koperasi</option>';
						} else if($divisi==4){
							echo'
							
									<option value="1">Direktur</option>
                                    <option value="2">SDM dan Umum</option>
									<option value="3">Keuangan</option>
									<option value="4" selected>Teknik</option>
									<option value="5">Pengembangan Bisnis</option>
									<option value="6">Marketing</option>
									<option value="7">TIP</option>
									<option value="8">Koperasi</option>';
						} else if($divisi==5){
							echo'
							
									<option value="1">Direktur</option>
                                    <option value="2">SDM dan Umum</option>
									<option value="3">Keuangan</option>
									<option value="4">Teknik</option>
									<option value="5" selected>Pengembangan Bisnis</option>
									<option value="6">Marketing</option>
									<option value="7">TIP</option>
									<option value="8">Koperasi</option>';
						} else if($divisi==6){
							echo'
							
									<option value="1">Direktur</option>
                                    <option value="2">SDM dan Umum</option>
									<option value="3">Keuangan</option>
									<option value="4">Teknik</option>
									<option value="5">Pengembangan Bisnis</option>
									<option value="6" selected>Marketing</option>
									<option value="7">TIP</option>
									<option value="8">Koperasi</option>';
						} else if($divisi==7){
							echo'
							
									<option value="1">Direktur</option>
                                    <option value="2">SDM dan Umum</option>
									<option value="3">Keuangan</option>
									<option value="4">Teknik</option>
									<option value="5">Pengembangan Bisnis</option>
									<option value="6">Marketing</option>
									<option value="7" selected>TIP</option>
									<option value="8">Koperasi</option>';
						} else if($divisi==8){
							echo'
							
									<option value="1">Direktur</option>
                                    <option value="2">SDM dan Umum</option>
									<option value="3">Keuangan</option>
									<option value="4">Teknik</option>
									<option value="5">Pengembangan Bisnis</option>
									<option value="6">Marketing</option>
									<option value="7">TIP</option>
									<option value="8" selected>Koperasi</option>';
						} ?>
									
									</select>
                            
                        
						</div>
                 
                        <div class="row col s6">
						
                            <i class="material-icons prefix md-prefix" style="margin-top:-10px;">date_range</i>&nbsp&nbsp<a style="color:#000000!important;font-size:1.1rem;">Tanggal</a>
							
                            <input type="text" id="tgl_surat" name="tanggal" class="datepicker" style="margin-top:9px;" value="<?php echo $tanggals; ?>" required>
                                <?php
                                    if(isset($_SESSION['tgl_surat'])){
                                        $tgl_surat = $_SESSION['tgl_surat'];
                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$tgl_surat.'</div>';
                                        unset($_SESSION['tgl_surat']);
                                    }
                                ?>
                            
                        </div>
						
						
                      
                    
                        <div class="input-field col s6">
                            <div class="file-field input-field tooltipped" data-position="top" data-tooltip="Upload File Presensi">
                                <div class="btn light-green darken-1">
                                    <span>File</span>
                                    <input type="file" id="file" name="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Upload File Presensi" value="<?php echo $file; ?>" disabled> 
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
                           <a href="?page=pres" class="btn-large deep-orange waves-effect waves-light">BATAL <i class="material-icons">clear</i></a>
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
 <script>
    $(document).ready(function() {
      const input = $('#lunchtime');
      // initialize timepicker
      input.pickatime();
      // get picker
      const picker = input.pickatime('picker');
      // set initial value using arrays formatted as [HOUR,MINUTE].
      picker.set('select', [3,0]); // <-- picker.set is not a function
    });
  </script>
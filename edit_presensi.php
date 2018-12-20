<?php
    //cek session
    if(empty($_SESSION['admin'] || $_SESSION['admin']!=1)){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {
        require_once('vendor/php-excel-reader/excel_reader2.php');
        require_once('vendor/SpreadsheetReader.php');	
		
		$id = mysqli_real_escape_string($config,$_REQUEST['id']);
        if(isset($_POST['submit'])){
            $tanggal=mysqli_real_escape_string($config,$_POST['tanggal']);

                    $file = $_FILES['file']['tmp_name'];
    
                    if($file == ""){
                        $_SESSION['errEmpty'] = 'ERROR! Form File tidak boleh kosong';
                        header("Location: ./admin.php?page=pres&act=edit&id=$id");
                        die();
                    } else {
    
                        $x = explode('.', $_FILES['file']['name']);
                        $eks = strtolower(end($x));
    
                        if($eks == 'csv' || $eks == 'xls' || $eks == 'xlsx'){
                            $m=mysqli_query($config,"UPDATE tbl_presensi(bulan) SET bulan='$tanggal' WHERE id='$id");
                            $targetPath = 'upload/presensi/'.$_FILES['file']['name'];
                            move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);

                            $nampang=0;
                            $nampung=1;
                            $Reader = new SpreadsheetReader($targetPath);
        
                            $sheetCount = count($Reader->sheets());
                            
                            for($i=0;$i<$sheetCount;$i++)
                            {
                                $Reader->ChangeSheet($i);
                              

                                foreach ($Reader as $Row)
                                {
                            
                                    $nik = "";
                                    if(isset($Row[0])) {
                                        $nik = mysqli_real_escape_string($config,$Row[0]);
                                    }
                                    
                                    $nama = "";
                                    if(isset($Row[1])) {
                                        $nama = mysqli_real_escape_string($config,$Row[1]);
                                    }

                                    $tanggals = "";
                                    if(isset($Row[2])) {
                                        $tanggals = mysqli_real_escape_string($config,$Row[2]);
                                    }

                                    $jam_masuk = "";
                                    if(isset($Row[3])) {
                                        $jam_masuk = mysqli_real_escape_string($config,$Row[3]);
                                    }

                                    $jam_pulang = "";
                                    if(isset($Row[4])) {
                                        $jam_pulang = mysqli_real_escape_string($config,$Row[4]);
                                    }

                                    $terlambat = "";
                                    if(isset($Row[5])) {
                                        $terlambat = mysqli_real_escape_string($config,$Row[5]);
                                    }
                                    if($nampang < $nampung){

                                    } else {
                                        $kom=mysqli_query($config,"SELECT * FROM tbl_presensi_karyawan WHERE nik='$nik' AND(tanggal='$tanggals' AND id_presensi='$id') ");
                                   if(mysqli_num_rows($kom)<=0){
                                    if($nik!='' || $nama!='' || $tanggals!=''){
                                     $query = mysqli_query($config, "INSERT INTO tbl_presensi_karyawan(id_presensi,nik,nama,tanggal,jam_masuk,jam_pulang,terlambat,keterangan) values('$id','$nik','$nama','$tanggals','$jam_masuk','$jam_pulang','$terlambat','')");  
                                    }              
                                    } else {
                                    $gi=mysqli_query($config,"UPDATE tbl_presensi_karyawan SET nik='$nik',nama='$nama',tanggal='$tanggals',jam_masuk='$jam_masuk',jam_pulang='$jam_pulang',terlambat='$terlambat' WHERE nik='$nik' AND(tanggal='$tanggals' AND id_presensi='$id')");
                                     }
                                       
                                    }
                                       $nampang++; 
                                       
                                 }
                            
                             }
                                 $mogo=mysqli_query($config,"SELECT DISTINCT nik FROM tbl_presensi_karyawan WHERE id_presensi='$id'");
                                     while($datang=mysqli_fetch_array($mogo)){
                                        $yj=mysqli_query($config,"SELECT admin,id_user FROM tbl_user WHERE nip='".$datang['nik']."'");
                                                        list($nyj,$aiduser)=mysqli_fetch_array($yj);
                                                        $kjd=mysqli_query($config,"SELECT * FROM tbl_status_keterangan_presensi WHERE id_presensi='$id' AND id_user='$aiduser'");
                                                        if(mysqli_num_rows($kjd)<=0){
                                                            if($nyj==1 || $nyj==2 || $nyj==3 || $nyj ==4){
                                                                $got=mysqli_query($config,"INSERT INTO tbl_status_keterangan_presensi(id_presensi,id_user,status_manager,status_gm) 
                                                                VALUES('$id','$aiduser','1','1')");
                                                            } else if($nyj==5){
                                                                $got=mysqli_query($config,"INSERT INTO tbl_status_keterangan_presensi(id_presensi,id_user,status_manager,status_gm) 
                                                                VALUES('$id','$aiduser','1','0')");
                                                            } else {
                                                                $got=mysqli_query($config,"INSERT INTO tbl_status_keterangan_presensi(id_presensi,id_user,status_manager,status_gm) 
                                                                VALUES('$id','$aiduser','0','0')");
                                                            }
                                                        } else {
                                                            if($nyj==1 || $nyj==2 || $nyj==3 || $nyj ==4){
                                                                $got=mysqli_query($config,"UPDATE tbl_status_keterangan_presensi SET status_manager='1',status_gm='1' WHERE id_user='$aiduser' AND id_presensi='$id'");
                                                            } else if($nyj==5){
                                                                $got=mysqli_query($config,"UPDATE tbl_status_keterangan_presensi SET status_manager='1',status_gm='0' WHERE id_user='$aiduser' AND id_presensi='$id'");
                                                            } else {
                                                                $got=mysqli_query($config,"UPDATE tbl_status_keterangan_presensi SET status_manager='0',status_gm='0' WHERE id_user='$aiduser' AND id_presensi='$id'");
                                                            }
                                         
                                     }
                                    }
                                    unlink($targetPath);
                                    header("Location: ./admin.php?page=pres");
                                   die();
                                }
                                     

                    //             $handle = fopen($file, "r");
                               
                                
                    //             fgetcsv($handle, 10000, ",");
                    //             while(($data = fgetcsv($handle, 10000, ",")) !== FALSE){
                    //                 $kom=mysqli_query($config,"SELECT * FROM tbl_presensi_karyawan WHERE nik='".$data[0]."' AND(tanggal='".$data[2]."' AND id_presensi='$id') ");
                    //                if(mysqli_num_rows($kom)<=0){
                    //                 $query = mysqli_query($config, "INSERT INTO tbl_presensi_karyawan(id_presensi,nik,nama,tanggal,jam_masuk,jam_pulang,terlambat,keterangan) values('$id','$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','')");
                                   
                    //                } else {
                    //                    $gi=mysqli_query($config,"UPDATE tbl_presensi_karyawan SET nik='".$data[0]."',nama='".$data[1]."',tanggal='".$data[2]."',jam_masuk='".$data[3]."',jam_pulang='".$data[4]."',terlambat='".$data[5]."' WHERE nik='".$data[0]."' AND(tanggal='".$data[2]."' AND id_presensi='$id')");
                                      
                    //                }
                                   
                                    
                    //             }
                                
                    //             $mogo=mysqli_query($config,"SELECT DISTINCT nik FROM tbl_presensi_karyawan WHERE id_presensi='$id'");
                    //             while($datang=mysqli_fetch_array($mogo)){
                    //                 $yj=mysqli_query($config,"SELECT admin,id_user FROM tbl_user WHERE nip='".$datang['nik']."'");
                    //                 list($nyj,$aiduser)=mysqli_fetch_array($yj);
                    //                 $kjd=mysqli_query($config,"SELECT * FROM tbl_status_keterangan_presensi WHERE id_presensi='$id' AND id_user='$aiduser'");
                    //                 if(mysqli_num_rows($kjd)<=0){
                    //                     if($nyj==1 || $nyj==2 || $nyj==3 || $nyj ==4){
                    //                         $got=mysqli_query($config,"INSERT INTO tbl_status_keterangan_presensi(id_presensi,id_user,status_manager,status_gm) 
                    //                         VALUES('$id','$aiduser','1','1')");
                    //                     } else if($nyj==5){
                    //                         $got=mysqli_query($config,"INSERT INTO tbl_status_keterangan_presensi(id_presensi,id_user,status_manager,status_gm) 
                    //                         VALUES('$id','$aiduser','1','0')");
                    //                     } else {
                    //                         $got=mysqli_query($config,"INSERT INTO tbl_status_keterangan_presensi(id_presensi,id_user,status_manager,status_gm) 
                    //                         VALUES('$id','$aiduser','0','0')");
                    //                     }
                    //                 } else {
                    //                     if($nyj==1 || $nyj==2 || $nyj==3 || $nyj ==4){
                    //                         $got=mysqli_query($config,"UPDATE tbl_status_keterangan_presensi SET id_presensi='$id',id_user='$aiduser',status_manager='1',status_gm='1'");
                    //                     } else if($nyj==5){
                    //                         $got=mysqli_query($config,"UPDATE tbl_status_keterangan_presensi SET id_presensi='$id',id_user='$aiduser',status_manager='1',status_gm='0'");
                    //                     } else {
                    //                         $got=mysqli_query($config,"UPDATE tbl_status_keterangan_presensi SET id_presensi='$id',id_user='$aiduser',status_manager='0',status_gm='0'");
                    //                     }
                    //                 }
                                
                           
    
                    //     }
                           
                    //     fclose($handle);
                    //     header("Location: ./admin.php?page=pres");
                    //     die();
                    // } else {
                    //         $_SESSION['errFormat'] = 'ERROR! Format file yang diperbolehkan hanya *.CSV';
                    //         header("Location: ./admin.php?page=pres&act=edit&id=$id");
                    //         die();
                    //     }
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
                                    <input class="file-path validate" type="text" placeholder="Upload File Presensi" disabled> 
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
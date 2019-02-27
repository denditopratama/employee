<?php
    ob_start();
    //cek session
	
    session_start();
	

    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {
		
							
?>

<!doctype html>
<html lang="en">

<!-- Include Head START -->
<!-- E-mployee JMP By Dendito Pratama || denditoprtm@gmail.com -->
<?php include('include/head.php'); 
$anc=mysqli_query($config,"SELECT maintenance FROM tbl_akses_user WHERE id=1");
list($mnt)=mysqli_fetch_array($anc);
if($_SESSION['admin']!=1){
	if($mnt==1){
		$_SESSION['mtt'] = '<center>Mohon Maaf saat ini sistem sedang MAINTENANCE, silahkan coba beberapa saat lagi</center>';
		unset($_SESSION['admin']);
		unset($_SESSION['id_user']);
		unset($_SESSION['id_user']);
		unset($_SESSION['username']);
		unset($_SESSION['nama']);
		unset($_SESSION['nip']);
		unset($_SESSION['admin']);
		unset($_SESSION['role']);
		unset($_SESSION['unit']);
		unset($_SESSION['divisi']);
		unset($_SESSION['sub_unit']); 
		header("Location: ./");
        die();
	}
} ?>
<!-- Include Head END -->

<!-- Body START -->
<body id="vv" class="bg">

<!-- Header START -->
<header>
<style type="text/css">
/* Define what each icon button should look like */
.buttona {
  color: white;
  display: inline-block; /* Inline elements with width and height. TL;DR they make the icon buttons stack from left-to-right instead of top-to-bottom */
  position: relative; /* All 'absolute'ly positioned elements are relative to this one */
  padding: 2px 5px; /* Add some padding so it looks nice */
}

/* Make the badge float in the top right corner of the button */
.buttona__badge {
  background-color: #fa3e3e;
  border-radius: 3px;
  color: white;
  line-height:30px;
 
  padding: 1px 10px;
  font-size: 15px;
  font-weight:bold;
  
  position: absolute; /* Position the badge within the relatively positioned button */
  top: 0;
  right: 0;
  height:36px;
}

</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"/>

<!-- Include Navigation START -->
<?php include('include/menu.php'); ?>
<!-- Include Navigation END -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</header>
<!-- Header END -->

<!-- Main START -->
<main>
<style>
				
				@-webkit-keyframes hvr-icon-buzz {
  50% {
    -webkit-transform: translateX(3px) rotate(2deg);
    transform: translateX(3px) rotate(2deg);
  }

  100% {
    -webkit-transform: translateX(-3px) rotate(-2deg);
    transform: translateX(-3px) rotate(-2deg);
  }
}

@keyframes hvr-icon-buzz {
  50% {
    -webkit-transform: translateX(3px) rotate(2deg);
    transform: translateX(3px) rotate(2deg);
  }

  100% {
    -webkit-transform: translateX(-3px) rotate(-2deg);
    transform: translateX(-3px) rotate(-2deg);
  }
}

.hvr-icon-buzz {
  display: inline;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
  padding-right: 2.2em;
  margin-right:-15px;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
}
.hvr-icon-buzz:before {
  content: "\f0e0";
  position: absolute;
  right: 1em;
  padding: 0 1px;
  font-family: FontAwesome;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
    -webkit-animation-name: hvr-icon-buzz;
  animation-name: hvr-icon-buzz;
  -webkit-animation-duration: 0.15s;
  animation-duration: 0.15s;
  -webkit-animation-timing-function: linear;
  animation-timing-function: linear;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
}

		@-webkit-keyframes hvr-icon-buzz2 {
  50% {
    -webkit-transform: translateX(3px) rotate(2deg);
    transform: translateX(3px) rotate(2deg);
  }

  100% {
    -webkit-transform: translateX(-3px) rotate(-2deg);
    transform: translateX(-3px) rotate(-2deg);
  }
}

@keyframes hvr-icon-buzz2 {
  50% {
    -webkit-transform: translateX(3px) rotate(2deg);
    transform: translateX(3px) rotate(2deg);
  }

  100% {
    -webkit-transform: translateX(-3px) rotate(-2deg);
    transform: translateX(-3px) rotate(-2deg);
  }
}

.hvr-icon-buzz2 {
  display: inline;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
  padding-right: 2.2em;
  margin-right:-15px;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
}
.hvr-icon-buzz2:before {
  content: "\f0f6";
  position: absolute;
  right: 1em;
  padding: 0 1px;
  font-family: FontAwesome;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
    -webkit-animation-name: hvr-icon-buzz;
  animation-name: hvr-icon-buzz;
  -webkit-animation-duration: 0.15s;
  animation-duration: 0.15s;
  -webkit-animation-timing-function: linear;
  animation-timing-function: linear;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
}
.dot {
  height: 5px;
  width: 5px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
}
.hvr-icon-buzz3 {
  display: inline;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
  padding-right: 2.2em;
  margin-right:-15px;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
}
.hvr-icon-buzz3:before {
  content: "\f072";
  position: absolute;
  right: 1em;
  padding: 0 1px;
  font-family: FontAwesome;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
    -webkit-animation-name: hvr-icon-buzz;
  animation-name: hvr-icon-buzz;
  -webkit-animation-duration: 0.15s;
  animation-duration: 0.15s;
  -webkit-animation-timing-function: linear;
  animation-timing-function: linear;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
}

.hvr-icon-buzz4 {
  display: inline;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
  padding-right: 2.2em;
  margin-right:-15px;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
}
.hvr-icon-buzz4:before {
  content: "\f1ea";
  position: absolute;
  right: 1em;
  padding: 0 1px;
  font-family: FontAwesome;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
    -webkit-animation-name: hvr-icon-buzz;
  animation-name: hvr-icon-buzz;
  -webkit-animation-duration: 0.15s;
  animation-duration: 0.15s;
  -webkit-animation-timing-function: linear;
  animation-timing-function: linear;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
}

.hvr-icon-buzz5 {
  display: inline;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
  padding-right: 2.2em;
  margin-right:-15px;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
}
.hvr-icon-buzz5:before {
  content: "\f0e3";
  position: absolute;
  right: 1em;
  padding: 0 1px;
  font-family: FontAwesome;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
    -webkit-animation-name: hvr-icon-buzz;
  animation-name: hvr-icon-buzz;
  -webkit-animation-duration: 0.15s;
  animation-duration: 0.15s;
  -webkit-animation-timing-function: linear;
  animation-timing-function: linear;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
}





				</style>


    <!-- container kuysss -->
    <div class="container" id="conta" style="display:none">
	<script>
	$(document).ready(function(){
		$('#conta').fadeIn(250);
	});
	</script>

    <?php
	
   
			
			
			if(isset($_REQUEST['page'])){
            $page = $_REQUEST['page'];
            switch ($page) {
                case 'tsm':
                    include "transaksi_surat_masuk.php";
                    break;
                case 'ctk':
                    include "cetak_disposisi.php";
                    break;
                case 'tsk':
                    include "transaksi_surat_keluar.php";
                    break;
               
                case 'sett':
                    include "pengaturan.php";
                    break;
                case 'pro':
                    include "profil.php";
                    break;
                case 'gsm':
                    include "galeri_sm.php";
                    break;
                case 'gsk':
                    include "galeri_sk.php";
                    break;
				case 'tsmall':
                    include "transaksi_surat_masuk_all.php";
                    break;
				case 'tskall':
                    include "transaksi_surat_keluar_all.php";
                    break;
				case 'dispoal':
                    include "dispoall.php";
                    break;
				case 'pres':
                    include "presensi.php";
                    break;
				case 'usr':
                    include "user.php";
                    break;
				case 'sppd':
                    include "sppd.php";
                    break;
				case 'cv':
                    include "cetak_cv.php";
                    break;
				case 'cuti':
                    include "cuti.php";
                    break;
				case 'lmbr':
                    include "lembur.php";
                    break;
				case 'spring':
                    include "spring.php";
                    break;
				case 'kpts':
                    include "kpts.php";
                    break;
				case 'report':
                    include "report_karyawan.php";
                    break;
				case 'jenkel':
                    include "report_jenkel.php";
                    break;
				case 'agama':
                    include "report_agama.php";
                    break;
				case 'statkar':
                    include "report_statkar.php";
                    break;	
				case 'keljab':
                    include "report_keljab.php";
                    break;
				case 'usia':
                    include "report_usia.php";
                    break;
				case 'subgem':
                    include "sub_gem.php";
                    break;
				case 'game':
                    include "flappy.php";
                    break;
				case 'gjh':
                    include "gaji.php";
                    break;
				case 'loggjh':
                    include "login_gaji.php";
                    break;
				case 'pros':
                    include "proses_gaji.php";
                    break;
				case 'files':
                    include "file_sharing.php";
                    break;
				case 'files':
                    include "file_sharing.php";
                    break;	
				case 'slip':
                    include "slipgaji.php";
                    break;
				case 'rekap':
                    include "rekapitulasi.php";
                    break;
				case 'reportsppd':
                    include "report_sppd.php";
										break;
				case 'inve':
                    include "inventaris.php";
                    break;
									
				
					
            }
        } else {
    ?>
        <!-- Row START -->
        <div class="row">

            <!-- Include Header Instansi START -->
            <?php include('include/header_instansi.php'); ?>
            <!-- Include Header Instansi END -->

            <!-- Welcome Message START -->
            <div class="col s12">
              
            </div>
            <!-- Welcome Message END -->

            <?php
                //menghitung jumlah surat masuk
				if($_SESSION['admin']==1){$count1 = mysqli_num_rows(mysqli_query($config, "SELECT * FROM tbl_surat_masuk WHERE id_user<>9999 "));}
				else{
                $count1 = mysqli_num_rows(mysqli_query($config, "SELECT * FROM tbl_surat_masuk WHERE tujuan='".$_SESSION['nama']."' OR id_user='".$_SESSION['id_user']."'"));
				}
				
                //menghitung jumlah surat masuk
				if($_SESSION['admin']==1){$count2 = mysqli_num_rows(mysqli_query($config, "SELECT * FROM tbl_surat_keluar WHERE id_user<>9999 "));}
				else{
                $count2 = mysqli_num_rows(mysqli_query($config, "SELECT * FROM tbl_surat_keluar WHERE id_user='".$_SESSION['id_user']."'"));}

				if($_SESSION['admin']==1){
                //menghitung jumlah surat masuk
                $count3 = mysqli_num_rows(mysqli_query($config, "SELECT * FROM tbl_disposisi"));
				}
				else{$count3 = mysqli_num_rows(mysqli_query($config, "SELECT * FROM tbl_disposisi WHERE nama='".$_SESSION['nama']."'"));
				}
               

                //menghitung jumlah pengguna
                $count5 = mysqli_num_rows(mysqli_query($config, "SELECT * FROM tbl_user WHERE id_user <>9999 AND (admin<>1 AND admin<>9 AND status_aktif=1)"));
				if($_SESSION['admin']!=1){
				$count6= mysqli_num_rows(mysqli_query($config, "SELECT * FROM tbl_sppd WHERE id_user = '".$_SESSION['id_user']."'"));}
				else {
				$count6= mysqli_num_rows(mysqli_query($config, "SELECT * FROM tbl_sppd "));	
				}
				$LP=mysqli_query($config,"SELECT cuti FROM tbl_user WHERE id_user='".$_SESSION['id_user']."'");
				list($cutay)=mysqli_fetch_array($LP);
				$count7=$cutay;
				$count8 = mysqli_num_rows(mysqli_query($config, "SELECT * FROM tbl_surat_masuk WHERE id_user='".$_SESSION['id_user']."'"));
	
				$count9 = mysqli_num_rows(mysqli_query($config, "SELECT * FROM tbl_kpts"));
				
				
            ?>

            <!-- Info Statistic START -->
            <div class="col s12 m4">
			
                <div class="card cyan"style="background-color:#39424c!important"<?php if($_SESSION['admin']==1)
				{echo 'onclick="window.location=\'?page=tsmall\'"';} else {echo 'onclick="window.location=\'?page=tsm\'"';} ?>  >
                    <div class="card-content" onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''">
					<div class="button">
                       <span class="card-title white-text"> 
					   
					   
					   
					   <?php 
					   
					   $querbro=mysqli_query($config,"SELECT COUNT(*) as jumlah FROM tbl_surat_masuk WHERE baca=0 AND id_user='".$_SESSION['id_user']."'");   
					   $row=mysqli_fetch_assoc($querbro);
					   if($row['jumlah']==0){
					   echo'<i class="fa fa-envelope" style="font-size:29px;"></i>&nbsp Total Surat Masuk';}
						   else{
					   echo'
					
					 <i class="hvr-icon-buzz" style="font-size:29px"></i> Total Surat Masuk
					 <span class="buttona__badge">'.$row['jumlah'].'</span>
					
					';
					   }
					 
					 ?>
					
					 </span>
						</div>
			
                        <?php echo '<h6 class="white-text link">'.$count1.' Surat Masuk</h6>'; ?>
                    </div>
                </div>
				   
           
            
                <div class="card blue accent-2" style="background-color:#1e558d!important" onclick="window.location='?page=usr'">  <!--!--> 
                    <div class="card-content" onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''">
                        <span class="card-title white-text"><i class="material-icons md-36">people</i> Total Karyawan</span>
                        <?php echo '<h6 class="white-text link">'.$count5.' Karyawan</h6>'; ?>
                    </div>
                </div>
				
				
				   <div class="card blue accent-1"  onclick="window.location='?page=sppd'">  <!--!--> 
                    <div class="card-content" onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''">
                        <span class="card-title white-text">
						<?php 
					   if($_SESSION['admin']!=1){
					   $querbrosd=mysqli_query($config,"SELECT COUNT(*) as nampung FROM tbl_sppd WHERE id_user='".$_SESSION['id_user']."' AND (baca=0 AND status_sdm=1)");}
						else{
					   $querbrosd=mysqli_query($config,"SELECT COUNT(*) as nampung FROM tbl_sppd WHERE status_sdm=0");	
						}
					   $rowsd=mysqli_fetch_array($querbrosd);
					   if($rowsd['nampung']==0){
					   echo'<i class="fa fa-plane" style="font-size:29px"></i> &nbspJumlah SPPD';}
						   else{
					   echo'
					   <i class="hvr-icon-buzz3" style="font-size:29px"></i> &nbspJumlah SPPD
					 <span class="buttona__badge">'.$rowsd['nampung'].'</span>';
					   }
					 ?>
						</span>
                        <?php echo '<h6 class="white-text link">'.$count6.' SPPD</h6>'; ?>
                    </div>
                </div>
        
			
	
			
			
				
				<div class="card grey darken-3" onclick="window.location='?page=kpts'">
                    <div class="card-content" onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''">
					<div class="button">
                       <span class="card-title white-text"> 
					   <?php 
					   
					   $querbrox=mysqli_query($config,"SELECT COUNT(*) as jumlahs FROM tbl_kpts WHERE tgl_berlaku=CURDATE()");   
					   $rowx=mysqli_fetch_array($querbrox);
					   if($rowx['jumlahs']==0){
					   echo'<i class="fa fa-legal" style="font-size:29px;"></i>&nbsp Total Surat KPTS';}
						   else{
					   echo'
					
					 <i class="hvr-icon-buzz5" style="font-size:29px"></i> Total Surat KPTS
					 <span class="buttona__badge">'.$rowx['jumlahs'].'</span>
					
					';
					   }
					 
					 ?>
					
					 </span>
						</div>
			
                        <?php echo '<h6 class="white-text link">'.$count9.' Surat KPTS</h6>'; ?>
                    </div>
                </div>
				
            
        
            </div>
			
		
            <div class="col s12 m4">
                <div class="card lime darken-1" <?php if($_SESSION['admin']==1)
				{echo 'onclick="window.location=\'?page=tskall\'"';} else {echo 'onclick="window.location=\'?page=tsk\'"';} ?> >
                    <div class="card-content" onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''">
                        <span class="card-title white-text"><i class="material-icons md-36">drafts</i> Total Surat Keluar</span>
                        <?php echo '<h6 class="white-text link">'.$count2.' Surat Keluar</h6>'; ?>
                    </div>
                </div>
				
					 <div class="card cyan"<?php if($_SESSION['admin']==1)
				{echo 'onclick="window.location=\'?page=tsmall\'"';} else {echo 'onclick="window.location=\'?page=tsm\'"';} ?>  >
                    <div class="card-content" onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''">
					<div class="button">
                       <span class="card-title white-text">
					   
					   <?php 
					   
					   $querbros=mysqli_query($config,"SELECT COUNT(*) as tampung FROM tbl_disposisi WHERE baca=0 AND nama='".$_SESSION['nama']."'");   
					   $rows=mysqli_fetch_assoc($querbros);
					   if($rows['tampung']==0){
					   echo'<i class="fa fa-file-text-o" style="font-size:29px"></i> &nbspTotal Disposisi';}
						   else{
					   echo'
					   <i class="hvr-icon-buzz2" style="font-size:29px"></i> &nbspTotal Disposisi
					 <span class="buttona__badge">'.$rows['tampung'].'</span>';
					   }
					 ?>
					
					 </span>
						</div>
			
                        <?php echo '<h6 class="white-text link">'.$count3.' Disposisi</h6>'; ?>
                    </div>
                </div>
				
				   <div class="card orange" onclick="window.location='?page=cuti'">  <!--!--> 
                    <div class="card-content" onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''">
                        <span class="card-title white-text"><i class="material-icons md-36">people</i> Jumlah Cuti</span>
                        <?php echo '<h6 class="white-text link">'.$count7.' Sisa Cuti</h6>'; ?>
                    </div>
                </div>
				
				<div class="card purple" <?php if($_SESSION['admin']==1)
				{echo 'onClick="window.location=\'?page=tsm\'"';} else {echo 'onclick="alert(\'Hanya Untuk Admin\')"';}?>>
                    <div class="card-content" onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''">
					<div class="button">
                       <span class="card-title white-text"> 
					   <?php 
					   
					   $querbroz=mysqli_query($config,"SELECT COUNT(*) as jumlah FROM tbl_surat_masuk WHERE baca=0 AND id_user='".$_SESSION['id_user']."'");   
					   $rows=mysqli_fetch_array($querbroz);
					   if($rows['jumlah']==0){
						   
					   echo'<i class="fa fa-newspaper-o" style="font-size:29px;"></i>&nbsp Presensi Masuk';}
						   else{
						if($_SESSION['admin']==1){	   
					   echo'
					
					 <i class="hvr-icon-buzz4" style="font-size:29px"></i> Presensi Masuk
					 <span class="buttona__badge">'.$row['jumlah'].'</span>
					
						';} else {echo'<i class="fa fa-newspaper-o" style="font-size:29px;"></i>&nbsp Presensi Masuk';}
					   }
					 
					 ?>
					
					 </span>
						</div><?php
						if($_SESSION['admin']==1){
						echo '<h6 class="white-text link">'.$count8.' Presensi Surat Masuk</h6>';} 
						else { echo '<h6 class="white-text link">- Presensi Surat Masuk</h6>';}  ?>
                    </div>
                </div>
				
				
            </div>
			
			<style>
    .google-maps {
        position: relative;
        padding-bottom: 75%; // This is the aspect ratio
        height: 0;
        overflow: hidden;
    }
    .google-maps iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important;
    }
</style>
			<div class="col s12 m4">
			<div class="google-maps" style="height:522px">
			 
			
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7498892268536!2d106.82794691476958!3d-6.296562595442874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f206e0bc9595%3A0x7d5c810e413da0ac!2sPT+Jasamarga+Properti!5e0!3m2!1sen!2sid!4v1535818021136"  frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			</div>
			
				<div id="modald">
				<div id="modals" class="modal">
                <div class="modal-content white">
				<div class="input-field col s12">
				</div>
				<h5 style="text-align:center;">Selamat Datang Di Dashboard Karyawan E-mployee JMP v3.4</h5>
				<h6 style="text-align:center;"></h6>
				<h6 style="text-align:center;"></h6>
				<h6 style="text-align:center;"></h6>
							
				<script type="text/javascript" src="asset/js/modal.js"></script>	
						
			<?php 
			$ulangtaun="";
			$hndlu=array();
			$hbds=mysqli_query($config,"SELECT * FROM tbl_identitas");
			while($row=mysqli_fetch_array($hbds)){
				date_default_timezone_set("Asia/Bangkok");
				$bulansekarang=date("m");
				$harisekarang=date("d");
                $bulan = substr($row['tanggal_lahir'],5,2);
                $hari = substr($row['tanggal_lahir'],8,2);
				
				if($row>0){
					if($bulan==$bulansekarang && $hari==$harisekarang){
						$koit=mysqli_query($config,"SELECT nama FROM tbl_user WHERE id_user='".$row['id_user']."'");
						while($kis=mysqli_fetch_array($koit)){
							array_push($hndlu,$kis['nama']);
						}
							
							
							
						}
						}
						} 
					
							for($i=0;$i<count($hndlu);$i++){
								if($hndlu[$i]!=end($hndlu)){
								$ulangtaun=$ulangtaun.$hndlu[$i].' & ';}
								else {
									$ulangtaun=$ulangtaun.$hndlu[$i];	
								}
							}
						
						if($ulangtaun!=""){
						echo'<marquee style="font-style:sans;font-size:20px;text-align:center" scrollamount="12"><h6>Selamat Ulang Tahun <strong>'.$ulangtaun.'</strong> !</h6></marquee>';}
						else {echo'';}
						
						
						
						
						
						
						
						
						echo'
			</div>
			</div>
			</div>';
			
								//script cuti//
									date_default_timezone_set("Asia/Bangkok");
									$rox=mysqli_query($config,"SELECT cuti FROM tbl_handle");
									list($kuti)=mysqli_fetch_array($rox);
									$bakti=mysqli_query($config,"SELECT * FROM tbl_identitas");
									while($datz=mysqli_fetch_array($bakti)){
									$hk=mysqli_query($config,"SELECT status_karyawan FROM tbl_user WHERE id_user='".$datz['id_user']."' AND (admin<>1 AND status_aktif=1) ");
									list($nigga)=mysqli_fetch_array($hk);
							

									$jambakti=date('H');
									$haribakti=date('d',strtotime($datz['tgl_bakti']));
									$harisekarang=date('d');
									
									$bulanbakti=date('m',strtotime($datz['tgl_bakti']));
									$bulansekarang=date('m');
										
									$tahunbakti=date('Y',strtotime($datz['tgl_bakti']));
									$tahunsekarang=date('Y');
									if($nigga==5){
										if($tahunsekarang-$tahunbakti ==1){
											if($bulansekarang-$bulanbakti==0){
												if($harisekarang-$haribakti==0 && $jambakti==01){
											$tambahcuti=mysqli_query($config,"UPDATE tbl_user SET cuti='$kuti' WHERE id_user='".$datz['id_user']."' AND (admin<>1 AND status_aktif=1)");
											
												}
											
											}
										} else if ($tahunsekarang-$tahunbakti>1){
											if($bulansekarang==1 && $harisekarang==1 && $jambakti==14){
												$tambahcuti=mysqli_query($config,"UPDATE tbl_user SET cuti='$kuti' WHERE id_user='".$datz['id_user']."' AND (admin<>1 AND status_aktif=1)");
												
											}
										}
									} else {
										if($bulansekarang==1 && $harisekarang==1 && $jambakti==14){
											$tambahcuti=mysqli_query($config,"UPDATE tbl_user SET cuti='$kuti' WHERE id_user='".$datz['id_user']."' AND (admin<>1 AND status_aktif=1)");
										}
									}
									
									}
									
									
									
									
									
									
												   
			 
               $notifjanji=mysqli_query($config,"SELECT * FROM tbl_kontrak WHERE status<>'habis'");
				while($row=mysqli_fetch_array($notifjanji)){
				 date_default_timezone_set("Asia/Bangkok");
				  //$avx=$hrskrg-$hrjanji;
				 $thnkon=date('Y',strtotime($row['tgl_akhir']));
				 $blnkon=date('m',strtotime($row['tgl_akhir']));
				 $hrkon=date('z',strtotime($row['tgl_akhir']))+1;
				
				 
				 $thnskrg=date('Y');
				 $blnskrg=date('m');
				 $hrskrg = date('z')+1; 
				 
				 if($thnkon-$thnskrg==0){
					 if($blnkon-$blnskrg==1 || $blnkon-$blnskrg==0){
						 if($hrkon-$hrskrg<=30 && $hrkon-$hrskrg>=0){
							$avx=$hrkon-$hrskrg;
							$apdetnotif=mysqli_query($config,"UPDATE tbl_kontrak SET hari='$avx',status='mauhabis' WHERE status<>'habis' AND id='".$row['id']."'");
						 } else if($hrkon-$hrskrg<0){
							$apdetnotif=mysqli_query($config,"UPDATE tbl_kontrak SET status='habis' WHERE status<>'habis' AND id='".$row['id']."'");
						 }
					 } else if($blnkon-$blnskrg<0){
							$apdetnotif=mysqli_query($config,"UPDATE tbl_kontrak SET status='habis' WHERE status<>'habis' AND id='".$row['id']."'");
						 }
				 } else if($thnkon-$thnskrg<0){
							$apdetnotif=mysqli_query($config,"UPDATE tbl_kontrak SET status='habis' WHERE status<>'habis' AND id='".$row['id']."'");
						 } 
						
				
				}
				 
				 
					echo'<script type="text/javascript">
						setTimeout(function(){
					location = ""
					},60*2000)
					</script>';
				
				
			
				$timegame=date('H');
				if($timegame=='08'){
					$tambahgame=mysqli_query($config,"UPDATE tbl_user SET waktugame=3600");
				}
				
				
				
			   
							
		
			?>
		
			
	
	
        <!-- Row END -->
   
    

        </div>
		<style>
		#chart_wrap {
    position: relative;
    padding-bottom: 83%;
    height: 0;
    overflow:hidden;
}
		#piechart{
	position: absolute;
    top: 0;
    left: 0;
    width:100%;
    height:350px;
	display:inline;
	margin:0 auto;
		}
		
		#chart_wraps {
    position: relative;
    padding-bottom: 83%;
    height: 0;
    overflow:hidden;
}
		#piechartsd{
	position: absolute;
    top: 0;
    left: 0;
    width:100%;
    height:350px;
	display:inline;
	margin:0 auto;
		}
		
		</style>
	
	<div class="row">
	<div class="col s12 m4">
	<div class="card yellow">
     <div class="card-content">
	 
	<?php  
		
			$nbmb=mysqli_query($config,"SELECT tbl_user.*,tbl_identitas.jenis_kelamin FROM tbl_user,tbl_identitas WHERE tbl_user.admin<>1 AND(tbl_user.status_aktif=1 AND tbl_user.id_user<>9999 AND tbl_user.admin<>9 AND tbl_identitas.jenis_kelamin='L' AND tbl_user.id_user=tbl_identitas.id_user)");
		$rekapkel=mysqli_num_rows($nbmb);
			
		$nbmbf=mysqli_query($config,"SELECT tbl_user.*,tbl_identitas.jenis_kelamin FROM tbl_user,tbl_identitas WHERE tbl_user.admin<>1 AND(tbl_user.status_aktif=1 AND tbl_user.id_user<>9999 AND tbl_user.admin<>9 AND tbl_identitas.jenis_kelamin='P' AND tbl_user.id_user=tbl_identitas.id_user)");
		$rekapkels=mysqli_num_rows($nbmbf);

		
			
			?> 		
			<div style="text-align:center"><i class="material-icons prefix md-prefix">wc</i><p style="text-align:center;display:inline"><strong> Jumlah Kelamin</strong></p></div>
			<div id="chart_wrap" style="height:270px!important">
			<div id="piechart" style="text-align:center"></div>
			</div>
	</div>
	</div>
	
	<div class="card" style="background-color:#0099bf!important;">
     <div class="card-content">
	 
	<?php  
	
			
			$rekapjenkel1=mysqli_query($config,"SELECT COUNT(status_karyawan) FROM tbl_user WHERE status_karyawan='1' AND(admin<>1 AND admin<>9 AND id_user<>9999 AND status_aktif=1)");
			list($komisarisv)=mysqli_fetch_array($rekapjenkel1);
			$rekapjenkel2=mysqli_query($config,"SELECT COUNT(admin) FROM tbl_user WHERE admin=2 OR admin=3 AND(id_user<>9999 AND status_aktif=1)");
			list($direksiv)=mysqli_fetch_array($rekapjenkel2);
			$rekapjenkel3=mysqli_query($config,"SELECT COUNT(status_karyawan) FROM tbl_user WHERE status_karyawan='3' AND(admin<>1 AND admin<>9 AND id_user<>9999 AND status_aktif=1)");
			list($karyawanbantuv)=mysqli_fetch_array($rekapjenkel3);
			$rekapjenkel4=mysqli_query($config,"SELECT COUNT(status_karyawan) FROM tbl_user WHERE status_karyawan='4' AND(admin<>1 AND admin<>9 AND id_user<>9999 AND status_aktif=1)");
			list($karyawantetapv)=mysqli_fetch_array($rekapjenkel4);
			$rekapjenkel5=mysqli_query($config,"SELECT COUNT(status_karyawan) FROM tbl_user WHERE status_karyawan='5' AND(admin<>1 AND admin<>9 AND id_user<>9999 AND status_aktif=1)");
			list($pkwtv)=mysqli_fetch_array($rekapjenkel5);
			
			?> 		
			<div style="text-align:center"><i class="material-icons prefix md-prefix">people</i><p style="text-align:center;display:inline"><strong> Status Karyawan</strong></p></div>
			<div id="chart_wraps" style="height:270px!important">
			<div id="piechartsd" style="text-align:center"></div>
			</div>
	</div>
	</div>
	
	</div>
	
	
	
	<style>
	td{
		height:-100px!important;
		padding-bottom:1px!important;
	}
	</style>
				<div class="col m8" id="colres">
					<div class="card white">				
                            <table class="bordered" id="tbls">
                                <thead class="blue lighten-4" id="head" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)"><div style="text-align:center;margin-bottom:15px;margin-top:15px;"><i class="material-icons prefix md-prefix">work</i>
								<p style="text-align:center;display:inline"><strong> Rekapitulasi Jabatan</strong></p></div>
                                    <tr>
										<th width="5%" style="color:#fff;text-align:center">Nomor</th>
                                        <th width="30%"style="color:#fff;text-align:center">Nama Jabatan</th>
										<th width="10%"style="color:#fff;text-align:center">Jumlah</th>
                                       
										</tr>
										</thead>
										
									<?php 
									$dir=mysqli_query($config,"SELECT COUNT(admin) FROM tbl_user WHERE admin=2 AND(admin<>1 AND admin<>9 AND id_user<>9999 AND status_aktif=1)");
									list($dirut)=mysqli_fetch_array($dir);
									$disr=mysqli_query($config,"SELECT COUNT(admin) FROM tbl_user WHERE admin=3 AND(admin<>1 AND admin<>9 AND id_user<>9999 AND status_aktif=1)");
									list($dirsi)=mysqli_fetch_array($disr);									
									$kosv=mysqli_query($config,"SELECT COUNT(admin) FROM tbl_user WHERE admin=4 AND(admin<>1 AND admin<>9 AND id_user<>9999 AND status_aktif=1)");
									list($aba)=mysqli_fetch_array($kosv);
									
									$managers=array();
									$mgv=mysqli_query($config,"SELECT id FROM tbl_ref_jabatan WHERE jabatan LIKE '%MANAGER%'"); 
									while($row=mysqli_fetch_array($mgv)){									
									$mg=mysqli_query($config,"SELECT * FROM tbl_user WHERE jabatan='".$row['id']."' AND admin=5 AND(admin<>1 AND admin<>9 AND id_user<>9999 AND status_aktif=1)"); 
									while($rowa=mysqli_fetch_array($mg)){
										array_push($managers,$rowa['id_user']);
									}
									}
									
									$pm=array();
									$mgvd=mysqli_query($config,"SELECT id FROM tbl_ref_jabatan WHERE jabatan LIKE '%PROJECT%'"); 
									while($row=mysqli_fetch_array($mgvd)){									
									$mgd=mysqli_query($config,"SELECT * FROM tbl_user WHERE jabatan='".$row['id']."' AND admin=5 AND(admin<>1 AND admin<>9 AND id_user<>9999 AND status_aktif=1)"); 
									while($rowa=mysqli_fetch_array($mgd)){
										array_push($pm,$rowa['id_user']);
									}
									}
									
									$sm=array();
									$smtown=mysqli_query($config,"SELECT id FROM tbl_ref_jabatan WHERE jabatan LIKE '%SITE%'"); 
									while($row=mysqli_fetch_array($smtown)){									
									$smsm=mysqli_query($config,"SELECT * FROM tbl_user WHERE jabatan='".$row['id']."' AND admin=6 AND(admin<>1 AND admin<>9 AND id_user<>9999 AND status_aktif=1)"); 
									while($rowa=mysqli_fetch_array($smsm)){
										array_push($sm,$rowa['id_user']);
									}
									}
									
									
									$asmand=array();
									$azmen=mysqli_query($config,"SELECT id FROM tbl_ref_jabatan WHERE jabatan NOT LIKE '%SITE%'"); 
									while($row=mysqli_fetch_array($azmen)){									
									$asb=mysqli_query($config,"SELECT * FROM tbl_user WHERE jabatan='".$row['id']."' AND admin=6 AND(admin<>1 AND admin<>9 AND id_user<>9999 AND status_aktif=1)"); 
									while($rowa=mysqli_fetch_array($asb)){
										array_push($asmand,$rowa['id_user']);
									}
									}
									
									$so=array();
																	
									$sokap=mysqli_query($config,"SELECT * FROM tbl_user WHERE admin=7 AND(admin<>1 AND admin<>9 AND id_user<>9999 AND status_aktif=1)"); 
									while($rowa=mysqli_fetch_array($sokap)){
										array_push($so,$rowa['id_user']);
									}
									
									
									$of=array();					
									$sokaps=mysqli_query($config,"SELECT * FROM tbl_user WHERE admin=8 AND(admin<>1 AND admin<>9 AND id_user<>9999 AND status_aktif=1)"); 
									while($rowa=mysqli_fetch_array($sokaps)){
										array_push($of,$rowa['id_user']);
									}
									
									
									
								
									
									$no=1;
									
									if($_SESSION['admin']==1){
										
										$myback=mysqli_query($config,"SELECT statback FROM tbl_handle_backup WHERE id=1");
										list($statback)=mysqli_fetch_array($myback);
										
									
										
										
									if($statback==0){
								
									$nyarwa=date("D");
									if($nyarwa=='Sat'){
										include 'autobackup.php';
										$sudback=mysqli_query($config,"UPDATE tbl_handle_backup SET statback=1 WHERE id=1");
									}} else {
										
										$nyarwa=date("D");
										if($nyarwa!='Sat'){
											$sudback=mysqli_query($config,"UPDATE tbl_handle_backup SET statback=0 WHERE id=1");
										}
										
									}
									
									
									}
									
									?>
										
										<tbody>
										<td style="text-align:center">1</td>
										
										<td style="text-align:center">
										<input type="text" style="text-align:center;border-bottom:none" value="Direktur Utama" disabled>
										</td>
										
										<td style="text-align:center">
										
										<input type="text" style="text-align:center;border-bottom:none" value="<?php echo $dirut; ?>" disabled>
										</td>
										</tbody>
										
										<tbody>
										<td style="text-align:center">2</td>
										
										<td style="text-align:center">
										<input type="text" style="text-align:center;border-bottom:none" value="Direktur" disabled>
										</td>
										
										<td style="text-align:center">
										
										<input type="text" style="text-align:center;border-bottom:none" value="<?php echo $dirsi; ?>" disabled>
										</td>
										</tbody>
										
										<tbody>
										<td style="text-align:center">3</td>
										
										<td style="text-align:center">
										<input type="text" style="text-align:center;border-bottom:none" value="General Manager" disabled>
										</td>
										
										<td style="text-align:center">
										
										<input type="text" style="text-align:center;border-bottom:none" value="<?php echo $aba; ?>" disabled>
										</td>
										</tbody>
										
										<tbody>
										<td style="text-align:center">4</td>
										
										<td style="text-align:center">
										<input type="text" style="text-align:center;border-bottom:none" value="Manager" disabled>
										</td>
										
										<td style="text-align:center">
										
										<input type="text" style="text-align:center;border-bottom:none" value="<?php echo count($managers); ?>" disabled>
										</td>
										</tbody>
										
										<tbody>
										<td style="text-align:center">5</td>
										
										<td style="text-align:center">
										<input type="text" style="text-align:center;border-bottom:none" value="Project Manager" disabled>
										</td>
										
										<td style="text-align:center">
										
										<input type="text" style="text-align:center;border-bottom:none" value="<?php echo count($pm); ?>" disabled>
										</td>
										</tbody>
										
										<tbody>
										<td style="text-align:center">6</td>
										
										<td style="text-align:center">
										<input type="text" style="text-align:center;border-bottom:none" value="Site Manager" disabled>
										</td>
										
										<td style="text-align:center">
										
										<input type="text" style="text-align:center;border-bottom:none" value="<?php echo count($sm); ?>" disabled>
										</td>
										</tbody>
										
										<tbody>
										<td style="text-align:center">7</td>
										
										<td style="text-align:center">
										<input type="text" style="text-align:center;border-bottom:none" value="Assistant Manager" disabled>
										</td>
										
										<td style="text-align:center">
										
										<input type="text" style="text-align:center;border-bottom:none" value="<?php echo count($asmand); ?>" disabled>
										</td>
										</tbody>
										
										<tbody>
										<td style="text-align:center">8</td>
										
										<td style="text-align:center">
										<input type="text" style="text-align:center;border-bottom:none" value="Senior Officer" disabled>
										</td>
										
										<td style="text-align:center">
										
										<input type="text" style="text-align:center;border-bottom:none" value="<?php echo count($so); ?>" disabled>
										</td>
										</tbody
										
										<tbody>
										<td style="text-align:center">9</td>
										
										<td style="text-align:center">
										<input type="text" style="text-align:center;border-bottom:none" value="Officer" disabled>
										</td>
										
										<td style="text-align:center">
										
										<input type="text" style="text-align:center;border-bottom:none" value="<?php echo count($of); ?>" disabled>
										</td>
										</tbody>
										
										
									
									
	</table>
	</div>
	</div>
	
	
	</div>
		
	</div>
		 <?php
        }
    ?>		
		
	
	
	
	
	
	</div>
	
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Gender', 'Number'],
	<?php 
		echo"['Laki - Laki',".$rekapkel."],";
		echo"['Perempuan',".$rekapkels."],";
	
  ?>
 
 
]);

  // Optional; add a title and set the width and height of the chart
  var options = {is3D: true,legend: {position:'top',alignment:'center'}, width:'100%', height:'200px',backgroundColor: 'transparent',colors:['#FFCC00','#1e558d']};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>




<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Gender', 'Number'],
	<?php 
		echo"['Komisaris',".$komisarisv."],";
		echo"['Direksi',".$direksiv."],";
		echo"['Karyawan Perbantuan',".$karyawanbantuv."],";
		echo"['Karyawan Tetap',".$karyawantetapv."],";
		echo"['PKWT',".$pkwtv."],";
	
  ?>
 
 
]);

  // Optional; add a title and set the width and height of the chart
  var options = {is3D: true,legend: {position:'top',alignment:'center'}, width:'100%', height:'200px',backgroundColor: 'transparent',colors:['#FFCC00','#1e558d','#f2f40b','#fd9735','#737373']};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechartsd'));
  chart.draw(data, options);
}


    
       

</script>

	
    <!-- container END -->

</main>
<!-- Main END -->

<!-- Include Footer START -->
<?php include('include/footer.php'); ?>
<!-- Include Footer END -->

	
</body>
<!-- Body END -->

</html>

<?php
    }
?>

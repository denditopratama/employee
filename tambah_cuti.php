<style>
#slideshow { 
   
    position: relative; 
    width: 613px; 
    height: 440px; 
    
    box-shadow: 0 0 20px rgba(0,0,0,0.4); 
}
#gambar{
	width: 613px; 
    height: 440px; 
}

#slideshow > div { 
    position: absolute; 
    
}

@media (min-width: 481px) and (max-width: 767px) {
	#gambar{
	width: 213px; 
    height: 240px; 
}
#slideshow { 
   
    position: relative; 
    width: 213px; 
    height: 240px; 
    
    box-shadow: 0 0 20px rgba(0,0,0,0.4); 
}
}

@media (min-width: 320px) and (max-width: 480px) {
  
 #gambar{
	width: 150px; 
    height: 240px; 
}
#slideshow { 
   
    position: relative; 
    width: 150px; 
    height: 240px; 
    
    box-shadow: 0 0 20px rgba(0,0,0,0.4); 
}
  
}

@media (min-width: 768px) and (max-width: 1024px) {
  
 #gambar{
	width: 320px; 
    height: 240px; 
}
#slideshow { 
   
    position: relative; 
    width: 320px; 
    height: 240px; 
    
    box-shadow: 0 0 20px rgba(0,0,0,0.4); 
}
  
}

@media (min-width: 1025px) and (max-width: 1280px) {
  
 #gambar{
	width: 520px; 
    height: 240px; 
}
#slideshow { 
   
    position: relative; 
    width: 520px; 
    height: 240px; 
    
    box-shadow: 0 0 20px rgba(0,0,0,0.4); 
}
  
}
@media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
  
 #gambar{
	width: 380px; 
    height: 240px; 
}
#slideshow { 
   
    position: relative; 
    width: 380px; 
    height: 240px; 
    
    box-shadow: 0 0 20px rgba(0,0,0,0.4); 
}
  
}
@media (min-width: 768px) and (max-width: 1024px) {
  
 #gambar{
	width: 310px; 
    height: 240px; 
}
#slideshow { 
   
    position: relative; 
    width: 310px; 
    height: 240px; 
    
    box-shadow: 0 0 20px rgba(0,0,0,0.4); 
}
  
}






</style>
<?php
    //cek session
    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {

        if(isset($_REQUEST['submit'])){

            //validasi form kosong
           

                
               	$alasan=mysqli_real_escape_string($config,$_REQUEST['alasan']);
				$tgl_awal=mysqli_real_escape_string($config,$_REQUEST['tgl_awal']);
				$tgl_akhir=mysqli_real_escape_string($config,$_REQUEST['tgl_akhir']);
				
				
				$oik=mysqli_query($config,"SELECT cuti FROM tbl_user WHERE id_user='$id_user'");
				list($cutiya)=mysqli_fetch_array($oik);
				if($cutiya==0)
				{
					$_SESSION['errs']="GAGAL, jatah cuti anda telah habis";
					header("Location: ./admin.php?page=cuti");
				} else{
				$cutiya=$cutiya-1;
				if($_SESSION['admin']==4 || $_SESSION['admin']==1){
				$cutikeun=mysqli_query($config,"INSERT INTO tbl_cuti(id_user,alasan,tgl_awal,tgl_akhir,status_gm,nama,divisi) VALUES ('".$_SESSION['id_user']."','$alasan','$tgl_awal','$tgl_akhir',1,'".$_SESSION['nama']."','".$_SESSION['divisi']."')");	
				} else if($_SESSION['admin']==5 || $_SESSION['admin']==11 || $_SESSION['admin']==1){
				$cutikeun=mysqli_query($config,"INSERT INTO tbl_cuti(id_user,alasan,tgl_awal,tgl_akhir,status_manager,nama,divisi) VALUES ('".$_SESSION['id_user']."','$alasan','$tgl_awal','$tgl_akhir',1,'".$_SESSION['nama']."','".$_SESSION['divisi']."')");	
				} else {
				$cutikeun=mysqli_query($config,"INSERT INTO tbl_cuti(id_user,alasan,tgl_awal,tgl_akhir,nama,divisi) VALUES ('".$_SESSION['id_user']."','$alasan','$tgl_awal','$tgl_akhir','".$_SESSION['nama']."','".$_SESSION['divisi']."')");}
				$kurangcuti=mysqli_query($config,"UPDATE tbl_user SET cuti='$cutiya' WHERE id_user='$id_user'");
				if($cutikeun==true){
					$_SESSION['succAdd']="SUKSES Data Berhasil Di Tambah";
					 header("Location: ./admin.php?page=cuti");
				}}
                //validasi input data
               


                
            
        } else {?>

            <!-- Row Start -->
            <div class="row">
                <!-- Secondary Nav START -->
                <div class="col s12">
                    <nav class="secondary-nav">
                        <div class="nav-wrapper blue-grey darken-1">
                            <ul class="left">
                                <li class="waves-effect waves-light"><a href="?page=pres&act=add" class="judul"><i class="material-icons">beach_access</i> Tambah Cuti</a></li>
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
                <form method="POST" enctype="multipart/form-data">
				<div class="row col s6">
                    <!-- Row in form START -->
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix md-prefix">featured_play_list</i>
							
                            <input id="alasan" type="text" class="validate" name="alasan" required>
                            <label for="alasan">Alasan</label>
                        </div>

						 </div>
					 <div class="row">
						<div class="input-field col s12">
						 <i class="material-icons prefix md-prefix">date_range</i>
                            <input id="tgl_surat" type="text" name="tgl_awal" class="datepicker" required>
                            <label for="tgl_surat">Tanggal Awal</label>
                       </div> 
						</div>
					
					<div class="row">
						<div class="input-field col s12">
						 <i class="material-icons prefix md-prefix">date_range</i>
                            <input id="tgl_surat" type="text" name="tgl_akhir" class="datepicker" required>
                            <label for="tgl_akhir">Tanggal Akhir</label>
                       </div> 
						</div>
						
						<div class="col 12">
                            <button type="submit" name="submit" class="btn-large blue waves-effect waves-light">SIMPAN <i class="material-icons">done</i></button>
                        
                           <a href="?page=cuti" class="btn-large deep-orange waves-effect waves-light">BATAL <i class="material-icons">clear</i></a>
                        </div>
					    </form>
						</div>
						
						<div class="row col s6">
			<div id="slideshow">
   <div>
     <img id="gambar" src="./upload/pantai.jpg">
   </div>
   <div>
     <img id="gambar" src="./upload/puncak.jpg">
   </div>
   <div>
     <img id="gambar" src="./upload/keluarga.jpg">
   </div>
   <div>
     <img id="gambar" src="./upload/bayi.jpg">
   </div>
   <div>
     <img id="gambar" src="./upload/taman.jpg">
   </div>
   
</div>
						
						</div>
<?php
        }
    }
?>
<script>
   $("#slideshow > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
}, 3000);
</script>
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
		$id=mysqli_real_escape_string($config,$_REQUEST['id']);
		$nbmn=mysqli_query($config,"SELECT id_user FROM tbl_cuti WHERE id='$id'");
		list($df)=mysqli_fetch_array($nbmn);
		if($df!=$_SESSION['id_user'] && $_SESSION['admin']!=1){
			                echo '<script language="javascript">
                        window.alert("ERROR! Anda tidak diperbolehkan mengedit akun lain");
                        window.location.href="./admin.php?page=cuti";
                      </script>';
        }

                   $showcutid=mysqli_query($config,"SELECT tgl_awal,tgl_akhir FROM tbl_cuti WHERE id='$id'");
                  list($tgl_awald,$tgl_akhird)=mysqli_fetch_array($showcutid);
                  $perbedaanawal = mysqli_real_escape_string($config,date_diff(date_create($tgl_akhird), date_create($tgl_awald))->d);

				
        
		
        if(isset($_REQUEST['submits'])){

            //validasi form kosong
           

                $id=mysqli_real_escape_string($config,$_REQUEST['id']);
               	$alasan=mysqli_real_escape_string($config,$_POST['alasan']);
				$tgl_awal=mysqli_real_escape_string($config,$_POST['tgl_awal']);
                $tgl_akhir=mysqli_real_escape_string($config,$_POST['tgl_akhir']);
                $perbedaanakhir = mysqli_real_escape_string($config,date_diff(date_create($tgl_akhir), date_create($tgl_awal))->d);
                if($perbedaanakhir != $perbedaanawal){
                    echo '<script>
                    alert(\'Jumlah Hari cuti yang anda ambil tidak sama !\');
                    window.location.href="./admin.php?page=cuti";
                    </script>';
                } else {
                    $cutikeuns=mysqli_query($config,"UPDATE tbl_cuti SET alasan='$alasan',tgl_awal='$tgl_awal',tgl_akhir='$tgl_akhir' WHERE id='$id'");
                
					$_SESSION['succAdd']="SUKSES Data Berhasil di Edit";
                     header("Location: ./admin.php?page=cuti");
                    }
			
                //validasi input data
               


                
            
        } else {?>

            <!-- Row Start -->
            <div class="row">
                <!-- Secondary Nav START -->
                <div class="col s12">
                    <nav class="secondary-nav">
                        <div class="nav-wrapper blue-grey darken-1">
                            <ul class="left">
                                <li class="waves-effect waves-light"><a href="?page=cuti&act=edit&id=<?php echo $id; ?>" class="judul"><i class="material-icons">beach_access</i> Edit Cuti</a></li>
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
			<?php 
				$id=mysqli_real_escape_string($config,$_REQUEST['id']);
				$showcuti=mysqli_query($config,"SELECT alasan,tgl_awal,tgl_akhir,file FROM tbl_cuti WHERE id='$id'");
				  list($alasans,$tgl_awals,$tgl_akhirs,$file)=mysqli_fetch_array($showcuti);?>
                <!-- Form START -->
                <form method="POST" enctype="multipart/form-data">
				<div class="row col s12">
                    <!-- Row in form START -->
					<?php if($file==''){?>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix md-prefix">featured_play_list</i>
							
                            <input id="alasan" type="text" class="validate" name="alasan" value="<?php echo $alasans;?>" required>
                            <label for="alasan">Alasan</label>
							
                        </div>
					<?php } ?>
						 </div>
					 <div class="row">
						<div class="input-field col s12">
						 <i class="material-icons prefix md-prefix">date_range</i>
                            <input id="tgl_surat" type="text" name="tgl_awal" value="<?php echo $tgl_awals;?>" class="datepicker" required>
                            <label for="tgl_awal">Tanggal Awal</label>
                       </div> 
						</div>
					
					<div class="row">
						<div class="input-field col s12">
						 <i class="material-icons prefix md-prefix">date_range</i>
                            <input id="tgl_surat" type="text" name="tgl_akhir" value="<?php echo $tgl_akhirs;?>" class="datepicker" required>
                            <label for="tgl_akhir">Tanggal Akhir</label>
                       </div> 
						</div>
						
						<div class="col 12">
                            <button type="submit" name="submits" class="btn-large blue waves-effect waves-light">SIMPAN <i class="material-icons">done</i></button>
                        
                           <a href="?page=cuti" class="btn-large deep-orange waves-effect waves-light">BATAL <i class="material-icons">clear</i></a>
                        </div>
					    </form>
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
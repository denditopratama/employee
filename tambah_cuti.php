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
           
				date_default_timezone_set("Asia/Bangkok");
                
               	$alasan=mysqli_real_escape_string($config,$_REQUEST['alasan']);
				$tgl_awal=mysqli_real_escape_string($config,$_REQUEST['tgl_awal']);
				$tgl_akhir=mysqli_real_escape_string($config,$_REQUEST['tgl_akhir']);
				
				$perbedaan = mysqli_real_escape_string($config,date_diff(date_create($tgl_akhir), date_create($tgl_awal))->d);
				
				$oik=mysqli_query($config,"SELECT cuti FROM tbl_user WHERE id_user='$id_user'");
				list($cutiya)=mysqli_fetch_array($oik);
				if($cutiya==0)
				{
					$_SESSION['errs']="GAGAL, jatah cuti anda telah habis";
					header("Location: ./admin.php?page=cuti");
				} else{
					if($perbedaan==0){
						$_SESSION['errs']="GAGAL, minimal cuti adalah satu hari, silahkan pilih hari yang berbeda";
					header("Location: ./admin.php?page=cuti");
					} else {
				$cutiyas=$cutiya-$perbedaan;
				if($cutiyas<0)
				{
					$_SESSION['errs']="GAGAL, jatah cuti anda tidak mencukupi";
					header("Location: ./admin.php?page=cuti");
				} else {
				if($_SESSION['admin']==4 || $_SESSION['admin']==1){
				$cutikeun=mysqli_query($config,"INSERT INTO tbl_cuti(id_user,alasan,tgl_awal,tgl_akhir,status_gm,nama,divisi) VALUES ('".$_SESSION['id_user']."','$alasan','$tgl_awal','$tgl_akhir',1,'".$_SESSION['nama']."','".$_SESSION['divisi']."')");	
				} else if($_SESSION['admin']==5 || $_SESSION['admin']==1){
				$cutikeun=mysqli_query($config,"INSERT INTO tbl_cuti(id_user,alasan,tgl_awal,tgl_akhir,status_manager,nama,divisi) VALUES ('".$_SESSION['id_user']."','$alasan','$tgl_awal','$tgl_akhir',1,'".$_SESSION['nama']."','".$_SESSION['divisi']."')");	
				} else {
				$cutikeun=mysqli_query($config,"INSERT INTO tbl_cuti(id_user,alasan,tgl_awal,tgl_akhir,nama,divisi) VALUES ('".$_SESSION['id_user']."','$alasan','$tgl_awal','$tgl_akhir','".$_SESSION['nama']."','".$_SESSION['divisi']."')");}
				$kurangcuti=mysqli_query($config,"UPDATE tbl_user SET cuti='$cutiyas' WHERE id_user='$id_user'");
				if($cutikeun==true){
					$_SESSION['succAdd']="SUKSES Data Berhasil Di Tambah";
					 header("Location: ./admin.php?page=cuti");
				}} }}
                //validasi input data
               


                
            
        } 
		
		if(isset($_POST['cutisakit'])){
													$tgl_awal=mysqli_real_escape_string($config,$_POST['tgl_sakit_awal']);
													$tgl_akhir=mysqli_real_escape_string($config,$_POST['tgl_sakit_akhir']);
													$alasan='Cuti Sakit';
													
													$ekstensi = array('jpg','png','jpeg');
                                                    $file = $_FILES['file']['name'];
                                                    $x = explode('.', $file);
                                                    $eks = strtolower(end($x));
                                                    $ukuran = $_FILES['file']['size'];
                                                    $target_dir = "upload/surat_sakit/";
												
													if($tgl_awal=='' || $tgl_akhir==''){
													$_SESSION['errs'] = 'GAGAL! Tanggal Harus Diisi';
													header("Location: ./admin.php?page=cuti");
													die();														
													}
													
                                                    //jika form file tidak kosong akan mengeksekusi script dibawah ini
                                                    if($file != ""){

                                                        $rand = rand(1,10000);
                                                        $nfile = $rand."-".$file;

                                                        //validasi file
                                                        if(in_array($eks, $ekstensi) == true){
                                                            if($ukuran < 5500000){

                                                                move_uploaded_file($_FILES['file']['tmp_name'], $target_dir.$nfile);
																
				if($_SESSION['admin']==4 || $_SESSION['admin']==1){
				$cutikeun=mysqli_query($config,"INSERT INTO tbl_cuti(id_user,alasan,tgl_awal,tgl_akhir,status_gm,nama,divisi,file) VALUES ('".$_SESSION['id_user']."','$alasan','$tgl_awal','$tgl_akhir',1,'".$_SESSION['nama']."','".$_SESSION['divisi']."','$nfile')");	
				} else if($_SESSION['admin']==5 || $_SESSION['admin']==1){
				$cutikeun=mysqli_query($config,"INSERT INTO tbl_cuti(id_user,alasan,tgl_awal,tgl_akhir,status_manager,nama,divisi,file) VALUES ('".$_SESSION['id_user']."','$alasan','$tgl_awal','$tgl_akhir',1,'".$_SESSION['nama']."','".$_SESSION['divisi']."','$nfile')");	
				} else {
				$cutikeun=mysqli_query($config,"INSERT INTO tbl_cuti(id_user,alasan,tgl_awal,tgl_akhir,nama,divisi,file) VALUES ('".$_SESSION['id_user']."','$alasan','$tgl_awal','$tgl_akhir','".$_SESSION['nama']."','".$_SESSION['divisi']."','$nfile')");}
				
                                                              
																
                                                                if($query == true){
                                                                    $_SESSION['succAdd'] = 'SUKSES! Data berhasil ditambahkan';
																	header("Location: ./admin.php?page=cuti"); 
                                                                    die();
                                                                } else {
                                                                    $_SESSION['errQ'] = 'ERROR! Ada masalah dengan query';
																	header("Location: ./admin.php?page=cuti");
                                                                }
                                                            } else {
                                                                $_SESSION['errSize'] = 'Ukuran file yang diupload terlalu besar!';
                                                                header("Location: ./admin.php?page=cuti&act=add");
                                                            }
                                                        } else {
                                                            $_SESSION['errFormat'] = 'Format file yang diperbolehkan hanya *.JPG, *.PNG, atau *.JPEG!';
                                                            header("Location: ./admin.php?page=cuti&act=add");
                                                        }
                                                    } else {

                                                            $_SESSION['errs'] = 'GAGAL! Anda harus melampirkan surat keterangan dokter';
															header("Location: ./admin.php?page=cuti");
                                                        
                                                    }
		}
		
		if(isset($_POST['cutilahir'])){
			$tgl_melahirkan=mysqli_real_escape_string($config,$_POST['tgl_melahirkan']);
			
			$tgl_awals=mysqli_real_escape_string($config,$_POST['tgl_melahirkan_awal']);
													if($tgl_awals=='' || $tgl_melahirkan==''){
													$_SESSION['errs'] = 'GAGAL! Tanggal Harus Diisi';
													header("Location: ./admin.php?page=cuti");
													die();														
													}
			$tgl_akhirs=date('Y-m-d', strtotime($tgl_awals.'+90 days'));
			
			$alasan='Cuti Bersalin yang diperkirakan oleh Dokter/Bidan akan melahirkan tanggal '.date("d",strtotime($tgl_melahirkan)).'-'.date("M",strtotime($tgl_melahirkan)).'-'.date("Y",strtotime($tgl_melahirkan)).'';
			
			if($_SESSION['admin']==4 || $_SESSION['admin']==1){
				$cutikeun=mysqli_query($config,"INSERT INTO tbl_cuti(id_user,alasan,tgl_awal,tgl_akhir,status_gm,nama,divisi,file) VALUES ('".$_SESSION['id_user']."','$alasan','$tgl_awals','$tgl_akhirs',1,'".$_SESSION['nama']."','".$_SESSION['divisi']."','-')");	
				} else if($_SESSION['admin']==5 || $_SESSION['admin']==1){
				$cutikeun=mysqli_query($config,"INSERT INTO tbl_cuti(id_user,alasan,tgl_awal,tgl_akhir,status_manager,nama,divisi,file) VALUES ('".$_SESSION['id_user']."','$alasan','$tgl_awals','$tgl_akhirs',1,'".$_SESSION['nama']."','".$_SESSION['divisi']."','-')");	
				} else {
				$cutikeun=mysqli_query($config,"INSERT INTO tbl_cuti(id_user,alasan,tgl_awal,tgl_akhir,nama,divisi,file) VALUES ('".$_SESSION['id_user']."','$alasan','$tgl_awals','$tgl_akhirs','".$_SESSION['nama']."','".$_SESSION['divisi']."','-')");}
				if($query == true){
                        $_SESSION['succAdd'] = 'SUKSES! Data berhasil ditambahkan';
						header("Location: ./admin.php?page=cuti"); 
                        die();
                                        }
		}
		
		
		if(isset($_POST['cutigugur'])){
			
													$tgl_awal=mysqli_real_escape_string($config,$_POST['tgl_awal_gugur']);
													$tgl_akhir=mysqli_real_escape_string($config,$_POST['tgl_akhir_gugur']);
													$alasan='Cuti akibat gugur kandungan sebagaimana surat keterangan dokter terlampir';
													
													$ekstensi = array('jpg','png','jpeg');
                                                    $file = $_FILES['filegugur']['name'];
                                                    $x = explode('.', $file);
                                                    $eks = strtolower(end($x));
                                                    $ukuran = $_FILES['filegugur']['size'];
                                                    $target_dir = "upload/surat_sakit/";
												
													if($tgl_awal=='' || $tgl_akhir==''){
													$_SESSION['errs'] = 'GAGAL! Tanggal Harus Diisi';
													header("Location: ./admin.php?page=cuti");
													die();														
													}
													
                                                    //jika form file tidak kosong akan mengeksekusi script dibawah ini
                                                    if($file != ""){

                                                        $rand = rand(1,10000);
                                                        $nfile = $rand."-".$file;

                                                        //validasi file
                                                        if(in_array($eks, $ekstensi) == true){
                                                            if($ukuran < 5500000){

                                                                move_uploaded_file($_FILES['filegugur']['tmp_name'], $target_dir.$nfile);
																
				if($_SESSION['admin']==4 || $_SESSION['admin']==1){
				$cutikeun=mysqli_query($config,"INSERT INTO tbl_cuti(id_user,alasan,tgl_awal,tgl_akhir,status_gm,nama,divisi,file) VALUES ('".$_SESSION['id_user']."','$alasan','$tgl_awal','$tgl_akhir',1,'".$_SESSION['nama']."','".$_SESSION['divisi']."','$nfile')");	
				} else if($_SESSION['admin']==5 || $_SESSION['admin']==1){
				$cutikeun=mysqli_query($config,"INSERT INTO tbl_cuti(id_user,alasan,tgl_awal,tgl_akhir,status_manager,nama,divisi,file) VALUES ('".$_SESSION['id_user']."','$alasan','$tgl_awal','$tgl_akhir',1,'".$_SESSION['nama']."','".$_SESSION['divisi']."','$nfile')");	
				} else {
				$cutikeun=mysqli_query($config,"INSERT INTO tbl_cuti(id_user,alasan,tgl_awal,tgl_akhir,nama,divisi,file) VALUES ('".$_SESSION['id_user']."','$alasan','$tgl_awal','$tgl_akhir','".$_SESSION['nama']."','".$_SESSION['divisi']."','$nfile')");}
				
                                                              
																
                                                                if($query == true){
                                                                    $_SESSION['succAdd'] = 'SUKSES! Data berhasil ditambahkan';
																	header("Location: ./admin.php?page=cuti"); 
                                                                    die();
                                                                } else {
                                                                    $_SESSION['errQ'] = 'ERROR! Ada masalah dengan query';
																	header("Location: ./admin.php?page=cuti");
                                                                }
                                                            } else {
                                                                $_SESSION['errSize'] = 'Ukuran file yang diupload terlalu besar!';
                                                                header("Location: ./admin.php?page=cuti&act=add");
                                                            }
                                                        } else {
                                                            $_SESSION['errFormat'] = 'Format file yang diperbolehkan hanya *.JPG, *.PNG, atau *.JPEG!';
                                                            header("Location: ./admin.php?page=cuti&act=add");
                                                        }
                                                    } else {

                                                            $_SESSION['errs'] = 'GAGAL! Anda harus melampirkan surat keterangan dokter';
															header("Location: ./admin.php?page=cuti");
                                                        
                                                    }
			
		}
		
		if(isset($_POST['cutispesial'])){
			
			
			
			$tgl_awals=mysqli_real_escape_string($config,$_POST['tgl_awal_spesial']);
			
			if($_POST['alasanpenting']==1){
				
				$jatahcuti=3;
				$harinya=$jatahcuti-1;
				$alasan='Akan Melangsungkan Pernikahan';
				$tgl_awalz=date('N',strtotime($tgl_awals));
				if($tgl_awalz+$harinya>5){
					
					if($tgl_awalz==5){
					$mnb=2;
					$mnz=$harinya;
					} else 
					if($tgl_awalz==6){
					$mnb=1;
					$mnz=$jatahcuti;
					} else 
					if($tgl_awalz==7){
					$mnb=0;
					$mnz=$jatahcuti;
					} else {
					$yoman=$tgl_awalz;
					$mnb=7-$yoman;
					$mnz=5-$yoman;}
					
					
					
				$tgl_akhirs=date('Y-m-d', strtotime($tgl_awals.'+'.($mnb+$mnz).' days'));
				} else {$tgl_akhirs=date('Y-m-d', strtotime($tgl_awals.'+'.$harinya.' days'));}
			} else if($_POST['alasanpenting']==2){
				$jatahcuti=2;
				$harinya=$jatahcuti-1;
				$alasan='Mengkhitankan Anak';
				$tgl_awalz=date('N',strtotime($tgl_awals));
				if($tgl_awalz+$harinya>5){
					
					if($tgl_awalz==5){
					$mnb=2;
					$mnz=$harinya;
					} else 
					if($tgl_awalz==6){
					$mnb=1;
					$mnz=$jatahcuti;
					} else 
					if($tgl_awalz==7){
					$mnb=0;
					$mnz=$jatahcuti;
					} else {
					$yoman=$tgl_awalz;
					$mnb=7-$yoman;
					$mnz=5-$yoman;}
					
					
					
				$tgl_akhirs=date('Y-m-d', strtotime($tgl_awals.'+'.($mnb+$mnz).' days'));
				} else {$tgl_akhirs=date('Y-m-d', strtotime($tgl_awals.'+'.$harinya.' days'));}
			}
			else if($_POST['alasanpenting']==3){
				$jatahcuti=2;
				$harinya=$jatahcuti-1;
				$alasan='Membaptis Anak';
				$tgl_awalz=date('N',strtotime($tgl_awals));
				if($tgl_awalz+$harinya>5){
					
					if($tgl_awalz==5){
					$mnb=2;
					$mnz=$harinya;
					} else 
					if($tgl_awalz==6){
					$mnb=1;
					$mnz=$jatahcuti;
					} else 
					if($tgl_awalz==7){
					$mnb=0;
					$mnz=$jatahcuti;
					} else {
					$yoman=$tgl_awalz;
					$mnb=7-$yoman;
					$mnz=5-$yoman;}
					
					
					
				$tgl_akhirs=date('Y-m-d', strtotime($tgl_awals.'+'.($mnb+$mnz).' days'));
				} else {$tgl_akhirs=date('Y-m-d', strtotime($tgl_awals.'+'.$harinya.' days'));}
			}
			else if($_POST['alasanpenting']==4){
				$jatahcuti=2;
				$harinya=$jatahcuti-1;
				$alasan='Menikahkan Anak';
				$tgl_awalz=date('N',strtotime($tgl_awals));
				if($tgl_awalz+$harinya>5){
					
					if($tgl_awalz==5){
					$mnb=2;
					$mnz=$harinya;
					} else 
					if($tgl_awalz==6){
					$mnb=1;
					$mnz=$jatahcuti;
					} else 
					if($tgl_awalz==7){
					$mnb=0;
					$mnz=$jatahcuti;
					} else {
					$yoman=$tgl_awalz;
					$mnb=7-$yoman;
					$mnz=5-$yoman;}
					
					
					
				$tgl_akhirs=date('Y-m-d', strtotime($tgl_awals.'+'.($mnb+$mnz).' days'));
				} else {$tgl_akhirs=date('Y-m-d', strtotime($tgl_awals.'+'.$harinya.' days'));}
			}
			else if($_POST['alasanpenting']==5){
				$jatahcuti=2;
				$harinya=$jatahcuti-1;
				$alasan='Ibu/Bapak, Istri/Suami, anak, kakak/adik, mertua/menantu Menderita sakit keras atau istri gugur kandungan';
				$tgl_awalz=date('N',strtotime($tgl_awals));
				if($tgl_awalz+$harinya>5){
					
					if($tgl_awalz==5){
					$mnb=2;
					$mnz=$harinya;
					} else 
					if($tgl_awalz==6){
					$mnb=1;
					$mnz=$jatahcuti;
					} else 
					if($tgl_awalz==7){
					$mnb=0;
					$mnz=$jatahcuti;
					} else {
					$yoman=$tgl_awalz;
					$mnb=7-$yoman;
					$mnz=5-$yoman;}
					
					
					
				$tgl_akhirs=date('Y-m-d', strtotime($tgl_awals.'+'.($mnb+$mnz).' days'));
				} else {$tgl_akhirs=date('Y-m-d', strtotime($tgl_awals.'+'.$harinya.' days'));}
				
			}
			else if($_POST['alasanpenting']==6){
				$jatahcuti=2;
				$harinya=$jatahcuti-1;
				$alasan='Ibu/Bapak, Istri/Suami, anak, kakak/adik, mertua/menantu Meninggal Dunia';
				$tgl_awalz=date('N',strtotime($tgl_awals));
				if($tgl_awalz+$harinya>5){
					
					if($tgl_awalz==5){
					$mnb=2;
					$mnz=$harinya;
					} else 
					if($tgl_awalz==6){
					$mnb=1;
					$mnz=$jatahcuti;
					} else 
					if($tgl_awalz==7){
					$mnb=0;
					$mnz=$jatahcuti;
					} else {
					$yoman=$tgl_awalz;
					$mnb=7-$yoman;
					$mnz=5-$yoman;}
					
					
					
				$tgl_akhirs=date('Y-m-d', strtotime($tgl_awals.'+'.($mnb+$mnz).' days'));
				} else {$tgl_akhirs=date('Y-m-d', strtotime($tgl_awals.'+'.$harinya.' days'));}
				
			}
			else if($_POST['alasanpenting']==7){
				$jatahcuti=3;
				$harinya=$jatahcuti-1;
				$alasan='Istri Melahirkan';
				$tgl_awalz=date('N',strtotime($tgl_awals));
				if($tgl_awalz+$harinya>5){
					
					if($tgl_awalz==5){
					$mnb=2;
					$mnz=$harinya;
					} else 
					if($tgl_awalz==6){
					$mnb=1;
					$mnz=$jatahcuti;
					} else 
					if($tgl_awalz==7){
					$mnb=0;
					$mnz=$jatahcuti;
					} else {
					$yoman=$tgl_awalz;
					$mnb=7-$yoman;
					$mnz=5-$yoman;}
					
					
					
				$tgl_akhirs=date('Y-m-d', strtotime($tgl_awals.'+'.($mnb+$mnz).' days'));
				} else {$tgl_akhirs=date('Y-m-d', strtotime($tgl_awals.'+'.$harinya.' days'));}
			}
			else if($_POST['alasanpenting']==8){
				$alasan='Menunaikan Ibadah Haji';
				$tgl_akhirs=date('Y-m-d', strtotime($tgl_awals.'+45 days'));
			}
			else if($_POST['alasanpenting']==9){
				$alasan='Istirahat Panjang';
				$tgl_akhirs=date('Y-m-d', strtotime($tgl_awals.'+180 days'));
			}
			
													if($tgl_awals==''){
													$_SESSION['errs'] = 'GAGAL! Tanggal Harus Diisi';
													header("Location: ./admin.php?page=cuti");
													die();														
													}
			
			
			
			if($_SESSION['admin']==4 || $_SESSION['admin']==1){
				$cutikeun=mysqli_query($config,"INSERT INTO tbl_cuti(id_user,alasan,tgl_awal,tgl_akhir,status_gm,nama,divisi,file) VALUES ('".$_SESSION['id_user']."','$alasan','$tgl_awals','$tgl_akhirs',1,'".$_SESSION['nama']."','".$_SESSION['divisi']."','-')");	
				} else if($_SESSION['admin']==5 || $_SESSION['admin']==1){
				$cutikeun=mysqli_query($config,"INSERT INTO tbl_cuti(id_user,alasan,tgl_awal,tgl_akhir,status_manager,nama,divisi,file) VALUES ('".$_SESSION['id_user']."','$alasan','$tgl_awals','$tgl_akhirs',1,'".$_SESSION['nama']."','".$_SESSION['divisi']."','-')");	
				} else {
				$cutikeun=mysqli_query($config,"INSERT INTO tbl_cuti(id_user,alasan,tgl_awal,tgl_akhir,nama,divisi,file) VALUES ('".$_SESSION['id_user']."','$alasan','$tgl_awals','$tgl_akhirs','".$_SESSION['nama']."','".$_SESSION['divisi']."','-')");}
				if($query == true){
                        $_SESSION['succAdd'] = 'SUKSES! Data berhasil ditambahkan';
						header("Location: ./admin.php?page=cuti"); 
                        die();
                                        }
			
		}
		
		
		?>

            <!-- Row Start -->
            <div class="row">
                <!-- Secondary Nav START -->
                <div class="col s12">
                    <nav class="secondary-nav">
                        <div class="nav-wrapper blue-grey darken-1">
                            <ul class="left">
                                <li class="waves-effect waves-light"><a href="?page=cuti&act=add" class="judul"><i class="material-icons">beach_access</i> Tambah Cuti</a></li>
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
                            <button type="submit" id="submit1" name="submit" class="btn-large blue waves-effect waves-light">SIMPAN <i class="material-icons">done</i></button>
                        
                           <a href="?page=cuti" id="batal1" class="btn-large deep-orange waves-effect waves-light">BATAL <i class="material-icons">clear</i></a>
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
				<style>
label {
	color:white;
}	

[type="radio"]:not(:checked) + label:before {
	
	    border: 2px solid #ffffff;
}
datepicker{
	z-index:1;
}
#lahiran{
	height:25px!important;
}	
#uploads {
	background-color:white;
}	
#lahirkon {
	color:white;
}			
</style>

						</div>
						
						<div class="col s12 m12">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title"><i class="material-icons">beach_access</i> Cuti Khusus (Cuti diluar cuti tahunan)</span>
          <p>Untuk Cuti Khusus, silahkan pilih salah satu cuti dibawah ini lalu klik SIMPAN.</p>
        </div>
		<div class="card-action">
    <form method="POST" enctype="multipart/form-data">
 <div>
   <input class="with-gap" name="group1" id="sakit1" type="radio"  />
  <label for="sakit1">Cuti sakit sebagaimana surat dokter terlampir</label>
  </div>
								<div id="suratsakit" class="input-field col s12" style="display:none">
                                <div class="file-field input-field tooltipped" data-position="top" data-tooltip="Upload Surat Sakit">
                                    <div class="btn light-green darken-1">
                                        <span>File</span>
                                        <input type="file" id="file" name="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" id="uploads" type="text" placeholder="Upload Surat Sakit" disabled>
										
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
                                        <small class="white-text">*Format file yang diperbolehkan *.JPG, *.PNG, *.JPEG dan ukuran maksimal file 5 MB</small>
                                    </div>
                                </div>
								<div id="lahirkon" style="margin-top:20px">
  <h6>Tanggal Awal Cuti</h6>
  <input id="lahiran" style="width:150px!important;margin-top:10px" type="date" name="tgl_sakit_awal"><br>
  <h6>Tanggal Akhir Cuti</h6>
  <input id="lahiran" style="width:150px!important;margin-top:10px" type="date" name="tgl_sakit_akhir"><br>
	</div>
								 <button type="submit" id="simpan1" name="cutisakit" class="btn-large blue waves-effect waves-light" style="margin-top:10px">SIMPAN <i class="material-icons">done</i></button>
								 
                            </div>
							
<div>
  <div>
  <input class="with-gap" name="group1" id="sakit2" type="radio"  />
  <label for="sakit2">Cuti Bersalin yang diperkirakan oleh Dokter/Bidan akan melahirkan tanggal 
  <input id="lahiran" style="width:150px!important;margin-top:-10px" type="date" name="tgl_melahirkan"></label>
  </div>
  <div id="simpan2" style="display:none">
  <div id="lahirkon" style="margin-top:20px">
  <h6>Tanggal Awal Cuti</h6>
  <input id="lahirand" style="width:150px!important;margin-top:10px" type="date" name="tgl_melahirkan_awal"><br>
	</div>
  <button type="submit"  name="cutilahir" class="btn-large blue waves-effect waves-light" style="margin-top:10px">SIMPAN <i class="material-icons">done</i></button>
  
  </div>
  </div>
  
  <div>
  <input class="with-gap" name="group1" id="sakit3" type="radio"  />
  <label for="sakit3">Cuti akibat gugur kandungan sebagaimana surat keterangan dokter terlampir</label>
  <div id="suratgugur" class="input-field col s12" style="display:none">
                                <div class="file-field input-field tooltipped" data-position="top" data-tooltip="Upload Surat Keterangan Dokter">
                                    <div class="btn light-green darken-1">
                                        <span>File</span>
                                        <input type="file" id="file" name="filegugur">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" id="uploads" type="text" placeholder="Upload Surat Keterangan Dokter" disabled>
										
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
                                        <small class="white-text">*Format file yang diperbolehkan *.JPG, *.PNG, *.JPEG dan ukuran maksimal file 5 MB</small>
                                    </div>
                                </div>
								 <button type="submit" id="simpan1" name="cutigugur" class="btn-large blue waves-effect waves-light" style="margin-top:10px">SIMPAN <i class="material-icons">done</i></button>
								 <div id="lahirkon" style="margin-top:20px">
							<h6>Tanggal Awal Cuti</h6>
							<input id="lahiran" style="width:150px!important;margin-top:10px" type="date" name="tgl_awal_gugur"><br>
							<h6>Tanggal Akhir Cuti</h6>
							<input id="lahiran" style="width:150px!important;margin-top:10px" type="date" name="tgl_akhir_gugur"><br>
	</div>
                            </div>
  </div>
 
  <div>
 
   <input class="with-gap" name="group1" id="spesial0" type="radio"  />
  <label for="spesial0">Cuti karena alasan penting :</label>
  </div>

       </form> 
        </div>
        
         
        
      </div>
    </div>
	
	
	
								<div id="modald">
								<form method="POST">
								<div id="modals2" class="modal yellow darken">
								<div class="modal-content yellow darken" style="padding-top:1px!important">
								<div class="input-field col s12">
								<h5><i class="material-icons" style="margin-bottom:8px">warning</i> Cuti Alasan Penting</h5>
								<small class="blue-text">* Silahkan pilih salah satu dari opsi, tanggal akhir cuti akan otomatis dihitung.</small><br><br>
								<h5>1. Pilih Alasan Penting</h5>
								<div class="col s12">
								
								<input class="with-gap" name="alasanpenting" id="spesial1" type="radio" value="1" />
							  <label for="spesial1">Akan Melangsungkan Pernikahan (3 hari kerja)</label>
							  
								</div>
								
								
								<div class="col s12">
								
								<input class="with-gap" name="alasanpenting" id="spesial2" type="radio" value="2" />
							  <label for="spesial2">Mengkhitankan anak (2 hari kerja)</label>
							  
								</div>
								<div class="col s12">
								
								<input class="with-gap" name="alasanpenting" id="spesial3" type="radio"  value="3"/>
							  <label for="spesial3">Membaptis Anak (2 hari kerja)</label>
							  
								</div>
								
								<div class="col s12">
								
								<input class="with-gap" name="alasanpenting" id="spesial4" type="radio" value="4" />
							  <label for="spesial4">Menikahkan anak (2 hari kerja)</label>
							  
								</div>
								
								<div class="col s12">
								
								<input class="with-gap" name="alasanpenting" id="spesial5" type="radio"  value="5"/>
							  <label for="spesial5">Ibu/Bapak, Istri/Suami, anak, kakak/adik, mertua/menantu Menderita sakit keras atau istri gugur kandungan (2 hari kerja)</label>
							 
								</div>
								
								<div class="col s12">
								
								<input class="with-gap" name="alasanpenting" id="spesial6" type="radio"  value="6"/>
							  <label for="spesial6">Ibu/Bapak, Istri/Suami, anak, kakak/adik, mertua/menantu Meninggal Dunia (2 hari kerja)</label>
							 
								</div>
								
								<div class="col s12">
								
								<input class="with-gap" name="alasanpenting" id="spesial7" type="radio"  value="7"/>
							  <label for="spesial7">Istri Melahirkan (3 hari kerja)</label>
							 
								</div>
								
								<div class="col s12">
								
								<input class="with-gap" name="alasanpenting" id="spesial8" type="radio"  value="8"/>
							  <label for="spesial8">Menunaikan Ibadah Haji (45 Hari Kalender)</label>
							 
								</div>
								
								<div class="col s12">
								
								<input class="with-gap" name="alasanpenting" id="spesial9" type="radio"  value="9"/>
							  <label for="spesial9">Istirahat panjang selama 6 (enam) bulan 
							  
							 
								</div>
								
								
								<div class="col s12" style="margin-top:50px!important">
								<h5>2. Pilih Tanggal Awal Cuti</h5>
								<input id="lahiranb" type="date" name="tgl_awal_spesial"></label>
								</div>
								
								<div class="col s12" style="margin-top:50px">
								<button type="submit" id="simpan1" name="cutispesial" class="btn-large blue waves-effect waves-light">SIMPAN <i class="material-icons">done</i></button>
								</div>
								</div>
								</div>
								</div>
								</form>
								</div>
	
	
	
	
<?php
        
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
$('#spesial0').click(function(){
	$("#modals2").openModal()
	});

$(document).ready(function() {	
$('input[name=group1]').click(function () {
	if (this.id == "sakit1") {
        $("#suratsakit").show('slow');
    } else {
        $("#suratsakit").hide('slow');
    }
	
	if (this.id == "sakit2") {
        $("#simpan2").show('slow');
    } else {
        $("#simpan2").hide('slow');
    }
	
	if (this.id == "sakit3") {
        $("#suratgugur").show('slow');
    } else {
        $("#suratgugur").hide('slow');
    }
	
	
		});
		});

</script>
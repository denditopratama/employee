<style>
h11 {
	font-size:12px!important;
}
</style>
<?php
    //cek session
    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {
		if(isset($_REQUEST['sub'])){
			$sub=$_REQUEST['sub'];
			switch($sub){
				case 'del';
				include 'hapus_file_sharing.php';
				break;
			}
		}
		
				echo'<div class="row">
                    <!-- Secondary Nav START -->
                    <div class="col s12">
					
                        <div class="z-depth-1">
                            <nav class="secondary-nav">
                                <div class="nav-wrapper blue-grey darken-1" style="background-color:#39424c!important">
                                    <div class="col m7" style="background-color:#39424c">
                                        <ul class="left">
                                            <li class="waves-effect waves-light"><a href="?page=files" class="judul"><i class="material-icons">cloud</i> File</a></li>
                                            <li class="waves-effect waves-light">
											
											
                                            </li>
                                        </ul>
                                    </div>
                                    
                                </div>
                            </nav>
                        </div>
                    </div>
                    <!-- Secondary Nav END -->
                </div>';
			
                    
				
				echo' <div class="row"> ';
				include "tambah_file_sharing.php";
				echo'
								
                                        <form method="post" action="?page=files">
                                            <div class="input-field col m6" style="margin-top:30px">
                                                <input id="searchs" type="search" name="cari" placeholder="Ketik dan tekan enter mencari data..." style="background-color:transparent" required>
                                                <label for="searchs"><i class="material-icons">search</i></label>
                                                <input type="submit" name="submita" class="hidden">
                                            </div>
                                        </form>
										</div>
										<div class="row">
										
										<ul id="example">
										
                                    ';
									
									if(isset($_REQUEST['submita'])){
	   $cari=mysqli_real_escape_string($config,$_REQUEST['cari']);	
	   $divisi=mysqli_real_escape_string($config,$_SESSION['divisi']);
	   if($_SESSION['admin']!=1){
	   $query = mysqli_query($config, "SELECT * FROM tbl_file_sharing WHERE divisi='$divisi' AND file LIKE '%$cari%'");}
	   else {
	   $query = mysqli_query($config, "SELECT * FROM tbl_file_sharing WHERE file LIKE '%$cari%'");
	   }
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_array($query)){
                

                            $ekstensi = array('jpg','png','jpeg','gif');
                            $ekstensi2 = array('doc','docx');
							$ekstensi3 = array('zip','rar','7zip');
							$ekstensi4 = array('pdf');
							$ekstensi5 = array('xls','xlsx');
							$ekstensi6 = array('pptx','ppt');
                            $file = $row['file'];
                            $x = explode('.', $file);
                            $eks = strtolower(end($x));

                            

                                if(in_array($eks, $ekstensi2) == true){
                                    echo '
									
											<li>
                                            <div class="col m2">
											
                                                <div class="col m3" style="text-align:center;width:100%;">
                                                    <div class="card col m12">
                                                        <div class="card-content">
														<img class="file" src="./asset/img/word.png"><br>
                                                            <strong>file :</strong> <a style="font-size:13px" class="blue-text" href="./upload/file_sharing/'.$row['file'].'" target="_blank">'.$row['file'].'</a>
															<a style="width:100%;color:white!important" class="btn small orange waves-effect waves-light" href="?page=files&sub=del&id='.$row['id'].'">Hapus</a>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
											</li>';
                                } else if(in_array($eks, $ekstensi4) == true){
                                    echo '
									
											<li>
                                            <div class="col m2">
											
                                                <div class="col m3" style="text-align:center;width:100%">
                                                    <div class="card col m12">
                                                        <div class="card-content">
														<img class="file" src="./asset/img/pdf.png"><br>
                                                            <strong>file :</strong> <a style="font-size:13px" class="blue-text" href="./upload/file_sharing/'.$row['file'].'" target="_blank">'.$row['file'].'</a>
															<a style="width:100%;color:white!important" class="btn small orange waves-effect waves-light" href="?page=files&sub=del&id='.$row['id'].'">Hapus</a>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
											</li>';
                                } 
								else if(in_array($eks, $ekstensi3) == true){
                                    echo '
									
											<li>
                                            <div class="col m2">
											
                                                <div class="col m3" style="text-align:center;width:100%">
                                                    <div class="card col m12">
                                                        <div class="card-content">
														<img style="width:100%!important;margin-bottom:40px" class="file" src="./asset/img/rar.png"><br>
                                                            <strong>file :</strong> <a style="font-size:13px" class="blue-text" href="./upload/file_sharing/'.$row['file'].'" target="_blank">'.$row['file'].'</a>
															<a style="width:100%;color:white!important" class="btn small orange waves-effect waves-light" href="?page=files&sub=del&id='.$row['id'].'">Hapus</a>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
											</li>';
                                } 
								else if(in_array($eks, $ekstensi) == true){
                                    echo '
									
											<li>
                                            <div class="col m2">
											
                                                <div class="col m3" style="text-align:center;width:100%">
                                                    <div class="card col m12">
                                                        <div class="card-content">
														<img style="width:100%!important;margin-bottom:40px" class="file" src="./asset/img/jpg.png"><br>
														
                                                            <strong>file :</strong> <a style="font-size:80%;text-align:left;" class="blue-text" href="./upload/file_sharing/'.$row['file'].'" target="_blank">'.$row['file'].'</a>
															
															<a style="width:100%;color:white!important" class="btn small orange waves-effect waves-light" href="?page=files&sub=del&id='.$row['id'].'">Hapus</a>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
											</li>';
                                } else if(in_array($eks, $ekstensi5) == true){
                                    echo '
									
											<li>
                                            <div class="col m2">
											
                                                <div class="col m3" style="text-align:center;width:100%">
                                                    <div class="card col m12">
                                                        <div class="card-content">
														<img style="width:100%!important" class="file" src="./asset/img/excel.png"><br>
														
                                                            <strong>file :</strong> <a style="font-size:80%;text-align:left;" class="blue-text" href="./upload/file_sharing/'.$row['file'].'" target="_blank">'.$row['file'].'</a>
															
															<a style="width:100%;color:white!important" class="btn small orange waves-effect waves-light" href="?page=files&sub=del&id='.$row['id'].'">Hapus</a>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
											</li>';
                                }else if(in_array($eks, $ekstensi6) == true){
                                    echo '
									
											<li>
                                            <div class="col m2">
											
                                                <div class="col m3" style="text-align:center;width:100%">
                                                    <div class="card col m12">
                                                        <div class="card-content">
														<img style="width:100%!important" class="file" src="./asset/img/ppt.png"><br>
														
                                                            <strong>file :</strong> <a style="font-size:80%;text-align:left;" class="blue-text" href="./upload/file_sharing/'.$row['file'].'" target="_blank">'.$row['file'].'</a>
															
															<a style="width:100%;color:white!important" class="btn small orange waves-effect waves-light" href="?page=files&sub=del&id='.$row['id'].'">Hapus</a>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
											</li>';
                                } else {
									echo '
									
											<li>
                                            <div class="col m2">
											
                                                <div class="col m3" style="text-align:center;width:100%">
                                                    <div class="card col m12">
                                                        <div class="card-content">
														<img style="width:100%!important;margin-bottom:40px" class="file" src="./asset/img/file.png"><br>
														
                                                            <strong>file :</strong> <a style="font-size:80%;text-align:left;" class="blue-text" href="./upload/file_sharing/'.$row['file'].'" target="_blank">'.$row['file'].'</a>
															
															<a style="width:100%;color:white!important" class="btn small orange waves-effect waves-light" href="?page=files&sub=del&id='.$row['id'].'">Hapus</a>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
											</li>';
                                }
                            
                     
            }
        } else {
			echo'
			<div class="row">
			 <div class="col s12" style="margin-top:100px">
             <h5 style="text-align:center!important"> Tidak ada file. </h5>
             </div>
			 </div>';
		}
									} else {
       
	   $divisi=mysqli_real_escape_string($config,$_SESSION['divisi']);
	   if($_SESSION['admin']!=1){
	   $query = mysqli_query($config, "SELECT * FROM tbl_file_sharing WHERE divisi='$divisi'");}
	   else {
	   $query = mysqli_query($config, "SELECT * FROM tbl_file_sharing");
	   }
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_array($query)){
                

                            $ekstensi = array('jpg','png','jpeg','gif');
                            $ekstensi2 = array('doc','docx');
							$ekstensi3 = array('zip','rar','7zip');
							$ekstensi4 = array('pdf');
							$ekstensi5 = array('xls','xlsx');
							$ekstensi6 = array('pptx','ppt');
							$ekstensi7 = array('mp4','mp3','avi','mov','vlc','flv','wmv','mpeg-4','ogg','3gp');
                            $file = $row['file'];
                            $x = explode('.', $file);
                            $eks = strtolower(end($x));

                            

                                if(in_array($eks, $ekstensi2) == true){
                                    echo '
									
											<li>
                                            <div class="col m2">
											
                                                <div class="col m3" style="text-align:center;width:100%;">
                                                    <div class="card col m12">
                                                        <div class="card-content">
														<img class="file" src="./asset/img/word.png"><br>
                                                            <strong>file :</strong> <a style="font-size:13px" class="blue-text" href="./upload/file_sharing/'.$row['file'].'" target="_blank">'.$row['file'].'</a>
															<a style="width:100%;color:white!important" class="btn small orange waves-effect waves-light" href="?page=files&sub=del&id='.$row['id'].'" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');">Hapus</a>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
											</li>';
                                } else if(in_array($eks, $ekstensi4) == true){
                                    echo '
									
											<li>
                                            <div class="col m2">
											
                                                <div class="col m3" style="text-align:center;width:100%">
                                                    <div class="card col m12">
                                                        <div class="card-content">
														<img class="file" src="./asset/img/pdf.png"><br>
                                                            <strong>file :</strong> <a style="font-size:13px" class="blue-text" href="./upload/file_sharing/'.$row['file'].'" target="_blank">'.$row['file'].'</a>
															<a style="width:100%;color:white!important" class="btn small orange waves-effect waves-light" href="?page=files&sub=del&id='.$row['id'].'" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');">Hapus</a>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
											</li>';
                                } 
								else if(in_array($eks, $ekstensi3) == true){
                                    echo '
									
											<li>
                                            <div class="col m2">
											
                                                <div class="col m3" style="text-align:center;width:100%">
                                                    <div class="card col m12">
                                                        <div class="card-content">
														<img style="width:100%!important;margin-bottom:40px" class="file" src="./asset/img/rar.png"><br>
                                                            <strong>file :</strong> <a style="font-size:13px" class="blue-text" href="./upload/file_sharing/'.$row['file'].'" target="_blank">'.$row['file'].'</a>
															<a style="width:100%;color:white!important" class="btn small orange waves-effect waves-light" href="?page=files&sub=del&id='.$row['id'].'" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');">Hapus</a>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
											</li>';
                                } 
								else if(in_array($eks, $ekstensi) == true){
                                    echo '
									
											<li>
                                            <div class="col m2">
											
                                                <div class="col m3" style="text-align:center;width:100%">
                                                    <div class="card col m12">
                                                        <div class="card-content">
														<img style="width:100%!important;margin-bottom:40px" class="file" src="./asset/img/jpg.png"><br>
														
                                                            <strong>file :</strong> <a style="font-size:80%;text-align:left;" class="blue-text" href="./upload/file_sharing/'.$row['file'].'" target="_blank">'.$row['file'].'</a>
															
															<a style="width:100%;color:white!important" class="btn small orange waves-effect waves-light" href="?page=files&sub=del&id='.$row['id'].'" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');">Hapus</a>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
											</li>';
                                } else if(in_array($eks, $ekstensi5) == true){
                                    echo '
									
											<li>
                                            <div class="col m2">
											
                                                <div class="col m3" style="text-align:center;width:100%">
                                                    <div class="card col m12">
                                                        <div class="card-content">
														<img style="width:100%!important" class="file" src="./asset/img/excel.png"><br>
														
                                                            <strong>file :</strong> <a style="font-size:80%;text-align:left;" class="blue-text" href="./upload/file_sharing/'.$row['file'].'" target="_blank">'.$row['file'].'</a>
															
															<a style="width:100%;color:white!important" class="btn small orange waves-effect waves-light" href="?page=files&sub=del&id='.$row['id'].'" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');">Hapus</a>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
											</li>';
                                }else if(in_array($eks, $ekstensi6) == true){
                                    echo '
									
											<li>
                                            <div class="col m2">
											
                                                <div class="col m3" style="text-align:center;width:100%">
                                                    <div class="card col m12">
                                                        <div class="card-content">
														<img style="width:100%!important" class="file" src="./asset/img/ppt.png"><br>
														
                                                            <strong>file :</strong> <a style="font-size:80%;text-align:left;" class="blue-text" href="./upload/file_sharing/'.$row['file'].'" target="_blank">'.$row['file'].'</a>
															
															<a style="width:100%;color:white!important" class="btn small orange waves-effect waves-light" href="?page=files&sub=del&id='.$row['id'].'" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');">Hapus</a>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
											</li>';
                                } else if(in_array($eks, $ekstensi7) == true){
                                    echo '
									
											<li>
                                            <div class="col m2">
											
                                                <div class="col m3" style="text-align:center;width:100%">
                                                    <div class="card col m12">
                                                        <div class="card-content">
														<img style="width:100%!important" class="file" src="./asset/img/media.png"><br>
														
                                                            <strong>file :</strong> <a style="font-size:80%;text-align:left;" class="blue-text" href="./upload/file_sharing/'.$row['file'].'" target="_blank">'.$row['file'].'</a>
															
															<a style="width:100%;color:white!important" class="btn small orange waves-effect waves-light" href="?page=files&sub=del&id='.$row['id'].'" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');">Hapus</a>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
											</li>';
                                } else {
									echo '
									
											<li>
                                            <div class="col m2">
											
                                                <div class="col m3" style="text-align:center;width:100%">
                                                    <div class="card col m12">
                                                        <div class="card-content">
														<img style="width:100%!important;margin-bottom:40px" class="file" src="./asset/img/file.png"><br>
														
                                                            <strong>file :</strong> <a style="font-size:80%;text-align:left;" class="blue-text" href="./upload/file_sharing/'.$row['file'].'" target="_blank">'.$row['file'].'</a>
															
															<a style="width:100%;color:white!important" class="btn small orange waves-effect waves-light" href="?page=files&sub=del&id='.$row['id'].'" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');">Hapus</a>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
											</li>';
                                }
                            
                     
            }
        } else {
			echo'
			<div class="row">
			 <div class="col s12">
             <h5 style="text-align:center!important"> Tidak ada file. </h5>
             </div>
			 </div>';
		} echo '	
		</ul>
		
        </div>';
    }}
	
?>
<script src="//code.jquery.com/jquery.min.js"></script>
<script src="js/jquery.paginate.js"></script>
<script>
$('#example').paginate({
  perPage:18, // targets all div elements
});
</script>
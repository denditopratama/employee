<style>
h11 {
	font-size:12px!important;
}
#gambarz {
	width:30px!important;
	height:36px!important;
}
.page-navigation a {
  margin: 0 2px;
  display: inline-block;
  padding: 3px 5px;
  color: #ffffff;
  background-color: #70b7ec;
  border-radius: 5px;
  text-decoration: none;
  font-weight: bold;
}

.page-navigation a[data-selected] {
  background-color: #3d9be0;
}
</style>
<?php
    //cek session
    if(empty($_SESSION['admin']) || $_SESSION['admin']==1 && $_SESSION['divisi']!=2){
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
				case 'private';
				include 'private_file_sharing.php';
				break;
				
				
			}
		} else {
		$jg=mysqli_query($config,"SELECT MAX(id) AS maksimal FROM tbl_file_sharing");
		$datay=mysqli_fetch_array($jg);
		$maksz=$datay['maksimal'];
		for($k=1;$k<=$maksz;$k++){
		if(isset($_REQUEST['sharing'.$k.''])){
			$optionsharing=mysqli_real_escape_string($config,$_REQUEST['optionsharing'.$k.'']);
			$apdetsharing=mysqli_query($config,"UPDATE tbl_file_sharing SET sharing='$optionsharing' WHERE id='$k'");
			
		}	
		}
		
		
		$limit = 24;
            $pg = mysqli_real_escape_string($config,@$_GET['pg']);
                if(empty($pg)){
                    $curr = 0;
                    $pg = 1;
                } else {
                    $curr = ($pg - 1) * $limit;
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
				</div>
				<div class="col m12">
				<div class="card">
					<div class="card-content">
						<span class="card-title black-text"><i class="material-icons md-36" >cloud</i> File Sharing</span>
						
						<p><span class="red-text">*</span> untuk menampilkan file pribadi, pilih "File Pribadi" di kolom tampilan dan klik pilih</p>
						<p><span class="red-text">*</span> membagikan file dilakukan dengan cara klik tombol share (warna biru) lalu klik pilih</p>
						<p><span class="red-text">*</span> Jika ingin mengirim file pribadi ke karyawan tertentu silahkan gunakan surat keluar</p>
						<p><span class="red-text">*</span> Kotak file Berwarna oranye menandakan file sedang dibagikan / disharing dengan divisi </p>

					  
						
						
					</div>
					</div>
					</div>';
			
                    
				
				echo' <div class="row"> ';
				include "tambah_file_sharing.php";
				echo'
				
                                        <form method="post" action="?page=files">
                                            <div class="input-field col m4 s12" style="margin-top:30px">
                                                <input id="searchs" type="search" name="cari" placeholder="Ketik dan tekan enter mencari data..." style="background-color:transparent" required>
                                                <label for="searchs"><i class="material-icons">search</i></label>
                                                <input type="submit" name="submita" class="hidden">
                                            </div>
                                        </form>
										
										<form method="post">
										<div class="input-field col m4 s12" style="margin-top:-16px">
                                        <i style="margin-top:10px" class="material-icons prefix md-prefix">group</i><label>Tampilan</label><br/>
                                        <div class="input-field col s12" style="margin-top:9px">
                                            <select name="filtershare" id="filtershare">';
											
											if($_SESSION['admin']!=1){
                                               echo '<option value="1">File Pribadi</option>
											<option value="2" selected>File Divisi</option>';}
											else {
											echo '<option value="1">Semua File</option>
											<option value="2" selected>Semua File (Tanpa Keterangan)</option>';	
											}
														
											echo'
                                            </select>
                                        </div>
                                          
                                    </div>
									</form>
										
										</div>
										
										<div class="row">
										
										<ul id="example">
										
                                    ';
		
	   $divisi=mysqli_real_escape_string($config,$_SESSION['divisi']);
	   $id_user=mysqli_real_escape_string($config,$_SESSION['id_user']);
	   
	   
	   
	   if(isset($_REQUEST['submita'])){
	   $cari=mysqli_real_escape_string($config,$_REQUEST['cari']);	
	   if($_SESSION['admin']!=1){
	   $query = mysqli_query($config, "SELECT * FROM tbl_file_sharing WHERE divisi='$divisi' AND(file LIKE '%$cari%' AND sharing=1) ORDER BY id DESC LIMIT $curr, $limit");}
	   else {
	   $query = mysqli_query($config, "SELECT * FROM tbl_file_sharing WHERE file LIKE '%$cari%' ORDER BY id DESC LIMIT $curr, $limit");
	   }
        } else {
			if($_SESSION['admin']!=1){
	   $query = mysqli_query($config, "SELECT * FROM tbl_file_sharing WHERE divisi='$divisi' AND sharing=1 ORDER BY id DESC LIMIT $curr, $limit");}
	   else {
	   $query = mysqli_query($config, "SELECT * FROM tbl_file_sharing ORDER BY id DESC LIMIT $curr, $limit");
		}
		}
		
		if(isset($_REQUEST['filters'])){
			$filtersharing=mysqli_real_escape_string($config,$_REQUEST['filtershare']);
			if($filtersharing ==1){
			header('Location:./admin.php?page=files&sub=private');} else {
				echo'<script>
			window.location.href="?page=files";
			</script>';
			}
		}
		
		if(!empty($query)){
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_array($query)){
                
					$namaoleh=mysqli_query($config,"SELECT nama FROM tbl_user WHERE id_user='".$row['id_user']."'");
					list($oleh)=mysqli_fetch_array($namaoleh);
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
							
                            $string = strip_tags($row['file']);
							if (strlen($string) > 16) { $stringCut = substr($string, 0, 12);
							$endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
							$string .= '...';}
							

                                if(in_array($eks, $ekstensi2) == true){
                                    echo '
									
											<li>
                                            <div class="col m2 tooltipped" data-position="top" data-tooltip="Diupload oleh : '.$oleh.'">
											
                                                <div class="col m3" style="text-align:center;width:100%;">';
												if($row['sharing']==1 && $row['id_user']==$id_user){
													echo'
												<div class="card col m12" style="background-color:#FFDB00">
												<div class="card-content">
														<img id="gambarz" src="./asset/img/word.png"><br>
                                                            <strong>file :</strong> <a style="font-size:13px" class="blue-text" href="./upload/file_sharing/'.$row['file'].'" target="_blank">'.$string.'</a>
															
															<a style="width:100%;color:white!important" class="btn small orange waves-effect waves-light" href="?page=files&sub=del&id='.$row['id'].'" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');"><i class="material-icons">delete</i> Hapus</a>
															
															<a id="sharing'.$row['id'].'" style="width:100%;color:white!important" class="btn small blue darken-4 waves-effect waves-light"><i class="material-icons">insert_link</i> SHARE</a>
                                                        </div>
                                                    </div>
												';}
												else {
													echo'
												<div class="card col m12">';
												
												echo'
                                                        <div class="card-content">
														<img id="gambarz" src="./asset/img/word.png"><br>
                                                            <strong>file :</strong> <a style="font-size:13px" class="blue-text" href="./upload/file_sharing/'.$row['file'].'" target="_blank">'.$string.'</a>
															
															<a style="width:100%;color:white!important" class="btn small orange waves-effect waves-light" onclick="alert(\'Anda tidak diperbolehkan menghapus file orang lain!\');"><i class="material-icons">delete</i> Hapus</a>
															
															<a style="width:100%;color:white!important" class="btn small blue darken-4 waves-effect waves-light"><i class="material-icons">insert_link</i> SHARE</a>
                                                        </div>
												</div>';}
												echo'
                                                </div>
                                               
                                            </div>
											</li>';
                                } else if(in_array($eks, $ekstensi4) == true){
                                    echo '
									
											<li>
                                            <div class="col m2 tooltipped" data-position="top" data-tooltip="Diupload oleh : '.$oleh.'">
											
                                                <div class="col m3" style="text-align:center;width:100%">
                                                    ';
												if($row['sharing']==1 && $row['id_user']==$id_user){
													echo'
												<div class="card col m12" style="background-color:#FFDB00">
												<div class="card-content">
														<img id="gambarz" class="file" src="./asset/img/pdf.png"><br>
                                                             <strong>file :</strong> <a style="font-size:13px" class="blue-text" href="./upload/file_sharing/'.$row['file'].'" target="_blank">'.$string.'</a>
															<a style="width:100%;color:white!important" class="btn small orange waves-effect waves-light" href="?page=files&sub=del&id='.$row['id'].'" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');"><i class="material-icons">delete</i> Hapus</a>
															
															<a id="sharing'.$row['id'].'" style="width:100%;color:white!important" class="btn small blue darken-4 waves-effect waves-light"><i class="material-icons">insert_link</i> SHARE</a>
                                                        </div>
                                                    </div>';}
												else {
													echo'
												<div class="card col m12">';
												
												echo'
                                                        <div class="card-content">
														<img id="gambarz" class="file" src="./asset/img/pdf.png"><br>
                                                             <strong>file :</strong> <a style="font-size:13px" class="blue-text" href="./upload/file_sharing/'.$row['file'].'" target="_blank">'.$string.'</a>
															<a style="width:100%;color:white!important" class="btn small orange waves-effect waves-light" onclick="alert(\'Anda tidak diperbolehkan menghapus file orang lain!\');"><i class="material-icons">delete</i> Hapus</a>
															
															<a style="width:100%;color:white!important" class="btn small blue darken-4 waves-effect waves-light"><i class="material-icons">insert_link</i> SHARE</a>
                                                        </div>
												</div>';}
												echo'
                                                </div>
                                            </div>
											</li>';
                                } 
								else if(in_array($eks, $ekstensi3) == true){
                                    echo '
									
											<li>
                                            <div class="col m2 tooltipped" data-position="top" data-tooltip="Diupload oleh : '.$oleh.'">
											
                                                <div class="col m3" style="text-align:center;width:100%">
                                                    ';
												if($row['sharing']==1 && $row['id_user']==$id_user){
													echo'
												<div class="card col m12" style="background-color:#FFDB00">
												 <div class="card-content">
														<img id="gambarz" style="width:100%" class="file" src="./asset/img/rar.png"><br>
                                                             <strong>file :</strong> <a style="font-size:13px" class="blue-text" href="./upload/file_sharing/'.$row['file'].'" target="_blank">'.$string.'</a>
															<a style="width:100%;color:white!important" class="btn small orange waves-effect waves-light" href="?page=files&sub=del&id='.$row['id'].'" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');"><i class="material-icons">delete</i> Hapus</a>
															
															<a id="sharing'.$row['id'].'" style="width:100%;color:white!important" class="btn small blue darken-4 waves-effect waves-light"><i class="material-icons">insert_link</i> SHARE</a>
                                                        </div>
                                                    </div>';}
												else {
													echo'
												<div class="card col m12">';
												
												echo'
                                                        <div class="card-content">
														<img id="gambarz" style="width:100%" class="file" src="./asset/img/rar.png"><br>
                                                             <strong>file :</strong> <a style="font-size:13px" class="blue-text" href="./upload/file_sharing/'.$row['file'].'" target="_blank">'.$string.'</a>
															<a style="width:100%;color:white!important" class="btn small orange waves-effect waves-light" onclick="alert(\'Anda tidak diperbolehkan menghapus file orang lain!\');"><i class="material-icons">delete</i> Hapus</a>
															
															<a style="width:100%;color:white!important" class="btn small blue darken-4 waves-effect waves-light"><i class="material-icons">insert_link</i> SHARE</a>
                                                        </div>
												</div>';}
													
													echo'
                                                </div>
                                               
                                            </div>
											</li>';
                                } 
								else if(in_array($eks, $ekstensi) == true){
                                    echo '
									
											<li>
                                            <div class="col m2 tooltipped" data-position="top" data-tooltip="Diupload oleh : '.$oleh.'">
											
                                                <div class="col m3" style="text-align:center;width:100%">
                                                    ';
												if($row['sharing']==1 && $row['id_user']==$id_user){
													echo'
												<div class="card col m12" style="background-color:#FFDB00">
												<div class="card-content">
														<img id="gambarz" style="width:100%" class="file" src="./upload/file_sharing/'.$row['file'].'"><br>
														
                                                            <strong>file :</strong> <a style="font-size:80%;text-align:left;" class="blue-text" href="./upload/file_sharing/'.$row['file'].'" target="_blank">'.$string.'</a>
															
															<a style="width:100%;color:white!important" class="btn small orange waves-effect waves-light" href="?page=files&sub=del&id='.$row['id'].'" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');"><i class="material-icons">delete</i>Hapus</a>
															
															<a id="sharing'.$row['id'].'" style="width:100%;color:white!important" class="btn small blue darken-4 waves-effect waves-light"><i class="material-icons">insert_link</i> SHARE</a>
                                                        </div>
                                                    </div>';}
												else {
													echo'
												<div class="card col m12">';
												
												echo'
                                                        <div class="card-content">
														<img id="gambarz" style="width:100%" class="file" src="./upload/file_sharing/'.$row['file'].'"><br>
														
                                                            <strong>file :</strong> <a style="font-size:80%;text-align:left;" class="blue-text" href="./upload/file_sharing/'.$row['file'].'" target="_blank">'.$string.'</a>
															
															<a style="width:100%;color:white!important" class="btn small orange waves-effect waves-light" onclick="alert(\'Anda tidak diperbolehkan menghapus file orang lain!\');"><i class="material-icons">delete</i>Hapus</a>
															
															<a style="width:100%;color:white!important" class="btn small blue darken-4 waves-effect waves-light"><i class="material-icons">insert_link</i> SHARE</a>
                                                        </div>
												</div>';}
												echo'
                                                </div>
                                               
                                            </div>
											</li>';
                                } else if(in_array($eks, $ekstensi5) == true){
                                    echo '
									
											<li>
                                            <div class="col m2 tooltipped" data-position="top" data-tooltip="Diupload oleh : '.$oleh.'">
											
                                                <div class="col m3" style="text-align:center;width:100%">
                                                    ';
											    if($row['sharing']==1 && $row['id_user']==$id_user){
													echo'
												<div class="card col m12" style="background-color:#FFDB00">
												<div class="card-content">
														<img id="gambarz" style="width:100%" class="file" src="./asset/img/excel.png"><br>
														
                                                            <strong>file :</strong> <a style="font-size:80%;text-align:left;" class="blue-text" href="./upload/file_sharing/'.$row['file'].'" target="_blank">'.$string.'</a>
															
															<a style="width:100%;color:white!important" class="btn small orange waves-effect waves-light" href="?page=files&sub=del&id='.$row['id'].'" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');"><i class="material-icons">delete</i>Hapus</a>
															
															<a id="sharing'.$row['id'].'" style="width:100%;color:white!important" class="btn small blue darken-4 waves-effect waves-light"><i class="material-icons">insert_link</i> SHARE</a>
                                                        </div>
                                                    </div>';}
												else {
													echo'
												<div class="card col m12">';
												
												echo'
                                                        <div class="card-content">
														<img id="gambarz" style="width:100%" class="file" src="./asset/img/excel.png"><br>
														
                                                            <strong>file :</strong> <a style="font-size:80%;text-align:left;" class="blue-text" href="./upload/file_sharing/'.$row['file'].'" target="_blank">'.$string.'</a>
															
															<a style="width:100%;color:white!important" class="btn small orange waves-effect waves-light" onclick="alert(\'Anda tidak diperbolehkan menghapus file orang lain!\');"><i class="material-icons">delete</i>Hapus</a>
															
															<a style="width:100%;color:white!important" class="btn small blue darken-4 waves-effect waves-light"><i class="material-icons">insert_link</i> SHARE</a>
                                                        </div>
												</div>';}
													echo'
                                                </div>
                                               
                                            </div>
											</li>';
                                }else if(in_array($eks, $ekstensi6) == true){
                                    echo '
									
											<li>
                                            <div class="col m2 tooltipped" data-position="top" data-tooltip="Diupload oleh : '.$oleh.'">
											
                                                <div class="col m3" style="text-align:center;width:100%">
                                                    ';
												if($row['sharing']==1 && $row['id_user']==$id_user){
													echo'
												<div class="card col m12" style="background-color:#FFDB00">
												<div class="card-content">
														<img id="gambarz" style="width:100%" class="file" src="./asset/img/ppt.png"><br>
														
                                                            <strong>file :</strong> <a style="font-size:80%;text-align:left;" class="blue-text" href="./upload/file_sharing/'.$row['file'].'" target="_blank">'.$string.'</a>
															
															<a style="width:100%;color:white!important" class="btn small orange waves-effect waves-light" href="?page=files&sub=del&id='.$row['id'].'" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');"><i class="material-icons">delete</i>Hapus</a>
															
															<a id="sharing'.$row['id'].'" style="width:100%;color:white!important" class="btn small blue darken-4 waves-effect waves-light"><i class="material-icons">insert_link</i> SHARE</a>
                                                        </div>
                                                    </div>';}
												else {
													echo'
												<div class="card col m12">';
												
												echo'
                                                        <div class="card-content">
														<img id="gambarz" style="width:100%" class="file" src="./asset/img/ppt.png"><br>
														
                                                            <strong>file :</strong> <a style="font-size:80%;text-align:left;" class="blue-text" href="./upload/file_sharing/'.$row['file'].'" target="_blank">'.$string.'</a>
															
															<a style="width:100%;color:white!important" class="btn small orange waves-effect waves-light" onclick="alert(\'Anda tidak diperbolehkan menghapus file orang lain!\');"><i class="material-icons">delete</i>Hapus</a>
															
															<a style="width:100%;color:white!important" class="btn small blue darken-4 waves-effect waves-light"><i class="material-icons">insert_link</i> SHARE</a>
                                                        </div>
												</div>';}
													echo'
                                                </div>
                                               
                                            </div>
											</li>';
                                } else if(in_array($eks, $ekstensi7) == true){
                                    echo '
									
											<li>
                                            <div class="col m2 tooltipped" data-position="top" data-tooltip="Diupload oleh : '.$oleh.'">
											
                                                <div class="col m3" style="text-align:center;width:100%">
                                                    ';
												if($row['sharing']==1 && $row['id_user']==$id_user){
													echo'
												<div class="card col m12" style="background-color:#FFDB00">
												<div class="card-content">
														<img id="gambarz" style="width:100%" class="file" src="./asset/img/media.png"><br>
														
                                                            <strong>file :</strong> <a style="font-size:80%;text-align:left;" class="blue-text" href="./upload/file_sharing/'.$row['file'].'" target="_blank">'.$string.'</a>
															
															<a style="width:100%;color:white!important" class="btn small orange waves-effect waves-light" href="?page=files&sub=del&id='.$row['id'].'" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');"><i class="material-icons">delete</i>Hapus</a>
															
															<a id="sharing'.$row['id'].'" style="width:100%;color:white!important" class="btn small blue darken-4 waves-effect waves-light"><i class="material-icons">insert_link</i> SHARE</a>
                                                        </div>
                                                    </div>';}
												else {
													echo'
												<div class="card col m12">';
												
												echo'
                                                        <div class="card-content">
														<img id="gambarz" style="width:100%" class="file" src="./asset/img/media.png"><br>
														
                                                            <strong>file :</strong> <a style="font-size:80%;text-align:left;" class="blue-text" href="./upload/file_sharing/'.$row['file'].'" target="_blank">'.$string.'</a>
															
															<a style="width:100%;color:white!important" class="btn small orange waves-effect waves-light" onclick="alert(\'Anda tidak diperbolehkan menghapus file orang lain!\');"><i class="material-icons">delete</i>Hapus</a>
															
															<a style="width:100%;color:white!important" class="btn small blue darken-4 waves-effect waves-light"><i class="material-icons">insert_link</i> SHARE</a>
                                                        </div>
												</div>';}
													echo'
                                                </div>
                                               
                                            </div>
											</li>';
                                } else {
									echo '
									
											<li>
                                            <div class="col m2 tooltipped" data-position="top" data-tooltip="Diupload oleh : '.$oleh.'">
											
                                                <div class="col m3" style="text-align:center;width:100%">
                                                    ';
												if($row['sharing']==1 && $row['id_user']==$id_user){
													echo'
												<div class="card col m12" style="background-color:#FFDB00">
												<div class="card-content">
														<img id="gambarz" style="width:100%" class="file" src="./asset/img/file.png"><br>
														
                                                            <strong>file :</strong> <a style="font-size:80%;text-align:left;" class="blue-text" href="./upload/file_sharing/'.$row['file'].'" target="_blank">'.$string.'</a>
															
															<a style="width:100%;color:white!important" class="btn small orange waves-effect waves-light" href="?page=files&sub=del&id='.$row['id'].'" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');"><i class="material-icons">delete</i>Hapus</a>
															
															<a id="sharing'.$row['id'].'" style="width:100%;color:white!important" class="btn small blue darken-4 waves-effect waves-light"><i class="material-icons">insert_link</i> SHARE</a>
                                                        </div>
                                                    </div>';}
												else {
													echo'
												<div class="card col m12">';
												
												echo'
                                                        <div class="card-content">
														<img id="gambarz" style="width:100%" class="file" src="./asset/img/file.png"><br>
														
                                                            <strong>file :</strong> <a style="font-size:80%;text-align:left;" class="blue-text" href="./upload/file_sharing/'.$row['file'].'" target="_blank">'.$string.'</a>
															
															<a style="width:100%;color:white!important" class="btn small orange waves-effect waves-light" onclick="alert(\'Anda tidak diperbolehkan menghapus file orang lain!\');"><i class="material-icons">delete</i>Hapus</a>
															
															<a style="width:100%;color:white!important" class="btn small blue darken-4 waves-effect waves-light"><i class="material-icons">insert_link</i> SHARE</a>
                                                        </div>
												</div>';}
												echo'	
                                                </div>
                                               
                                            </div>
											</li>';
                                }
								echo'<div id="modald">
				<div id="modals'.$row['id'].'" class="modal" style="background-color:white">
                <div class="modal-content white">
				<div class="input-field col s12">
				<h5><i class="material-icons" style="margin-bottom:8px">lock</i> Filter Sharing File</h5>
				<small class="red-text">* Warna orange menunjukan file di share ke divisi.</small>
				<form method="POST">
				<select class="browser-default" name="optionsharing'.$row['id'].'" id="optionsharing">';
                                                   
                                                        if($row['sharing'] == 0) {
															echo'
															<option value="0" selected>File Pribadi</option>
															<option value="1">File Divisi</option>';
                                                         
                                                        }
														  else if($row['sharing'] == 1) {
                                                            echo'
															<option value="0">File Pribadi</option>
															<option value="1" selected>File Divisi</option>';
                                                        }
														  
                                                echo'  
                                              
												
												</select><br>
												
				<button type="submit" name="sharing'.$row['id'].'" style="width:100%;color:white!important" class="btn small orange waves-effect waves-light" onclick="return confirm(\'Anda yakin ingin membagi data ini?\');">Share</button>
				</form>
				</div>
				</div>
				</div>
				</div>';
                            
                     
            }
        } else {
			echo'
			<div class="row">
			 <div class="col s12">
             <h5 style="text-align:center!important"> Tidak ada file. </h5>
             </div>
			 </div>';
		}} echo '	
		</ul>';
		if($_SESSION['admin']==1){
		$query = mysqli_query($config, "SELECT * FROM tbl_file_sharing");}
		else {
		$query = mysqli_query($config, "SELECT * FROM tbl_file_sharing WHERE divisi='$divisi'");	
		}
                    $cdata = mysqli_num_rows($query);
                    $cpg = ceil($cdata/$limit);

                    echo '<br/>
					<div class="col m12">
                          <ul class="pagination">';

                    if($cdata > $limit ){
							
                        //first and previous pagging
                        if($pg > 1){
                            $prev = $pg - 1;
                            echo '<li><a href="?page=files&pg=1"><i class="material-icons md-48">first_page</i></a></li>
                                  <li><a href="?page=files&pg='.$prev.'"><i class="material-icons md-48">chevron_left</i></a></li>';
                        } else {
                            echo '<li class="disabled"><a href=""><i class="material-icons md-48">first_page</i></a></li>
                                  <li class="disabled"><a href=""><i class="material-icons md-48">chevron_left</i></a></li>';
                        }

                        //perulangan pagging
                       echo'
							<div class="col m4">
							<select class="browser-default" name="halaman" id="halaman" required>';
                                     for($i=1; $i <= $cpg; $i++){               
                                                        if($i != $pg){
                                echo '<option value="'.$i.'">'.$i.'</option>';
                            } else {
                                echo '<option value="'.$i.'" selected>'.$i.'</option>';
									 }}
														  
                                                echo'  
                                              
												
												</select>
												</div>';
							
                            

                        //last and next pagging
                        if($pg < $cpg){
                            $next = $pg + 1;
                            echo '<li><a href="?page=files&pg='.$next.'"><i class="material-icons md-48">chevron_right</i></a></li>
                                  <li><a href="?page=files&pg='.$cpg.'"><i class="material-icons md-48">last_page</i></a></li>';
                        } else {
                            echo '<li class="disabled"><a href=""><i class="material-icons md-48">chevron_right</i></a></li>
                                  <li class="disabled"><a href=""><i class="material-icons md-48">last_page</i></a></li>';
                        }
                        echo '
					</ul>
					</div>'; }
					else {
                    echo '';
                }
				echo'
        </div>';
		
	
		
		$asf=mysqli_query($config,"SELECT MAX(id) AS maksbgt FROM tbl_file_sharing");
	$maksa=mysqli_fetch_array($asf);
	$maos=$maksa['maksbgt'];
	echo'<script>


$(document).ready(function(){';
	for ($i=1;$i<=$maos;$i++){
		echo'
	$(\'#sharing'.$i.'\').click(function(){
	$("#modals'.$i.'").openModal()
	});';}
	echo'
						});
</script>
';	
		
		
    
	
	
?>
<script>
$(document).ready(function(){
$('#halaman').change(function(){
	var x = $(this).val();
	window.location.href='admin.php?page=files&pg='+ x;
		});
	
		$('#filtershare').change(function(){
			var xx = $(this).val();
			if(xx==1){
				window.location.href='admin.php?page=files&sub=private';
			} else  {
				window.location.href='admin.php?page=files';
			}
		});

	});	


</script>
		<?php } } ?>
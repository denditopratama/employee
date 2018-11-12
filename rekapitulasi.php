<style>
h11 {
	font-size:12px!important;
}
#gambarz {
	width:100%!important;
	height:100%!important;
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
				case 'private';
				include 'private_file_sharing.php';
				break;
				
				
			}
		} else {
		
		
		
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
                                            <li class="waves-effect waves-light"><a href="?page=rekap" class="judul"><i class="material-icons">print</i> Rekapitulasi</a></li>
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
				echo'
											<div class="col m3">
												<div class="card col m12">';
												
												echo'
                                                        <div class="card-content">
														<img id="gambarz" src="./asset/img/rekapunit.jpg"><br>
                                                            <h6 style="text-align:center">REKAPITULASI KARYAWAN PER UNIT KERJA</h6>
															
															<a style="width:100%;color:white!important" class="btn small green lighten-1 waves-effect waves-light" onclick="window.location.href=\'./statkar.php\';"><i class="material-icons">cloud_download</i> EXCEL</a>
															
															<a style="width:100%;color:white!important" class="btn small blue lighten-1 waves-effect waves-light" onclick="window.location.href=\'./admin.php?page=report\';"><i class="material-icons">print</i> PRINT</a>
                                                        </div>
												</div>
												</div>';
												
												echo'
											<div class="col m3">
												<div class="card col m12">';
												
												echo'
                                                        <div class="card-content">
														<img id="gambarz" src="./asset/img/rekapjenkel.jpg"><br>
                                                            <h6 style="text-align:center">REKAPITULASI JENIS KELAMIN</h6>
															
															<a style="width:100%;color:white!important" class="btn small green lighten-1 waves-effect waves-light" onclick="window.location.href=\'./rekapjenkel.php\';"><i class="material-icons">cloud_download</i> EXCEL</a>
															
															<a style="width:100%;color:white!important" class="btn small blue lighten-1 waves-effect waves-light" onclick="window.location.href=\'./admin.php?page=jenkel\';"><i class="material-icons">print</i> PRINT</a>
                                                        </div>
												</div>
												</div>';
												
												echo'
											<div class="col m3">
												<div class="card col m12">';
												
												echo'
                                                        <div class="card-content">
														<img id="gambarz" src="./asset/img/rekapagama.jpg"><br>
                                                            <h6 style="text-align:center">REKAPITULASI AGAMA</h6>
															
															<a style="width:100%;color:white!important" class="btn small green lighten-1 waves-effect waves-light" onclick="window.location.href=\'./rekapagama.php\';"><i class="material-icons">cloud_download</i> EXCEL</a>
															
															<a style="width:100%;color:white!important" class="btn small blue lighten-1 waves-effect waves-light" onclick="window.location.href=\'./admin.php?page=agama\';"><i class="material-icons">print</i> PRINT</a>
                                                        </div>
												</div>
												</div>';
												
												
													echo'
											<div class="col m3">
												<div class="card col m12">';
												
												echo'
                                                        <div class="card-content">
														<img id="gambarz" src="./asset/img/rekapstatus.jpg"><br>
                                                            <h6 style="text-align:center">REKAPITULASI STATUS KARYAWAN</h6>
															
															<a style="width:100%;color:white!important" class="btn small green lighten-1 waves-effect waves-light" onclick="window.location.href=\'./statkar.php\';"><i class="material-icons">cloud_download</i> EXCEL</a>
															
															<a style="width:100%;color:white!important" class="btn small blue lighten-1 waves-effect waves-light" onclick="window.location.href=\'./admin.php?page=statkar\';"><i class="material-icons">print</i> PRINT</a>
                                                        </div>
												</div>
												</div>';
												
													echo'
											<div class="col m3">
												<div class="card col m12">';
												
												echo'
                                                        <div class="card-content">
														<img id="gambarz" src="./asset/img/rekapunit.jpg"><br>
                                                            <h6 style="text-align:center">REKAPITULASI KELAS JABATAN</h6>
															
															<a style="width:100%;color:white!important" class="btn small green lighten-1 waves-effect waves-light" onclick="window.location.href=\'./statkar.php\';"><i class="material-icons">cloud_download</i> EXCEL</a>
															
															<a style="width:100%;color:white!important" class="btn small blue lighten-1 waves-effect waves-light" onclick="window.location.href=\'./admin.php?page=keljab\';"><i class="material-icons">print</i> PRINT</a>
                                                        </div>
												</div>
												</div>';
												
													echo'
											<div class="col m3">
												<div class="card col m12">';
												
												echo'
                                                        <div class="card-content">
														<img id="gambarz" src="./asset/img/rekapunit.jpg"><br>
                                                            <h6 style="text-align:center">REKAPITULASI USIA</h6>
															
															<a style="width:100%;color:white!important" class="btn small green lighten-1 waves-effect waves-light" onclick="window.location.href=\'./statkar.php\';"><i class="material-icons">cloud_download</i> EXCEL</a>
															
															<a style="width:100%;color:white!important" class="btn small blue lighten-1 waves-effect waves-light" onclick="window.location.href=\'./admin.php?page=usia\';"><i class="material-icons">print</i> PRINT</a>
                                                        </div>
												</div>
												</div>';
												
												
												
			

											
												echo'
												</div>
												';
									
		


	} 
	}	?>
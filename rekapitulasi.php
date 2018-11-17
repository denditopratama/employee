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
    if(empty($_SESSION['admin']) || $_SESSION['admin']==1 && $_SESSION['divisi']!=2){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {
		
		
		
	
				
		
		
		
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
															
															<a style="width:100%;color:white!important" class="btn small green lighten-1 waves-effect waves-light" onclick="window.location.href=\'./rekapunitkerja.php\';"><i class="material-icons">cloud_download</i> EXCEL</a>
															
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
                                                            <h6 style="text-align:center">REKAPITULASI<br>JENIS KELAMIN</h6>
															
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
                                                            <h6 style="text-align:center">REKAPITULASI<br>AGAMA</h6>
															
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
															
															<a style="width:100%;color:white!important" class="btn small green lighten-1 waves-effect waves-light" onclick="window.location.href=\'./rekapstatkar.php\';"><i class="material-icons">cloud_download</i> EXCEL</a>
															
															<a style="width:100%;color:white!important" class="btn small blue lighten-1 waves-effect waves-light" onclick="window.location.href=\'./admin.php?page=statkar\';"><i class="material-icons">print</i> PRINT</a>
                                                        </div>
												</div>
												</div>';
												
													echo'
											<div class="col m3">
												<div class="card col m12">';
												
												echo'
                                                        <div class="card-content">
														<img id="gambarz" src="./asset/img/rekapkeljab.jpg" style="height:217px!important"><br>
                                                            <h6 style="text-align:center">REKAPITULASI KELAS JABATAN</h6>
															
															<a style="width:100%;color:white!important" class="btn small green lighten-1 waves-effect waves-light" onclick="window.location.href=\'./rekapkeljab.php\';"><i class="material-icons">cloud_download</i> EXCEL</a>
															
															<a style="width:100%;color:white!important" class="btn small blue lighten-1 waves-effect waves-light" onclick="window.location.href=\'./admin.php?page=keljab\';"><i class="material-icons">print</i> PRINT</a>
                                                        </div>
												</div>
												</div>';
												
													echo'
											<div class="col m3">
												<div class="card col m12">';
												
												echo'
                                                        <div class="card-content">
														<img id="gambarz" src="./asset/img/rekapusia.jpg"><br>
                                                            <h6 style="text-align:center">REKAPITULASI<br>USIA</h6>
															
															<a style="width:100%;color:white!important" class="btn small green lighten-1 waves-effect waves-light" onclick="window.location.href=\'./rekapusia.php\';"><i class="material-icons">cloud_download</i> EXCEL</a>
															
															<a style="width:100%;color:white!important" class="btn small blue lighten-1 waves-effect waves-light" onclick="window.location.href=\'./admin.php?page=usia\';"><i class="material-icons">print</i> PRINT</a>
                                                        </div>
												</div>
												</div>';
												
												
												
												
												echo'
											<div class="col m3">
												<div class="card col m12">';
												
												echo'
                                                        <div class="card-content">
														<img id="gambarz" src="./asset/img/rekapjmrb.jpg"><br>
                                                            <h6 style="text-align:center">REKAPITULASI KARYAWAN JMP / JMRB</h6>
															
															<a style="width:100%;color:white!important" class="btn small green lighten-1 waves-effect waves-light" onclick="window.location.href=\'./rekapjmrb.php\';"><i class="material-icons">cloud_download</i> EXCEL</a>
															
															<a style="width:100%;color:white!important" class="btn small blue lighten-1 waves-effect waves-light" onclick="window.location.href=\'\';"><i class="material-icons">print</i> PRINT</a>
                                                        </div>
												</div>
												</div>';
												
											echo'
											<div class="col m3">
												<div class="card col m12">';
												
												echo'
                                                        <div class="card-content">
														<img id="gambarz" src="./asset/img/rekapsppd.jpg"><br>
                                                            <h6 style="text-align:center">REKAPITULASI SPPD <br>KARYAWAN</h6>
															
															<a style="width:100%;color:white!important" class="btn small green lighten-1 waves-effect waves-light" id="wayaw" ><i class="material-icons">cloud_download</i> EXCEL</a>
															
															<a style="width:100%;color:white!important" class="btn small blue lighten-1 waves-effect waves-light" id="wayaw2"><i class="material-icons">print</i> PRINT</a>
                                                        </div>
												</div>
												</div>	
												
												<div id="modald">
								<div id="modals" class="modal" style="background-color:yellow">
								<div class="modal-content yellow" style="padding-top:1px!important;background-color:#ffff00!important">
								<div class="input-field col s12">
								<h5><i class="material-icons" style="margin-bottom:8px">assignment_turned_in</i> Pelaporan SPPD</h5>
								<small class="blue-text">* Silahkan pilih bulan dan tahun.</small><br><br>
								<form method="POST" action="?page=reportsppd">
								<div class="col s12">
								<div class="col s6">
								<h5><strong>Bulan :</strong></h5>
								<select class="browser-default"name="bulansppd">
								<option value="01">Januari</option>
								<option value="02">Februari</option>
								<option value="03">Maret</option>
								<option value="04">April</option>
								<option value="05">Mei</option>
								<option value="06">Juni</option>
								<option value="07">Juli</option>
								<option value="08">Agustus</option>
								<option value="09">September</option>
								<option value="10">Oktober</option>
								<option value="11">November</option>
								<option value="12">Desember</option>
								</select>
								</div>
								<div class="col s6">
								<h5><strong>Tahun :</strong></h5>
								<input value="'.date("Y").'" type="number" min="2018" max="2100" name="tahunsppd">
								</div>
								
								<div class="col s12">
								<button style="width:100%;color:white!important" class="btn small blue lighten-1 waves-effect waves-light"><i class="material-icons">cloud_download</i> CETAK DATA</button>
								</div>
								
								</div>
								
								</form>
								</div>
								</div>
								</div>
								
								<div id="modald">
								<div id="modals2" class="modal" style="background-color:yellow">
								<div class="modal-content yellow" style="padding-top:1px!important;background-color:#ffff00!important">
								<div class="input-field col s12">
								<h5><i class="material-icons" style="margin-bottom:8px">assignment_turned_in</i> Pelaporan SPPD</h5>
								<small class="blue-text">* Silahkan pilih bulan dan tahun.</small><br><br>
								<form method="POST" action="rekapsppd.php">
								<div class="col s12">
								<div class="col s6">
								<h5><strong>Bulan :</strong></h5>
								<select class="browser-default"name="bulansppd">
								<option value="01">Januari</option>
								<option value="02">Februari</option>
								<option value="03">Maret</option>
								<option value="04">April</option>
								<option value="05">Mei</option>
								<option value="06">Juni</option>
								<option value="07">Juli</option>
								<option value="08">Agustus</option>
								<option value="09">September</option>
								<option value="10">Oktober</option>
								<option value="11">November</option>
								<option value="12">Desember</option>
								</select>
								</div>
								<div class="col s6">
								<h5><strong>Tahun :</strong></h5>
								<input value="'.date("Y").'" type="number" min="2018" max="2100" name="tahunsppd">
								</div>
								
								<div class="col s12">
								<button action="./?page=reportsppd" style="width:100%;color:white!important" class="btn small green lighten-1 waves-effect waves-light"><i class="material-icons">cloud_download</i> CETAK DATA EXCEL</button>
								</div>
								
								</div>
								
								</form>
								</div>
								</div>
								</div>';

											
												echo'
												</div>
												';
									
		//onclick="window.location.href=\'./rekapsppd.php\';"


	 
	}	?>
	
	<script>


$(document).ready(function(){
	
	$('#wayaw').click(function(){
	$("#modals2").openModal()
	});
	
	$('#wayaw2').click(function(){
	$("#modals").openModal()
	});
	
						});
</script>
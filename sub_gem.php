<?php if(empty($_SESSION['admin'])){
	$_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
} else { 

?>


<style>
#dda {
	width: 100wh;
	
	color: #fff;
	background: linear-gradient(-45deg, #253ca4, #ffe800, #ff8e00, #143784, #69f610, #d40def, #ff0000, #f700ff, #00fffa, #83b1eb, #27a5e4, #6fe7e5,red,orange,yellow,green,blue,indigo,violet);
	background-size: 400% 400%;
	-webkit-animation: Gradient 100s ease infinite;
	-moz-animation: Gradient 100s ease infinite;
	animation: Gradient 100s ease infinite;
}

#dds {
	width: 100wh;
	
	color: #fff;
	background: linear-gradient(-45deg,
#0000ff,
#1919ff,
#3232ff,
#4c4cff,
#6666ff,
#0000ff,
#0000e5,
#0000cc,
#0000b2,
#000099,
#00007f,
#000066,
#00004c,
#000033,
#000019,
#000000,
	#CCCC00
);
	background-size: 400% 400%;
	-webkit-animation: Gradient 30s ease infinite;
	-moz-animation: Gradient 30s ease infinite;
	animation: Gradient 30s ease infinite;
}

@-webkit-keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

@-moz-keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

@keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

h1,
h6 {
	font-family: 'Open Sans';
	font-weight: 300;
	text-align: center;
	position: absolute;
	top: 45%;
	right: 0;
	left: 0;
}
th,td {
	text-align:center!important;
	border:2px solid black;
}

</style>


						<div class="row">
						
						<div class="col m12">
                            <div class="card" id="dda">
							
                                <div class="card-content">
								<div class="col m6">
                                    <span class="card-title black-text"><i class="material-icons md-36" style="margin-top:-11px;!important">golf_course</i> Game</span>
                                    <p class="kata">Mohon untuk memperhatikan beberapa hal berikut sebelum anda mulai bermain :</p><br/>
									<p><span class="red-text"><strong>*</strong></span> Pastikan atasan anda sedang tidak ada (SPPD, Cuti, Rapat dll.)</p>
									<p><span class="red-text"><strong>*</strong></span> Pastikan anda dalam keadaan bosan dan mengantuk</p>
									<p><span class="red-text"><strong>*</strong></span> Pastikan anda sedang tidak ada pekerjaan</p>
									<p><span class="red-text"><strong>*</strong></span> Waktu maksimal bermain dalam 1 hari adalah 1 jam</p>
									<p><span class="red-text"><strong>*</strong></span> Jatah waktu di reset setiap hari jam <strong>08.00 WIB</strong></p><br>
									
									<?php $skor=mysqli_query($config,"SELECT score,waktugame FROM tbl_user WHERE id_user='$id_user'");
									list($sekor,$waktu)=mysqli_fetch_array($skor);
									$waktujam=gmdate("H", $waktu);
									$waktumenit=gmdate("i", $waktu);
									$waktudetik=gmdate("s", $waktu);
									echo'
									<p style="font-weight:bold;font-size:20px">Sisa waktu bermain anda : '.$waktujam.' Jam '.$waktumenit.' Menit '.$waktudetik.' Detik</p>
									<p style="font-weight:bold;font-size:20px">Score Tertinggi anda : '.$sekor.'</p><br>';?>
									
									<div style="text-align:center!important;">
									<a style="background-color:green!important" href="?page=game" class="btn-large green waves-effect waves-light">PLAY</a>
									</div>
				
                                </div>
								<div class="col m6">
								<h5 style="text-align:center!important">CHAMPION</h5>
								<div class="card">
								<?php
				
				$cempion=mysqli_query($config,"SELECT nama,id_user,foto FROM tbl_user ORDER BY score DESC LIMIT 1");
				list($juara,$aid,$foto)=mysqli_fetch_array($cempion);
			 
		   if($foto==""){
			echo'<img class="file" src="./upload/foto/batman.jpg" style="display:block;width:100%">';
		   }
		   else{
		   echo'<img class="file" src="./upload/foto/'.$foto.'" style="display:block;width:100%">';}
				?>
							</div>
					<?php echo '<h5 style="text-align:center!important;margin-bottom:30px!important"><strong>'.$juara.'</strong></h5>'; ?>
								</div>
							
								
								</div>
								</div>
								</div>
								
								<div class="input-field col s6" style="width:100%;text-align:center">
								<h5 style="text-align:center!important;"><b><i class="material-icons md-36">star</i>Leaderboard</b></h5><br>
								</div>
								
								
								<div class="col m12" id="colres">
							<table class="highlight" id="dds">
                            <thead class="blue lighten-4"style="background-color:yellow!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" id="head">
								
								<tr>
								<th style="color:black">Ranking</th>
								<th style="color:black">Nama</th>
								<th style="color:black">Divisi</th>
								<th style="color:black">Score</th>
								</tr>
								</thead>
								
								<?php 
								$cekscore=mysqli_query($config,"SELECT * FROM tbl_user ORDER BY score DESC LIMIT 10");
								$no=1;
								while($row=mysqli_fetch_array($cekscore)){
														if($row['divisi'] == 1) {
                                                            echo 'Direktur';
                                                        }
														  else if($row['divisi'] == 2) {
                                                            $row['divisi'] ='SDM dan Umum';
                                                        }
														  else if($row['divisi'] == 3) {
                                                            $row['divisi'] ='Keuangan';
                                                        }
														  else if($row['divisi'] == 4) {
                                                            $row['divisi'] ='Teknik';
                                                        }
														  else if($row['divisi'] == 5) {
                                                            $row['divisi'] ='Pengembangan Bisnis';
                                                        }
														  else if($row['divisi'] == 6) {
                                                            $row['divisi'] ='Marketing';
                                                        }
														  else if($row['divisi'] == 7) {
                                                            $row['divisi'] ='TIP';
                                                        }
														 else if($row['divisi'] == 8) {
                                                            $row['divisi'] ='Koperasi';
                                                        }
														else if($row['divisi'] == 0) {
                                                            $row['divisi'] ='Admin';
                                                        }
									echo'
								<tbody>
								<tr>
								<td>'.$no++.'</td>
								<td>'.$row['nama'].'</td>
								<td>'.$row['divisi'].'</td>
								<td>'.$row['score'].'</td>
								</tr>
								</tbody>';} ?>
								
								</table>
								
								</div>
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
<?php } ?>
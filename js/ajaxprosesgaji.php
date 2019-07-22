<?php
session_start();
require('../include/config.php');
if($_SESSION['admin']!=1){
    echo '
	<script>
	alert(\'ACCESS DENIED WOI!\');
	window.location.href=\'../\';
    </script>';
    die();
}

				error_reporting(0);
                $id=mysqli_real_escape_string($config,$_GET['id']);
				$id_user=mysqli_real_escape_string($config,$_GET['karyawan']);
				
							$pgntau=mysqli_query($config,"SELECT nama,kelas_jabatan,status_tugas,admin FROM tbl_user WHERE id_user='$id_user'");
							list($tau,$kelas_jabatan,$status_tugas,$admins)=mysqli_fetch_array($pgntau);
						
							$ddtd=mysqli_query($config,"SELECT bulan FROM tbl_bulan_gaji WHERE id='$id'");
					list($bln)=mysqli_fetch_array($ddtd);
					$blans=date('m',strtotime($bln));
					$thans=date('Y',strtotime($bln));
					if($blans==1){
						$blan=12;
						$than=$thans-1;
					} else {
						$blan=$blans-1;
						$than=$thans;}
						$fj=mysqli_query($config,"SELECT divisi FROM tbl_user WHERE id_user='$id_user'");
						list($divisi)=mysqli_fetch_array($fj);
							$pre=mysqli_query($config,"SELECT divisi,file FROM tbl_presensi WHERE divisi='$divisi' AND(MONTH(bulan)='$blan' AND YEAR(bulan)='$than')");
							list($divisix,$file)=mysqli_fetch_array($pre);
							?>

<?php
								$alis=mysqli_query($config,"SELECT * FROM tbl_penerimaan_tetap WHERE id_user='$id_user'");
								while($row=mysqli_fetch_array($alis)){
									$cekg=mysqli_query($config,"SELECT * FROM tbl_penerimaan WHERE id_gaji='$id' AND(id_user='$id_user' AND kode_penerimaan='".$row['kode_penerimaan']."' AND jumlah='".$row['jumlah']."')");
									if(mysqli_num_rows($cekg)==false){
										$vg=mysqli_query($config,"INSERT INTO tbl_penerimaan(id_gaji,id_user,kode_penerimaan,jumlah) VALUES('$id','$id_user','".$row['kode_penerimaan']."','".$row['jumlah']."')");
									}
									
								}
								$alisd=mysqli_query($config,"SELECT * FROM tbl_potongan_tetap WHERE id_user='$id_user'");
								while($rowd=mysqli_fetch_array($alisd)){
									$cekgs=mysqli_query($config,"SELECT * FROM tbl_potongan WHERE id_gaji='$id' AND(id_user='$id_user' AND kode_potongan='".$rowd['kode_potongan']."' AND jumlah='".$rowd['jumlah']."')");
									if(mysqli_num_rows($cekgs)==false){
										$vgs=mysqli_query($config,"INSERT INTO tbl_potongan(id_gaji,id_user,kode_potongan,jumlah) VALUES('$id','$id_user','".$rowd['kode_potongan']."','".$rowd['jumlah']."')");
									}
									
								}
								?>
							<?php 
							            //start
										$jmk = mysqli_query($config, "SELECT gaji_jm FROM tbl_identitas WHERE id_user='$id_user'");
										list($gajipusat)=mysqli_fetch_array($jmk);
										
										$numpang=mysqli_query($config,"SELECT status_karyawan,status_tugas,kelas_jabatan,custom FROM tbl_user WHERE id_user='$id_user'");
										list($status_karyawan,$status_tugas,$kelas_jabatan,$custom)=mysqli_fetch_array($numpang);
										
										$gajing=mysqli_query($config,"SELECT gaji,t_jabatan,t_fungsional,t_transportasi,t_utilitas,t_perumahan,t_komunikasi FROM tbl_gaji_pokok WHERE kelas_jabatan='$kelas_jabatan' AND(status_karyawan='$status_karyawan' AND status_tugas='$status_tugas' AND custom='$custom')");
										list($gajix,$tun_jabatan,$tun_fungsional,$tun_transportasi,$tun_utilitas,$tun_perumahan,$tun_komunikasi)=mysqli_fetch_array($gajing);
										
										$fay=mysqli_query($config,"SELECT SUM(jumlah) FROM tbl_penerimaan WHERE id_user='$id_user' AND id_gaji='$id'");
										list($jumlahx)=mysqli_fetch_array($fay);
										
										
												
													
													
													
													$ngambil=mysqli_query($config,"SELECT tgl_bakti FROM tbl_identitas WHERE id_user='$id_user'");
													list($lama)=mysqli_fetch_array($ngambil);
													$nambah = date_diff(date_create('2019-06-30'), date_create($lama))->y;
													$nambahh = date_diff(date_create('2019-06-30'), date_create($lama))->m + $nambah*12;
													$agesd = date_diff(date_create($lama), date_create('now'))->y;
													$ages = date_diff(date_create($lama), date_create('now'))->m + $agesd*12;
													echo '<script>console.log("'.$nambahh.'");</script>';
													if ($ages<=3 && $status_karyawan==5){
														$gajix=$gajix*80/100;
														$mb='(80%)';
						 							} else {$mb='';}
													if ($nambahh>=12 && $status_karyawan==5){
														$gajix=$gajix+800000;
													} else {
														$gajix=$gajix;}
													
													
													
													$sub1=$gajix+$tun_jabatan+$tun_fungsional+$tun_transportasi+$tun_utilitas+$tun_perumahan+$tun_komunikasi;
													
													
												
													
													
													
													if($status_tugas==1){
														if($sub1>=$gajipusat){
														$jamgaji=4.54/100*$sub1;
														$potjamgaji=6.54/100*$sub1;	
														} else {
														$jamgaji=4.54/100*$gajipusat;
														$potjamgaji=6.54/100*$gajipusat;}
													}
													else {
														$jamgaji=4.54/100*$sub1;
														$potjamgaji=6.54/100*$sub1;
													}
													if($kelas_jabatan==1){
														$jamgaji=0;
														$potjamgaji=0;
													}
													
													$wakd=mysqli_query($config,"UPDATE tbl_gaji SET pen_jamsostek='$jamgaji' WHERE id_user='$id_user' AND id_gaji='$id'");
													
													
													$jo=mysqli_query($config,"SELECT bpjs_jampes_nol,bpjs_jamkes_nol FROM tbl_identitas WHERE id_user='$id_user'");
													list($jampesnol,$jamkesnol)=mysqli_fetch_array($jo);
													
													if($jampesnol==0){
													
													if($sub1>= 8512400 || $gajipusat>= 8512400){
													
														$bpjspensiun=2/100*8512400;
														$potbpjspensiun=3/100*8512400;	
														$jpk=1/100*8512400;
													} else {
														if($sub1>=$gajipusat){
														$bpjspensiun=2/100*$sub1;
														$potbpjspensiun=3/100*$sub1;
														$jpk=1/100*$sub1;}
														else {
														$bpjspensiun=4.54/100*$gajipusat;
														$potbpjspensiun=6.54/100*$gajipusat;
														$jpk=1/100*$gajipusat;
														}
													}
													
													if($kelas_jabatan==2 || $kelas_jabatan==3) {
													
														$bpjspensiun=0;
														$potbpjspensiun=0;
														$jpk=1/100*8512400;
													} } else {
														$bpjspensiun=0;
														$potbpjspensiun=0;
														if($sub1>= 8512400 || $gajipusat>= 8512400){
														
															$jpk=1/100*8512400;
														}
													}
													$wakd=mysqli_query($config,"UPDATE tbl_gaji SET bpjstk_jampes='$bpjspensiun' WHERE id_user='$id_user' AND id_gaji='$id'");
													
												
													
													
													if($jamkesnol==0){
												if ($sub1>= 8000000 || $gajipusat>= 8000000){
													$bpjskesehatan=4/100*8000000;
													$potbpjskesehatan=0.05*8000000;
													$iubpjs=1/100*8000000;
													}
													else {
														if($sub1>=$gajipusat){
														$bpjskesehatan=4/100*$sub1;
														$potbpjskesehatan=0.05*$sub1;
														$iubpjs=1/100*$sub1;	
														} else {
														$bpjskesehatan=4/100*$gajipusat;
														$potbpjskesehatan=0.05*$gajipusat;
														$iubpjs=1/100*$gajipusat;}
													}
													
													if($kelas_jabatan==2 || $kelas_jabatan==3) {
														$bpjskesehatan=0;
														$potbpjskesehatan=0;
														$iubpjs=1/100*8000000;
														
													} } else {
														$bpjskesehatan=0;
														$potbpjskesehatan=0;
														if ($sub1>= 8000000 || $gajipusat>= 8000000){
												
															$iubpjs=1/100*8000000;
															}
													}
													
													$wakd=mysqli_query($config,"UPDATE tbl_gaji SET bpjstk_jamkes='$bpjskesehatan' WHERE id_user='$id_user' AND id_gaji='$id'");
													
													

													$faygg=mysqli_query($config,"SELECT SUM(jumlah) FROM tbl_potongan WHERE id_user='$id_user' AND id_gaji='$id'");
													list($jumla)=mysqli_fetch_array($faygg);	
													
													$sub2=(454/10000*$sub1);
												
													$sum1=$sub2+$sub1;
													
													$duda=array();
													$janda=array();
													$kawin=array();
										   
											   for ($i=0;$i<10;$i++){
											   array_push($duda,$i);}
											   for ($i=11;$i<21;$i++){
											   array_push($janda,$i);}
											   for ($i=22;$i<32;$i++){
											   array_push($kawin,$i);   
											   }
											   
											$satu=($sum1)+$jumlahx;
											$satu1=($sum1);
										
											
											$bijab= (0.05*$satu);
											if ($bijab>=500000){
												$bijab=500000;
											}
											$dua=$bijab+(0.02*$sub1)+$jpk+$iubpjs+$jumla;
											$dua2=$bijab+(0.02*$sub1)+$iubpjs+$jpk;
											
											$tig = $satu-$dua;
											$tig3 = $satu1-$dua2;
											$tiga= $tig*12;
											$tiga3= $tig3*12;
										
											$ambil=mysqli_query($config,"SELECT status_keluarga,jenis_kelamin FROM tbl_identitas WHERE id_user='$id_user'");
											list($statkel,$jenkel)=mysqli_fetch_array($ambil);
											if($jenkel=='P'){
												$ptkp=54000000;
											}
											else if($jenkel=='L'){
											if($statkel==32 || $statkel==33){
												$ptkp=54000000;
											} else if(in_array($statkel,$duda) || in_array($statkel,$kawin)) {
												if($statkel==0 || $statkel==22){
													$ptkp=58500000;
												} else if($statkel==1 || $statkel==23){
													$ptkp=63000000;
												} else if($statkel==2 || $statkel==24){
													$ptkp=67500000;
												} else if($statkel==3 || $statkel==25){
													$ptkp=72000000;
												} else {
													$ptkp=72000000;
												}
											}
												
															}
															
											$pkp=$tiga-$ptkp;
											if($pkp<=50000000){
												$tunj21=($pkp)*0.05;
											} else if($pkp<=250000000){
												$tunj21=($pkp-50000000)*0.15+2500000;
											} else if($pkp<=500000000){
												$tunj21=($pkp-250000000)*0.25+32500000;
											} else if($pkp>500000000){
												$tunj21=($pkp-500000000)*0.3+95000000;
											} 

											
											
											$pkp1=$tiga3-$ptkp;
												if($pkp1<=50000000){
													$tunj21tdk=($pkp1)*0.05;
												} else if($pkp1<=250000000){
													$tunj21tdk=($pkp1-50000000)*0.15+2500000;
												} else if($pkp1<=500000000){
													$tunj21tdk=($pkp1-250000000)*0.25+32500000;
												} else if($pkp1>500000000){
													$tunj21tdk=($pkp1-500000000)*0.3+95000000;
												} 
											

											
											$jang21=floor($tunj21);
											$jangtahun=floor($jang21/12);
										
											$jang21tidak=floor($tunj21tdk);
											$jang21tidaktahun=floor($jang21tidak/12);

											$tunpph21tdktetap=($jangtahun- $jang21tidaktahun);
											$tunpph21tetap= $jang21/12;
											if($tunpph21tetapkoreksi < 0 ){
												$tunpph21tetapkoreksi=0;
											}
											$tunpph21tetapkoreksi=floor($tunpph21tetap - $tunpph21tdktetap);
											
											if ($tunpph21tdktetap < 0){
												$tunpph21tdktetap=0;
											}

											
										
											echo '<script>console.log("start");</script>';   
											echo '<script>console.log("'.$tunpph21tdktetap.'");</script>';  
										
											echo '<script>console.log("end");</script>';  

											
											$fayg=mysqli_query($config,"SELECT SUM(jumlah) FROM tbl_penerimaan WHERE id_user='$id_user' AND id_gaji='$id'");
											list($jumlahx2)=mysqli_fetch_array($fayg);
											
											
											if($sum1<=4500000){
												$tunpph21tetap=0;
												$tunpph21tdktetap=0;
											
											}
											$tottunpph21=$tunpph21tetapkoreksi+$tunpph21tdktetap;
											

											//gross
											$satugross=($sum1)+$jumlahx+$tottunpph21;
											$satu1gross=($sum1)+$tottunpph21;
											
											$duagross=$bijab+(0.02*$sub1)+$jpk+$jumla+$iubpjs;
											$dua2gross=$bijab+(0.02*$sub1)+$jpk+$iubpjs;
											
											$tiggross = $satugross-$duagross;
											$tig3gross = $satu1gross-$dua2gross;
											$tigagross= $tiggross*12;
											$tiga3gross= $tig3gross*12;
										 


																
											$pkpgross=$tigagross-$ptkp;
											if($pkpgross<=50000000){
												$tunj21gross=($pkpgross)*0.05;
											} else if($pkpgross<=250000000){
												$tunj21gross=($pkpgross-50000000)*0.15+2500000;
											} else if($pkpgross<=500000000){
												$tunj21gross=($pkpgross-250000000)*0.25+32500000;
											} else if($pkpgross>500000000){
												$tunj21gross=($pkpgross-500000000)*0.3+95000000;
											} 

											
											
											$pkp1gross=$tiga3gross-$ptkp;
												if($pkp1gross<=50000000){
													$tunj21tdkgross=($pkp1gross)*0.05;
												} else if($pkp1gross<=250000000){
													$tunj21tdkgross=($pkp1gross-50000000)*0.15+2500000;
												} else if($pkp1gross<=500000000){
													$tunj21tdkgross=($pkp1gross-250000000)*0.25+32500000;
												} else if($pkp1gross>500000000){
													$tunj21tdkgross=($pkp1gross-500000000)*0.3+95000000;
												} 
												$jang21gross=floor($tunj21gross);
												$jangtahungross=floor($jang21gross/12);
											
												$jang21tidakgross=floor($tunj21tdkgross);
												$jang21tidaktahungross=floor($jang21tidakgross/12);
	
												$tunpph21tdktetapgross=($jangtahungross- $jang21tidaktahungross);
												$tunpph21tetapgross= $jang21gross/12;
												if ($tunpph21tdktetapgross < 0){
													$tunpph21tdktetapgross=0;
												}
												$tunpph21tetapkoreksigross=floor($tunpph21tetapgross - $tunpph21tdktetapgross);
												if($tunpph21tetapkoreksigross < 0 ){
													$tunpph21tetapkoreksigross=0;
												}

												$tottunpph21gross=$tunpph21tetapkoreksigross + $tunpph21tdktetapgross;

											$kojag=mysqli_query($config,"UPDATE tbl_gaji SET tun_pph21_tetap='$tunpph21tetapkoreksigross',tun_pph21_tidak='$tunpph21tdktetapgross' WHERE id_user='$id_user' AND id_gaji='$id'");
											$jmks = mysqli_query($config, "SELECT tun_pph21_tetap,tun_pph21_tidak,pot_pph21_tetap,pot_pph21_tidak FROM tbl_gaji WHERE id_user='$id_user' AND id_gaji='$id'");
										list($pph21tetapku,$pph21tidakku,$potpph21tetapku,$potpph21tidakku)=mysqli_fetch_array($jmks);
													
													
													
													
													
													$subtotpenlain=$bpjskesehatan+$bpjspensiun+$jamgaji+$tottunpph21gross;
													
												
													
													
										$queryoz = mysqli_query($config, "SELECT * FROM tbl_penerimaan WHERE id_user='$id_user' AND id_gaji='$id'");		
                                        if(mysqli_num_rows($queryoz) > 0){
                                           
                                            while($row = mysqli_fetch_array($queryoz)){
													
													$paris=mysqli_query($config,"SELECT uraian FROM tbl_jenis_penerimaan WHERE id='".$row['kode_penerimaan']."'");
													list($uraiterima)=mysqli_fetch_array($paris);
											
                                            
										
                                }
                            } else {
                               
                            }						
													
													
													
													$jumlah=$jumlahx+$subtotpenlain+$sub1;
													$mn=mysqli_query($config,"UPDATE tbl_gaji SET total_penerimaan='$jumlah' WHERE id_user='$id_user' AND id_gaji='$id'");
													
													$wakd=mysqli_query($config,"UPDATE tbl_gaji SET pot_jamsostek_kar='$potjamgaji' WHERE id_user='$id_user' AND id_gaji='$id'");
													
													$wakd=mysqli_query($config,"UPDATE tbl_gaji SET pot_bpjstk_jampes='$potbpjspensiun' WHERE id_user='$id_user' AND id_gaji='$id'");
													
													$wakd=mysqli_query($config,"UPDATE tbl_gaji SET pot_bpjstk_jamkes='$potbpjskesehatan' WHERE id_user='$id_user' AND id_gaji='$id'");
												
													
													
													
													$sub3=$potbpjskesehatan+$potbpjspensiun+$potjamgaji;
												
										
												
											$kojags=mysqli_query($config,"UPDATE tbl_gaji SET pot_pph21_tetap='$tunpph21tetapkoreksigross',pot_pph21_tidak='$tunpph21tdktetapgross' WHERE id_user='$id_user' AND id_gaji='$id'");
											$jmkss = mysqli_query($config, "SELECT tun_pph21_tetap,tun_pph21_tidak,pot_pph21_tetap,pot_pph21_tidak FROM tbl_gaji WHERE id_user='$id_user' AND id_gaji='$id'");
											list($pph21tetapku,$pph21tidakku,$potpph21tetapku,$potpph21tidakku)=mysqli_fetch_array($jmkss);
													
													$subtotpot=$sub3+$tottunpph21gross;

										$terimagaji = mysqli_query($config, "SELECT * FROM tbl_potongan WHERE id_user='$id_user' AND id_gaji='$id'");
                                        if(mysqli_num_rows($terimagaji) > 0){
                                            $no = 0;
                                            while($row = mysqli_fetch_array($terimagaji)){
												$rain=mysqli_query($config,"SELECT uraian FROM tbl_ref_potongan WHERE id='".$row['kode_potongan']."'");
													list($uraipotong)=mysqli_fetch_array($rain);
												
								}
								
								//end
                            } else {
                               
                            }		
									$faygg=mysqli_query($config,"SELECT SUM(jumlah) FROM tbl_potongan WHERE id_user='$id_user' AND id_gaji='$id'");
									list($jumla)=mysqli_fetch_array($faygg);
									
									$notal=$jumla+$subtotpot;
													$mn=mysqli_query($config,"UPDATE tbl_gaji SET total_potongan='$notal' WHERE id_user='$id_user' AND id_gaji='$id'");
													
													$penerimaanbersih=$jumlah-$notal;
                          
							$kor1=$tunpph21tdktetap+$tunpph21tetap;
							$kor2=$tunpph21tdktetap+$tunpph21tetap;
							$koreksis=$kor2-$kor1;
							if($koreksis>0){
								$koreksiz=$koreksis;
							} else {
								$koreksiz=0;
							}
							$cu=mysqli_query($config,"UPDATE tbl_gaji SET koreksi_pph21='$koreksiz' WHERE id_user='$id_user' AND id_gaji='$id'");
							$kong=mysqli_query($config,"SELECT koreksi_pph21 FROM tbl_gaji WHERE id_user='$id_user' AND id_gaji='$id'");
							list($koreksi)=mysqli_fetch_array($kong);
							
							$penerimaanbersihs=$penerimaanbersih+$koreksi;
							
							$fixkeun=mysqli_query($config,"UPDATE tbl_gaji SET penerimaan_bersih='$penerimaanbersihs' WHERE id_user='$id_user' AND id_gaji='$id'");
							
								 ?>
							
							<?php
			
				
			
		
					$numpang=mysqli_query($config,"SELECT admin,status_karyawan,status_tugas,kelas_jabatan,custom FROM tbl_user WHERE id_user='$id_user'");
												list($admin,$status_karyawan,$status_tugas,$kelas_jabatan,$custom)=mysqli_fetch_array($numpang);
												$ngambil=mysqli_query($config,"SELECT tgl_bakti FROM tbl_identitas WHERE id_user='$id_user'");
												list($lama)=mysqli_fetch_array($ngambil);
												$gajing=mysqli_query($config,"SELECT gaji,t_jabatan,t_fungsional,t_transportasi,t_utilitas,t_perumahan,t_komunikasi FROM tbl_gaji_pokok WHERE kelas_jabatan='$kelas_jabatan' AND(status_karyawan='$status_karyawan' AND status_tugas='$status_tugas' AND custom='$custom')");
												list($gaji,$tun_jabatan,$tun_fungsional,$tun_transportasi,$tun_utilitas,$tun_perumahan,$tun_komunikasi)=mysqli_fetch_array($gajing);
												$ages = date_diff(date_create($lama), date_create('now'))->m;
												$gajih=$gaji+$tun_jabatan+$tun_fungsional+$tun_transportasi+$tun_utilitas+$tun_perumahan+$tun_komunikasi;
												if($ages>=12 || $status_tugas==1){$ages=12;}
												if($ages<=3){
													$gajih=$gaji*80/100+$tun_jabatan+$tun_fungsional+$tun_transportasi+$tun_utilitas+$tun_perumahan+$tun_komunikasi;
												}
												
												if($admin==2 || $admin==3 || $admin==10){
												$jumlahthr=$ages/12*$gaji;
												} else {
												$jumlahthr=$ages/12*$gajih;}
				
				
				$querye = mysqli_query($config,"SELECT foto FROM tbl_user WHERE id_user='$id_user'");
           while($rows=mysqli_fetch_array($querye)){ 
		   if($rows['foto']==""){
		
		   }
		   else{
		 }} ?>
		   </div>
					</div>
				
					
					
					
                <?php
                    
                      
					$query = mysqli_query($config,"SELECT * FROM tbl_jenis_penerimaan");	
							while ($row = mysqli_fetch_array($query)) {											
								}
							
								?>
								

								<script>
								$(document).ready(function(){
			
					 
		   $('#penerimaans').click(function(){
                //Selected value
				
                var inputValue = $('#penerimaan').val();
				var nilai = $('#terima').val();
				
				
				if(nilai==''){
					alert('Data Tidak Boleh Kosong !');
				} else {
					$.post('./js/penerimaan_lain.php', { nilai : nilai, id_user :<?php echo $id_user; ?>,id_select: inputValue,id_gaji :<?php echo $id; ?> }, function(data){
                    
                    
					$("#terima").val(data);
					alert('Data Berhasil Di Input !');
					location.reload();
					
				});
				}
				
				
				
           
        });
		 });
			</script>				
					
<?php					
			
					$querygs = mysqli_query($config,"SELECT * FROM tbl_ref_potongan");	
							while ($rowx = mysqli_fetch_array($querygs)) {
								if($rowx['id']==28){
							
								} else {
								}											
								}
								$wowoy=mysqli_query($config,"SELECT gaji_jm FROM tbl_identitas WHERE id_user='$id_user'");
								list($gajidia)=mysqli_fetch_array($wowoy);
								if($status_tugas==1){
									}
								else{
								
								}
								?>
								
								<script>
								$(document).ready(function(){
           
				var nilai = $('#gajijma').val();
				var input ='anjay';
				
				$.post('./js/penerimaan_lain.php', { input : input, nilai : nilai, id_user :<?php echo $id_user; ?>,id_gaji :<?php echo $id; ?> });
				
	
		 });
			   </script>
			   
					<div id="pot1" class="col m4">
					</div>


			<?php 
			
			
			
		
										 $sekut=mysqli_query($config,"SELECT id,bulan FROM tbl_presensi WHERE MONTH(bulan)='$blan' AND YEAR(bulan)='$than'");
										 list($sikux,$bulanc)=mysqli_fetch_array($sekut);
										 $titit=mysqli_query($config,"SELECT nip,nama FROM tbl_user WHERE id_user='$id_user'");
										 list($nyusu,$namas)=mysqli_fetch_array($titit);
                                         $query2 = mysqli_query($config, "SELECT DISTINCT nik FROM tbl_presensi_karyawan WHERE nik='$nyusu' AND id_presensi='$sikux'");
										
                                        if(mysqli_num_rows($query2) > 0){
                                            $no = 0;
                                            while($row = mysqli_fetch_array($query2)){
												
                                            $no++;
                                          
										
								}
							
								$nnngj=mysqli_query($config,"SELECT menit_telat FROM tbl_handle");
								list($mkgg)=mysqli_fetch_array($nnngj);
								
                            } else {
                             
                            }
                      
							$queryq = mysqli_query($config, "SELECT * FROM tbl_cuti WHERE id_user='$id_user' AND(MONTH(tgl_awal)='$blan' AND YEAR(tgl_awal)='$than')");
								 
                                if(mysqli_num_rows($queryq) > 0){
                                    $no = 1;
                                    while($row = mysqli_fetch_array($queryq)){
										$ioko=mysqli_query($config,"SELECT nama,admin FROM tbl_user WHERE id_user='".$row['id_user']."'");
										list($nama,$admin)=mysqli_fetch_array($ioko);
                                     
                                     
									if($_SESSION['admin'] == 5 || $_SESSION['admin']== 1){
									if($row['status_manager']==1){	
									
									} else {
									}
									
									}
									else {
										if($row['status_manager']==1){	
								
									} else {
										}}
									
									
									
									
									
									
									if($_SESSION['admin'] == 4 || $_SESSION['admin']== 1){
									if($row['status_gm']==1){	
									
									} else {
										}}
										else {
											if($row['status_gm']==0){	
									
									} else {
										}}
										
											
										if($row['status_sdm']==0){
										
										if($_SESSION['admin']==1){}
										}
										else{
									
										if($_SESSION['admin']==1){}
									
										}
										$perkento = mysqli_real_escape_string($config,date_diff(date_create($row['tgl_akhir']), date_create($row['tgl_awal']))->d)+1;
								
                                }
                            } else {
                             
                            }
                           
										
                                        $query2d = mysqli_query($config, "SELECT * FROM tbl_lembur WHERE id_user='$id_user' AND(MONTH(tanggal)='$blan' AND YEAR(tanggal)='$than')");
										$lmbrk=mysqli_query($config,"SELECT jam_bulan,tarif_manager FROM tbl_handle WHERE id=1");
										list($jam_lembur,$tarfman)=mysqli_fetch_array($lmbrk);
									$tat=array();
									$tat1=array();
									$nong=array();
									
                                        if(mysqli_num_rows($query2d) > 0){
                                            $no = 0;
											while($row = mysqli_fetch_array($query2d)){
												$tglbereum=date('Y-m-d',strtotime($row['tanggal']));
												 $yaw=mysqli_query($config,"SELECT * FROM tbl_ref_tgl_merah WHERE tgl_merah='$tglbereum'");
												 
												$titit=mysqli_query($config,"SELECT nama,admin FROM tbl_user WHERE id_user='".$row['id_user']."'");
												list($namas,$edmun)=mysqli_fetch_array($titit);
													$ex=explode('.',$row['jam_awal']);
													$exo=explode('.',$row['jam_akhir']);
													if($exo[1]>30){
														$hourdiff = ceil(round((strtotime($row['jam_akhir']) - strtotime($row['jam_awal']))/3600, 1));
													} else {
														$hourdiff = floor(round((strtotime($row['jam_akhir']) - strtotime($row['jam_awal']))/3600, 1));
													}
													if($row['status_gm']==1 && $row['status_manager']==1){
														if($exo[0]-$ex[0]>3 && date('D', strtotime($row['tanggal']))!='Sat' && date('D', strtotime($row['tanggal']))!='Sun' && mysqli_num_rows($yaw)<=0){
															array_push($tat,3);	
														} else {
															array_push($tat,$exo[0]-$ex[0]);
															array_push($tat1,$exo[1]-$ex[1]);
														}
														
														
													}
												
													if($row['status_gm']==1 && $row['status_manager']==1){
														if($edmun==1 || $edmun==2 || $edmun==3 || $edmun==4 || $edmun==5){
														   array_push($nong,$tarfman);
														} else {
															
															
			   
														   if((date('D', strtotime($row['tanggal']))=='Sat' || date('D', strtotime($row['tanggal']))=='Sun') && mysqli_num_rows($yaw)==false){
															   if($hourdiff>3){
																   $hourdiff=3;
															   }
															  
																   $byrlm=($sub1/$jam_lembur*2)*$hourdiff;
																   array_push($nong,$byrlm);
														   
														   } else if(mysqli_num_rows($yaw)>0){
															 
															   if($hourdiff<=7){
																   $byrlm=(2/$jam_lembur*$sub1)*$hourdiff;
																   array_push($nong,$byrlm);
															   } else if($hourdiff>7 && $hourdiff<=8){
																   $byrlm=((2/$jam_lembur*$sub1)*7)+(3/$jam_lembur*$sub1);
																   array_push($nong,$byrlm);
															   } else if($hourdiff>8){
																   $byrlm=((2/$jam_lembur*$sub1)*7)+(3/$jam_lembur*$sub1)+((4/$jam_lembur*$sub1)*$hourdiff);
																   array_push($nong,$byrlm);
															   }
														   } else {
																 
															   if($hourdiff>3){
																   $hourdiff=3;
															   }
															   if($hourdiff>1){
																   $byrlm=($sub1/$jam_lembur*1.5)+((2/$jam_lembur*$sub1)*($hourdiff-1));
																   array_push($nong,$byrlm);
															   } else {
																   $byrlm=($sub1/$jam_lembur*1.5);
																   array_push($nong,$byrlm);
															   }
														   }
														   
														}}
														   $no++;
											
											
										if($_SESSION['admin']==1 || $_SESSION['admin']==5){
										if($row['status_manager']==1){										
											} 
											else {
										}}
										else {
											if($row['status_manager']==1){										
											} 
											else {
											}
										}
										
										
										
										if($_SESSION['admin']==1 || $_SESSION['admin']==4){
										if($row['status_gm']==1){										
											} 
											else {
										}}
										else{
										if($row['status_gm']==1){										
											 } 
											else {
											}	
										}
										
									
										if($row['id_user']!=$_SESSION['id_user'] && $_SESSION['admin']!=1){
											
										}
										else{
									}
											
										$ex=explode('.',$row['jam_awal']);
										$exo=explode('.',$row['jam_akhir']);
										if($row['status_gm']==1 && $row['status_manager']==1){
											array_push($tat,$exo[0]-$ex[0]);
											array_push($tat1,$exo[1]-$ex[1]);
										}
										
										
												
												
											}
											$yowko=array_sum($tat);
											$yowka=array_sum($tat1);
											$cocoktanam=array_sum($nong);
											if($yowka>=60){
												$hgut=floor($yowka/60);
												for($i=0;$i<$hgut;$i++){
													$yowka=$yowka-60;
													$yowko=$yowko+1;
												}
												
											}
										
										
											$mgkd=mysqli_query($config,"SELECT * FROM tbl_penerimaan WHERE id_user='$id_user' AND (id_gaji='$id' AND kode_penerimaan=5)");
											if (mysqli_num_rows($mgkd)>0) {
												$fmgj=mysqli_query($config,"UPDATE tbl_penerimaan SET jumlah='$cocoktanam' WHERE id_user='$id_user' AND(id_jagi='$id' AND kode_penerimaan=5)");
											} else {
												$mmm=mysqli_query($config,"INSERT INTO tbl_penerimaan(id_gaji,id_user,kode_penerimaan,jumlah) VALUES('$id','$id_user',5,'$cocoktanam')");
											}
											
                                        } else {
                                           
                                        }
                              
			
				echo '
				<script>
				$(document).ready(function(){
					
				 
		  var input = \'lembirs\';
		  var nis = $(\'#eding\').html();
		  
		  if(nis!=""){
	  var ce = nis.replace(/[^0-9]+/g, "");
	  $.post(\'./js/penerimaan_lain.php\', { input : input, id_select : 5, nilai : ce, id_user :'.$id_user.',id_gaji :'.$id.' });
	}
	 
	
				});
				</script>';
					$query = mysqli_query($config,"UPDATE tbl_gaji SET status=1 WHERE id_user='$id_user' AND id_gaji='$id'");
					$o=mysqli_query($config,"SELECT nip FROM tbl_user WHERE id_user='$id_user'");
						list($nik)=mysqli_fetch_array($o);
					
					$jjg=mysqli_query($config,"SELECT DISTINCT nik FROM tbl_presensi_karyawan WHERE nik='$nik'");    
					
					
					if(mysqli_num_rows($jjg)<0){
						} else {
														while($data=mysqli_fetch_array($jjg)){
												
														$query2 = mysqli_query($config, "SELECT * FROM tbl_presensi_karyawan WHERE id_presensi='$sikux' AND nik='".$data['nik']."' ");
														
														$namp=mysqli_query($config,"SELECT id_user,admin FROM tbl_user WHERE nip='".$data['nik']."'");
														list($id_users,$admin)=mysqli_fetch_array($namp);
													   
														$nyoy=array();
														$nyoy2=array();
														$nyoys=array();
														$nyoys2=array();
													if(mysqli_num_rows($query2) > 0){
                                            
														$no = 0;
														while($row = mysqli_fetch_array($query2)){
														
														$no++;
			
														$mosc=strtotime($row['tanggal']);
																
																$kemang=mysqli_query($config,"SELECT tgl_awal,tgl_akhir,status_manager,status_gm FROM tbl_cuti WHERE id_user='$id_users'");
																list($gaspol,$ereun,$goreng,$patut)=mysqli_fetch_array($kemang);
																$gaspol1=strtotime($gaspol);
																$gaspol2=strtotime($ereun);
																$tglbereum=date('Y-m-d',strtotime($row['tanggal']));
																$tglpuasa=date('Y-m-d',strtotime($row['tanggal']));
																$yaw=mysqli_query($config,"SELECT tgl_merah FROM tbl_ref_tgl_merah WHERE tgl_merah='".$tglbereum."' ");
																$puasa=mysqli_query($config,"SELECT tgl_puasa FROM tbl_ref_tgl_puasa WHERE tgl_puasa='".$tglpuasa."' ");
															 
			
																$sa=explode(':',$row['jam_masuk']);
																$bx='08:00';
																if(strtotime($row['jam_masuk'])>strtotime($bx)){
																	$miu=$sa[0]-8;
																	if($miu<0){
																		$miu=00;
																	}
																	$miu2=$sa[1]-0;
																	if(strlen($miu)<2){
																		$miu='0'.$miu;
																	}
																	if(strlen($miu2)<2){
																		$miu2='0'.$miu2;
																	}
																	$row['terlambat']=$miu.':'.$miu2;
																}
																else {
																	$miu='00';
																	$miu2='00';
																	$row['terlambat']=$miu.':'.$miu2;
																}
															   
																$sas=explode(':',$row['jam_pulang']);
																if(mysqli_num_rows($puasa)>0){
																	$bxs='16:00';
																	$telat=16;
			
																}
																else {
																	$bxs='17:00';
																	$telat=17;
																} 
																if(strtotime($row['jam_pulang'])<strtotime($bxs)){
																	$mius=$telat-$sas[0];
																	if($mius<0){
																		$mius=00;
																	} else if($mius==1){
																		$mius='00';
																	} else if($mius>1){
																		$mius=$mius-1;
																	}
			
																	if($row['jam_pulang']!=''){
																		$mius2=60-$sas[1];
																	} else {
																		$mius2=0;
																	}
																  
			
																	if(strlen($mius)<2 && $mius2!=''){
																		$mius='0'.$mius;
																	}
																	if(strlen($mius2)<2 && $mius2!=''){
																		$mius2='0'.$mius2;
																	}
																	$row['plg_cepat']=$mius.':'.$mius2;
																 } else {
																	$mius='00';
																	$mius2='00';
																	$row['plg_cepat']=$mius.':'.$mius2;
																}
																
																
														if(date('D',strtotime($row['tanggal']))=='Sat' || date('D',strtotime($row['tanggal']))=='Sun'){
														
															$row['terlambat']='00:00';
															$row['plg_cepat']='00:00';
														} else if($mosc >= $gaspol1 && $mosc <=$gaspol2 && $goreng==1 && $patut==1){
															$row['keterangan']='Cuti';
															$row['keterangan_plg']='Cuti';
															$row['plg_cepat']='00:00';
															
														} else if(mysqli_num_rows($yaw)>0){
															
															$row['keterangan']='Tanggal Merah';
															$row['keterangan_plg']='Tanggal Merah';
															$row['plg_cepat']='00:00';
															
															
														   
														} else {
														
														}
														
																if($_SESSION['admin']==1 && $_SESSION['divisi']==2){
																
																} else {
																	
																}
															  
																if($row['terlambat']==''){
																	$row['terlambat']='00:00';
																} 
																 
																if($row['plg_cepat']==''){
																	$row['plg_cepat']='00:00';
																} 
																 
																if($row['jam_masuk']=='' && $row['keterangan']=='' && date('D',strtotime($row['tanggal']))!='Sat' && date('D',strtotime($row['tanggal']))!='Sun'){
																	$row['terlambat']='06:00';}
			
																	if ($row['keterangan']!=''){
																		$row['terlambat']='00:00';
																	}
																
																	if($row['jam_pulang']=='' && $row['keterangan_plg']=='' && date('D',strtotime($row['tanggal']))!='Sat' && date('D',strtotime($row['tanggal']))!='Sun'){
																		$row['plg_cepat']='02:00';}
																		if($row['jam_pulang']=='' && $row['keterangan_plg']=='' && date('D',strtotime($row['tanggal']))!='Sat' && date('D',strtotime($row['tanggal']))!='Sun' && (mysqli_num_rows($puasa)>0)){
																			$row['plg_cepat']='01:00';}
																
																		if ($row['keterangan_plg']!=''){
																			$row['plg_cepat']='00:00';
																		}
																
																  if($row['jam_masuk']=='' && $row['jam_pulang']=='' && date('D',strtotime($row['tanggal']))!='Sat' && date('D',strtotime($row['tanggal']))!='Sun'){
																	$row['terlambat']='06:00';
																	$row['plg_cepat']='02:00';
																   }  
																   if($row['jam_masuk']=='' && $row['jam_pulang']=='' && date('D',strtotime($row['tanggal']))!='Sat' && date('D',strtotime($row['tanggal']))!='Sun' && (mysqli_num_rows($puasa)>0)){
																	$row['terlambat']='06:00';
																	$row['plg_cepat']='01:00';
																   }  
			
																   if ($row['keterangan_plg']!=''){
																	$row['plg_cepat']='00:00';
																}
			
																if ($row['keterangan']!=''){
																	$row['terlambat']='00:00';
																}
															
																   if($mosc >= $gaspol1 && $mosc <=$gaspol2 && $goreng==1 && $patut==1){
																	$row['keterangan']='Cuti';
																	$row['keterangan_plg']='Cuti';
																	$row['plg_cepat']='00:00';
																  $row['terlambat']='00:00';
																} else if(mysqli_num_rows($yaw)>0){
																
																	$row['keterangan']='Tanggal Merah';
																	$row['keterangan_plg']='Tanggal Merah';
																	$row['plg_cepat']='00:00';
																	$row['terlambat']='00:00';
																	
																   
																} 
																
																
																$nyot=explode(':',$row['terlambat']);
																$nyat=explode(':',$row['plg_cepat']);
																
																$konay=mysqli_query($config,"SELECT status_manager,status_gm FROM tbl_status_keterangan_presensi WHERE id_presensi='$id' AND id_user='$id_users'");
																list($stakm,$stakgm)=mysqli_fetch_array($konay);
															  
																
																if($admin==1 || $admin==2 || $admin==3){
																			array_push($nyoy,0);
																			array_push($nyoy2,0);
																} else if($admin==5){
																	if($stakgm==1){
																		if($row['keterangan']==''){
																			array_push($nyoy,$nyot[0]);
																			array_push($nyoy2,$nyot[1]);
																		}
																		if($row['keterangan_plg']==''){
																			array_push($nyoys,$nyat[0]);
																			array_push($nyoys2,$nyat[1]);
																		}
																	} else {
																		array_push($nyoy,$nyot[0]);
																		array_push($nyoy2,$nyot[1]);
																		array_push($nyoys,$nyat[0]);
																		array_push($nyoys2,$nyat[1]);
																	}
																} else if($admin==4) {
																	if($row['keterangan']==''){
																		array_push($nyoy,$nyot[0]);
																		array_push($nyoy2,$nyot[1]);
																	} 
																	if($row['keterangan_plg']==''){
																		array_push($nyoys,$nyat[0]);
																		array_push($nyoys2,$nyat[1]);
																	}
																} else {
																	if($stakm==1){
																		if($row['keterangan']==''){
																			array_push($nyoy,$nyot[0]);
																			array_push($nyoy2,$nyot[1]);
																		}
																		if($row['keterangan_plg']==''){
																			array_push($nyoys,$nyat[0]);
																			array_push($nyoys2,$nyat[1]);
																		}
																	} else {
																		array_push($nyoy,$nyot[0]);
																		array_push($nyoy2,$nyot[1]);  
																		array_push($nyoys,$nyat[0]);
																		array_push($nyoys2,$nyat[1]);
																		
																	}
																}
			
																
															   
													
														}
														$mb=array_sum($nyoy)*60;
														$mbz=array_sum($nyoy2);
														$fok=$mb+$mbz;
														$mb1=array_sum($nyoys)*60;
														$mbz1=array_sum($nyoys2);
														$fok1=$mb1+$mbz1;
														
													  
													   
														$bnz=mysqli_query($config,"SELECT status_manager,status_gm FROM tbl_status_keterangan_presensi WHERE id_presensi='$id' AND id_user='$id_users'");
														
														if($bnz==true){
															list($statm,$statgm)=mysqli_fetch_array($bnz);
															if($admin==1 || $admin==2 || $admin==3 || $admin==4){
																
															
															} else
															if ($admin==5){
																if($statgm==0){
																	if($_SESSION['admin']==1 || $_SESSION['admin']==2 || $_SESSION['admin']==3 || $_SESSION['admin']==4){
																	} else {
																	}
																	
																} else {
																	if($_SESSION['admin']==1 || $_SESSION['admin']==2 || $_SESSION['admin']==3 || $_SESSION['admin']==4){
																	} else {
																	}
																}
															} else {
																if($statm==0){
																	if($_SESSION['admin']==1 || $_SESSION['admin']==2 || $_SESSION['admin']==3 || $_SESSION['admin']==4 || $_SESSION['admin']==5){
																	} else {
																	}
																} else {
																	if($_SESSION['admin']==1 || $_SESSION['admin']==2 || $_SESSION['admin']==3 || $_SESSION['admin']==4 || $_SESSION['admin']==5){
																	} else {
																	}
																} 
															}
															
			
															
														} 
												
													}
										
											// ini potongan code buat masukin data potongan gaji telat ke tbl_potongan
												if($fok!="" || $fok!=0){				
													$jumlahPotonganTerlambat = $fok / $mkgg * $sub1;}
												else {
													$jumlahPotonganTerlambat = 0;
												}
												if($fok1!="" || $fok1!=0){	
												$jumlahPotonganPulangcepat = $fok1 / $mkgg * $sub1;}
												else {
													$jumlahPotonganPulangcepat = 0;
												}
												$jumlahPotongan = $jumlahPotonganTerlambat + $jumlahPotonganPulangcepat;
												$jumlahPotonganmenit = $fok + $fok1;
												
												echo '<script>console.log("'.$fok.'");</script>';
												echo '<script>console.log("'.$fok.'");</script>';
												echo '<script>console.log("'.$fok1.'");</script>';
												echo '<script>console.log("'.$jumlahPotonganmenit.'");</script>';
											
												$potonganExists=mysqli_query($config,"SELECT DISTINCT(id) FROM tbl_potongan WHERE id_user='$id_user' AND id_gaji='$id'AND kode_potongan=28");
												
												if (mysqli_num_rows($potonganExists) == 1) {
													$potonganUpdate=mysqli_query($config,"UPDATE tbl_potongan SET jumlah='$jumlahPotongan', total_menit='$jumlahPotonganmenit' WHERE id_user='$id_user' AND id_gaji='$id'AND kode_potongan=28");
													echo '<script>console.log("updatebos");</script>';
												} else {
													$potonganInsert=mysqli_query($config,"INSERT INTO tbl_potongan (id_gaji, id_user, kode_potongan, jumlah, total_menit) VALUES ('$id', '$id_user', 28, '$jumlahPotongan', '$jumlahPotonganmenit')");
													echo '<script>console.log("masukbos");</script>';
											}
											// selsai
													}} 
											
												
                  
			
	
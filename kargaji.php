

<?php
				$id_user=mysqli_real_escape_string($config,$_REQUEST['karyawan']);
				

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
							echo'
							
							<div class="col m12">
							<p style="text-align:center!important;font-size:24px"><strong>'.$tau.'</strong></p>
							</div>
						
							<div class="row jarak-form">';?>
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
							
							echo'
							
                                <div class="col m12" id="colres">
								<ul class="collapsible">
								<li>
								 <div class="collapsible-header" id="collaps1"style="background-color:transparent"><i class="material-icons prefix md-36" style="margin-top:-9px!important">add</i><h5>Rincian</h5></div>
								 <div class="collapsible-body" style="background-color:transparent!important">
								
								<div class="col m6" id="colres">
								<p style="text-align:center"><strong>Penerimaan</strong></p>
                                    <table id="ketpen" class="bordered">
                                        <thead class="blue lighten-4" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                            <tr>
                                                <th style="width:1%">-</th>
                                                <th>Keterangan</th>
												<th>Jumlah</th>
												<th>Tindakan</th>
                                                
                                                
                                            </tr>
											
                                        </thead>

                                        <tbody>
                                            <tr>';
									
                                        
										$jmk = mysqli_query($config, "SELECT gaji_jm FROM tbl_identitas WHERE id_user='$id_user'");
										list($gajipusat)=mysqli_fetch_array($jmk);
										
										$numpang=mysqli_query($config,"SELECT status_karyawan,status_tugas,kelas_jabatan,custom FROM tbl_user WHERE id_user='$id_user'");
										list($status_karyawan,$status_tugas,$kelas_jabatan,$custom)=mysqli_fetch_array($numpang);
										
										$gajing=mysqli_query($config,"SELECT gaji,t_jabatan,t_fungsional,t_transportasi,t_utilitas,t_perumahan,t_komunikasi FROM tbl_gaji_pokok WHERE kelas_jabatan='$kelas_jabatan' AND(status_karyawan='$status_karyawan' AND status_tugas='$status_tugas' AND custom='$custom')");
										list($gajix,$tun_jabatan,$tun_fungsional,$tun_transportasi,$tun_utilitas,$tun_perumahan,$tun_komunikasi)=mysqli_fetch_array($gajing);
										
										$fay=mysqli_query($config,"SELECT SUM(jumlah) FROM tbl_penerimaan WHERE id_user='$id_user' AND id_gaji='$id'");
										list($jumlahx)=mysqli_fetch_array($fay);
										
										
												
													echo'
													<tr>
													<td style="text-align:center" colspan="4"><strong>Penerimaan Gaji</strong></td>
													</tr>';
													
													
													$ngambil=mysqli_query($config,"SELECT tgl_bakti FROM tbl_identitas WHERE id_user='$id_user'");
													list($lama)=mysqli_fetch_array($ngambil);
													$agesd = date_diff(date_create($lama), date_create('now'))->y;
													$ages = date_diff(date_create($lama), date_create('now'))->m + $agesd*12;
												
													
													 if ($ages<=3 && $status_karyawan==5){
														$gajix=$gajix*80/100;
														$mb='(80%)';
													} else {$mb='';}
													
													echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Gaji Pokok</td>
													<td style="text-align:right">Rp '.number_format($gajix , 0, ',', '.').'</td>
													<td style="text-align:center">-</td>
													</tr>';
													if($tun_jabatan!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Tunjangan Jabatan</td>
													<td style="text-align:right">Rp '.number_format($tun_jabatan , 0, ',', '.').'</td>
													<td style="text-align:center">-</td>
													</tr>';}
													if($tun_fungsional!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Tunjangan Fungsional</td>
													<td style="text-align:right">Rp '.number_format($tun_fungsional , 0, ',', '.').'</td>
													<td style="text-align:center">-</td>
													</tr>';}
													
													if($tun_transportasi!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Tunjangan Transportasi</td>
													<td style="text-align:right">Rp '.number_format($tun_transportasi , 0, ',', '.').'</td>
													<td style="text-align:center">-</td>
													</tr>';}
													
													if($tun_utilitas!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Tunjangan Utilitas</td>
													<td style="text-align:right">Rp '.number_format($tun_utilitas , 0, ',', '.').'</td>
													<td style="text-align:center">-</td>
													</tr>';}
													
													if($tun_perumahan!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Tunjangan Perumahan</td>
													<td style="text-align:right">Rp '.number_format($tun_perumahan , 0, ',', '.').'</td>
													<td style="text-align:center">-</td>
													</tr>';}
													
													if($tun_komunikasi!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Tunjangan Komunikasi</td>
													<td style="text-align:right">Rp '.number_format($tun_komunikasi , 0, ',', '.').'</td>
													<td style="text-align:center">-</td>
													</tr>';}
													
													$sub1=$gajix+$tun_jabatan+$tun_fungsional+$tun_transportasi+$tun_utilitas+$tun_perumahan+$tun_komunikasi;
													
													
												
													echo'
													<tr style="border-top:2px solid black">
													<td style="text-align:center" ><strong></strong></td>
													<td style="text-align:center"><strong>Sub Total '.$mb.'</strong></td>
													<td style="text-align:right" ><strong>Rp '.number_format($sub1 , 0, ',', '.').'</strong></td>
													<td style="text-align:center" ><strong></strong></td>
													</tr>';
													
													echo'
													<tr>
													<td style="text-align:center" colspan="4"><strong>Penerimaan Umum</strong></td>
													</tr>';
													
													
													
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
													echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Jamsostek (4,54%)</td>
													<td style="text-align:right">Rp '.number_format($jamgaji , 0, ',', '.').'</td>
													<td style="text-align:center">-</td>
													</tr>';
													
													$jo=mysqli_query($config,"SELECT bpjs_jampes_nol,bpjs_jamkes_nol FROM tbl_identitas WHERE id_user='$id_user'");
													list($jampesnol,$jamkesnol)=mysqli_fetch_array($jo);
													
													if($jampesnol==0){
													
													if($sub1>= 8094000 || $gajipusat>= 8094000){
													
														$bpjspensiun=2/100*8094000;
														$potbpjspensiun=3/100*8094000;	
														$jpk=1/100*8094000;
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
														$jpk=1/100*8094000;
													} } else {
														$bpjspensiun=0;
														$potbpjspensiun=0;
														if($sub1>= 8094000 || $gajipusat>= 8094000){
														
															$jpk=1/100*8094000;
														}
													}
													$wakd=mysqli_query($config,"UPDATE tbl_gaji SET bpjstk_jampes='$bpjspensiun' WHERE id_user='$id_user' AND id_gaji='$id'");
													echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">BPJSTK Jaminan Pensiun (2%)</td>
													<td style="text-align:right">Rp '.number_format($bpjspensiun , 0, ',', '.').'</td>
													<td style="text-align:center">-</td>
													</tr>';
												
													
													
													if($jamkesnol==0){
												if ($sub1>= 8000000 || $gajipusat>= 8000000){
													$bpjskesehatan=4/100*8000000;
													$potbpjskesehatan=5/100*8000000;
													$iubpjs=1/100*8000000;
													}
													else {
														if($sub1>=$gajipusat){
														$bpjskesehatan=4/100*$sub1;
														$potbpjskesehatan=5/100*$sub1;
														$iubpjs=1/100*$sub1;	
														} else {
														$bpjskesehatan=4/100*$gajipusat;
														$potbpjskesehatan=5/100*$gajipusat;
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
													
													echo'
													<tr style="border-bottom:1px solid black">
													<td style="text-align:center">-</td>
													<td style="text-align:center">BPJSTK Jaminan Kesehatan (4%)</td>
													<td style="text-align:right">Rp '.number_format($bpjskesehatan , 0, ',', '.').'</td>
													<td style="text-align:center">
													
													</td>
													</tr>';
													
													
													$sub2=$bpjskesehatan+$bpjspensiun+(54/10000*$sub1)+(30/10000*$sub1);
												
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
											   
											  
											$satu=($sum1*12)+$jumlahx;
											$satu1=($sum1*12);
											
											$dua=(5/100*$satu)+$iubpjs+$jpk+(2/100*$sub1);
											$dua2=(5/100*$satu1)+$iubpjs+$jpk+(2/100*$sub1);
											if($dua>=6000000 || $dua2 >=6000000){
												$dua=6000000;
												$dua2=6000000;
											}
											$tiga=$satu-$dua;
											$tiga3=$satu1-$dua2;
											
											
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
											if($pkp<=47500000){
												$tunj21=($pkp-0)*5/95+0;
											} else if($pkp<=217500000){
												$tunj21=($pkp-47500000)*15/85+2500000;
											} else if($pkp<=405000000){
												$tunj21=($pkp-217500000)*25/75+32500000;
											} else if($pkp>405000000){
												$tunj21=($pkp-405000000)*30/70+95000000;
											} 
											
											$pkp1=$tiga3-$ptkp;
											if($pkp1<=47500000){
												$tunj21tdk=($pkp1-0)*5/95+0;
											} else if($pkp1<=217500000){
												$tunj21tdk=($pkp1-47500000)*15/85+2500000;
											} else if($pkp1<=405000000){
												$tunj21tdk=($pkp1-217500000)*25/75+32500000;
											} else if($pkp1>405000000){
												$tunj21tdk=($pkp1-405000000)*30/70+95000000;
											}
											
											
											$jang21=floor($tunj21);
										
											$jang21tidak=floor($tunj21tdk);
											
											$tunpph21tdktetap=$jang21-$jang21tidak;
											$tunpph21tetap=$jang21tidak/12;
											
											$fayg=mysqli_query($config,"SELECT SUM(jumlah) FROM tbl_penerimaan WHERE id_user='$id_user' AND id_gaji='$id'");
											list($jumlahx2)=mysqli_fetch_array($fayg);
											
											
											if($sum1<=4500000){
												$tunpph21tetap=0;
												$tunpph21tdktetap=0;
											
											}
											$tottunpph21=$tunpph21tdktetap+$tunpph21tetap;
											
											
											$kojag=mysqli_query($config,"UPDATE tbl_gaji SET tun_pph21_tetap='$tunpph21tetap',tun_pph21_tidak='$tunpph21tdktetap' WHERE id_user='$id_user' AND id_gaji='$id'");
											$jmks = mysqli_query($config, "SELECT tun_pph21_tetap,tun_pph21_tidak,pot_pph21_tetap,pot_pph21_tidak FROM tbl_gaji WHERE id_user='$id_user' AND id_gaji='$id'");
										list($pph21tetapku,$pph21tidakku,$potpph21tetapku,$potpph21tidakku)=mysqli_fetch_array($jmks);
													
													echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Tunjangan PPh-21 Tetap</td>
													<td style="text-align:right">Rp '.number_format($pph21tetapku , 0, ',', '.').'</td>
													<td style="text-align:center">-</td>
													</tr>';
													
													echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Tunjangan PPh-21 Tidak Tetap</td>
													<td style="text-align:right">Rp '.number_format($pph21tidakku , 0, ',', '.').'</td>
													<td style="text-align:center">-</td>
													</tr>';
													
													
													
													$subtotpenlain=$bpjskesehatan+$bpjspensiun+$jamgaji+$tunpph21tdktetap+$tunpph21tetap;
													
													
													echo'
													<tr style="border-top:2px solid black">
													<td style="text-align:center" ><strong></strong></td>
													<td style="text-align:center"><strong>Sub Total</strong></td>
													<td style="text-align:right" ><strong>Rp '.number_format($subtotpenlain , 0, ',', '.').'</strong></td>
													<td style="text-align:center" ><strong></strong></td>
													</tr>';
													
													echo'
													<tr>
													<td style="text-align:center" colspan="4"><strong>Penerimaan Lain</strong></td>
													</tr>';
													
													
										$queryoz = mysqli_query($config, "SELECT * FROM tbl_penerimaan WHERE id_user='$id_user' AND id_gaji='$id'");		
                                        if(mysqli_num_rows($queryoz) > 0){
                                           
                                            while($row = mysqli_fetch_array($queryoz)){
													
													$paris=mysqli_query($config,"SELECT uraian FROM tbl_jenis_penerimaan WHERE id='".$row['kode_penerimaan']."'");
													list($uraiterima)=mysqli_fetch_array($paris);
												echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">'.$uraiterima.'</td>
													<td style="text-align:right">Rp '.number_format($row['jumlah'] , 0, ',', '.').'</td>
													<td style="text-align:center"><a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=haha&id_user='.$id_user.'&idnya='.$row['id'].'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';
													
													
									echo'
                                        </tbody>
										</tr>';
                                            
										
                                }
                            } else {
                                echo '<tr><td colspan="8"><center><p class="add">Tidak ada penerimaan lain. <u></u> </p></center></td></tr>';
                            }						
													
													echo'
													<tr style="border-top:2px solid black">
													<td style="text-align:center" ><strong></strong></td>
													<td style="text-align:center"><strong>Sub Total</strong></td>
													<td style="text-align:right" ><strong>Rp '.number_format($jumlahx2 , 0, ',', '.').'</strong></td>
													<td style="text-align:center" ><strong></strong></td>
													</tr>';
													
													$jumlah=$jumlahx+$subtotpenlain+$sub1;
													$mn=mysqli_query($config,"UPDATE tbl_gaji SET total_penerimaan='$jumlah' WHERE id_user='$id_user' AND id_gaji='$id'");
														echo'
													<tr style="background-color:rgba(255,255,0,0.9)">
													<td style="text-align:center" colspan="2"><strong>Total Penerimaan</strong></td>
													<td style="text-align:center" colspan="2"><strong>Rp '.number_format($jumlah , 0, ',', '.').'</strong></td>
													</tr>';
                            echo '</table>';
							echo'</div>
							
							<div class="col m6" id="colres">
							
							<p style="text-align:center!important"><strong>Potongan</strong></p>
						
                                    <table class="bordered">
                                        <thead class="blue lighten-4" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                                            <tr>
                                                <th style="width:1%">-</th>
                                                <th>Keterangan</th>
												<th>Jumlah</th>
												<th>Tindakan</th>
                                                
                                                
                                            </tr>
											
                                        </thead>

                                        <tbody>
                                            <tr>';
                                        
									
										
													echo'
													<tr>
													<td style="text-align:center" colspan="4"><strong>Potongan Umum</strong></td>
													</tr>';
													$wakd=mysqli_query($config,"UPDATE tbl_gaji SET pot_jamsostek_kar='$potjamgaji' WHERE id_user='$id_user' AND id_gaji='$id'");
													echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Jamsostek</td>
													<td style="text-align:right">Rp '.number_format($potjamgaji , 0, ',', '.').'</td>
													<td style="text-align:center">-</td>
													</tr>';
													$wakd=mysqli_query($config,"UPDATE tbl_gaji SET pot_bpjstk_jampes='$potbpjspensiun' WHERE id_user='$id_user' AND id_gaji='$id'");
													echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">BPJSTK Jaminan Pensiun</td>
													<td style="text-align:right">Rp '.number_format($potbpjspensiun , 0, ',', '.').'</td>
													<td style="text-align:center">-</td>
													</tr>';
													$wakd=mysqli_query($config,"UPDATE tbl_gaji SET pot_bpjstk_jamkes='$potbpjskesehatan' WHERE id_user='$id_user' AND id_gaji='$id'");
													echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">BPJSTK Jaminan Kesehatan</td>
													<td style="text-align:right">Rp '.number_format($potbpjskesehatan , 0, ',', '.').'</td>
													<td style="text-align:center">-</td>
													</tr>';
													
													
													
													$sub3=$potbpjskesehatan+$potbpjspensiun+$potjamgaji;
													
													
											   
											$satuw=($sum1*12)+$jumlahx+$tottunpph21;
											$duaw=(5/100*$satuw)+$iubpjs+$jpk+(2/100*$sub1);
											if($duaw>=6000000){
												$duaw=6000000;
											}
											$tigaz=$satuw-$duaw;
											
														
											$pkps=$tigaz-$ptkp;
											if($pkps<=50000000){
												$pottunj21=5/100*$pkps;
											} else if($pkps<=250000000){
												$pottunj21=(($pkps-50000000)*15/100)+2500000;
											} else if($pkps<=500000000){
												$pottunj21=(($pkps-250000000)*25/100)+32500000;
											} else if($pkps>500000000){
												$pottunj21=(($pkps-500000000)*30/100)+95000000;
											} 
											
										
											if($pkp1<=50000000){
												$pottunj21tidak=5/100*$pkp1;
											} else if($pkp1<=250000000){
												$pottunj21tidak=(($pkp1-50000000)*15/100)+2500000;
											} else if($pkp1<=500000000){
												$pottunj21tidak=(($pkp1-250000000)*25/100)+32500000;
											} else if($pkp1>500000000){
												$pottunj21tidak=(($pkp1-500000000)*30/100)+95000000;
											}
											
											
											
											
											$pottunpph21tetap=$pottunj21tidak/12;
											
											$pottunpph21tdktetap=$pottunj21-$pottunj21tidak;
											if($sum1<=4500000){
												$pottunpph21tetap=0;
												$pottunpph21tdktetap=0;
											
											}
											$totpotpph21=$pottunpph21tdktetap+$pottunpph21tetap;
											if($jumlahx==0){
												$pottunpph21tetap=$pottunpph21tetap+$pottunpph21tdktetap;
												$pottunpph21tdktetap=0;
											}
										
											$kojags=mysqli_query($config,"UPDATE tbl_gaji SET pot_pph21_tetap='$pottunpph21tetap',pot_pph21_tidak='$pottunpph21tdktetap' WHERE id_user='$id_user' AND id_gaji='$id'");
											
										
													echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Potongan PPh-21 Tetap</td>
													<td style="text-align:right">Rp '.number_format($pottunpph21tetap , 0, ',', '.').'</td>
													<td style="text-align:center">-</td>
													</tr>';
													
													echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Potongan PPh-21 Tidak Tetap</td>
													<td style="text-align:right">Rp '.number_format($pottunpph21tdktetap , 0, ',', '.').'</td>
													<td style="text-align:center">-</td>
													</tr>';
													
													$subtotpot=$sub3+$totpotpph21;
													echo'
													<tr style="border-top:2px solid black">
													<td style="text-align:center" ><strong></strong></td>
													<td style="text-align:center" ><strong>Sub Total</strong></td>
													<td style="text-align:right" ><strong>Rp '.number_format($subtotpot , 0, ',', '.').'</strong></td>
													<td style="text-align:center" ><strong></strong></td>
													</tr>';
													
													echo'
													<tr>
													<td style="text-align:center" colspan="4"><strong>Potongan Lain</strong></td>
													</tr>';
											
										$terimagaji = mysqli_query($config, "SELECT * FROM tbl_potongan WHERE id_user='$id_user' AND id_gaji='$id'");
                                        if(mysqli_num_rows($terimagaji) > 0){
                                            $no = 0;
                                            while($row = mysqli_fetch_array($terimagaji)){
												$rain=mysqli_query($config,"SELECT uraian FROM tbl_ref_potongan WHERE id='".$row['kode_potongan']."'");
													list($uraipotong)=mysqli_fetch_array($rain);
													echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">'.$uraipotong.'</td>
													<td style="text-align:right">Rp '.number_format($row['jumlah'] , 0, ',', '.').'</td>
													<td style="text-align:center"><a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=hahas&id_user='.$id_user.'&idnya='.$row['id'].'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';
													
													echo'
                                        </tbody>
										</tr>';
                                            
										
                                }
                            } else {
                                echo '<tr><td colspan="8"><center><p class="add">Tidak ada data untuk ditampilkan. <u></u> </p></center></td></tr>';
                            }		
									$faygg=mysqli_query($config,"SELECT SUM(jumlah) FROM tbl_potongan WHERE id_user='$id_user' AND id_gaji='$id'");
									list($jumla)=mysqli_fetch_array($faygg);
									echo' <tr style="border-top:2px solid black">
													<td style="text-align:center" ><strong></strong></td>
													<td style="text-align:center"><strong>Sub Total</strong></td>
													<td style="text-align:right" ><strong>Rp '.number_format($jumla , 0, ',', '.').'</strong></td>
													<td style="text-align:center" ><strong></strong></td>
													</tr>';
									$notal=$jumla+$subtotpot;
													$mn=mysqli_query($config,"UPDATE tbl_gaji SET total_potongan='$notal' WHERE id_user='$id_user' AND id_gaji='$id'");
													echo'<tr style="background-color:rgba(255,255,0,0.9)">
													<td style="text-align:center" colspan="2"><strong>Total Potongan</strong></td>
													<td style="text-align:center" colspan="2"><strong>Rp '.number_format($notal , 0, ',', '.').'</strong></td>
													</tr>';
													$penerimaanbersih=$jumlah-$notal;
                            echo '</table>';
							echo'</div>
							
							<div class="col s12" style="text-align:center;background-color:rgba(255,255,0,0.9)">
							<h6><strong>Koreksi PPh-21 :</strong></h6>';
							$kor1=$tunpph21tdktetap+$tunpph21tetap;
							$kor2=$pottunpph21tdktetap+$pottunpph21tetap;
							$koreksis=$kor2-$kor1;
							if($koreksis>0){
								$koreksiz=$koreksis;
							} else {
								$koreksiz=0;
							}
							$cu=mysqli_query($config,"UPDATE tbl_gaji SET koreksi_pph21='$koreksiz' WHERE id_user='$id_user' AND id_gaji='$id'");
							$kong=mysqli_query($config,"SELECT koreksi_pph21 FROM tbl_gaji WHERE id_user='$id_user' AND id_gaji='$id'");
							list($koreksi)=mysqli_fetch_array($kong);
							echo'
							<h5><strong>Rp '.$koreksi.'</strong></h5>
							<hr style="background-color:black">
							</div>
							<div class="col s12" style="background-color:rgba(255,255,0,0.9)">
							<h6 style="text-align:center"><strong>PENERIMAAN BERSIH :</strong></h6>';
							$penerimaanbersihs=$penerimaanbersih+$koreksi;
							echo'
							<h5 style="text-align:center"><strong>Rp'.number_format($penerimaanbersihs , 0, ',', '.').'</strong></h5>';
							$fixkeun=mysqli_query($config,"UPDATE tbl_gaji SET penerimaan_bersih='$penerimaanbersihs' WHERE id_user='$id_user' AND id_gaji='$id'");
							echo'
							
							</div>
							
							</div>
							</li>
							</ul>';
								 ?>
							
							<?php
				echo'<div class="col m5">
					<div class="card">';
				
			
		
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
			echo'<img class="file" src="./upload/foto/batman.jpg" style="display:block;width:100%">';
		   }
		   else{
		   echo'<img class="file" src="./upload/foto/'.$rows['foto'].'" style="display:block;width:100%">'; }} ?>
		   </div>
					</div>
				
					
					
					
                <?php
                    

                        echo '
                       			<div class="col m7">
								<div class="card">
                       			<div id="asd" class="input-field col s12">
                            <i id="roro" class="material-icons prefix md-prefix" >class</i><label>Penerimaan Lain</label><br/>	
                            <select class="browser-default" name="penerimaan" id="penerimaan">';
					$query = mysqli_query($config,"SELECT * FROM tbl_jenis_penerimaan");	
							while ($row = mysqli_fetch_array($query)) {											
								echo "<option value='".$row['id']."'>".$row['uraian']."</option>";}
								echo "</select>
								</div>
								</div>";
								?>
								
							

								<script>
								$(document).ready(function(){
			
									$('.penlain').each(function(){
										var nils = $(this).data("penerimaan");
										var skw = $(this).val();
										$.post('./js/penerimaan_lain.php', { nilai : nils, id_user :<?php echo $id_user; ?>,id_select: skw,id_gaji :<?php echo $id; ?> }, function(data){
					
										});
									});
					 
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
			echo'
							<div class="input-field col s12">
								<i class="material-icons prefix md-prefix">attach_money</i>
								<input id="terima" type="text" class="validate" name="terima">
								<button id="penerimaans" class="btn-large green waves-effect waves-light col s12"><i class="material-icons">done</i> SIMPAN</button>
								</div>
                       			</div>';
					
								
								
							echo'	
						<div class="col m7">
								<div class="card">
                       			<div class="input-field col s12">
                            <i class="material-icons prefix md-prefix" >class</i><label>Potongan Lain</label><br/>	
                            <select class="browser-default" name="potongan" id="potongan">';
					$querygs = mysqli_query($config,"SELECT * FROM tbl_ref_potongan");	
							while ($rowx = mysqli_fetch_array($querygs)) {
								if($rowx['id']==28){
								echo "<option value='".$rowx['id']."' selected>".$rowx['uraian']."</option>";
								} else {
								echo "<option value='".$rowx['id']."'>".$rowx['uraian']."</option>";
								}											
								}
								echo '</select>
								</div>
								</div>
								<div class="input-field col s12">
								<i class="material-icons prefix md-prefix">attach_money</i>
								<input id="potong" type="text" class="validate" name="potong">
								<button id="potongans" class="btn-large green waves-effect waves-light col s12"><i class="material-icons">done</i> SIMPAN</button>
								</div>
								</div>
								
								<div class="col m7">
								<div class="card">
							
								';
								$wowoy=mysqli_query($config,"SELECT gaji_jm FROM tbl_identitas WHERE id_user='$id_user'");
								list($gajidia)=mysqli_fetch_array($wowoy);
								if($status_tugas==1){
									echo'
								<div class="input-field col s12">
								<i class="material-icons prefix md-prefix">attach_money</i>
								<input id="gajijma" type="text" class="validate" name="gaji_jm" value='.number_format($gajidia , 0, ',', '.').' disabled>
								<label>Gaji JM</label>
								</div>';}
								else{
									echo'
								<div class="input-field col s12">
								<i class="material-icons prefix md-prefix">attach_money</i>
								<input id="gajijma" type="text" class="validate" name="gaji_jm" value="0" disabled>
								<label>Gaji JM</label>
								</div>';
								}
								echo'
							
								</div>
								</div>
								
								';?>
								
								<script>
								$(document).ready(function(){
           
				var nilai = $('#gajijma').val();
				var input ='anjay';
				$.post('./js/penerimaan_lain.php', { input : input, nilai : nilai, id_user :<?php echo $id_user; ?>,id_gaji :<?php echo $id; ?> });
				
				
			
				
			
		   $('#potongans').click(function(){
                //Selected value
				
                var inputValue = $('#potongan').val();
				var nilai = $('#potong').val();

				
				if(nilai==''){
					alert('Data Tidak Boleh Kosong !');
				} else {
                $.post('./js/potongan_lain.php', { nilai : nilai, id_user :<?php echo $id_user; ?>,id_select: inputValue,id_gaji :<?php echo $id; ?> }, function(data){
                    
                    
					$("#potong").val(data);
					alert('Data Berhasil Di Input !');
					location.reload();
					
		   });}
		   
           
        });
	
		 });
			   </script>
			   
					<div id="pot1" class="col m4">
					</div>


			<?php 
			
			
			
			echo'
								<div class="col m12" id="colres">
								<ul class="collapsible">
								<li>
								 <div class="collapsible-header active" style="background-color:transparent"><i class="material-icons prefix md-36" style="margin-top:-9px!important">add</i><h5>Ket. Presensi</h5></div>
								 <div class="collapsible-body" style="background-color:transparent!important">
                                <div class="col m12" id="colres">
									
                                    <table class="bordered" id="tblb">
                                        <thead class="blue lighten-4" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                                            <tr>
											<th width="1%"style="color:#fff">Nomor</th>
											<th width="25%"style="color:#fff">Presensi</th>
											<th width="15%"style="color:#fff">Bulan</th>
											<th width="15%"style="color:#fff">Keterlambatan</th>
                                                
                                            </tr>
											
                                        </thead>

                                        <tbody>
                                            <tr>';
										 $sekut=mysqli_query($config,"SELECT id,bulan FROM tbl_presensi WHERE MONTH(bulan)='$blan' AND YEAR(bulan)='$than'");
										 list($sikux,$bulanc)=mysqli_fetch_array($sekut);
										 $titit=mysqli_query($config,"SELECT nip,nama FROM tbl_user WHERE id_user='$id_user'");
										 list($nyusu,$namas)=mysqli_fetch_array($titit);
                                         $query2 = mysqli_query($config, "SELECT DISTINCT nik FROM tbl_presensi_karyawan WHERE nik='$nyusu' AND id_presensi='$sikux'");
										
                                        if(mysqli_num_rows($query2) > 0){
                                            $no = 0;
                                            while($row = mysqli_fetch_array($query2)){
												
                                            $no++;
                                             echo ' <tr>
													<td style="text-align:center">'.$no.'</td>
                                                    <td style="text-align:center"><button id="tots" class="btn green">LIHAT</button></td>
													<td style="text-align:center">'. date('M Y ', strtotime($bulanc)).'</td>
													<td style="text-align:center"><h6 id="hoak"></h6></td>';
										
									

											echo'
													
                                            
                                        </tbody>
										</tr>';
                                            
										
								}
								$tokent = bin2hex(mt_rand(0,9999));
								$_SESSION['tokent']=$tokent;
								$nnngj=mysqli_query($config,"SELECT menit_telat FROM tbl_handle");
								list($mkgg)=mysqli_fetch_array($nnngj);
								echo '
                                          <script>
                                          $(document).ready(function(){
											  
											  $(\'#penerimaan\').val(5);
											var token = '.$tokent.';
											var user = '.$id_user.';
											$.post(\'./js/ajaxpresensi.php\', {id : '.$sikux.', token : token, user : user}, function(data){
												$("#anjas").html(data);
												var hakhu=$("#telatbos").val();
												var hakhus=$("#cepatbos").val();
												var num = (hakhu/'.$mkgg.')*'.$sub1.';
												var num1 = (hakhus/'.$mkgg.')*'.$sub1.';
												var nums = num+num1;
												var xz = nums.toFixed(0).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
												
											
											$("#hoak").html("Rp " + xz);
											var xr = $(\'#hoak\').html().replace(/[^0-9]+/g, "");;
											$(\'#potong\').val(xr);
											});
											
                                          $(\'#tots\').click(function(){
										  $(\'#modalsz\').openModal();
										  });
										 
										
											$(\'#potongan\').change(function(){
												var mog=$(this).val();
												if(mog == 28){
													var xr = $(\'#hoak\').html().replace(/[^0-9]+/g, "");;
													$(\'#potong\').val(xr);	
												} else {
												$("#potong").val(\'\');}
											});

											var mo = $(\'#eding\').html().replace(/[^0-9]+/g, "");;
											$(\'#terima\').val(mo);
										
										 $(\'#penerimaan\').change(function(){
										var kuy = $(this).val();
										if (kuy==1){
											$(\'#terima\').val('.$jumlahthr.');
										} else if(kuy==5){
											var mo = $(\'#eding\').html().replace(/[^0-9]+/g, "");;
											$(\'#terima\').val(mo);
											} else {
												$(\'#terima\').val(\'\');
										}
									});	 
								   
																	
                                          });
										  </script>';
										  echo '<div id="modalsz" class="modal" style="width:80%">
        
										  <div class="modal-content" id="anjas">
										  
										  </div>
										
										  </div>';     	
                            } else {
                                echo '<tr><td colspan="8"><center><p class="add">Tidak ada data untuk ditampilkan. <u></u> </p></center></td></tr>';
                            }
                            echo '</table>
							</div>
							</div>
							</div>
							</li>
							</ul>';
							echo '
							<div class="col m12" id="colres">
								<ul class="collapsible">
								<li>
								 <div class="collapsible-header active" style="background-color:transparent"><i class="material-icons prefix md-36" style="margin-top:-9px!important">add</i><h5>Cuti</h5></div>
								 <div class="collapsible-body" style="background-color:transparent!important">
							<div class="col m12" id="colres">
                        
                        <table class="bordered" id="tblr">
                            <thead class="blue lighten-4" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" id="head">
                                 <tr>
									<th width="1%"style="color:#fff">Nomor</th>
                                        <th width="20%"style="color:#fff">Nama</th>
                                        <th width="15%"style="color:#fff">Alasan</th>
										<th width="12%"style="color:#fff">Tanggal Awal</th>
										<th width="12%"style="color:#fff">Tanggal Akhir</th>
										<th width="10%" style="color:#fff">Status Manager</th>
										<th width="10%" style="color:#fff">Status GM</th>
										<th width="10%" style="color:#fff">Status SDM</th>
										<th width="20%" style="color:#fff">Jumlah Hari</th>
										
									
                                </tr>
                            </thead>

                            <tbody>
                                <tr>';
							$queryq = mysqli_query($config, "SELECT * FROM tbl_cuti WHERE id_user='$id_user' AND(MONTH(tgl_awal)='$blan' AND YEAR(tgl_awal)='$than')");
								 
                                if(mysqli_num_rows($queryq) > 0){
                                    $no = 1;
                                    while($row = mysqli_fetch_array($queryq)){
										$ioko=mysqli_query($config,"SELECT nama,admin FROM tbl_user WHERE id_user='".$row['id_user']."'");
										list($nama,$admin)=mysqli_fetch_array($ioko);
                                      echo '
                                        <td style="text-align:center">'.$no++.'</td>
										<td style="text-align:center">'.$nama.'</td>
										<td style="text-align:center">'.$row['alasan'].'</td>
										<td style="text-align:center">'.$tgl = date('d M Y ', strtotime($row['tgl_awal'])).'</td>
										<td style="text-align:center">'.$tgl = date('d M Y ', strtotime($row['tgl_akhir'])).'</td>';
                                     
									if($_SESSION['admin'] == 5 || $_SESSION['admin']== 1){
									if($row['status_manager']==1){	
									echo'
									<td style="text-align:center">
                                 	<a class="btn small light-green waves-effect waves-light tooltipped" name="simpans" onclick="return confirm(\'Anda yakin ingin membatalkan cuti?\');" href="?page=cuti&act=approvem&ids=OikJfDsS&id='.$row['id'].'" data-position="left" data-tooltip="Klik Untuk MEMBATALKAN cuti">
                                    <i class="material-icons">done</i> APPROVED</a></td>';
									} else {
										echo'
										<td style="text-align:center">
										<a class="btn small red waves-effect waves-light tooltipped" name="simpans" href="?page=cuti&act=approvem&ids=kfjYghB&id='.$row['id'].'" data-position="left" data-tooltip="Klik Untuk MENYETUJUI cuti" onclick="return confirm(\'Anda yakin ingin menyetujui cuti?\');">
                                    <i class="material-icons">highlight_off</i> APPROVE</a></td>';}
									
									}
									else {
										if($row['status_manager']==1){	
									echo'
									<td style="text-align:center">
                                 	<a class="btn small light-green waves-effect waves-light tooltipped" name="simpans" data-position="left" data-tooltip="Cuti sudah disetujui">
                                    <i class="material-icons">done</i> APPROVED</a></td>';
									} else {
										echo'
										<td style="text-align:center">
										<a class="btn small red waves-effect waves-light tooltipped" name="simpans" data-position="left" data-tooltip="Cuti belum disetujui">
                                    <i class="material-icons">highlight_off</i> APPROVE</a></td>';}}
									
									
									
									
									
									
									if($_SESSION['admin'] == 4 || $_SESSION['admin']== 1){
									if($row['status_gm']==1){	
									echo'
									<td style="text-align:center">
                                 	<a class="btn small light-green waves-effect waves-light tooltipped" name="simpans" href="?page=cuti&act=approveg&ids=MjgnNg&id='.$row['id'].'" data-position="left" data-tooltip="Klik Untuk membatalkan Persetujuan" onclick="return confirm(\'Anda yakin ingin membatalkan cuti?\');">
                                    <i class="material-icons">done</i> APPROVED</a></td>';
									} else {
										echo'
										<td style="text-align:center">
										<a class="btn small red waves-effect waves-light tooltipped" name="simpans" href="?page=cuti&act=approveg&ids=QuJguJ&id='.$row['id'].'" data-position="left" data-tooltip="Klik Untuk menerima / approve Cuti" onclick="return confirm(\'Anda yakin ingin menyetujui cuti?\');">
                                    <i class="material-icons">highlight_off</i> APPROVE</a></td>';}}
										else {
											if($row['status_gm']==0){	
									echo'
										<td style="text-align:center">
										<a class="btn small red waves-effect waves-light tooltipped" name="simpans" data-position="left" data-tooltip="Cuti belum disetujui">
										<i class="material-icons">highlight_off</i> APPROVE</a></td>';
									} else {
										echo'
										<td style="text-align:center">
                                 	<a class="btn small light-green waves-effect waves-light tooltipped" name="simpans" data-position="left" data-tooltip="Cuti sudah disetujui">
                                    <i class="material-icons">done</i> APPROVED</a></td>';}}
										

											
										if($row['status_sdm']==0){
										echo'
										<td style="text-align:center">
										<a class="btn small red waves-effect waves-light tooltipped" name="simpans" data-position="left" data-tooltip="Klik Untuk menerima / approve Cuti"';
										if($_SESSION['admin']==1){echo'
										href="?page=cuti&act=approves&ids=zZz&id='.$row['id'].'" 
										onclick="return confirm(\'Anda yakin ingin menyetujui cuti?\');"';}
										echo'
										><i class="material-icons">highlight_off</i> APPROVE</a></td>';}
										else{
										echo'
										<td style="text-align:center">
										<a class="btn small light-green waves-effect waves-light tooltipped" name="simpans"  data-position="left" data-tooltip="Klik Untuk membatalkan Persetujuan"';
										if($_SESSION['admin']==1){echo'
										href="?page=cuti&act=approves&ids=ZzZ&id='.$row['id'].'" 
										onclick="return confirm(\'Anda yakin ingin membatalkan cuti?\');"';}
										echo'
										><i class="material-icons">done</i> APPROVED</a></td>';	
										}

										
										
										$perbedaans = mysqli_real_escape_string($config,date_diff(date_create($row['tgl_akhir']), date_create($row['tgl_awal']))->d)+1;
										$nyoc = mysqli_real_escape_string($config,date_diff(date_create($row['tgl_akhir']), date_create($row['tgl_awal']))->m);
										$haritot=0;
										$nmp=array();
						
										for($i=0;$i<$perbedaans;$i++){
											
											$wikwik=date('Y-m-d', strtotime($row['tgl_awal'].'+'.$haritot.' days'));	
											$yoo=date('N',strtotime($wikwik));
											$haritot=$haritot+1;
											if($yoo<6){
												array_push($nmp,1);
											}
										}
										$c=array_sum($nmp);
									echo'<td style="text-align:center">'.$c.' Hari</td>
                                    </tr>
                                </tbody>';
                                }
                            } else {
                                echo '<tr><td colspan="9"><center><p class="add">Tidak ada data untuk ditampilkan. <u></u> </p></center></td></tr>';
                            }
                            echo '</table>
							</div>
							</div>
							</div>
							</li>
							</ul>
							<div class="col m12" id="colres">
								<ul class="collapsible">
								<li>
								 <div class="collapsible-header active" style="background-color:transparent"><i class="material-icons prefix md-36" style="margin-top:-9px!important">add</i><h5>Lembur</h5></div>
								 <div class="collapsible-body" style="background-color:transparent!important">
							<div class="col m12" id="colres">
							<small>* Baris berwarna kuning merupakan hari libur mingguan</small><br>
							<small>* Baris berwarna merah merupakan Tanggal Merah tahunan</small>
							<table class="bordered" id="tblb">
                                        <thead class="blue lighten-4" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                                            <tr>
                                                <th width="1%" rowspan="2">No</th>
                                                <th width="20%" rowspan="2">Nama</th>
                                                <th width="15%" rowspan="2">Tanggal</th>
												<th width="16%" rowspan="2">Deskripsi Pekerjaan</th>
												<th width="14%" colspan="2" style="border-bottom:1px solid black">Jam Lembur</th>
												<th width="1%" rowspan="2">Terhitung</th>
												<th width="14%" rowspan="2">Status Manager</th>
												<th width="14%" rowspan="2">Status GM</th>
                                                <th width="10%" rowspan="2">Tindakan</th>
                                            </tr>
											<tr>
											 <th width="7%">Awal</th>
                                                <th width="7%">Akhir</th>
											</tr>
                                        </thead>

                                        <tbody>
                                            ';
										
                                        $query2d = mysqli_query($config, "SELECT * FROM tbl_lembur WHERE id_user='$id_user' AND(MONTH(tanggal)='$blan' AND YEAR(tanggal)='$than')");
										$lmbrk=mysqli_query($config,"SELECT jam_bulan,tarif_manager FROM tbl_handle WHERE id=1");
										list($jam_lembur,$tarfman)=mysqli_fetch_array($lmbrk);
									$tat=array();
									$tat1=array();
									$nong=array();
									$mingguan=array();
									$tmpminggu=array();
									
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
												echo '<tr style="background-color:yellow">';
												
													$byrlm=(2/$jam_lembur*$sub1)*$hourdiff;
													array_push($nong,$byrlm);
											
											} else if(mysqli_num_rows($yaw)>0){
												echo '<tr style="background-color:red">';	
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
													echo ' <tr>';
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
											
											 echo'
											 		<td style="text-align:center">'.$no.'</td>
                                                    <td style="text-align:center">'.$namas.'</td>
                                                    <td style="text-align:center">'.date('d', strtotime($row['tanggal'])).' - '.date('M', strtotime($row['tanggal'])).' - '.date('Y', strtotime($row['tanggal'])).'</td>
													<td style="text-align:center">'.$row['pekerjaan'].'</td>
													<td style="text-align:center">'.$row['jam_awal'].'</td>
													<td style="text-align:center">'.$row['jam_akhir'].'</td>';

										
										echo'
										
										<td style="text-align:center">'.$hourdiff.' Jam</td>
										<td style="text-align:center">';
										if($_SESSION['admin']==1 || $_SESSION['admin']==5){
										if($row['status_manager']==1){										
											  echo'
											<a class="btn small light-green waves-effect waves-light tooltipped" href="?page=lmbr&sub=manager&id='.$row['id'].'&id_presensi='.$row['id_presensi'].'&tak=mMyu" data-position="left" data-tooltip="Klik untuk membatalkan persetujuan" onclick="return confirm(\'Anda yakin ingin mengubah data?\');">
											<i class="material-icons">done</i></a>';} 
											else {
											echo'
											<a class="btn small red waves-effect waves-light tooltipped" href="?page=lmbr&sub=manager&id='.$row['id'].'&id_presensi='.$row['id_presensi'].'&tak=NnsJ" data-position="left" data-tooltip="Klik untuk Menyetujui" onclick="return confirm(\'Anda yakin ingin mengubah data?\');">
										<i class="material-icons">highlight_off</i></a>';}}
										else {
											if($row['status_manager']==1){										
											  echo'
											<a class="btn small light-green waves-effect waves-light tooltipped" data-position="left" data-tooltip="Klik untuk membatalkan persetujuan">
											<i class="material-icons">done</i></a>';} 
											else {
											echo'
											<a class="btn small red waves-effect waves-light tooltipped" data-position="left" data-tooltip="Klik untuk Menyetujui">
										<i class="material-icons">highlight_off</i></a>';}
										}
										
										
										
										echo'</td>';
										
										
										echo'
										<td style="text-align:center">';
										
										if($_SESSION['admin']==1 || $_SESSION['admin']==4){
										if($row['status_gm']==1){										
											  echo'
											<a class="btn small light-green waves-effect waves-light tooltipped" href="?page=lmbr&sub=manager&id='.$row['id'].'&id_presensi='.$row['id_presensi'].'&tak=IuJh" data-position="left" data-tooltip="Klik untuk membatalkan persetujuan" onclick="return confirm(\'Anda yakin ingin mengubah data?\');">
											<i class="material-icons">done</i></a>';} 
											else {
											echo'
											<a class="btn small red waves-effect waves-light tooltipped" href="?page=lmbr&sub=manager&id='.$row['id'].'&id_presensi='.$row['id_presensi'].'&tak=OkgJ" data-position="left" data-tooltip="Klik untuk Menyetujui" onclick="return confirm(\'Anda yakin ingin mengubah data?\');">
										<i class="material-icons">highlight_off</i></a>';}}
										else{
										if($row['status_gm']==1){										
											  echo'
											<a class="btn small light-green waves-effect waves-light tooltipped" data-position="left" data-tooltip="Klik untuk membatalkan persetujuan">
											<i class="material-icons">done</i></a>';} 
											else {
											echo'
											<a class="btn small red waves-effect waves-light tooltipped" data-position="left" data-tooltip="Klik untuk Menyetujui">
										<i class="material-icons">highlight_off</i></a>';}	
										}
										
										echo'</td>';
										
													
										echo'
										<td style="text-align:center">';
										if($row['id_user']!=$_SESSION['id_user'] && $_SESSION['admin']!=1){
											echo '<button class="btn small blue-grey waves-effect waves-light"><i class="material-icons">error</i> No Action</button>';
										}
										else{
										echo'
										<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Lembur" href="?page=lmbr&sub=del&id='.$row['id'].'&id_presensi='.$row['id_presensi'].'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
										<i class="material-icons">delete</i> DEL</a></td>';}

											echo'
													
                                            </tr>
										</tbody>';
										
												
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
										
										
											echo '<tr><td style="text-align:center"colspan="10">Total Jam Lembur adalah :<b> '.$yowko.'</b> Jam <b>'.$yowka.'</b> Menit</td></tr>';
											echo '<tr><td style="text-align:center"colspan="10">Total Estimasi Bayaran Lembur:<h6 id="eding"> <b>Rp '.number_format($cocoktanam , 0, ',', '.').'</b></h6></td></tr>';
                                        } else {
                                            echo '<tr><td colspan="10"><center><p class="add">Tidak ada data untuk ditampilkan.</p></center></td></tr>';
                                        }
                                echo '</table>
								</div>
								</div>
								</div>
								</li>
								</ul>
							
							
							
                        </div>
                    <div class="input-field col s12">
				
				
				<a name="simpanseluruh" style="line-height:30px!important" href="?page=pros&sub=dada&id='.$id.'&id_user='.$id_user.'" class="btn-large green waves-effect waves-light col s12" onclick="return confirm(\'Anda yakin ingin menyimpan data?\');"><i class="material-icons">done</i> SIMPAN</a>
			
				</div>
					<!-- Row form END -->
					
					';
				
					
							
                 
					
					
								
								
            
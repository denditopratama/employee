
<?php
				$id_user=mysqli_real_escape_string($config,$_REQUEST['karyawan']);
				

							$pgntau=mysqli_query($config,"SELECT nama FROM tbl_user WHERE id_user='$id_user'");
							list($tau)=mysqli_fetch_array($pgntau);
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
									
                                        $querye = mysqli_query($config, "SELECT * FROM tbl_gaji WHERE id_user='$id_user' AND id_gaji='$id'");
										$jmk = mysqli_query($config, "SELECT gaji_jm,telat,absen FROM tbl_gaji WHERE id_user='$id_user' AND id_gaji='$id'");
										list($gajipusat,$telatku,$absenku)=mysqli_fetch_array($jmk);
										
										$numpang=mysqli_query($config,"SELECT admin,status_karyawan,status_tugas FROM tbl_user WHERE id_user='$id_user'");
										list($admin,$status_karyawan,$status_tugas)=mysqli_fetch_array($numpang);
										$gajing=mysqli_query($config,"SELECT gaji,t_jabatan,t_fungsional,t_transportasi,t_utilitas,t_perumahan,t_komunikasi FROM tbl_gaji_pokok WHERE admin='$admin' AND(status_karyawan='$status_karyawan' AND status_tugas='$status_tugas')");
										list($gajix,$tun_jabatan,$tun_fungsional,$tun_transportasi,$tun_utilitas,$tun_perumahan,$tun_komunikasi)=mysqli_fetch_array($gajing);
										
													
													echo'
													<tr>
													<td style="text-align:center" colspan="4"><strong>Penerimaan Gaji</strong></td>
													</tr>';
													
													echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Gaji Pokok</td>
													<td style="text-align:center">Rp '.number_format($gajix , 0, ',', '.').'</td>
													<td style="text-align:center">-</td>
													</tr>';
													if($tun_jabatan!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Tunjangan Jabatan</td>
													<td style="text-align:center">Rp '.number_format($tun_jabatan , 0, ',', '.').'</td>
													<td style="text-align:center">-</td>
													</tr>';}
													if($tun_fungsional!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Tunjangan Fungsional</td>
													<td style="text-align:center">Rp '.number_format($tun_fungsional , 0, ',', '.').'</td>
													<td style="text-align:center">-</td>
													</tr>';}
													
													if($tun_transportasi!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Tunjangan Transportasi</td>
													<td style="text-align:center">Rp '.number_format($tun_transportasi , 0, ',', '.').'</td>
													<td style="text-align:center">-</td>
													</tr>';}
													
													if($tun_utilitas!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Tunjangan Utilitas</td>
													<td style="text-align:center">Rp '.number_format($tun_utilitas , 0, ',', '.').'</td>
													<td style="text-align:center">-</td>
													</tr>';}
													
													if($tun_perumahan!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Tunjangan Perumahan</td>
													<td style="text-align:center">Rp '.number_format($tun_perumahan , 0, ',', '.').'</td>
													<td style="text-align:center">-</td>
													</tr>';}
													
													if($tun_komunikasi!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Tunjangan Komunikasi</td>
													<td style="text-align:center">Rp '.number_format($tun_komunikasi , 0, ',', '.').'</td>
													<td style="text-align:center">-</td>
													</tr>';}
													
													$sub1=$gajix+$tun_jabatan+$tun_fungsional+$tun_transportasi+$tun_utilitas+$tun_perumahan+$tun_komunikasi;
													echo'
													<tr>
													<td style="text-align:center" ><strong></strong></td>
													<td style="text-align:center"><strong>Sub Total</strong></td>
													<td style="text-align:center" ><strong>Rp '.number_format($sub1 , 0, ',', '.').'</strong></td>
													<td style="text-align:center" ><strong></strong></td>
													</tr>';
													
													echo'
													<tr>
													<td style="text-align:center" colspan="4"><strong>Penerimaan Umum</strong></td>
													</tr>';
													
													if($status_tugas==1){
														$jamgaji=4.54/100*$gajipusat;
														$potjamgaji=6.54/100*$gajipusat;
													}
													else {
														$jamgaji=4.54/100*$gajix+$tun_jabatan+$tun_fungsional+$tun_transportasi+$tun_utilitas+$tun_perumahan+$tun_komunikasi;
														$potjamgaji=6.54/100*$gajix+$tun_jabatan+$tun_fungsional+$tun_transportasi+$tun_utilitas+$tun_perumahan+$tun_komunikasi;
													}
													$wakd=mysqli_query($config,"UPDATE tbl_gaji SET pen_jamsostek='$jamgaji' WHERE id_user='$id_user' AND id_gaji='$id'");
													echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Jamsostek</td>
													<td style="text-align:center">Rp '.number_format($jamgaji , 0, ',', '.').'</td>
													<td style="text-align:center">-</td>
													</tr>';
													
													if($status_tugas==1){
														$bpjspensiun=2/100*$gajipusat;
														$potbpjspensiun=3/100*$gajipusat;
													}
													else {
														$bpjspensiun=2/100*$gajix+$tun_jabatan+$tun_fungsional+$tun_transportasi+$tun_utilitas+$tun_perumahan+$tun_komunikasi;
														$potbpjspensiun=3/100*$gajix+$tun_jabatan+$tun_fungsional+$tun_transportasi+$tun_utilitas+$tun_perumahan+$tun_komunikasi;
													}
													$wakd=mysqli_query($config,"UPDATE tbl_gaji SET bpjstk_jampes='$bpjspensiun' WHERE id_user='$id_user' AND id_gaji='$id'");
													echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">BPJSTK Jaminan Pensiun</td>
													<td style="text-align:center">Rp '.number_format($bpjspensiun , 0, ',', '.').'</td>
													<td style="text-align:center">-</td>
													</tr>';
													
													if($status_tugas==1){
														$bpjskesehatan=4/100*$gajipusat;
														$potbpjskesehatan=5/100*$gajipusat;
													}
													else {
														$bpjskesehatan=4/100*$gajix+$tun_jabatan+$tun_fungsional+$tun_transportasi+$tun_utilitas+$tun_perumahan+$tun_komunikasi;
														$potbpjskesehatan=5/100*$gajix+$tun_jabatan+$tun_fungsional+$tun_transportasi+$tun_utilitas+$tun_perumahan+$tun_komunikasi;
													}
													$wakd=mysqli_query($config,"UPDATE tbl_gaji SET bpjstk_jamkes='$bpjskesehatan' WHERE id_user='$id_user' AND id_gaji='$id'");
													echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">BPJSTK Jaminan Kesehatan</td>
													<td style="text-align:center">Rp '.number_format($bpjskesehatan , 0, ',', '.').'</td>
													<td style="text-align:center">-</td>
													</tr>';
													
													$sub2=$bpjskesehatan+$bpjspensiun+$jamgaji;
													echo'
													<tr>
													<td style="text-align:center" ><strong></strong></td>
													<td style="text-align:center"><strong>Sub Total</strong></td>
													<td style="text-align:center" ><strong>Rp '.number_format($sub2 , 0, ',', '.').'</strong></td>
													<td style="text-align:center" ><strong></strong></td>
													</tr>';
													
													echo'
													<tr>
													<td style="text-align:center" colspan="4"><strong>Penerimaan Lain</strong></td>
													</tr>';
													
													
													
                                        if(mysqli_num_rows($querye) > 0){
                                            $no = 0;
                                            while($row = mysqli_fetch_array($querye)){
													
													if($row['gaji_jm']!=0){
														echo'
													
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Gaji JM</td>
													<td style="text-align:center">Rp '.number_format($row['gaji_jm'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=haha&nomer=gajijm&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>
													
													';}
													
													if($row['rapel_lembur']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Rapel Lembur</td>
													<td style="text-align:center">Rp '.number_format($row['rapel_lembur'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=haha&nomer=rapel_lembur&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['rapel_penerimaan']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Rapel Penerimaan</td>
													<td style="text-align:center">Rp '.number_format($row['rapel_penerimaan'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=haha&nomer=rapel_penerimaan&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['fas_cop']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Fasilitas Karyawan / COP</td>
													<td style="text-align:center">Rp '.number_format($row['fas_cop'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=haha&nomer=fas_cop&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['rapel_honor']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Rapel Honor</td>
													<td style="text-align:center">Rp '.number_format($row['rapel_honor'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=haha&nomer=rapel_honor&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['tam_jamsos']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Tambahan Jamsostek</td>
													<td style="text-align:center">Rp '.number_format($row['tam_jamsos'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=haha&nomer=tam_jamsos&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['jaminan_pensiun']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Jaminan Pensiun</td>
													<td style="text-align:center">Rp '.number_format($row['jaminan_pensiun'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=haha&nomer=jaminan_pensiun&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['bpjsks']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">BPJS Kesehatan</td>
													<td style="text-align:center">Rp '.number_format($row['bpjsks'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=haha&nomer=bpjsks&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['rapel_jaminan']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Rapel Jaminan Pensiun</td>
													<td style="text-align:center">Rp '.number_format($row['rapel_jaminan'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=haha&nomer=rapel_jaminan&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['rapel_bpjsks']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Rapel BPJS Kesehatan</td>
													<td style="text-align:center">Rp '.number_format($row['rapel_bpjsks'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=haha&nomer=rapel_bpjsks&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['rapel_bpjskt']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Rapel BPJS Ketenagakerjaan</td>
													<td style="text-align:center">Rp '.number_format($row['rapel_bpjskt'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=haha&nomer=rapel_bpjskt&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['penerimaan_lainnya']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Penerimaan Lainnya</td>
													<td style="text-align:center">Rp '.number_format($row['penerimaan_lainnya'], 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=haha&nomer=penerimaan_lainnya&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['lembur']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Lembur</td>
													<td style="text-align:center">Rp '.number_format($row['lembur'], 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=haha&nomer=lembur&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['thr']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">THR</td>
													<td style="text-align:center">Rp '.number_format($row['thr'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=haha&nomer=thr&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['jasprod']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Jasa Produksi</td>
													<td style="text-align:center">Rp '.number_format($row['jasprod'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=haha&nomer=jasprod&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['ongkos_cuti']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Ongkos Cuti</td>
													<td style="text-align:center">Rp '.number_format($row['ongkos_cuti'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=haha&nomer=ongkos_cuti&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['bantuan_pengobatan']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Ongkos Cuti</td>
													<td style="text-align:center">Rp '.number_format($row['bantuan_pengobatan'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=haha&nomer=bantuan_pengobatan&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													$fay=mysqli_query($config,"SELECT thr+jasprod+ongkos_cuti+bantuan_pengobatan+lembur+rapel_lembur+rapel_penerimaan+fas_cop+rapel_honor+tam_jamsos+jaminan_pensiun+bpjsks+rapel_jaminan+rapel_bpjsks+rapel_bpjskt+penerimaan_lainnya FROM tbl_gaji WHERE id_user='$id_user' AND id_gaji='$id'");
													list($jumlahx)=mysqli_fetch_array($fay);
													echo'
													<tr>
													<td style="text-align:center" ><strong></strong></td>
													<td style="text-align:center"><strong>Sub Total</strong></td>
													<td style="text-align:center" ><strong>Rp '.number_format($jumlahx , 0, ',', '.').'</strong></td>
													<td style="text-align:center" ><strong></strong></td>
													</tr>';
													
									echo'
                                        </tbody>
										</tr>';
                                            
										
                                }
                            } else {
                                echo '<tr><td colspan="8"><center><p class="add">Tidak ada penerimaan lain. <u></u> </p></center></td></tr>';
                            }
													
													$jumlah=$jumlahx+$sub2+$sub1;
													$mn=mysqli_query($config,"UPDATE tbl_gaji SET total_penerimaan='$jumlah' WHERE id_user='$id_user' AND id_gaji='$id'");
														echo'
													<tr style="background-color:yellow">
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
									
                                        $querye = mysqli_query($config, "SELECT * FROM tbl_gaji WHERE id_user='$id_user' AND id_gaji='$id'");
										
										
													echo'
													<tr>
													<td style="text-align:center" colspan="4"><strong>Potongan Umum</strong></td>
													</tr>';
													$wakd=mysqli_query($config,"UPDATE tbl_gaji SET pot_jamsostek_kar='$potjamgaji' WHERE id_user='$id_user' AND id_gaji='$id'");
													echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Jamsostek</td>
													<td style="text-align:center">Rp '.number_format($potjamgaji , 0, ',', '.').'</td>
													<td style="text-align:center">-</td>
													</tr>';
													$wakd=mysqli_query($config,"UPDATE tbl_gaji SET pot_bpjstk_jampes='$potbpjspensiun' WHERE id_user='$id_user' AND id_gaji='$id'");
													echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">BPJSTK Jaminan Pensiun</td>
													<td style="text-align:center">Rp '.number_format($potbpjspensiun , 0, ',', '.').'</td>
													<td style="text-align:center">-</td>
													</tr>';
													$wakd=mysqli_query($config,"UPDATE tbl_gaji SET pot_bpjstk_jamkes='$potbpjskesehatan' WHERE id_user='$id_user' AND id_gaji='$id'");
													echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">BPJSTK Jaminan Kesehatan</td>
													<td style="text-align:center">Rp '.number_format($potbpjskesehatan , 0, ',', '.').'</td>
													<td style="text-align:center">-</td>
													</tr>';
													
													$sub3=$potbpjskesehatan+$potbpjspensiun+$potjamgaji;
													echo'
													<tr>
													<td style="text-align:center" ><strong></strong></td>
													<td style="text-align:center"><strong>Sub Total</strong></td>
													<td style="text-align:center" ><strong>Rp '.number_format($sub3 , 0, ',', '.').'</strong></td>
													<td style="text-align:center" ><strong></strong></td>
													</tr>';
													
													echo'
													<tr>
													<td style="text-align:center" colspan="4"><strong>Potongan Lain</strong></td>
													</tr>';
		
                                        if(mysqli_num_rows($querye) > 0){
                                            $no = 0;
                                            while($row = mysqli_fetch_array($querye)){
												
													
                                            
													
													if($row['pot_thr']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">THR</td>
													<td style="text-align:center">Rp '.number_format($row['pot_thr'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=hahas&nomer=thr&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['pot_jasprod']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Jasa Produksi</td>
													<td style="text-align:center">Rp '.number_format($row['pot_jasprod'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=hahas&nomer=jasprod&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['pot_ongkos_cuti']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Ongkos Cuti</td>
													<td style="text-align:center">Rp '.number_format($row['pot_ongkos_cuti'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=hahas&nomer=ongcut&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['pot_bantuan']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Bantuan</td>
													<td style="text-align:center">Rp '.number_format($row['pot_bantuan'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=hahas&nomer=bantuan&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['pot_kesehatan']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Kesehatan</td>
													<td style="text-align:center">Rp '.number_format($row['pot_kesehatan'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=hahas&nomer=kesehatan&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['pot_koperasi']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Koperasi</td>
													<td style="text-align:center">Rp '.number_format($row['pot_koperasi'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=hahas&nomer=koperasi&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['pot_koperasi_pusat']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Koperasi Pusat</td>
													<td style="text-align:center">Rp '.number_format($row['pot_koperasi_pusat'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=hahas&nomer=koperasipusat&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['pot_iuran_dapen']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Iuran Dapen</td>
													<td style="text-align:center">Rp '.number_format($row['pot_iuran_dapen'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=hahas&nomer=dapen&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['pot_iuran_purnakarya']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Iuran Purnakarya</td>
													<td style="text-align:center">Rp '.number_format($row['pot_iuran_purnakarya'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=hahas&nomer=purnakarya&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['pot_iuran_tht']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Iuran THT(PNS-JM)</td>
													<td style="text-align:center">Rp '.number_format($row['pot_iuran_tht'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=hahas&nomer=tht&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['pot_asuransi_kendaraan']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Asuransi Kendaraan</td>
													<td style="text-align:center">Rp '.number_format($row['pot_asuransi_kendaraan'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=hahas&nomer=kendaraan&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['pot_saham_jasamarga']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Saham Jasa Marga</td>
													<td style="text-align:center">Rp '.number_format($row['pot_saham_jasamarga'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=hahas&nomer=jm&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['pot_umr']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">UMR/UMK/UMP Jasa Marga</td>
													<td style="text-align:center">Rp '.number_format($row['pot_umr'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=hahas&nomer=umr&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['pot_koperasi_jmb']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Koperasi JMB</td>
													<td style="text-align:center">Rp '.number_format($row['pot_koperasi_jmb'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=hahas&nomer=jmb&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['pot_koperasi_cirebon']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Koperasi Cirebon</td>
													<td style="text-align:center">Rp '.number_format($row['pot_koperasi_cirebon'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=hahas&nomer=cirebon&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['pot_iuran_dplk']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Iuran DPLK BNI SIMPONI</td>
													<td style="text-align:center">Rp '.number_format($row['pot_iuran_dplk'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=hahas&nomer=dplk&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['pot_rapel_jaminan_pensiun']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Rapel Jaminan Pensiun</td>
													<td style="text-align:center">Rp '.number_format($row['pot_rapel_jaminan_pensiun'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=hahas&nomer=rapelpensiun&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['pot_jaminan_pensiun']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Jaminan Pensiun</td>
													<td style="text-align:center">Rp '.number_format($row['pot_jaminan_pensiun'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=hahas&nomer=jaminanpensiun&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['pot_bpjs_karyawan']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">BPJS Karyawan</td>
													<td style="text-align:center">Rp '.number_format($row['pot_bpjs_karyawan'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=hahas&nomer=bjps&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['pot_jamsostek']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Jamsostek</td>
													<td style="text-align:center">Rp '.number_format($row['pot_jamsostek'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=hahas&nomer=jamsostek&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['pot_iuran_pasti']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Iuran Pasti</td>
													<td style="text-align:center">Rp '.number_format($row['pot_iuran_pasti'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=hahas&nomer=iuranpasti&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['pot_iuran_skjm']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Iuran SKJM</td>
													<td style="text-align:center">Rp '.number_format($row['pot_iuran_skjm'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=hahas&nomer=iuranskjm&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['pot_premi']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Premi Asuransi Multiguna</td>
													<td style="text-align:center">Rp '.number_format($row['pot_premi'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=hahas&nomer=premi&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['pot_rapel_bpjs_kesehatan']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Rapel BPJS Kesehatan</td>
													<td style="text-align:center">Rp '.number_format($row['pot_rapel_bpjs_kesehatan'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=hahas&nomer=rapelbpjsks&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['pot_rapel_bpjs_ketenagakerjaan']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Rapel BPJS Ketenagakerjaan</td>
													<td style="text-align:center">Rp '.number_format($row['pot_rapel_bpjs_ketenagakerjaan'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=hahas&nomer=rapelbpjskt&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['absen']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Tidak Hadir</td>
													<td style="text-align:center">Rp '.number_format($row['absen'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=hahas&nomer=absen&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
												
													
													if($row['telat']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Keterlambatan</td>
													<td style="text-align:center">Rp '.number_format($row['telat'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=hahas&nomer=telat&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													if($row['pot_lainnya']!=0){
														echo'
													<tr>
													<td style="text-align:center">-</td>
													<td style="text-align:center">Potongan Lainnya</td>
													<td style="text-align:center">Rp '.number_format($row['pot_lainnya'] , 0, ',', '.').'</td>
													<td style="text-align:center">
													<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Data" href="?page=pros&id='.$id.'&sub=hahas&nomer=potlain&id_user='.$id_user.'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
													<i class="material-icons">delete</i> DEL</a></td>
													</tr>';}
													
													$fays=mysqli_query($config,"SELECT pot_thr+telat+absen+pot_jasprod+pot_ongkos_cuti+pot_bantuan+pot_kesehatan+pot_koperasi+pot_koperasi_pusat+pot_iuran_dapen+pot_iuran_purnakarya+pot_iuran_tht+pot_asuransi_kendaraan+pot_saham_jasamarga+pot_umr+pot_koperasi_jmb+pot_koperasi_cirebon+pot_iuran_dplk+pot_rapel_jaminan_pensiun+pot_jaminan_pensiun+pot_bpjs_karyawan+pot_jamsostek+pot_iuran_pasti+pot_iuran_skjm+pot_premi+pot_rapel_bpjs_kesehatan+pot_rapel_bpjs_ketenagakerjaan+pot_lainnya FROM tbl_gaji WHERE id_user='$id_user' AND id_gaji='$id'");
													list($jumla)=mysqli_fetch_array($fays);
													
													echo'
													<tr>
													<td style="text-align:center" ><strong></strong></td>
													<td style="text-align:center"><strong>Sub Total</strong></td>
													<td style="text-align:center" ><strong>Rp '.number_format($jumla , 0, ',', '.').'</strong></td>
													<td style="text-align:center" ><strong></strong></td>
													</tr>';
													
													
													echo'
                                        </tbody>
										</tr>';
                                            
										
                                }
                            } else {
                                echo '<tr><td colspan="8"><center><p class="add">Tidak ada data untuk ditampilkan. <u></u> </p></center></td></tr>';
                            }		
									
									$notal=$jumla+$sub3;
													$mn=mysqli_query($config,"UPDATE tbl_gaji SET total_potongan='$notal' WHERE id_user='$id_user' AND id_gaji='$id'");
													echo'<tr style="background-color:yellow">
													<td style="text-align:center" colspan="2"><strong>Total Potongan</strong></td>
													<td style="text-align:center" colspan="2"><strong>Rp '.number_format($notal , 0, ',', '.').'</strong></td>
													</tr>';
													$penerimaanbersih=$jumlah-$notal;
                            echo '</table>';
							echo'</div>
							<div class="col s12">
							<h1></h1>
							</div>
							<div class="col s12" style="background-color:yellow">
							<h6 style="text-align:center"><strong>PENERIMAAN BERSIH :</strong></h6>
							<h5 style="text-align:center"><strong>Rp'.number_format($penerimaanbersih , 0, ',', '.').'</strong></h5>
							
							</div>
							
							</div>
							</li>
							</ul>';
								 ?>
							
							<?php
				echo'<div class="col m5">
					<div class="card">';
				
			
		
					
				
				
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
									
				$('#terima').attr('value', 'THR Otomatis, silahkan klik simpan');
				$('#terima').prop('disabled',true);
				$('#penerimaan').change(function(){	
				var inputValue = $('#penerimaan').val();
				if(inputValue==1){
				$('#terima').attr('value', 'THR Otomatis, silahkan klik simpan');
				$('#terima').prop('disabled',true);}
				else {
					$('#terima').attr('value', '');
				$('#terima').prop('disabled',false);}
					 });
           
		   $('#penerimaans').click(function(){
                //Selected value
				
                var inputValue = $('#penerimaan').val();
				var nilai = $('#terima').val();
				
				if(inputValue!=1){
				if(nilai==''){
					alert('Data Tidak Boleh Kosong !');
				} else {
					$.post('./js/penerimaan_lain.php', { nilai : nilai, id_user :<?php echo $id_user; ?>,id_select: inputValue,id_gaji :<?php echo $id; ?> }, function(data){
                    
                    
					$("#terima").val(data);
					alert('Data Berhasil Di Input !');
					location.reload();
					
				});
				}
				
				
				} else {
              
                $.post('./js/penerimaan_lain.php', { nilai : nilai, id_user :<?php echo $id_user; ?>,id_select: inputValue,id_gaji :<?php echo $id; ?> }, function(data){
                    
                    
					$("#terima").val(data);
					alert('Data Berhasil Di Input !');
					location.reload();
					
				});}
           
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
								echo "<option value='".$rowx['id']."'>".$rowx['uraian']."</option>";}
								echo '</select>
								</div>
								</div>
								<div class="input-field col s12">
								<i class="material-icons prefix md-prefix">attach_money</i>
								<input id="potong" type="text" class="validate" name="potong">
								<button id="potongans" class="btn-large green waves-effect waves-light col s12"><i class="material-icons">done</i> SIMPAN</button>
								</div>
								</div>
								
								<div class="col m3">
								<div class="card">
							
								';
								if($status_tugas==1){
									echo'
								<div class="input-field col s12">
								<i class="material-icons prefix md-prefix">attach_money</i>
								<input id="gajijm" type="text" class="validate" name="gaji_jm" value='.$gajipusat.'>
								<label>Gaji JM</label>
								</div>';}
								else{
									echo'
								<div class="input-field col s12">
								<i class="material-icons prefix md-prefix">attach_money</i>
								<input id="gajijm" type="text" class="validate" name="gaji_jm" value="Bukan Karyawan Perbantuan" disabled>
								<label>Gaji JM</label>
								</div>';
								}
								echo'
								<div class="col s12">
								<button id="gajipusat" class="btn-large green waves-effect waves-light col s12"><i class="material-icons">done</i> SIMPAN</button>
								</div>
								</div>
								</div>
								
								<div class="col m2">
								<div class="card">
								<div class="input-field col s12">
								<i class="material-icons prefix md-prefix">attach_money</i>
								<input id="absen" type="text" class="validate" name="absen" value='.$absenku.'>
								<label>Absen</label>
								<button id="absens" class="btn-large green waves-effect waves-light col s12"><i class="material-icons">done</i> SIMPAN</button>
								</div>
								</div>
								</div>
								
								<div class="col m2">
								<div class="card">
								<div class="input-field col s12">
								<i class="material-icons prefix md-prefix">attach_money</i>
								<input id="telat" type="text" class="validate" name="telat" value='.$telatku.'>
								<label>Terlambat</label>
								<button id="telats" class="btn-large green waves-effect waves-light col s12"><i class="material-icons">done</i> SIMPAN</button>
								</div>
								</div>
								</div>';?>
								
								<script>
								$(document).ready(function(){
            $('#gajipusat').click(function(){
				var nilai = $('#gajijm').val();
				var input ='anjay';
				if(nilai==''){
					alert('Data Tidak Boleh Kosong !');
				} else {
				$.post('./js/penerimaan_lain.php', { input : input, nilai : nilai, id_user :<?php echo $id_user; ?>,id_gaji :<?php echo $id; ?> }, function(data){
                    
                    
					$("#gajipusat").val(data);
					alert('Data Berhasil Di Input !');
					location.reload();
					
				});}
				});
				
				$('#absens').click(function(){
				var nilai = $('#absen').val();
				var input ='anjay1';
				var ngasal= 99999;
				
				$.post('./js/potongan_lain.php', { input : input, nilai : nilai, id_user :<?php echo $id_user; ?>,id_select: ngasal, id_gaji :<?php echo $id; ?> }, function(data){
                    
                    
					$("#absen").val(data);
					alert('Data Berhasil Di Input !');
					location.reload();
					
				});
				});
				
				$('#telats').click(function(){
				var nilai = $('#telat').val();
				var input ='anjay2';
				var ngasal= 99999;
				
				$.post('./js/potongan_lain.php', { input : input, nilai : nilai, id_user :<?php echo $id_user; ?>,id_select: ngasal,id_gaji :<?php echo $id; ?> }, function(data){
                    
                    
					$("#telat").val(data);
					alert('Data Berhasil Di Input !');
					location.reload();
					
				});
				});
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


			<?php echo'
								<div class="col m12" id="colres">
								<ul class="collapsible">
								<li>
								 <div class="collapsible-header" style="background-color:transparent"><i class="material-icons prefix md-36" style="margin-top:-9px!important">add</i><h5>Ket. Presensi</h5></div>
								 <div class="collapsible-body" style="background-color:transparent!important">
                                <div class="col m12" id="colres">
									<h6 style="line-height:20px!important"><i class="material-icons prefix md-prefix">assignment_late</i><strong>&nbspFILE PRESENSI : </strong><a href="./upload/presensi/'.$file.'">'.$file.'</a></h6>
                                    <table class="bordered" id="tblb">
                                        <thead class="blue lighten-4" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                                            <tr>
                                                <th width="1%">No</th>
                                                <th width="20%">Nama</th>
												<th width="16%">Keterangan</th>
                                                <th width="15%">Tanggal</th>
												<th width="15%" colspan"2">Jam</th>
												<th width="10%">Status Manager</th>
                                                
                                            </tr>
											
                                        </thead>

                                        <tbody>
                                            <tr>';
									
                                        $query2 = mysqli_query($config, "SELECT * FROM tbl_keterangan_presensi WHERE id_user='$id_user' AND(MONTH(tanggal)='$blan' AND YEAR(tanggal)='$than')");
										
										
									

                                        if(mysqli_num_rows($query2) > 0){
                                            $no = 0;
                                            while($row = mysqli_fetch_array($query2)){
												$titit=mysqli_query($config,"SELECT nama FROM tbl_user WHERE id_user='".$row['id_user']."'");
												list($namas)=mysqli_fetch_array($titit);
                                            $no++;
                                             echo ' <tr>
													<td style="text-align:center">'.$no.'</td>
                                                    <td style="text-align:center">'.$namas.'</td>
                                                    <td style="text-align:center">'.$row['keterangan'].'</td>
													<td style="text-align:center">'.$tanggals = date('d M Y ', strtotime($row['tanggal'])).'</td>
													<td style="text-align:center">'.$row['jam'].'</td>';
										
										
										echo'
										<td style="text-align:center">';
										
										
										if($row['status_gm']==1){										
											  echo'
											<a class="btn small light-green waves-effect waves-light");">
											<i class="material-icons">done</i></a>';} 
											else {
											echo'
											<a class="btn small red waves-effect waves-light");">
										<i class="material-icons">highlight_off</i></a>';}
										
										
										echo'</td>';
										
													
										
										

											echo'
													
                                            
                                        </tbody>
										</tr>';
                                            
										
                                }
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
								 <div class="collapsible-header" style="background-color:transparent"><i class="material-icons prefix md-36" style="margin-top:-9px!important">add</i><h5>Cuti</h5></div>
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
										<th width="15%" style="color:#fff">Status Manager</th>
										<th width="15%" style="color:#fff">Status GM</th>
										<th width="15%" style="color:#fff">Status SDM</th>
										<th width="20%" style="color:#fff">Tindakan</th>
										
									
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


										echo'<td style="text-align:center">';
										if($row['status_sdm']==1){
										if($_SESSION['admin']==1){echo'
										  <a class="btn small blue waves-effect waves-light" href="?page=cuti&act=edit&id='.$row['id'].'"><i class="material-icons">edit</i> EDIT</a>
										  <a class="btn small deep-orange waves-effect waves-light" href="?page=cuti&act=hapus&id='.$row['id'].'" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');">
										<i class="material-icons">delete</i> DEL</a>';}
										else {
										echo '<button class="btn small blue-grey waves-effect waves-light"><i class="material-icons">error</i> No Action</button>';
										}}else {
											echo'<a class="btn small blue waves-effect waves-light" href="?page=cuti&act=edit&id='.$row['id'].'"><i class="material-icons">edit</i> EDIT</a>
										  <a class="btn small deep-orange waves-effect waves-light" href="?page=cuti&act=hapus&id='.$row['id'].'" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');">
										<i class="material-icons">delete</i> DEL</a>';
										}
											
                                         echo '
                                       </td>
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
								 <div class="collapsible-header" style="background-color:transparent"><i class="material-icons prefix md-36" style="margin-top:-9px!important">add</i><h5>Lembur</h5></div>
								 <div class="collapsible-body" style="background-color:transparent!important">
							<div class="col m12" id="colres">
							
							<table class="bordered" id="tblb">
                                        <thead class="blue lighten-4" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                                            <tr>
                                                <th width="1%" rowspan="2">No</th>
                                                <th width="20%" rowspan="2">Nama</th>
                                                <th width="15%" rowspan="2">Tanggal</th>
												<th width="16%" rowspan="2">Deskripsi Pekerjaan</th>
                                                <th width="14%" colspan="2" style="border-bottom:1px solid black">Jam Lembur</th>
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
                                            <tr>';
										
                                        $query2d = mysqli_query($config, "SELECT * FROM tbl_lembur WHERE id_user='$id_user' AND(MONTH(tanggal)='$blan' AND YEAR(tanggal)='$than')");
										
									

                                        if(mysqli_num_rows($query2d) > 0){
                                            $no = 0;
                                            while($row = mysqli_fetch_array($query2d)){
												$titit=mysqli_query($config,"SELECT nama FROM tbl_user WHERE id_user='".$row['id_user']."'");
												list($namas)=mysqli_fetch_array($titit);
                                            $no++;
                                             echo ' <td style="text-align:center">'.$no.'</td>
                                                    <td style="text-align:center">'.$namas.'</td>
                                                    <td style="text-align:center">'.$tanggal = date('d M Y ', strtotime($row['tanggal'])).'</td>
													<td style="text-align:center">'.$row['pekerjaan'].'</td>
													<td style="text-align:center">'.$row['jam_awal'].'</td>
													<td style="text-align:center">'.$row['jam_akhir'].'</td>';

										
										echo'
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
                                        } else {
                                            echo '<tr><td colspan="9"><center><p class="add">Tidak ada data untuk ditampilkan.</p></center></td></tr>';
                                        }
                                echo '</table>
								</div>
								</div>
								</div>
								</li>
								</ul>
							
							
							
                        </div>
                    <div class="input-field col s12">
				
				
				<button type="submit" name="simpanseluruh" href="./" class="btn-large green waves-effect waves-light col s12" onclick="return confirm(\'Anda yakin ingin menyimpan data?\');"><i class="material-icons">done</i> SIMPAN</button>
			
				</div>
                    <!-- Row form END -->';
					
                   
            
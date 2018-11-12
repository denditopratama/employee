
<?php

header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=report_per_unit.xls");

session_start();
 
require('./include/config.php');


		   
				  
					$current_album='';
					$dptmn=mysqli_query($config,"SELECT * FROM tbl_department");
					
					while($row=mysqli_fetch_array($dptmn)){
						$no=1;
                echo '
					- UNIT KERJA : '.$row['unit_kerja'].'
					
					<table border="1">
				
								<th>No.</th>
								<th>Seksi</th>
								<th>NIK</th>
								<th>Nama</th>
								<th>Jabatan</th>';
								if($_SESSION['admin']==1){echo'
								<th>Tanggal Lahir</th>
								<th>Usia (Tahun)</th>
								<th>Tanggal Bakti</th>
								<th>Lama Kerja</th>
								<th>Kelas Jabatan</th>';}
								echo'
								<th>Status Karyawan</th>
								<th>Jenis Kelamin</th>';
								if($_SESSION['admin']==1){echo'
								<th>Status Keluarga</th>';}
								echo'
								<th>Agama</th>
								
								';
							$niks=mysqli_query($config,"SELECT * FROM tbl_user WHERE unit='".$row['kode_unit']."' AND(id_user<>9999 AND admin<>1 AND admin<>9) ORDER BY sub_unit,kelas_jabatan");
						while($rowb=mysqli_fetch_array($niks)){
							echo'
							
							<tr>
							<td>'.$no++.'</td>';
							
							$fh=mysqli_query($config,"SELECT kode FROM tbl_sub_unit WHERE kode_unit='".$row['kode_unit']."'");
							list($idaja)=mysqli_fetch_array($fh);
							
							$seksi=mysqli_query($config,"SELECT COUNT(*) FROM tbl_user WHERE sub_unit ='$idaja'");
							list($seksih)=mysqli_fetch_array($seksi);
							
							
							
							$jabs=mysqli_query($config,"SELECT jabatan FROM tbl_ref_jabatan WHERE id='".$rowb['jabatan']."'");
							list($namang)=mysqli_fetch_array($jabs);
							
							$lahir=mysqli_query($config,"SELECT tanggal_lahir,tgl_bakti,jenis_kelamin,status_keluarga,agama FROM tbl_identitas WHERE id_user='".$rowb['id_user']."'");
							list($lahirs,$bakti,$jenkel,$status_keluarga,$agama)=mysqli_fetch_array($lahir);
							$lahiran=date('d M Y',strtotime($lahirs));
							$baktis=date('d M Y',strtotime($bakti));
							
							
							
							
							
							$ages = date_diff(date_create($lahirs), date_create('now'))->y;
							$agess = date_diff(date_create($bakti), date_create('now'))->y;
							$agesbulan = date_diff(date_create($bakti), date_create('now'))->m;
							
														$mbf=mysqli_query($config,"SELECT status_karyawan FROM tbl_ref_status_karyawan WHERE kode='".$rowb['status_karyawan']."'");
														list($fasf)=mysqli_fetch_array($mbf);
														
														if($jenkel=='L'){
															$jenkel='Laki - Laki';
														} else {
															$jenkel='Perempuan';
														}
														
														if($status_keluarga == 0){
                                                            $statkel = 'Duda / Anak 0';
                                                        } else if($status_keluarga == 1) {
                                                            $statkel = 'Duda / Anak 1';
                                                        } else if($status_keluarga == 2) {
                                                            $statkel = 'Duda / Anak 2';
                                                        } else if($status_keluarga == 3) {
                                                            $statkel = 'Duda / Anak 3';
                                                        } else if($status_keluarga == 4) {
                                                            $statkel = 'Duda / Anak 4';
                                                        } else if($status_keluarga == 5) {
                                                            $statkel = 'Duda / Anak 5';
                                                        } else if($status_keluarga == 6) {
                                                            $statkel = 'Duda / Anak 1';
                                                        } else if($status_keluarga == 7) {
                                                            $statkel = 'Duda / Anak 1';
                                                        } else if($status_keluarga == 8) {
                                                            $statkel = 'Duda / Anak 1';
                                                        } else if($status_keluarga == 9) {
                                                            $statkel = 'Duda / Anak 1';
                                                        } else if($status_keluarga == 11) {
                                                            $statkel = 'Janda / Anak 0';
                                                        } else if($status_keluarga == 12) {
                                                            $statkel = 'Janda / Anak 1';
                                                        } else if($status_keluarga == 13) {
                                                            $statkel = 'Janda / Anak 2';
                                                        } else if($status_keluarga == 14) {
                                                            $statkel = 'Janda / Anak 3';
                                                        } else if($status_keluarga == 15) {
                                                            $statkel = 'Janda / Anak 4';
                                                        } else if($status_keluarga == 16) {
                                                            $statkel = 'Janda / Anak 5';
                                                        } else if($status_keluarga == 17) {
                                                            $statkel = 'Janda / Anak 6';
                                                        } else if($status_keluarga == 18) {
                                                            $statkel = 'Janda / Anak 7';
                                                        } else if($status_keluarga == 19) {
                                                            $statkel = 'Janda / Anak 8';
                                                        } else if($status_keluarga == 20) {
                                                            $statkel = 'Janda / Anak 9';
                                                        } else if($status_keluarga == 22) {
                                                            $statkel = 'Kawin / Anak 0';
                                                        } else if($status_keluarga == 23) {
                                                            $statkel = 'Kawin / Anak 1';
                                                        } else if($status_keluarga == 24) {
                                                            $statkel = 'Kawin / Anak 2';
                                                        } else if($status_keluarga == 25) {
                                                            $statkel = 'Kawin / Anak 3';
                                                        } else if($status_keluarga == 26) {
                                                            $statkel = 'Kawin / Anak 4';
                                                        } else if($status_keluarga == 27) {
                                                            $statkel = 'Kawin / Anak 5';
                                                        } else if($status_keluarga == 28) {
                                                            $statkel = 'Kawin / Anak 6';
                                                        } else if($status_keluarga == 29) {
                                                            $statkel = 'Kawin / Anak 7';
                                                        } else if($status_keluarga == 30) {
                                                            $statkel = 'Kawin / Anak 8';
                                                        } else if($status_keluarga == 31) {
                                                            $statkel = 'Kawin / Anak 9';
                                                        } else if($status_keluarga == 32) {
                                                            $statkel = 'Tidak Kawin';
                                                        } else if($status_keluarga == 33) {
                                                            $statkel = 'Belum Kawin';
                                                        } 
														
														if($agama == 1){
                                                            $agamas = 'Islam';
                                                        } 
														else if($agama == 2) {
                                                             $agamas = 'Protestan';
                                                        }
														else if($agama == 3) {
                                                             $agamas = 'Katholik';
                                                        }
														else if($agama == 4) {
                                                            $agamas = 'Hindu';
                                                        }
														else if($agama == 5) {
                                                            $agamas = 'Budha';
                                                        }
														else if($agama == 6) {
                                                            $agamas = 'Konghucu';
                                                        } else {
															$agamas = '';
														}
							
							$hjg=mysqli_query($config,"SELECT sub_unit FROM tbl_sub_unit WHERE kode='".$rowb['sub_unit']."'");
							list($rowku)=mysqli_fetch_array($hjg);
							
							$waw=mysqli_query($config,"SELECT COUNT(*) FROM tbl_user WHERE sub_unit ='".$rowb['sub_unit']."'");
							list($wawaw)=mysqli_fetch_array($waw);
							
							if ($current_album != $rowku) {
								
								echo'<td rowspan="'.$wawaw.'">'.$rowku.'</td>';
								$current_album = $rowku;
								
								
							} else if ($current_album == $rowku) {
							echo'';
								}
							
							
							
							echo'<td>'.$rowb['nip'].'</td>';
							echo'<td>'.$rowb['nama'].'</td>';
							echo'<td>'.$namang.'</td>';
							if($_SESSION['admin']==1){
							echo'<td>'.$lahiran.'</td>';
							echo'<td>'.$ages.'</td>';
							echo'<td>'.$baktis.'</td>';
							echo'<td>'.$agess.' Tahun / '.$agesbulan.' Bulan</td>';
							echo'<td>'.($rowb['kelas_jabatan']).'</td>';}
							echo'<td>'.$fasf.'</td>';
							echo'<td>'.$jenkel.'</td>';
							if($_SESSION['admin']==1){
							echo'<td>'.$statkel.'</td>';}
							echo'<td>'.$agamas.'</td>';
							
							echo'</tr>';}
								
						
						
						
						$total=mysqli_num_rows($niks);
						$ngitungdoang=mysqli_query($config,"SELECT * FROM tbl_user WHERE id_user <> 9999 AND (admin<>1 AND admin<>9)");
						$totalseluruh=mysqli_num_rows($ngitungdoang);
						
						
						
						
						echo'
						
						<tr>';
						if($_SESSION['admin']==1){
							echo'
						<td colspan="12">TOTAL</td>
						<td colspan="2">'.$total.'</td>';}
							else{
							echo'
						<td colspan="7">TOTAL</td>
						<td colspan="2">'.$total.'</td>';	
							}
							echo'
						</tr>
						
						</table>
					
					';}
				echo'JUMLAH KESELURUHAN : '.$totalseluruh.' KARYAWAN';
					
					
				


		


?>




<?php

header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=report_kar_unit_kerja.xls");

session_start();
 
require('./include/config.php');



    //cek session
    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<strong>ERROR!</strong> Anda harus login terlebih dahulu.';
        header("Location: ./");
        die();
	
		
    } else {
		
		echo'<style>
		header, main {
			padding-left: 0;
		  }
		table {
                background: #fff;
                padding: 5px;
				border:0.5px solid black!important;
            }
            tr, td{
                border: table-cell;
                border: 0px  solid rgba(0,0,0,0);
            }
            tr,td {
                vertical-align: top!important;
				
            }
			tbody:hover{background-color:transparent!important;}
            #right {
                border-right: none !important;
				 border-left: none !important;
				  border-top: none !important;
					border-bottom: none !important;
					}
			#kanan {
                border-right: none !important;
				 border-left: none !important;
				  border-top: none !important;
					border-bottom: none !important;
					width:30%
					}
				#kanans {
                border-right: none !important;
				 border-left: none !important;
				  border-top: none !important;
					border-bottom: none !important;
					width:10%
					}
					
					
		@media print{
            
              table {
                background: transparent;
                padding: 0px!important;
				font-size:9px!important;
				
				
            }
			#row:nth-of-type(even) {
				background-color:#F0F0F0!important;
				}
            tr, td {
                border: table-cell;
                border: 0px  solid rgba(0,0,0,0)!important;
				width:10%;
				vertical-align:middle!important;
				text-align:left!important;
				 page-break-after:auto;
				
            }
			
			th{
				border: table-cell;
				border:0.5px solid black!important;	
				background-color:#c5e3ed!important;
				text-align:center!important;
				
					}
			#gelo{
					width:1px!important;
					text-align:center!important;
					border:1px solid black!important;
					}
			#gelos{width:33%!important;}
					
            #right {
                border-right: none !important;
				 border-left: none !important;
				  border-top: none !important;
				   border-bottom: none !important;
			}
			#kanan {
                border-right: none !important;
				 border-left: none !important;
				  border-top: none !important;
					border-bottom: none !important;
					width:30%
					}
			#kanans {
                border-right: none !important;
				 border-left: none !important;
				  border-top: none !important;
					border-bottom: none !important;
					width:10%;

					}
			p {
				color:red!important;
				display:inline!important;
					}
					
					
		}
	@media print and (color) {				
   th {
      -webkit-print-color-adjust: exact;
      print-color-adjust: exact;
   }
   tr {
      -webkit-print-color-adjust: exact;
      print-color-adjust: exact;
   }
   #row {
      -webkit-print-color-adjust: exact;
      print-color-adjust: exact;
   }
   p {
      -webkit-print-color-adjust: exact;
      print-color-adjust: exact;
   }
   
   
}

@page  
{ 
    size: auto;   /* auto is the initial value */ 

    /* this affects the margin in the printer settings */ 
    margin: 12mm;
} 

body  
{ 
    /* this affects the margin on the content before sending to printer */ 
    margin: 0px;  
} 

 
			
					
			
		
		
		</style>

    
       

        <body onload="window.print()">

        <!-- Container START -->
        <div class="container">
            <div id="colres">
                <div class="disp">';
				echo'<h1 style="font-weight:100;font-family:sans-serif;margin-top:20px;">Rincian Data Karyawan</h1>';
				echo '<hr style="display:block;margin-top:-5px;text-align:right"></hr>';?>
				
				
				
				
	
				

			<?php
		   
				   
					$current_album='';
					$dptmn=mysqli_query($config,"SELECT * FROM tbl_department");
					
					while($row=mysqli_fetch_array($dptmn)){
						$no=1;
                echo '
					<h5>- UNIT KERJA : '.$row['unit_kerja'].'</h5>
					
					<table border="1">
				<tbody>
								<th id="gelo" style="width:1%!important;border:1px"><strong>No.</strong></th>
								<th id="gelo" style="width:8%!important;"><strong>Seksi</strong></th>
								<th id="gelo" style="width:5%!important;"><strong>NIK</strong></th>
								<th id="gelo" style="width:10%!important;"><strong>Nama</strong></th>
								<th id="gelo" style="width:15%!important;"><strong>Jabatan</strong></th>';
								if($_SESSION['admin']==1){echo'
								<th id="gelo" style="width:5%!important;"><strong>Tanggal Lahir</strong></th>
								<th id="gelo" style="width:1%!important;"><strong>Usia (Tahun)</strong></th>
								<th id="gelo" style="width:5%!important;"><strong>Tanggal Bakti</strong></th>
								<th id="gelo" style="width:5%!important;"><strong>Lama Kerja</strong></th>
								<th id="gelo" style="width:5%!important;"><strong>Kelas Jabatan</strong></th>';}
								echo'
								<th id="gelo" style="width:5%!important;"><strong>Status Karyawan</strong></th>
								<th id="gelo" style="width:1%!important;"><strong>Jenis Kelamin</strong></th>';
								if($_SESSION['admin']==1){echo'
								<th id="gelo" style="width:5%!important;"><strong>Status Keluarga</strong></th>';}
								echo'
								<th id="gelo" style="width:1%!important;"><strong>Agama</strong></th>
								
								</tbody><tbody>';
							$niks=mysqli_query($config,"SELECT * FROM tbl_user WHERE unit='".$row['kode_unit']."' AND(id_user<>9999 AND admin<>1 AND admin<>9 AND status_aktif=1) ORDER BY sub_unit,kelas_jabatan");
						while($rowb=mysqli_fetch_array($niks)){
							echo'
							
							<tr>
							<td id="gelo" style="text-align:center!important">'.$no++.'</td>';
							
							$fh=mysqli_query($config,"SELECT id FROM tbl_sub_unit WHERE kode_unit='".$row['kode_unit']."'");
							list($idaja)=mysqli_fetch_array($fh);
							
							$seksi=mysqli_query($config,"SELECT COUNT(*) FROM tbl_user WHERE sub_unit ='$idaja' AND(admin<>1 AND admin<>9 AND id_user<>9999 AND status_aktif=1)");
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
							
							$hjg=mysqli_query($config,"SELECT sub_unit FROM tbl_sub_unit WHERE id='".$rowb['sub_unit']."'");
							list($rowku)=mysqli_fetch_array($hjg);
							
							$waw=mysqli_query($config,"SELECT COUNT(*) FROM tbl_user WHERE sub_unit ='".$rowb['sub_unit']."' AND (admin<>1 AND admin<>9 AND id_user<>9999 AND status_aktif=1)");
							list($wawaw)=mysqli_fetch_array($waw);
							
							if ($current_album != $rowku) {
								
								echo'<td id="gelo" rowspan="'.$wawaw.'" style="vertical-align:middle!important;text-align:center!important;">'.$rowku.'</td>';
								$current_album = $rowku;
								
								
							} else if ($current_album == $rowku) {
							echo'';
								}
							
							
							
							echo'<td id="gelo">'.$rowb['nip'].'</td>';
							echo'<td id="gelo">'.$rowb['nama'].'</td>';
							echo'<td id="gelo">'.$namang.'</td>';
							if($_SESSION['admin']==1){
							echo'<td id="gelo">'.$lahiran.'</td>';
							echo'<td id="gelo">'.$ages.'</td>';
							echo'<td id="gelo">'.$baktis.'</td>';
							echo'<td id="gelo">'.$agess.' Tahun / '.$agesbulan.' Bulan</td>';
							echo'<td id="gelo">'.($rowb['kelas_jabatan']).'</td>';}
							echo'<td id="gelo">'.$fasf.'</td>';
							echo'<td id="gelo">'.$jenkel.'</td>';
							if($_SESSION['admin']==1){
							echo'<td id="gelo">'.$statkel.'</td>';}
							echo'<td id="gelo">'.$agamas.'</td>';
							
							echo'</tr>';}
								
							echo'</tbody>';
						
						
						$total=mysqli_num_rows($niks);
						$ngitungdoang=mysqli_query($config,"SELECT * FROM tbl_user WHERE id_user <> 9999 AND (admin<>1 AND admin<>9 AND status_aktif=1)");
						$totalseluruh=mysqli_num_rows($ngitungdoang);
						
						
						
						
						echo'
						<tbody>
						<tr>';
						if($_SESSION['admin']==1){
							echo'
						<td id="gelo" width="15%" style="text-align:right!important;background-color:yellow!important" colspan="12"><strong>TOTAL</strong></td>
						<td id="gelo" colspan="2" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important">'.$total.'</td>';}
							else{
							echo'
						<td id="gelo" width="15%" style="text-align:right!important;background-color:yellow!important" colspan="7"><strong>TOTAL</strong></td>
						<td id="gelo" colspan="2" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important">'.$total.'</td>';	
							}
							echo'
						</tr>
						</tbody>
						</table>
					
					';}
				echo'<h6 style="text-align:right!important"><p>*</p> JUMLAH KESELURUHAN : <strong>'.$totalseluruh.'</strong> KARYAWAN</h6>';
					
					
					echo'
    </div>
    <!-- Container END -->

    </body>';
    }

		


?>

					
					
				


		


?>



<?php
$id_user=mysqli_real_escape_string($config,$_REQUEST['id_user']);
if($id_user!=$_SESSION['id_user'] && $_SESSION['admin']!=1){
        header("Location: ./");
die();}
else {
    //cek session
    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<strong>ERROR!</strong> Anda harus login terlebih dahulu.';
        header("Location: ./");
        die();
	
		
    } else {
		
		echo'<style>
		table {
                background: #fff;
                padding: 5px;
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
					header, main {
						padding-left: 0;
					  }
					  head {
						  display:none;
					  }
					
					
		@media print{
            
              table {
                background: transparent;
                padding: 5px;
				page-break-after:auto;
				
            }
			#row:nth-of-type(even) {
				background-color:rgba(96,96,86,0.1)!important;
				}
            tr, td {
                border: table-cell;
                border: 0px  solid rgba(0,0,0,0);
				width:10%;
				vertical-align:middle!important;
				page-break-inside:avoid; page-break-after:auto;
            }
			
			th{
				border: table-cell;
				border: 0px  solid rgba(0,0,0,0);		
				background-color:rgba(96,96,86,0.4)!important;
					}
			#gelo{
					width:1px!important;
					background-color:rgba(96,96,86,0.4)!important;}
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
					width:40%;
					padding-right:50px!important;
					}
			#kanans {
                border-right: none !important;
				 border-left: none !important;
				  border-top: none !important;
					border-bottom: none !important;
					width:10%;

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
   
   
}

@page  
{ 
    size: auto;   /* auto is the initial value */ 

    /* this affects the margin in the printer settings */ 
	margin: 18mm;
	
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
				echo'<h1 style="font-weight:100;font-family:sans-serif;margin-top:5px;"><img class="logodisp" src="./asset/img/screenshots.png"/ style="width:25%;vertical-align:middle">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDaftar Riwayat Hidup</img></h1>';
				echo '<hr style="display:block;margin-top:-5px;text-align:right"></hr>';
				
				
				
				
	
				

	   
		   
				   $query2 = mysqli_query($config, "SELECT nama,nip,status_karyawan FROM tbl_user WHERE id_user='$id_user'");
                    list($nama,$nip,$status_karyawan) = mysqli_fetch_array($query2);	
					$query3 = mysqli_query($config, "SELECT tgl_bakti,jenis_kelamin,tempat_lahir,tanggal_lahir,status_keluarga,agama,goldarah,alamat,kelurahan,kecamatan,kota,propinsi,kode_pos,no_telpon FROM tbl_identitas WHERE id_user='$id_user'");
                    list($tgl_bakti,$jenis_kelamin,$tempat_lahir,$tanggal_lahir,$status_keluarga,$agama,$goldarah,$alamat,$kelurahan,$kecamatan,$kota,$propinsi,$kode_pos,$no_telpon) = mysqli_fetch_array($query3);	
					
						
                echo '
			
                    <table style="stroke:rgba(0,0,0,0);border:0px!important;" border="0!important">
						
                        <tbody>
						
							<tr>
                             <td id="kanans" width="18%" style="text-align:left"><h2>A. Identitas</h2></td>
							 <td id="kanans" width="18%"></td>
							 <td id="kanans" width="18%"></td>
							 <td id="kanans" rowspan="13" colspan="3">';
							 $querye = mysqli_query($config,"SELECT foto FROM tbl_user WHERE id_user='$id_user'");
           while($rows=mysqli_fetch_array($querye)){ 
		   if($rows['foto']==""){
			echo'<img class="file" src="./upload/foto/batman.jpg" style="width:180%;float:right;margin-right:20px;">';
		   }
		   else{
		   echo'<img class="file" src="./upload/foto/'.$rows['foto'].'" style="width:180%;float:right;margin-right:20px;margin-bottom:20px;">'; }}
		   echo'</td>
							 </tr>
							<tr>
								<td id="kanans" width="18%"><strong>Nama</strong></td>
							    <td id="kanans" >: '.$nama.'</td> 
							</tr>
							<tr> 
								<td id="right" width="18%"><strong>NIP</strong></td>
							    <td id="kanans">: '.$nip.'</td> 
							</tr>';
							$agebakti = mysqli_real_escape_string($config,date_diff(date_create($tgl_bakti), date_create('now'))->y);
							echo'
							<tr> 
								<td id="right" width="18%"><strong>Tanggal Bakti</strong></td>
							    <td id="kanan">: '.$tgl_bakti.' / '.$agebakti.' Tahun</td> 
							</tr>
							<tr>';
							$kuy=mysqli_query($config,"SELECT unit,sub_unit,jabatan FROM tbl_user WHERE id_user='$id_user'");
							list($unit,$sub_unit,$jabatan)=mysqli_fetch_array($kuy);
							$departement=mysqli_query($config,"SELECT unit_kerja FROM tbl_department WHERE kode_unit='$unit'");
							list($units)=mysqli_fetch_array($departement);
							$jabat=mysqli_query($config,"SELECT jabatan FROM tbl_ref_jabatan WHERE id='$jabatan'");
							list($joboton)=mysqli_fetch_array($jabat);
							echo'
								<td id="right" width="18%"><strong>Jabatan</strong></td>
							    <td id="kanan">: '.$joboton.'</td> 
							</tr>
							<tr> 
								<td id="right" width="18%"><strong>Unit Kerja</strong></td>
							    <td id="kanan">: '.$units.'</td> 
							</tr>
							<tr>';
								if($jenis_kelamin=='L'){
								$jenis_kelamin='Laki-Laki';}
								else if($jenis_kelamin=='P')
								{$jenis_kelamin='Perempuan';;
								}
							echo'
							<td id="right" width="18%"><strong>Jenis Kelamin</strong></td>
							    <td id="kanan">: '.$jenis_kelamin.'</td>
							</tr>
							<tr> 
								<td id="right" width="18%"><strong>Tempat Lahir</strong></td>
							    <td id="kanan">: '.$tempat_lahir.'</td> 
							</tr>';
							$ages = mysqli_real_escape_string($config,date_diff(date_create($tanggal_lahir), date_create('now'))->y);
							echo'
							<tr> 
								<td id="gelos" style="border:none!important;width:15%!important"><strong>Tanggal Lahir / Usia</strong></td>
							    <td id="kanan">: '.$tanggal_lahir.' / '.$ages.' Tahun</td> 
							</tr>
							';
												if($status_keluarga == 0){
                                                            $status_keluarga ='Duda / Anak 0';
                                                        } else if($status_keluarga == 1) {
                                                            $status_keluarga = 'Duda / Anak 1';
                                                        } else if($status_keluarga == 2) {
                                                            $status_keluarga = 'Duda / Anak 2';
                                                        } else if($status_keluarga == 3) {
                                                            $status_keluarga = 'Duda / Anak 3';
                                                        } else if($status_keluarga == 4) {
                                                            $status_keluarga = 'Duda / Anak 4';
                                                        } else if($status_keluarga == 5) {
                                                            $status_keluarga = 'Duda / Anak 5';
                                                        } else if($status_keluarga == 6) {
                                                            $status_keluarga = 'Duda / Anak 1';
                                                        } else if($status_keluarga == 7) {
                                                            $status_keluarga = 'Duda / Anak 1';
                                                        } else if($status_keluarga == 8) {
                                                            $status_keluarga = 'Duda / Anak 1';
                                                        } else if($status_keluarga == 9) {
                                                            $status_keluarga = 'Duda / Anak 1';
                                                        } else if($status_keluarga == 11) {
                                                            $status_keluarga = 'Janda / Anak 0';
                                                        } else if($status_keluarga == 12) {
                                                            $status_keluarga = 'Janda / Anak 1';
                                                        } else if($status_keluarga == 13) {
                                                            $status_keluarga = 'Janda / Anak 2';
                                                        } else if($status_keluarga == 14) {
                                                            $status_keluarga = 'Janda / Anak 3';
                                                        } else if($status_keluarga == 15) {
                                                            $status_keluarga = 'Janda / Anak 4';
                                                        } else if($status_keluarga == 16) {
                                                            $status_keluarga = 'Janda / Anak 5';
                                                        } else if($status_keluarga == 17) {
                                                            $status_keluarga = 'Janda / Anak 6';
                                                        } else if($status_keluarga == 18) {
                                                            $status_keluarga = 'Janda / Anak 7';
                                                        } else if($status_keluarga == 19) {
                                                            $status_keluarga = 'Janda / Anak 8';
                                                        } else if($status_keluarga == 20) {
                                                            $status_keluarga = 'Janda / Anak 9';
                                                        } else if($status_keluarga == 22) {
                                                            $status_keluarga = 'Kawin / Anak 0';
                                                        } else if($status_keluarga == 23) {
                                                            $status_keluarga = 'Kawin / Anak 1';
                                                        } else if($status_keluarga == 24) {
                                                            $status_keluarga = 'Kawin / Anak 2';
                                                        } else if($status_keluarga == 25) {
                                                            $status_keluarga = 'Kawin / Anak 3';
                                                        } else if($status_keluarga == 26) {
                                                            $status_keluarga = 'Kawin / Anak 4';
                                                        } else if($status_keluarga == 27) {
                                                            $status_keluarga = 'Kawin / Anak 5';
                                                        } else if($status_keluarga == 28) {
                                                            $status_keluarga = 'Kawin / Anak 6';
                                                        } else if($status_keluarga == 29) {
                                                            $status_keluarga = 'Kawin / Anak 7';
                                                        } else if($status_keluarga == 30) {
                                                            $status_keluarga = 'Kawin / Anak 8';
                                                        } else if($status_keluarga == 31) {
                                                            $status_keluarga = 'Kawin / Anak 9';
                                                        } 
								echo'
							<tr> 
								<td id="right" width="18%"><strong>Status Keluarga</strong></td>
							    <td id="kanan">: '.$status_keluarga.'</td> 
							</tr>';
														if($agama == 1){
                                                            $agama = 'Islam';
                                                        } 
														else if($agama == 2) {
                                                            $agama = 'Protestan';
                                                        }
														else if($agama == 3) {
                                                            $agama = 'Katholik';
                                                        }
														else if($agama == 4) {
                                                            $agama = 'Hindu';
                                                        }
														else if($agama == 5) {
                                                            $agama = 'Budha';
                                                        }
														else if($agama == 6) {
                                                            $agama = 'Konghucu';
                                                        }
														echo'
							<tr> 
								<td id="right" width="18%"><strong>Agama</strong></td>
							    <td id="kanan">: '.$agama.'</td> 
							</tr>
							<tr> 
								<td id="right" width="18%"><strong>Golongan Darah</strong></td>
							    <td id="right">: '.$goldarah.'</td> 
							</tr>
							<tr> 
								<td id="right" width="18%"><strong>Nomor Telepon</strong></td>
							    <td id="kanan">: '.$no_telpon.'</td> 
							</tr>
							<tr> 
								<td id="kanans" width="18%"><strong>Alamat</strong></td>
							    <td id="kanans" width="18%">: '.$alamat.'</td> 
								<td id="kanans" width="30%"><strong>Status Karyawan</strong></td>';
								if($status_karyawan == 1){
                                                            $status_karyawan = 'Komisaris';
                                                        } else if($status_karyawan == 2) {
                                                            $status_karyawan = 'Direksi';
                                                        }
														  else if($status_karyawan == 3) {
															$status_karyawan = 'Karyawan Perbantuan';
                                                        }
														  else if($status_karyawan == 4) {
                                                            $status_karyawan = 'Karyawan Tetap';
                                                        }
														  else if($status_karyawan == 5) {
                                                            $status_karyawan = 'PKWT';
                                                        }
														  else if($status_karyawan == 6) {
                                                            $status_karyawan = 'Koperasi';
                                                        }
														echo'
							    <td id="kanans" width="18%" colspan="3" style="vertical-align:middle!important;">: '.$status_karyawan.'</td> 
								
							</tr>
							<tr> 
								
								<td id="kanans" width="18%"><strong>Kelurahan</strong></td>
							    <td id="kanans" width="18%">: '.$kelurahan.'</td> 
								<td id="kanans" width="18%"><strong>Kecamatan</strong></td>
							    <td id="kanans" width="18%" colspan="2">: '.$kecamatan.'</td> 
							</tr>
							
							<tr> 
								
								<td id="kanans" width="18%"><strong>Kota</strong></td>
							    <td id="kanans" width="18%">: '.$kota.'</td> 
								<td id="kanans" width="18%"><strong>Propinsi</strong></td>
							    <td id="kanans" width="18%" colspan="2">: '.$propinsi.'</td> 
							</tr>
							
							<tr> 
								
								<td id="kanans" width="18%"><strong>Kode Pos</strong></td>
							    <td id="kanans" width="18%">: '.$kode_pos.'</td> 
								<td id="kanans" width="18%"><strong>Nomor Telpon</strong></td>
							    <td id="kanans" colspan="2" width="18%">: '.$no_telpon.'</td> 
							</tr>
							
					
							
						
							
						<tr> 
								<td id="right"></td>
							    <td id="right"></td>
								<td id="right"></td>
								<td id="right"></td>
								<td id="right"></td>
								
															
							</tr>
							</tbody>
							</table>
							
							
							 <table style="stroke:rgba(0,0,0,0);border:0px!important;margin-rigt:15px!important;margin-left:15px!important;">
								<h2>B.&nbspPendidikan</h2>
								<h4>&nbsp&nbsp&nbsp&nbsp1.&nbspFormal</h4>
								<th id="gelo" style="width:1%!important;"><strong>No.</strong></th>
								<th id="gelos" colspan="2" style="width:5%!important;"><strong>Nama Instansi</strong></th>
								<th id="gelos" style="width:17%!important;"><strong>Jurusan</strong></th>
								<th style="width:7%!important;"><strong>Lulus</strong></th>
								<th id="gelo" style="width:15%!important;"><strong>Nomor Sertifikat</strong></th>
                        <tbody>
						
				
					';
						$no=1;
						$pendidikan=mysqli_query($config,"SELECT * FROM tbl_pendidikan WHERE id_user='$id_user' AND(jenis=1)");
						while($row=mysqli_fetch_array($pendidikan)){
							if($row['tingkat']==1){
								$row['tingkat']='SD';
							} else if($row['tingkat']==2){
								$row['tingkat']='SMP';
							} else if($row['tingkat']==3){
								$row['tingkat']='SMA / SMK';
							} else if($row['tingkat']==4){
								$row['tingkat']='S1';
							} else if($row['tingkat']==5){
								$row['tingkat']='S2';
							} else if($row['tingkat']==6){
								$row['tingkat']='S3';
							}
							echo'
						<tr id="row"> 
								<td style="text-align:center!important;width:1%!important;">'.$no++.'</td>
								<td style="text-align:center!important;width:10%!important;">'.$row['tingkat'].'</td>
								<td style="text-align:center!important;width:20%!important;">'.$row['instansi'].'</td>
								<td style="text-align:center!important;">'.$row['jurusan'].'</td>
								<td style="text-align:center!important;">'.$row['lulus'].'</td>
								<td style="text-align:center!important;">'.$row['no_serti'].'</td>
							
							  
															
							</tr>
						';}echo'
							</tbody>
							</table>
							
							 <table style="stroke:rgba(0,0,0,0);border:0px!important;margin-rigt:15px!important;margin-left:15px!important;">
								<h4>&nbsp&nbsp&nbsp&nbsp2.&nbspNon Formal</h4>
								<th id="gelo" style="width:1%!important;"><strong>No.</strong></th>
								<th id="gelos" style="width:25%!important;"><strong>Uraian</strong></th>
								<th id="gelos" style="width:10%!important;"><strong>Tanggal Awal</strong></th>
								<th id="gelos" style="width:10%!important;"><strong>Tanggal Akhir</strong></th>
								<th id="gelo" style="width:10%!important;"><strong>Tempat</strong></th>
                        <tbody>
						
				
					';
						$no=1;
						$pendidikan=mysqli_query($config,"SELECT * FROM tbl_pendidikan WHERE id_user='$id_user' AND(jenis=2)");
						while($row=mysqli_fetch_array($pendidikan)){
							
							echo'
						<tr id="row"> 
								<td style="text-align:center!important;width:1%!important;">'.$no++.'</td>
								<td style="text-align:center!important;width:25%!important;">'.$row['uraian'].'</td>
								<td style="text-align:center!important;width:10%!important;">'.$row['tgl_awal'].'</td>
								<td style="text-align:center!important;">'.$row['tgl_akhir'].'</td>
								<td style="text-align:center!important;">'.$row['tempat'].'</td>
								
													
							</tr>
						';}echo'
							</tbody>
							</table>
							
							
							
							
							
							
							
							
							<table style="stroke:rgba(0,0,0,0);border:0px!important;margin-rigt:15px!important;margin-left:15px!important;">
								<h2>C.&nbspJabatan</h2>
								<th id="gelo" style="width:1%!important;"><strong>No.</strong></th>
								<th id="gelos" style="width:20%!important;"><strong>Jabatan</strong></th>
								<th id="gelos" style="width:20%!important;"><strong>Unit Kerja</strong></th>
								<th id="gelos" style="width:10%!important;"><strong>Tanggal</strong></th>
								<th id="gelo" style="width:20%!important;"><strong>Nomor SK</strong></th>
                        <tbody>
						
				
					';
						$no=1;
						$pendidikan=mysqli_query($config,"SELECT * FROM tbl_jabatan WHERE id_user='$id_user'");
						while($row=mysqli_fetch_array($pendidikan)){
							
							echo'
						<tr id="row"> 
								<td style="text-align:center!important;width:1%!important;">'.$no++.'</td>
								<td style="text-align:center!important;width:10%!important;">'.$row['jabatan'].'</td>
								<td style="text-align:center!important;width:20%!important;">'.$row['unit_kerja'].'</td>
								<td style="text-align:center!important;">'.$row['tanggal'].'</td>
								<td style="text-align:center!important;">'.$row['no_sk'].'</td>
							
							  
															
							</tr>
						';}echo'
							</tbody>
							</table>
							
							
							
							
							
							
							<table style="stroke:rgba(0,0,0,0);border:0px!important;margin-rigt:15px!important;margin-left:15px!important;">
								<h2>D.&nbspHukuman Disiplin</h2>
								<th id="gelo" style="width:1%!important;"><strong>No.</strong></th>
								<th id="gelos" style="width:20%!important;"><strong>Jenis Hukuman</strong></th>
								<th id="gelos" style="width:20%!important;"><strong>Uraian Hukuman</strong></th>
								<th id="gelos" style="width:20%!important;"><strong>Tanggal Awal</strong></th>
								<th id="gelo" style="width:20%!important;"><strong>Tanggal Akhir</strong></th>
                        <tbody>
						
				
					';
						$no=1;
						$pendidikan=mysqli_query($config,"SELECT * FROM tbl_hukuman WHERE id_user='$id_user'");
						while($row=mysqli_fetch_array($pendidikan)){
							
							echo'
						<tr id="row"> 
								<td style="text-align:center!important;width:1%!important;">'.$no++.'</td>
								<td style="text-align:center!important;width:10%!important;">'.$row['jenis_hukuman'].'</td>
								<td style="text-align:center!important;width:20%!important;">'.$row['uraianhukuman'].'</td>
								<td style="text-align:center!important;">'.$row['tanggalawal'].'</td>
								<td style="text-align:center!important;">'.$row['tanggalakhir'].'</td>
							
							  
															
							</tr>
						';}echo'
							</tbody>
							</table>
							
							
							
							
							<table style="stroke:rgba(0,0,0,0);border:0px!important;margin-rigt:15px!important;margin-left:15px!important;">
								<h2>E.&nbspOrganisasi</h2>
								<th id="gelo" style="width:1%!important;"><strong>No.</strong></th>
								<th id="gelos" style="width:20%!important;"><strong>Nama Organisasi</strong></th>
								<th id="gelos" style="width:20%!important;"><strong>Jabatan</strong></th>
								<th id="gelos" style="width:20%!important;"><strong>Tanggal Awal</strong></th>
								<th id="gelo" style="width:20%!important;"><strong>Tanggal Akhir</strong></th>
                        <tbody>
						
				
					';
						$no=1;
						$pendidikan=mysqli_query($config,"SELECT * FROM tbl_organisasi WHERE id_user='$id_user'");
						while($row=mysqli_fetch_array($pendidikan)){
							
							echo'
						<tr id="row"> 
								<td style="text-align:center!important;width:1%!important;">'.$no++.'</td>
								<td style="text-align:center!important;width:10%!important;">'.$row['nama_organisasi'].'</td>
								<td style="text-align:center!important;width:20%!important;">'.$row['jabatan'].'</td>
								<td style="text-align:center!important;">'.$row['tanggal_masuk'].'</td>
								<td style="text-align:center!important;">'.$row['tanggal_keluar'].'</td>
							
							  
															
							</tr>
						';}echo'
							</tbody>
							</table>
							
							
							
							<table style="stroke:rgba(0,0,0,0);border:0px!important;margin-rigt:15px!important;margin-left:15px!important;">
								<h2>F.&nbspKeahlian</h2>
								<th id="gelo" style="width:1%!important;"><strong>No.</strong></th>
								<th id="gelos" style="width:20%!important;"><strong>Jenis Keahlian</strong></th>
								
                        <tbody>
						
				
					';
						$no=1;
						$pendidikan=mysqli_query($config,"SELECT * FROM tbl_keahlian WHERE id_user='$id_user'");
						while($row=mysqli_fetch_array($pendidikan)){
							
							echo'
						<tr id="row"> 
								<td style="text-align:center!important;width:1%!important;">'.$no++.'</td>
								<td style="text-align:center!important;width:10%!important;">'.$row['jenis_keahlian'].'</td>
								
							
							  
															
							</tr>
						';}echo'
							</tbody>
							</table>
							
							
							
							<table style="stroke:rgba(0,0,0,0);border:0px!important;margin-rigt:15px!important;margin-left:15px!important;">
								<h2>G.&nbspKeluarga</h2>
								<th id="gelo" style="width:1%!important;"><strong>No.</strong></th>
								<th id="gelos" style="width:20%!important;"><strong>Nama Keluarga</strong></th>
								<th id="gelos" style="width:20%!important;"><strong>Jenis Kelamin</strong></th>
								<th id="gelos" style="width:20%!important;"><strong>Tempat Lahir</strong></th>
								<th id="gelo" style="width:15%!important;"><strong>Tanggal Lahir</strong></th>
								<th id="gelo" style="width:10%!important;"><strong>Usia</strong></th>
								<th id="gelo" style="width:20%!important;"><strong>Hubungan Keluarga</strong></th>
                        <tbody>
						
				
					';
						$no=1;
						$pendidikan=mysqli_query($config,"SELECT * FROM tbl_keluarga WHERE id_user='$id_user'");
						while($row=mysqli_fetch_array($pendidikan)){
						
							echo'
						<tr id="row"> 
								<td style="text-align:center!important;width:1%!important;">'.$no++.'</td>
								<td style="text-align:center!important;width:10%!important;">'.$row['nama'].'</td>';
								if($row['jenis_kelamin']=='L'){
									$row['jenis_kelamin']='Laki - Laki';
								} else if($row['jenis_kelamin']=='P'){
								$row['jenis_kelamin']='Perempuan';}
								echo'
								<td style="text-align:center!important;width:20%!important;">'.$row['jenis_kelamin'].'</td>
								<td style="text-align:center!important;">'.$row['tempat_lahir'].'</td>
								<td style="text-align:center!important;">'.$row['tanggal_lahir'].'</td>
								<td style="text-align:center!important;">'.$row['usia'].'</td>';
										$x=9;
										$o=18;
										$k=27;
										$h=30;
											for($i=1;$i<=9;$i++){
												if($row['hubungan_keluarga']==$i){
											$row['hubungan_keluarga']='Anak Ke-'.$i.'';}}
											for($i=10;$i<=18;$i++){
												if($row['hubungan_keluarga']==$i){
											$row['hubungan_keluarga']='Kakak Ke-'.($i-$x).'';}}
											for($i=19;$i<=27;$i++){
												if($row['hubungan_keluarga']==$i){
											$row['hubungan_keluarga']='Adik Ke-'.($i-$o).'';}}
											for($i=28;$i<=30;$i++){
												if($row['hubungan_keluarga']==$i){
											$row['hubungan_keluarga']='Suami Ke-'.($i-$k).'';}}
											for($i=31;$i<=33;$i++){
												if($row['hubungan_keluarga']==$i){
											$row['hubungan_keluarga']='Istri Ke-'.($i-$h).'';}}
											echo'
								<td style="text-align:center!important;">'.$row['hubungan_keluarga'].'</td>
							
							  
															
							</tr>
						';}echo'
							</tbody>
							</table>
							
						';
						
				 	
				 
				 
				 
				 
				 
				 
				 /*$y = substr($row['tgl_diterima'],0,4);
                 $m = substr($row['tgl_diterima'],5,2);
                  $d = substr($row['tgl_diterima'],8,2);
                    $query2 = mysqli_query($config, "SELECT sifat FROM tbl_disposisi");
                    list($sifat) = mysqli_fetch_array($query2);*/
                   
                        
                     
                      
					 
					   
                    
                    
                     
                    
                    
               echo'
    </div>
    <!-- Container END -->

    </body>';
    }

}		


?>

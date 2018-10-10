<?php


    //cek session
    if(empty($_SESSION['admin']) || $_SESSION['admin']!=1){
        $_SESSION['err'] = '<strong>ERROR!</strong> Anda harus login terlebih dahulu.';
        header("Location: ./");
        die();
	
		
    } else {
		
		echo'<style>
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
				
				
            }
			p {
				color:red!important;
				display:inline!important;
					}
			th{
				border: table-cell;
				border:0.5px solid black!important;	
				background-color:#c5e3ed!important;
				text-align:center!important;
				
					}
			#gelo{
					width:1px!important;
					
					border:0.5px solid black!important;
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
				echo'<h1 style="font-weight:100;font-family:sans-serif;margin-top:20px;"><img class="logodisp" src="./asset/img/screenshots.png"/ style="width:25%;vertical-align:middle">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRekapitulasi Usia</img></h1>';
				echo '<hr style="display:block;margin-top:-5px;text-align:right"></hr>';?>
				
				
				
				
	
				

			<?php
		   
				   $query2 = mysqli_query($config, "SELECT nama,nip,status_karyawan FROM tbl_user WHERE id_user='$id_user'");
                    list($nama,$nip,$status_karyawan) = mysqli_fetch_array($query2);	
					$query3 = mysqli_query($config, "SELECT tgl_bakti,jabatan,KD_UNIT,jenis_kelamin,tempat_lahir,tanggal_lahir,status_keluarga,agama,goldarah,alamat,kelurahan,kecamatan,kota,propinsi,kode_pos,no_telpon FROM tbl_identitas WHERE id_user='$id_user'");
                    list($tgl_bakti,$jabatan,$KD_UNIT,$jenis_kelamin,$tempat_lahir,$tanggal_lahir,$status_keluarga,$agama,$goldarah,$alamat,$kelurahan,$kecamatan,$kota,$propinsi,$kode_pos,$no_telpon) = mysqli_fetch_array($query3);	
					$current_album='';
					$dptmn=mysqli_query($config,"SELECT * FROM tbl_department");
					
					$dibawah=array();
					$diantara1=array();
					$diantara2=array();
					$diantara3=array();
					$diatas=array();
					
                echo '
					
					<table style="stroke:rgba(0,0,0,0);border:0px!important;!important;">
						
								<tr>
								<th id="gelo" style="width:1%!important;" rowspan="2"><strong>No.</strong></th>
								<th id="gelo" style="width:15%!important;" rowspan="2"><strong>Unit Kerja</strong></th>
								<th id="gelo" style="width:8%!important;" rowspan="1" colspan="5"><strong>Usia</strong></th>
								
								
								</tr>
								
								<tr>
								
								<th id="gelo" style="width:7.5%!important;"><strong>Usia <= 25 Tahun</strong></th>
								<th id="gelo" style="width:7.5%!important;"><strong>25 Tahun < Usia <= 35 Tahun </strong></th>
								<th id="gelo" style="width:7.5%!important;"><strong>35 Tahun < Usia <= 45 Tahun </strong></th>
								<th id="gelo" style="width:7.5%!important;"><strong>45 Tahun < Usia <= 55 Tahun </strong></th>
								<th id="gelo" style="width:7.5%!important;"><strong>Usia > 55 Tahun</strong></th>
								
								</tr>';
								
								$no=1;
							$niks=mysqli_query($config,"SELECT * FROM tbl_department");
						while($rowb=mysqli_fetch_array($niks)){
							
							$dibawahs=array();
							$diantara1s=array();
							$diantara2s=array();
							$diantara3s=array();
							$diatass=array();
							echo'
							<tbody>
							<tr>
							<td id="gelo" style="text-align:center!important">'.$no++.'</td>
							<td id="gelo">'.$rowb['unit_kerja'].'</td>';
							$huhu=mysqli_query($config,"SELECT * FROM tbl_user WHERE unit='".$rowb['kode_unit']."' AND(id_user<>9999 AND admin<>1 AND admin<>9)");
							while($row=mysqli_fetch_array($huhu)){
							$huhuf=mysqli_query($config,"SELECT tanggal_lahir FROM tbl_identitas WHERE id_user='".$row['id_user']."'");
							list($tgl_lahir)=mysqli_fetch_array($huhuf);
							$ages = date_diff(date_create($tgl_lahir), date_create('now'))->y;								
							if($ages<=25){
								array_push($dibawah,$ages);
								array_push($dibawahs,$ages);
							} else
							if($ages>25 && $ages<=35){
								array_push($diantara1,$ages);
								array_push($diantara1s,$ages);
							} else
							if($ages>35 && $ages<=45){
								array_push($diantara2,$ages);
								array_push($diantara2s,$ages);
							} else
							if($ages>45 && $ages<=55){
								array_push($diantara3,$ages);
								array_push($diantara3s,$ages);
							} else
							if($ages>55){
								array_push($diatas,$ages);
								array_push($diatass,$ages);
							}
							
							
							
							
							}
							
								
							$a1=count($dibawahs);	
							$a2=count($diantara1s);
							$a3=count($diantara2s);
							$a4=count($diantara3s);
							$a5=count($diatass);
							
							if($a1==0){
								$a1='-';
							}
							if($a2==0){
								$a2='-';
							}
							if($a3==0){
								$a3='-';
							}
							if($a4==0){
								$a4='-';
							}
							if($a5==0){
								$a5='-';
							}
							echo'<td id="gelo" style="text-align:center!important">'.$a1.'</td>';
							echo'<td id="gelo" style="text-align:center!important">'.$a2.'</td>';
							echo'<td id="gelo" style="text-align:center!important">'.$a3.'</td>';
							echo'<td id="gelo" style="text-align:center!important">'.$a4.'</td>';
							echo'<td id="gelo" style="text-align:center!important">'.$a5.'</td>';
							
							
							
							echo'</tr>';}
								
							
						
						
						
						
							
						
						
						echo'
						
						<tr>';
							$a1s=count($dibawah);	
							$a2s=count($diantara1);
							$a3s=count($diantara2);
							$a4s=count($diantara3);
							$a5s=count($diatas);
							echo'
							<tr>
						<td id="gelo" width="15%" style="text-align:center!important;background-color:yellow!important" colspan="2" rowspan="2"><strong>TOTAL</strong></td>
						<td id="gelo" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important" rowspan="1">'.$a1s.'</td>
						<td id="gelo" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important" rowspan="1">'.$a2s.'</td>
						<td id="gelo" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important" rowspan="1">'.$a3s.'</td>
						<td id="gelo" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important" rowspan="1">'.$a4s.'</td>
						<td id="gelo" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important" rowspan="1">'.$a5s.'</td>						
						</tr>
						<tr>
						<td id="gelo" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important" rowspan="1" colspan="5">'.($a1s+$a2s+$a3s+$a4s+$a5s).'</td>
						</tr>
						</tbody>
						</table>
					
					';
					$huhuz=mysqli_query($config,"SELECT COUNT(*) FROM tbl_user WHERE id_user<>9999 AND(admin<>1 AND admin<>9)");
					list($halah)=mysqli_fetch_array($huhuz);
				echo'<h6 style="text-align:right!important"><p>*</p> JUMLAH KESELURUHAN : <strong>'.$halah.'</strong> KARYAWAN</h6>';
					
					
					echo'
    </div>
    <!-- Container END -->

    </body>';
    }

		


?>

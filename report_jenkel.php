<?php


    //cek session
    if(empty($_SESSION['admin']) || $_SESSION['admin']!=1){
        $_SESSION['err'] = '<strong>ERROR!</strong> Anda dilarang melihat data ini.';
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
				echo'<h1 style="font-weight:100;font-family:sans-serif;margin-top:20px;"><img class="logodisp" src="./asset/img/screenshots.png"/ style="width:25%;vertical-align:middle">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRekapitulasi Jenis Kelamin</img></h1>';
				echo '<hr style="display:block;margin-top:-5px;text-align:right"></hr>';?>
				
				
				
				
	
				

			<?php
		   
				   $query2 = mysqli_query($config, "SELECT nama,nip,status_karyawan FROM tbl_user WHERE id_user='$id_user'");
                    list($nama,$nip,$status_karyawan) = mysqli_fetch_array($query2);	
					$query3 = mysqli_query($config, "SELECT tgl_bakti,jenis_kelamin,tempat_lahir,tanggal_lahir,status_keluarga,agama,goldarah,alamat,kelurahan,kecamatan,kota,propinsi,kode_pos,no_telpon FROM tbl_identitas WHERE id_user='$id_user'");
                    list($tgl_bakti,$jenis_kelamin,$tempat_lahir,$tanggal_lahir,$status_keluarga,$agama,$goldarah,$alamat,$kelurahan,$kecamatan,$kota,$propinsi,$kode_pos,$no_telpon) = mysqli_fetch_array($query3);	
					$current_album='';
					$dptmn=mysqli_query($config,"SELECT * FROM tbl_department");
					
					$totalkelamla=array();
					$totalkelampe=array();
					
                echo '
					
					<table style="stroke:rgba(0,0,0,0);border:0px!important;!important;">
						
								<tr>
								<th id="gelo" style="width:1%!important;" rowspan="2"><strong>No.</strong></th>
								<th id="gelo" style="width:8%!important;" rowspan="2"><strong>Unit Kerja</strong></th>
								
								<th id="gelo" style="width:15%!important;" rowspan="1" colspan="2"><strong>Jenis Kelamin</strong></th>
								
								</tr>
								
								<tr>
								
								<th id="gelo" style="width:7.5%!important;"><strong>Laki - Laki</strong></th>
								<th id="gelo" style="width:7.5%!important;"><strong>Perempuan</strong></th>
								
								</tr>';
								
								$no=1;
							$niks=mysqli_query($config,"SELECT * FROM tbl_department");
						while($rowb=mysqli_fetch_array($niks)){
							$kelaminx=array();
							$kelamind=array();
							echo'
							<tbody>
							<tr>
							<td id="gelo" style="text-align:center!important">'.$no++.'</td>
							<td id="gelo">'.$rowb['unit_kerja'].'</td>';
							$huhu=mysqli_query($config,"SELECT * FROM tbl_user WHERE unit='".$rowb['kode_unit']."' AND(id_user<>9999 AND admin<>1 AND admin<>9)");
							while($row=mysqli_fetch_array($huhu)){
							$aya=mysqli_query($config,"SELECT jenis_kelamin FROM tbl_identitas WHERE id_user='".$row['id_user']."' AND jenis_kelamin='L'");
							while($data=mysqli_fetch_array($aya)){
								array_push($kelaminx,$data['jenis_kelamin']);
								array_push($totalkelamla,$data['jenis_kelamin']);
							}
							$ayad=mysqli_query($config,"SELECT jenis_kelamin FROM tbl_identitas WHERE id_user='".$row['id_user']."' AND jenis_kelamin='P'");
							while($data=mysqli_fetch_array($ayad)){
								array_push($kelamind,$data['jenis_kelamin']);
								array_push($totalkelampe,$data['jenis_kelamin']);
							}
							}
							
								
							$asda=count($kelaminx);	
							$asdad=count($kelamind);
							if($asda==0){
								$asda='-';
							}
							if($asdad==0){
								$asdad='-';
							}
							
							echo'<td id="gelo" style="text-align:center!important">'.$asda.'</td>';
							echo'<td id="gelo" style="text-align:center!important">'.$asdad.'</td>';
							
							
							
							echo'</tr>';}
								
							
						
						
						
						
							
						
						
						echo'
						
						<tr>';
						$satu=count($totalkelamla);
						$dua=count($totalkelampe);
							echo'
							<tr>
						<td id="gelo" width="15%" style="text-align:center!important;background-color:yellow!important" colspan="2" rowspan="2"><strong>TOTAL</strong></td>
						<td id="gelo" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important" rowspan="1">'.$satu.'</td>
						<td id="gelo" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important" rowspan="1">'.$dua.'</td>						
						</tr>
						<tr>
						<td id="gelo" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important" rowspan="1" colspan="2">'.($satu+$dua).'</td>
						</tr>
						</tbody>
						</table>
					
					';
					$huhuz=mysqli_query($config,"SELECT COUNT(*) FROM tbl_user WHERE id_user<>9999 AND(admin<>1 AND admin<>9)");
					list($halah)=mysqli_fetch_array($huhuz);
				echo'<h6 style="text-align:right!important">- JUMLAH KESELURUHAN : <strong>'.$halah.'</strong> KARYAWAN</h6>';
					
					
					echo'
    </div>
    <!-- Container END -->

    </body>';
    }

		


?>

<?php


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
				echo'<h1 style="font-weight:100;font-family:sans-serif;margin-top:20px;"><img class="logodisp" src="./asset/img/screenshots.png"/ style="width:25%;vertical-align:middle">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRekapitulasi SPPD</img></h1>';
				echo '<hr style="display:block;margin-top:-5px;text-align:right"></hr>';?>
				
				
				

			<?php
		   
				   	
					$current_album='';
					$dptmn=mysqli_query($config,"SELECT * FROM tbl_ref_divisi");
					
					while($row=mysqli_fetch_array($dptmn)){
						$no=1;
                echo '
					<h5>- Divisi : '.$row['uraian'].'</h5>
					
					<table style="stroke:rgba(0,0,0,0);border:0px!important;!important;">
				<tbody>
								<th id="gelo" style="width:1%!important;"><strong>No.</strong></th>
								
								<th id="gelo" style="width:5%!important;"><strong>NIK</strong></th>
								<th id="gelo" style="width:10%!important;"><strong>Nama</strong></th>
								<th id="gelo" style="width:15%!important;"><strong>Jabatan</strong></th>
								<th id="gelo" style="width:5%!important;"><strong>Tanggal Awal</strong></th>
								<th id="gelo" style="width:5%!important;"><strong>Tanggal Akhir</strong></th>
								<th id="gelo" style="width:5%!important;"><strong>Deskripsi</strong></th>
								
								
								</tbody><tbody>';
							
							$anjo=mysqli_query($config,"SELECT * FROM tbl_sppd WHERE divisi='".$row['kode']."'");
							
						while($rowb=mysqli_fetch_array($anjo)){
							$mob=mysqli_query($config,"SELECT nama,nip,jabatan FROM tbl_user WHERE id_user='".$rowb['id_user']."'");
							list($nama,$nip,$jabatan)=mysqli_fetch_array($mob);
							echo'
							
							<tr>
							<td id="gelo" style="text-align:center!important">'.$no++.'</td>';
							
							
							echo'<td id="gelo">'.$nama.'</td>';
							echo'<td id="gelo">'.$nip.'</td>';
							echo'<td id="gelo">'.$jabatan.'</td>';
							
							
							echo'</tr>';}
								
							echo'</tbody>';
						
						
						
						
						
						
						
						echo'
						<tbody>
						<tr>';
						if($_SESSION['admin']==1){
							echo'
						<td id="gelo" width="15%" style="text-align:right!important;background-color:yellow!important" colspan="12"><strong>TOTAL</strong></td>
						<td id="gelo" colspan="2" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important"></td>';}
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

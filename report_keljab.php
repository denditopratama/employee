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
				echo'<h1 style="font-weight:100;font-family:sans-serif;margin-top:20px;"><img class="logodisp" src="./asset/img/screenshots.png"/ style="width:25%;vertical-align:middle">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRekapitulasi Kelas Jabatan</img></h1>';
				echo '<hr style="display:block;margin-top:-5px;text-align:right"></hr>';?>
				
				
				
				
	
				

			<?php
		   
				   
					$dptmn=mysqli_query($config,"SELECT * FROM tbl_department");
					
					$totalislam=array();
					$totalkatholik=array();
					$totalprotestan=array();
					$totalhindu=array();
					$totalbudha=array();
					$totalkonghucu=array();
                echo '
					
					<table style="stroke:rgba(0,0,0,0);border:0px!important;!important;">
						
								<tr>
								<th id="gelo" style="width:1%!important;" rowspan="2"><strong>No.</strong></th>
								<th id="gelo" style="width:15%!important;" rowspan="2"><strong>Unit Kerja</strong></th>
								
								<th id="gelo" style="width:15%!important;" rowspan="1" colspan="6"><strong>Kelas Jabatan</strong></th>
								
								</tr>
								
								<tr>
								
								<th id="gelo" style="width:7.5%!important;"><strong>01</strong></th>
								<th id="gelo" style="width:7.5%!important;"><strong>02</strong></th>
								<th id="gelo" style="width:7.5%!important;"><strong>03</strong></th>
								<th id="gelo" style="width:7.5%!important;"><strong>04</strong></th>
								<th id="gelo" style="width:7.5%!important;"><strong>05</strong></th>
								<th id="gelo" style="width:7.5%!important;"><strong>06</strong></th>
								
								
								</tr>';
								$satus=array();
								$duas=array();
								$tigas=array();
								$empats=array();
								$limas=array();
								$enams=array();
								$no=1;
							$niks=mysqli_query($config,"SELECT * FROM tbl_department");
						while($rowb=mysqli_fetch_array($niks)){
							
							echo'
							<tbody>
							<tr>
							<td id="gelo" style="text-align:center!important">'.$no++.'</td>
							<td id="gelo">'.$rowb['unit_kerja'].'</td>';
							$huhu=mysqli_query($config,"SELECT COUNT(admin) FROM tbl_user WHERE unit='".$rowb['kode_unit']."' AND(admin=2 AND admin=3 AND id_user<>9999)");
							list($satu)=mysqli_fetch_array($huhu);
							array_push($satus,$satu);
							
							
							$huhuz=mysqli_query($config,"SELECT COUNT(admin) FROM tbl_user WHERE unit='".$rowb['kode_unit']."' AND(admin=4 AND id_user<>9999)");
							list($dua)=mysqli_fetch_array($huhuz);
							array_push($duas,$dua);
							
							$huhud=mysqli_query($config,"SELECT COUNT(admin) FROM tbl_user WHERE unit='".$rowb['kode_unit']."' AND(admin=5 AND id_user<>9999)");
							list($tiga)=mysqli_fetch_array($huhud);
							array_push($tigas,$tiga);
							
							$huhur=mysqli_query($config,"SELECT COUNT(admin) FROM tbl_user WHERE unit='".$rowb['kode_unit']."' AND(admin=6 AND id_user<>9999)");
							list($empat)=mysqli_fetch_array($huhur);
							array_push($empats,$empat);
							
							$huhurs=mysqli_query($config,"SELECT COUNT(admin) FROM tbl_user WHERE unit='".$rowb['kode_unit']."' AND(admin=7 AND id_user<>9999)");
							list($lima)=mysqli_fetch_array($huhurs);
							array_push($limas,$lima);
							
							$huhursd=mysqli_query($config,"SELECT COUNT(admin) FROM tbl_user WHERE unit='".$rowb['kode_unit']."' AND(admin=8 AND id_user<>9999)");
							list($enam)=mysqli_fetch_array($huhursd);
							array_push($enams,$enam);
							
							if($satu==0){
								$satu='-';
							}
							if($dua==0){
								$dua='-';
							}
							if($tiga==0){
								$tiga='-';
							}
							if($empat==0){
								$empat='-';
							}
							if($lima==0){
								$lima='-';
							}
							if($enam==0){
								$enam='-';
							}
							
							echo'<td id="gelo" style="text-align:center!important">'.$satu.'</td>';
							echo'<td id="gelo" style="text-align:center!important">'.$dua.'</td>';
							echo'<td id="gelo" style="text-align:center!important">'.$tiga.'</td>';
							echo'<td id="gelo" style="text-align:center!important">'.$empat.'</td>';
							echo'<td id="gelo" style="text-align:center!important">'.$lima.'</td>';
							echo'<td id="gelo" style="text-align:center!important">'.$enam.'</td>';
							
							
							
							
							echo'</tr>';}
								
							
						
						
						
						
							
						
						
						echo'
						
						<tr>';
							$q=array_sum($satus);
							$qq=array_sum($duas);
							$qqq=array_sum($tigas);
							$qqqq=array_sum($empats);
							$qqqqq=array_sum($limas);
							$qqqqqq=array_sum($enams);
							echo'
							<tr>
						<td id="gelo" width="15%" style="text-align:center!important;background-color:yellow!important" colspan="2" rowspan="2"><strong>TOTAL</strong></td>
						<td id="gelo" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important" rowspan="1">'.$q.'</td>
						<td id="gelo" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important" rowspan="1">'.$qq.'</td>
						<td id="gelo" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important" rowspan="1">'.$qqq.'</td>
						<td id="gelo" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important" rowspan="1">'.$qqqq.'</td>
						<td id="gelo" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important" rowspan="1">'.$qqqqq.'</td>
						<td id="gelo" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important" rowspan="1">'.$qqqqqq.'</td>
												
						</tr>
						<tr>
						<td id="gelo" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important" rowspan="1" colspan="6">'.($q+$qq+$qqq+$qqqq+$qqqqq+$qqqqqq).'</td>
						</tr>
						</tbody>
						</table>
					
					';
					$huhuz=mysqli_query($config,"SELECT COUNT(*) FROM tbl_user WHERE id_user<>9999 AND(admin<>1 AND admin<>9)");
					list($halah)=mysqli_fetch_array($huhuz);
				echo'<h6 style="text-align:right!important"><p>*</p>JUMLAH KESELURUHAN : <strong>'.$halah.'</strong> KARYAWAN</h6>';
					
					
					echo'
    </div>
    <!-- Container END -->

    </body>';
    }

		


?>

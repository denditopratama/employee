<?php


    //cek session
    if(empty($_SESSION['admin']) || $_SESSION['admin']!=1){
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
				echo'<h1 style="font-weight:100;font-family:sans-serif;margin-top:20px;"><img class="logodisp" src="./asset/img/screenshots.png"/ style="width:25%;vertical-align:middle">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRekapitulasi Agama</img></h1>';
				echo '<hr style="display:block;margin-top:-5px;text-align:right"></hr>';?>
				
				
				
				
	
				

			<?php
		   
				   
					
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
								
								<th id="gelo" style="width:15%!important;" rowspan="1" colspan="6"><strong>Agama</strong></th>
								
								</tr>
								
								<tr>
								
								<th id="gelo" style="width:7.5%!important;"><strong>Islam</strong></th>
								<th id="gelo" style="width:7.5%!important;"><strong>Protestan</strong></th>
								<th id="gelo" style="width:7.5%!important;"><strong>Katholik</strong></th>
								<th id="gelo" style="width:7.5%!important;"><strong>Hindu</strong></th>
								<th id="gelo" style="width:7.5%!important;"><strong>Budha</strong></th>
								<th id="gelo" style="width:7.5%!important;"><strong>Konghucu</strong></th>
								
								</tr>';
								
								$no=1;
							$niks=mysqli_query($config,"SELECT * FROM tbl_department");
						while($rowb=mysqli_fetch_array($niks)){
							$islam=array();
							$protestan=array();
							$katholik=array();
							$hindu=array();
							$budha=array();
							$konghucu=array();
							echo'
							<tbody>
							<tr>
							<td id="gelo" style="text-align:center!important">'.$no++.'</td>
							<td id="gelo">'.$rowb['unit_kerja'].'</td>';
							$huhu=mysqli_query($config,"SELECT * FROM tbl_user WHERE unit='".$rowb['kode_unit']."' AND(id_user<>9999 AND admin<>1 AND admin<>9)");
							while($row=mysqli_fetch_array($huhu)){
							$aya=mysqli_query($config,"SELECT agama FROM tbl_identitas WHERE id_user='".$row['id_user']."' AND agama=1");
							while($data=mysqli_fetch_array($aya)){
								array_push($islam,$data['agama']);
								array_push($totalislam,$data['agama']);
							}
							
							$ayad=mysqli_query($config,"SELECT agama FROM tbl_identitas WHERE id_user='".$row['id_user']."' AND agama=2");
							while($data=mysqli_fetch_array($ayad)){
								array_push($protestan,$data['agama']);
								array_push($totalprotestan,$data['agama']);
							}
							
							$b=mysqli_query($config,"SELECT agama FROM tbl_identitas WHERE id_user='".$row['id_user']."' AND agama=3");
							while($data=mysqli_fetch_array($b)){
								array_push($katholik,$data['agama']);
								array_push($totalkatholik,$data['agama']);
							}
							
							$c=mysqli_query($config,"SELECT agama FROM tbl_identitas WHERE id_user='".$row['id_user']."' AND agama=4");
							while($data=mysqli_fetch_array($c)){
								array_push($hindu,$data['agama']);
								array_push($totalhindu,$data['agama']);
							}
							
							$d=mysqli_query($config,"SELECT agama FROM tbl_identitas WHERE id_user='".$row['id_user']."' AND agama=5");
							while($data=mysqli_fetch_array($d)){
								array_push($budha,$data['agama']);
								array_push($totalbudha,$data['agama']);
							}
							
							$ayad=mysqli_query($config,"SELECT agama FROM tbl_identitas WHERE id_user='".$row['id_user']."' AND agama=6");
							while($data=mysqli_fetch_array($ayad)){
								array_push($konghucu,$data['agama']);
								array_push($totalkonghucu,$data['agama']);
							}
							
							
							
							
							
							}
							
								
							$q=count($islam);
							$qq=count($protestan);
							$qqq=count($katholik);
							$qqqq=count($hindu);
							$qqqqq=count($budha);
							$qqqqqq=count($konghucu);
							if($q==0){
								$q='-';
							}
							if($qq==0){
								$qq='-';
							}
							if($qqq==0){
								$qqq='-';
							}
							if($qqqq==0){
								$qqqq='-';
							}
							if($qqqqq==0){
								$qqqqq='-';
							}
							if($qqqqqq==0){
								$qqqqqq='-';
							}
							echo'<td id="gelo" style="text-align:center!important">'.$q.'</td>';
							echo'<td id="gelo" style="text-align:center!important">'.$qq.'</td>';
							echo'<td id="gelo" style="text-align:center!important">'.$qqq.'</td>';
							echo'<td id="gelo" style="text-align:center!important">'.$qqqq.'</td>';
							echo'<td id="gelo" style="text-align:center!important">'.$qqqqq.'</td>';
							echo'<td id="gelo" style="text-align:center!important">'.$qqqqqq.'</td>';
							
							
							
							echo'</tr>';}
								
							
						
						
						
						
							
						
						
						echo'
						
						<tr>';
							$q1=count($totalislam);
							$qq2=count($totalprotestan);
							$qqq3=count($totalkatholik);
							$qqqq4=count($totalhindu);
							$qqqqq5=count($totalbudha);
							$qqqqqq6=count($totalkonghucu);
							echo'
							<tr>
						<td id="gelo" width="15%" style="text-align:center!important;background-color:yellow!important" colspan="2" rowspan="2"><strong>TOTAL</strong></td>
						<td id="gelo" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important" rowspan="1">'.$q1.'</td>
						<td id="gelo" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important" rowspan="1">'.$qq2.'</td>
						<td id="gelo" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important" rowspan="1">'.$qqq3.'</td>
						<td id="gelo" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important" rowspan="1">'.$qqqq4.'</td>
						<td id="gelo" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important" rowspan="1">'.$qqqqq5.'</td>
						<td id="gelo" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important" rowspan="1">'.$qqqqqq6.'</td>						
						</tr>
						<tr>
						<td id="gelo" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important" rowspan="1" colspan="6">'.($q1+$qq2+$qqq3+$qqqq4+$qqqqq5+$qqqqqq6).'</td>
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

<?php


      header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=report_usia.xls");

session_start();
 
require('./include/config.php');
       
echo'
        <!-- Container START -->
        <div class="container">
            <div id="colres">
                <div class="disp">';
				echo'<h1 style="font-weight:100;font-family:sans-serif;margin-top:20px;"><img class="logodisp" src="./asset/img/screenshots.png"/ style="width:25%;vertical-align:middle">Rekapitulasi Usia</img></h1>';
				echo '<hr style="display:block;margin-top:-5px;text-align:right"></hr>';?>
				
				
				
				
	
				

			<?php
		   
				   	
					$current_album='';
					$dptmn=mysqli_query($config,"SELECT * FROM tbl_department");
					
					$dibawah=array();
					$diantara1=array();
					$diantara2=array();
					$diantara3=array();
					$diatas=array();
					
                echo '
					
					<table border="1">
						
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
					$huhuz=mysqli_query($config,"SELECT COUNT(*) FROM tbl_user WHERE id_user<>9999 AND(admin<>1 AND admin<>9 AND status_aktif=1)");
					list($halah)=mysqli_fetch_array($huhuz);
				echo'<h6 style="text-align:right!important"><p>*</p> JUMLAH KESELURUHAN : <strong>'.$halah.'</strong> KARYAWAN</h6>';
					
				
		


?>

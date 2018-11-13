
<?php

header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=report_statkar.xls");

session_start();
 
require('./include/config.php');


		   
			echo'<h1 style="font-weight:100;font-family:sans-serif;margin-top:20px;"><img class="logodisp" src="./asset/img/screenshots.png"/ style="width:25%;vertical-align:middle">Rekapitulasi Status Karyawan</img></h1>';
				echo '<hr style="display:block;margin-top:-5px;text-align:right"></hr>';?>
				
				
			<?php
		   
				 
					
					$totalislam=array();
					$totalkatholik=array();
					$totalprotestan=array();
					$totalhindu=array();
					$totalbudha=array();
					$totalkonghucu=array();
                echo '
					
					<table border="1">
						
								<tr>
								<th id="gelo" style="width:1%!important;" rowspan="2"><strong>No.</strong></th>
								<th id="gelo" style="width:15%!important;" rowspan="2"><strong>Unit Kerja</strong></th>
								<th id="gelo" style="width:15%!important;" rowspan="1" colspan="5"><strong>Status Karyawan</strong></th>
								
								</tr>
								
								<tr>
								
								<th id="gelo" style="width:7.5%!important;"><strong>Komisaris</strong></th>
								<th id="gelo" style="width:7.5%!important;"><strong>Direksi</strong></th>
								<th id="gelo" style="width:7.5%!important;"><strong>Karyawan Perbantuan</strong></th>
								<th id="gelo" style="width:7.5%!important;"><strong>Karyawan Tetap</strong></th>
								<th id="gelo" style="width:7.5%!important;"><strong>PKWT</strong></th>
								
								
								</tr>';
								$komisariss=array();
								$direksis=array();
								$kps=array();
								$kts=array();
								$pkwts=array();
								$no=1;
							$niks=mysqli_query($config,"SELECT * FROM tbl_department");
							while($rowb=mysqli_fetch_array($niks)){
							
							echo'
							<tbody>
							<tr>
							<td id="gelo" style="text-align:center!important">'.$no++.'</td>
							<td id="gelo">'.$rowb['unit_kerja'].'</td>';
							$huhu=mysqli_query($config,"SELECT COUNT(status_karyawan) FROM tbl_user WHERE unit='".$rowb['kode_unit']."' AND(status_karyawan=1 AND id_user<>9999 AND admin<>1 AND admin<>9)");
							list($komisaris)=mysqli_fetch_array($huhu);
							array_push($komisariss,$komisaris);
							
							$huhus=mysqli_query($config,"SELECT COUNT(status_karyawan) FROM tbl_user WHERE unit='".$rowb['kode_unit']."' AND(status_karyawan=2 AND id_user<>9999 AND admin<>1 AND admin<>9)");
							list($direksi)=mysqli_fetch_array($huhus);
							array_push($direksis,$direksi);
							
							$huhuz=mysqli_query($config,"SELECT COUNT(status_karyawan) FROM tbl_user WHERE unit='".$rowb['kode_unit']."' AND(status_karyawan=3 AND id_user<>9999 AND admin<>1 AND admin<>9)");
							list($kp)=mysqli_fetch_array($huhuz);
							array_push($kps,$kp);
							
							$huhud=mysqli_query($config,"SELECT COUNT(status_karyawan) FROM tbl_user WHERE unit='".$rowb['kode_unit']."' AND(status_karyawan=4 AND id_user<>9999 AND admin<>1 AND admin<>9)");
							list($kt)=mysqli_fetch_array($huhud);
							array_push($kts,$kt);
							
							$huhur=mysqli_query($config,"SELECT COUNT(status_karyawan) FROM tbl_user WHERE unit='".$rowb['kode_unit']."' AND(status_karyawan=5 AND id_user<>9999 AND admin<>1 AND admin<>9)");
							list($pkwt)=mysqli_fetch_array($huhur);
							array_push($pkwts,$pkwt);
							
							if($komisaris==0){
								$komisaris='-';
							}
							if($direksi==0){
								$direksi='-';
							}
							if($kp==0){
								$kp='-';
							}
							if($kt==0){
								$kt='-';
							}
							if($pkwt==0){
								$pkwt='-';
							}
							
							echo'<td id="gelo" style="text-align:center!important">'.$komisaris.'</td>';
							echo'<td id="gelo" style="text-align:center!important">'.$direksi.'</td>';
							echo'<td id="gelo" style="text-align:center!important">'.$kp.'</td>';
							echo'<td id="gelo" style="text-align:center!important">'.$kt.'</td>';
							echo'<td id="gelo" style="text-align:center!important">'.$pkwt.'</td>';
							
							
							
							
							echo'</tr>';}
								
							
						
						echo'
						
						<tr>';
							$q=array_sum($komisariss);
							$qq=array_sum($direksis);
							$qqq=array_sum($kps);
							$qqqq=array_sum($kts);
							$qqqqq=array_sum($pkwts);
							echo'
							<tr>
						<td id="gelo" width="15%" style="text-align:center!important;background-color:yellow!important" colspan="2" rowspan="2"><strong>TOTAL</strong></td>
						<td id="gelo" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important" rowspan="1">'.$q.'</td>
						<td id="gelo" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important" rowspan="1">'.$qq.'</td>
						<td id="gelo" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important" rowspan="1">'.$qqq.'</td>
						<td id="gelo" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important" rowspan="1">'.$qqqq.'</td>
						<td id="gelo" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important" rowspan="1">'.$qqqqq.'</td>
												
						</tr>
						<tr>
						<td id="gelo" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important" rowspan="1" colspan="5">'.($q+$qq+$qqq+$qqqq+$qqqqq).'</td>
						</tr>
						</tbody>
						</table>
					
					';
					$huhuz=mysqli_query($config,"SELECT COUNT(*) FROM tbl_user WHERE id_user<>9999 AND(admin<>1 AND admin<>9)");
					list($halah)=mysqli_fetch_array($huhuz);
				echo'<h6 style="text-align:right!important"><p>*</p>JUMLAH KESELURUHAN : <strong>'.$halah.'</strong> KARYAWAN</h6>';
					
					
			
					
					
				


		


?>




<?php

header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=report_jenkel.xls");

session_start();
 
require('./include/config.php');


		   
					$current_album='';
					$dptmn=mysqli_query($config,"SELECT * FROM tbl_department");
					
					$totalkelamla=array();
					$totalkelampe=array();
					
                echo '
					
					<table border="1">
						
								<tr>
								<th rowspan="2"><strong>No.</strong></th>
								<th rowspan="2"><strong>Unit Kerja</strong></th>
								
								<th rowspan="1" colspan="2"><strong>Jenis Kelamin</strong></th>
								
								</tr>
								
								<tr>
								
								<th ><strong>Laki - Laki</strong></th>
								<th ><strong>Perempuan</strong></th>
								
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
							
							echo'<td >'.$asda.'</td>';
							echo'<td >'.$asdad.'</td>';
							
							
							
							echo'</tr>';}
								
							
						
						
						
						
							
						
						
						echo'
						
						<tr>';
						$satu=count($totalkelamla);
						$dua=count($totalkelampe);
							echo'
							<tr>
						<td colspan="2" rowspan="2"><strong>TOTAL</strong></td>
						<td rowspan="1">'.$satu.'</td>
						<td rowspan="1">'.$dua.'</td>						
						</tr>
						<tr>
						<td rowspan="1" colspan="2">'.($satu+$dua).'</td>
						</tr>
						</tbody>
						</table>
					
					';
					$huhuz=mysqli_query($config,"SELECT COUNT(*) FROM tbl_user WHERE id_user<>9999 AND(admin<>1 AND admin<>9)");
					list($halah)=mysqli_fetch_array($huhuz);
				echo'<h6>- JUMLAH KESELURUHAN : <strong>'.$halah.'</strong> KARYAWAN</h6>';
					
					
				


		


?>



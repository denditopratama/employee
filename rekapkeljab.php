<?php


  header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=report_keljab.xls");

session_start();
 
require('./include/config.php');

		echo'

        <!-- Container START -->
        <div class="container">
            <div id="colres">
                <div class="disp">';
				echo'<h1 style="font-weight:100;font-family:sans-serif;margin-top:20px;"><img class="logodisp" src="./asset/img/screenshots.png"/ style="width:25%;vertical-align:middle">Rekapitulasi Kelas Jabatan</img></h1>';
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
					
					<table border="1">';
					$zz=mysqli_query($config,"SELECT * FROM tbl_kelas_jabatan");
					echo'
						
								<tr>
								<th id="gelo" style="width:1%!important;" rowspan="2"><strong>No.</strong></th>
								<th id="gelo" style="width:15%!important;" rowspan="2"><strong>Unit Kerja</strong></th>
								
								<th id="gelo" style="width:15%!important;" rowspan="1" colspan="'.mysqli_num_rows($zz).'"><strong>Kelas Jabatan</strong></th>
								
								</tr>
								
								<tr>';
								
								while($data=mysqli_fetch_array($zz)){
									echo'
								
								<th id="gelo" style="width:7.5%!important;"><strong>'.$data['kelas_jabatan'].'</strong></th>
								';}
								echo'
								
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
							
							$bz=mysqli_query($config,"SELECT * FROM tbl_kelas_jabatan");
							while($rowz=mysqli_fetch_array($bz)){
							$huhu=mysqli_query($config,"SELECT COUNT(kelas_jabatan) FROM tbl_user WHERE unit='".$rowb['kode_unit']."' AND(admin<>1 AND admin <>9 AND id_user<>9999 AND kelas_jabatan='".$rowz['kelas_jabatan']."' AND status_aktif=1)");
							list($satu)=mysqli_fetch_array($huhu);
							
							
							
							if($satu==0){
								$satu='-';
							}
							
							echo'<td id="gelo" style="text-align:center!important">'.$satu.'</td>';}
							
							
							
							
							
							echo'</tr>';
								
						}
						
						
						
						
							
						
						
						echo'
						
						<tr>';
						
							echo'
							<tr>
						<td id="gelo" width="15%" style="text-align:center!important;background-color:yellow!important" colspan="2" rowspan="2"><strong>TOTAL</strong></td>';
						$bzg=mysqli_query($config,"SELECT * FROM tbl_kelas_jabatan");
						$nenc=0;
							while($rowz=mysqli_fetch_array($bzg)){
								$yoy=mysqli_query($config,"SELECT COUNT(*) FROM tbl_user WHERE kelas_jabatan='".$rowz['kelas_jabatan']."'");
								list($jum)=mysqli_fetch_array($yoy);
							echo'
							<td id="gelo" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important" rowspan="1">'.$jum.'</td>';
							$nenc=$nenc+$jum;
							}
							echo'
										
						</tr>
						<tr>
						<td id="gelo" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important" rowspan="1" colspan="'.mysqli_num_rows($zz).'">'.$nenc.'</td>
						</tr>
						</tbody>
						</table>
					
					';
					$huhuz=mysqli_query($config,"SELECT COUNT(*) FROM tbl_user WHERE id_user<>9999 AND(admin<>1 AND admin<>9 AND status_aktif=1)");
					list($halah)=mysqli_fetch_array($huhuz);
				echo'<h6 style="text-align:right!important"><p>*</p>JUMLAH KESELURUHAN : <strong>'.$halah.'</strong> KARYAWAN</h6>';
					
	
		


?>

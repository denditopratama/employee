<?php
require('./include/config.php');
		$tahun=mysqli_real_escape_string($config,$_POST['tahunsppd']);
		$bulan=mysqli_real_escape_string($config,$_POST['bulansppd']);
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=report_SPPD_".$bulan."".$tahun.".xls");

session_start();
 

    
echo'
        <!-- Container START -->
        <div class="container">
            <div id="colres">
                <div class="disp">';
				echo'<h1>Rekapitulasi SPPD Bulan : '.date("F",$bulan).' '.$tahun.'</h1>';
				echo '<hr style="display:block;margin-top:-5px;text-align:right"></hr>';?>
				
				
				

			<?php
		   
				   	
					$current_album='';
					$dptmn=mysqli_query($config,"SELECT * FROM tbl_ref_divisi");
					
					while($row=mysqli_fetch_array($dptmn)){
						$no=1;
                echo '
					<h5>- Divisi : '.$row['uraian'].'</h5>
					
					<table border="1">
				<tbody>
								<th id="gelo" style="width:1%!important;"><strong>No.</strong></th>
								
								<th id="gelo" style="width:5%!important;"><strong>NIK</strong></th>
								<th id="gelo" style="width:10%!important;"><strong>Nama</strong></th>
								<th id="gelo" style="width:15%!important;"><strong>Jabatan</strong></th>
								<th id="gelo" style="width:5%!important;"><strong>Tanggal Awal</strong></th>
								<th id="gelo" style="width:5%!important;"><strong>Tanggal Akhir</strong></th>
								<th id="gelo" style="width:5%!important;"><strong>Deskripsi</strong></th>
								
								
								</tbody><tbody>';
							
							$anjo=mysqli_query($config,"SELECT * FROM tbl_sppd WHERE divisi='".$row['kode']."' AND(MONTH(tanggal_awal)='$bulan' AND YEAR(tanggal_awal)='$tahun') ORDER BY tanggal_awal");
							$nampung=0;
						while($rowb=mysqli_fetch_array($anjo)){
							$mob=mysqli_query($config,"SELECT nama,nip,jabatan FROM tbl_user WHERE id_user='".$rowb['id_user']."'");
							list($nama,$nip,$jabatan)=mysqli_fetch_array($mob);
							$jb=mysqli_query($config,"SELECT jabatan FROM tbl_ref_jabatan WHERE id='$jabatan'");
							list($jabatan)=mysqli_fetch_array($jb);
							echo'
							
							<tr>
							<td id="gelo" style="text-align:center!important">'.$no++.'</td>';
							
							
							echo'<td id="gelo">'.$nip.'</td>';
							echo'<td id="gelo">'.$nama.'</td>';
							echo'<td id="gelo">'.$jabatan.'</td>';
							echo'<td id="gelo">'.date("d",strtotime($rowb['tanggal_awal'])).' - '.date("M",strtotime($rowb['tanggal_awal'])).' - '.date("Y",strtotime($rowb['tanggal_awal'])).'</td>';
							echo'<td id="gelo">'.date("d",strtotime($rowb['tanggal_akhir'])).' - '.date("M",strtotime($rowb['tanggal_akhir'])).' - '.date("Y",strtotime($rowb['tanggal_akhir'])).'</td>';
							echo'<td id="gelo">'.$rowb['deskripsi'].'</td>';
							$nampung=$nampung+1;
							echo'</tr>';}
								
							echo'</tbody>';
						
						echo'
						<tbody>
						<tr>';
					
							echo'
						<td id="gelo" width="15%" style="text-align:right!important;background-color:yellow!important" colspan="6"><strong>TOTAL</strong></td>
						<td id="gelo" style="background-color:yellow!important;font-weight:bold!important;text-align:center!important">'.$nampung.'</td>';
						
							echo'
						</tr>
						</tbody>
						</table>
					
					';}
				
			
    

		


?>

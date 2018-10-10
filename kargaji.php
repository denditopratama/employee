<div class="row jarak-form">
				<div class="col m4">
                          
							<?php
				$id_user=mysqli_real_escape_string($config,$_REQUEST['karyawan']);
			
		
					$ddtd=mysqli_query($config,"SELECT bulan FROM tbl_bulan_gaji WHERE id='$id'");
					list($bln)=mysqli_fetch_array($ddtd);
					$blan=date('m',strtotime($bln));
					$than=date('Y',strtotime($bln)); 
				
				
				$querye = mysqli_query($config,"SELECT foto FROM tbl_user WHERE id_user='$id_user'");
           while($rows=mysqli_fetch_array($querye)){ 
		   if($rows['foto']==""){
			echo'<img class="file" src="./upload/foto/batman.jpg" style="display:block;width:100%;margin-bottom:20px">';
		   }
		   else{
		   echo'<img class="file" src="./upload/foto/'.$rows['foto'].'" style="display:block;width:100%;margin-bottom:20px">'; }} ?>
					</div>
				
					
					
					
                <?php
                    

                        echo '
                       			<div class="col m8">
                       			<div id="asd" class="input-field col s12" >
                            <i id="roro" class="material-icons prefix md-prefix" >attach_money</i><label>Penerimaan Lain</label><br/>	
                            <select class="browser-default" name="tunjukan" id="tunjukan" style="margin-bottom:15px;">';
					$query = mysqli_query($config,"SELECT * FROM tbl_jenis_penerimaan");	
							while ($row = mysqli_fetch_array($query)) {											
								echo "<option id='qq' value='".$row['id']."|".$row['nama']."'>".$row['uraian']."</option>";}
								echo "</select>";
							
								
			echo'
					</div>
                       			</div>

                                <div class="col m12" id="colres">
								<h5>A. Keterangan Presensi</h5>
                                    <table class="bordered" id="tblb">
                                        <thead class="blue lighten-4" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                                            <tr>
                                                <th width="1%">No</th>
                                                <th width="20%">Nama</th>
												<th width="16%">Keterangan</th>
                                                <th width="15%">Tanggal</th>
												<th width="15%" colspan"2">Jam</th>
												<th width="10%">Status Manager</th>
                                                
                                            </tr>
											
                                        </thead>

                                        <tbody>
                                            <tr>';
									
                                        $query2 = mysqli_query($config, "SELECT * FROM tbl_keterangan_presensi WHERE id_user='$id_user' AND(MONTH(tanggal)='$blan' AND YEAR(tanggal)='$than')");
										
										
									

                                        if(mysqli_num_rows($query2) > 0){
                                            $no = 0;
                                            while($row = mysqli_fetch_array($query2)){
												$titit=mysqli_query($config,"SELECT nama FROM tbl_user WHERE id_user='".$row['id_user']."'");
												list($namas)=mysqli_fetch_array($titit);
                                            $no++;
                                             echo ' <tr>
													<td style="text-align:center">'.$no.'</td>
                                                    <td style="text-align:center">'.$namas.'</td>
                                                    <td style="text-align:center">'.$row['keterangan'].'</td>
													<td style="text-align:center">'.$row['tanggal'].'</td>
													<td style="text-align:center">'.$row['jam'].'</td>';
										
										
										echo'
										<td style="text-align:center">';
										
										
										if($row['status_gm']==1){										
											  echo'
											<a class="btn small light-green waves-effect waves-light");">
											<i class="material-icons">done</i></a>';} 
											else {
											echo'
											<a class="btn small red waves-effect waves-light");">
										<i class="material-icons">highlight_off</i></a>';}
										
										
										echo'</td>';
										
													
										
										

											echo'
													
                                            
                                        </tbody>
										</tr>';
                                            
										
                                }
                            } else {
                                echo '<tr><td colspan="8"><center><p class="add">Tidak ada data untuk ditampilkan. <u></u> </p></center></td></tr>';
                            }
                            echo '</table>
							
							
							<h5>B. Lembur</h5>
							<table class="bordered" id="tblb">
                                        <thead class="blue lighten-4" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                                            <tr>
                                                <th width="1%" rowspan="2">No</th>
                                                <th width="20%" rowspan="2">Nama</th>
                                                <th width="15%" rowspan="2">Tanggal</th>
												<th width="16%" rowspan="2">Deskripsi Pekerjaan</th>
                                                <th width="14%" colspan="2" style="border-bottom:1px solid black">Jam Lembur</th>
												<th width="14%" rowspan="2">Status Manager</th>
												<th width="14%" rowspan="2">Status GM</th>
                                                <th width="10%" rowspan="2">Tindakan</th>
                                            </tr>
											<tr>
											 <th width="7%">Awal</th>
                                                <th width="7%">Akhir</th>
											</tr>
                                        </thead>

                                        <tbody>
                                            <tr>';
										
                                        $query2d = mysqli_query($config, "SELECT * FROM tbl_lembur WHERE id_user='$id_user' AND(MONTH(tanggal)='$blan' AND YEAR(tanggal)='$than')");
										
									

                                        if(mysqli_num_rows($query2d) > 0){
                                            $no = 0;
                                            while($row = mysqli_fetch_array($query2d)){
												$titit=mysqli_query($config,"SELECT nama FROM tbl_user WHERE id_user='".$row['id_user']."'");
												list($namas)=mysqli_fetch_array($titit);
                                            $no++;
                                             echo ' <td style="text-align:center">'.$no.'</td>
                                                    <td style="text-align:center">'.$namas.'</td>
                                                    <td style="text-align:center">'.$row['tanggal'].'</td>
													<td style="text-align:center">'.$row['pekerjaan'].'</td>
													<td style="text-align:center">'.$row['jam_awal'].'</td>
													<td style="text-align:center">'.$row['jam_akhir'].'</td>';

										
										echo'
										<td style="text-align:center">';
										if($_SESSION['admin']==1 || $_SESSION['admin']==5){
										if($row['status_manager']==1){										
											  echo'
											<a class="btn small light-green waves-effect waves-light tooltipped" href="?page=lmbr&sub=manager&id='.$row['id'].'&id_presensi='.$row['id_presensi'].'&tak=mMyu" data-position="left" data-tooltip="Klik untuk membatalkan persetujuan" onclick="return confirm(\'Anda yakin ingin mengubah data?\');">
											<i class="material-icons">done</i></a>';} 
											else {
											echo'
											<a class="btn small red waves-effect waves-light tooltipped" href="?page=lmbr&sub=manager&id='.$row['id'].'&id_presensi='.$row['id_presensi'].'&tak=NnsJ" data-position="left" data-tooltip="Klik untuk Menyetujui" onclick="return confirm(\'Anda yakin ingin mengubah data?\');">
										<i class="material-icons">highlight_off</i></a>';}}
										else {
											if($row['status_manager']==1){										
											  echo'
											<a class="btn small light-green waves-effect waves-light tooltipped" data-position="left" data-tooltip="Klik untuk membatalkan persetujuan">
											<i class="material-icons">done</i></a>';} 
											else {
											echo'
											<a class="btn small red waves-effect waves-light tooltipped" data-position="left" data-tooltip="Klik untuk Menyetujui">
										<i class="material-icons">highlight_off</i></a>';}
										}
										
										
										
										echo'</td>';
										
										
										echo'
										<td style="text-align:center">';
										
										if($_SESSION['admin']==1 || $_SESSION['admin']==4){
										if($row['status_gm']==1){										
											  echo'
											<a class="btn small light-green waves-effect waves-light tooltipped" href="?page=lmbr&sub=manager&id='.$row['id'].'&id_presensi='.$row['id_presensi'].'&tak=IuJh" data-position="left" data-tooltip="Klik untuk membatalkan persetujuan" onclick="return confirm(\'Anda yakin ingin mengubah data?\');">
											<i class="material-icons">done</i></a>';} 
											else {
											echo'
											<a class="btn small red waves-effect waves-light tooltipped" href="?page=lmbr&sub=manager&id='.$row['id'].'&id_presensi='.$row['id_presensi'].'&tak=OkgJ" data-position="left" data-tooltip="Klik untuk Menyetujui" onclick="return confirm(\'Anda yakin ingin mengubah data?\');">
										<i class="material-icons">highlight_off</i></a>';}}
										else{
										if($row['status_gm']==1){										
											  echo'
											<a class="btn small light-green waves-effect waves-light tooltipped" data-position="left" data-tooltip="Klik untuk membatalkan persetujuan">
											<i class="material-icons">done</i></a>';} 
											else {
											echo'
											<a class="btn small red waves-effect waves-light tooltipped" data-position="left" data-tooltip="Klik untuk Menyetujui">
										<i class="material-icons">highlight_off</i></a>';}	
										}
										
										echo'</td>';
										
													
										echo'
										<td style="text-align:center">';
										if($row['id_user']!=$_SESSION['id_user'] && $_SESSION['admin']!=1){
											echo '<button class="btn small blue-grey waves-effect waves-light"><i class="material-icons">error</i> No Action</button>';
										}
										else{
										echo'
										<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Lembur" href="?page=lmbr&sub=del&id='.$row['id'].'&id_presensi='.$row['id_presensi'].'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
										<i class="material-icons">delete</i> DEL</a></td>';}

											echo'
													
                                            </tr>
                                        </tbody>';
                                            }
                                        } else {
                                            echo '<tr><td colspan="9"><center><p class="add">Tidak ada data untuk ditampilkan.</p></center></td></tr>';
                                        }
                                echo '</table>
							
							
							
                        </div>
                   
                    <!-- Row form END -->';

                   
            
<?php
session_start();
require('../include/config.php');
$token=mysqli_real_escape_string($config,$_POST['token']);
$nyet=$_SESSION['tokenpresensi'];
if(empty($_SESSION['admin']) || $token!=$nyet ){
	echo '
	<script>
	alert(\'ACCESS DENIED WOI!\');
	window.location.href=\'../\';
	</script>';
} else {

$ids=mysqli_real_escape_string($config,$_POST['idz']);
$user=mysqli_real_escape_string($config,$_POST['user']);
echo'
<div class="row jarak-form">

                                <div class="col m12" id="colres">
                                    <table class="bordered" id="tblb">
                                        <thead class="blue lighten-4" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                                            <tr>
                                                <th width="1%">No</th>
                                                <th width="20%">Nama</th>
												<th width="16%">Keterangan</th>
                                                <th width="15%">Tanggal</th>
												<th width="15%" colspan"2">Jam</th>
												<th width="10%">Status Manager</th>
                                                <th width="10%">Tindakan</th>
                                            </tr>
											
                                        </thead>

                                        <tbody>
                                            <tr>';
										if($_SESSION['admin']==1){
                                        $query2 = mysqli_query($config, "SELECT * FROM tbl_keterangan_presensi WHERE id_presensi='$ids' AND id_user='$user'");}

										else if($_SESSION['admin']==4 || $_SESSION['admin']==5){
										$query2 = mysqli_query($config, "SELECT * FROM tbl_keterangan_presensi WHERE id_presensi='$ids' AND(divisi='".$_SESSION['divisi']."' AND id_user='$user')");	
                                        }
                                        
										else{
										$query2 = mysqli_query($config, "SELECT * FROM tbl_keterangan_presensi WHERE id_presensi='$ids' AND id_user='$user'");
										}
										
									

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
										
										if($_SESSION['admin']==1 || $_SESSION['admin']==4 || $_SESSION['admin']==5){
										if($row['status_gm']==1){										
											  echo'
											<a class="btn small light-green waves-effect waves-light tooltipped" href="?page=pres&act=ketpres&sub=managers&id='.$row['id'].'&id_presensi='.$row['id_presensi'].'&tak=IuJh" data-position="left" data-tooltip="Klik untuk membatalkan persetujuan" onclick="return confirm(\'Anda yakin ingin mengubah data?\');">
											<i class="material-icons">done</i></a>';} 
											else {
											echo'
											<a class="btn small red waves-effect waves-light tooltipped" href="?page=pres&act=ketpres&sub=managers&id='.$row['id'].'&id_presensi='.$row['id_presensi'].'&tak=OkgJ" data-position="left" data-tooltip="Klik untuk Menyetujui" onclick="return confirm(\'Anda yakin ingin mengubah data?\');">
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
										<a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Keterangan" href="?page=pres&act=ketpres&sub=del&id='.$row['id'].'&id_presensi='.$row['id_presensi'].'" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
										<i class="material-icons">delete</i> DEL</a></td>';}

											echo'
													
                                            
                                        </tbody>
										</tr>';
                                            
											}} else {
                                            echo '<tr style="text-align:center"><td colspan="9"><center><p style="text-align:center" class="add">Tidak ada data untuk ditampilkan.</p></center></td></tr>';
                                        }
                                echo '</table>
                                </div>
                            </div>';
                                    }
                            ?>
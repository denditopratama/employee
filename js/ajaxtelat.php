
<?php
session_start();
require('../include/config.php');
$tokent=mysqli_real_escape_string($config,$_POST['token']);
$nyet=$_SESSION['tokent'];
if(empty($_SESSION['admin'])){
	echo '
	<script>
	alert(\'ACCESS DENIED WOI!\');
	window.location.href=\'../\';
	</script>';
} else {
    $id=mysqli_real_escape_string($config,$_POST['id']);
	$sub1=mysqli_real_escape_string($config,$_POST['sub1']);
	$id_gaji=mysqli_real_escape_string($config,$_POST['id_gaji']);
        $mojok=mysqli_real_escape_string($config,$_POST['user']);
        $o=mysqli_query($config,"SELECT nip FROM tbl_user WHERE id_user='$mojok'");
        list($nik)=mysqli_fetch_array($o);
 
    

    echo'
    
    <style>
    #hahx{
        padding:0px!important;
    }
    </style>
    <div class="row jarak-form">
    ';
    
    if($_SESSION['admin']==1){
        if(!empty($_POST['yow'])){
            $yow=mysqli_real_escape_string($config,$_POST['yow']);
            if($yow==1){
                $jjg=mysqli_query($config,"SELECT DISTINCT nik FROM tbl_presensi_karyawan");
            }
            else {
                $jjg=mysqli_query($config,"SELECT DISTINCT nik FROM tbl_presensi_karyawan WHERE nik='$nik'"); 
            }
            
        } else {
            $jjg=mysqli_query($config,"SELECT DISTINCT nik FROM tbl_presensi_karyawan WHERE nik='$nik'");
        }
       
    }
    else {
    $jjg=mysqli_query($config,"SELECT DISTINCT nik FROM tbl_presensi_karyawan WHERE nik='$nik'");    
    } 
    
    if(mysqli_num_rows($jjg)<=0){
       echo '<p style="text-align:center" class="add">Presensi Belum Diupload.</p>';
        } 
                                        while($data=mysqli_fetch_array($jjg)){
                                            echo'
                                            <form method="POST">
                                <div class="col m12" id="colres">
                                    <table class="bordered" id="tblb">
                                    <small>KETERANGAN :</small><br>
                                    <small>* Baris berwarna kuning merupakan hari libur mingguan</small><br>
                                    <small>* Klik Tombol Simpan Untuk menyimpan keterangan</small><br>
                                    <small>* Klik Tombol Persetujuan untuk menyetujui presensi</small><br>
                                    <hr>
                                        <thead class="blue lighten-4" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                                            <tr>
                                                <th width="1%" rowspan="2">No</th>
                                                <th width="15%" rowspan="2">Nama</th>
                                                <th width="16%" rowspan="2">Tanggal</th>
                                                <th width="5%" rowspan="2">Jam Masuk</th>
                                                <th width="5%" rowspan="2">Jam Pulang</th>
                                                <th width="5%" rowspan="2">Terlambat</th>
                                                <th width="20%" rowspan="2">Keterangan</th>
                                            </tr>
											
                                        </thead>
                                        
                                        <tbody>
                                            ';
										if($_SESSION['admin']==1){
                                        $query2 = mysqli_query($config, "SELECT * FROM tbl_presensi_karyawan WHERE id_presensi='$id' AND nik='".$data['nik']."' ");}
										else{
										$query2 = mysqli_query($config, "SELECT * FROM tbl_presensi_karyawan WHERE id_presensi='$id' AND nik='$nik'");	
                                        }
                                        $namp=mysqli_query($config,"SELECT id_user,admin FROM tbl_user WHERE nip='".$data['nik']."'");
                                        list($id_users,$admin)=mysqli_fetch_array($namp);
                                       
                                            $nyoy=array();
                                            $nyoy2=array();
                                        if(mysqli_num_rows($query2) > 0){
                                            
                                            $no = 0;
                                            while($row = mysqli_fetch_array($query2)){
											
                                            $no++;
                                            if(date('D',strtotime($row['tanggal']))=='Sat' || date('D',strtotime($row['tanggal']))=='Sun'){
                                                echo '<tr style="background-color:yellow">'; 
                                                $row['terlambat']='00:00';
                                            } else {
                                                echo '<tr>';
                                            }
                                             echo'
                                                    <td id="hahx" style="text-align:center">'.$no.'</td>
                                                    <td id="hahx" style="text-align:center">'.$row['nama'].'</td>
                                                    <td id="hahx" style="text-align:center">'.date('d',strtotime($row['tanggal'])).' - '.date('M',strtotime($row['tanggal'])).' - '.date('Y',strtotime($row['tanggal'])).'</td>';
                                                    if($_SESSION['admin']==1 && $_SESSION['divisi']==2){
                                                        echo '<td id="hahx" style="text-align:center"><input type="text" name="jmmsk[]" style="text-align:center;font-size:18px" value="'.$row['jam_masuk'].'"></td>
                                                        <td id="hahx" style="text-align:center"><input type="text" name="jmplg[]" style="text-align:center;font-size:18px"  value="'.$row['jam_pulang'].'"></td>';
                                                    } else {
                                                        echo '<td id="hahx" style="text-align:center">'.$row['jam_masuk'].'</td>
                                                        <td id="hahx" style="text-align:center">'.$row['jam_pulang'].'</td>';
                                                    }
													
                                                    if($row['terlambat']==''){
                                                        $row['terlambat']='00:00';
                                                    }
                                           
                                                    $mosc=strtotime($row['tanggal']);
                                                    
                                                    $kemang=mysqli_query($config,"SELECT tgl_awal,tgl_akhir FROM tbl_cuti WHERE id_user='$id_users'");
                                                    list($gaspol,$ereun)=mysqli_fetch_array($kemang);
                                                    $gaspol1=strtotime($gaspol);
                                                    $gaspol2=strtotime($ereun);
                                                    if($mosc >= $gaspol1 && $mosc <=$gaspol2){
                                                        $row['keterangan']='Cuti';
                                                    }
                                                   
                                                    echo'
                                                    <td id="hahx" style="text-align:center">'.$row['terlambat'].'</td>
                                                    <td id="hahx" style="text-align:center"><input style="text-align:center" value="'.$row['keterangan'].'" name="keter[]" type="text"></td>';
                                                   
                                               
                                                    echo'
                                                    <input type="hidden" value="'.$row['id'].'" name="aid[]">
                                                    <input type="hidden" value="'.$row['nik'].'" name="naip[]">
                                                    ';
                                                    
                                                    $nyot=explode(':',$row['terlambat']);
                                                    
                                                    $konay=mysqli_query($config,"SELECT status_manager,status_gm FROM tbl_status_keterangan_presensi WHERE id_presensi='$id' AND id_user='$id_users'");
                                                    list($stakm,$stakgm)=mysqli_fetch_array($konay);
                                                  
                                                    
                                                    if($admin==1 || $admin==2 || $admin==3){
                                                                array_push($nyoy,0);
                                                                array_push($nyoy2,0);
                                                    } else if($admin==5){
                                                        if($stakgm==1){
                                                            if($row['keterangan']==''){
                                                                array_push($nyoy,$nyot[0]);
                                                                array_push($nyoy2,$nyot[1]);
                                                            }
                                                        } else {
                                                            array_push($nyoy,$nyot[0]);
                                                            array_push($nyoy2,$nyot[1]);
                                                        }
                                                    } else if($admin==4) {
                                                        if($row['keterangan']==''){
                                                            array_push($nyoy,$nyot[0]);
                                                            array_push($nyoy2,$nyot[1]);
                                                        } 
                                                    } else {
                                                        if($stakm==1){
                                                            if($row['keterangan']==''){
                                                                array_push($nyoy,$nyot[0]);
                                                                array_push($nyoy2,$nyot[1]);
                                                            }
                                                        } else {
                                                            array_push($nyoy,$nyot[0]);
                                                            array_push($nyoy2,$nyot[1]);  
                                                        }
                                                    }

                                                    
                                                   
                                                    
											echo'
													
                                            </tr>
                                        </tbody>';
                                            }
                                            $mb=array_sum($nyoy)*60;
                                            $mbz=array_sum($nyoy2);
                                            $fok=$mb+$mbz;
                                            echo '
                                            <input type="hidden" value="'.$id.'" name="idpres">
                                            <tr style="background-color:yellow"><td colspan="9" style="text-align:center">Total Terlambat : <b>'.$fok.'</b> Menit</td></tr>
                                            <input type="hidden" id="telatbosd" value="'.$fok.'">
                                            <tr><td colspan="9" style="text-align:center">';
                                          
                                           
                                            $bnz=mysqli_query($config,"SELECT status_manager,status_gm FROM tbl_status_keterangan_presensi WHERE id_presensi='$id' AND id_user='$id_users'");
                                            
                                            if($bnz==true){
                                                list($statm,$statgm)=mysqli_fetch_array($bnz);
                                                if($admin==1 || $admin==2 || $admin==3 || $admin==4){
                                                    echo '<a class="btn green"><i class="material-icons">done</i> tidak membutuhkan persetujuan</a>' ; 
                                                
                                                } else
                                                if ($admin==5){
                                                    if($statgm==0){
                                                        if($_SESSION['admin']==1 || $_SESSION['admin']==2 || $_SESSION['admin']==3 || $_SESSION['admin']==4){
                                                            echo '<a class="btn red"  href="?page=pres&act=ketpres&sub=approval&id='.$id.'&aksi=gm1&id_user='.$id_users.'"><i class="material-icons">close</i> belum disetujui GM</a>' ;
                                                        } else {
                                                            echo '<a class="btn red"><i class="material-icons">close</i> belum disetujui GM</a>' ;
                                                        }
                                                        
                                                    } else {
                                                        if($_SESSION['admin']==1 || $_SESSION['admin']==2 || $_SESSION['admin']==3 || $_SESSION['admin']==4){
                                                        echo '<a class="btn green"  href="?page=pres&act=ketpres&sub=approval&id='.$id.'&aksi=gm0&id_user='.$id_users.'"><i class="material-icons">done</i> sudah disetujui GM</a>' ;
                                                        } else {
                                                            echo '<a class="btn green"><i class="material-icons">done</i> sudah disetujui GM</a>' ;    
                                                        }
                                                    }
                                                } else {
                                                    if($statm==0){
                                                        if($_SESSION['admin']==1 || $_SESSION['admin']==2 || $_SESSION['admin']==3 || $_SESSION['admin']==4 || $_SESSION['admin']==5){
                                                        echo '<a class="btn red"  href="?page=pres&act=ketpres&sub=approval&id='.$id.'&aksi=m1&id_user='.$id_users.'"><i class="material-icons">close</i> belum disetujui manager</a>' ;
                                                        } else {
                                                            echo '<a class="btn red"><i class="material-icons">close</i> belum disetujui manager</a>' ;   
                                                        }
                                                    } else {
                                                        if($_SESSION['admin']==1 || $_SESSION['admin']==2 || $_SESSION['admin']==3 || $_SESSION['admin']==4 || $_SESSION['admin']==5){
                                                        echo '<a class="btn green" href="?page=pres&act=ketpres&sub=approval&id='.$id.'&aksi=m0&id_user='.$id_users.'"><i class="material-icons">done</i> sudah disetujui manager</a>' ;
                                                        } else {
                                                            echo '<a class="btn green"><i class="material-icons">done</i> sudah disetujui manager</a>' ;   
                                                        }
                                                    } 
                                                }
                                                

                                                
                                            } 
                                            echo'</td></tr>
                                            <tr><td colspan="9" style="text-align:center"><button type="submit" name="simpanket" class="btn green"><i class="material-icons">add</i> simpan</button></td></tr>
                                            </form>';
                                        } else { 
                                            echo '<tr><td colspan="9"><center><p style="text-align:center" class="add">Tidak ada data untuk ditampilkan.</p></center></td></tr>';
                                        }
                                echo '</table>
                                </div>
                            </div>
                            
                            
                            <!-- Row form END -->
                            
                           
                            ';
									}
									$nnngj=mysqli_query($config,"SELECT menit_telat FROM tbl_handle");
								list($mkgg)=mysqli_fetch_array($nnngj);
								$jostelat=($fok/$mkgg)*$sub1;
								$kosd=mysqli_query($config,"INSERT INTO tbl_potongan(id_gaji,id_user,kode_potongan,jumlah) VALUES('$id_gaji','$mojok',28,'$jostelat')");

								
							}
                            ?>
                            
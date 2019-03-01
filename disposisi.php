<?php
    //cek session
	
/* 		$queryd = mysqli_query($config, "SELECT nama FROM tbl_disposisi WHERE id_surat='".$_REQUEST['id_surat']."'");
	while($row = mysqli_fetch_array($queryd)){
		if($_SESSION['admin']!=1 && $_SESSION['nama']!=$row['nama']){	
			header("Location: ./");
			die();
		}
		
	} */
	?>
<style>
.td{
	text-align:center!important;
}
.td ,th{
	text-align:center;
}

</style>
<?php
    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    }

	else {
		$id_surat=mysqli_real_escape_string($config,$_REQUEST['id_surat']);
		$nbmn=mysqli_query($config,"SELECT nama FROM tbl_disposisi WHERE id_surat='$id_surat'");
        list($df)=mysqli_fetch_array($nbmn);
        $nbmns=mysqli_query($config,"SELECT id_user FROM tbl_surat_masuk WHERE id_surat='$id_surat'");
		list($dfs)=mysqli_fetch_array($nbmns);
		if($df!=$_SESSION['nama'] && $dfs!=$_SESSION['id_user']){
            if($_SESSION['admin']==1){}
                else { echo '<script language="javascript">
                    window.alert("ERROR! Anda tidak diperbolehkan mengedit surat lain");
                    window.location.href="./admin.php?page=tsm";
                  </script>';}
           
			                
		}
		
		if(isset($_POST['submits'])){
		$update=mysqli_query($config,"UPDATE tbl_disposisi SET status=2");
		$updates=mysqli_query($config,"UPDATE tbl_surat_masuk SET status=2 WHERE id_surat='".$_REQUEST['id_surat']."'");
		}	

        if(isset($_REQUEST['sub'])){
            $sub = $_REQUEST['sub'];
            switch ($sub) {
                case 'add':
                    include "tambah_disposisi.php";
                    break;
                case 'edit':
                    include "edit_disposisi.php";
                    break;
                case 'del':
                    include "hapus_disposisi.php";
                    break;
            }
        } else {

            //pagging
            $limit = 5;
            $pg = @$_GET['pg'];
                if(empty($pg)){
                    $curr = 0;
                    $pg = 1;
                } else {
                    $curr = ($pg - 1) * $limit;
                }

                $id_surat = mysqli_real_escape_string($config,$_REQUEST['id_surat']);

                $query = mysqli_query($config, "SELECT * FROM tbl_surat_masuk WHERE id_surat='$id_surat'");

                if(mysqli_num_rows($query) > 0){
                    $no = 1;
                    while($row = mysqli_fetch_array($query)){

                    if(empty($_SESSION['admin'])){
                        echo '<script language="javascript">
                                window.alert("ERROR! Anda tidak memiliki hak akses untuk melihat data ini");
                                window.location.href="./admin.php?page=tsm";
                              </script>';
                    } else {

                      echo '<!-- Row Start -->
                            <div class="row">
                                <!-- Secondary Nav START -->
                                <div class="col s12">
                                    <div class="z-depth-1">
                                        <nav class="secondary-nav">
                                            <div class="nav-wrapper blue-grey darken-5" style="background-color:#39424c!important">
                                                <div class="col m12">
                                                    <ul class="left">
                                                        <li class="waves-effect waves-light hide-on-small-only"><a href="#" class="judul"><i class="material-icons">description</i> Disposisi  Surat</a></li>
                                                        <li class="waves-effect waves-light">
                                                            <a href="?page=tsm&act=disp&id_surat='.$row['id_surat'].'&sub=add"><i class="material-icons md-24">add_circle</i> Tambah Disposisi</a>
                                                        </li>';
														
														if ($_SESSION['admin']==1 || $_SESSION['admin']==8){
														echo'
                                                        <li class="waves-effect waves-light"><a href="?page=tsmall">' ;}
														else {
														echo'
                                                        <li class="waves-effect waves-light"><a href="?page=tsm">'	;
														}					
														echo'				
														
														<i class="material-icons">arrow_back</i> Kembali</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                                <!-- Secondary Nav END -->
                            </div>
                            <!-- Row END -->

                            <!-- Perihal START -->
                            <div class="col s12">
                                <div class="card yellow darken">
                                    <div class="card-content">
                                        <p><p class="description">Perihal Surat:</p><strong>'.$row['isi'].'</strong></p>
										<p><p class="description">Isi Surat:</p><strong>'.$row['keterangan'].'</strong></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Perihal END -->';

                            if(isset($_SESSION['succAdd'])){
                                $succAdd = $_SESSION['succAdd'];
                                echo '<div id="alert-message" class="row">
                                        <div class="col m12">
                                            <div class="card green lighten-5">
                                                <div class="card-content notif">
                                                    <span class="card-title green-text"><i class="material-icons md-36">done</i> '.$succAdd.'</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                unset($_SESSION['succAdd']);
                            }
                            if(isset($_SESSION['succEdit'])){
                                $succEdit = $_SESSION['succEdit'];
                                echo '<div id="alert-message" class="row">
                                        <div class="col m12">
                                            <div class="card green lighten-5">
                                                <div class="card-content notif">
                                                    <span class="card-title green-text"><i class="material-icons md-36">done</i> '.$succEdit.'</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                unset($_SESSION['succEdit']);
                            }
                            if(isset($_SESSION['succDel'])){
                                $succDel = $_SESSION['succDel'];
                                echo '<div id="alert-message" class="row">
                                        <div class="col m12">
                                            <div class="card green lighten-5">
                                                <div class="card-content notif">
                                                    <span class="card-title green-text"><i class="material-icons md-36">done</i> '.$succDel.'</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                unset($_SESSION['succDel']);
                            }

                            echo '
                            <!-- Row form Start -->
                            <div class="row jarak-form">

                                <div class="col m12" id="colres">
                                    <table class="bordered" id="tbl">
                                        <thead class="blue lighten-4" id="head">
                                            <tr>
                                                <th width="6%">No</th>
                                                <th width="22%">Tujuan Disposisi</th>
                                                <th width="25%">Isi Disposisi</th>
                                                <th width="15%">Sifat<br/><hr style="background-color:black">Batas Waktu</th>
												<th width="16%">Status Baca</th>
												<th width="16%">Status Disposisi</th>
                                                <th width="16%">Tindakan</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>';
								// JOIN tbl_surat_masuk ON tbl_disposisi.id_surat = tbl_surat_masuk.id_surat
                                        $query2 = mysqli_query($config, "SELECT * FROM tbl_disposisi WHERE tbl_disposisi.id_surat='$id_surat'");
										//$query3 = mysqli_query($config,"SELECT nama FROM tbl_user WHERE '".$_."'")
											//while($row = mysqli_fetch_array($query3))
										
										
									$baca=1;
									$bacang=mysqli_real_escape_string($config,$baca);
									$querbroy=mysqli_query($config,"UPDATE tbl_disposisi SET baca='$bacang' WHERE nama='".$_SESSION['nama']."' AND id_surat='".$_REQUEST['id_surat']."'");

                                        if(mysqli_num_rows($query2) > 0){
                                            $no = 0;
                                            while($row = mysqli_fetch_array($query2)){
                                            $no++;
                                             echo ' <td style="text-align:center">'.$no.'</td>
                                                    <td style="text-align:center">'.$row['nama'].'</td>
                                                    <td style="text-align:center">'.$row['catatan'].'</td>';

                                                    $y = substr($row['batas_waktu'],0,4);
                                                    $m = substr($row['batas_waktu'],5,2);
                                                    $d = substr($row['batas_waktu'],8,2);

                                                    if($m == "01"){
                                                        $nm = "Januari";
                                                    } elseif($m == "02"){
                                                        $nm = "Februari";
                                                    } elseif($m == "03"){
                                                        $nm = "Maret";
                                                    } elseif($m == "04"){
                                                        $nm = "April";
                                                    } elseif($m == "05"){
                                                        $nm = "Mei";
                                                    } elseif($m == "06"){
                                                        $nm = "Juni";
                                                    } elseif($m == "07"){
                                                        $nm = "Juli";
                                                    } elseif($m == "08"){
                                                        $nm = "Agustus";
                                                    } elseif($m == "09"){
                                                        $nm = "September";
                                                    } elseif($m == "10"){
                                                        $nm = "Oktober";
                                                    } elseif($m == "11"){
                                                        $nm = "November";
                                                    } elseif($m == "12"){
                                                        $nm = "Desember";
                                                    }
                                             
													
										
										echo'<td style="text-align:center">'.$row['sifat'].'<br><hr style="background-color:rgba(0,0,0,0.3)">'.$d." ".$nm." ".$y.'</td><td style="text-align:center">';
													
										$weq=mysqli_query($config,"SELECT baca FROM tbl_disposisi WHERE id_disposisi='".$row['id_disposisi']."'");	
										list($baca) = mysqli_fetch_array($weq);	
									
										if($baca==1){										
											  echo'
											<a class="btn small light-green waves-effect waves-light tooltipped"  data-position="left" data-tooltip="Surat Telah Dibaca">
											<i class="material-icons"></i> SUDAH DIBACA</a>';
													} 
											else {
											echo'
											<a class="btn small red waves-effect waves-light tooltipped"  data-position="left" data-tooltip="Surat Belum Dibaca">
										<i class="material-icons"></i> BELUM DIBACA</a>';} 
										echo'</td><td>';
										
										echo'<form method="POST" action="">';
										if($row['status']==1){										
											  echo'
										<button class="btn small red waves-effect waves-light tooltipped" type="submits" name="submits" value="submit" data-position="left" data-tooltip="Surat Belum Selesai Diproses">
										<i class="material-icons">highlight_off</i> BELUM SELESAI</button>';
									} 
									else if($row['status']==2) {
										echo'
										<a class="btn small light-green waves-effect waves-light tooltipped" data-position="left" data-tooltip="Surat Telah Selesai Diproses">
                                    <i class="material-icons">done_all</i> SUDAH SELESAI</a>';}
									else {echo'';}
										echo'</form>';
										echo '</td><td style="text-align:center">';
																				
										
														if($_SESSION['nama']==$row['dari'] || $_SESSION['admin']==1){
														echo'
                                                    <a class="btn small blue waves-effect waves-light" href="?page=tsm&act=disp&id_surat='.$id_surat.'&sub=edit&id_disposisi='.$row['id_disposisi'].'">
														<i class="material-icons">edit</i> EDIT</a>
														<a class="btn small deep-orange waves-effect waves-light" href="?page=tsm&act=disp&id_surat='.$id_surat.'&sub=del&id_disposisi='.$row['id_disposisi'].'"><i class="material-icons">delete</i> DEL</a>';}
														
														else {echo'<button class="btn small blue-grey waves-effect waves-light"><i class="material-icons">error</i> No Action</button>';}
														echo'
                                                        
                                                    </td>
                                            </tr>
                                        </tbody>';
                                            }
                                        } else {
                                            echo '<tr><td colspan="7"><center><p class="add">Tidak ada data untuk ditampilkan. <u><a href="?page=tsm&act=disp&id_surat='.$row['id_surat'].'&sub=add">Tambah data baru</a></u></p></center></td></tr>';
                                        }
                                echo '</table>
                                </div>
                            </div>
                            <!-- Row form END -->';
                    }
                }
            }
        }
    }
?>

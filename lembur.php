<?php
    //cek session
	
/* 		$queryd = mysqli_query($config, "SELECT nama FROM tbl_disposisi WHERE id='".$_REQUEST['id']."'");
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
	$id=mysqli_real_escape_string($config,$_REQUEST['id']);
	if($_SESSION['admin']!=1){
	$cekdiv=mysqli_query($config,"SELECT divisi FROM tbl_presensi WHERE id='$id'");
	list($divisis)=mysqli_fetch_array($cekdiv);
	if($divisis!=$_SESSION['divisi']){
	$_SESSION['err'] = '<center>Anda dilarang untuk melihat data selain divisi anda!</center>';
        header("Location: ./admin.php?page=pres");
      
	}}
    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    }

	else {
		

        if(isset($_REQUEST['sub'])){
            $sub = $_REQUEST['sub'];
            switch ($sub) {
                
                case 'del':
                    include "hapus_lembur.php";
                    break;
				case 'manager':
                    include "lembur_manager.php";
                    break;
				
            }
        } else {
			
			
				$id=mysqli_real_escape_string($config,$_REQUEST['id']);
				
				if(isset($_REQUEST['accept'])){
					if($_SESSION['admin']==4){
					$itj=mysqli_query($config,"UPDATE tbl_lembur SET status_gm=1 WHERE id_presensi='$id' AND divisi='".$_SESSION['divisi']."'");}
					else if($_SESSION['admin']==1){
					$itj=mysqli_query($config,"UPDATE tbl_lembur SET status_gm=1,status_manager=1 WHERE id_presensi='$id'");
					}
				}
				
				
				if(isset($_REQUEST['tambahlembur'])){
				$tanggallembur=mysqli_real_escape_string($config,$_REQUEST['tanggallembur']);
				$deskripsi=mysqli_real_escape_string($config,$_REQUEST['deskripsi']);
				$jamawal=mysqli_real_escape_string($config,$_REQUEST['jamawal']);
				$menitawal=mysqli_real_escape_string($config,$_REQUEST['menitawal']);
				$jamakhir=mysqli_real_escape_string($config,$_REQUEST['jamakhir']);
				$menitakhir=mysqli_real_escape_string($config,$_REQUEST['menitakhir']);
				
				$tambahlembur=mysqli_query($config,"INSERT INTO tbl_lembur (id_presensi,id_user,tanggal,pekerjaan,jam_awal,jam_akhir,divisi) VALUES('$id','".$_SESSION['id_user']."','$tanggallembur','$deskripsi','$jamawal.$menitawal','$jamakhir.$menitakhir','".$_SESSION['divisi']."')");
				$_SESSION['succEdit'] = 'SUKSES! Lembur berhasil diinput';
                                header("Location: ./admin.php?page=lmbr&id=".$id."");
                                die();
				}
            //pagging
            $limit = 99999999;
            $pg = @$_GET['pg'];
                if(empty($pg)){
                    $curr = 0;
                    $pg = 1;
                } else {
                    $curr = ($pg - 1) * $limit;
                }

                $id = mysqli_real_escape_string($config,$_REQUEST['id']);

                $query = mysqli_query($config, "SELECT bulan FROM tbl_presensi WHERE id='$id'");
				list($bulan)=mysqli_fetch_array($query);
				$bulans=date('M Y',strtotime($bulan));
                

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
                                                        <li class="waves-effect waves-light hide-on-small-only"><a href="#" class="judul"><i class="material-icons">alarm_add</i> Lembur</a></li>
                                                        
                                                      
														
                                                        <li class="waves-effect waves-light"><a href="?page=pres">
																						
														
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
                                        <p><p class="description">Lembur Bulan:</p><strong>'.$bulans.'<strong></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Perihal END -->';
							echo'<div class="col m12">
                            <div class="card">
                                <div class="card-content">
                                    <span class="card-title black-text"><i class="material-icons md-36" >note</i> Proses Lembur</span>
                                    <p class="kata">Berikut Beberapa hal yang harus diperhatikan saat mengajukan <strong>LEMBUR</strong></p><br/>

                                    <p><strong>1.</strong> Pekerjaan Lembur Adalah Pekerjaan yang Tidak dapat di tunda dan Harus di selesaikan pada saat ini yang apabila tidak diselesaikan akan mengalami kerugian bagi Perusahaan atau dapat Menganggu Kelancaran</p>
									<p><strong>2.</strong> Pekerjaan yang diperintahkan secara<span class="red-text"> <strong>Mendadak</strong></span>.</p>
									<p><strong>3.</strong> Apabila tidak ada persetujuan dari <strong>General Manager</strong> atau <strong>Manager</strong> terkait, maka pengajuan lembur tidak akan di proses</p>
									
									
                                </div>
								</div>
								</div>';

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
                            }?>
							
							<div class="col m12" id="colres">		
                            <table class="bordered" id="tblp">
                                <thead class="blue lighten-4" id="head" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-bottom:2px solid black">
                                   <tr>
                                               
                                                <th width="15%" rowspan="2">Tanggal Lembur</th>
												<th width="16%" rowspan="2">Deskripsi Pekerjaan</th>
                                                <th width="14%" colspan="4" style="border-bottom:1px solid black">Jam Lembur</th>
												<th width="16%" rowspan="2">Tindakan</th>
                                            </tr>
											<tr>
											 <th width="7%" colspan="2">Awal</th>
                                                <th width="7%" colspan="2">Akhir</th>
											</tr>
										</thead>
										
										<form method="POST">
										<tbody style="background-color:rgba(255,255,0,0.7);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
										
										
										<td style="text-align:center">
										<input id="tgl_surat" class="datepicker" type="text" name="tanggallembur" style="text-align:center">
										</td>
										
										<td style="text-align:center">
										<input type="text" name="deskripsi" style="text-align:center" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
										</td>
										
										
										
										<td style="text-align:center">
										<input type="number" name="jamawal" style="text-align:center" min="00" max="23" required>
										</td>
										
										<td style="text-align:center">
										<input type="number" name="menitawal" style="text-align:center" min="00" max="59" required>
										</td>
										
										<td style="text-align:center">
										<input type="number" name="jamakhir" style="text-align:center" min="00" max="23" required>
										</td>
										
										<td style="text-align:center">
										<input type="number" name="menitakhir" style="text-align:center" min="00" max="59" required>
										</td>
										
										
										
										<td style="text-align:center">
										<button id="tambah" type="submit" name="tambahlembur" class="btn-large" style="text-align:center;">TAMBAH</button>
										</td>
										
										</tbody>
										</form>
										</table>
										</div>
                           <?php 
						   if($_SESSION['admin']==1 || $_SESSION['admin']==4){
						   echo'<div class="col m12" style="text-align:center;margin-top:34px">
                           
                                    <form method="POST">
									<button class="btn small blue waves-effect waves-light tooltipped" name="accept" data-position="left" data-tooltip="Klik untuk Menyetujui" onclick="return confirm(\'Anda yakin ingin menyetujui semua data?\');">
										<i class="material-icons">warning</i> SETUJUI SEMUA DATA</button>
										</form>
									
                                
						   </div>';}
						   
						   
						   echo '
                            <!-- Row form Start -->
                            <div class="row jarak-form">

                                <div class="col m12" id="colres">
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
										if($_SESSION['admin']==1){
                                        $query2 = mysqli_query($config, "SELECT * FROM tbl_lembur WHERE id_presensi='$id'");}
										else if($_SESSION['admin']==4){
										$query2 = mysqli_query($config, "SELECT * FROM tbl_lembur WHERE id_presensi='$id' AND divisi='".$_SESSION['divisi']."'");	
										}
										else if($_SESSION['admin']==5){
										$query2 = mysqli_query($config, "SELECT * FROM tbl_lembur WHERE id_presensi='$id' AND divisi='".$_SESSION['divisi']."'");	
										}
										else{
										$query2 = mysqli_query($config, "SELECT * FROM tbl_lembur WHERE id_presensi='$id' AND id_user='".$_SESSION['id_user']."'");
										}
										
									

                                        if(mysqli_num_rows($query2) > 0){
                                            $no = 0;
                                            while($row = mysqli_fetch_array($query2)){
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
                            </div>
							
                            <!-- Row form END -->';
                    }
                
            
        }
    }
	
?>
<script type="text/javascript" src="asset/js/halamanlembur.js"></script>
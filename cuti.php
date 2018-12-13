<?php
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
    //cek session
    if(empty($_SESSION['admin']) || $_SESSION['admin']==1 && $_SESSION['divisi']!=2){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {

				

        if(isset($_REQUEST['act'])){
            $act = $_REQUEST['act'];
            switch ($act) {
                case 'add':
                    include "tambah_cuti.php";
                    break;
				case 'edit':
                    include "edit_cuti.php";
                    break;
				case 'hapus':
                    include "hapus_cuti.php";
                    break;
				case 'approvem':
                    include "approvem_cuti.php";
                    break;
				case 'approveg':
                    include "approveg_cuti.php";
                    break;
				case 'approves':
                    include "approves_cuti.php";
                    break;
               
            }
        } else {

           

            //pagging
            $limit = 20;
            $pg = mysqli_real_escape_string($config,@$_GET['pg']);
                if(empty($pg)){
                    $curr = 0;
                    $pg = 1;
                } else {
                    $curr = ($pg - 1) * $limit;
                }?>

                <!-- Row Start -->
                <div class="row">
                    <!-- Secondary Nav START -->
                    <div class="col s12">
					
                        <div class="z-depth-1">
                            <nav class="secondary-nav">
                                <div class="nav-wrapper blue-grey darken-1" style="background-color:#39424c!important">
                                    <div class="col m7" style="background-color:#39424c">
                                        <ul class="left">
                                            <li class="waves-effect waves-light hide-on-small-only"><a href="?page=cuti" class="judul"><i class="material-icons">beach_access</i> Cuti</a></li>
                                            <li class="waves-effect waves-light">
											
											<a href="?page=cuti&act=add"><i class="material-icons md-24">add_circle</i> Tambah Data</a>
											
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col m5 hide-on-med-and-down" style="background-color:#39424c"> 
                                        <form method="post" action="?page=cuti">
                                            <div class="input-field round-in-box">
                                                <input id="search" type="search" name="cari" placeholder="Ketik dan tekan enter mencari data..." required>
                                                <label for="search"><i class="material-icons">search</i></label>
                                                <input type="submit" name="submit" class="hidden">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <!-- Secondary Nav END -->
                </div>
                <!-- Row END -->

                <?php
                    if(isset($_SESSION['succAdd'])){
                        $succAdd = $_SESSION['succAdd'];
                        echo '<div id="alert-message" class="row" style="display:inline">
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
                        echo '<div id="alert-message" class="row" style="display:inline">
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
                        echo '<div id="alert-message" class="row" style="display:inline">
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
					if(isset($_SESSION['errs'])){
                    $errs = $_SESSION['errs'];
                    echo '<div id="alert-message" class="row" style="display:inline">
                            <div class="col m12">
                                <div class="card red lighten-5">
                                    <div class="card-content notif">
                                        <span class="card-title red-text"><i class="material-icons md-36">clear</i> '.$errs.'</span>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    unset($_SESSION['errs']);
                }
                ?>

                <!-- Row form Start -->
				<div class="col s12" style="margin-top:-5px;margin-bottom:-9px">
                            <div class="card">
                                <div class="card-content">
                                   <span class="card-title black-text"><i class="material-icons md-36" style="margin-top:-11px;!important">beach_access</i> Cuti</span>
								   <p class="kata">Proses pengajuan Cuti dibagi menjadi beberapa tahapan sesuai dengan tingkat jabatan anda</p>
								   <p class="kata"><span class="red-text"><strong>*</strong></span> Untuk Jabatan <strong>Manager</strong>, dibutuhkan konfirmasi dari <strong>General Manager</strong></p>
								   <p class="kata"><span class="red-text"><strong>*</strong></span> Untuk Jabatan <strong>Assistant Manager dan Lain - Lain</strong>, dibutuhkan konfirmasi dari <strong>Manager</strong> dan <strong>General Manager</strong></p>
								   <p class="kata"><span class="red-text"><strong>*</strong></span> Total cuti telah dipotong <strong>Hari Cuti Bersama</strong></p>
                                    <?php $cutie=mysqli_query($config,"SELECT cuti FROM tbl_user WHERE id_user='".$_SESSION['id_user']."'");
									list($cuti)=mysqli_fetch_array($cutie);
									?>
									
									<p class="kata">Sisa Jatah Cuti Anda : 
									<?php 
									
									
									
									$alay=array(6,5);
									$alays=array(4);
									$alayss=array(3,2);
									$alaysss=array(1,0);
									if(in_array($cuti,$alay)){
									echo'
									<strong style="color:blue;font-size:30px">'.$cuti.'</strong></p>';}
									else if(in_array($cuti,$alays)){
									echo'
									<strong style="color:yellow;font-size:30px">'.$cuti.'</strong></p>';}
									else if(in_array($cuti,$alayss)){
									echo'
									<strong style="color:orange;font-size:30px">'.$cuti.'</strong></p>';}
									else if(in_array($cuti,$alaysss)){
									echo'
									<strong style="color:red;font-size:30px">'.$cuti.'</strong></p>';}
									else if($cuti>6){
									echo'<strong style="color:blue;font-size:30px">'.$cuti.'</strong></p>';
									}
									
									?>

                                   
									
									
                                </div>
								</div>
								</div>
                <div class="row jarak-form">

                <?php
                    if(isset($_REQUEST['submit'])){
                    $cari = mysqli_real_escape_string($config, $_REQUEST['cari']);
                        echo '
                        <div class="col s12" style="margin-top: -18px;">
                            <div class="card yellow darken">
                                <div class="card-content">
                                <p class="description">Hasil pencarian untuk kata kunci <strong>"'.stripslashes($cari).'"</strong><span class="right"><a href="?page=cuti"><i class="material-icons md-36" style="color: #333;">clear</i></a></span></p>
                                </div>
                            </div>
                        </div>

                        <div class="col m12" id="colres">
                        <table class="bordered" id="tblr">
                            <thead class="blue lighten-4" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" id="head">
                                 <tr>
									<th width="1%"style="color:#fff">Nomor</th>
                                        <th width="20%"style="color:#fff">Nama</th>
                                        <th width="15%"style="color:#fff">Alasan</th>
										<th width="12%"style="color:#fff">Tanggal Awal</th>
										<th width="12%"style="color:#fff">Tanggal Akhir</th>
										<th width="15%" style="color:#fff">Status Manager</th>
										<th width="15%" style="color:#fff">Status GM</th>
										<th width="20%" style="color:#fff">Tindakan</th>
										
									
                                </tr>
                            </thead>

                            <tbody>
                                <tr>';

                                //script untuk mencari data
								if($_SESSION['admin']==1){
							$query = mysqli_query($config, "SELECT * FROM tbl_cuti WHERE alasan LIKE '%$cari%' OR tgl_awal LIKE '%$cari%' OR tgl_akhir LIKE '%$cari%' OR nama LIKE '%$cari%' ORDER by id DESC");}
							else
							{$query = mysqli_query($config, "SELECT * FROM tbl_cuti WHERE divisi='".$_SESSION['divisi']."' AND(alasan LIKE '%$cari%' OR tgl_awal LIKE '%$cari%' OR tgl_akhir LIKE '%$cari%' OR nama LIKE '%$cari%') ORDER by id DESC");}
								 
                                if(mysqli_num_rows($query) > 0){
                                    $no = 1;
                                    while($row = mysqli_fetch_array($query)){
										$ioko=mysqli_query($config,"SELECT nama,admin FROM tbl_user WHERE id_user='".$row['id_user']."'");
										list($nama,$admin)=mysqli_fetch_array($ioko);
                                      echo '
                                        <td style="text-align:center">'.$no++.'</td>
										<td style="text-align:center">'.$nama.'</td>
										<td style="text-align:center">'.$row['alasan'].'';
										if(!empty($row['file'])){
                                            echo '<em><strong><br>Lampiran : <a href="./upload/surat_sakit/'.$row['file'].'">'.$row['file'].'</a></strong>';
                                        }
										echo'</td>
										<td style="text-align:center">'.$tgl = date('d M Y ', strtotime($row['tgl_awal'])).'</td>
										<td style="text-align:center">'.$tgl = date('d M Y ', strtotime($row['tgl_akhir'])).'</td>';
                                        
									
                                         if($_SESSION['admin'] == 5 || $_SESSION['admin']== 1){
									if($row['status_manager']==1){	
									echo'
									<td style="text-align:center">
                                 	<a class="btn small light-green waves-effect waves-light tooltipped" name="simpans" onclick="return confirm(\'Anda yakin ingin membatalkan cuti?\');" href="?page=cuti&act=approvem&ids=OikJfDsS&id='.$row['id'].'" data-position="left" data-tooltip="Klik Untuk MEMBATALKAN cuti">
                                    <i class="material-icons">done</i> APPROVED</a></td>';
									} else {
										echo'
										<td style="text-align:center">
										<a class="btn small red waves-effect waves-light tooltipped" name="simpans" href="?page=cuti&act=approvem&ids=kfjYghB&id='.$row['id'].'" data-position="left" data-tooltip="Klik Untuk MENYETUJUI cuti" onclick="return confirm(\'Anda yakin ingin menyetujui cuti?\');">
                                    <i class="material-icons">highlight_off</i> APPROVE</a></td>';}}
									else if($row['status_manager']==1){	
									echo'
									<td style="text-align:center">
                                 	<a class="btn small light-green waves-effect waves-light tooltipped" name="simpans" data-position="left" data-tooltip="Cuti sudah disetujui">
                                    <i class="material-icons">done</i> APPROVED</a></td>';
									} else {
										echo'
										<td style="text-align:center">
										<a class="btn small red waves-effect waves-light tooltipped" name="simpans" data-position="left" data-tooltip="Cuti belum disetujui">
                                    <i class="material-icons">highlight_off</i> APPROVE</a></td>';}
									
									if($_SESSION['admin'] == 4 || $_SESSION['admin']== 1){
									if($row['status_gm']==1){	
									echo'
									<td style="text-align:center">
                                 	<a class="btn small light-green waves-effect waves-light tooltipped" name="simpans" href="?page=cuti&act=approveg&ids=MjgnNg&id='.$row['id'].'" data-position="left" data-tooltip="Klik Untuk membatalkan Persetujuan" onclick="return confirm(\'Anda yakin ingin membatalkan cuti?\');">
                                    <i class="material-icons">done</i> APPROVED</a></td>';
									} else {
										echo'
										<td style="text-align:center">
										<a class="btn small red waves-effect waves-light tooltipped" name="simpans" href="?page=cuti&act=approveg&ids=QuJguJ&id='.$row['id'].'" data-position="left" data-tooltip="Klik Untuk menerima / approve Cuti" onclick="return confirm(\'Anda yakin ingin menyetujui cuti?\');">
                                    <i class="material-icons">highlight_off</i> APPROVE</a></td>';}}
										else if($row['status_gm']==0){	
									echo'
									<td style="text-align:center">
                                 	<a class="btn small light-green waves-effect waves-light tooltipped" name="simpans" data-position="left" data-tooltip="Cuti sudah disetujui">
                                    <i class="material-icons">done</i> APPROVED</a></td>';
									} else {
										echo'
										<td style="text-align:center">
										<a class="btn small red waves-effect waves-light tooltipped" name="simpans" data-position="left" data-tooltip="Cuti belum disetujui">
                                    <i class="material-icons">highlight_off</i> APPROVE</a></td>';}
										
										
										
										
										  echo'<td style="text-align:center">
										  <a class="btn small blue waves-effect waves-light" href="?page=cuti&act=edit&id='.$row['id'].'"><i class="material-icons">edit</i> EDIT</a>
										  <a class="btn small deep-orange waves-effect waves-light" href="?page=cuti&act=hapus&id='.$row['id'].'">
                                                    <i class="material-icons">delete</i> DEL</a></td>';
										
										
											
                                         echo '
                                       
                                    </tr>
                                </tbody>';
                                }
                            } else {
                                echo '<tr><td colspan="8"><center><p class="add">Tidak ada data untuk ditampilkan. <u></u> </p></center></td></tr>';
                            }
                            echo '</table><br/><br/>
                            </div>
                        </div>
                        <!-- Row form END -->';
						echo'
						<script type="text/javascript" src="asset/js/halamans.js"></script>';
                       

                    } else {

                        echo '
                        <div class="col m12" id="colres">
                        <table class="bordered" id="tblr">
                            <thead class="blue lighten-4" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" id="head">
                                 <tr>
									<th width="1%"style="color:#fff">Nomor</th>
                                        <th width="20%"style="color:#fff">Nama</th>
                                        <th width="15%"style="color:#fff">Alasan</th>
										<th width="12%"style="color:#fff">Tanggal Awal</th>
										<th width="12%"style="color:#fff">Tanggal Akhir</th>
										<th width="15%" style="color:#fff">Status Manager</th>
										<th width="15%" style="color:#fff">Status GM</th>
										<th width="15%" style="color:#fff">Status SDM</th>
										<th width="20%" style="color:#fff">Tindakan</th>
										
									
                                </tr>
                            </thead>

                            <tbody>
                                <tr>';

                            //script untuk mencari data
							if($_SESSION['admin']==1){
							$query = mysqli_query($config, "SELECT * FROM tbl_cuti ORDER by id DESC LIMIT $curr, $limit");}
							else
							{$query = mysqli_query($config, "SELECT * FROM tbl_cuti WHERE divisi='".$_SESSION['divisi']."' ORDER by id DESC LIMIT $curr, $limit");}
								 
                                if(mysqli_num_rows($query) > 0){
                                    $no = 1;
                                    while($row = mysqli_fetch_array($query)){
										$ioko=mysqli_query($config,"SELECT nama,admin FROM tbl_user WHERE id_user='".$row['id_user']."'");
										list($nama,$admin)=mysqli_fetch_array($ioko);
                                      echo '
                                        <td style="text-align:center">'.$no++.'</td>
										<td style="text-align:center">'.$nama.'</td>
										<td style="text-align:center">'.$row['alasan'].'';
										if(!empty($row['file'])){
                                            echo '<em><strong><br>Lampiran : <a href="./upload/surat_sakit/'.$row['file'].'">'.$row['file'].'</a></strong>';
                                        }
										echo'</td>
										<td style="text-align:center">'.$tgl = date('d M Y ', strtotime($row['tgl_awal'])).'</td>
										<td style="text-align:center">'.$tgl = date('d M Y ', strtotime($row['tgl_akhir'])).'</td>';
                                     
									if($_SESSION['admin'] == 5 || $_SESSION['admin']==11 || $_SESSION['admin']== 1){
									if($row['status_manager']==1){	
									echo'
									<td style="text-align:center">
                                 	<a class="btn small light-green waves-effect waves-light tooltipped" name="simpans" onclick="return confirm(\'Anda yakin ingin membatalkan cuti?\');" href="?page=cuti&act=approvem&ids=OikJfDsS&id='.$row['id'].'" data-position="left" data-tooltip="Klik Untuk MEMBATALKAN cuti">
                                    <i class="material-icons">done</i> APPROVED</a></td>';
									} else {
										echo'
										<td style="text-align:center">
										<a class="btn small red waves-effect waves-light tooltipped" name="simpans" href="?page=cuti&act=approvem&ids=kfjYghB&id='.$row['id'].'" data-position="left" data-tooltip="Klik Untuk MENYETUJUI cuti" onclick="return confirm(\'Anda yakin ingin menyetujui cuti?\');">
                                    <i class="material-icons">highlight_off</i> APPROVE</a></td>';}
									
									}
									else {
										if($row['status_manager']==1){	
									echo'
									<td style="text-align:center">
                                 	<a class="btn small light-green waves-effect waves-light tooltipped" name="simpans" data-position="left" data-tooltip="Cuti sudah disetujui">
                                    <i class="material-icons">done</i> APPROVED</a></td>';
									} else {
										echo'
										<td style="text-align:center">
										<a class="btn small red waves-effect waves-light tooltipped" name="simpans" data-position="left" data-tooltip="Cuti belum disetujui">
                                    <i class="material-icons">highlight_off</i> APPROVE</a></td>';}}
									
									
									
									
									
									
									if($_SESSION['admin'] == 4 || $_SESSION['admin']== 1){
									if($row['status_gm']==1){	
									echo'
									<td style="text-align:center">
                                 	<a class="btn small light-green waves-effect waves-light tooltipped" name="simpans" href="?page=cuti&act=approveg&ids=MjgnNg&id='.$row['id'].'" data-position="left" data-tooltip="Klik Untuk membatalkan Persetujuan" onclick="return confirm(\'Anda yakin ingin membatalkan cuti?\');">
                                    <i class="material-icons">done</i> APPROVED</a></td>';
									} else {
										echo'
										<td style="text-align:center">
										<a class="btn small red waves-effect waves-light tooltipped" name="simpans" href="?page=cuti&act=approveg&ids=QuJguJ&id='.$row['id'].'" data-position="left" data-tooltip="Klik Untuk menerima / approve Cuti" onclick="return confirm(\'Anda yakin ingin menyetujui cuti?\');">
                                    <i class="material-icons">highlight_off</i> APPROVE</a></td>';}}
										else {
											if($row['status_gm']==0){	
									echo'
										<td style="text-align:center">
										<a class="btn small red waves-effect waves-light tooltipped" name="simpans" data-position="left" data-tooltip="Cuti belum disetujui">
										<i class="material-icons">highlight_off</i> APPROVE</a></td>';
									} else {
										echo'
										<td style="text-align:center">
                                 	<a class="btn small light-green waves-effect waves-light tooltipped" name="simpans" data-position="left" data-tooltip="Cuti sudah disetujui">
                                    <i class="material-icons">done</i> APPROVED</a></td>';}}
										

											
										if($row['status_sdm']==0){
										echo'
										<td style="text-align:center">
										<a class="btn small red waves-effect waves-light tooltipped" name="simpans" data-position="left" data-tooltip="Klik Untuk menerima / approve Cuti"';
										if($_SESSION['admin']==1){echo'
										href="?page=cuti&act=approves&ids=zZz&id='.$row['id'].'" 
										onclick="return confirm(\'Anda yakin ingin menyetujui cuti?\');"';}
										echo'
										><i class="material-icons">highlight_off</i> APPROVE</a></td>';}
										else{
										echo'
										<td style="text-align:center">
										<a class="btn small light-green waves-effect waves-light tooltipped" name="simpans"  data-position="left" data-tooltip="Klik Untuk membatalkan Persetujuan"';
										if($_SESSION['admin']==1){echo'
										href="?page=cuti&act=approves&ids=ZzZ&id='.$row['id'].'" 
										onclick="return confirm(\'Anda yakin ingin membatalkan cuti?\');"';}
										echo'
										><i class="material-icons">done</i> APPROVED</a></td>';	
										}


                                        echo'<td style="text-align:center">';
                                        if($row['file']!='-'){
										if($row['status_sdm']==1){
										if($_SESSION['admin']==1){echo'
										  <a class="btn small blue waves-effect waves-light" href="?page=cuti&act=edit&id='.$row['id'].'"><i class="material-icons">edit</i> EDIT</a>
										  <a class="btn small deep-orange waves-effect waves-light" href="?page=cuti&act=hapus&id='.$row['id'].'" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');">
										<i class="material-icons">delete</i> DEL</a>';}
										else {
										echo '<button class="btn small blue-grey waves-effect waves-light"><i class="material-icons">error</i> No Action</button>';
										}}else {
                                            if($_SESSION['admin']==1 || $row['id_user']==$_SESSION['id_user']){
											echo'<a class="btn small blue waves-effect waves-light" href="?page=cuti&act=edit&id='.$row['id'].'"><i class="material-icons">edit</i> EDIT</a>
										  <a class="btn small deep-orange waves-effect waves-light" href="?page=cuti&act=hapus&id='.$row['id'].'" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');">
                                        <i class="material-icons">delete</i> DEL</a>';}
                                        else {
                                            echo '<button class="btn small blue-grey waves-effect waves-light"><i class="material-icons">error</i> No Action</button>';
                                        }
										}} else {
                                            if($row['status_sdm']!=1){
                                            if($_SESSION['admin']==1 || $row['id_user']==$_SESSION['id_user']){
                                                echo'
                                                <a class="btn small deep-orange waves-effect waves-light" href="?page=cuti&act=hapus&id='.$row['id'].'" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');">
                                              <i class="material-icons">delete</i> DEL</a>';  
                                            } else {
                                                echo '<button class="btn small blue-grey waves-effect waves-light"><i class="material-icons">error</i> No Action</button>';
                                            }
                                            } else {
                                                if($_SESSION['admin']==1){
                                                    echo'
                                                <a class="btn small deep-orange waves-effect waves-light" href="?page=cuti&act=hapus&id='.$row['id'].'" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');">
                                              <i class="material-icons">delete</i> DEL</a>'; 
                                                } else {
                                                    echo '<button class="btn small blue-grey waves-effect waves-light"><i class="material-icons">error</i> No Action</button>';
                                                }
                                            }
                                        }
											
                                         echo '
                                       </td>
                                    </tr>
                                </tbody>';
                                }
                            } else {
                                echo '<tr><td colspan="9"><center><p class="add">Tidak ada data untuk ditampilkan. <u></u> </p></center></td></tr>';
                            }
                            echo '</table>
                        </div>';
						if($_SESSION['admin']==1){
		$query = mysqli_query($config, "SELECT * FROM tbl_cuti");}
		else {
		$query = mysqli_query($config, "SELECT * FROM tbl_cuti WHERE divisi='".$_SESSION['divisi']."'");	
		}
                    $cdata = mysqli_num_rows($query);
                    $cpg = ceil($cdata/$limit);

                    echo '<br/>
					<div class="col m12">
                          <ul class="pagination">';

                    if($cdata > $limit ){
							
                        //first and previous pagging
                        if($pg > 1){
                            $prev = $pg - 1;
                            echo '<li><a href="?page=cuti&pg=1"><i class="material-icons md-48">first_page</i></a></li>
                                  <li><a href="?page=cuti&pg='.$prev.'"><i class="material-icons md-48">chevron_left</i></a></li>';
                        } else {
                            echo '<li class="disabled"><a href=""><i class="material-icons md-48">first_page</i></a></li>
                                  <li class="disabled"><a href=""><i class="material-icons md-48">chevron_left</i></a></li>';
                        }

                        //perulangan pagging
                       echo'
							<div class="col m4">
							<select class="browser-default" name="halaman" id="halaman" required>';
                                     for($i=1; $i <= $cpg; $i++){               
                                                        if($i != $pg){
                                echo '<option value="'.$i.'">'.$i.'</option>';
                            } else {
                                echo '<option value="'.$i.'" selected>'.$i.'</option>';
									 }}
														  
                                                echo'  
                                              
												
												</select>
												</div>';
							
                            

                        //last and next pagging
                        if($pg < $cpg){
                            $next = $pg + 1;
                            echo '<li><a href="?page=cuti&pg='.$next.'"><i class="material-icons md-48">chevron_right</i></a></li>
                                  <li><a href="?page=cuti&pg='.$cpg.'"><i class="material-icons md-48">last_page</i></a></li>';
                        } else {
                            echo '<li class="disabled"><a href=""><i class="material-icons md-48">chevron_right</i></a></li>
                                  <li class="disabled"><a href=""><i class="material-icons md-48">last_page</i></a></li>';
                        }
                        echo '
					</ul>
					</div>'; }
					else {
                    echo '';
                } echo'
						
                    </div>
					
                    <!-- Row form END -->';

                   
            
						echo'
                    </div>
                    <!-- Row form END -->';

                   
            }
        }
    
}
?>
<script>
$(document).ready(function(){
$('#halaman').change(function(){
	var x = $(this).val();
	window.location.href='admin.php?page=cuti&pg='+ x;
		});
	
	});	


</script>
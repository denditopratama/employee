<?php
	?>
<style>
.td{
	text-align:center!important;
}
.td ,th{
	text-align:center;
}
 .containers {
      width: 600px;
     margin-left:300px; 
	 
  }
  .progressbar {
      counter-reset: step;
  }
  .progressbar li {
      list-style-type: none;
      width: 20%;
      float: left;
      font-size: 12px;
      position: relative;
      text-align: center;
      text-transform: uppercase;
      color: #7d7d7d;
  }
  .progressbar li:before {
      width: 30px;
      height: 30px;
      content: counter(step);
      counter-increment: step;
      line-height: 30px;
      border: 2px solid #7d7d7d;
      display: block;
      text-align: center;
      margin: 0 auto 10px auto;
      border-radius: 50%;
      background-color: white;
  }
  .progressbar li:after {
      width: 100%;
      height: 2px;
      content: '';
      position: absolute;
      background-color: #7d7d7d;
      top: 15px;
      left: -50%;
      z-index: -1;
  }
  .progressbar li:first-child:after {
      content: none;
  }
  .progressbar li.active {
      color: green;
  }
  .progressbar li.active:before {
      border-color: #55b776;
	  background-color: #ffff4c;
  }
  .progressbar li.active + li:after {
      background-color: #55b776;
  }

</style>
<?php
    //cek session
    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {

        $notif=mysqli_query($config,"UPDATE tbl_sppd SET baca=1 WHERE id_user='".$_SESSION['id_user']."'");

        if(isset($_REQUEST['act'])){
            $act = $_REQUEST['act'];
            switch ($act) {
                case 'add':
                    include "tambah_sppd.php";
                    break;
				case 'edit':
                    include "edit_sppd.php";
                    break;
				case 'del':
                    include "hapus_sppd.php";
                    break;
				case 'update':
                    include "approve_sppd.php";
                    break;
               
            }
        } else {

            

            //pagging
            $limit = 10;
            $pg = mysqli_real_escape_string($config,@$_GET['pg']);
                if(empty($pg)){
                    $curr = 0;
                    $pg = 1;
                } else {
                    $curr = ($pg - 1) * $limit;
                }
				$divisi=mysqli_real_escape_string($config,$_SESSION['divisi']);?>

                <!-- Row Start -->
                <div class="row">
                    <!-- Secondary Nav START -->
                    <div class="col s12">
                        <div class="z-depth-1">
                            <nav class="secondary-nav">
                                <div class="nav-wrapper blue-grey darken-1" style="background-color:#39424c!important">
                                    <div class="col m7" style="background-color:#39424c">
                                        <ul class="left">
                                            <li class="waves-effect waves-light hide-on-small-only"><a href="?page=sppd" class="judul"><i class="material-icons">airplanemode_active</i> SPPD</a></li>
                                            <li class="waves-effect waves-light">
											
											<a href="?page=sppd&act=add"><i class="material-icons md-24">add_circle</i> Tambah Data</a>
											
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col m5 hide-on-med-and-down" style="background-color:#39424c"> 
                                        <form method="post" action="?page=sppd">
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
					if(isset($_SESSION['succapp'])){
                        $succapp = $_SESSION['succapp'];
                        echo '<div id="alert-message" class="row">
                                <div class="col m12">
                                    <div class="card green lighten-5">
                                        <div class="card-content notif">
                                            <span class="card-title green-text"><i class="material-icons md-36">done</i> '.$succapp.'</span>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        unset($_SESSION['succapp']);
                    }
                ?>

                <!-- Row form Start -->
                <div class="row jarak-form">

                <?php
                    if(isset($_REQUEST['submit'])){
                    $cari = mysqli_real_escape_string($config, $_REQUEST['cari']);
                        echo '
                        <div class="col s12" style="margin-top: -18px;">
                            <div class="card yellow darken">
                                <div class="card-content">
                                <p class="description">Hasil pencarian untuk kata kunci <strong>"'.stripslashes($cari).'"</strong><span class="right"><a href="?page=sppd"><i class="material-icons md-36" style="color: #333;">clear</i></a></span></p>
                                </div>
                            </div>
                        </div>

                        <div class="col m12" id="colres">
                            <table class="bordered" id="tblr">
                                <thead class="blue lighten-4"style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" id="head"  >
                                     <tr>
										<th width="1%"style="color:#fff">No.</th>
                                        <th width="15%"style="color:#fff">Nama</th>
										<th width="5%" style="color:#fff">Keberangkatan</th>
                                        <th width="12%"style="color:#fff;">Destinasi</th>
										<th width="12%"style="color:#fff">Tanggal Berangkat</th>
										<th width="12%"style="color:#fff">Tanggal Pulang</th>
										<th width="18%" style="color:#fff">Deskripsi</th>
										<th width="20%" style="color:#fff">File</th>
										<th width="20%" style="color:#fff">Tindakan</th>
									
                                </tr>
                            </thead>

                            <tbody>
                                <tr>';

                            //script untuk mencari data
							$id_user=mysqli_real_escape_string($config,$_SESSION['id_user']);
							if($_SESSION['admin']==1){
							$way=mysqli_query($config,"SELECT id_user FROM tbl_user WHERE nama LIKE '%$cari%'");
							list($namanya)=mysqli_fetch_array($way);
							$query = mysqli_query($config, "SELECT * FROM tbl_sppd WHERE destinasi LIKE '%$cari%' OR id_user LIKE '%$cari%' OR tanggal_awal LIKE '%$cari%' OR tanggal_akhir LIKE '%$cari%' OR id_user LIKE '%$namanya%' ORDER by id DESC");
							}
							else
							{
								$way=mysqli_query($config,"SELECT id_user FROM tbl_user WHERE nama LIKE '%$cari%'");
							list($namanya)=mysqli_fetch_array($way);
								$query = mysqli_query($config, "SELECT * FROM tbl_sppd WHERE divisi='$divisi' AND (destinasi LIKE '%$cari%' OR id_user LIKE '%$cari%' OR tanggal_awal LIKE '%$cari%' OR tanggal_akhir LIKE '%$cari%' OR id_user LIKE '%$namanya%') ORDER by id");}
								 
                                if(mysqli_num_rows($query) > 0){
									
                                    $no = 1;
                                    while($row = mysqli_fetch_array($query)){
										
                                      echo '
                                        <td style="text-align:center">'.$row['id'].'</td>';
										$popo=mysqli_query($config,"SELECT * FROM tbl_user WHERE id_user='".$row['id_user']."'");
										while($data=mysqli_fetch_array($popo)){ echo'
										<td style="text-align:center">'.$data['nama'].'</td>';}
										
										
										echo'
										
										<td style="text-align:center">'.$row['keberangkatan'].'</td>
										<td style="text-align:center">'.$row['destinasi'].'</td>
										<td style="text-align:center">'.$tgl = date('d M Y ', strtotime($row['tanggal_awal'])).'</td>
										<td style="text-align:center">'.$tgl = date('d M Y ', strtotime($row['tanggal_akhir'])).'</td>
										<td style="text-align:center">'.$row['deskripsi'].'</td>
										
										<td style="text-align:center"><strong>File :</strong>';
										if(!empty($row['file'])){
                                            echo '<strong><a href="./upload/sppd/'.$row['file'].'">&nbsp'.$row['file'].'</a></strong>';
                                        } else {
                                            echo '<i>Tidak ada file yang di upload</i>';
                                        } echo '</td>';
                                        
										echo '<td style="text-align:center">';
										  if($row['id_user']!=$_SESSION['id_user'] && $_SESSION['admin']!=1){
										  echo '<button class="btn small blue-grey waves-effect waves-light"><i class="material-icons">error</i> No Action</button>';}
										  else{
											  echo'
													<a class="btn small light-blue waves-effect waves-light tooltipped" 
													data-position="left" data-tooltip="Pilih EDIT untuk merubah SPPD" href="?page=sppd&act=edit&id='.$row['id'].'">
                                                    <i class="material-icons">edit</i> EDIT</a>
													<a class="btn small red waves-effect waves-light tooltipped" href="?page=sppd&act=del&id='.$row['id'].'" data-position="left" data-tooltip="Pilih DEL untuk menghapus SPPD">
													<i class="material-icons">delete</i> DEL</a>';}
                                               
											
                                         echo '</td>
                                    
                                    </tr>';
									$popos=mysqli_query($config,"SELECT admin FROM tbl_user WHERE id_user='".$row['id_user']."'");
									list($admin)=mysqli_fetch_array($popos);
									echo'
									<tr><td colspan="10">
									<div class="containers">
										<ul class="progressbar">';
										if($admin==1){
											echo'
										<li class="active" style="margin-left:123px;">Isi Form</li>
										<li class="active">Approval Umum</li>
										<li class="active">Selesai</li>';}
										
										else if($admin==2){
											echo'
										<li class="active" style="margin-left:123px;">Isi Form</li>
										<li>Approval Umum</li>
										<li>Selesai</li>';}
										
										else if($admin==3){
											echo'
										<li class="active" style="margin-left:123px;">Isi Form</li>
										<li class="active">Approval Umum</li>
										<li class="active">Selesai</li>';}
										
										else if($admin==4){echo'
										<li class="active" style="margin-left:60px;">Isi Form</li>';
										if($row['status_direktur']==0){
											echo'
										<li>Approval Direktur</li>';}
										else{
											echo'
										<li class="active">Approval Direktur</li>';}
										if($row['status_umum']==0){
											echo'
										<li>Approval Umum</li>';}
										else{
											echo'
										<li class="active">Approval Umum</li>';}
										if($row['status_sdm']==0){
											echo'
										<li>Selesai</li>';}
										else{echo'
										<li class="active">Selesai</li>';}
										}
										
										else if($admin==5){echo'
										<li class="active" style="margin-left:60px;">Isi Form</li>';
										if($row['status_gm']==0){
											echo'
										<li>Approval GM</li>';}
										else{
											echo'
										<li class="active">Approval GM</li>';}
										if($row['status_umum']==0){
											echo'
										<li>Approval Umum</li>';}
										else{
											echo'
										<li class="active">Approval Umum</li>';}
										if($row['status_sdm']==0){
											echo'
										<li>Selesai</li>';}
										else{echo'
										<li class="active">Selesai</li>';}
											}
										
										else{echo'
										<li class="active">Isi Form</li>';
										if($row['status_manager']==0){
											echo'
										<li>Approval Manager</li>';}
										else{
											echo'
										<li class="active">Approval Manager</li>';}
										if($row['status_gm']==0){
											echo'
										<li>Approval GM</li>';}
										else{
											echo'
										<li class="active">Approval GM</li>';}
										if($row['status_umum']==0){echo'
										<li>Approval Umum</li>';}
										else{echo'
										<li class="active">Approval Umum</li>';}
										if($row['status_sdm']==0){
											echo'
										<li>Selesai</li>';}
										else{echo'
										<li class="active">Selesai</li>';}
										}
										
										echo'
										
									</ul>';
									if($_SESSION['id_user']!=$row['id_user']){
									/*kondisi admin*/
									if($_SESSION['admin']==1){
										if($row['status_manager']==1 && $row['status_gm']==1 && $row['status_direktur']==1 && $row['status_umum']==1 || $row['status_manager']==1 && $row['status_gm']==1 && $row['status_sdm']==1){
											echo'
									<a name="approveadmin" style="margin-left:220px;margin-top:20px;"class="btn small green waves-effect waves-light tooltipped"  data-position="left" data-tooltip="Telah Di Approve">
                                    <i class="material-icons">done</i> Telah Di Approve</a>';} 
										else {
										echo'
									<a name="approveadmin" style="margin-left:200px;margin-top:20px;"class="btn small deep-orange waves-effect waves-light tooltipped" href="?page=sppd&act=update&id='.$row['id'].'" data-position="left" data-tooltip="Klik untuk approve SPPD">
                                    <i class="material-icons">clear</i> Approve Sebagai Admin</a>';}}
									/*kondisi direktur*/
									else if($_SESSION['admin']==2){
										if($row['status_manager']==1 && $row['status_gm']==1 && $row['status_direktur']==1){
											echo'
									<a name="approveadmin" style="margin-left:180px;margin-top:20px;"class="btn small green waves-effect waves-light tooltipped"  data-position="left" data-tooltip="Telah Di Approve">
                                    <i class="material-icons">done</i> Telah Di Approve</a>';}
									else{
										echo'
									<a name="approveadmin" style="margin-left:180px;margin-top:20px;"class="btn small deep-orange waves-effect waves-light tooltipped" href="?page=sppd&act=update&id='.$row['id'].'" data-position="left" data-tooltip="Klik untuk approve SPPD">
                                    <i class="material-icons">clear</i> Approve Sebagai Direktur</a>';}}
									/*kondisi direktur utama*/
									else if($_SESSION['admin']==3){
										if($row['status_manager']==1 && $row['status_gm']==1 && $row['status_direktur']==1){
											echo'
									<a name="approveadmin" style="margin-left:225px;margin-top:20px;"class="btn small green waves-effect waves-light tooltipped"  data-position="left" data-tooltip="Telah Di Approve">
                                    <i class="material-icons">done</i> Telah Di Approve</a>';}
										else{
											echo'
									<a name="approveadmin" style="margin-left:155px;margin-top:20px;"class="btn small deep-orange waves-effect waves-light tooltipped" href="?page=sppd&act=update&id='.$row['id'].'" data-position="left" data-tooltip="Klik untuk approve SPPD">
                                    <i class="material-icons">clear</i> Approve Sebagai Direktur Utama</a>';}}
									/*kondisi general manager*/
									else if($_SESSION['admin']==4){
										if($row['status_manager']==1 && $row['status_gm']==1){
											echo'
									<a name="approveadmin" style="margin-left:210px;margin-top:20px;"class="btn small green waves-effect waves-light tooltipped"  data-position="left" data-tooltip="Telah Di Approve">
                                    <i class="material-icons">done</i> Telah Di Approve</a>';}
										else {
											echo'
									<a name="approveadmin" style="margin-left:150px;margin-top:20px;"class="btn small deep-orange waves-effect waves-light tooltipped" href="?page=sppd&act=update&id='.$row['id'].'" data-position="left" data-tooltip="Klik untuk approve SPPD">
                                    <i class="material-icons">clear</i> Approve Sebagai General Manager</a>';}}
									/*kondisi manager*/
									else if($_SESSION['admin']==5){
										if($row['status_manager']==1){
											echo'
									<a name="approveadmin" style="margin-left:190px;margin-top:20px;"class="btn small green waves-effect waves-light tooltipped"  data-position="left" data-tooltip="Telah Di Approve">
                                    <i class="material-icons">done</i> Telah Di Approve</a>';}
										else {echo'
									<a name="approveadmin" style="margin-left:150px;margin-top:20px;"class="btn small deep-orange waves-effect waves-light tooltipped" href="?page=sppd&act=update&id='.$row['id'].'" data-position="left" data-tooltip="Klik untuk approve SPPD">
                                    <i class="material-icons">clear</i> Approve Sebagai Manager</a>';}}}
									
									
									echo'
									
									</div></td></tr>
                                </tbody>';
                                }
								echo' <script type="text/javascript" src="asset/js/halamanuser.js"></script> ';
                            } else {
                                    echo '<tr><td colspan="12"><center><p class="add">Tidak ada data yang ditemukan</p></center></td></tr>';
                                }
                              echo '</table><br/><br/>
                            </div>';
						
				echo'
							
                        </div>
                        <!-- Row form END -->';

                       

                    } else {
						

                        echo '
						<div class="col m12" style="margin-top:-15px">
                            <div class="card">
                                <div class="card-content">
                                    <span class="card-title black-text"><i class="material-icons md-36" style="margin-top:-11px;!important">flight_takeoff</i> Proses SPPD</span>
                                    <p class="kata">Proses pengajuan SPPD dibagi menjadi beberapa tahapan sesuai dengan tingkat jabatan anda<span class="red-text"><strong>*</strong></span></p><br/>

                                    <p><span class="red-text"><strong>*</strong></span> <strong>1.</strong> Proses <strong>Isi Form</strong>, Jika berwarna kuning maka tahap ini sudah selesai.</p>
									<p><span class="red-text"><strong>*</strong></span> <strong>2.</strong> Proses <strong>Approval Manager</strong>, untuk jabatan dibawah Manager, diperlukan persetujuan oleh manager divisi terkait, khusus untuk manager, silahkan klik <strong>Approve Sebagai Manager</strong> untuk menyetujui SPPD, Jika berwarna kuning maka tahap ini sudah selesai.</p
									<p><span class="red-text"><strong>*</strong></span>  <strong>3.</strong> Proses <strong>Approval General Manager</strong>, untuk jabatan dibawah General Manager, diperlukan persetujuan oleh General Manager divisi terkait, khusus untuk General Manager, silahkan klik <strong>Approve Sebagai General Manager</strong> untuk menyetujui SPPD, Jika berwarna kuning maka tahap ini sudah selesai.</p>
									<p><span class="red-text"><strong>*</strong></span> <strong>4.</strong> Proses <strong>Approval Umum</strong>, Divisi Umum atau Admin akan me-review form pengajuan SPPD, Jika berwarna kuning maka tahap ini sudah selesai.</p>
									<p><span class="red-text"><strong>*</strong></span> <strong>5.</strong> Proses <strong>Selesai</strong>, Divisi Umum atau Admin akan mengupload tiket perjalanan, Jika berwarna kuning maka tahap ini sudah selesai dan silahkan download tiket perjalan anda di kolom file.</p>
									
									
                                </div>
								</div>
								</div>
                        <div class="col m12" id="colres">
                        <table class="bordered" id="tbl">
                            <thead class="blue lighten-4" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" id="head">
                                 <tr>
										<th width="1%"style="color:#fff">No.</th>
                                        <th width="15%"style="color:#fff">Nama</th>
										<th width="5%" style="color:#fff">Keberangkatan</th>
                                        <th width="12%"style="color:#fff;">Destinasi</th>
										<th width="12%"style="color:#fff">Tanggal Berangkat</th>
										<th width="12%"style="color:#fff">Tanggal Pulang</th>
										<th width="18%" style="color:#fff">Deskripsi</th>
										<th width="20%" style="color:#fff">File</th>
										<th width="20%" style="color:#fff">Tindakan</th>
									
                                </tr>
                            </thead>

                            <tbody>
                                <tr>';

                            //script untuk mencari data
							
							$id_user=mysqli_real_escape_string($config,$_SESSION['id_user']);
							if($_SESSION['admin']==1){
							$query = mysqli_query($config, "SELECT * FROM tbl_sppd ORDER by id DESC LIMIT $curr, $limit");}
							else
							{	
								$query = mysqli_query($config, "SELECT * FROM tbl_sppd WHERE divisi='$divisi' ORDER by id DESC LIMIT $curr, $limit");}
								 
                                if(mysqli_num_rows($query) > 0){
									
                                    $no = 1;
                                    while($row = mysqli_fetch_array($query)){
										
                                      echo '
                                        <td style="text-align:center">'.$row['id'].'</td>';
										$popo=mysqli_query($config,"SELECT * FROM tbl_user WHERE id_user='".$row['id_user']."'");
										while($data=mysqli_fetch_array($popo)){ echo'
										<td style="text-align:center">'.$data['nama'].'</td>';}
										echo'<td style="text-align:center">'.$row['keberangkatan'].'</td>';
										
										
										
										echo'
										
										<td style="text-align:center">'.$row['destinasi'].'</td>
										<td style="text-align:center">'.$tgl = date('d M Y ', strtotime($row['tanggal_awal'])).'</td>
										<td style="text-align:center">'.$tgl = date('d M Y ', strtotime($row['tanggal_akhir'])).'</td>
										<td style="text-align:center">'.$row['deskripsi'].'</td>';
										
									echo'<td style="text-align:center"><strong>File :</strong>';
										if(!empty($row['file'])){
                                            echo '<strong><a href="./upload/sppd/'.$row['file'].'">&nbsp'.$row['file'].'</a></strong>';
                                        } else {
                                            echo '<i>Tidak ada file yang di upload</i>';
                                        } echo '</td>';
                                        
										
											
                                          echo '<td style="text-align:center">';
										  if($row['id_user']!=$_SESSION['id_user'] && $_SESSION['admin']!=1){
										  echo '<button class="btn small blue-grey waves-effect waves-light"><i class="material-icons">error</i> No Action</button>';}
										  else{
											  echo'
													<a class="btn small light-blue waves-effect waves-light tooltipped" 
													data-position="left" data-tooltip="Pilih EDIT untuk merubah SPPD" href="?page=sppd&act=edit&id='.$row['id'].'">
                                                    <i class="material-icons">edit</i> EDIT</a>
													<a class="btn small red waves-effect waves-light tooltipped" href="?page=sppd&act=del&id='.$row['id'].'" data-position="left" data-tooltip="Pilih DEL untuk menghapus SPPD">
													<i class="material-icons">delete</i> DEL</a>';}
                                               
											
                                         echo '</td>
                                    
                                    </tr>';
									$popos=mysqli_query($config,"SELECT admin FROM tbl_user WHERE id_user='".$row['id_user']."'");
									list($admin)=mysqli_fetch_array($popos);
									echo'
									<tr><td colspan="10">
									<div class="containers">
										<ul class="progressbar">';
										if($admin==1){
											echo'
										<li class="active" style="margin-left:123px;">Isi Form</li>
										<li class="active">Approval Umum</li>
										<li class="active">Selesai</li>';}
										
										else if($admin==2){
											echo'
										<li class="active" style="margin-left:123px;">Isi Form</li>
										<li>Approval Umum</li>
										<li>Selesai</li>';}
										
										else if($admin==3){
											echo'
										<li class="active" style="margin-left:123px;">Isi Form</li>
										<li class="active">Approval Umum</li>
										<li class="active">Selesai</li>';}
										
										else if($admin==4){echo'
										<li class="active" style="margin-left:60px;">Isi Form</li>';
										if($row['status_direktur']==0){
											echo'
										<li>Approval Direktur</li>';}
										else{
											echo'
										<li class="active">Approval Direktur</li>';}
										if($row['status_umum']==0){
											echo'
										<li>Approval Umum</li>';}
										else{
											echo'
										<li class="active">Approval Umum</li>';}
										if($row['status_sdm']==0){
											echo'
										<li>Selesai</li>';}
										else{echo'
										<li class="active">Selesai</li>';}
										}
										
										else if($admin==5){echo'
										<li class="active" style="margin-left:60px;">Isi Form</li>';
										if($row['status_gm']==0){
											echo'
										<li>Approval GM</li>';}
										else{
											echo'
										<li class="active">Approval GM</li>';}
										if($row['status_umum']==0){
											echo'
										<li>Approval Umum</li>';}
										else{
											echo'
										<li class="active">Approval Umum</li>';}
										if($row['status_sdm']==0){
											echo'
										<li>Selesai</li>';}
										else{echo'
										<li class="active">Selesai</li>';}
											}
										
										else{echo'
										<li class="active">Isi Form</li>';
										if($row['status_manager']==0){
											echo'
										<li>Approval Manager</li>';}
										else{
											echo'
										<li class="active">Approval Manager</li>';}
										if($row['status_gm']==0){
											echo'
										<li>Approval GM</li>';}
										else{
											echo'
										<li class="active">Approval GM</li>';}
										if($row['status_umum']==0){echo'
										<li>Approval Umum</li>';}
										else{echo'
										<li class="active">Approval Umum</li>';}
										if($row['status_sdm']==0){
											echo'
										<li>Selesai</li>';}
										else{echo'
										<li class="active">Selesai</li>';}
										}
										
										echo'
										
									</ul>';
									if($_SESSION['id_user']!=$row['id_user']){
									/*kondisi admin*/
									if($_SESSION['admin']==1){
										if($row['status_manager']==1 && $row['status_gm']==1 && $row['status_direktur']==1 && $row['status_umum']==1 || $row['status_manager']==1 && $row['status_gm']==1 && $row['status_sdm']==1){
											echo'
									<a name="approveadmin" style="margin-left:220px;margin-top:20px;"class="btn small green waves-effect waves-light tooltipped"  data-position="left" data-tooltip="Telah Di Approve">
                                    <i class="material-icons">done</i> Telah Di Approve</a>';} 
										else {
										echo'
									<a name="approveadmin" style="margin-left:200px;margin-top:20px;"class="btn small deep-orange waves-effect waves-light tooltipped" href="?page=sppd&act=update&id='.$row['id'].'" data-position="left" data-tooltip="Klik untuk approve SPPD">
                                    <i class="material-icons">clear</i> Approve Sebagai Admin</a>';}}
									/*kondisi direktur*/
									else if($_SESSION['admin']==2){
										if($row['status_manager']==1 && $row['status_gm']==1 && $row['status_direktur']==1){
											echo'
									<a name="approveadmin" style="margin-left:180px;margin-top:20px;"class="btn small green waves-effect waves-light tooltipped"  data-position="left" data-tooltip="Telah Di Approve">
                                    <i class="material-icons">done</i> Telah Di Approve</a>';}
									else{
										echo'
									<a name="approveadmin" style="margin-left:180px;margin-top:20px;"class="btn small deep-orange waves-effect waves-light tooltipped" href="?page=sppd&act=update&id='.$row['id'].'" data-position="left" data-tooltip="Klik untuk approve SPPD">
                                    <i class="material-icons">clear</i> Approve Sebagai Direktur</a>';}}
									/*kondisi direktur utama*/
									else if($_SESSION['admin']==3){
										if($row['status_manager']==1 && $row['status_gm']==1 && $row['status_direktur']==1){
											echo'
									<a name="approveadmin" style="margin-left:225px;margin-top:20px;"class="btn small green waves-effect waves-light tooltipped"  data-position="left" data-tooltip="Telah Di Approve">
                                    <i class="material-icons">done</i> Telah Di Approve</a>';}
										else{
											echo'
									<a name="approveadmin" style="margin-left:155px;margin-top:20px;"class="btn small deep-orange waves-effect waves-light tooltipped" href="?page=sppd&act=update&id='.$row['id'].'" data-position="left" data-tooltip="Klik untuk approve SPPD">
                                    <i class="material-icons">clear</i> Approve Sebagai Direktur Utama</a>';}}
									/*kondisi general manager*/
									else if($_SESSION['admin']==4){
										if($row['status_manager']==1 && $row['status_gm']==1){
											echo'
									<a name="approveadmin" style="margin-left:210px;margin-top:20px;"class="btn small green waves-effect waves-light tooltipped"  data-position="left" data-tooltip="Telah Di Approve">
                                    <i class="material-icons">done</i> Telah Di Approve</a>';}
										else {
											echo'
									<a name="approveadmin" style="margin-left:150px;margin-top:20px;"class="btn small deep-orange waves-effect waves-light tooltipped" href="?page=sppd&act=update&id='.$row['id'].'" data-position="left" data-tooltip="Klik untuk approve SPPD">
                                    <i class="material-icons">clear</i> Approve Sebagai General Manager</a>';}}
									/*kondisi manager*/
									else if($_SESSION['admin']==5){
										if($row['status_manager']==1){
											echo'
									<a name="approveadmin" style="margin-left:190px;margin-top:20px;"class="btn small green waves-effect waves-light tooltipped"  data-position="left" data-tooltip="Telah Di Approve">
                                    <i class="material-icons">done</i> Telah Di Approve</a>';}
										else {echo'
									<a name="approveadmin" style="margin-left:150px;margin-top:20px;"class="btn small deep-orange waves-effect waves-light tooltipped" href="?page=sppd&act=update&id='.$row['id'].'" data-position="left" data-tooltip="Klik untuk approve SPPD">
                                    <i class="material-icons">clear</i> Approve Sebagai Manager</a>';}}}
									
									
									echo'
									
									</div></td></tr>
									
                                </tbody>';
                                }
                            } else {
                                echo '<tr><td colspan="9"><center><p class="add">Tidak ada data untuk ditampilkan. <u></u> </p></center></td></tr>';
                            }
                            echo '</table>';
						
							echo'
                        </div>';
						if($_SESSION['admin']==1){
		$query = mysqli_query($config, "SELECT * FROM tbl_sppd");}
		else {
		$query = mysqli_query($config, "SELECT * FROM tbl_sppd WHERE divisi='$divisi'");	
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
                            echo '<li><a href="?page=sppd&pg=1"><i class="material-icons md-48">first_page</i></a></li>
                                  <li><a href="?page=sppd&pg='.$prev.'"><i class="material-icons md-48">chevron_left</i></a></li>';
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
                            echo '<li><a href="?page=sppd&pg='.$next.'"><i class="material-icons md-48">chevron_right</i></a></li>
                                  <li><a href="?page=sppd&pg='.$cpg.'"><i class="material-icons md-48">last_page</i></a></li>';
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

                   
            }
			
        }
		
}
?>
<script>
$(document).ready(function(){
$('#halaman').change(function(){
	var x = $(this).val();
	window.location.href='admin.php?page=sppd&pg='+ x;
		});
	
	});	


</script>
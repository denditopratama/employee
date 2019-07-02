<style>
th,td,tr{
	
}
#oi{
	text-align:center!important;
}
.activedd{
    color:yellow;
    background-color:#003366;
    margin : 5px;
}
#buttons{
	text-align:center!important;
}

/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {.stok{
        max-width:210%;
    height:auto;
    }} 

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {.stok{
        max-width:210%;
    height:auto;
    }} 

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {.stok{
        max-width:210%;
    height:auto;
    }} 

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {  .stok{
        max-width:100%;
    height:auto;
    }} 

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {  .stok{
        max-width:100%;
    height:auto;
    }}

   
      
 



        
 

</style>


<?php
    //session
    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {

        if(isset($_REQUEST['act'])){
            $act = $_REQUEST['act'];
            switch ($act) {
                case 'add':
                    include "tambah_user.php";
                    break;
                case 'edit':
                    include "edit_tipe_user.php";
                    break;
                case 'del':
                    include "hapus_user.php";
                    break;
				case 'akt':
                    include "aktif_user.php";
                    break;
            }
        } else {

            //pagging
            $limit = 1150000;
            $pg = mysqli_real_escape_string($config,@$_GET['pg']);
                if(empty($pg)){
                    $curr = 0;
                    $pg = 1;
                } else {
                    $curr = ($pg - 1) * $limit;
                }

                $query = mysqli_query($config, "SELECT * FROM tbl_user WHERE id_user <>9999 LIMIT $curr, $limit AND status_aktif = 1 ");
                echo '<!-- Row Start -->
                    <div class="row">
                        <!-- Secondary Nav START -->
                        <div class="col s12">
                            <div class="z-depth-1">
                                <nav class="secondary-nav">
                                    <div class="nav-wrapper blue-grey darken-1">
                                        <div class="col m7">
                                            <ul class="left">
                                                <li class="waves-effect waves-light hide-on-small-only"><a href="?page=usr" class="judul"><i class="material-icons">people</i> Manajemen User</a></li>
                                                <li class="waves-effect waves-light">';
                                                if($_SESSION['admin']==1){
                                                   echo '<a href="?page=usr&act=add"><i class="material-icons md-24">person_add</i> Tambah User</a>'; 
                                                }
                                                  echo'  
                                                </li>
                                            </ul>
											
                                        </div>
										<div class="col m5 hide-on-med-and-down">
                                        <form method="post" action="?page=usr">
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
                    <!-- Row END -->';
                    if(isset($_GET['gmail'])){
                        if($_GET['gmail']==1){
                            echo '<div id="alert-message" class="row">
                            <div class="col m12">
                                <div class="card green lighten-5">
                                    <div class="card-content notif">
                                        <span class="card-title green-text"><i class="material-icons md-36">done</i> Akun Google anda berhasil diganti / ditambah</span>
                                    </div>
                                </div>
                            </div>
                        </div>';
                        }
                    }
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
					
					if(isset($_REQUEST['submit'])){
						$cari=mysqli_real_escape_string($config,$_REQUEST['cari']);
						$querykeun=mysqli_query($config,"SELECT * FROM tbl_user WHERE id_user<>9999 AND(admin<>1 AND nama LIKE '%$cari%' OR nip LIKE '%$cari%') ORDER BY kelas_jabatan ASC");
						
						echo '
                    <!-- Row form Start -->
                    <div class="row jarak-form">

                        <div class="col m12" id="colres">
                            <!-- Table START -->
                            <table class="bordered" id="tblr">
                                <thead class="blue lighten-4" id="head">
                                    <tr>
                                        <th id="oi" width="1%">No</th>
                                        <th id="oi" width="15%">Foto</th>
                                        <th id="oi" width="20%">Nama</th>
                                        <th id="oi" width="10%">NIP</th>
										<th id="oi" width="15%">Jabatan</th>
                                        <th id="oi" width="12%">Unit Kerja</th>
										<th id="oi" width="10%">Status</th>
                                        <th id="oi" width="16%">Tindakan</th>
										
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="oi" >';

                                if(mysqli_num_rows($querykeun) > 0){
                                   $no=1;
								   $z='';
                                    while($row = mysqli_fetch_array($querykeun)){
										$mhg=mysqli_query($config,"SELECT uraian_jabatan FROM tbl_kelas_jabatan WHERE kelas_jabatan='".$row['kelas_jabatan']."'");
										list($rolenyax)=mysqli_fetch_array($mhg);
                                        echo '<td id="oi" >'.$no++.'</td>';
                                        if($row['foto']!=''){
                                            echo  '<td id="oi" ><img class="stok" src="upload/foto/'.$row['foto'].'"></td>';
                                        } else {
                                            echo  '<td id="oi" ><img class="stok" src="upload/foto/batman.jpg"></td>';
                                        }

														
									
									
									echo '<td id="oi" >'.$row['nama'].'</td>
                                            <td id="oi" >'.$row['nip'].'</td>';
											$kerja=mysqli_query($config,"SELECT unit_kerja FROM tbl_department WHERE kode_unit='".$row['unit']."'");
											list($unitz)=mysqli_fetch_array($kerja);
											$subkeun=mysqli_query($config,"SELECT jabatan FROM tbl_ref_jabatan WHERE id='".$row['jabatan']."'");
											list($subkeuns)=mysqli_fetch_array($subkeun);
											$unid=ucwords(strtolower($unitz));
											$subunit=ucwords(strtolower($row['sub_unit']));
											$jabatung=ucwords(strtolower($subkeuns));
											echo'
											<td id="oi" >'.$jabatung.'</td>
											<td id="oi" >'.$unid.'</td>';
											if($_SESSION['admin']==1 && $_SESSION['divisi']==2){
											if($row['status_aktif']==1){
												echo'
											<td id="oi" ><a class="btn small green waves-effect waves-light" href="?page=usr&act=akt&tak=oila&id='.$row['id_user'].'" onclick="return confirm(\'Anda yakin ingin merubah data?\');">
                                                 <i class="material-icons">done_all</i> AKTIF</a></td>
                                            <td id="oi" >';} else {
												echo'
											<td id="oi" ><a class="btn small red waves-effect waves-light" href="?page=usr&act=akt&tak=kuyla&id='.$row['id_user'].'" onclick="return confirm(\'Anda yakin ingin merubah data?\');">
                                                 <i class="material-icons">highlight_off</i> TIDAK AKTIF</a></td>
                                            <td id="oi" >';
											}

											}
											else {
												if($row['status_aktif']==1){
												echo'
											<td id="oi" ><a class="btn small green waves-effect waves-light">
                                                 <i class="material-icons">done_all</i> AKTIF</a></td>
                                            <td id="oi" >';} else {
												echo'
											<td id="oi" ><a class="btn small red waves-effect waves-light">
                                                 <i class="material-icons">highlight_off</i> TIDAK AKTIF</a></td>
                                            <td id="oi" >';
											}
											}
											echo'
                                            ';

                                    if($_SESSION['id_user'] != $row['id_user'] && $_SESSION['admin']!=1 ){
                                        echo '<button class="btn small blue-grey waves-effect waves-light"><i class="material-icons">error</i> No Action</button>';
                                    } else if($_SESSION['admin']==1 && $_SESSION['divisi']!=2){
										 echo '<button class="btn small blue-grey waves-effect waves-light"><i class="material-icons">error</i> No Action</button>';
									}
									else if($_SESSION['id_user'] == $row['id_user']) {
                                        echo ' <a class="btn small blue waves-effect waves-light" href="?page=usr&act=edit&id_user='.$row['id_user'].'">
                                               <i class="material-icons">edit</i> EDIT</a>
                                               
                                               <a class="btn small green waves-effect waves-light" href="?page=cv&id_user='.$row['id_user'].'">
                                               <i class="material-icons">print</i> CETAK CV</a>';
                                      } else {
                                          echo ' <a class="btn small blue waves-effect waves-light" href="?page=usr&act=edit&id_user='.$row['id_user'].'">
                                          <i class="material-icons">edit</i> EDIT</a>
                                          <a class="btn small deep-orange waves-effect waves-light" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');" href="?page=usr&act=del&id_user='.$row['id_user'].'"><i class="material-icons" >delete</i> DEL</a>
                                          <a class="btn small green waves-effect waves-light" href="?page=cv&id_user='.$row['id_user'].'">
                                          <i class="material-icons">print</i> CETAK CV</a>';
                                      } 
                                      if($_SESSION['admin']==1 && $_SESSION['divisi']==2){
                                        echo ' <a class="btn small blue darken-4 waves-effect waves-light" onclick="return confirm(\'Anda yakin ingin mengakses user ini?\');" href="tukersesssion.php?dodi='.$row['id_user'].'">
                                        <i class="material-icons">people</i> AKSES USER</a>';
                                    }
                                      echo '</td>
                                    </tr>
                                </tbody>';
                                    }
                                } else {
                        echo '<tr><td colspan="8"><center><p class="add">Tidak ada data untuk ditampilkan</p></center></td></tr>';
                                }
                      echo '</table>
                            <!-- Table END -->
                        </div>

                    </div>
                    <!-- Row form END -->';
					}
					
					else{
					
					
                echo '
                    <!-- Row form Start -->
                    <div class="row jarak-form">

                        <div class="col m12" id="colres">
                            <!-- Table START -->
                            <table class="bordered" id="tblr">
                                <thead class="blue lighten-4" id="head">
                                    <tr>
                                        <th id="oi"  width="1%">No</th>
                                        <th id="oi"  width="15%">Foto</th>
                                        <th id="oi"  width="20%">Nama</th>
                                        <th id="oi"  width="10%">NIP</th>
										<th id="oi"  width="15%">Jabatan</th>
                                        <th id="oi"  width="12%">Unit Kerja</th>
										<th id="oi"  width="10%">Status</th>
                                        <th id="oi"  width="16%">Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="oi">';
								$querykeunsd=mysqli_query($config,"SELECT * FROM tbl_user WHERE id_user<>9999 AND admin<> 1 ORDER by kelas_jabatan ASC");			
                                if(mysqli_num_rows($querykeunsd) > 0){ 
								   $no=1;
                                    while($row = mysqli_fetch_array($querykeunsd)){
										$mhsg=mysqli_query($config,"SELECT uraian_jabatan FROM tbl_kelas_jabatan WHERE kelas_jabatan='".$row['kelas_jabatan']."'");
                                        list($rolenyaxs)=mysqli_fetch_array($mhsg);
                                        $kerja=mysqli_query($config,"SELECT unit_kerja FROM tbl_department WHERE kode_unit='".$row['unit']."'");
                                        list($unitz)=mysqli_fetch_array($kerja);
                                        $subkeun=mysqli_query($config,"SELECT jabatan FROM tbl_ref_jabatan WHERE id='".$row['jabatan']."'");
                                        list($subkeuns)=mysqli_fetch_array($subkeun);
                                        $unid=ucwords(strtolower($unitz));
                                        $subunit=ucwords(strtolower($row['sub_unit']));
                                        $jabatung=ucwords(strtolower($subkeuns));
                                    echo '<td id="oi" >'.$no++.'</td>';
                                    if($row['foto']!=''){
                                        echo  '<td id="oi" ><img class="stok" src="upload/foto/'.$row['foto'].'"></td>';
                                    } else {
                                        echo  '<td id="oi" ><img class="stok" src="upload/foto/batman.jpg"></td>';
                                    }
                                   
									
														
									
									
									echo '<td id="oi" >'.$row['nama'].'</td>
                                            <td id="oi" >'.$row['nip'].'</td>';
										
											echo'
                                           
											<td id="oi" >'.$jabatung.'</td>
											<td id="oi" >'.$unid.'</td>';
											
											if($_SESSION['admin']==1 && $_SESSION['divisi']==2){
											if($row['status_aktif']==1){
												echo'
											<td id="oi" ><a class="btn small green waves-effect waves-light" href="?page=usr&act=akt&tak=oila&id='.$row['id_user'].'" onclick="return confirm(\'Anda yakin ingin merubah data?\');">
                                                 <i class="material-icons">done_all</i> AKTIF</a></td>
                                            <td id="oi" >';} else {
												echo'
											<td id="oi" ><a class="btn small red waves-effect waves-light" href="?page=usr&act=akt&tak=kuyla&id='.$row['id_user'].'" onclick="return confirm(\'Anda yakin ingin merubah data?\');">
                                                 <i class="material-icons">highlight_off</i> TIDAK AKTIF</a></td>
                                            <td id="oi" >';
											}

											}
											else {
												if($row['status_aktif']==1){
												echo'
											<td id="oi" ><a class="btn small green waves-effect waves-light">
                                                 <i class="material-icons">done_all</i> AKTIF</a></td>
                                            <td id="oi" >';} else {
												echo'
											<td id="oi" ><a class="btn small red waves-effect waves-light">
                                                 <i class="material-icons">highlight_off</i> TIDAK AKTIF</a></td>
                                            <td id="oi" >';
											}
											}

                                      
										if($_SESSION['id_user'] != $row['id_user'] && $_SESSION['admin']!=1 ){
                                        echo '<button class="btn small blue-grey waves-effect waves-light"><i class="material-icons">error</i> No Action</button>';
                                    } else if($_SESSION['admin']==1 && $_SESSION['divisi']!=2){
										 echo '<button class="btn small blue-grey waves-effect waves-light"><i class="material-icons">error</i> No Action</button>';
									}
									else if($_SESSION['id_user'] == $row['id_user']) {
                                          echo ' <a class="btn small blue waves-effect waves-light" href="?page=usr&act=edit&id_user='.$row['id_user'].'">
                                                 <i class="material-icons">edit</i> EDIT</a>
                                                 
												 <a class="btn small green waves-effect waves-light" href="?page=cv&id_user='.$row['id_user'].'">
                                                 <i class="material-icons">print</i> CETAK CV</a>';
                                        } else {
                                            echo ' <a class="btn small blue waves-effect waves-light" href="?page=usr&act=edit&id_user='.$row['id_user'].'">
                                            <i class="material-icons">edit</i> EDIT</a>
                                            <a class="btn small deep-orange waves-effect waves-light" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');" href="?page=usr&act=del&id_user='.$row['id_user'].'"><i class="material-icons" >delete</i> DEL</a>
                                            <a class="btn small green waves-effect waves-light" href="?page=cv&id_user='.$row['id_user'].'">
                                            <i class="material-icons">print</i> CETAK CV</a>';
                                        }
                                        if($_SESSION['admin']==1 && $_SESSION['divisi']==2){
                                            echo ' <a class="btn small blue darken-4 waves-effect waves-light" onclick="return confirm(\'Anda yakin ingin mengakses user ini?\');" href="tukersesssion.php?dodi='.$row['id_user'].'">
                                            <i class="material-icons">people</i> AKSES USER</a>';
                                        }
                                     echo '</td>
                                    </tr>
                                </tbody>';
                                    }
                                } else {
                        echo '<tr><td colspan="8"><center><p class="add">Tidak ada data untuk ditampilkan</p></center></td></tr>';
                                }
                      echo '</table>
                            <!-- Table END -->
                        </div>

                    </div>
                    <!-- Row form END -->';
					

                    
                    

                    
                }
            }
	}
?>
<script type="text/javascript" src="asset/js/halaman.js"></script>

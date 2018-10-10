<style>
th,td,tr{
	
}
#oi{
	text-align:center!important;
}
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
            $pg = @$_GET['pg'];
                if(empty($pg)){
                    $curr = 0;
                    $pg = 1;
                } else {
                    $curr = ($pg - 1) * $limit;
                }

                $query = mysqli_query($config, "SELECT * FROM tbl_user WHERE id_user <>9999 LIMIT $curr, $limit");
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
                                                <li class="waves-effect waves-light">
                                                    <a href="?page=usr&act=add"><i class="material-icons md-24">person_add</i> Tambah User</a>
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
						$querykeun=mysqli_query($config,"SELECT * FROM tbl_user WHERE id_user<>9999 AND(nama LIKE '%$cari%' OR nip LIKE '%$cari%')");
						
						echo '
                    <!-- Row form Start -->
                    <div class="row jarak-form">

                        <div class="col m12" id="colres">
                            <!-- Table START -->
                            <table class="bordered" id="tbl">
                                <thead class="blue lighten-4" id="head">
                                    <tr>
                                        <th id="oi" width="1%">No</th>
                                        <th id="oi" width="20%">Nama</th>
                                        <th id="oi" width="10%">NIP</th>
										<th id="oi" width="15%">Unit Kerja</th>
										<th id="oi" width="15%">Jabatan</th>
                                        <th id="oi" width="12%">Level</th>
										<th id="oi" width="10%">Status</th>
                                        <th id="oi" width="16%">Tindakan</th>
										
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="oi" >';

                                if(mysqli_num_rows($querykeun) > 0){
                                   $no=1;
                                    while($row = mysqli_fetch_array($querykeun)){
										
										echo '<td id="oi" >'.$no++.'</td>';

														if($row['admin'] == 1){
                                                            $row['admin'] = 'Super Admin';
                                                        } else if($row['admin'] == 2) {
                                                            $row['admin'] = 'Direktur Utama';
                                                        }
														  else if($row['admin'] == 3) {
                                                            $row['admin'] = 'Direktur';
                                                        }
														  else if($row['admin'] == 4) {
                                                            $row['admin'] = 'General Manager';
                                                        }
														  else if($row['admin'] == 5) {
                                                            $row['admin'] = 'Manager';
                                                        }
														  else if($row['admin'] == 6) {
                                                            $row['admin'] = 'Assistant Manager';
                                                        }
														  else if($row['admin'] == 7) {
                                                            $row['admin'] = 'Senior Officer';
                                                        }
														  else if($row['admin'] == 8) {
                                                            $row['admin'] = 'Staff';
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
                                            <td id="oi" >'.$unid.'</td>
											<td id="oi" >'.$jabatung.'</td>
											<td id="oi" >'.$row['admin'].'</td>
											<td id="oi" >'.$unid.'</td>
                                            <td id="oi" >';

                                    if($_SESSION['id_user'] != $row['id_user'] && $_SESSION['admin']!=1){
                                        echo '<button class="btn small blue-grey waves-effect waves-light"><i class="material-icons">error</i> No Action</button>';
                                    }
									else{
                                          echo ' <a class="btn small blue waves-effect waves-light" href="?page=usr&act=edit&id_user='.$row['id_user'].'">
                                                 <i class="material-icons">edit</i> EDIT</a>
                                                 <a class="btn small deep-orange waves-effect waves-light" href="?page=usr&act=del&id_user='.$row['id_user'].'"><i class="material-icons" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');">delete</i> DEL</a>
												 <a class="btn small green waves-effect waves-light" href="?page=cv&id_user='.$row['id_user'].'">
                                                 <i class="material-icons">print</i> CETAK CV</a>';
                                        
                                    } echo '</td>
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
                                        <th id="oi"  width="20%">Nama</th>
                                        <th id="oi"  width="10%">NIP</th>
										<th id="oi"  width="15%">Unit Kerja</th>
										<th id="oi"  width="15%">Jabatan</th>
                                        <th id="oi"  width="12%">Level</th>
										<th id="oi"  width="10%">Status</th>
                                        <th id="oi"  width="16%">Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="oi">';
								$querykeunsd=mysqli_query($config,"SELECT * FROM tbl_user WHERE id_user<>9999 ORDER by admin ASC");			
                                if(mysqli_num_rows($querykeunsd) > 0){ 
								   $no=1;
                                    while($row = mysqli_fetch_array($querykeunsd)){
									echo '<td id="oi" >'.$no++.'</td>';
									
														if($row['admin'] == 1){
                                                            $row['admin'] = 'Super Admin';
                                                        } else if($row['admin'] == 2) {
                                                            $row['admin'] = 'Direktur Utama';
                                                        }
														  else if($row['admin'] == 3) {
                                                            $row['admin'] = 'Direktur';
                                                        }
														  else if($row['admin'] == 4) {
                                                            $row['admin'] = 'General Manager';
                                                        }
														  else if($row['admin'] == 5) {
                                                            $row['admin'] = 'Manager';
                                                        }
														  else if($row['admin'] == 6) {
                                                            $row['admin'] = 'Assistant Manager';
                                                        }
														  else if($row['admin'] == 7) {
                                                            $row['admin'] = 'Senior Officer';
                                                        }
														  else if($row['admin'] == 8) {
                                                            $row['admin'] = 'Officer';
                                                        }
														  else if($row['admin'] == 9) {
                                                            $row['admin'] = 'Koperasi';
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
                                            <td id="oi" >'.$unid.'</td>
											<td id="oi" >'.$jabatung.'</td>
											<td id="oi" >'.$row['admin'].'</td>';
											
											if($_SESSION['admin']==1){
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

                                      
										if($_SESSION['id_user'] != $row['id_user'] && $_SESSION['admin']!=1){
                                        echo '<button class="btn small blue-grey waves-effect waves-light"><i class="material-icons">error</i> No Action</button>';
                                    }
									else{
                                          echo ' <a class="btn small blue waves-effect waves-light" href="?page=usr&act=edit&id_user='.$row['id_user'].'">
                                                 <i class="material-icons">edit</i> EDIT</a>
                                                 <a class="btn small deep-orange waves-effect waves-light" href="?page=usr&act=del&id_user='.$row['id_user'].'"><i class="material-icons" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');">delete</i> DEL</a>
												 <a class="btn small green waves-effect waves-light" href="?page=cv&id_user='.$row['id_user'].'">
                                                 <i class="material-icons">print</i> CETAK CV</a>';
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
					

                    $query = mysqli_query($config, "SELECT * FROM tbl_user");
                    $cdata = mysqli_num_rows($query);
                    $cpg = ceil($cdata/$limit);
					$batas=10;
					$tes=1;
					$qwe=1%10;
                    echo '<!-- Pagination START -->
                          <ul class="pagination">';

                    
                }
            }
	}
?>
<script type="text/javascript" src="asset/js/halaman.js"></script>

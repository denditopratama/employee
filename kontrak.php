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
    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {

        

        if(isset($_REQUEST['act'])){
            $act = $_REQUEST['act'];
            switch ($act) {
                case 'add':
                    include "tambah_surat_keluar.php";
                    break;
                case 'edit':
                    include "edit_surat_keluar.php";
                    break;
                case 'del':
                    include "hapus_surat_keluar.php";
                    break;
				case 'dtjkn':
                    include "ditujukan.php";
                    break;	
            }
        } else {

  

            //pagging
			$limit = 25;
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
                                            <li class="waves-effect waves-light hide-on-small-only"><a style="font-size:24px!important" href="?page=kontrak" class="judul"><i class="material-icons" style="line-height:60px">chrome_reader_mode</i> Kontrak</a></li>
                                            <li class="waves-effect waves-light">
                                                <a href="?page=kontrak&act=add"><i class="material-icons md-24">add_circle</i> Tambah Data</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col m5 hide-on-med-and-down" style="background-color:#39424c"> 
                                        <form method="post" action="?page=kontrak">
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
                ?>

                <!-- Row form Start -->
                <div class="row jarak-form">

                <?php
                    
                            if(isset($_REQUEST['submit'])){
							$cari = mysqli_real_escape_string($config, $_REQUEST['cari']);
							
                                //script untuk mencari data
                                $query = mysqli_query($config, "SELECT * FROM tabel_surat_keluar WHERE id_user='".$_SESSION['id_user']."' AND (isi LIKE '%$cari%' OR nama LIKE '%$cari%' OR no_surat LIKE '%$cari%' OR tgl_surat LIKE '%$cari%' OR tujuan LIKE '%$cari%' OR no_agenda LIKE '%$cari%') ORDER by id_surat DESC");
								$queryf = mysqli_query($config, "SELECT * FROM tabel_surat_keluar WHERE id_user='".$_SESSION['id_user']."' AND (isi LIKE '%$cari%' OR nama LIKE '%$cari%' OR no_surat LIKE '%$cari%' OR tgl_surat LIKE '%$cari%' OR tujuan LIKE '%$cari%' OR no_agenda LIKE '%$cari%')");	
								echo '
                        <div class="col s12" style="margin-top: -18px;">
                            <div class="card yellow darken">
                                <div class="card-content">
                                <p class="description">Hasil pencarian untuk kata kunci <strong>"'.stripslashes($cari).'"</strong><span class="right"><a href="?page=kontrak"><i class="material-icons md-36" style="color: #333;">clear</i></a></span></p>
                                </div>
                            </div>
                        </div>';
						$cdata = 0;
						
					} else {
					$query = mysqli_query($config, "SELECT * FROM tabel_surat_keluar WHERE id_user='".$_SESSION['id_user']."' ORDER by id_surat DESC LIMIT $curr, $limit");
					$queryf = mysqli_query($config, "SELECT * FROM tabel_surat_keluar WHERE id_user='".$_SESSION['id_user']."'");
					$cdata = mysqli_num_rows($queryf);}
								       
								
						
                        echo '
                        <div class="col m12" id="colres">
                        <table class="bordered" id="tblv">
                            <thead class="blue lighten-4" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" id="head">
                                 <tr>
									<th width="1%"style="color:#fff">Nomor Agenda</th>
                                        <th width="25%"style="color:#fff">Isi Surat<br/><hr style="background-color:#f9f50b">File</hr></th>
                                        <th width="12%"style="color:#fff">Asal Surat</th>
										<th width="12%"style="color:#fff">Ditujukan</th>
										<th width="12%"style="color:#fff">Nomor Surat</th>
                                        <th width="10%" style="color:#fff">Tanggal Surat</th>
										<th width="15%" style="color:#fff">Status Surat</th>
										<th width="12%" style="color:#fff">Tindakan</th>

                                        

                                </tr>
                            </thead>

                            <tbody>
                                <tr>';

                          
							
								if(!empty($query)){
                                if(mysqli_num_rows($query) > 0){
                                    $no = 1;
                                    while($row = mysqli_fetch_array($query)){
										
                                      echo '
                                        <td style="text-align:center">'.$row['no_agenda'].'</td>
										<td style="text-align:center">'.substr($row['isi'],0,200).'<br/><br/><strong>File :</strong>';
										if(!empty($row['file'])){
                                            echo '<em><strong><a href="?page=gsm&act=fsm&id_surat='.$row['id_surat'].'">'.$row['file'].'</a></strong>';
                                        } else {
                                            echo '<em>Tidak ada file yang di upload</em>';
                                        } echo '</td>
                                        <td style="text-align:center">'.$row['nama'].'</td>
										<td style="text-align:center">'.$row['tujuan'].'</td>
										<td style="text-align:center">'.$row['no_surat'].'</td>';
                                        
										
                                      

                                        $y = substr($row['tgl_surat'],0,4);
                                        $m = substr($row['tgl_surat'],5,2);
                                        $d = substr($row['tgl_surat'],8,2);

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
									
										
                                        echo '<td style="text-align:center">'.$d." ".$nm." ".$y.'</td><td style="text-align:center">
										';
										  $tui=mysqli_query($config,"SELECT nama FROM tbl_user WHERE nama='".$row['tujuan']."'");
										  list($nama) = mysqli_fetch_array($tui);
										  if($row['tujuan']!=$nama){
											
										
									if($row['status']==1){	
									
									echo'
                                 	<a class="btn small light-green waves-effect waves-light tooltipped"  data-position="left" data-tooltip="Surat Belum Di Approve Oleh Admin">
                                    <i class="material-icons">done</i> APPROVED</a>';
									} 
									else {
										echo'
										<a class="btn small red waves-effect waves-light tooltipped" data-tooltip="Surat Belum Di Approve Oleh Admin">
                                    <i class="material-icons">highlight_off</i> APPROVE</a>';}
								
									if(isset($_REQUEST['simpans'])){
									$querys = mysqli_query($config, "UPDATE tbl_surat_keluar SET status=1 WHERE id_surat='".$row['id_surat']."'");
									if($query == true){
                                       header("Location: ./admin.php?page=kontrakall");
                                       die();
                                      }
									}
								 } else {
									 
										$weq=mysqli_query($config,"SELECT baca FROM tbl_surat_masuk WHERE id_surat='".$row['id_surat']."'");	
										list($baca) = mysqli_fetch_array($weq);	

										if($baca==1){										
											  echo'
                                 	<a class="btn small light-green waves-effect waves-light tooltipped"  data-position="left" data-tooltip="Surat Telah Dibaca">
                                    <i class="material-icons"></i> READ</a>';
									} 
									else {
										echo'
										<a class="btn small red waves-effect waves-light tooltipped"  data-position="left" data-tooltip="Surat Belum Dibaca">
                                    <i class="material-icons"></i> UNREAD</a>';}
											  
											  
											  
											  
											  
										  }
										
										
										
										
										
										
										
										
									echo'</td><td style="text-align:center">';
                                        
									
										
                                       
                                       
											
                                          echo '
										  
										  
												<a class="btn small light-blue waves-effect waves-light tooltipped" data-position="left" data-tooltip="Pilih EDIT untuk merubah surat" href="?page=kontrak&act=edit&id_surat='.$row['id_surat'].'">
                                                    <i class="material-icons">edit</i> EDIT</a>
                                               
                                               
                                                <a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Pilih Delete untuk menghapus surat" href="?page=kontrak&act=del&id_surat='.$row['id_surat'].'">
                                                    <i class="material-icons">delete</i> DEL</a>';
                                         echo '
                                        </td>
                                    </tr>
                                </tbody>';
                                }
                            } else {
                                echo '<tr><td colspan="8"><center><p class="add">Tidak ada data untuk ditampilkan. <u><a href="?page=kontrak&act=add">Tambah data baru</a></u> </p></center></td></tr>';
								}}
                            echo '</table>
                        </div>
                    </div>
					
                    <!-- Row form END -->';

				
					
					
                    
                    $cpg = ceil($cdata/$limit);

                    echo '<br/>
						<div class="row">
                          <ul class="pagination">';

                    if($cdata > $limit ){
					
                        //first and previous pagging
                        if($pg > 1){
                            $prev = $pg - 1;
                            echo '<li><a href="?page=kontrak&pg=1"><i class="material-icons md-48">first_page</i></a></li>
                                  <li><a href="?page=kontrak&pg='.$prev.'"><i class="material-icons md-48">chevron_left</i></a></li>';
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
											</div>
												';

                        //last and next pagging
                        if($pg < $cpg){
                            $next = $pg + 1;
                            echo '<li><a href="?page=kontrak&pg='.$next.'"><i class="material-icons md-48">chevron_right</i></a></li>
                                  <li><a href="?page=kontrak&pg='.$cpg.'"><i class="material-icons md-48">last_page</i></a></li>';
                        } else {
                            echo '<li class="disabled"><a href=""><i class="material-icons md-48">chevron_right</i></a></li>
                                  <li class="disabled"><a href=""><i class="material-icons md-48">last_page</i></a></li>';
                        }
                        echo '
                        </ul>
						</div>
                        <!-- Pagination END -->';
                } else {
                    echo '';
                }
            }
        }
    

?>
<script>
$(document).ready(function(){
$('#halaman').change(function(){
	var x = $(this).val();
	window.location.href='admin.php?page=kontrak&pg='+ x;
		});
	
	});	


</script>
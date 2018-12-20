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

        if(empty($_SESSION['admin'])){
            echo '<script language="javascript">
                    window.alert("ERROR! Anda tidak memiliki hak akses untuk membuka halaman ini");
                    window.location.href="./logout.php";
                  </script>';
        } else {

            if(isset($_REQUEST['act'])){
                $act = $_REQUEST['act'];
                switch ($act) {
                    case 'add':
                        include "tambah_surat_masuk.php";
                        break;
					case 'edit':
                        include "edit_surat_masuk.php";
                        break;
                    case 'disp':
                        include "disposisi.php";
                        break;
                    case 'print':
                        include "cetak_disposisi.php";
                        break;
                    case 'del':
                        include "hapus_surat_masuk.php";
                        break;
                }
            } else {
				
                $query = mysqli_query($config, "SELECT surat_masuk FROM tbl_sett");
                list($surat_masuk) = mysqli_fetch_array($query);

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
                                <div class="nav-wrapper blue-grey darken-3" style="background-color:#39424c!important">
                                    <div class="col m7" style="background-color:#39424c">
                                        <ul class="left">
                                            <li class="waves-effect waves-light hide-on-small-only" ><a href="?page=tsm" class="judul"><i class="material-icons">mail</i> Surat Masuk</a></li>
                                            <li class="waves-effect waves-light" style="background-color:#39424c">
										
                                                
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col m5 hide-on-med-and-down" style="background-color:#39424c">
                                        <form method="post" action="?page=tsm">
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
				echo'
					<div class="col m12" id="colres">
                        <table class="bordered" id="tblv">
                            <thead class="blue lighten-4"style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"" id="head">
                                <tr>
										<th width="1%"style="color:#fff">Nomor Agenda</th>
                                        <th width="15%"style="color:#fff">Perihal<br/><hr style="background-color:#f9f50b">File</hr></th>
                                        <th width="15%"style="color:#fff">Asal Surat</th>
										<th width="15%"style="color:#fff">Ditujukan</th>
										<th width="5%"style="color:#fff">Nomor Surat</th>
										<th width="20%"style="color:#fff">Status Disposisi</th>
                                        <th width="15%" style="color:#fff">Tanggal Surat<br/><hr style="background-color:#f9f50b">Tanggal Terima</hr></th>
										<th width="1%" style="color:#fff">Tindakan</th>
										
                                </tr>
                            </thead>
                            <tbody>';
								
                    if(isset($_REQUEST['submit'])){
                    $cari = mysqli_real_escape_string($config, $_REQUEST['cari']);
                        echo '
                        <div class="col s12" style="margin-top: -18px;">
                            <div class="card yellow darken">
                                <div class="card-content">
                                <p class="description">Hasil pencarian untuk kata kunci <strong>"'.stripslashes($cari).'"</strong><span class="right"><a href="?page=tsm"><i class="material-icons md-36" style="color: #333;">clear</i></a></span></p>
                                </div>
                            </div>
                        </div>';

                            //script untuk mencari data
					$queroy=mysqli_query($config, "SELECT nama,id_surat FROM tbl_disposisi WHERE nama='".$_SESSION['nama']."'");
								list($namas,$id_surats)=mysqli_fetch_array($queroy);
								
					$query = mysqli_query($config, "SELECT * FROM tabel_surat WHERE id_user='".$_SESSION['id_user']."' AND (isi LIKE '%$cari%' OR keterangan LIKE '%$cari%' OR nama LIKE '%$cari%' OR kode LIKE '%$cari%' OR tgl_surat LIKE '%$cari%' OR tgl_diterima LIKE '%$cari%' OR asal_surat LIKE '%$cari%' OR no_agenda LIKE '%$cari%') OR id_surat='".$id_surats."' ORDER by id_surat");
					
								$queryf = mysqli_query($config, "SELECT * FROM tabel_surat WHERE id_user='".$_SESSION['id_user']."' OR id_surat='".$id_surats."' AND (isi LIKE '%$cari%' OR keterangan LIKE '%$cari%' OR nama LIKE '%$cari%' OR kode LIKE '%$cari%' OR tgl_surat LIKE '%$cari%' OR tgl_diterima LIKE '%$cari%' OR asal_surat LIKE '%$cari%')");
								$cdata=0;}
					else {
                         
                                //script untuk menampilkan data
								
								$queroy=mysqli_query($config, "SELECT nama,id_surat FROM tbl_disposisi WHERE nama='".$_SESSION['nama']."'");
								list($namas,$id_surats)=mysqli_fetch_array($queroy);
							
					$query = mysqli_query($config, "SELECT * FROM tabel_surat WHERE id_user='".$_SESSION['id_user']."' OR id_surat='".$id_surats."' ORDER by id_surat DESC LIMIT $curr, $limit");
					$queryf = mysqli_query($config, "SELECT * FROM tabel_surat WHERE id_user='".$_SESSION['id_user']."' OR id_surat='".$id_surats."'");
					$cdata = mysqli_num_rows($queryf);}
								 
								 if(!empty($query)){
                                if(mysqli_num_rows($query) > 0){
                                    $no = 1;
									
									
                                    while($row = mysqli_fetch_array($query)){
										if($row['baca']==0){
                                            echo '<tr class="tooltipped" style="background-color:rgba(255,235,59,0.7)" data-position="bottom" data-tooltip="Surat Belum dibaca">';
                                        } else {
                                            echo '<tr>';
                                        }
                                      
                                      echo'
                                        <td style="text-align:center">'.$row['no_agenda'].'</td>
										<td style="text-align:center">'.substr($row['isi'],0,200).'<br/><br/><strong>File :</strong>';
										if(!empty($row['file'])){
                                            echo '<em><strong><a href="?page=gsm&act=fsm&id_surat='.$row['id_surat'].'">'.$row['file'].'</a></strong>';
                                        } else {
                                            echo '<em>Tidak ada file yang di upload</em>';
                                        } echo '</td>
                                        <td style="text-align:center">'.$row['asal_surat'].'</td>
										<td style="text-align:center">'.$row['nama'].'</td>
										<td style="text-align:center">'.$row['kode'].'</td>';
                                        
										
                                      

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
										
										$tahun = substr($row['tgl_diterima'],0,4);
                                        $bulan = substr($row['tgl_diterima'],5,2);
                                        $hari = substr($row['tgl_diterima'],8,2);

                                        if($bulan == "01"){
                                            $nama_bulan = "Januari";
                                        } elseif($bulan == "02"){
                                            $nama_bulan = "Februari";
                                        } elseif($bulan == "03"){
                                            $nama_bulan = "Maret";
                                        } elseif($bulan == "04"){
                                            $nama_bulan = "April";
                                        } elseif($bulan == "05"){
                                            $nama_bulan = "Mei";
                                        } elseif($bulan == "06"){
                                            $nama_bulan = "Juni";
                                        } elseif($bulan == "07"){
                                            $nama_bulan = "Juli";
                                        } elseif($bulan == "08"){
                                            $nama_bulan = "Agustus";
                                        } elseif($bulan == "09"){
                                            $nama_bulan = "September";
                                        } elseif($bulan == "10"){
                                            $nama_bulan = "Oktober";
                                        } elseif($bulan == "11"){
                                            $nama_bulan = "November";
                                        } elseif($bulan == "12"){
                                            $nama_bulan = "Desember";
                                        }
										
                                       echo'<td style="text-align:center">';
										if($row['status']==1){										
											  echo'
										<button class="btn small red waves-effect waves-light tooltipped" type="submits" name="submits" value="submit" data-position="left" data-tooltip="Surat Belum Selesai Diproses">
										<i class="material-icons">highlight_off</i> BELUM SELESAI</button>';
									} 
									else if($row['status']==2) {
										echo'
										<a class="btn small light-green waves-effect waves-light tooltipped" data-position="left" data-tooltip="Surat Telah Selesai Diproses">
                                    <i class="material-icons">done_all</i> SUDAH SELESAI</a>';}
									else if($row['status']==0){
										echo'
										<a class="btn small waves-effect waves-light tooltipped" data-position="left" data-tooltip="Surat Telah Selesai Diproses">
                                    <i class="material-icons"></i> TIDAK ADA DISPOSISI</a>';}
										echo '</td>';
										
                                        echo '<td style="text-align:center">'.$d." ".$nm." ".$y.'<br/><hr/>'.$hari." ".$nama_bulan." ".$tahun.'</td><td>
										';

                                        
									
									$baca=1;
									$bacang=mysqli_real_escape_string($config,$baca);
									$querbroy=mysqli_query($config,"UPDATE tabel_surat SET baca='$bacang' WHERE id_user='".$_SESSION['id_user']."' OR tujuan='".$_SESSION['nama']."'");
                                       
                                       
											
                                          echo '
                                                <a class="btn small light-green waves-effect waves-light tooltipped" data-position="left" data-tooltip="Pilih Disp untuk menambahkan Disposisi Surat" href="?page=tsm&act=disp&id_surat='.$row['id_surat'].'">
                                                    <i class="material-icons">description</i> DISP</a>
                                                <a class="btn small yellow darken-3 waves-effect waves-light tooltipped"data-position="left" data-tooltip="Pilih Print untuk mencetak Disposisi Surat" href="?page=ctk&id_surat='.$row['id_surat'].'" target="_blank">
                                                    <i class="material-icons">print</i> PRINT</a>
                                                <a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Pilih Delete untuk menghapus surat" href="?page=tsm&act=del&id_surat='.$row['id_surat'].'">
                                                    <i class="material-icons">delete</i> DEL</a>';
                                         echo '
                                        </td>
                                    </tr>
                                </tbody>';
									}
                            } else {
                                echo '<tr><td colspan="9"><center><p class="add">Tidak ada data untuk ditampilkan. </p></center></td></tr>';
								 }}
							
								
                          echo '</table>
                        </div>
                    </div>
                    <!-- Row form END -->';

                    
                    
                    $cpg = ceil($cdata/$limit);

                    echo '<br/>
                          <ul class="pagination">
						  <div class="row">';

                    if($cdata > $limit ){

                        //first and previous pagging
                        if($pg > 1){
                            $prev = $pg - 1;
                            echo '<li><a href="?page=tsm&pg=1"><i class="material-icons md-48">first_page</i></a></li>
                                  <li><a href="?page=tsm&pg='.$prev.'"><i class="material-icons md-48">chevron_left</i></a></li>';
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
                            echo '<li><a href="?page=tsm&pg='.$next.'"><i class="material-icons md-48">chevron_right</i></a></li>
                                  <li><a href="?page=tsm&pg='.$cpg.'"><i class="material-icons md-48">last_page</i></a></li>';
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
        }
    
?>
<script>
$(document).ready(function(){
$('#halaman').change(function(){
	var x = $(this).val();
	window.location.href='admin.php?page=tsm&pg='+ x;
		});
	
	});	
</script>
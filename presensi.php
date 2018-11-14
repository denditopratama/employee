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
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu! / Akses Ditolak !</center>';
        header("Location: ./");
        die();
    } else {

        $nampres=mysqli_query($config,"SELECT MAX(id) as maksimalpresensi FROM tbl_presensi");
		$datay=mysqli_fetch_array($nampres);
		$makskontrak= $datay['maksimalpresensi'];
		
		for($i=1;$i<=$makskontrak;$i++){
		if(isset($_REQUEST['submitz'.$i.''])){
			$piceun=mysqli_query($config,"DELETE FROM tbl_presensi WHERE id='$i'");
			$_SESSION['succg'] = 'SUKSES ! Data Berhasil di Hapus';
			header("Location: ./admin.php?page=pres");
			die();
		}}

        if(isset($_REQUEST['act'])){
            $act = $_REQUEST['act'];
            switch ($act) {
                case 'add':
                    include "tambah_presensi.php";
                    break;
				case 'ketpres':
                    include "keterangan_presensi.php";
                    break;
				case 'edit':
                    include "edit_presensi.php";
                    break;
				
               
            }
        } else {

            $query = mysqli_query($config, "SELECT presensi FROM tbl_sett");
            list($presensi) = mysqli_fetch_array($query);

            //pagging
            $limit = 99999;
            $pg = @$_GET['pg'];
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
                                            <li class="waves-effect waves-light hide-on-small-only"><a href="?page=pres" class="judul"><i class="material-icons">note_add</i> Presensi</a></li>
                                            <li class="waves-effect waves-light">
											<?php if($_SESSION['admin']==1){echo'
											<a href="?page=pres&act=add"><i class="material-icons md-24">add_circle</i> Tambah Data</a>';}?>
											
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col m5 hide-on-med-and-down" style="background-color:#39424c"> 
                                        <form method="post" action="?page=pres">
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
                    if(isset($_SESSION['succg'])){
                        $succg = $_SESSION['succg'];
                        echo '<div id="alert-message" class="row" style="display:inline">
                                <div class="col m12">
                                    <div class="card green lighten-5">
                                        <div class="card-content notif">
                                            <span class="card-title green-text"><i class="material-icons md-36">done</i> '.$succg.'</span>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        unset($_SESSION['succg']);
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
                ?>
							<div class="col m12">
                            <div class="card">
                                <div class="card-content">
                                    <span class="card-title black-text"><i class="material-icons md-36" >note</i> Presensi</span>
                                    
									<p class="kata">Untuk Presensi Pekerjaan Proyek silahkan Download Template presensi Kosong <strong><a class="btn small" href="./asset/TEMPLATE PRESENSI KOSONG.pdf" style="color:white"><i style="font-size:20px;margin-top:-3px" class="material-icons md-36">cloud_download</i> Klik Disini</a></strong></p>
									<p class="kata"> Lalu kirimkan ke admin SDM. <strong><a class="btn small" href="?page=tsk&act=add" style="color:white"><i style="font-size:20px;margin-top:-3px" class="material-icons md-36">cloud_download</i> Klik Disini</a></strong></p>
									<p><span class="red-text">*</span> (Khusus Karyawan Proyek), jika ingin mengajukan lembur, silahkan mengirimkan presensi terlebih dahulu, lalu klik lembur pada presensi terkait yang telah di tambahkan oleh admin pada tabel di bawah ini</p>

                                  
									
									
                                </div>
								</div>
								</div>
                <!-- Row form Start -->
                <div class="row jarak-form">

                <?php
                    if(isset($_REQUEST['submit'])){
                    $cari = mysqli_real_escape_string($config, $_REQUEST['cari']);
                        echo '
                        <div class="col s12" style="margin-top: -18px;">
                            <div class="card yellow darken">
                                <div class="card-content">
                                <p class="description">Hasil pencarian untuk kata kunci <strong>"'.stripslashes($cari).'"</strong><span class="right"><a href="?page=pres"><i class="material-icons md-36" style="color: #333;">clear</i></a></span></p>
                                </div>
                            </div>
                        </div>

                        <div class="col m12" id="colres">
                            <table class="bordered" id="tblr">
                                <thead class="blue lighten-4"style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" id="head"  >
                                     <tr>
										<th width="1%"style="color:#fff">Nomor</th>
                                        <th width="25%"style="color:#fff">File Presensi</th>
                                        <th width="15%"style="color:#fff">Bulan</th>
										<th width="20%"style="color:#fff">Divisi</th>
										<th width="20%" style="color:#fff">Tindakan</th>
                                </thead>

                                <tbody>
                                    <tr>';

                                //script untuk mencari data
								if($_SESSION['admin']==1){
							$querys = mysqli_query($config, "SELECT * FROM tbl_presensi WHERE bulan LIKE '%$cari%' ORDER by id DESC LIMIT $curr, $limit");}
							else{
							$querys = mysqli_query($config, "SELECT * FROM tbl_presensi WHERE divisi='".$_SESSION['divisi']."' AND(bulan LIKE '%$cari%') ORDER by id DESC");}
                                if(mysqli_num_rows($querys) > 0){
                                    $no = 1;
                                    while($row = mysqli_fetch_array($querys)){
                                      
                                        echo '
                                        <td style="text-align:center">'.$no++.'</td>
										<td style="text-align:center"><strong>File :</strong>';
										if(!empty($row['file'])){
                                            echo '<strong><a href="./upload/presensi/'.$row['file'].'">&nbsp'.$row['file'].'</a></strong>';
                                        } else {
                                            echo '<i>Tidak ada file yang di upload</i>';
                                        } echo '</td>';
                                        
										
                                      

                                        $y = substr($row['bulan'],0,4);
                                        $m = substr($row['bulan'],5,2);
                                        $d = substr($row['bulan'],8,2);

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
									
										
                                        echo '<td style="text-align:center">'.$nm." ".$y.'</td>
										';
										
										$divisi=$row['divisi'];
										$gadeng=mysqli_query($config,"SELECT uraian FROM tbl_ref_divisi WHERE kode='$divisi'");
										list($uit)=mysqli_fetch_array($gadeng);
										echo '<td style="text-align:center">'.$uit.'</td>';
										
										  
								
                                        
									
											
                                       
                                               
                                          echo'<td style="text-align:center">';
										  echo'
										  <a class="btn small yellow darken-3 waves-effect waves-light tooltipped"data-position="left" data-tooltip="Pilih Print untuk mencetak Disposisi Surat" href="?page=lmbr&id='.$row['id'].'">
                                                    <i class="material-icons"></i> LEMBUR</a>';
													
										if($_SESSION['admin']==1){
										  echo'
										  <form method="POST">
										<button type="submit" name="submitz'.$row['id'].'" class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Presensi"  onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
										<i class="material-icons">delete</i> DEL</button></td>
										</form>';}
											
                                         echo '
                                       
                                    </tr>
                                </tbody>';
                                    }
                                } else {
                                    echo '<tr><td colspan="12"><center><p class="add">Tidak ada data yang ditemukan</p></center></td></tr>';
                                }
                              echo '</table><br/><br/>
                            </div>
                        </div>
                        <!-- Row form END -->';

                       

                    } else {

                        echo '
                        <div class="col m12" id="colres">
                        <table class="bordered" id="tblr">
                            <thead class="blue lighten-4" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" id="head">
                                 <tr>
									<th width="1%"style="color:#fff">Nomor</th>
                                        <th width="25%"style="color:#fff">File Presensi</th>
                                        <th width="15%"style="color:#fff">Bulan</th>
										<th width="20%"style="color:#fff">Divisi</th>
										<th width="20%" style="color:#fff">Tindakan</th>
									
                                </tr>
                            </thead>

                            <tbody>
                                <tr>';

                            //script untuk mencari data
							if($_SESSION['admin']==1){
							$query = mysqli_query($config, "SELECT * FROM tbl_presensi ORDER by id DESC LIMIT $curr, $limit");}
							else
							{$query = mysqli_query($config, "SELECT * FROM tbl_presensi WHERE divisi='".$_SESSION['divisi']."' ORDER by id DESC");}
								 
                                if(mysqli_num_rows($query) > 0){
                                    $no = 1;
                                    while($row = mysqli_fetch_array($query)){
										
                                      echo '
                                        <td style="text-align:center">'.$no++.'</td>
										<td style="text-align:center"><strong>File :</strong>';
										if(!empty($row['file'])){
                                            echo '<strong><a href="./upload/presensi/'.$row['file'].'">&nbsp'.$row['file'].'</a></strong>';
                                        } else {
                                            echo '<i>Tidak ada file yang di upload</i>';
                                        } echo '</td>';
                                        
										
                                      

                                        $y = substr($row['bulan'],0,4);
                                        $m = substr($row['bulan'],5,2);
                                        $d = substr($row['bulan'],8,2);

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
									
										
                                        echo '<td style="text-align:center">'.$nm." ".$y.'</td>
										';
										$divisi=$row['divisi'];
										if($divisi==1){
											$uit="Direktur";
										} 
										else if ($divisi==2){
											$uit="SDM dan Umum";
										}
										else if ($divisi==3){
											$uit="Keuangan";
										}
										else if ($divisi==4){
											$uit="Teknik";
										}
										else if ($divisi==5){
											$uit="Pengembangan Bisnis";
										}
										else if ($divisi==6){
											$uit="Marketing";
										}
										else if ($divisi==7){
											$uit="TIP";
										}
										else if ($divisi==8){
											$uit="Koperasi";
										}
										else if ($divisi==9){
											$uit="Proyek";
										}
										echo '<td style="text-align:center">'.$uit.'</td>';
										
										  
								
                                        
									
											
                                        
                                               
                                          echo'<td style="text-align:center">';
										  
										  echo'
										  <a class="btn small yellow darken-3 waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik Untuk Mengajukan Lembur" href="?page=lmbr&id='.$row['id'].'">
                                                    <i class="material-icons"></i> LEMBUR</a>
										<a class="btn small green darken-3 waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik Untuk Mengajukan Keterangan" href="?page=pres&act=ketpres&id='.$row['id'].'">
                                                    <i class="material-icons"></i>KETERANGAN</a>';
													
										if($_SESSION['admin']==1){
										  echo'
										  <form method="POST">
										<button type="submit" name="submitz'.$row['id'].'" class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Presensi"  onclick="return confirm(\'Anda yakin ingin menghapus data?\');">HAPUS</button>
										<a class="btn small blue darken-3 waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik Untuk Mengubah Presensi" href="?page=pres&act=edit&id='.$row['id'].'">
                                                    <i class="material-icons"></i>EDIT</a></td>
										</form>';}
											
                                         echo '
                                       
                                    </tr>
                                </tbody>';
                                }
                            } else {
                                echo '<tr><td colspan="8"><center><p class="add">Tidak ada data untuk ditampilkan. <u></u> </p></center></td></tr>';
                            }
                            echo '</table>
                        </div>
                    </div>
                    <!-- Row form END -->';

                   
            }
        }
		
}
?>
<script type="text/javascript" src="asset/js/halamanuser.js"></script>
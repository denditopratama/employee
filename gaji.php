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
    if(empty($_SESSION['admin']) || $_SESSION['gaji']!=1){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {

        $nampres=mysqli_query($config,"SELECT MAX(id) as maksimalpresensi FROM tbl_bulan_gaji");
		$datay=mysqli_fetch_array($nampres);
		$makskontrak= $datay['maksimalpresensi'];
		
		for($i=1;$i<=$makskontrak;$i++){
		if(isset($_REQUEST['submitz'.$i.''])){
			$piceun=mysqli_query($config,"DELETE FROM tbl_bulan_gaji WHERE id='$i'");
			$_SESSION['succg'] = 'SUKSES ! Data Berhasil di Hapus';
			header("Location: ./admin.php?page=gjh");
			die();
		}}

        if(isset($_REQUEST['act'])){
            $act = $_REQUEST['act'];
            switch ($act) {
                case 'add':
                    include "tambah_bulan_gaji.php";
                    break;
				
				
				
               
            }
        } else {?>

                <!-- Row Start -->
                <div class="row">
                    <!-- Secondary Nav START -->
                    <div class="col s12">
                        <div class="z-depth-1">
                            <nav class="secondary-nav">
                                <div class="nav-wrapper blue-grey darken-1" style="background-color:#39424c!important">
                                    <div class="col m7" style="background-color:#39424c">
                                        <ul class="left">
                                            <li class="waves-effect waves-light hide-on-small-only"><a href="?page=gjh" class="judul"><i class="material-icons">attach_money</i> Gaji</a></li>
                                            <li class="waves-effect waves-light">
											
											<a href="?page=gjh&act=add"><i class="material-icons md-24">add_circle</i> Tambah Data</a>
											
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col m5 hide-on-med-and-down" style="background-color:#39424c"> 
                                        <form method="post" action="?page=gjh">
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
                                    <span class="card-title black-text"><i class="material-icons md-36" >attach_money</i> Gaji</span>
                                    <p class="kata">Berikut alur proses gaji yang harus diperhatikan : </p>
									<p><span class="red-text">*</span> 1.Klik tambah data di atas, pilih bulan penggajian</p>
									<p><span class="red-text">*</span> 2.Pilih Karyawan</p>
									<p><span class="red-text">*</span> 3.Input presensi (jumlah kehadiran, sakit, izin, cuti dll.)</p>
									<p><span class="red-text">*</span> 4.Input penerimaan dan potongan lain</p>
									<p><span class="red-text">*</span> 5.Potongan gaji karyawan</p>

                                  
									
									
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
                                <p class="description">Hasil pencarian untuk kata kunci <strong>"'.stripslashes($cari).'"</strong><span class="right"><a href="?page=gjh"><i class="material-icons md-36" style="color: #333;">clear</i></a></span></p>
                                </div>
                            </div>
                        </div>

                        <div class="col m12" id="colres">
                            <table class="bordered" id="tblr">
                                <thead class="blue lighten-4"style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" id="head"  >
                                     <tr>
										<th width="1%"style="color:#fff">Nomor</th>
                                        <th width="25%"style="color:#fff">Bulan</th>
										<th width="20%"style="color:#fff">Status</th>
										<th width="20%" style="color:#fff">Tindakan</th>
                                </thead>

                                <tbody>
                                    <tr>';

                                //script untuk mencari data
								$query = mysqli_query($config, "SELECT * FROM tbl_bulan_gaji WHERE bulan LIKE '%$cari%' ORDER by id DESC");
								 
                                if(mysqli_num_rows($query) > 0){
                                    $no = 1;
                                    while($row = mysqli_fetch_array($query)){
										
                                      echo '
                                        <td style="text-align:center">'.$no++.'</td>';
                                        
										
                                      

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
										
										if($row['status_proses']==0){
											echo '<td style="text-align:center"><a class="btn small red waves-effect waves-light tooltipped"data-position="left" data-tooltip="Gaji belum selesai di proses">
                                                    <i class="material-icons">highlight_off</i> BELUM SELESAI</a></td>';
										} else {
											echo '<td style="text-align:center"><a class="btn small green waves-effect waves-light tooltipped"data-position="left" data-tooltip="Gaji sudah selesai di proses">
                                                    <i class="material-icons">highlight_off</i> SUDAH SELESAI</a></td>';
										}
										
										
										  
								
                                        
									
											
                                        
                                               
                                          echo'<td style="text-align:center">';
										  
										  echo'
										  <form method="POST">
										  <a class="btn small green darken-3 waves-effect waves-light tooltipped" data-position="left" data-tooltip="Klik Untuk Memproses Gaji" href="?page=pros&id='.$row['id'].'">
                                                    <i class="material-icons">done_all</i> PROSES</a>
										<button name="submitz'.$row['id'].'" class="btn small red darken-3 waves-effect waves-light tooltipped" data-position="left" data-tooltip="Klik Untuk Menghapus Histori Gaji" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
                                                    <i class="material-icons">delete</i>HAPUS</button>
													</form>';
										
									
											
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
                                        <th width="25%"style="color:#fff">Bulan</th>
										<th width="20%"style="color:#fff">Status</th>
										<th width="20%" style="color:#fff">Tindakan</th>
									
                                </tr>
                            </thead>

                            <tbody>
                                <tr>';
									#MENAMPILKAN DATA BULAN GAJI
								$query = mysqli_query($config, "SELECT * FROM tbl_bulan_gaji ORDER by id DESC");
								 
                                if(mysqli_num_rows($query) > 0){
                                    $no = 1;
                                    while($row = mysqli_fetch_array($query)){
										
                                      echo '
                                        <td style="text-align:center">'.$no++.'</td>';
                                        
										
                                      

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
										
										if($row['status_proses']==0){
											echo '<td style="text-align:center"><a class="btn small red waves-effect waves-light tooltipped"data-position="left" data-tooltip="Gaji belum selesai di proses">
                                                    <i class="material-icons">highlight_off</i> BELUM SELESAI</a></td>';
										}
										
										
										  
								
                                        
									
											
                                        
                                               
                                          echo'<td style="text-align:center">';
										  
										  echo'
										  <form method="POST">
										  <a class="btn small green darken-3 waves-effect waves-light tooltipped" data-position="left" data-tooltip="Klik Untuk Memproses Gaji" href="?page=pros&id='.$row['id'].'">
                                                    <i class="material-icons">done_all</i> PROSES</a>
										<button name="submitz'.$row['id'].'" class="btn small red darken-3 waves-effect waves-light tooltipped" data-position="left" data-tooltip="Klik Untuk Menghapus Histori Gaji" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
                                                    <i class="material-icons">delete</i>HAPUS</button>
													</form>';
										
									
											
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
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
    if(empty($_SESSION['admin']) && $_SESSION['gaji']!=1){
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
            $mpus=mysqli_query($config,"DELETE FROM tbl_gaji WHERE id_gaji='$i'");
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
			
        } else { 
	
		?>

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
									<p><span class="red-text">*</span> 6.Klik Pelaporan Gaji</p>
									<br>

                                  
									
									
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
						
						$jia=mysqli_query($config,"SELECT COUNT(*) FROM tbl_user WHERE admin<>1 AND(id_user<>9999 AND admin<>9 AND status_aktif=1)");
						list($jumlahuser)=mysqli_fetch_array($jia);
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
										
										
						
							$kio=mysqli_query($config,"SELECT COUNT(*) FROM tbl_gaji WHERE id_gaji='".$row['id']."' AND status=1");
							list($userproses)=mysqli_fetch_array($kio);
							
							if($userproses==$jumlahuser){
							$querybc=mysqli_query($config,"UPDATE tbl_bulan_gaji SET status_proses=1 WHERE id='".$row['id']."'");
							}
							
										if($row['status_proses']==0){
											echo '<td style="text-align:center"><a class="btn small red waves-effect waves-light tooltipped"data-position="left" data-tooltip="Proses Gaji belum selesai">
                                                    <i class="material-icons">highlight_off</i> BELUM SELESAI</a></td>';
										} else {
											echo '<td style="text-align:center"><a class="btn small green waves-effect waves-light tooltipped"data-position="left" data-tooltip="Proses Gaji sudah selesai">
                                                    <i class="material-icons">done</i> SUDAH SELESAI</a></td>';
										}
										
                                               
                                          echo'<td style="text-align:center">';
										  
										  echo'
										  <form method="POST">
										  <a class="btn small green darken-2 waves-effect waves-light tooltipped" data-position="left" data-tooltip="Klik Untuk Memproses Gaji" href="?page=pros&id='.$row['id'].'">
                                                    <i class="material-icons">done_all</i> PROSES</a>
										<button name="submitz'.$row['id'].'" class="btn small red darken-3 waves-effect waves-light tooltipped" data-position="left" data-tooltip="Klik Untuk Menghapus Histori Gaji" onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
                                                    <i class="material-icons">delete</i>HAPUS</button>
													</form>
																			
										<button id="lapor'.$row['id'].'" class="btn small grey darken-2 waves-effect waves-light tooltipped" data-position="left" data-tooltip="Klik Untuk Mencetak Laporan Gaji">
                                                    <i class="material-icons">assignment_turned_in</i> PELAPORAN GAJI</button>
													';
										
									
											
                                         echo '
                                       
                                    </tr>
                                </tbody>
								
								<div id="modald">
								<div id="modals'.$row['id'].'" class="modal" style="background-color:yellow">
								<div class="modal-content yellow" style="padding-top:1px!important;background-color:#ffff00!important">
								<div class="input-field col s12">
								<h5><i class="material-icons" style="margin-bottom:8px">assignment_turned_in</i> Pelaporan Gaji</h5>
								<small class="blue-text">* Silahkan pilih jenis laporan.</small><br><br>
								
									
									<div class="col m12" id="colres">
									  <form method="POST" action="printlaporangaji.php">
									<input type="hidden" value="'.$row['id'].'" name="id_gaji">
									<button class="btn small grey darken-2 waves-effect waves-light tooltipped" data-position="left" data-tooltip="Klik Untuk Mencetak Laporan Gaji" onclick="return confirm(\'Anda yakin ingin melakukan pelaporan data?\');">
                                                    <i class="material-icons">assignment_turned_in</i> REKAPITULASI PENGHASILAN BULANAN</button>
									</form>
											</div>
											
											<div class="col m12" id="colres">
									  <form method="POST" action="printbank.php">
									<input type="hidden" value="'.$row['id'].'" name="id_gaji">
									<button class="btn small grey darken-2 waves-effect waves-light tooltipped" data-position="left" data-tooltip="Klik Untuk Mencetak Laporan Gaji" onclick="return confirm(\'Anda yakin ingin melakukan pelaporan data?\');">
                                                    <i class="material-icons">assignment_turned_in</i> REKAPITULASI TOTAL PENGHASILAN BERDASARKAN BANK</button>
									</form>
											</div>
											
										<div class="col m12" id="colres">
									  <form method="POST" action="printpenerimaanlain.php">
									<input type="hidden" value="'.$row['id'].'" name="id_gaji">
									<button class="btn small grey darken-2 waves-effect waves-light tooltipped" data-position="left" data-tooltip="Klik Untuk Mencetak Laporan Gaji" onclick="return confirm(\'Anda yakin ingin melakukan pelaporan data?\');">
                                                    <i class="material-icons">assignment_turned_in</i> REKAPITULASI TOTAL PENGHASILAN PENERIMAAN LAIN</button>
									</form>
											</div>
											
											<div class="col m12" id="colres">
									  <form method="POST" action="printpotonganlain.php">
									<input type="hidden" value="'.$row['id'].'" name="id_gaji">
									<button class="btn small grey darken-2 waves-effect waves-light tooltipped" data-position="left" data-tooltip="Klik Untuk Mencetak Laporan Gaji" onclick="return confirm(\'Anda yakin ingin melakukan pelaporan data?\');">
                                                    <i class="material-icons">assignment_turned_in</i> REKAPITULASI TOTAL PENGHASILAN POTONGAN LAIN</button>
									</form>
											</div>
											
											<div class="col m12" id="colres">
									  <form method="POST" action="printlampirangaji.php">
									<input type="hidden" value="'.$row['id'].'" name="id_gaji">
									<button class="btn small grey darken-2 waves-effect waves-light tooltipped" data-position="left" data-tooltip="Klik Untuk Mencetak Laporan Gaji" onclick="return confirm(\'Anda yakin ingin melakukan pelaporan data?\');">
                                                    <i class="material-icons">assignment_turned_in</i> LAMPIRAN NOTA GAJI</button>
									</form>
											</div>
											
											<div class="col m12" id="colres">
									  <form method="POST" action="printlaporansdm.php">
									<input type="hidden" value="'.$row['id'].'" name="id_gaji">
									<button class="btn small grey darken-2 waves-effect waves-light tooltipped" data-position="left" data-tooltip="Klik Untuk Mencetak Laporan Gaji" onclick="return confirm(\'Anda yakin ingin melakukan pelaporan data?\');">
                                                    <i class="material-icons">assignment_turned_in</i> LAPORAN GAJI KHUSUS SDM</button>
									</form>
											</div>
											<div>
											</div>
											
											<div class="col m12" id="colres">
									  <form method="POST" action="printlaporanbpjs.php">
									<input type="hidden" value="'.$row['id'].'" name="id_gaji">
									<button class="btn small grey darken-2 waves-effect waves-light tooltipped" data-position="left" data-tooltip="Klik Untuk Mencetak Laporan Gaji" onclick="return confirm(\'Anda yakin ingin melakukan pelaporan data?\');">
                                                    <i class="material-icons">assignment_turned_in</i> LAPORAN PREMI BPJS KETENAGAKERJAAN</button>
									</form>
											</div>
											<div>
											</div>
																
								
								</div>
								</div>
								</div>
								</div>';
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
		
	
	echo'<script>


$(document).ready(function(){';
	for ($i=1;$i<=$makskontrak;$i++){
		echo'
	$(\'#lapor'.$i.'\').click(function(){
	$("#modals'.$i.'").openModal()
	});';}
	echo'
						});
</script>
';	
		
	}

?>
<script type="text/javascript" src="asset/js/halamanuser.js"></script>

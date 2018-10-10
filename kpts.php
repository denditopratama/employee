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

        $namps=mysqli_query($config,"SELECT MAX(id) as maksimalkpts FROM tbl_kpts");
		$datay=mysqli_fetch_array($namps);
		$makskpts= $datay['maksimalkpts'];
		
		for($i=1;$i<=$makskpts;$i++){
		if(isset($_REQUEST['submitd'.$i.''])){
			$piceun=mysqli_query($config,"DELETE FROM tbl_kpts WHERE id='$i'");
			$_SESSION['succg'] = 'SUKSES ! Data Berhasil di Hapus';
			header("Location: ./admin.php?page=kpts");
			die();
		}}

        if(isset($_REQUEST['act'])){
            $act = $_REQUEST['act'];
            switch ($act) {
                case 'add':
                    include "tambah_kpts.php";
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
                                            <li class="waves-effect waves-light hide-on-small-only"><a href="?page=kpts" class="judul"><i class="fa fa-gavel"></i> Surat Keputusan</a></li>
                                            <li class="waves-effect waves-light">
											<?php if($_SESSION['admin']==1){echo'
											<a href="?page=kpts&act=add"><i class="material-icons md-24">add_circle</i> Tambah Data</a>';}?>
											
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col m5 hide-on-med-and-down" style="background-color:#39424c"> 
                                        <form method="post" action="?page=kpts">
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
                                <p class="description">Hasil pencarian untuk kata kunci <strong>"'.stripslashes($cari).'"</strong><span class="right"><a href="?page=kpts"><i class="material-icons md-36" style="color: #333;">clear</i></a></span></p>
                                </div>
                            </div>
                        </div>

                        <div class="col m12" id="colres">
                            <table class="bordered" id="tblr">
                                <thead class="blue lighten-4"style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" id="head"  >
                                     <tr>
										<th width="1%"style="color:#fff">Nomor</th>
                                        <th width="25%"style="color:#fff">Perihal</th>
                                        <th width="15%"style="color:#fff">File</th>
										<th width="20%"style="color:#fff">Tanggal Surat</th>
										<th width="20%" style="color:#fff">Tanggal Berlaku</th>
										<th width="15%"style="color:#fff">Tindakan</th>
                                </thead>

                                <tbody>
                                    <tr>';

                                //script untuk mencari data
								$query = mysqli_query($config, "SELECT * FROM tbl_kpts WHERE nama LIKE '%$cari%'ORDER by id DESC");
							
								 
                                if(mysqli_num_rows($query) > 0){
                                    $no = 1;
                                    while($row = mysqli_fetch_array($query)){
										
                                      echo '
                                        <td style="text-align:center">'.$no++.'</td>
										<td style="text-align:center">'.$row['nama'].'</td>
										<td style="text-align:center"><strong>File :</strong>';
										if(!empty($row['file'])){
                                            echo '<strong><a href="./upload/KPTS/'.$row['file'].'">&nbsp'.$row['file'].'</a></strong>';
                                        } else {
                                            echo '<i>Tidak ada file yang di upload</i>';
                                        } echo '</td>';
                                        
										
                                      

                                        $y = substr($row['tgl_surat'],0,4);
                                        $m = substr($row['tgl_surat'],5,2);
                                        $d = substr($row['tgl_surat'],8,2);
								if($m=="" || $m ==0){$nm="";}
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
									
										
                                        echo '<td style="text-align:center">'.$d." ".$nm." ".$y.'</td>';
										
										$ys = substr($row['tgl_berlaku'],0,4);
                                        $ms = substr($row['tgl_berlaku'],5,2);
                                        $ds = substr($row['tgl_berlaku'],8,2);
										if($ms=="" || $ms ==0){$nms="";}
										if($ms == "01"){
                                            $nms = "Januari";
                                        } elseif($ms == "02"){
                                            $nms = "Februari";
                                        } elseif($ms == "03"){
                                            $nms = "Maret";
                                        } elseif($ms == "04"){
                                            $nms = "April";
                                        } elseif($ms == "05"){
                                            $nms = "Mei";
                                        } elseif($ms == "06"){
                                            $nms = "Juni";
                                        } elseif($ms == "07"){
                                            $nms = "Juli";
                                        } elseif($ms == "08"){
                                            $nms = "Agustus";
                                        } elseif($ms == "09"){
                                            $nms = "September";
                                        } elseif($ms == "10"){
                                            $nms = "Oktober";
                                        } elseif($ms == "11"){
                                            $nms = "November";
                                        } elseif($ms == "12"){
                                            $nms = "Desember";
                                        }
										
										echo '<td style="text-align:center">'.$ds." ".$nms." ".$ys.'</td>';
										  
								
                                        
									
											
                                        
                                               
                                          echo'<td style="text-align:center">';
										  
													
										if($_SESSION['admin']==1){
										  echo'
										  <form method="POST">
										<button type="submit" name="submitd'.$row['id'].'" class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Presensi"  onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
										<i class="material-icons">delete</i> DEL</button></td>
										</form>';}
										else {
											echo '<button class="btn small blue-grey waves-effect waves-light"><i class="material-icons">error</i> No Action</button></td>';}
											
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
                                        <th width="25%"style="color:#fff">Perihal</th>
                                        <th width="15%"style="color:#fff">File</th>
										<th width="20%"style="color:#fff">Tanggal Surat</th>
										<th width="20%" style="color:#fff">Tanggal Berlaku</th>
										<th width="15%"style="color:#fff">Tindakan</th>
									
                                </tr>
                            </thead>

                            <tbody>
                                <tr>';

                            //script untuk mencari data
							
							$query = mysqli_query($config, "SELECT * FROM tbl_kpts ORDER by id DESC");
							
								 
                                if(mysqli_num_rows($query) > 0){
                                    $no = 1;
                                    while($row = mysqli_fetch_array($query)){
										
                                      echo '
                                        <td style="text-align:center">'.$no++.'</td>
										<td style="text-align:center">'.$row['nama'].'</td>
										<td style="text-align:center"><strong>File :</strong>';
										if(!empty($row['file'])){
                                            echo '<strong><a href="./upload/KPTS/'.$row['file'].'">&nbsp'.$row['file'].'</a></strong>';
                                        } else {
                                            echo '<i>Tidak ada file yang di upload</i>';
                                        } echo '</td>';
                                        
										
                                      

                                        $y = substr($row['tgl_surat'],0,4);
                                        $m = substr($row['tgl_surat'],5,2);
                                        $d = substr($row['tgl_surat'],8,2);
								if($m=="" || $m ==0){$nm="";}
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
									
										
                                        echo '<td style="text-align:center">'.$d." ".$nm." ".$y.'</td>';
										
										$ys = substr($row['tgl_berlaku'],0,4);
                                        $ms = substr($row['tgl_berlaku'],5,2);
                                        $ds = substr($row['tgl_berlaku'],8,2);
										if($ms=="" || $ms ==0){$nms="";}
										if($ms == "01"){
                                            $nms = "Januari";
                                        } elseif($ms == "02"){
                                            $nms = "Februari";
                                        } elseif($ms == "03"){
                                            $nms = "Maret";
                                        } elseif($ms == "04"){
                                            $nms = "April";
                                        } elseif($ms == "05"){
                                            $nms = "Mei";
                                        } elseif($ms == "06"){
                                            $nms = "Juni";
                                        } elseif($ms == "07"){
                                            $nms = "Juli";
                                        } elseif($ms == "08"){
                                            $nms = "Agustus";
                                        } elseif($ms == "09"){
                                            $nms = "September";
                                        } elseif($ms == "10"){
                                            $nms = "Oktober";
                                        } elseif($ms == "11"){
                                            $nms = "November";
                                        } elseif($ms == "12"){
                                            $nms = "Desember";
                                        }
										
										echo '<td style="text-align:center">'.$ds." ".$nms." ".$ys.'</td>';
										  
								
                                        
									
											
                                        
                                               
                                          echo'<td style="text-align:center">';
										  
													
										if($_SESSION['admin']==1){
										  echo'
										  <form method="POST">
										<button type="submit" name="submitd'.$row['id'].'" class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Klik untuk menghapus Presensi"  onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
										<i class="material-icons">delete</i> DEL</button></td>
										</form>';}
										else {
											echo '<button class="btn small blue-grey waves-effect waves-light"><i class="material-icons">error</i> No Action</button></td>';}
											
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
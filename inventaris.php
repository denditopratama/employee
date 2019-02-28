<?php
	?>
<style>
.td{
	text-align:center!important;
}
.td ,th{
	text-align:center;
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
        max-width:180%;
    height:auto;
    }} 

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {.stok{
        max-width:210%;
    height:auto;
    }} 

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {.stok{
        max-width:110%;
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
    //cek session
    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {

        $namps=mysqli_query($config,"SELECT MAX(id_invent) as maksimalkpts FROM tbl_inventaris");
		$datay=mysqli_fetch_array($namps);
		$makskpts= $datay['maksimalkpts'];
		
		for($i=1;$i<=$makskpts;$i++){
		if(isset($_POST['submitd'.$i.''])){
            $bx=mysqli_query($config,"SELECT foto FROM tbl_inventaris WHERE id_invent='$i'");
            list($fotang)=mysqli_fetch_array($bx);
       
            $files='./upload/inventaris/'.$fotang.'';
            unlink($files);
            
            
            $piceun=mysqli_query($config,"DELETE FROM tbl_inventaris WHERE id_invent='$i'");
			$_SESSION['succg'] = 'SUKSES ! Data Berhasil di Hapus';
            header("Location: ./admin.php?page=inve");
			die();
		}}

        if(isset($_REQUEST['act'])){
            $act = $_REQUEST['act'];
            switch ($act) {
                case 'add':
                    include "tambah_barang.php";
                    break;
                 case 'edit':
                    include "edit_barang.php";
                    break;
                case 'cetak':
                    include "qr_code.php";
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
                                            <li class="waves-effect waves-light hide-on-small-only"><a href="?page=inve" class="judul"><i class="fa fa-desktop"></i> Inventarisasi</a></li>
                                            <li class="waves-effect waves-light">
											<?php if($_SESSION['admin']==1){echo'
											<a href="?page=inve&act=add"><i class="material-icons md-24">add_circle</i> Tambah Barang</a>';}?>
											
                                         
                                        </ul>
                                    </div>
                                    <div class="col m5 hide-on-med-and-down" style="background-color:#39424c"> 
                                        <form method="post" action="?page=inve">
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
							
                <!-- Row form Start -->
                <div class="row">
                    <div style="text-align:center" class="col s12 m12">
                    <a href="scan.php" class="btn small blue">SCAN QR CODE</a>
                    </div>
                </div>
                <div class="row jarak-form">
                
                <div class="col m12" id="colres">
                            <table class="bordered" id="tblr">
                                <thead class="blue lighten-4" id="head"  >
                                     <tr>
										<th width="1%"style="color:#fff">No.</th>
                                        <th width="25%"style="color:#fff">Foto</th>
                                        <th width="20%" style="color:#fff">Jenis</th>
                                        <th width="15%"style="color:#fff">Merk Barang<br><hr>Tipe</th>
                                        <th width="10%" style="color:#fff">Nomor Seri</th>
                                        <th width="10%" style="color:#fff">Lokasi Unit</th>
                                        <th width="10%" style="color:#fff">Tanggal Invent</th>
                                        <th width="10%" style="color:#fff">PIC</th>
										<th width="15%"style="color:#fff">Tindakan</th>
                                </thead>
                <?php
                   
                                if(isset($_REQUEST['submit'])){
                                    $cari = mysqli_real_escape_string($config, $_REQUEST['cari']);
                                        echo '
                                        <div class="col s12" style="margin-top: -18px;">
                                            <div class="card yellow darken">
                                                <div class="card-content">
                                                <p class="description">Hasil pencarian untuk kata kunci <strong>"'.stripslashes($cari).'"</strong><span class="right"><a href="?page=inve"><i class="material-icons md-36" style="color: #333;">clear</i></a></span></p>
                                                </div>
                                            </div>
                                        </div>
                                <tbody>
                                    <tr>';

                                //script untuk mencari data
                                $query = mysqli_query($config, "SELECT * FROM tbl_inventaris WHERE nama_barang LIKE '%$cari%' OR tipe_barang LIKE '%$cari%' OR no_seri LIKE '%$cari%' ORDER by id_invent DESC");
                                } else {
                                    $query = mysqli_query($config, "SELECT * FROM tbl_inventaris ORDER by id_invent DESC");      
                                }
							
								 
                                if(mysqli_num_rows($query) > 0){
                                    $no = 1;
                                    while($row = mysqli_fetch_array($query)){
										
                                      echo '
                                        <td style="text-align:center">'.$no++.'</td>';
                                        if($row['foto']==''){
                                            echo ' <td style="text-align:center"><img class="stok" src="upload/inventaris/default.png"></td> ';
                                        } else {
                                            echo ' <td style="text-align:center"><img class="stok" src="upload/inventaris/'.$row['foto'].'"></td> ';
                                        }
                                       
                                        $jn=mysqli_query($config,"SELECT jenis_barang FROM tbl_ref_jenis_barangs WHERE id='".$row['kode_jenis_barang']."' ");
                                        list($jenis)=mysqli_fetch_array($jn);
                                        echo ' <td style="text-align:center">'.$jenis.'</td> ';
                                        echo ' <td style="text-align:center">'.$row['nama_barang'].'<hr>'.$row['tipe_barang'].'</td> ';
                                       


                                        $y = substr($row['tanggal_invent'],0,4);
                                        $m = substr($row['tanggal_invent'],5,2);
                                        $d = substr($row['tanggal_invent'],8,2);
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
									
                                        echo ' <td style="text-align:center">'.$row['no_seri'].'</td> ';
                                        $akhir=mysqli_query($config,"SELECT sub_unit FROM tbl_sub_unit WHERE id='".$row['KD_UNIT']."' ");
                                        list($nmbxs)=mysqli_fetch_array($akhir);
                                        echo ' <td style="text-align:center">'.$nmbxs.'</td> ';
                                        echo '<td style="text-align:center">'.$d." ".$nm." ".$y.'</td>';
                                        $akhi=mysqli_query($config,"SELECT nama FROM tbl_user WHERE id_user='".$row['pj']."' ");
                                        list($nmbx)=mysqli_fetch_array($akhi);
                                        echo ' <td style="text-align:center"><b>'.$nmbx.'</b></td> ';
										
                                          echo'<td style="text-align:center">';
										  
													
										if($_SESSION['admin']==1){
										  echo'
										  <form method="POST">
										<button type="submit" name="submitd'.$row['id_invent'].'" class="btn small deep-orange waves-effect waves-light tooltipped" data-position="left" data-tooltip="Klik untuk menghapus barang"  onclick="return confirm(\'Anda yakin ingin menghapus data?\');">
										<i class="material-icons">delete</i> DEL</button>
                                        </form>
                                        <a class="btn small deep-blue waves-effect waves-light tooltipped" data-position="left" data-tooltip="Klik untuk mengedit data" href="?page=inve&act=edit&id='.base64_encode($row['id_invent']).'"><i class="material-icons">edit</i> EDIT</a>
                                        <a class="btn small grey waves-effect waves-light tooltipped" data-position="left" data-tooltip="Klik untuk mencetak QR Code" href="qr_code.php?id='.base64_encode($row['id_invent']).'"><i class="material-icons">edit</i> CETAK</a>';}
										else {
											echo '<button class="btn small blue-grey waves-effect waves-light"><i class="material-icons">error</i> No Action</button></td>';}
											
                                         echo '
                                         </td>
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
        }
		
}
?>
<script type="text/javascript" src="asset/js/halaman.js"></script>
<script>
$(document).ready(function(){
    $('#buttons').click(function(){
        $("th").css("background-color","#39424c");
    });
    $("th").css("background-color","#39424c");
});

</script>
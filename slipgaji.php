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
                                            <li class="waves-effect waves-light"><a href="?page=slip" class="judul"><i class="material-icons">attach_money</i> Slip Gaji</a></li>
                                            
                                        </ul>
                                    </div>
                                    <div class="col m5 hide-on-med-and-down" style="background-color:#39424c"> 
                                        <form method="post" action="?page=slip">
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
                <div class="row jarak-form">

                <?php
                  
                    $id_user=mysqli_real_escape_string($config,$_SESSION['id_user']);
                      

							
							if(isset($_REQUEST['submit'])){
										$cari = mysqli_real_escape_string($config, $_REQUEST['cari']);
										echo '
                        <div class="col s12" style="margin-top: -18px;">
                            <div class="card yellow darken">
                                <div class="card-content">
                                <p class="description">Hasil pencarian untuk kata kunci <strong>"'.stripslashes($cari).'"</strong><span class="right"><a href="?page=slip"><i class="material-icons md-36" style="color: #333;">clear</i></a></span></p>
                                </div>
                            </div>
                        </div>
							';
										if($cari=='januari'){
											$cari=01;
										} else if($cari=='februari'){
											$cari=02;
										} else if($cari=='maret'){
											$cari=03;
										} else if($cari=='april'){
											$cari=04;
										} else if($cari=='mei'){
											$cari=05;
										} else if($cari=='juni'){
											$cari=06;
										} else if($cari=='juli'){
											$cari=07;
										} else if($cari=='agustus'){
											$cari=08;
										} else if($cari=='september'){
											$cari=09;
										} else if($cari=='oktober'){
											$cari=10;
										} else if($cari=='november'){
											$cari=11;
										} else if($cari=='desember'){
											$cari=12;
										}
										
										$query=mysqli_query($config,"SELECT * FROM tbl_bulan_gaji WHERE MONTH(bulan) LIKE '%$cari%' OR YEAR(bulan) LIKE '%$cari%' ORDER by id DESC");
										
									  
									}
									else {
									$query = mysqli_query($config, "SELECT * FROM tbl_bulan_gaji ORDER by id DESC");}
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
										
										if($row['status']==0){
											echo '<td style="text-align:center"><a class="btn small red waves-effect waves-light tooltipped"data-position="left" data-tooltip="Gaji belum selesai di proses">
                                                    <i class="material-icons">highlight_off</i> BELUM SELESAI</a></td>';
										} else {
											echo '<td style="text-align:center"><a class="btn small green waves-effect waves-light tooltipped"data-position="left" data-tooltip="Gaji sudah selesai di proses">
                                                    <i class="material-icons">highlight_off</i> SUDAH SELESAI</a></td>';
										}
										
                                          echo'<td style="text-align:center">';
										  
										  echo'
										  <form method="POST" action="printslipgaji.php">
										  <input type="hidden" value="'.$row['id'].'" name="zero">
										  <input type="hidden" value="'.$_SESSION['id_user'].'" name="zeros">
										  <button name="buttong" type="submit"  class="btn small orange darken-3 waves-effect waves-light tooltipped" data-position="left" data-tooltip="Klik Untuk Memproses Gaji">
                                                    <i class="material-icons">print</i> CETAK</button>
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

?>
<script type="text/javascript" src="asset/js/halamanuser.js"></script>
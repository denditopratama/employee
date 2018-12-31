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
<link rel="stylesheet" type="text/css" href="asset/css/jquery.dataTables.css">
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
            $piceunsz=mysqli_query($config,"DELETE FROM tbl_presensi_karyawan WHERE id_presensi='$i'");
            $piceunszs=mysqli_query($config,"DELETE FROM tbl_status_keterangan_presensi WHERE id_presensi='$i'");
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
            if(isset($_POST['simpanket'])){
                $ti=count($_POST['keter']);
                for($i=0;$i<$ti;$i++){
                    $bzx = mysqli_real_escape_string($config,$_POST['keter'][$i]);
                    $kts= mysqli_real_escape_string($config,$_POST['aid'][$i]);
                    $naif = mysqli_real_escape_string($config,$_POST['naip'][$i]);
                    if(!empty($_POST['jmmsk']) || !empty($_POST['jmplg'])){
                        $jamplg=mysqli_real_escape_string($config,$_POST['jamplg'][$i]);
                        $jammsk=mysqli_real_escape_string($config,$_POST['jammsk'][$i]);
                        $c=mysqli_query($config,"UPDATE tbl_presensi_karyawan SET keterangan='".$bzx."',jam_masuk='".$jammsk."',jam_pulang='".$jamplg."' WHERE nik='".$naif."' AND(id_presensi='".$_POST['idpres']."' AND id='$kts')");
                    } else {
                        $c=mysqli_query($config,"UPDATE tbl_presensi_karyawan SET keterangan='".$bzx."' WHERE nik='".$naif."' AND(id_presensi='".$_POST['idpres']."' AND id='$kts')");
                    }

                    

                }
                $_SESSION['succg']='Keterangan telah disimpan';
                header("Location: ./admin.php?page=pres");
                die();
            }
           
            $tokent = bin2hex(mt_rand(0,9999));
            $_SESSION['tokent']=$tokent;

            //pagging
            $limit = 15;
            $pg = mysqli_real_escape_string($config,@$_GET['pg']);
                if(empty($pg)){
                    $curr = 0;
                    $pg = 1;
                } else {
                    $curr = ($pg - 1) * $limit;
                }
                $divisi=mysqli_real_escape_string($config,$_SESSION['divisi']);
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
                                    <div class="col s12" style="text-align:center">
									<p class="kata">Untuk Presensi Pekerjaan Proyek silahkan Download Template presensi Kosong <strong><br><a class="btn small" id="ganteng" style="color:white"><i style="font-size:20px;margin-top:-3px" class="material-icons md-36">file_download</i> Klik Disini</a></strong></p>
									<p class="kata"> Lalu kirimkan ke admin SDM. <strong><br><a class="btn small" href="?page=tsk&act=add" style="color:white"><i style="font-size:20px;margin-top:-3px" class="material-icons md-36">file_upload</i> Klik Disini</a></strong></p>
                                    </div>
									<p><span class="red-text">*</span> (Khusus Karyawan Proyek), jika ingin mengajukan lembur, silahkan mengirimkan presensi terlebih dahulu, lalu klik lembur pada presensi terkait yang telah di tambahkan oleh admin pada tabel di bawah ini</p>

                                  
									
									
                                </div>
								</div>
								</div>
                <!-- Row form Start -->
                <div class="row jarak-form">

                <?php
                   

                        echo '
                        <div class="col m12" id="colres">
                        <table class="bordered" id="tblr">
                            <thead class="blue lighten-4" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" id="head">
                                 <tr>
									<th width="1%"style="color:#fff">Nomor</th>
                                        <th width="25%"style="color:#fff">Presensi</th>
                                        <th width="15%"style="color:#fff">Bulan</th>
										<th width="20%" style="color:#fff">Tindakan</th>
									
                                </tr>
                            </thead>

                            <tbody>
                                <tr>';

                       
                                if(isset($_REQUEST['submit'])){
                                    $cari = mysqli_real_escape_string($config, $_REQUEST['cari']);
                                        echo '
                                        <div class="col s12" style="margin-top: -18px;">
                                            <div class="card yellow darken">
                                                <div class="card-content">
                                                <p class="description">Hasil pencarian untuk kata kunci <strong>"'.stripslashes($cari).'"</strong><span class="right"><a href="?page=pres"><i class="material-icons md-36" style="color: #333;">clear</i></a></span></p>
                                                </div>
                                            </div>
                                        </div>';
                
                                                //script untuk mencari data
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
                                               
                                            $query = mysqli_query($config, "SELECT * FROM tbl_presensi WHERE bulan LIKE '%$cari%' ORDER by id DESC");
                                               
                                    } else {
							
							$query = mysqli_query($config, "SELECT * FROM tbl_presensi ORDER by id DESC LIMIT $curr, $limit");}
							
								 
                                if(mysqli_num_rows($query) > 0){
                                    $no = 1;
                                    while($row = mysqli_fetch_array($query)){
										
                                      echo '
                                        <td style="text-align:center">'.$no++.'</td>
										<td style="text-align:center"><button id="tot'.$row['id'].'" class="btn green">LIHAT</button>';
										 echo '</td>';
                                        
										
                                      

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
										
										
                                          echo '
                                          <script>
                                          $(document).ready(function(){
                                          $(\'#tot'.$row['id'].'\').click(function(){
                                              var token = '.$tokent.';
                                              var yow = 1;
                                              $.post(\'./js/ajaxpresensi.php\', {id : '.$row['id'].', token : token, yow : yow}, function(data){
                                                  $("#anjas").html(data);
                                              });
                                          $(\'#modalsz\').openModal();
                                          });
                                          $("#ganteng").click(function(){
                                            $(\'#moday\').openModal();
                                          });
                                          });
                                          </script>';
								
                                      
									
											
                                        
                                               
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
                        </div>';
						
						
						if($_SESSION['admin']==1){
		$query = mysqli_query($config, "SELECT * FROM tbl_presensi");}
		else {
		$query = mysqli_query($config, "SELECT * FROM tbl_presensi WHERE divisi='$divisi'");	
		}
                    $cdata = mysqli_num_rows($query);
                    $cpg = ceil($cdata/$limit);

                    echo '<br/>
					<div class="col m12">
                          <ul class="pagination">';

                    if($cdata > $limit ){
							
                        //first and previous pagging
                        if($pg > 1){
                            $prev = $pg - 1;
                            echo '<li><a href="?page=pres&pg=1"><i class="material-icons md-48">first_page</i></a></li>
                                  <li><a href="?page=pres&pg='.$prev.'"><i class="material-icons md-48">chevron_left</i></a></li>';
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
												</div>';
							
                            

                        //last and next pagging
                        if($pg < $cpg){
                            $next = $pg + 1;
                            echo '<li><a href="?page=pres&pg='.$next.'"><i class="material-icons md-48">chevron_right</i></a></li>
                                  <li><a href="?page=pres&pg='.$cpg.'"><i class="material-icons md-48">last_page</i></a></li>';
                        } else {
                            echo '<li class="disabled"><a href=""><i class="material-icons md-48">chevron_right</i></a></li>
                                  <li class="disabled"><a href=""><i class="material-icons md-48">last_page</i></a></li>';
                        }
                        echo '
					</ul>
					</div>'; }
					else {
                    echo '';
                } echo'
						
                    </div>
					
                    <!-- Row form END -->';

                   
            
						
						
						
						echo'
                    </div>
                    <!-- Row form END -->';
				
                   
            }

        }
		
        echo '<div id="modalsz" class="modal" style="width:80%">
        
        <div class="modal-content" id="anjas">
        
        </div>
      
        </div>

        <div id="moday" class="modal" style="width:90%">
        
        <div class="modal-content" style="background-color:rgb(68,68,68)" id="modays">

        <div class="row">
        <div class="col m6 s6"> 
        <img src="asset/img/aturanpres.png" style="width:100%">
        </div>
        <div class="col m6 s6" style="text-align:center">
        <p class="white-text" style="text-align:left">
        Sebelum anda mengisi presensi anda pada file excel yang telah tersedia,
        mohon perhatikan Beberapa hal berikut :<br><br><br>
        1. Silahkan mengganti kolom NIK dan Nama dengan NIK dan Nama anda masing - masing.<br><br>
        2. Baris tanggal mengikuti tanggal bulan presensi, jika baris tanggal kurang, silahkan tambahkan baris (contoh : bulan november 30 baris, sedangkan desember 31 baris, maka tambahkan 1 baris).<br><br>
        3. Anda <b style="color:red">Tidak Diperbolehkan</b> mengubah kolom terlambat (kolom yang berwarna kuning), mengganti rumus yang telah ada, mengganti format tabel seperti pada gambar disamping yang dilingkari lingkaran merah, mengubah format file selain <b>.xls</b>.<br><br>
        4. Jika anda bermasalah saat membuka / mengedit file, coba untuk klik kanan file -> Properties -> Centang di tulisan unblock -> lalu klik ok -> buka file -> klik enable editing.
        <br><br>
        5. File presensi yang dikirim adalah per <b>Unit Kerja</b>, harap merekap presensi dalam 1 file dan dikirim dengan perihal presensi per unit kerja. (Contoh : terdapat 10 karyawan di unit kerja <b>Rest area ruas solo - ngawi</b>
        maka gabungkan 10 orang dalam 1 file dan kirim dengan perihal "Presensi Unit Kerja Rest Area Solo Ngawi Bulan Desember 2018")<br><br>
        6. Klik Download untuk mengunduh file.</p><br>
        <a class="btn small" href="./asset/template_presensi.xls" style="color:white"><i style="font-size:20px;margin-top:-3px" class="material-icons md-36">file_download</i> Download</a>
        </div>
        
        </div>
      </div>

        </div>
        ';       

?>
<script>
$(document).ready(function(){
$('#halaman').change(function(){
	var x = $(this).val();
	window.location.href='admin.php?page=pres&pg='+ x;
		});
	
	});	
</script>
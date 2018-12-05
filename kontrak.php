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

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">

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
                    include "tambah_kontrak.php";
                    break;
                case 'edit':
                    include "edit_surat_keluar.php";
                    break;
                case 'del':
                    include "hapus_surat_keluar.php";
                    break;
				
            }
        } else {

  

            //pagging
			$limit = 10;
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
					$query = mysqli_query($configtm, "SELECT perjanjian.*, tbl_customer.nama, tbl_customer.namab

                    from perjanjian 

                    left join tbl_customer on perjanjian.customer=tbl_customer.id ORDER by id DESC LIMIT $curr, $limit");
					
					$cdata = mysqli_num_rows($query);}
								       
								
						
                        echo '
                        <div class="col m12">
                        <table id="datatables" >
                            <thead>
                                 <tr>
								    	<th>No.</th>
                                        <th>Nomor Kontrak</th>
                                        <th width="12%"style="color:#fff">Tenant</th>
										<th width="12%"style="color:#fff">Tanggal Awal</th>
										<th width="12%"style="color:#fff">Tanggal Akhir</th>
                                        <th width="10%" style="color:#fff">Unit</th>
										<th width="15%" style="color:#fff">Status Aktif</th>
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
                                        <td>'.$no++.'</td>
										<td style="text-align:center">'.$row['noperj'].'</td>
                                        <td style="text-align:center">'.$row['nama'].'</td>
										<td style="text-align:center">'.date('d',strtotime($row['sdate'])).' '.date('M',strtotime($row['sdate'])).' '.date('Y',strtotime($row['sdate'])).'</td>
										<td style="text-align:center">'.date('d',strtotime($row['edate'])).' '.date('M',strtotime($row['edate'])).' '.date('Y',strtotime($row['edate'])).'</td>';
                                        echo '<td style="text-align:center"></td><td style="text-align:center">
										';
										
									echo'
                                 	<a class="btn small light-green waves-effect waves-light tooltipped"  data-position="left" data-tooltip="Surat Belum Di Approve Oleh Admin">
                                    <i class="material-icons">done</i> APPROVED</a>';
									
									echo'</td><td style="text-align:center">';
                                        
									
										
                                       
                                       
											
                                          echo '
										  
										  
												<a class="btn small light-blue waves-effect waves-light tooltipped" data-position="left" data-tooltip="Pilih EDIT untuk merubah surat" href="?page=kontrak&act=edit">
                                                    <i class="material-icons">edit</i> EDIT</a>
                                               
                                               
                                                <a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Pilih Delete untuk menghapus surat" href="?page=kontrak&act=del">
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

				
                    echo '<table id="datatable">
                    <thead>
                    <tr>
                    <th>anj</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr><td>1</td></tr>
                    <tr><td>2</td></tr>
                    </tbody>
                    </table>';
					
                    
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
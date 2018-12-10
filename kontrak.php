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
                
				
            }
        } else {

  

            //pagging
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
                                            <li class="waves-effect waves-light hide-on-small-only"><a style="font-size:24px!important" href="?page=kontrak" class="judul"><i class="material-icons" style="line-height:60px">chrome_reader_mode</i> Kontrak</a></li>
                                            <li class="waves-effect waves-light">
                                                <a href="?page=kontrak&act=add"><i class="material-icons md-24">add_circle</i> Tambah Data</a>
                                            </li>
                                        </ul>
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
                    
						
					$query = mysqli_query($configtm, "SELECT perjanjian.*, tbl_customer.nama, tbl_customer.namab

                    from perjanjian 

                    left join tbl_customer on perjanjian.customer=tbl_customer.id ORDER by id DESC");
					
					$cdata = mysqli_num_rows($query);
								       
								
						
                        echo '
                        <div class="col m12" id="colres">
                        <table id="datatable" >
                            <thead>
                                 <tr>
								    	<th>No.</th>
                                        <th>Nomor Kontrak</th>
                                        <th>Tenant</th>
										<th>Tanggal Awal</th>
										<th>Tanggal Akhir</th>
                                        <th>Unit</th>
										<th>Status Aktif</th>
										<th>Tindakan</th>

                                        

                                </tr>
                            </thead>

                            <tbody>
                                <tr>';

                          
							
							
                                if(mysqli_num_rows($query) > 0){
                                    $no = 1;
                                    while($row = mysqli_fetch_array($query)){
										
                                      echo '
                                        <td>'.$no++.'</td>
										<td style="text-align:center">'.$row['noperj'].'</td>
                                        <td style="text-align:center">'.$row['nama'].'</td>
										<td style="text-align:center">'.date('d',strtotime($row['sdate'])).' '.date('M',strtotime($row['sdate'])).' '.date('Y',strtotime($row['sdate'])).'</td>
										<td style="text-align:center">'.date('d',strtotime($row['edate'])).' '.date('M',strtotime($row['edate'])).' '.date('Y',strtotime($row['edate'])).'</td>
                                       <td style="text-align:center"></td>
										
										
                                  
                                    <td style="text-align:center">
                                 	<a class="btn small orange waves-effect waves-light tooltipped"  data-position="left" data-tooltip="Klik untuk cetak kontrak">
                                    <i class="material-icons">print</i> CETAK</a></td>
									
									<td style="text-align:center">
                                        
											
                                       
										  
										  
												<a class="btn small light-blue waves-effect waves-light tooltipped" data-position="left" data-tooltip="Pilih EDIT untuk merubah surat" href="?page=kontrak&act=edit">
                                                    <i class="material-icons">edit</i> EDIT</a>
                                               
                                               
                                                <a class="btn small deep-orange waves-effect waves-light tooltipped"data-position="left" data-tooltip="Pilih Delete untuk menghapus surat" href="?page=kontrak&act=del">
                                                    <i class="material-icons">delete</i> DEL</a>
                                    
                                        </td>
                                    </tr>
                                ';
                                }
                            } else {
                                echo '<tr><td colspan="8"><center><p class="add">Tidak ada data untuk ditampilkan. <u><a href="?page=kontrak&act=add">Tambah data baru</a></u> </p></center></td></tr>';
								}
                            echo '</tbody></table>
                        </div>
                    </div>';
					
                 
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
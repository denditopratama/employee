<?php
   if(empty($_SESSION['admin'])){
	echo '<script language="javascript">
			window.alert("ERROR! Anda tidak memiliki hak akses untuk melihat data ini");
			window.location.href="./admin.php?page=pres";
		  </script>';
} else { ?>
<style>
.td{
	text-align:center!important;
}
.td ,th{
	text-align:center;
}

</style>
<?php
	$id=mysqli_real_escape_string($config,$_REQUEST['id']);

    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    }

	else {
		

        if(isset($_REQUEST['sub'])){
            $sub = $_REQUEST['sub'];
            switch ($sub) {
                
                case 'del':
                    include "hapus_lembur.php";
                    break;
				case 'manager':
                    include "lembur_manager.php";
                    break;
				
            }
        } else {
			
			
				$id=mysqli_real_escape_string($config,$_REQUEST['id']);
				
				if(isset($_POST['accept'])){
					if($_SESSION['admin']==4){
					$itj=mysqli_query($config,"UPDATE tbl_lembur SET status_gm=1 WHERE id_presensi='$id' AND divisi='".$_SESSION['divisi']."'");}
					else if($_SESSION['admin']==1){
					$itj=mysqli_query($config,"UPDATE tbl_lembur SET status_gm=1,status_manager=1 WHERE id_presensi='$id'");
					}
				}
				
				
				if(isset($_POST['tambahlembur'])){
				$tanggallembur=mysqli_real_escape_string($config,$_REQUEST['tanggallembur']);
				$deskripsi=mysqli_real_escape_string($config,$_REQUEST['deskripsi']);
				$jamawal=mysqli_real_escape_string($config,$_REQUEST['jamawal']);
				$menitawal=mysqli_real_escape_string($config,$_REQUEST['menitawal']);
				$jamakhir=mysqli_real_escape_string($config,$_REQUEST['jamakhir']);
				$menitakhir=mysqli_real_escape_string($config,$_REQUEST['menitakhir']);
                
                if($_SESSION['admin']==4){
                    $tambahlembur=mysqli_query($config,"INSERT INTO tbl_lembur (id_presensi,id_user,tanggal,pekerjaan,jam_awal,jam_akhir,status_manager,status_gm,divisi) VALUES('$id','".$_SESSION['id_user']."','$tanggallembur','$deskripsi','$jamawal.$menitawal','$jamakhir.$menitakhir',1,1,'".$_SESSION['divisi']."')");   
                } else if($_SESSION['admin']==5){
                $tambahlembur=mysqli_query($config,"INSERT INTO tbl_lembur (id_presensi,id_user,tanggal,pekerjaan,jam_awal,jam_akhir,status_manager,divisi) VALUES('$id','".$_SESSION['id_user']."','$tanggallembur','$deskripsi','$jamawal.$menitawal','$jamakhir.$menitakhir',1,'".$_SESSION['divisi']."')");}
                else {
                    $tambahlembur=mysqli_query($config,"INSERT INTO tbl_lembur (id_presensi,id_user,tanggal,pekerjaan,jam_awal,jam_akhir,divisi) VALUES('$id','".$_SESSION['id_user']."','$tanggallembur','$deskripsi','$jamawal.$menitawal','$jamakhir.$menitakhir','".$_SESSION['divisi']."')");}
				$_SESSION['succEdit'] = 'SUKSES! Lembur berhasil diinput';
                                header("Location: ./admin.php?page=lmbr&id=".$id."");
                                die();
				}
            //pagging
            $limit = 99999999;
            $pg = mysqli_real_escape_string($config,@$_GET['pg']);
                if(empty($pg)){
                    $curr = 0;
                    $pg = 1;
                } else {
                    $curr = ($pg - 1) * $limit;
                }

                $id = mysqli_real_escape_string($config,$_REQUEST['id']);

                $query = mysqli_query($config, "SELECT bulan FROM tbl_presensi WHERE id='$id'");
				list($bulan)=mysqli_fetch_array($query);
				$bulans=date('M Y',strtotime($bulan));
                $bunkon=date('m',strtotime($bulan));
                $tankon=date('Y',strtotime($bulan));

                 

                      echo '<!-- Row Start -->
                            <div class="row">
                                <!-- Secondary Nav START -->
                                <div class="col s12">
                                    <div class="z-depth-1">
                                        <nav class="secondary-nav">
                                            <div class="nav-wrapper blue-grey darken-5" style="background-color:#39424c!important">
                                                <div class="col m12">
                                                    <ul class="left">
                                                        <li class="waves-effect waves-light hide-on-small-only"><a href="#" class="judul"><i class="material-icons">alarm_add</i> Lembur</a></li>
                                                        
                                                      
														
                                                        <li class="waves-effect waves-light"><a href="?page=pres">
																						
														
														<i class="material-icons">arrow_back</i> Kembali</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                                <!-- Secondary Nav END -->
                            </div>
                            <!-- Row END -->

                            <!-- Perihal START -->
                            <div class="col s12">
                                <div class="card yellow darken">
                                    <div class="card-content">
                                        <p><p class="description">Lembur Bulan:</p><strong>'.$bulans.'<strong></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Perihal END -->';
							echo'<div class="col m12">
                            <div class="card">
                                <div class="card-content">
                                    <span class="card-title black-text"><i class="material-icons md-36" >note</i> Proses Lembur</span>
                                    <p class="kata">Berikut Beberapa hal yang harus diperhatikan saat mengajukan <strong>LEMBUR</strong></p><br/>

                                    <p><strong>1.</strong> Pekerjaan Lembur Adalah Pekerjaan yang Tidak dapat di tunda dan Harus di selesaikan pada saat ini yang apabila tidak diselesaikan akan mengalami kerugian bagi Perusahaan atau dapat Menganggu Kelancaran</p>
									<p><strong>2.</strong> Pekerjaan yang diperintahkan secara<span class="red-text"> <strong>Mendadak</strong></span>.</p>
									<p><strong>3.</strong> Apabila tidak ada persetujuan dari <strong>General Manager</strong> atau <strong>Manager</strong> terkait, maka pengajuan lembur tidak akan di proses</p>
									
									
                                </div>
								</div>
								</div>';

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
                            }?>
							
							<div class="col m12" id="colres">		
                            <table class="bordered" id="tblp">
                                <thead class="blue lighten-4" id="head" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-bottom:2px solid black">
                                   <tr>
                                               
                                                <th width="15%" rowspan="2">Tanggal Lembur</th>
												<th width="15%" rowspan="2">Deskripsi Pekerjaan</th>
                                                <th width="15%" colspan="6" style="border-bottom:3px solid black">Jam Lembur</th>
												<th width="15%" rowspan="2">Tindakan</th>
                                            </tr>
											<tr>
											 <th width="15%" colspan="3">Awal</th>
                                                <th width="15%" colspan="3">Akhir</th>
											</tr>
										</thead>
										
										<form method="POST">
										<tbody style="background-color:rgba(255,255,0,0.7);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
										
										
										<td style="text-align:center">
										<input id="tgl_suratku" class="datepicker" type="text" name="tanggallembur" style="text-align:center">
										</td>
										
										<td style="text-align:center">
										<input type="text" name="deskripsi" style="text-align:center" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
										</td>
										
                                        <!-- 00 value scrip -->
										<script>
                                        function leadingZeros(input) {
                                        if(!isNaN(input.value) && input.value.length === 1) {
                                            input.value = '0' + input.value;
                                        }
                                        }
                                        </script>
                                        <!--END of  00 value scrip -->
                                                                            
										<td style="text-align:center">
										<input type="number" name="jamawal" style="text-align:center" min="00" max="23"  maxLength="2"  oninput="this.value=this.value.slice(0,this.maxLength)" value="00"
                                         onchange="leadingZeros(this)" onkeyup="leadingZeros(this)" onclick="leadingZeros(this)" required >
										</td>
                                        <td style="text-align:center">
										<a>:</a>
										</td>
										
										
										<td style="text-align:center">
										<input type="number" name="menitawal" style="text-align:center" min="00" max="59" maxLength="2"  oninput="this.value=this.value.slice(0,this.maxLength)" value="00"
                                          onchange="leadingZeros(this)" onkeyup="leadingZeros(this)" onclick="leadingZeros(this)" required>
										</td>
										
										<td style="text-align:center">
							      		<input type="number" name="jamakhir" style="text-align:center" min="00" max="23" maxLength="2" oninput="this.value=this.value.slice(0,this.maxLength)" value="00"
                                         onchange="leadingZeros(this)" onkeyup="leadingZeros(this)" onclick="leadingZeros(this)" required>
										</td>
										<td style="text-align:center">
										<a>:</a>
										</td>
										
										<td style="text-align:center">
										<input type="number" name="menitakhir" style="text-align:center" min="00" max="59" maxLength="2"  oninput="this.value=this.value.slice(0,this.maxLength)" value="00"
                                        onchange="leadingZeros(this)" onkeyup="leadingZeros(this)" onclick="leadingZeros(this)" required>
										</td>
										
										
										
										<td style="text-align:center">
										<button id="tambah" type="submit" name="tambahlembur" class="btn-large" style="text-align:center;">TAMBAH</button>
										</td>
										
										</tbody>
										</form>
										</table>
										</div>
                           <?php 
						   if($_SESSION['admin']==1 || $_SESSION['admin']==4){
						   echo'<div class="col m12" style="text-align:center;margin-top:34px">
                           
                                    <form method="POST">
									<button class="btn small blue waves-effect waves-light tooltipped" name="accept" data-position="left" data-tooltip="Klik untuk Menyetujui" onclick="return confirm(\'Anda yakin ingin menyetujui semua data?\');">
										<i class="material-icons">warning</i> SETUJUI SEMUA DATA</button>
										</form>
									
                                
						   </div>';} ?>
						    <div class="row jarak-form">

<div class="col m12" id="colres">
<small>* Baris berwarna biru merupakan user yang membutuhkan konfirmasi.</small>
    <table class="bordered" id="tblb">
        <thead class="blue lighten-4" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
            <tr>
                <th width="1%">No</th>
                <th width="20%">Nama</th>
                <th width="10%">Tindakan</th>
            </tr>
            
        </thead>

        <tbody>
            <?php
            $tokenlembur = bin2hex(mt_rand(0,9999));
            $_SESSION['tokenlembur']=$tokenlembur;
            $nos=1;
            $ambi=mysqli_query($config,"SELECT sub_unit,unit FROM tbl_user WHERE id_user='".$_SESSION['id_user']."' ");
            list($nyubs,$nyabs)=mysqli_fetch_array($ambi);
         
            if($_SESSION['admin']==1){
                $gk=mysqli_query($config,"SELECT DISTINCT id_user FROM tbl_lembur WHERE id_presensi='$id'");  
            } else if ($_SESSION['admin']==4 || $_SESSION['admin']==3 || $_SESSION['admin']==2 ) {
                $gk=mysqli_query($config,"SELECT DISTINCT id_user FROM tbl_lembur WHERE id_presensi='$id' AND divisi='".$_SESSION['divisi']."'");
            } else if ($_SESSION['admin']==5 && $_SESSION['divisi']!=6) {
                $gk=mysqli_query($config,"SELECT tbl_lembur.*,tbl_user.sub_unit FROM tbl_lembur,tbl_user WHERE tbl_lembur.id_presensi='$id' AND tbl_lembur.id_user=tbl_user.id_user AND (tbl_user.sub_unit='$nyubs' OR tbl_user.unit='$nyabs') GROUP BY tbl_lembur.id_user");
            } else if ($_SESSION['admin']==5 && $_SESSION['divisi']==6) {
                $gk=mysqli_query($config,"SELECT tbl_lembur.*,tbl_user.sub_unit,tbl_user.divisi FROM tbl_lembur,tbl_user WHERE tbl_lembur.id_presensi='$id' AND tbl_lembur.id_user=tbl_user.id_user AND (tbl_user.sub_unit='$nyubs' OR tbl_user.unit='$nyabs' OR tbl_user.divisi='".$_SESSION['divisi']."') GROUP BY tbl_lembur.id_user");
            } else {
                $gk=mysqli_query($config,"SELECT DISTINCT id_user FROM tbl_lembur WHERE id_presensi='$id' AND id_user='".$_SESSION['id_user']."'");
			}
			if(mysqli_num_rows($gk)<=0){
				echo '<tr>
				<td style="text-align:center!important" colspan="3"><h5>Tidak ada data untuk ditampilkan</h5></td>
				</tr>';	
			}
            
            while($row=mysqli_fetch_array($gk)){
                $ku=mysqli_query($config,"SELECT nama FROM tbl_user WHERE id_user='".$row['id_user']."'");
                list($namaz)=mysqli_fetch_array($ku);
             
                if($_SESSION['admin']==4){
                    $momok=mysqli_query($config,"SELECT * FROM tbl_lembur WHERE id_presensi='$id' AND(id_user='".$row['id_user']."' AND (status_gm=0))");
                    if(mysqli_num_rows($momok)>0){
                        echo '<tr style="background-color:rgba(176,224,230,0.5)">';
                    } else {
                        echo '<tr>';
                    }
                } else if($_SESSION['admin']==5){
                    $momok=mysqli_query($config,"SELECT * FROM tbl_lembur WHERE id_presensi='$id' AND(id_user='".$row['id_user']."' AND (status_manager=0))");
                    if(mysqli_num_rows($momok)>0){
                        echo '<tr style="background-color:rgba(176,224,230,0.5)">';
                    } else {
                        echo '<tr>';
                    }
                } else {
                    $momok=mysqli_query($config,"SELECT * FROM tbl_lembur WHERE id_presensi='$id' AND(id_user='".$row['id_user']."' AND (status_gm=0 OR status_manager=0))");
                    if(mysqli_num_rows($momok)>0){
                        echo '<tr style="background-color:rgba(176,224,230,0.5)">';
                    } else {
                        echo '<tr>';
                    }
                }
                    

                    
                 
                    
                    
                
               
                echo'
                <td style="text-align:center!important">'.$nos++.'</td>
                <td style="text-align:center!important">'.$namaz.'</td>
                <td style="text-align:center!important"><a id="ket'.$row['id_user'].'" data-pres="'.$id.'" class="btn green">lihat</a></td>
                </tr>
                </tbody>
                <script>
$(document).ready(function(){
$(\'#ket'.$row['id_user'].'\').click(function(){
    var token = '.$tokenlembur.';
    var idz = $(this).data("pres");
    $.post(\'./js/ajaxlembur.php\', {idz : idz, user : '.$row['id_user'].', token : token}, function(data){
        $("#anjas").html(data);
    });
$(\'#modals\').openModal();
});
});
</script>';
            }
            ?>
       
        </table>
        </div>
        </div>




                           <?php
						   
						   
						   echo '
							<!-- Row form Start -->
							<div id="modals" class="modal" style="width:80%">
                            <div class="modal-content" id="anjas">
                           
                            </div>
							</div>';
							
                        
                    }
                
            
        }
    }
	
?>
<script>
$(document).ready(function(){
    $('#tgl_suratku').pickadate({
    
    format: '<?php echo $tankon.'-'.$bunkon; ?>-dd' });

});

</script>
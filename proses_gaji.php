<?php
	?>
<style>
.td{
	text-align:center!important;
}
.td ,th{
	text-align:center;
}
label {
	font-size:13px!important;
}
.btn-large{
	
	height:35px!important;
	line-height:1px!important;

}
.btn.small{
	margin-bottom:0px!important;
}




</style>
<?php
    //cek session
    if(empty($_SESSION['admin']) || $_SESSION['admin']!=1){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {

      $id=mysqli_real_escape_string($config,$_REQUEST['id']);
		
        

            $query = mysqli_query($config, "SELECT presensi FROM tbl_sett");
            list($presensi) = mysqli_fetch_array($query);
			
			if(isset($_REQUEST['sub'])){
            $sub = $_REQUEST['sub'];
            switch ($sub) {
                case 'haha':
                include "hapus_keterangan_gaji.php";
			break;
				case 'hahas':
                include "hapus_keterangan_potongan.php";
			break;}
			}

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
                                            <li class="waves-effect waves-light"><a href="?page=pros&id=<?php echo $_REQUEST['id']; ?>" class="judul"><i class="material-icons">attach_money</i> Proses Gaji</a></li>
                                            <li class="waves-effect waves-light"><a href="?page=gjh">			
											<i class="material-icons">arrow_back</i> Kembali</a>
											</li>
                                        </ul>
                                    </div>
                                    <div class="col m5 hide-on-med-and-down" style="background-color:#39424c"> 
                                        
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
					<?php if(isset($_SESSION['succd'])){
                        $succd= $_SESSION['succd'];
                        echo '<div id="alert-message" class="row">
                                <div class="col m12">
                                    <div class="card green lighten-5">
                                        <div class="card-content notif">
                                            <span class="card-title green-text"><i class="material-icons md-36">done</i> '.$succd.'</span>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        unset($_SESSION['succd']);
                    } 
					$asg=mysqli_query($config,"SELECT bulan FROM tbl_bulan_gaji WHERE id='$id'");
					list($bulan)=mysqli_fetch_array($asg);
					$nambulan=date('M',strtotime($bulan));
					$tglbulan=date('Y',strtotime($bulan));
					?>
					<div class="col s12">
                            <div class="card" style="background-color:rgba(0, 128, 255,0.4)">
                                <div class="card-content">
								<h6>Penggajian Bulan : <strong><?php echo $nambulan.' '.$tglbulan; ?></strong></h6>
								</div>
							</div>
					</div>
					
					<div class="col m12" id="colres">
								<ul class="collapsible" style="background-color:rgb(230,230,250)">
								<li>
								 <div class="collapsible-header" id="collaps1"style="background-color:transparent"><i class="material-icons prefix md-36" style="margin-top:-9px!important">add</i><h5>Rekapitulasi</h5></div>
								 <div class="collapsible-body" style="background-color:transparent!important">
								 <div class="col m12" id="colres">
                                    <table id="ketpen" class="bordered">
                                        <thead class="blue lighten-4" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                            <tr>
                                                <th style="width:1%">No.</th>
                                                <th>Nama</th>
												<th>Status Proses</th>
												<th>Status Selesai</th>
                                            </tr>
											
                                        </thead>

                                        <tbody>
									<?php $jia=mysqli_query($config,"SELECT * FROM tbl_user WHERE admin<>1 AND(id_user<>9999 AND admin<>9)");
									$no=1;
									while($row=mysqli_fetch_array($jia)){
										echo'
                                            <tr>
											<td style="text-align:center!important">'.$no++.'</td>
											<td style="text-align:center!important">'.$row['nama'].'</td>
											';
										$way=mysqli_query($config,"SELECT status FROM tbl_gaji WHERE id_user='".$row['id_user']."' AND id_gaji='$id'");
										list($statis)=mysqli_fetch_array($way);
										if(mysqli_num_rows($way)>0){
											echo'
											<td style="text-align:center!important">
											<a class="btn small green waves-effect waves-light"><i class="material-icons">done</i> Sudah Di Proses</a>
											</td>';
											if($statis==0){
												echo'
												<td style="text-align:center!important">
											<a class="btn small red waves-effect waves-light"><i class="material-icons">highlight_off</i> Belum Selesai</a>
											</td>
												';} else {
													echo'
												<td style="text-align:center!important">
											<a class="btn small red waves-effect waves-light"><i class="material-icons">done</i> Sudah Selesai</a>
											</td>
												';
												}
										} else if(mysqli_num_rows($way)<=0){
											echo'
											<td style="text-align:center!important">
											<a class="btn small red waves-effect waves-light"><i class="material-icons">highlight_off</i> Belum Di Proses</a>
											</td>
											<td style="text-align:center!important">
											<a class="btn small red waves-effect waves-light"><i class="material-icons">highlight_off</i> Belum Di Proses</a>
											</td>
											';
										}	
											
												
											
											echo'
											
											</tr>';}?>
										 </tbody>	
									</table>
								 </div>
								 </div>
								 
								 </li>
								 </ul>
								 
								 </div>
					
					
					<div class="col m12">
                            <div class="card">
                                <div class="card-content">
                                    <div id="asd" class="input-field col s12" >
                            <i id="roro" class="material-icons prefix md-prefix">account_circle</i><p style="margin-left:35px">Pilih Karyawan</p><br/>	
							<form method="POST">
                            <select class="browser-default" name="karyawan" id="tunjukan" style="margin-bottom:15px;">
						<?php	$query = mysqli_query($config,"SELECT * FROM tbl_user WHERE id_user<>9999 AND id_user<>8");	
							while ($row = mysqli_fetch_array($query)) {											
								echo "<option id='qq' value='".$row['id_user']."'>".$row['nama']."</option>";}
								echo "</select>";
							
								
					?>
					</div>
					

                                  
								<div class="input-field col s12">
								
                            <button type="submit" class="btn-large waves-effect waves-light blue col s12" name="submitd">PILIH</button>
							</form>
                        </div>	
									
                                </div>
								</div>
								</div>
                    <!-- Secondary Nav END -->
                </div>
				
				<?php
					if(isset($_REQUEST['submitd'])){
           
			$ceking=mysqli_query($config,"SELECT * FROM tbl_gaji WHERE id_user='".$_REQUEST['karyawan']."' AND id_gaji='$id'");
			$tjgk=mysqli_num_rows($ceking);
			if($tjgk<=0){
			$dota=mysqli_query($config,"INSERT INTO tbl_gaji(id_gaji,id_user) VALUES('$id','".$_REQUEST['karyawan']."')");}
		include 'kargaji.php';
        } 
		
		?>
                <!-- Row END -->
				
               
			
						
                <!-- Row form Start -->
       
		<?php } ?>
		

<script type="text/javascript" src="asset/js/halamangaji.js"></script>

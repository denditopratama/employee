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

      $id=mysqli_real_escape_string($config,$_REQUEST['id']);

        

            $query = mysqli_query($config, "SELECT presensi FROM tbl_sett");
            list($presensi) = mysqli_fetch_array($query);

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
                                            <li class="waves-effect waves-light hide-on-small-only"><a href="?page=gjh" class="judul"><i class="material-icons">attach_money</i> Proses Gaji</a></li>
                                            <li class="waves-effect waves-light">
											
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col m5 hide-on-med-and-down" style="background-color:#39424c"> 
                                        
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
					<div class="col m12">
                            <div class="card">
                                <div class="card-content">
                                    <div id="asd" class="input-field col s12" >
                            <i id="roro" class="material-icons prefix md-prefix" >account_circle</i><p style="margin-left:35px">Pilih Karyawan</p><br/>	
							<form method="POST">
                            <select class="browser-default" name="karyawan" id="tunjukan" style="margin-bottom:15px;">
						<?php	$query = mysqli_query($config,"SELECT * FROM tbl_user WHERE id_user<>9999 AND id_user<>8");	
							while ($row = mysqli_fetch_array($query)) {											
								echo "<option id='qq' value='".$row['id_user']."'>".$row['nama']."</option>";}
								echo "</select>";
							
								
					?>
					</div>
					

                                  
								<div class="input-field col s12">
								
                            <button type="submit" class="btn-large waves-effect waves-light blue-grey col s12" name="submitd">PILIH</button>
							</form>
                        </div>	
									
                                </div>
								</div>
								</div>
                    <!-- Secondary Nav END -->
                </div>
				<?php
					if(isset($_REQUEST['submitd'])){
           include 'kargaji.php';
        } ?>
                <!-- Row END -->

                
						
                <!-- Row form Start -->
       
		<?php } ?>
		


<script type="text/javascript" src="asset/js/halamanuser.js"></script>
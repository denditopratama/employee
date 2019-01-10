<?php
    //cek session
    if(!empty($_SESSION['admin'])){
?>
<style>header, main, footer {
  padding-left: 260px;
}

@media only screen and (max-width : 992px) {
  header, main, footer {
    padding-left: 0;
  }

}



 ul.side-nav.fixed a {
    color:#fff!important;
}





</style>


<nav style="background-color:#fff!important;opacity:1;">
   <div class="nav-wrapper">
        <a href="./"  class="brand-logo center hide-on-large-only"><img id="dendibrow" src='upload/screenshot.png' style="margin-top:20px;height:30px"></a>
        <marquee class="hide-on-small-only" style="color:black" behavior="scroll" scrollamount="10" direction="left"><strong>BERITA HARI INI : </strong>
        <?php
         $mobzc=mysqli_query($config,"SELECT berita,tgl_akhir FROM tbl_berita ORDER BY id DESC LIMIT 1");
         list($berita,$tgl_akhir)=mysqli_fetch_array($mobzc);
         date_default_timezone_set("Asia/Bangkok");
         if(!empty($berita) || !empty($tgl_akhir)){
         if( strtotime($tgl_akhir)>=strtotime('now') ){
            echo $berita; 
         } else { echo ''; }}
        ?>
        </marquee>
        <ul id="slide-out" class="side-nav fixed" data-simplebar-direction="vertical" style="background-color:#2a3140!important">
            <li class="no-padding">
                <div class="logo-side center blue-grey darken-3" style="background-image: url('./asset/img/backmobile.jpg');margin-left:10px">
                    <?php
				$id_user=$_SESSION['id_user'];
				$queryed = mysqli_query($config,"SELECT * FROM tbl_user WHERE id_user='$id_user'");
           while($row=mysqli_fetch_array($queryed)){ 
		   if($row['foto']==""){
			echo'
				<img class="imgs" src="./upload/foto/batman.jpg" style="width:70px;height:70px;border-radius:50%;vertical-align:middle;">';}
		   else{
		   echo'<img class="imgs" src="./upload/foto/'.$row['foto'].'" style="width:70px;height:70px;border-radius:50%;vertical-align:middle;">';}
		   echo'<h6 style="font-family: -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;color:#ffffff;text-align:left;margin-bottom:-12px;margin-top:22px;margin-left:-5px">NIP : '.$row['nip'].'</h6>';
		   echo'<h5 style="font-family: -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;font-weight:bold;color:#ffffff;text-align:left;opacity:0.85;margin-top:20px;margin-left:-6px">'.$row['nama'].'</h5>';
		   
		   } ?>
                </div>
            </li>
            <li class="no-padding blue-grey darken-4">
                <ul class="collapsible collapsible-accordion">
                    <li>
                    <?php 
                      $stringd = strip_tags($_SESSION['nama']);
                      if (strlen($stringd) > 18) { $stringCutd = substr($stringd, 0, 15);
                      $endPointd = strrpos($stringCutd, 15);

                        //if the string doesn't contain any space then it will cut without word basis.
                $stringd = $endPointd? substr($stringCutd, 0, $endPointd) : substr($stringCutd, 0);
                                    $stringd .= '';}    
                    ?>
                        <a style="text-align:left!important" class="collapsible-header"><i class="material-icons">account_circle</i><?php echo $stringd; ?></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="?page=pro">Profil</a></li>
                                <li><a href="?page=pro&sub=pass">Ubah Password</a></li>
								<?php echo'
								<li><a href="?page=cv&id_user='.$_SESSION['id_user'].'">Cetak CV</a></li>';?>
								<li><a href="?page=subgem">Game</a></li>
                                <li><a onclick="signOut();">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li><a href="./"><i class="material-icons middle">dashboard</i>Beranda</a></li>
            <li class="no-padding">
            <script>
    function signOut() {
        gapi.load('auth2', function() {
            gapi.auth2.init({
  client_id: '49446115720-gacrc8lhqmdj9rpn3efdpdsa3kh74usu.apps.googleusercontent.com'
}).then(function(){
                var auth2 = gapi.auth2.getAuthInstance();
                auth2.signOut().then(function(){
                    window.location = "./logout.php";
                });
                auth2.disconnect();
            });

        });
    }
  </script>
                <ul class="collapsible collapsible-accordion">
                    <li>
                       <a class="collapsible-header"><i class="material-icons">repeat</i>Transaksi Surat</a>
                        <div class="collapsible-body">
                            <ul>   
                               
							
								<li><a href="?page=tsm">Surat Masuk</a></li>
								<li><a href="?page=tsk">Surat Keluar</a></li>
								<li><a href="?page=kpts">KPTS</a></li>
								
                               
								
                            </ul>
                        </div>
                   </li>
                </ul>
              
            </li>
			
			 <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header"><i class="material-icons">account_circle</i> Karyawan</a>
                        <div class="collapsible-body">
                            <ul>
								<li><a href="?page=usr">Data Karyawan</a></li>
                                <li><a href="?page=pres">Presensi</a></li>
                                <li><a href="?page=cuti">Cuti</a></li>
                                <li><a href="?page=sppd">SPPD</a></li>
								<li><a href="?page=files">File</a></li>
							
							<hr>	
                    <li>
                        <a class="collapsible-header" data-activates="col"><i class="material-icons">attach_money</i> Gaji</a>
                        
                            <ul id="col">
							<?php if($_SESSION['admin']==1) { ?>	
								<li><a href="?page=loggjh">Proses Gaji</a></li>
									<?php } ?>	
								<li><a href="?page=slip">Slip Gaji</a></li>
								 </ul>
                        
                    </li>
              
						
								
								
								
								
								
                            </ul>
                        </div>
                    </li>
                </ul>
				
			<ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header" href="?page=rekap"><i class="material-icons">folder</i> Rekapitulasi</a>
                        <div class="collapsible-body">
                            <ul>
                                
                            </ul>
                        </div>
                    </li>
                </ul>
            


            <li class="no-padding">
            
            <ul class="collapsible collapsible-accordion">
                <li>
                    <a class="collapsible-header"><i class="material-icons">location_city</i> Aplikasi</a>
                    <div class="collapsible-body">
                        <ul>
                          
                            <li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a  <?php if($_SESSION['id_user']!=8){ echo 'onclick="belumjadi();"';} else {echo 'href="indexnyatm.php"';}?> >Tenancy Management</a></li>
                            
                        </ul>
                    </div>
                </li>
            </ul>
      <script>
      function belumjadi(){
          alert('Sedang dalam tahap pembangunan');
          location.reload('./');
      }
      </script>
      
        </li>




			<?php
                if($_SESSION['admin'] == 1){ ?>
            
            <li class="no-padding">
            
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header"><i class="material-icons">settings</i> Pengaturan</a>
                        <div class="collapsible-body">
                            <ul>
                              
                                <li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a href="?page=usr">User</a></li>
								<li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a href="?page=sett&sub=ref">Tabel Referensi</a></li>
                                <li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a href="?page=sett&sub=back">Backup Database</a></li>
                                <li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a href="?page=sett&sub=rest">Restore Database</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
          
          
            </li>
            <?php
                }
            ?>


            
        </ul>


        
        <!-- Menu on medium and small screen END -->

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
        <!-- Menu on large screen START -->
        
       










	   <a style="color:black!important" href="#" data-activates="slide-out" class="button-collapse show-on-small-only" id="menu"><i class="material-icons" style="color:#000!important;">menu</i></a>
   
</nav>
</div>
<?php
    } else {
        header("Location: ../");
        die();
    }
?>

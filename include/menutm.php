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
a {
    font-family:Roboto;
    src:url(/asset/font/roboto/Roboto-Bold.ttf);
    font-weight:400;
    font-size:15.95px!important;
}

#dondo  {
    font-weight:400!important;
    font-size:28px!important;
    margin-right:25px!important;
}

#dondos  {
    font-weight:400!important;
    font-size:28px!important;
    
}


#dodok {
    font-size :25px!important;
}
#dodoks{
    font-size :16px!important;
}

</style>


<nav style="background-color:#fff!important;opacity:1;">
   <div class="nav-wrapper">
        <a href="./" class="brand-logo center hide-on-large-only"><img id="dendibrow" src='upload/screenshot.png' style="margin-top:20px;height:30px"></a>
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
		   echo'<h6 id="dodoks" style="font-family: -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;color:#ffffff;text-align:left;margin-bottom:-12px;margin-top:22px;margin-left:-5px;">NIP : '.$row['nip'].'</h6>';
		   echo'<h5 id="dodok" style="font-family: -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;font-weight:bold;color:#ffffff;text-align:left;opacity:0.85;margin-top:20px;margin-left:-6px;">'.$row['nama'].'</h5>';
		   
		   } ?>
                </div>
            </li>
            <li class="no-padding blue-grey darken-4">
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a style="margin-left:15px!important" class="collapsible-header"><i id="dondo" class="material-icons">account_circle</i><?php echo $_SESSION['nama']; ?></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="admin.php?page=pro">Profil</a></li>
                                <li><a href="admin.php?page=pro&sub=pass">Ubah Password</a></li>
								<?php echo'
								<li><a href="admin.php?page=cv&id_user='.$_SESSION['id_user'].'">Cetak CV</a></li>';?>
								<li><a href="admin.php?page=subgem">Game</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            
            <li class="no-padding">
               
                <ul class="collapsible collapsible-accordion">
                    <li>
                       <a style="margin-left:15px!important" class="collapsible-header"><i id="dondo" class="material-icons">dashboard</i>Beranda</a>
                        <div class="collapsible-body">
                            <ul>   
                               
							
								<li><a href="./">Beranda E-mployee</a></li>
								<li><a href="indexnyatm.php">Beranda TM</a></li>
								
								
                               
								
                            </ul>
                        </div>
                   </li>
                </ul>
              
            </li>
            
            <li class="no-padding">
               
                <ul class="collapsible collapsible-accordion">
                    <li>
                       <a style="margin-left:15px!important" class="collapsible-header"><i id="dondo" class="material-icons">person_pin</i>Customer</a>
                        <div class="collapsible-body">
                            <ul>   
                               
							
								<li><a href="daftar_customer.php">Prospective Customer</a></li>
								<li><a href="indexnyatm.php?page=kontrak">Perjanjian</a></li>
								<li><a href="?page=kpts">Invoice</a></li>
                                <li><a href="?page=kpts">Pembayaran</a></li>
								
                               
								
                            </ul>
                        </div>
                   </li>
                </ul>
              
            </li>
			
			

            
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

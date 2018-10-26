<?php
    //cek session
    if(!empty($_SESSION['admin'])){
?>

<nav class="blue-grey darken-1" style="background-color:#fff!important;opacity:1;">
    <div class="nav-wrapper" >
        <a href="./" class="brand-logo center hide-on-large-only"><img src='upload/screenshot.png' style="margin-top:20px;height:30px"></a>
        <ul id="slide-out" class="side-nav" data-simplebar-direction="vertical" style="background-color:#2a3140!important">
            <li class="no-padding">
                <div class="logo-side center blue-grey darken-3" style="background-image: url('./asset/img/rumput.png');">
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
                        <a class="collapsible-header"><i class="material-icons">account_circle</i><?php echo $_SESSION['nama']; ?></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="?page=pro">Profil</a></li>
                                <li><a href="?page=pro&sub=pass">Ubah Password</a></li>
								<?php echo'
								<li><a href="?page=cv&id_user='.$_SESSION['id_user'].'">Cetak CV</a></li>';?>
								<li><a href="?page=subgem">Game</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li><a href="./"><i class="material-icons middle">dashboard</i> Beranda</a></li>
            <li class="no-padding">
               
                <ul class="collapsible collapsible-accordion">
                    <li>
                       <a class="collapsible-header"><i class="material-icons">repeat</i>Transaksi Surat</a>
                        <div class="collapsible-body">
                            <ul>   <?php if($_SESSION['admin'] == 1){ ?>
                                <li><a href="?page=tsmall">Surat Masuk</a></li>
								<li><a href="?page=tskall">Surat Keluar</a></li>
							<?php } else {?>
								<li><a href="?page=tsm">Surat Masuk</a></li>
								<li><a href="?page=tsk">Surat Keluar</a></li>
							<?php } ?>
								<li><a href="#">Nomor Surat</a></li>
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
							<?php if($_SESSION['admin']==1) { ?>	
							<hr>	
                    <li>
                        <a class="collapsible-header" data-activates="col"><i class="material-icons">attach_money</i> Gaji</a>
                        
                            <ul id="col">
								<li><a href="?page=loggjh">Proses Gaji</a></li>
								<li><a href="">Pelaporan Gaji</a></li>
								<li><a href="?page=slip">Slip Gaji</a></li>
								 </ul>
                        
                    </li>
              
							<?php } ?>	
								
								
								
								
								
                            </ul>
                        </div>
                    </li>
                </ul>
				
			<ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header"><i class="material-icons">folder</i> Rekapitulasi</a>
                        <div class="collapsible-body">
                            <ul>
								<li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a href="?page=report">Rincian Karyawan</a></li>
								<li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a <?php if($_SESSION['admin']==1)
				{echo 'onClick="window.location=\'?page=jenkel\'"';} else {echo 'onclick="alert(\'Hanya Untuk Admin\')"';}?>>Jenis Kelamin</a></li>
				<li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a <?php if($_SESSION['admin']==1)
				{echo 'onClick="window.location=\'?page=agama\'"';} else {echo 'onclick="alert(\'Hanya Untuk Admin\')"';}?>>Agama</a></li>
				<li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a <?php if($_SESSION['admin']==1)
				{echo 'onClick="window.location=\'?page=statkar\'"';} else {echo 'onclick="alert(\'Hanya Untuk Admin\')"';}?>>Status Karyawan</a></li>
				<li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a <?php if($_SESSION['admin']==1)
				{echo 'onClick="window.location=\'?page=keljab\'"';} else {echo 'onclick="alert(\'Hanya Untuk Admin\')"';}?>>Kelas Jabatan</a></li>
				<li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a <?php if($_SESSION['admin']==1)
				{echo 'onClick="window.location=\'?page=usia\'"';} else {echo 'onclick="alert(\'Hanya Untuk Admin\')"';}?>>Usia</a></li>
                                
                            </ul>
                        </div>
                    </li>
                </ul>
            
			<?php
                if($_SESSION['admin'] == 1){ ?>
            
            <li class="no-padding">
            
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header"><i class="material-icons">settings</i> Pengaturan</a>
                        <div class="collapsible-body">
                            <ul>
                              
                                <li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a href="?page=usr">User</a></li>
                                <li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a href="?page=sett&sub=back">Backup Database</a></li>
                                <li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a href="?page=sett&sub=rest">Restore Database</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            <?php
                }
            ?>
          
            </li>
        </ul>
        <!-- Menu on medium and small screen END -->

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
        <!-- Menu on large screen START -->
        <ul class="center hide-on-med-and-down" id="nv" >
            <li><a href="./" class="ams hide-on-med-and-down"><img src='upload/screenshots.png' width="195px" height="47px" style="margin-top:10px;"></a></li>
            <li><div class="grs"></></li>
            <li><a href="./"style="color:#000!important"><i class="material-icons"></i>&nbsp; Beranda</a></li>
           
            <li><a class="dropdown-button" href="#!" data-activates="transaksiw" style="color:#000!important">Transaksi Surat <i class="material-icons md-18">arrow_drop_down</i></a></li>
                <ul id='transaksiw' class='dropdown-content' style="background-color:#004689;overflow-y:visible">
				  <?php
                if($_SESSION['admin'] == 1 || $_SESSION['admin'] == 8){ ?>
                    <li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a href="?page=tsmall">Surat Masuk</a></li>
					<li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a href="?page=tskall">Surat Keluar</a></li>
					<?php
                } else {
            ?>
					<li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a href="?page=tsm">Surat Masuk</a></li>
					<li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a href="?page=tsk">Surat Keluar</a></li>
					<?php
                }
            ?>
                  <li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a href="#">Nomor Surat</a></li>  
				  <li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a href="?page=kpts">KPTS</a></li>
                </ul>
			
   <style>
   .right-triangle {
			float: right;
		}
		
		
		
		
		</style>
			
			  <li><a class="dropdown-button" href="#!" data-activates="transaksi" style="color:#000!important">Karyawan <i class="material-icons md-18">arrow_drop_down</i></a></li>
                <ul id='transaksi' class='dropdown-content' style="background-color:#004689;">
				<li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a href="?page=usr">Data Karyawan</a></li>
				<li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a href="?page=pres">Presensi</a></li>
				<li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a href="?page=cuti">Cuti</a></li>
				<li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a href="?page=sppd">SPPD</a></li>
				<li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a href="?page=files">File</a></li>
				<li><a id="hah" class="dropdown-button" href='#' data-activates='dropdown2' data-alignment="left" onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''">Gaji<span class="right-triangle"></span></a></li>
				
				
				</ul>
				
			
				<ul id="dropdown2" class="dropdown-content" style="margin-left: 173px !important;
		margin-top: 1px !important;background-color:#004689;">
			<li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a href="?page=loggjh">Proses Gaji</a></li>
			<li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a href="#!">Pelaporan Gaji</a></li>
			<li class="divider"></li>
			<li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a href="?page=slip">Slip Gaji</a></li>
			</ul>
			
			<li><a class="dropdown-button" href="#!" data-activates="transaksids" style="color:#000!important">Rekapitulasi <i class="material-icons md-18">arrow_drop_down</i></a></li>
                <ul id='transaksids' class='dropdown-content' style="background-color:#004689;">
				<li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a href="?page=report">Rincian Karyawan</a></li>
				<li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a <?php if($_SESSION['admin']==1)
				{echo 'onClick="window.location=\'?page=jenkel\'"';} else {echo 'onclick="alert(\'Hanya Untuk Admin\')"';}?>>Jenis Kelamin</a></li>
				<li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a <?php if($_SESSION['admin']==1)
				{echo 'onClick="window.location=\'?page=agama\'"';} else {echo 'onclick="alert(\'Hanya Untuk Admin\')"';}?>>Agama</a></li>
				<li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a <?php if($_SESSION['admin']==1)
				{echo 'onClick="window.location=\'?page=statkar\'"';} else {echo 'onclick="alert(\'Hanya Untuk Admin\')"';}?>>Status Karyawan</a></li>
				<li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a <?php if($_SESSION['admin']==1)
				{echo 'onClick="window.location=\'?page=keljab\'"';} else {echo 'onclick="alert(\'Hanya Untuk Admin\')"';}?>>Kelas Jabatan</a></li>
				<li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a <?php if($_SESSION['admin']==1)
				{echo 'onClick="window.location=\'?page=usia\'"';} else {echo 'onclick="alert(\'Hanya Untuk Admin\')"';}?>>Usia</a></li>
				
				
				
				
				</ul>
				
			 
          
            <?php
                if($_SESSION['id_user']==8){ ?>
            <li><a class="dropdown-button" href="#!" data-activates="pengaturan" style="color:#000!important;">Pengaturan <i class="material-icons md-18">arrow_drop_down</i></a></li>
                <ul id='pengaturan' class='dropdown-content'style="background-color:#004689;">
                   
                    <li><a href="?page=usr">User</a></li>
                    <li class="divider"></li>
                    <li><a href="?page=sett&sub=back">Backup Database</a></li>
                    <li><a href="?page=sett&sub=rest">Restore Database</a></li>
                </ul>
            <?php
                }
            ?>
            
            <li class="right" style="margin-right: 10px;"><a class="dropdown-button" href="#!" data-activates="logout"style="color:#000!Important;">
	
			<?php
				$id_user=$_SESSION['id_user'];
				$queryed = mysqli_query($config,"SELECT foto FROM tbl_user WHERE id_user='$id_user'");
           while($row=mysqli_fetch_array($queryed)){ 
		   if($row['foto']==""){
			echo'
				<img class="imgs" src="./upload/foto/batman.jpg" style="width:50px;height:50px;border-radius:50%;vertical-align:middle;margin-right:5px">';}
		   else{
		   echo'<img class="imgs" src="./upload/foto/'.$row['foto'].'" style="width:50px;height:50px;border-radius:50%;vertical-align:middle;margin-right:5px">'; }} ?>
			
			<?php echo $_SESSION['nama']; ?><i class="material-icons md-18">arrow_drop_down</i></a></li>
                <ul id='logout' class='dropdown-content'style="background-color:#004689;">
				
                    <li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a href="?page=pro"style="color:#fff;">Profil</a></li>
                    <li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a href="?page=pro&sub=pass"style="color:#fff;">Ubah Password</a></li><?php echo'
					<li onmouseover="this.style.backgroundColor=\'#f9c60b\'" onmouseout="this.style.backgroundColor=\'\'"><a href="?page=cv&id_user='.$_SESSION['id_user'].'">Cetak CV</a></li>';?>
                    <li class="divider"></li>
					<li onmouseover="this.style.backgroundColor='#f9c60b'" onmouseout="this.style.backgroundColor=''"><a href="?page=subgem"style="color:#fff;">Game</a></li>
                    <li><a href="logout.php"style="color:#fff;"><i class="material-icons"style="color:#fff;">settings_power</i> Logout</a></li>
                </ul>
        </ul>
        <!-- Menu on large screen END -->
       










	   <a href="#" data-activates="slide-out" class="button-collapse" id="menu"><i class="material-icons" style="color:#000;">menu</i></a>
    </div>
</nav>

<?php
    } else {
        header("Location: ../");
        die();
    }
?>

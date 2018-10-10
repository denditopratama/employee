<?php
    //cek session
    if(!empty($_SESSION['admin'])){
?>

<nav class="blue-grey darken-1" style="background-color:#fff!important;">
    <div class="nav-wrapper">
        <a href="./" class="brand-logo center hide-on-large-only"><img src='upload/screenshot.png' style="margin-top:20px;"></a>
        <ul id="slide-out" class="side-nav" data-simplebar-direction="vertical">
            <li class="no-padding">
                <div class="logo-side center blue-grey darken-3">
                    <?php
                        $query = mysqli_query($config, "SELECT * FROM tbl_instansi");
                        while($data = mysqli_fetch_array($query)){
                            if(!empty($data['logo'])){
                                echo '<img class="logoside" src="./upload/'.$data['logo'].'"/>';
                            } else {
                                echo '<img class="logoside" src="./asset/img/logo.png"/>';
                            }
                            if(!empty($data['nama'])){
                                echo '<h5 class="smk-side">'.$data['nama'].'</h5>';
                            } else {
                                echo '<h5 class="smk-side"></h5>';
                            }
                            if(!empty($data['alamat'])){
                                echo '<p class="description-side">'.$data['alamat'].'</p>';
                            } else {
                                echo '<p class="description-side"></p>';
                            }
                        }
                    ?>
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
                            <ul>
                                <li><a href="?page=tsm">Surat Masuk</a></li>
                                <li><a href="?page=tsk">Surat Keluar</a></li>
                            </ul>
                        </div>
                   </li>
                </ul>
              
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header"><i class="material-icons">assignment</i> Buku Agenda</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="?page=asm">Surat Masuk</a></li>
                                <li><a href="?page=ask">Surat Keluar</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header"><i class="material-icons">image</i> Galeri File</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="?page=gsm">Surat Masuk</a></li>
                                <li><a href="?page=gsk">Surat Keluar</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li><a href="?page=ref"><i class="material-icons middle">class</i> Referensi</a></li>
            <li class="no-padding">
            <?php
                if($_SESSION['admin'] == 1){ ?>
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header"><i class="material-icons">settings</i> Pengaturan</a>
                        <div class="collapsible-body">
                            <ul>
                              
                                <li><a href="?page=sett&sub=usr">User</a></li>
                                <li><a href="?page=sett&sub=back">Backup Database</a></li>
                                <li><a href="?page=sett&sub=rest">Restore Database</a></li>
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
        <ul class="center hide-on-med-and-down" id="nv">
            <li><a href="./" class="ams hide-on-med-and-down"><img src='upload/screenshot.png' style="margin-top:10px;"></a></li>
            <li><div class="grs"></></li>
            <li><a href="./"style="color:#000!important"><i class="material-icons"></i>&nbsp; Beranda</a></li>
           
            <li><a class="dropdown-button" href="#!" data-activates="transaksi" style="color:#000!important">Transaksi Surat <i class="material-icons md-18">arrow_drop_down</i></a></li>
                <ul id='transaksi' class='dropdown-content' style="background-color:#004689;">
				  <?php
                if($_SESSION['admin'] == 1 || $_SESSION['admin'] == 8){ ?>
                    <li><a href="?page=tsmall">Surat Masuk</a></li>
					<?php
                } else {
            ?>
					<li><a href="?page=tsm">Surat Masuk</a></li>
					<?php
                }
            ?>
                    <li><a href="?page=tsk">Surat Keluar</a></li>
				
                </ul>
         
			
			  <?php
                if($_SESSION['admin'] == 1 || $_SESSION['admin'] == 7){ ?>
			 <li><a href="?page=gjh" style="color:#000!important;">Gaji</a></li>
			 <?php
                }
            ?>
            <li><a class="dropdown-button" href="#!" data-activates="agenda"style="color:#000!important;">Buku Agenda<i class="material-icons md-18">arrow_drop_down</i></a></li>
                <ul id='agenda' class='dropdown-content'style="background-color:#004689;">
                    <li><a href="?page=asm">Surat Masuk</a></li>
                    <li><a href="?page=ask">Surat Keluar</a></li>
                </ul>
            <li><a class="dropdown-button" href="#!" data-activates="agenda"style="color:#000!important;">Galeri File <i class="material-icons md-18">arrow_drop_down</i></a></li>
                <ul id='agenda' class='dropdown-content'style="background-color:#004689;">
                    <li><a href="?page=gsm">Surat Masuk</a></li>
                    <li><a href="?page=gsk">Surat Keluar</a></li>
                </ul>
            <li><a href="?page=ref"style="color:#000!Important;">Referensi</a></li>
            <?php
                if($_SESSION['admin'] == 1){ ?>
            <li><a class="dropdown-button" href="#!" data-activates="pengaturan"style="color:#000!important;">Pengaturan <i class="material-icons md-18">arrow_drop_down</i></a></li>
                <ul id='pengaturan' class='dropdown-content'style="background-color:#004689;">
                   
                    <li><a href="?page=sett&sub=usr">User</a></li>
                    <li class="divider"></li>
                    <li><a href="?page=sett&sub=back">Backup Database</a></li>
                    <li><a href="?page=sett&sub=rest">Restore Database</a></li>
                </ul>
            <?php
                }
            ?>
            
            <li class="right" style="margin-right: 10px;"><a class="dropdown-button" href="#!" data-activates="logout"style="color:#000!Important;"><i class="material-icons">account_circle</i> <?php echo $_SESSION['nama']; ?><i class="material-icons md-18">arrow_drop_down</i></a></li>
                <ul id='logout' class='dropdown-content'style="background-color:#004689;">
                    <li><a href="?page=pro"style="color:#fff;">Profil</a></li>
                    <li><a href="?page=pro&sub=pass"style="color:#fff;">Ubah Password</a></li>
                    <li class="divider"></li>
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

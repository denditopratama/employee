

<nav class="blue-grey darken-1" style="background-color:#fff!important;opacity:1;">
    <div class="nav-wrapper" >
        <a class="brand-logo center hide-on-large-only"><img src='upload/screenshot.png' style="margin-top:20px;height:30px"></a>
        <ul id="slide-out" class="side-nav" data-simplebar-direction="vertical" style="background-color:#2a3140!important">
            <li class="no-padding">
                <div class="logo-side center blue-grey darken-3" style="background-image: url('./asset/img/rumput.png');">
                    <?php
				$id_user=$_SESSION['id_user'];
				$queryed = mysqli_query($config,"SELECT * FROM tbl_user WHERE id_user='$id_user'");
           while($row=mysqli_fetch_array($queryed)){ 
		   if($row['foto']==""){
			echo'
				<img class="imgs" src="./upload/foto/batman.jpg" style="width:70px;height:70px;border-radius:50%;vertical-align:middle;margin-right:128px">';}
		   else{
		   echo'<img class="imgs" src="./upload/foto/'.$row['foto'].'" style="width:70px;height:70px;border-radius:50%;vertical-align:middle;margin-right:128px;margin-left:-20px">';}
		   echo'<h6 style="font-family: -apple-system, BlinkMacSystemFont, sans-serif!important;color:#ffffff;text-align:left;margin-bottom:-12px;margin-top:22px;margin-left:-5px">NIP : '.$row['nip'].'</h6>';
		   echo'<h5 style="font-family: -apple-system, BlinkMacSystemFont, sans-serif;font-weight:bold;color:#ffffff;text-align:left;opacity:0.85;margin-top:20px;margin-left:-6px">'.$row['nama'].'</h5>';
		   
		   } ?>
                </div>
            </li>
            <li class="no-padding blue-grey darken-4">
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header"><i class="material-icons">account_circle</i><?php echo $_SESSION['nama']; ?></a>
                        <div class="collapsible-body">
                            <ul>
                                
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            
        </ul>
        <!-- Menu on medium and small screen END -->

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
        <!-- Menu on large screen START -->
        <ul class="center hide-on-med-and-down" id="nv" >
            <li><a class="ams hide-on-med-and-down"><img src='upload/screenshot.png' style="margin-top:10px;"></a></li>
            <li><div class="grs"></></li>
            
           
            
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
				
                   
                    <li class="divider"></li>
                    <li><a href="logout.php"style="color:#fff;"><i class="material-icons"style="color:#fff;">settings_power</i> Logout</a></li>
                </ul>
        </ul>
        <!-- Menu on large screen END -->
       




	   <a href="#" data-activates="slide-out" class="button-collapse" id="menu"><i class="material-icons" style="color:#000;">menu</i></a>
    </div>
</nav>



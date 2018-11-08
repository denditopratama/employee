<?php 
session_start();
if(empty($_SESSION['admin'])){
	echo '
	<script>
	alert(\'ACCESS DENIED WOI!\');
	window.location.href=\'../\';
	</script>';
} else {
	require('../include/config.php');

												$time=mysqli_real_escape_string($config,$_REQUEST['waktu']);
                                               $waktay=mysqli_query($config,"UPDATE tbl_user SET waktugame='$time' WHERE id_user='".$_SESSION['id_user']."'");
											  
}	
												
												
											?>
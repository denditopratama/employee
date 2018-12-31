<?php 
session_start();
if(empty($_SESSION['admin']) || $_SESSION['admin']!=1){
	echo '
	<script>
	alert(\'ACCESS DENIED WOI!\');
	window.location.href=\'../\';
	</script>';
} else {
require('../include/config.php');
$tokens=mysqli_real_escape_string($config,$_POST['tokens']);
if($tokens!=$_SESSION['tokenheaderadmin']){
    echo '
	<script>
	alert(\'ACCESS DENIED WOI!\');
	window.location.href=\'../\';
	</script>'; 
} else {

				$mt=mysqli_real_escape_string($config,$_POST['mt']);
					if($mt==1){
						 $nn=mysqli_query($config,"UPDATE tbl_akses_user SET maintenance=1 WHERE id=1");
                     } else {
						$nn=mysqli_query($config,"UPDATE tbl_akses_user SET maintenance=0 WHERE id=1");
						
                     }
					}
			
						
					
                             					  
}													

											?>
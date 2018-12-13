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



				$gas=mysqli_real_escape_string($config,$_POST['gas']);
					if($gas==1){
                         $nn=mysqli_query($config,"UPDATE tbl_akses_user SET status=1 WHERE id=1");
                     } else {
                        $nn=mysqli_query($config,"UPDATE tbl_akses_user SET status=0 WHERE id=1");
                     }
                             					  
}													

											?>
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


                                               $departement=mysqli_query($config,"SELECT * FROM tbl_user WHERE id_user='".$_SESSION['id_user']."'");
											   while($row=mysqli_fetch_array($departement)){
												   echo $row['score'];
													}		
												
												
}
											?>
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



												$propinsi=mysqli_real_escape_string($config,$_REQUEST['propinsi']);
                              $departement=mysqli_query($configtm,"SELECT * FROM kota WHERE propinsi='$propinsi'");
											   while($row=mysqli_fetch_array($departement)){
												   echo '<option value="'.$row['id'].'">'.$row['kota'].'</option>';
											 
													}	
}													
											?>
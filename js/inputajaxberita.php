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



												$berita=mysqli_real_escape_string($config,$_POST['berita']);
												$tgl_berita=mysqli_real_escape_string($config,$_POST['tgl_berita']);
                                               
											   $nn=mysqli_query($config,"INSERT INTO tbl_berita(berita,tgl_akhir) VALUES('$berita','$tgl_berita')");
}													

											?>
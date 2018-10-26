<?php 
session_start();

require('../include/config.php');


												
												if(isset($_REQUEST['data'])){
												$data=mysqli_real_escape_string($config,$_REQUEST['data']);
												$updatehigh=mysqli_query($config,"UPDATE tbl_user SET score='$data' WHERE id_user='".$_SESSION['id_user']."'");}
												
											?>
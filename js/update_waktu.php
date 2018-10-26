<?php 
session_start();

	require('../include/config.php');

												$time=mysqli_real_escape_string($config,$_REQUEST['waktu']);
                                               $waktay=mysqli_query($config,"UPDATE tbl_user SET waktugame='$time' WHERE id_user='".$_SESSION['id_user']."'");
											  
												
												
												
											?>
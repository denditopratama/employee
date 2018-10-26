<?php 
session_start();

require('../include/config.php');


                                               $departement=mysqli_query($config,"SELECT * FROM tbl_user WHERE id_user='".$_SESSION['id_user']."'");
											   while($row=mysqli_fetch_array($departement)){
												   echo $row['score'];
													}		
												
												
												
											?>
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



                                                $id=mysqli_real_escape_string($configtm,$_POST['id']);
                                                $token=mysqli_real_escape_string($configtm,$_POST['token']);
                                                if($token==$_SESSION['tokeneditcustomer']){

                                                    $unittenant=mysqli_query($configtm,"SELECT * FROM tbl_customer WHERE unit='$id'");
                                                    while($row=mysqli_fetch_array($unittenant)){
                                                        echo '<option value="'.$row['id'].'">'.$row['nama'].' '.$row['nama'].'</option>';
                                                }
                                                    
											 
													}	
}													
											?>
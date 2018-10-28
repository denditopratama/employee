<?php

if(empty($_SESSION['admin'])){
include 'logout.php';}
else{
	$id_gaji=mysqli_real_escape_string($config,$_REQUEST['id']);
	$id_user=mysqli_real_escape_string($config,$_REQUEST['id_user']);

			$query = mysqli_query($config,"UPDATE tbl_gaji SET status=1 WHERE id_user='$id_user' AND id_gaji='$id_gaji'");
		
		if($query==true){
			echo '<script>
			window.location.href="admin.php?page=pros&id='.$id.'";
			alert(\'Data Berhasil Di Update !\');
			
			</script>';
			
		}
}
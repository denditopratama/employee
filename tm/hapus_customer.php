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

$token=$_GET['token'];
$id=mysqli_real_escape_string($configtm,$_GET['id']);
if(!empty($_GET['hapus'])){
$hapus=mysqli_real_escape_string($configtm,$_GET['hapus']);
if($token==$_SESSION['tokeneditcustomer']){
    if($hapus=='yYy'){
    $konzd=mysqli_query($configtm,"DELETE FROM tbl_customer WHERE id='$id'");
    echo '
	<script>
	alert(\'Sukses !\');
    window.location.href=\'../daftar_customer.php\';
	</script>'; 
}}
}
if(!empty($_GET['aktif'])){
$aktif=mysqli_real_escape_string($configtm,$_GET['aktif']);
if($token==$_SESSION['tokeneditcustomer']){
    if($aktif=='yYy'){
    $konz=mysqli_query($configtm,"UPDATE tbl_customer SET status=1 WHERE id='$id'");
    echo '
	<script>
	alert(\'Sukses !\');
    window.location.href=\'../daftar_customer.php\';
	</script>'; 
}  else if($aktif=='nNn'){
    
    $konz=mysqli_query($configtm,"UPDATE tbl_customer SET status=0 WHERE id='$id'");
    echo '
	<script>
	alert(\'Sukses !\');
	window.location.href=\'../daftar_customer.php\';
	</script>'; 
}
    } else {
        echo '
        <script>
        alert(\'ACCESS DENIED WOI!\');
        window.location.href=\'../\';
        </script>'; 
    }
}



    
} 





?>
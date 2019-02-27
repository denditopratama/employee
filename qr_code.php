<?php
session_start();
include('/include/config.php');
$idd=mysqli_real_escape_string($config,$_GET['id']);
if($_SESSION['admin']!=1){
    $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
    header("Location: ./");
    die();
} else {

    require('/phpqrcode-master/qrlib.php');
    QRcode::png('https://employee.jasamargaproperti.co.id/tampil_inventaris.php?id='.$idd.'');
    
}



?>
<?php
 session_start();
if($_SESSION['admin']!=1){
    $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
    header("Location: ./");
    die();
} else {
    
    session_destroy();
  
    
    require('include/config.php');
    $id_users=mysqli_real_escape_string($config,$_GET['dodi']);

    $query = mysqli_query($config, "SELECT id_user, username, nama, nip, admin,role,unit,sub_unit,divisi,status_aktif FROM tabel_role WHERE id_user='$id_users'");
    list($id_user, $username, $nama, $nip, $admin,$role,$unit,$sub_unit,$divisi,$status_aktif) = mysqli_fetch_array($query);
    session_start();
    $_SESSION['id_user'] = $id_user;
    $_SESSION['username'] = $username;
    $_SESSION['nama'] = $nama;
    $_SESSION['nip'] = $nip;
    $_SESSION['admin'] = $admin;
    $_SESSION['role'] = $role;
    $_SESSION['unit'] = $unit;
    $_SESSION['divisi'] = $divisi;
    $_SESSION['sub_unit'] = $sub_unit;
    session_regenerate_id();
        header('Location: ./admin.php?');
   
}
?>

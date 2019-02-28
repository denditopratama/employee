<?php
session_start();
require('include/config.php');
if(empty($_SESSION['admin']) || $_SESSION['admin']!=1){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {


    }
    ?>
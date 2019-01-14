
<?php
require('include/config.php');
session_start();
  if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {
		
		if(isset($_POST['subsub'])){
            $id = mysqli_real_escape_string($config, base64_decode($_POST['subsub']));	
            $ket = mysqli_real_escape_string($config, $_POST['keterangan']);
            $dari = mysqli_real_escape_string($config, $_POST['dari']);
            $querys = mysqli_query($config, "UPDATE tbl_cuti SET ket='$ket',dari='$dari' WHERE id='$id'");
        
        
                if($querys == true){
                     $_SESSION['succEdit'] = 'SUKSES! Keterangan Berhasil Diubah';
                header("Location: ./admin.php?page=cuti");
        die();
    }
        }
    }
	
?>
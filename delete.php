
<?php

  if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {
		
		
		
            
  $id_surat = mysqli_real_escape_string($config, $_REQUEST['idsurat']);
$querys = mysqli_query($config, "UPDATE tbl_surat_keluar SET status=1 WHERE id_surat='$id_surat'");

			if($query == true){
				 $_SESSION['succEdit'] = 'SUKSES! Surat Berhasil Di Approve';
			header("Location: ./admin.php?page=tskall");
	die();}}
?>
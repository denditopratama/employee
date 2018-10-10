<?php
    //cek session
    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {
	
	date_default_timezone_set("Asia/Bangkok");
	$id=mysqli_real_escape_string($config,$_REQUEST['id']);
	
	$select=mysqli_query($config,"SELECT tgl_awal FROM tbl_cuti WHERE id='$id'");
	list($tgl_awalcuti)=mysqli_fetch_array($select);
	$oik=mysqli_query($config,"SELECT cuti FROM tbl_user WHERE id_user='$id_user'");
	list($cutiya)=mysqli_fetch_array($oik);
	$tglhapus = date('Y',strtotime($tgl_awalcuti));
	$hapuskrg = date('Y');
	if($hapuskrg==$tglhapus){
		$cutiya=$cutiya+1;
		$pluscuti=mysqli_query($config,"UPDATE tbl_user SET cuti='$cutiya' WHERE id_user='".$_SESSION['id_user']."'");
	
	}
	$hapuscuti=mysqli_query($config,"DELETE FROM tbl_cuti WHERE id='$id'");
	$_SESSION['succAdd']="SUKSES! data berhasil di hapus";
		header("Location: ./admin.php?page=cuti");
	
	
	}
	?>
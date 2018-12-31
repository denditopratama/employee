<?php
    //cek session
    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {
	
	date_default_timezone_set("Asia/Bangkok");
	$id=mysqli_real_escape_string($config,$_REQUEST['id']);
	
	$select=mysqli_query($config,"SELECT id_user,tgl_awal,tgl_akhir,file FROM tbl_cuti WHERE id='$id'");
	list($id_user,$tgl_awalcuti,$tgl_akhircuti,$file)=mysqli_fetch_array($select);
	$oik=mysqli_query($config,"SELECT cuti FROM tbl_user WHERE id_user='$id_user'");
	list($cutiya)=mysqli_fetch_array($oik);
	
	
	$hapuskrg = date('Y-m-d');
	$perbedaan2 = mysqli_real_escape_string($config,date_diff(date_create($tgl_akhircuti), date_create($tgl_awalcuti))->d)+1;
	$haritot=0;
				$nmp=array();
				for($i=0;$i<$perbedaan2;$i++){
					
					$wikwik=date('Y-m-d', strtotime($tgl_awalcuti.'+'.$haritot.' days'));	
					$yoo=date('N',strtotime($wikwik));
					$haritot=$haritot+1;
					if($yoo<6){
						array_push($nmp,1);
					}
				}
				$c=array_sum($nmp);
	
	$cutiyas=$cutiya+$c;
	
	if($_SESSION['admin']==1 && $_SESSION['divisi']==2){
		if($file==''){
		$cutiya=$cutiya+$perbedaan2;
		$pluscuti=mysqli_query($config,"UPDATE tbl_user SET cuti='$cutiyas' WHERE id_user='$id_user'");
		$hapuscuti=mysqli_query($config,"DELETE FROM tbl_cuti WHERE id='$id'");
	$_SESSION['succAdd']="SUKSES! data berhasil di hapus";
		header("Location: ./admin.php?page=cuti");}
		else {
		$files='./upload/surat_sakit/'.$file.'';
		unlink($files);	
	$hapuscuti=mysqli_query($config,"DELETE FROM tbl_cuti WHERE id='$id'");
	$_SESSION['succAdd']="SUKSES! data berhasil di hapus";
		header("Location: ./admin.php?page=cuti");
		}} else {
	if(strtotime($hapuskrg)<strtotime($tgl_awalcuti)){
		if($file==''){
		$pluscuti=mysqli_query($config,"UPDATE tbl_user SET cuti='$cutiyas' WHERE id_user='$id_user'");
		$hapuscuti=mysqli_query($config,"DELETE FROM tbl_cuti WHERE id='$id'");
	$_SESSION['succAdd']="SUKSES! data berhasil di hapus";
		header("Location: ./admin.php?page=cuti");}
		else {
		$files='./upload/surat_sakit/'.$file.'';
		unlink($files);	
	$hapuscuti=mysqli_query($config,"DELETE FROM tbl_cuti WHERE id='$id'");
	$_SESSION['succAdd']="SUKSES! data berhasil di hapus";
		header("Location: ./admin.php?page=cuti");
		}} else {
		$_SESSION['errs']="GAGAL, cuti anda sudah tidak bisa dihapus";
		header("Location: ./admin.php?page=cuti");
	}
	}
	
	
	}
	
	?>
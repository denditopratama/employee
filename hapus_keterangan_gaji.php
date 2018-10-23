
<?php

  if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {
		
		
	$nomer=mysqli_real_escape_String($config,$_REQUEST['nomer']);
	$id=mysqli_real_escape_String($config,$_REQUEST['id']);
	$id_user=mysqli_real_escape_String($config,$_REQUEST['id_user']);
	
    
	if($nomer=='thr'){
	$querys = mysqli_query($config, "UPDATE tbl_gaji SET thr=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='gajijm'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET gaji_jm=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='rapel_lembur'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET rapel_lembur=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='rapel_penerimaan'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET rapel_penerimaan=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='fas_cop'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET fas_cop=0 WHERE id_user='$id_user' AND id_gaji='$id'");}	
	else
	if($nomer=='rapel_honor'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET rapel_honor=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='tam_jamsos'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET tam_jamsos=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='jaminan_pensiun'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET jaminan_pensiun=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='bpjsks'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET bpjsks=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='rapel_jaminan'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET rapel_jaminan=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='rapel_bpjsks'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET rapel_bpjsks=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='rapel_bpjskt'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET rapel_bpjskt=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='penerimaan_lainnya'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET penerimaan_lainnya=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='jasprod'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET jasprod=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='ongkos_cuti'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET ongkos_cuti=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='bantuan_pengobatan'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET bantuan_pengobatan=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='lembur'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET lembur=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	
	
			if($querys == true){
				 $_SESSION['succd'] = 'SUKSES! Data Berhasil Dihapus';
			header("Location: ./admin.php?page=pros&id=".$id."");
	die();}}
?>
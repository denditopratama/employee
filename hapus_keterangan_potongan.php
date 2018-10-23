
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
	$querys = mysqli_query($config, "UPDATE tbl_gaji SET pot_thr=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='jasprod'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET pot_jasprod=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='ongcut'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET pot_ongkos_cuti=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='bantuan'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET pot_bantuan=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='kesehatan'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET pot_kesehatan=0 WHERE id_user='$id_user' AND id_gaji='$id'");}	
	else
	if($nomer=='koperasi'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET pot_koperasi=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='koperasipusat'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET pot_koperasi_pusat=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='dapen'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET pot_iuran_dapen=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='purnakarya'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET pot_iuran_purnakarya=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='tht'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET pot_iuran_tht=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='kendaraan'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET pot_asuransi_kendaraan=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='jm'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET pot_saham_jasamarga=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='umr'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET pot_umr=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='jmb'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET pot_koperasi_jmb=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='cirebon'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET pot_koperasi_cirebon=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='dplk'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET pot_iuran_dplk=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='rapelpensiun'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET pot_rapel_jaminan_pensiun=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='jaminanpensiun'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET pot_jaminan_pensiun=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='bpjs'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET pot_bpjs_karyawan=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='jamsostek'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET pot_jamsostek=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='iuranpasti'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET pot_iuran_pasti=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='iuranskjm'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET pot_iuran_skjm=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='premi'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET pot_premi=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='rapelbjpsks'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET pot_rapel_bpjs_kesehatan=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='rapelbpjskt'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET pot_rapel_bpjs_ketenagakerjaan=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='potlain'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET pot_lainnya=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='telat'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET telat=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='lembur'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET lembur=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	else
	if($nomer=='absen'){
	$querys=mysqli_query($config, "UPDATE tbl_gaji SET absen=0 WHERE id_user='$id_user' AND id_gaji='$id'");}
	
	
	
	
	
	
			if($querys == true){
				 $_SESSION['succd'] = 'SUKSES! Data Berhasil Dihapus';
			header("Location: ./admin.php?page=pros&id=".$id."");
	die();}}
?>
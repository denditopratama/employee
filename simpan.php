<?php

$tgl_awal=mysqli_real_escape_string($config,$_REQUEST['tgl_awal1']);
$tgl_akhir=mysqli_real_escape_string($config,$_REQUEST['tgl_akhir1']);
$tempat=mysqli_real_escape_string($config,$_REQUEST['tempat1']);
$uraian=mysqli_real_escape_string($config,$_REQUEST['uraian1']);
$id=mysqli_real_escape_string($config,$_REQUEST['id']);										
$update=mysqli_query($config,"UPDATE tbl_pendidikan SET tgl_awal='$tgl_awal',tgl_akhir='$tgl_akhir',tempat='$tempat' 
WHERE id='$id' ");
echo 'sukses';
		
?>
<?php


      header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=report_kar_jmrb_jmp.xls");

session_start();
 
require('./include/config.php');
       
echo'
<h5>JMP</h5>
<table border="1">
<tr>
<th>No.</th>
<th>Nama</th>
<th>Jabatan</th>
<th>Status Aktif</th>
</tr>';
$no=1;
$notals=1;
$mon=mysqli_query($config,"SELECT * FROM tbl_user WHERE jmrb=0 AND(admin<>1 AND admin<>9 AND id_user<>9999) ORDER BY status_aktif,admin");
while($row=mysqli_fetch_array($mon)){
	echo'
	<tr>
	<td>'.$no++.'</td>
	<td>'.$row['nama'].'</td>';
	$mb=mysqli_query($config,"SELECT jabatan FROM tbl_ref_jabatan WHERE id='".$row['jabatan']."'");
	list($jabatan)=mysqli_fetch_array($mb);
	echo'
	<td>'.$jabatan.'</td>';
	if($row['status_aktif']==1){
		$stata='Aktif';
	} else {$stata='Tidak Aktif';}
	echo'
	<td>'.$stata.'</td>
	';
	
}
echo'
</tr>
	<tr>
	<td colspan="3">Jumlah</td>
	<td style="text-align:center">'.($no-1).'</td>
	</tr>
</table>';



echo'
<h5>JMRB</h5>
<table border="1">
<tr>
<th>No.</th>
<th>Nama</th>
<th>Jabatan</th>
<th>Status Aktif</th>
</tr>';
$no=1;
$notal=1;
$mon=mysqli_query($config,"SELECT * FROM tbl_user WHERE jmrb=1 AND(admin<>1 AND admin<>9 AND id_user<>9999) ORDER BY status_aktif,admin");
while($row=mysqli_fetch_array($mon)){
	echo'
	<tr>
	<td>'.$no++.'</td>
	<td>'.$row['nama'].'</td>';
	$mb=mysqli_query($config,"SELECT jabatan FROM tbl_ref_jabatan WHERE id='".$row['jabatan']."'");
	list($jabatan)=mysqli_fetch_array($mb);
	echo'
	<td>'.$jabatan.'</td>';
	if($row['status_aktif']==1){
		$stata='Aktif';
	} else {$stata='Tidak Aktif';}
	echo'
	<td>'.$stata.'</td>';

	
}
echo'
</tr>
	<tr>
	<td colspan="3">Jumlah</td>
	<td style="text-align:center">'.($no-1).'</td>
	</tr>
</table>';

?>


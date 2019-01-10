<?php


      header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=report_kar_jmrb_jmp.xls");

session_start();
 
require('./include/config.php');
if($_SESSION['admin']!=1) {

	echo'
	<h5>JMP</h5>
	<table border="1">
	<tr>
	<th>No.</th>
	<th>NIK</th>
	<th>Nama</th>
	<th>Jabatan</th>
	<th>Status Aktif</th>
	</tr>';
	$no=1;
	$notals=1;
	$mon=mysqli_query($config,"SELECT * FROM tbl_user WHERE jmrb=0 AND(admin<>1 AND admin<>9 AND id_user<>9999 AND status_aktif=1) ORDER BY status_aktif,admin");
	while($row=mysqli_fetch_array($mon)){
		echo'
		<tr>
		<td>'.$no++.'</td>
		<td>'.$row['nip'].'</td>
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
	<th>NIK</th>
	<th>Nama</th>
	<th>Jabatan</th>
	<th>Status Aktif</th>
	</tr>';
	$no=1;
	$notal=1;
	$mon=mysqli_query($config,"SELECT * FROM tbl_user WHERE jmrb=1 AND(admin<>1 AND admin<>9 AND id_user<>9999 AND status_aktif=1) ORDER BY status_aktif,admin");
	while($row=mysqli_fetch_array($mon)){
		echo'
		<tr>
		<td>'.$no++.'</td>
		<td>'.$row['nip'].'</td>
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

} else {

	echo'
	<h5>JMP</h5>
	<table border="1">
	<tr>
	<th>No.</th>
	<th>NIK</th>
	<th>Nama</th>
	<th>Jabatan</th>
	<th>Tanggal Bakti</th>
	<th>Gaji Pokok</th>
	<th>Tunjangan Jabatan</th>
	<th>Tunjangan Fungsional</th>
	<th>Tunjangan Transportasi</th>
	<th>Tunjangan Utilitas</th>
	<th>Tunjangan Perumahan</th>
	<th>Tunjangan Komunikasi</th>
	</tr>';
	$no=1;
	$notals=1;
	$mon=mysqli_query($config,"SELECT * FROM tbl_user WHERE jmrb=0 AND(admin<>1 AND admin<>9 AND id_user<>9999 AND status_aktif=1) ORDER BY status_aktif,admin");
	while($row=mysqli_fetch_array($mon)){
		echo'
		<tr>
		<td>'.$no++.'</td>
		<td>'.$row['nip'].'</td>
		<td>'.$row['nama'].'</td>';
		$mb=mysqli_query($config,"SELECT jabatan FROM tbl_ref_jabatan WHERE id='".$row['jabatan']."'");
		list($jabatan)=mysqli_fetch_array($mb);
		echo'
		<td>'.$jabatan.'</td>';
		$gjg=mysqli_query($config,"SELECT tgl_bakti FROM tbl_identitas WHERE id_user='".$row['id_user']."'");
		list($tgl_bakti)=mysqli_fetch_array($gjg);
		$jiga=mysqli_query($config,"SELECT gaji,t_jabatan,t_fungsional,t_transportasi,t_utilitas,t_perumahan,t_komunikasi FROM tbl_gaji_pokok WHERE status_karyawan='".$row['status_karyawan']."' AND(status_tugas='".$row['status_tugas']."' AND kelas_jabatan='".$row['kelas_jabatan']."') ");
		list($gajipokok,$t_jabatan,$t_fungsional,$t_transportasi,$t_utilitas,$t_perumahan,$t_komunikasi)=mysqli_fetch_array($jiga);

		echo'
		<td>'.date('d - M - Y', strtotime($tgl_bakti)).'</td>
		<td>'.$gajipokok.'</td>
		<td>'.$t_jabatan.'</td>
		<td>'.$t_fungsional.'</td>
		<td>'.$t_transportasi.'</td>
		<td>'.$t_utilitas.'</td>
		<td>'.$t_perumahan.'</td>
		<td>'.$t_komunikasi.'</td>
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
	<th>NIK</th>
	<th>Nama</th>
	<th>Jabatan</th>
	<th>Tanggal Bakti</th>
	<th>Gaji Pokok</th>
	<th>Tunjangan Jabatan</th>
	<th>Tunjangan Fungsional</th>
	<th>Tunjangan Transportasi</th>
	<th>Tunjangan Utilitas</th>
	<th>Tunjangan Perumahan</th>
	<th>Tunjangan Komunikasi</th>
	</tr>';
	$nod=1;
	$notalsd=1;
	$mond=mysqli_query($config,"SELECT * FROM tbl_user WHERE jmrb=1 AND(admin<>1 AND admin<>9 AND id_user<>9999 AND status_aktif=1) ORDER BY status_aktif,admin");
	while($rowd=mysqli_fetch_array($mond)){
		echo'
		<tr>
		<td>'.$nod++.'</td>
		<td>'.$rowd['nip'].'</td>
		<td>'.$rowd['nama'].'</td>';
		$mb=mysqli_query($config,"SELECT jabatan FROM tbl_ref_jabatan WHERE id='".$rowd['jabatan']."'");
		list($jabatand)=mysqli_fetch_array($mb);
		echo'
		<td>'.$jabatand.'</td>';
		$gjgs=mysqli_query($config,"SELECT tgl_bakti FROM tbl_identitas WHERE id_user='".$rowd['id_user']."'");
		list($tgl_baktid)=mysqli_fetch_array($gjgs);
		$jigas=mysqli_query($config,"SELECT gaji,t_jabatan,t_fungsional,t_transportasi,t_utilitas,t_perumahan,t_komunikasi FROM tbl_gaji_pokok WHERE status_karyawan='".$rowd['status_karyawan']."' AND(status_tugas='".$rowd['status_tugas']."' AND kelas_jabatan='".$rowd['kelas_jabatan']."') ");
		list($gajipokokd,$t_jabatand,$t_fungsionald,$t_transportasid,$t_utilitasd,$t_perumahand,$t_komunikasid)=mysqli_fetch_array($jigas);

		echo'
		<td>'.date('d - M - Y', strtotime($tgl_baktid)).'</td>
		<td>'.$gajipokokd.'</td>
		<td>'.$t_jabatand.'</td>
		<td>'.$t_fungsionald.'</td>
		<td>'.$t_transportasid.'</td>
		<td>'.$t_utilitasd.'</td>
		<td>'.$t_perumahand.'</td>
		<td>'.$t_komunikasid.'</td>
		';
	
		
	}
	echo'
	</tr>
		<tr>
		<td colspan="3">Jumlah</td>
		<td style="text-align:center">'.($nod-1).'</td>
		</tr>
	</table>';
}


?>


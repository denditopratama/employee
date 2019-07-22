<?php




session_start();
 
require('./include/config.php');
if(empty($_SESSION['admin']) && $_SESSION['gaji']!=1) {
    $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
    header("Location: ./");
    die();
}
$idgaji=mysqli_real_escape_string($config,$_POST['id_gaji']);
$mg=mysqli_query($config,"SELECT bulan FROM tbl_bulan_gaji WHERE id='$idgaji'");
list($tglx)=mysqli_fetch_array($mg);
$hari=date('d', strtotime($tglx));
$bulan=date('M', strtotime($tglx));
$tahun=date('Y', strtotime($tglx));
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Gaji-JMP-$bulan-$tahun.xls");

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
    <th>T. Jamsostek (4.54%)</th>
    <th>BPJSTK Jampes (2%)</th>
    <th>BPJSTK Jamkes (4%)</th>
    <th>T. PPh-21 TP</th>
    <th>T. PPh-21 TT</th>
    <th>Pot. Jamsostek</th>
    <th>Pot. BPJSTK Jampes</th>
    <th>Pot. BPJSTK Jamkes</th>
    <th>Pot. PPh-21 TP</th>
    <th>Pot. PPh-21 TT</th>
	<th>Penerimaan Lain</th>
	<th>Menit Keterlambatan</th>
	<th>Potongan Lain</th>
    <th>Penerimaan Bersih</th>
	</tr>';
	$no=1;
	$notals=1;
	$mona=mysqli_query($config,"SELECT tbl_gaji.*,tbl_user.status_tugas,tbl_user.status_karyawan,tbl_user.kelas_jabatan,tbl_user.nip,tbl_user.nama,tbl_user.jabatan,tbl_user.id_user,tbl_user.custom FROM tbl_gaji,tbl_user WHERE tbl_user.jmrb=0 AND(tbl_user.admin<>1 AND tbl_user.admin<>9 AND tbl_user.id_user<>9999 AND tbl_user.status_aktif=1 AND tbl_user.id_user=tbl_gaji.id_user AND tbl_gaji.status=1 AND tbl_gaji.id_gaji='$idgaji') ORDER BY tbl_user.status_aktif,tbl_user.admin");
	while($row=mysqli_fetch_array($mona)){
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
		$jiga=mysqli_query($config,"SELECT gaji,t_jabatan,t_fungsional,t_transportasi,t_utilitas,t_perumahan,t_komunikasi FROM tbl_gaji_pokok WHERE status_karyawan='".$row['status_karyawan']."' AND(status_tugas='".$row['status_tugas']."' AND kelas_jabatan='".$row['kelas_jabatan']."' AND custom='".$row['custom']."') ");
		list($gajipokok,$t_jabatan,$t_fungsional,$t_transportasi,$t_utilitas,$t_perumahan,$t_komunikasi)=mysqli_fetch_array($jiga);
		// fungsi untuk merubah nilai karyawan 3bulan pertama
		$nambah = date_diff(date_create('2019-06-30'), date_create($tgl_bakti))->y;
		$nambahh = date_diff(date_create('2019-06-30'), date_create($tgl_bakti))->m + $nambah*12;
		$agesd = date_diff(date_create($tgl_bakti), date_create('now'))->y;
		$ages = date_diff(date_create($tgl_bakti), date_create('now'))->m + $agesd*12;
			
			
				if ($ages<=3 && $row['status_karyawan'] == 5){
					$gajipokok=$gajipokok*80/100;
				} else {
					$gajipokok=$gajipokok;}
				if ($nambahh>=12 && $row['status_karyawan'] == 5){
					$gajipokok=$gajipokok+500000;
				} else {
					$gajipokok=$gajipokok;}
					//beres
		echo'
		<td>'.date('d - M - Y', strtotime($tgl_bakti)).'</td>
		<td>'.$gajipokok.'</td>
		<td>'.$t_jabatan.'</td>
		<td>'.$t_fungsional.'</td>
		<td>'.$t_transportasi.'</td>
		<td>'.$t_utilitas.'</td>
		<td>'.$t_perumahan.'</td>
        <td>'.$t_komunikasi.'</td>
        <td>'.$row['pen_jamsostek'].'</td>
        <td>'.$row['bpjstk_jampes'].'</td>
        <td>'.$row['bpjstk_jamkes'].'</td>
        <td>'.$row['tun_pph21_tetap'].'</td>
        <td>'.$row['tun_pph21_tidak'].'</td>
        <td>'.$row['pot_jamsostek_kar'].'</td>
        <td>'.$row['pot_bpjstk_jampes'].'</td>
        <td>'.$row['pot_bpjstk_jamkes'].'</td>
        <td>'.$row['pot_pph21_tetap'].'</td>
        <td>'.$row['pot_pph21_tidak'].'</td>
        ';
        $kl=mysqli_query($config,"SELECT SUM(jumlah) FROM tbl_penerimaan WHERE id_user='".$row['id_user']."' AND id_gaji='$idgaji'");
        list($penla)=mysqli_fetch_array($kl);
        $kls=mysqli_query($config,"SELECT SUM(jumlah) FROM tbl_potongan WHERE id_user='".$row['id_user']."' AND id_gaji='$idgaji'");
		list($potla)=mysqli_fetch_array($kls);
		$klmenit=mysqli_query($config,"SELECT total_menit FROM tbl_potongan WHERE id_user='".$row['id_user']."' AND id_gaji='$idgaji'");
		list($totmenit)=mysqli_fetch_array($klmenit);
        echo '
		<td>'.$penla.'</td>
		<td>'.$totmenit.'</td>
        <td>'.$potla.'</td>
        <td>'.$row['penerimaan_bersih'].'</td>';
		
	}
	echo'
	</tr>
		<tr>
		<td colspan="3">Jumlah</td>
		<td style="text-align:center">'.($no-1).'</td>
		</tr>
	</table>';
	
	
	

?>


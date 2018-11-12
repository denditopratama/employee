<?php
    //cek session
	session_start();
   if(empty($_SESSION['admin'])){
	   include 'logout.php';
   }
		 require('include/config.php');
		 
		$id_gaji=mysqli_real_escape_string($config,$_REQUEST['id_gaji']);
		$asf=mysqli_query($config,"SELECT bulan FROM tbl_bulan_gaji WHERE id='$id_gaji'");
		list($bulan)=mysqli_fetch_array($asf);
		$identitas=mysqli_query($config,"SELECT jabatan,status_karyawan,unit,sub_unit,nip,nama FROM tbl_user");
		list($jabatan,$status_karyawan,$unit,$sub_unit,$nik,$nama)=mysqli_fetch_array($identitas);
		

		
		if($status_karyawan==1){
			$status_karyawan='Komisaris';
		} else if($status_karyawan==2){
			$status_karyawan='Direksi';
		} else if($status_karyawan==3){
			$status_karyawan='KP';
		} else if($status_karyawan==4){
			$status_karyawan='Karyawan Tetap';
		} else if($status_karyawan==5){
			$status_karyawan='PKWT';
		} else if($status_karyawan==6){
			$status_karyawan='Koperasi';
		}
		
		
		
									$bulans=date('m',strtotime($bulan));
										if($bulans == "01"){
                                            $nm = "Januari";
                                        } elseif($bulans == "02"){
                                            $nm = "Februari";
                                        } elseif($bulans == "03"){
                                            $nm = "Maret";
                                        } elseif($bulans == "04"){
                                            $nm = "April";
                                        } elseif($bulans == "05"){
                                            $nm = "Mei";
                                        } elseif($bulans == "06"){
                                            $nm = "Juni";
                                        } elseif($bulans == "07"){
                                            $nm = "Juli";
                                        } elseif($bulans == "08"){
                                            $nm = "Agustus";
                                        } elseif($bulans == "09"){
                                            $nm = "September";
                                        } elseif($bulans == "10"){
                                            $nm = "Oktober";
                                        } elseif($bulans == "11"){
                                            $nm = "November";
                                        } elseif($bulans == "12"){
                                            $nm = "Desember";
                                        }
		$tahuns=date('Y',strtotime($bulan));
		ob_start();
	require('./fpdf/fpdf.php');
	
	class PDF extends FPDF
{
function Header(){
	if($this->page>2){
$this->Line(14,13,285,13);
$this->Line(285,13,285,32);
$this->Line(14,13,14,32);
$this->Line(14,32,285,32);

$this->SetFont('Arial','B',9);
$this->Cell(300 ,3,'',0,1);
$this->Cell(35 ,6,'',0,0);
$this->Cell(80 ,6,'IDENTITAS',0,0);
$this->Cell(100 ,6,'PENERIMAAN',0,0);
$this->Cell(35 ,6,'POTONGAN',0,1);

$this->SetFont('Arial','',7);
$this->Cell(4.5 ,6,'',0,0);
$this->Cell(4 ,6,'No.',0,0);
$this->Cell(50 ,6,'NIK / Nama',0,0,'C');
$this->Cell(7 ,6,'Klg',0,0);
$this->Cell(1 ,6,'',0,0);
$this->Cell(7 ,6,'JK',0,0);
$this->Cell(2 ,6,'',0,0);
$this->Cell(14 ,6,'Gaji',0,0,'C');
$this->Cell(14 ,6,'T. Fungsional',0,0);
$this->Cell(2 ,6,'',0,0);
$this->Cell(14 ,6,'T. Komunikasi',0,0);
$this->Cell(2 ,6,'',0,0);
$this->Cell(14 ,6,'T. Utilitas',0,0,'C');
$this->Cell(1 ,6,'',0,0);
$this->Cell(14 ,6,'BPJS Kestn',0,0,'C');
$this->Cell(1 ,6,'',0,0);
$this->Cell(15 ,6,'K. PPh-21',0,0,'C');
$this->Cell(15 ,6,'T.PPh TP',0,0,'C');
$this->Cell(15 ,6,'',0,0);
$this->Cell(1 ,6,'',0,0);
$this->Cell(14 ,6,'Jamsostek',0,0,'C');
$this->Cell(1 ,6,'',0,0);
$this->Cell(14 ,6,'BPJS Kestn',0,0,'C');
$this->Cell(1 ,6,'',0,0);
$this->Cell(14 ,6,'PPh-21 TP',0,0);
$this->Cell(1 ,6,'',0,0);
$this->Cell(15 ,6,'Kehadiran',0,0,'C');
$this->SetFont('Arial','B',7); 
$this->Cell(15 ,6,'PEN. BERSIH',0,1);
$this->SetFont('Arial','',7);
$this->Cell(58.5 ,6,'',0,0);
$this->Cell(8 ,6,'Peg',0,0);
$this->Cell(9 ,6,'Agm',0,0);
$this->Cell(15 ,6,'T. Jabatan',0,0);
$this->Cell(15 ,6,'T. Transport',0,0,'C');
$this->Cell(15 ,6,'T. Perumahan',0,0);
$this->Cell(1 ,6,'',0,0);
$this->Cell(14 ,6,'Jamsostek',0,0);
$this->Cell(15 ,6,'BPJS J.Pens',0,0);
$this->Cell(1 ,6,'',0,0);
$this->Cell(15 ,6,'Lain-Lain',0,0,'C');
$this->Cell(15 ,6,'T. PPh TT',0,0);
$this->SetFont('Arial','B',7);
$this->Cell(14 ,6,'TOTAL',0,0,'C');
$this->Cell(1 ,6,'',0,0);
$this->SetFont('Arial','',7);
$this->Cell(15 ,6,'BPJS J.Pens',0,0);
$this->Cell(15 ,6,'Lain-Lain',0,0,'C');
$this->Cell(15 ,6,'PPh-21 TT',0,0);
$this->SetFont('Arial','B',7);
$this->Cell(15 ,6,'TOTAL',0,1,'C'); 
$this->Cell(10 ,6,'',0,1); 
	}
}
function Footer(){
	if($this->page>1){
   $this->SetLineWidth(0.4);
	$this->SetFont('Arial','',7);
	$this->Cell(1,1,'',0,1);
	$this->Line(14,198,285,198);
	  $this->SetY(-13);
	  $this->SetX(-510);
        $this->SetFont('Arial','',7);
        $this->Cell(0,7,'PT Jasamarga Properti : '.date('d').' - '.date('M').' - '.date('Y').'',0,0,'C');
	   $this->SetX(268);
        $this->SetFont('Arial','I',7);
        $this->Cell(0,7,'Halaman '.$this->PageNo().'/{nb}',0,0,'C');
	}
}
}

$pdf = new PDF('L','mm','A4');
$pdf->AliasNbPages();

$pdf->AddPage();

//COVER NYA
$pdf->SetFont('Arial','B',24);

$pdf->Image('./upload/logopdf.png',40,40,-300);

$pdf->Line(30,30,267,30);
$pdf->Line(30,30,30,179);

$pdf->Line(267,30,267,179);
$pdf->Line(30,179,267,179);
$pdf->Cell(57 ,80,'',0,1);
$pdf->Cell(73 ,0,'',0,0);
$pdf->Cell(60 ,14,'DAFTAR GAJI / PENGHASILAN',0,1);
$pdf->Cell(63 ,0,'',0,0);
$pdf->SetFont('Arial','B',36);
$pdf->Multicell(150,11,''.strtoupper($nm).' '.$tahuns.'',0,'C');


//RINCIAN PENGHASILAN GAJI DIREKSI DAN KOMISARIS

$pdf->AddPage();
$pdf->SetFont('Arial','B',13);
$pdf->Image('./upload/logopdf.png',15,10,-500);

$pdf->Cell(0 ,0,'',0,1);
$pdf->Cell(85 ,0,'',0,0);
$pdf->Multicell(120,6,'RINCIAN PERHITUNGAN PENGHASILAN KARYAWAN BULAN : '.strtoupper($nm).' '.$tahuns.'',0,'C');

$pdf->Line(14,25,285,25);
$pdf->Line(14,23,285,23);
$pdf->Line(285,25,285,44);
$pdf->Line(14,25,14,44);
$pdf->Line(14,44,285,44);

$pdf->SetFont('Arial','B',9);
$pdf->Cell(300 ,3,'',0,1);
$pdf->Cell(35 ,6,'',0,0);
$pdf->Cell(80 ,6,'IDENTITAS',0,0);
$pdf->Cell(100 ,6,'PENERIMAAN',0,0);
$pdf->Cell(35 ,6,'POTONGAN',0,1);

$pdf->SetFont('Arial','',7);
$pdf->Cell(4.5 ,6,'',0,0);
$pdf->Cell(4 ,6,'No.',0,0);
$pdf->Cell(50 ,6,'NIK / Nama',0,0,'C');
$pdf->Cell(7 ,6,'Klg',0,0);
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(7 ,6,'JK',0,0);
$pdf->Cell(2 ,6,'',0,0);
$pdf->Cell(14 ,6,'Gaji',0,0,'C');
$pdf->Cell(14 ,6,'T. Fungsional',0,0);
$pdf->Cell(2 ,6,'',0,0);
$pdf->Cell(14 ,6,'T. Komunikasi',0,0);
$pdf->Cell(2 ,6,'',0,0);
$pdf->Cell(14 ,6,'T. Utilitas',0,0,'C');
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(14 ,6,'BPJS Kestn',0,0,'C');
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(15 ,6,'K. PPh-21',0,0,'C');
$pdf->Cell(15 ,6,'T.PPh TP',0,0,'C');
$pdf->Cell(15 ,6,'',0,0);
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(14 ,6,'Jamsostek',0,0,'C');
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(14 ,6,'BPJS Kestn',0,0,'C');
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(14 ,6,'PPh-21 TP',0,0);
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(15 ,6,'Kehadiran',0,0,'C');
$pdf->SetFont('Arial','B',7); 
$pdf->Cell(15 ,6,'PEN. BERSIH',0,1);
$pdf->SetFont('Arial','',7);
$pdf->Cell(58.5 ,6,'',0,0);
$pdf->Cell(8 ,6,'Peg',0,0);
$pdf->Cell(9 ,6,'Agm',0,0);
$pdf->Cell(15 ,6,'T. Jabatan',0,0);
$pdf->Cell(15 ,6,'T. Transport',0,0,'C');
$pdf->Cell(15 ,6,'T. Perumahan',0,0);
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(14 ,6,'Jamsostek',0,0);
$pdf->Cell(15 ,6,'BPJS J.Pens',0,0);
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(15 ,6,'Lain-Lain',0,0,'C');
$pdf->Cell(15 ,6,'T. PPh TT',0,0);
$pdf->SetFont('Arial','B',7);
$pdf->Cell(14 ,6,'TOTAL',0,0,'C');
$pdf->Cell(1 ,6,'',0,0);
$pdf->SetFont('Arial','',7);
$pdf->Cell(15 ,6,'BPJS J.Pens',0,0);
$pdf->Cell(15 ,6,'Lain-Lain',0,0,'C');
$pdf->Cell(15 ,6,'PPh-21 TT',0,0);
$pdf->SetFont('Arial','B',7);
$pdf->Cell(15 ,6,'TOTAL',0,1,'C'); 
$pdf->Cell(10 ,6,'',0,1);  

//ISI
$hj=mysqli_query($config,"SELECT * FROM tbl_department");

while($rows=mysqli_fetch_array($hj)){
	$nomer=0;
	$ngetgaji=0;
	$ngetfungsional=0;
	$ngetkomunikasi=0;
	$ngetutilitas=0;
	$ngetjabatan=0;
	$ngettransport=0;
	$ngetperumahan=0;
	$ngetjamsostek=0;
	$ngetbpjskestn=0;
	$ngetpphtp=0;
	$ngetpotbpjskstn=0;
	$ngetpotpph21tetap=0;
	$ngetkehadiran=0;
	$ngetbersih=0;
	$ngettunjabat=0;
	$ngetpenjamsostek=0;
	$ngetbpjsjampes=0;
	$ngetlain=0;
	$ngetpphtt=0;
	$ngettotalpenerimaan=0;
	$ngetpotbpjspens=0;
	$ngetpotlain=0;
	$ngetpotpph21tidak=0;
	$ngentotal=0;
	$ngenkor=0;
$pdf->Cell(6 ,6,'',0,1);
$pdf->Cell(6 ,6,'',0,0);	
$pdf->SetTextColor(255,69,0);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(46 ,6,'UNIT KERJA : '.$rows['unit_kerja'].' ',0,1);
$pdf->SetTextColor(0,0,0);
$gh=mysqli_query($config,"SELECT * FROM tbl_user WHERE unit='".$rows['kode_unit']."' AND(status_aktif=1 AND id_user<>9999 AND admin<>9 AND admin<>1) ORDER BY status_karyawan,kelas_jabatan ASC");
$no=1;
while($row=mysqli_fetch_array($gh)){
	$ghg=mysqli_query($config,"SELECT nama,nip,unit,status_karyawan,status_tugas,admin,jabatan FROM tbl_user WHERE id_user='".$row['id_user']."'");
	list($nama,$nip,$unit,$status_karyawan,$status_tugas,$admin,$jabatan)=mysqli_fetch_array($ghg);
	
	$hjb=mysqli_query($config,"SELECT jabatan FROM tbl_ref_jabatan WHERE id='$jabatan'");
	list($jabatanteks)=mysqli_fetch_array($hjb);
	
	$ghgd=mysqli_query($config,"SELECT status_keluarga,jenis_kelamin,agama,tgl_bakti FROM tbl_identitas WHERE id_user='".$row['id_user']."'");
	list($status_keluarga,$jenis_kelamin,$agama,$tgl_bakti)=mysqli_fetch_array($ghgd);
	
	$ghgd=mysqli_query($config,"SELECT pen_jamsostek,bpjstk_jampes,bpjstk_jamkes,tun_pph21_tetap,tun_pph21_tidak,pot_jamsostek_kar,pot_bpjstk_jampes,pot_bpjstk_jamkes,pot_pph21_tetap,pot_pph21_tidak,total_penerimaan,total_potongan,penerimaan_bersih,koreksi_pph21 FROM tbl_gaji WHERE id_user='".$row['id_user']."' AND id_gaji='$id_gaji'");
	list($pen_jamsostek,$bpjstk_jampes,$bpjstk_jamkes,$tun_pph21_tetap,$tun_pph21_tidak,$pot_jamsostek_kar,$pot_bpjstk_jampes,$pot_bpjstk_jamkes,$pot_pph21_tetap,$pot_pph21_tidak,$total_penerimaan,$total_potongan,$penerimaanbersih,$koreksipph)=mysqli_fetch_array($ghgd);
	
	$kof=mysqli_query($config,"SELECT gaji,t_jabatan,t_fungsional,t_transportasi,t_utilitas,t_perumahan,t_komunikasi FROM tbl_gaji_pokok WHERE kelas_jabatan='".$row['kelas_jabatan']."' AND(status_tugas='$status_tugas' AND status_karyawan='$status_karyawan')");
	list($gajipokok,$t_jabatan,$t_fungsional,$t_transportasi,$t_utilitas,$t_perumahan,$t_komunikasi)=mysqli_fetch_array($kof);
	
	$jgm=mysqli_query($config,"SELECT SUM(jumlah) FROM tbl_penerimaan WHERE id_user='".$row['id_user']."' AND id_gaji='$id_gaji'");
	list($jumlahlain)=mysqli_fetch_array($jgm);
	
	$jgmf=mysqli_query($config,"SELECT SUM(jumlah) FROM tbl_potongan WHERE id_user='".$row['id_user']."' AND id_gaji='$id_gaji'");
	list($jumlahpotlain)=mysqli_fetch_array($jgmf);
	
	$telat=mysqli_query($config,"SELECT SUM(jumlah) FROM tbl_potongan WHERE id_user='".$row['id_user']."' AND(id_gaji='$id_gaji' AND id=28)");
	list($kehadiran)=mysqli_fetch_array($telat);
	
														if($status_keluarga == 0){
                                                            $statkel = 'D/0';
                                                        } else if($status_keluarga == 1) {
                                                            $statkel = 'D/1';
                                                        } else if($status_keluarga == 2) {
                                                            $statkel = 'D/2';
                                                        } else if($status_keluarga == 3) {
                                                            $statkel = 'D/3';
                                                        } else if($status_keluarga == 4) {
                                                            $statkel = 'D/4';
                                                        } else if($status_keluarga == 5) {
                                                            $statkel = 'D/5';
                                                        } else if($status_keluarga == 6) {
                                                            $statkel = 'D/6';
                                                        } else if($status_keluarga == 7) {
                                                            $statkel = 'D/7';
                                                        } else if($status_keluarga == 8) {
                                                            $statkel = 'D/8';
                                                        } else if($status_keluarga == 9) {
                                                            $statkel = 'D/9';
                                                        } else if($status_keluarga == 11) {
                                                            $statkel = 'J/0';
                                                        } else if($status_keluarga == 12) {
                                                            $statkel = 'J/1';
                                                        } else if($status_keluarga == 13) {
                                                            $statkel = 'J/2';
                                                        } else if($status_keluarga == 14) {
                                                            $statkel = 'J/3';
                                                        } else if($status_keluarga == 15) {
                                                            $statkel = 'J/4';
                                                        } else if($status_keluarga == 16) {
                                                            $statkel = 'J/5';
                                                        } else if($status_keluarga == 17) {
                                                            $statkel = 'J/6';
                                                        } else if($status_keluarga == 18) {
                                                            $statkel = 'J/7';
                                                        } else if($status_keluarga == 19) {
                                                            $statkel = 'J/8';
                                                        } else if($status_keluarga == 20) {
                                                            $statkel = 'J/9';
                                                        } else if($status_keluarga == 22) {
                                                            $statkel = 'K/0';
                                                        } else if($status_keluarga == 23) {
                                                            $statkel = 'K/1';
                                                        } else if($status_keluarga == 24) {
                                                            $statkel = 'K/2';
                                                        } else if($status_keluarga == 25) {
                                                            $statkel = 'K/3';
                                                        } else if($status_keluarga == 26) {
                                                            $statkel = 'K/4';
                                                        } else if($status_keluarga == 27) {
                                                            $statkel = 'K/5';
                                                        } else if($status_keluarga == 28) {
                                                            $statkel = 'K/6';
                                                        } else if($status_keluarga == 29) {
                                                            $statkel = 'K/7';
                                                        } else if($status_keluarga == 30) {
                                                            $statkel = 'K/8';
                                                        } else if($status_keluarga == 31) {
                                                            $statkel = 'K/9';
                                                        } else if($status_keluarga == 32) {
                                                            $statkel = 'TK';
                                                        } else if($status_keluarga == 33) {
                                                            $statkel = 'TK';
                                                        }
														
											if($status_karyawan==1){
												$statkar='KM';
											}
											if($status_karyawan==2){
												$statkar='DR';
											}
											if($status_karyawan==3){
												$statkar='KP';
											}
											if($status_karyawan==4){
												$statkar='KT';
											}
											if($status_karyawan==5){
												$statkar='PK';
											}
											if($status_karyawan==6){
												$statkar='KR';
											}
											
											if($agama==1){
												$agama='I';
											}
											if($agama==2){
												$agama='P';
											}
											if($agama==3){
												$agama='K';
											}
											if($agama==4){
												$agama='H';
											}
											if($agama==5){
												$agama='B';
											}
											if($agama==6){
												$agama='KH';
											}
	
$pdf->Cell(300 ,8,'',0,1);
$pdf->SetFont('Arial','B',7);

$pdf->Cell(4.5 ,1,'',0,0);
$pdf->Cell(4 ,6,''.$no++.'.',0,0);
$pdf->Cell(50 ,6,''.$nip.'  '.$nama.'',0,'L');
$pdf->SetFont('Arial','',7);
$pdf->Cell(7 ,6,''.$statkel.'',1,0,'C');
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(7 ,6,''.$jenis_kelamin.'',1,0,'C');
$pdf->Cell(2 ,6,'',0,0);
$pdf->Cell(15 ,6,''.number_format($gajipokok , 0, ',', '.').'',0,0,'R');
$pdf->Cell(15 ,6,''.number_format($t_fungsional , 0, ',', '.').'',0,0,'R');
$pdf->Cell(15 ,6,''.number_format($t_komunikasi , 0, ',', '.').'',0,0,'R');
$pdf->Cell(15 ,6,''.number_format($t_utilitas , 0, ',', '.').'',0,0,'R');
$pdf->Cell(15 ,6,''.number_format($bpjstk_jamkes , 0, ',', '.').'',0,0,'R');
$pdf->Cell(15 ,6,''.number_format($koreksipph , 0, ',', '.').'',0,0,'R');
$pdf->Cell(15 ,6,''.number_format($tun_pph21_tetap , 0, ',', '.').'',0,0,'R');
$pdf->Cell(15 ,6,'',0,0);
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(15 ,6,''.number_format($pot_jamsostek_kar , 0, ',', '.').'',0,0,'R');
$pdf->Cell(15 ,6,''.number_format($pot_bpjstk_jamkes , 0, ',', '.').'',0,0,'R');
$pdf->Cell(15 ,6,''.number_format($pot_pph21_tetap , 0, ',', '.').'',0,0,'R');
$pdf->Cell(1 ,6,'',0,0); 
$pdf->Cell(15 ,6,''.number_format($kehadiran , 0, ',', '.').'',0,0,'R');
$pdf->SetFont('Arial','B',7);
$pdf->Cell(1 ,6,'',0,0); 
$pdf->SetFillColor(176,224,230);
$pdf->Cell(15 ,6,''.number_format($penerimaanbersih , 0, ',', '.').'',1,1,'R',1);
$pdf->SetFont('Arial','',7);
$pdf->Cell(77 ,1,'',0,1);
$pdf->Cell(8.5 ,6,'',0,0);
$pdf->Cell(16 ,6,'Tgl Masuk : '.date('d',strtotime($tgl_bakti)).' - '.date('m',strtotime($tgl_bakti)).' - '.date('Y',strtotime($tgl_bakti)).'',0,0,'L');
$pdf->Cell(34 ,6,'',0,0);
$pdf->Cell(7 ,6,''.$statkar.'',1,0,'C');
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(7 ,6,''.$agama.'',1,0,'C');
$pdf->Cell(2 ,6,'',0,0);
$pdf->Cell(15 ,6,''.number_format($t_jabatan , 0, ',', '.').'',0,0,'R');
$pdf->Cell(15 ,6,''.number_format($t_transportasi , 0, ',', '.').'',0,0,'R');
$pdf->Cell(15 ,6,''.number_format($t_perumahan , 0, ',', '.').'',0,0,'R');
$pdf->Cell(15 ,6,''.number_format($pen_jamsostek , 0, ',', '.').'',0,0,'R');
$pdf->Cell(15 ,6,''.number_format($bpjstk_jampes , 0, ',', '.').'',0,0,'R');
$pdf->Cell(15 ,6,''.number_format($jumlahlain , 0, ',', '.').'',0,0,'R');
$pdf->Cell(15 ,6,''.number_format($tun_pph21_tidak , 0, ',', '.').'',0,0,'R');
$pdf->SetFont('Arial','B',7);
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(15 ,6,''.number_format($total_penerimaan , 0, ',', '.').'',1,0,'R');
$pdf->SetFont('Arial','',7);
$pdf->Cell(15 ,6,''.number_format($pot_bpjstk_jampes , 0, ',', '.').'',0,0,'R');
$pdf->Cell(15 ,6,''.number_format($jumlahpotlain , 0, ',', '.').'',0,0,'R');
$pdf->Cell(15 ,6,''.number_format($pot_pph21_tidak , 0, ',', '.').'',0,0,'R');
$pdf->SetFont('Arial','B',7);
$pdf->Cell(1 ,6,'',0,0); 
$pdf->Cell(15 ,6,''.number_format($total_potongan , 0, ',', '.').'',1,0,'R');
$pdf->SetFont('Arial','',7);
$pdf->Cell(10 ,6,'',0,1);
$pdf->Cell(8.5 ,6,'',0,0);
$pdf->Cell(50 ,6,'Jabatan : '.$jabatanteks.'',0,1,'L');
$xv=$pdf->GetX();
$yv=$pdf->GetY();
$pdf->SetXY($xv, $yv+6);
$pdf->Line($xv+4.4,$yv+5,$xv+274.5,$yv+5);
$nomer=$nomer+1;
$ngetgaji=$ngetgaji+$gajipokok;
$ngetfungsional=$ngetfungsional+$t_fungsional;
$ngetkomunikasi=$ngetkomunikasi+$t_komunikasi;
$ngetutilitas=$ngetutilitas+$t_utilitas;
$ngetbpjskestn=$ngetbpjskestn+$bpjstk_jamkes;
$ngetpphtp=$ngetpphtp+$tun_pph21_tetap;
$ngetjamsostek=$ngetjamsostek+$pot_jamsostek_kar;
$ngetpotbpjskstn=$ngetpotbpjskstn+$pot_bpjstk_jamkes;
$ngetpotpph21tetap=$ngetpotpph21tetap+$pot_pph21_tetap;
$ngetkehadiran=$ngetkehadiran+$kehadiran;
$ngetbersih=$ngetbersih+$penerimaanbersih;
$ngettunjabat=$ngettunjabat+$t_jabatan;
$ngettransport=$ngettransport+$t_transportasi;
$ngetperumahan=$ngetperumahan+$t_perumahan;
$ngetpenjamsostek=$ngetpenjamsostek+$pen_jamsostek;
$ngetbpjsjampes=$ngetbpjsjampes+$bpjstk_jampes;
$ngetlain=$ngetlain+$jumlahlain;
$ngetpphtt=$ngetpphtt+$tun_pph21_tidak;
$ngettotalpenerimaan=$ngettotalpenerimaan+$total_penerimaan;
$ngetpotbpjspens=$ngetpotbpjspens+$pot_bpjstk_jampes;
$ngetpotlain=$ngetpotlain+$jumlahpotlain;
$ngetpotpph21tidak=$ngetpotpph21tidak+$pot_pph21_tidak;
$ngentotal=$ngentotal+$total_potongan;
$ngenkor=$ngenkor+$koreksipph;
}

//totgaji=mysqli_query($config,"SELECT SUM(
//TOTAL PER UNIT KERJA
$pdf->Cell(300 ,5,'',0,1);
$pdf->SetFont('Arial','B',7);

$pdf->Cell(4 ,1,'',0,0);
$pdf->SetFillColor(255,255,0);
$pdf->MultiCell(53 ,8,'TOTAL PER UNIT KERJA',1,'C',1);
$pdf->SetFont('Arial','',7);
$x1=$pdf->GetX();
$y1=$pdf->GetY();
$pdf->SetXY($x1 + 58.5, $y1-8);
$pdf->MultiCell(15.5 ,8,''.$nomer.' Orang',1,'C',1);
$x2=$pdf->GetX();
$y2=$pdf->GetY();
$pdf->SetXY($x2 + 75.5, $y2-10);
$pdf->Cell(15 ,6,''.number_format($ngetgaji , 0, ',', '.').'',1,0,'R',1);
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(14 ,6,''.number_format($ngetfungsional , 0, ',', '.').'',1,0,'R',1);
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(14 ,6,''.number_format($ngetkomunikasi , 0, ',', '.').'',1,0,'R',1);
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(14 ,6,''.number_format($ngetutilitas , 0, ',', '.').'',1,0,'R',1);
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(14 ,6,''.number_format($ngetbpjskestn , 0, ',', '.').'',1,0,'R',1);
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(14 ,6,''.number_format($ngenkor , 0, ',', '.').'',1,0,'R',1);
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(14 ,6,''.number_format($ngetpphtp , 0, ',', '.').'',1,0,'R',1);
$pdf->Cell(15 ,6,'',0,0);
$pdf->Cell(2 ,6,'',0,0);
$pdf->Cell(14 ,6,''.number_format($ngetjamsostek , 0, ',', '.').'',1,0,'R',1);
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(14 ,6,''.number_format($ngetpotbpjskstn , 0, ',', '.').'',1,0,'R',1);
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(14 ,6,''.number_format($ngetpotpph21tetap , 0, ',', '.').'',1,0,'R',1);
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(15 ,6,''.number_format($ngetkehadiran , 0, ',', '.').'',1,0,'R',1);
$pdf->Cell(1 ,6,'',0,0);
$pdf->SetFont('Arial','B',7);
$pdf->Cell(15 ,6,''.number_format($ngetbersih , 0, ',', '.').'',1,1,'R',1);
$pdf->SetFont('Arial','',7);
$pdf->Cell(77 ,1,'',0,1);
$pdf->Cell(75.5 ,6,'',0,0);

$pdf->Cell(15 ,6,''.number_format($ngettunjabat , 0, ',', '.').'',1,0,'R',1);
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(14 ,6,''.number_format($ngettransport , 0, ',', '.').'',1,0,'R',1);
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(14 ,6,''.number_format($ngetperumahan , 0, ',', '.').'',1,0,'R',1);
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(14 ,6,''.number_format($ngetpenjamsostek , 0, ',', '.').'',1,0,'R',1);
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(14 ,6,''.number_format($ngetbpjsjampes , 0, ',', '.').'',1,0,'R',1);
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(14 ,6,''.number_format($ngetlain , 0, ',', '.').'',1,0,'R',1);
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(14 ,6,''.number_format($ngetpphtt , 0, ',', '.').'',1,0,'R',1);
$pdf->SetFont('Arial','B',7);
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(15 ,6,''.number_format($ngettotalpenerimaan , 0, ',', '.').'',1,0,'R',1);
$pdf->SetFont('Arial','',7);
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(14 ,6,''.number_format($ngetpotbpjspens , 0, ',', '.').'',1,0,'R',1);
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(14 ,6,''.number_format($ngetpotlain , 0, ',', '.').'',1,0,'R',1);
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(14 ,6,''.number_format($ngetpotpph21tidak , 0, ',', '.').'',1,0,'R',1);
$pdf->SetFont('Arial','B',7);
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(15 ,6,''.number_format($ngentotal , 0, ',', '.').'',1,0,'R',1);
$pdf->Cell(10 ,6,'',0,1); 
}
$man=mysqli_query($config,"SELECT nama,nip FROM tbl_user WHERE jabatan=108 AND status_aktif=1");
list($manager,$nomornip)=mysqli_fetch_array($man);
$gman=mysqli_query($config,"SELECT nama,nip FROM tbl_user WHERE jabatan=106 AND status_aktif=1");
list($genman,$nomornipgm)=mysqli_fetch_array($gman);
$jabatman=mysqli_query($config,"SELECT jabatan FROM tbl_ref_jabatan WHERE id=108");
list($managers)=mysqli_fetch_array($jabatman);
$jabatgen=mysqli_query($config,"SELECT jabatan FROM tbl_ref_jabatan WHERE id=106");
list($genmans)=mysqli_fetch_array($jabatgen);

$pdf->SetFont('Arial','B',9);
$pdf->Cell(1 ,6,'',0,1,'C');
$pdf->Cell(36 ,6,'',0,0,'C');
$pdf->Cell(34 ,6,'Mengetahui,',0,0,'C');
$pdf->Cell(125 ,6,'',0,0,'C');
$pdf->Cell(65 ,6,'Jakarta, '.date('d').' - '.date('F').' - '.date('Y').'',0,1,'C');
$pdf->Cell(13 ,6,'',0,0,'C');
$pdf->Cell(85 ,6,''.strtoupper($genmans).'',0,0,'C');
$pdf->Cell(100 ,1,'',0,0,'C');
$pdf->Cell(60 ,6,''.strtoupper($managers).'',0,0,'C');
$pdf->Cell(1 ,26,'',0,1,'C');
$pdf->Cell(35.5 ,1,'',0,0,'C');
$pdf->Cell(34 ,6,''.strtoupper($genman).'',0,0,'C');
$pdf->Cell(140 ,1,'',0,0,'C');
$pdf->Cell(34 ,6,''.strtoupper($manager).'',0,1,'C');
$pdf->Cell(35.5 ,1,'',0,0,'C');
$pdf->Cell(34 ,6,'NIP : '.$nomornipgm.'',0,0,'C');
$pdf->Cell(140 ,1,'',0,0,'C');
$pdf->Cell(34 ,6,'NIP : '.$nomornip.'',0,0,'C');




$pdf->Output();


?>
<?php
    //cek session
	session_start();
   if(empty($_SESSION['admin'])){
	   include 'logout.php';
   }
		 require('include/config.php');
		 
		$id_gaji=mysqli_real_escape_string($config,$_REQUEST['zero']);
		$id_user=mysqli_real_escape_string($config,$_REQUEST['zeros']);
		$asf=mysqli_query($config,"SELECT bulan FROM tbl_bulan_gaji WHERE id='$id_gaji'");
		list($bulan)=mysqli_fetch_array($asf);
		$identitas=mysqli_query($config,"SELECT jabatan,status_karyawan,unit,sub_unit,nip,nama FROM tbl_user WHERE id_user='$id_user'");
		list($jabatan,$status_karyawan,$unit,$sub_unit,$nik,$nama)=mysqli_fetch_array($identitas);
		
		$oi=mysqli_query($config,"SELECT jabatan FROM tbl_ref_jabatan WHERE id='$jabatan'");
		list($jabatans)=mysqli_fetch_array($oi);
		
		$ghgod=mysqli_query($config,"SELECT sub_unit FROM tbl_sub_unit WHERE kode_unit='$unit'");
		list($gobloz)=mysqli_fetch_array($ghgod);
		
		$ghgods=mysqli_query($config,"SELECT jenis_bank,no_npwp,tgl_bakti,status_keluarga FROM tbl_identitas WHERE id_user='$id_user'");
		list($kode_bank,$npwp,$tgl_bakti,$status_keluarga)=mysqli_fetch_array($ghgods);
		
		$ghgodf=mysqli_query($config,"SELECT nama_bank FROM tbl_ref_bank WHERE kode_bank='$kode_bank'");
		list($nama_bank)=mysqli_fetch_array($ghgodf);
		
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
		
		if($status_keluarga == 0){
                                                            $statkel = 'Duda / Anak 0';
                                                        } else if($status_keluarga == 1) {
                                                            $statkel = 'Duda / Anak 1';
                                                        } else if($status_keluarga == 2) {
                                                            $statkel = 'Duda / Anak 2';
                                                        } else if($status_keluarga == 3) {
                                                            $statkel = 'Duda / Anak 3';
                                                        } else if($status_keluarga == 4) {
                                                            $statkel = 'Duda / Anak 4';
                                                        } else if($status_keluarga == 5) {
                                                            $statkel = 'Duda / Anak 5';
                                                        } else if($status_keluarga == 6) {
                                                            $statkel = 'Duda / Anak 6';
                                                        } else if($status_keluarga == 7) {
                                                            $statkel = 'Duda / Anak 7';
                                                        } else if($status_keluarga == 8) {
                                                            $statkel = 'Duda / Anak 8';
                                                        } else if($status_keluarga == 9) {
                                                            $statkel = 'Duda / Anak 9';
                                                        } else if($status_keluarga == 11) {
                                                            $statkel = 'Janda / Anak 0';
                                                        } else if($status_keluarga == 12) {
                                                            $statkel = 'Janda / Anak 1';
                                                        } else if($status_keluarga == 13) {
                                                            $statkel = 'Janda / Anak 2';
                                                        } else if($status_keluarga == 14) {
                                                            $statkel = 'Janda / Anak 3';
                                                        } else if($status_keluarga == 15) {
                                                            $statkel = 'Janda / Anak 4';
                                                        } else if($status_keluarga == 16) {
                                                            $statkel = 'Janda / Anak 5';
                                                        } else if($status_keluarga == 17) {
                                                            $statkel = 'Janda / Anak 6';
                                                        } else if($status_keluarga == 18) {
                                                            $statkel = 'Janda / Anak 7';
                                                        } else if($status_keluarga == 19) {
                                                            $statkel = 'Janda / Anak 8';
                                                        } else if($status_keluarga == 20) {
                                                            $statkel = 'Janda / Anak 9';
                                                        } else if($status_keluarga == 22) {
                                                            $statkel = 'Kawin / Anak 0';
                                                        } else if($status_keluarga == 23) {
                                                            $statkel = 'Kawin / Anak 1';
                                                        } else if($status_keluarga == 24) {
                                                            $statkel = 'Kawin / Anak 2';
                                                        } else if($status_keluarga == 25) {
                                                            $statkel = 'Kawin / Anak 3';
                                                        } else if($status_keluarga == 26) {
                                                            $statkel = 'Kawin / Anak 4';
                                                        } else if($status_keluarga == 27) {
                                                            $statkel = 'Kawin / Anak 5';
                                                        } else if($status_keluarga == 28) {
                                                            $statkel = 'Kawin / Anak 6';
                                                        } else if($status_keluarga == 29) {
                                                            $statkel = 'Kawin / Anak 7';
                                                        } else if($status_keluarga == 30) {
                                                            $statkel = 'Kawin / Anak 8';
                                                        } else if($status_keluarga == 31) {
                                                            $statkel = 'Kawin / Anak 9';
                                                        } else if($status_keluarga == 32) {
                                                            $statkel = 'Tidak Kawin';
                                                        } else if($status_keluarga == 33) {
                                                            $statkel = 'Belum Kawin';
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

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);
$pdf->Image('./upload/logopdf.png',10,10,-400);
$pdf->Cell(189 ,15,'',0,1);//end of line
$pdf->Cell(57 ,23,'',0,0);//end of line
$pdf->Multicell(80,6,'Rincian Penghasilan Karyawan '.$nm.' '.$tahuns.'',0,'C');
$pdf->Cell(189 ,8,'',0,1);//end of line
$pdf->Line(10,49,200,49);
$pdf->Line(10,87,200,87);
$pdf->Line(10,49,10,287);
$pdf->Line(200,49,200,287);
$pdf->Line(10,287,200,287);
$pdf->Line(105,87,105,240);

$pdf->Line(10,234,200,234);
$pdf->Line(10,240,200,240);
$pdf->Line(10,250,200,250);



//Cell(width , height , text , border , end line , [align] )


//make a dummy empty cell as a vertical spacer




//add dummy cell at beginning of each line for indentation
						$bulanss=date('m',strtotime($tgl_bakti));
										if($bulanss == "01"){
                                            $nms = "Januari";
                                        } elseif($bulanss == "02"){
                                            $nms = "Februari";
                                        } elseif($bulanss == "03"){
                                            $nms = "Maret";
                                        } elseif($bulanss == "04"){
                                            $nms = "April";
                                        } elseif($bulanss == "05"){
                                            $nms = "Mei";
                                        } elseif($bulanss == "06"){
                                            $nms = "Juni";
                                        } elseif($bulanss == "07"){
                                            $nms = "Juli";
                                        } elseif($bulanss == "08"){
                                            $nms = "Agustus";
                                        } elseif($bulanss == "09"){
                                            $nms = "September";
                                        } elseif($bulanss == "10"){
                                            $nms = "Oktober";
                                        } elseif($bulanss == "11"){
                                            $nms = "November";
                                        } elseif($bulanss == "12"){
                                            $nms = "Desember";
                                        }
//make a dummy empty cell as a vertical spacer


//invoice contents
$pdf->SetFont('Arial','B',10);
$pdf->Cell(120 ,1,' Unit Kerja : '.$gobloz.'',0,0);
$pdf->Cell(130 ,1,'Pembayaran : '.$nama_bank.'',0,0);
$pdf->Cell(1 ,5,'',0,1);


$pdf->SetFont('Arial','',9);
$pdf->Cell(12.1,6,' Nama',0,0,'L'); 
$pdf->SetFont('Arial','B',9);
$pdf->Cell(10,6,'                                    :   '.strtoupper($nama),0,1, 'L');
$pdf->SetFont('Arial','',9);

$pdf->Cell(12.1,6,' Jabatan',0,0,'L'); 
$pdf->SetFont('Arial','B',9);
$pdf->Cell(20,6,'                                    :   '.$jabatans,0,1, 'L');
$pdf->SetFont('Arial','',9);
$pdf->Cell(12.1,6,' NIK',0,0,'L'); 
$pdf->SetFont('Arial','B',9);
$pdf->Cell(10,6,'                                    :   '.$nik,0,1, 'L');
$pdf->SetFont('Arial','',9);
$pdf->Cell(12.1,6,' Nomor Pokok Wajib Pajak',0,0,'L');
$pdf->SetFont('Arial','B',9);
$pdf->Cell(25,6,'                                    :   '.$npwp,0,1, 'L');
$pdf->SetFont('Arial','',9);
$pdf->Cell(12.1,6,' Tanggal Masuk Bekerja',0,0,'L');
$pdf->SetFont('Arial','B',9);
$pdf->Cell(95,6,'                                    :   '.date('d',strtotime($tgl_bakti)).' - '.$nms.' - '.date('Y',strtotime($tgl_bakti)),0,0, 'L');

$pdf->SetFont('Arial','',9);
$pdf->Cell(10,6,' Status Keluarga',0,0,'L'); 
$pdf->SetFont('Arial','B',9);
$pdf->Cell(20,6,'            					         :   '.$statkel,0,1, 'L');

$pdf->SetFont('Arial','',9);
$pdf->Cell(12.1,6,' Masa Kerja Efektif',0,0,'L');
$pdf->SetFont('Arial','B',9);
$pdf->Cell(95,6,'                                    :   '.date_diff(date_create($tgl_bakti), date_create('now'))->y.' Tahun / '.date_diff(date_create($tgl_bakti), date_create('now'))->m.' Bulan',0,0, 'L');
$pdf->SetFont('Arial','',9);

$pdf->Cell(10,6,' Status Karyawan',0,0,'L');
$pdf->SetFont('Arial','B',9); 
$pdf->Cell(20,6,'                          :   '.$status_karyawan,0,1, 'L');

//Numbers are right-aligned so we give 'R' after new line parameter

				$numpang=mysqli_query($config,"SELECT kelas_jabatan,status_karyawan,status_tugas FROM tbl_user WHERE id_user='$id_user'");
					list($admin,$status_karyawan,$status_tugas)=mysqli_fetch_array($numpang);
										
				$gajing=mysqli_query($config,"SELECT gaji,t_jabatan,t_fungsional,t_transportasi,t_utilitas,t_perumahan,t_komunikasi FROM tbl_gaji_pokok WHERE kelas_jabatan='$admin' AND(status_karyawan='$status_karyawan' AND status_tugas='$status_tugas')");
					list($gajix,$tun_jabatan,$tun_fungsional,$tun_transportasi,$tun_utilitas,$tun_perumahan,$tun_komunikasi)=mysqli_fetch_array($gajing);
					
					$numpangf=mysqli_query($config,"SELECT pen_jamsostek,bpjstk_jampes,bpjstk_jamkes,tun_pph21_tetap,tun_pph21_tidak,pot_jamsostek_kar,pot_bpjstk_jampes,pot_bpjstk_jamkes,pot_pph21_tetap,pot_pph21_tidak,koreksi_pph21 FROM tbl_gaji WHERE id_gaji='$id_gaji' AND id_user='$id_user'");
                    list($pen_jamsostek,$bpjstk_jampes,$bpjstk_jamkes,$tun_pph21_tetap,$tun_pph21_tidak,$pot_jamsostek_kar,$pot_bpjstk_jampes,$pot_bpjstk_jamkes,$pot_pph21_tetap,$pot_pph21_tidak,$koreksipph)=mysqli_fetch_array($numpangf);
                    
                    $ngambil=mysqli_query($config,"SELECT tgl_bakti FROM tbl_identitas WHERE id_user='$id_user'");
					list($lama)=mysqli_fetch_array($ngambil);
                    $nambah = date_diff(date_create('2019-06-30'), date_create($lama))->y;
					$nambahh = date_diff(date_create('2019-06-30'), date_create($lama))->m + $nambah*12;
                    $agesd = date_diff(date_create($lama), date_create('now'))->y;
					$ages = date_diff(date_create($lama), date_create('now'))->m + $agesd*12;
                    if ($ages<=3 && $status_karyawan==5){
                        $gajix=$gajix*80/100;
                        $mb='(80%)';
                    } else {$mb='(100%)';}
                    if ($nambahh>=12 && $status_karyawan==5){
                        $gajix=$gajix+800000;
                    } else {
                        $gajix=$gajix;}
//summary
$pdf->Cell(1 ,5,'',0,1);
$pdf->Cell(1 ,5,'',0,0);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(96.5 ,6,' I. PENERIMAAN',0,0);
$pdf->Cell(10 ,6,' II. POTONGAN',0,1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(10 ,6,'',0,1);
$pdf->Cell(101 ,6,'     Gaji',0,0);
$pdf->Cell(10 ,6,'Umum',0,1);
$pdf->SetFont('Arial','',9);
$pdf->Cell(43.9 ,6,'     1. Gaji',0,0);
$pdf->Cell(37.5 ,6,':',0,0);
$pdf->Cell(10 ,6,'Rp '.number_format($gajix , 0, ',', '.').'',0,0,'R');

$queryoz = mysqli_query($config, "SELECT jumlah FROM tbl_potongan WHERE id_user='$id_user' AND(id_gaji='$id_gaji' AND kode_potongan=28)");
list($kehadiran)=mysqli_fetch_array($queryoz);

$pdf->Cell(48.9 ,6,'           1. Potongan Kehadiran',0,0);
$pdf->Cell(29 ,6,':',0,0);
$pdf->Cell(15 ,6,'Rp '.number_format($kehadiran , 0, ',', '.').'',0,1,'R');



$pdf->Line(68,115,103,115);

$pdf->Cell(17,6,'',0,0);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(26.8 ,6,'Sub Total '.$mb,0,0);
$pdf->Cell(36.5 ,6,':',0,0);

$pdf->Line(161,115,196,115);


$pdf->Cell(11 ,6,'Rp '.number_format($gajix , 0, ',', '.').'',0,0,'R');//end of line
$pdf->Cell(49 ,6,'                                  Sub Total',0,0);
$pdf->Cell(1.2 ,6,':',0,0);
$pdf->Cell(43,6,'Rp '.number_format($kehadiran , 0, ',', '.').'',0,1,'R');//end of line


$pdf->Cell(10 ,6,'     Tunjangan',0,1);
$pdf->SetFont('Arial','',9);
$pdf->Cell(43.9 ,6,'     1. Tunjangan Jabatan',0,0);
$pdf->Cell(37.5 ,6,':',0,0);
$pdf->Cell(10 ,6,'Rp '.number_format($tun_jabatan , 0, ',', '.').'',0,0,'R');

$pdf->Cell(48.9 ,6,'           1. Jamsostek',0,0);
$pdf->Cell(29 ,6,':',0,0);
$pdf->Cell(15 ,6,'Rp '.number_format($pot_jamsostek_kar , 0, ',', '.').'',0,1,'R');

$pdf->Cell(43.9 ,6,'     2. Tunjangan Fungsional',0,0);
$pdf->Cell(37.5 ,6,':',0,0);
$pdf->Cell(10 ,6,'Rp '.number_format($tun_fungsional , 0, ',', '.').'',0,0,'R');

$pdf->Cell(48.9 ,6,'           2. BPJSTK J. Pensiun',0,0);
$pdf->Cell(29 ,6,':',0,0);
$pdf->Cell(15 ,6,'Rp '.number_format($pot_bpjstk_jampes , 0, ',', '.').'',0,1,'R');

$pdf->Cell(43.9 ,6,'     3. Tunjangan Transportasi',0,0);
$pdf->Cell(37.5 ,6,':',0,0);
$pdf->Cell(10 ,6,'Rp '.number_format($tun_transportasi , 0, ',', '.').'',0,0,'R');

$pdf->Cell(48.9 ,6,'           3. BPJSTK J. Kesehatan',0,0);
$pdf->Cell(29 ,6,':',0,0);
$pdf->Cell(15 ,6,'Rp '.number_format($pot_bpjstk_jamkes , 0, ',', '.').'',0,1,'R');

$pdf->Cell(43.9 ,6,'     4. Tunjangan Utilitas',0,0);
$pdf->Cell(37.5 ,6,':',0,0);
$pdf->Cell(10 ,6,'Rp '.number_format($tun_utilitas , 0, ',', '.').'',0,0,'R');

$pdf->Cell(48.9 ,6,'           4. PPh-21',0,0);
$pdf->Cell(29 ,6,':',0,1);




$pdf->Cell(43.9 ,6,'     5. Tunjangan Perumahan',0,0);
$pdf->Cell(37.5 ,6,':',0,0);
$pdf->Cell(10 ,6,'Rp '.number_format($tun_perumahan , 0, ',', '.').'',0,0,'R');

$pdf->Cell(48.9 ,6,'           - Penghasilan Tetap',0,0);
$pdf->Cell(29 ,6,':',0,0);
$pdf->Cell(15 ,6,'Rp '.number_format($pot_pph21_tetap , 0, ',', '.').'',0,1,'R');


$pdf->Cell(43.9 ,6,'     6. Tunjangan Komunikasi',0,0);
$pdf->Cell(37.5 ,6,':',0,0);
$pdf->Cell(10 ,6,'Rp '.number_format($tun_komunikasi , 0, ',', '.').'',0,0,'R');

$pdf->Cell(48.9 ,6,'           - Penghasilan Tidak Tetap',0,0);
$pdf->Cell(29 ,6,':',0,0);
$pdf->Cell(15 ,6,'Rp '.number_format($pot_pph21_tidak , 0, ',', '.').'',0,1,'R');
$pdf->Line(161,163,196,163);


$sub1=$tun_jabatan+$tun_fungsional+$tun_transportasi+$tun_utilitas+$tun_perumahan+$tun_komunikasi;
$sub2=$gajix+$tun_jabatan+$tun_fungsional+$tun_transportasi+$tun_utilitas+$tun_perumahan+$tun_komunikasi;
$sub3=$pot_jamsostek_kar+$pot_bpjstk_jamkes+$pot_bpjstk_jampes+$pot_pph21_tetap+$pot_pph21_tidak;
$pdf->Cell(27,6,'',0,0);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(16.8 ,6,'Sub Total',0,0);
$pdf->Cell(36.5 ,6,':',0,0);
$pdf->Cell(11.2 ,6,'Rp '.number_format($sub1 , 0, ',', '.').'',0,0,'R');//end of line

$pdf->Cell(48.7 ,6,'                                  Sub Total',0,0);
$pdf->Cell(1.2 ,6,':',0,0);
$pdf->Cell(43,6,'Rp '.number_format($sub3 , 0, ',', '.').'',0,1,'R');//end of line

$pdf->Line(68,163,103,163);
$pdf->Line(68,175,103,175);
$pdf->Cell(10 ,5,'',0,0);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(33.8 ,6,'Jumlah Penghasilan',0,0);
$pdf->Cell(14.2 ,6,':',0,0);
$pdf->Cell(33.5 ,6,'Rp '.number_format($sub2 , 0, ',', '.').'',0,1,'R');//end of line




//TUNJANGAN UMUM

$pdf->SetFont('Arial','B',9);
$pdf->Cell(10 ,5,'    Umum',0,1);

$pdf->SetFont('Arial','',9);

$pdf->Cell(43.9 ,6,'     1. Jamsostek',0,0);
$pdf->Cell(37.5 ,6,':',0,0);
$pdf->Cell(10 ,6,'Rp '.number_format($pen_jamsostek , 0, ',', '.').'',0,1,'R');


$pdf->Cell(43.9 ,6,'     2. BPSTK J. Pensiun',0,0);
$pdf->Cell(37.5 ,6,':',0,0);
$pdf->Cell(10 ,6,'Rp '.number_format($bpjstk_jampes , 0, ',', '.').'',0,1,'R');


$pdf->Cell(43.9 ,6,'     3. BPSTK J. Kesehatan',0,0);
$pdf->Cell(37.5 ,6,':',0,0);
$pdf->Cell(10 ,6,'Rp '.number_format($bpjstk_jamkes , 0, ',', '.').'',0,1,'R');

$pdf->Cell(43.9 ,6,'     4. Tunjangan PPh-21',0,0);
$pdf->Cell(37.5 ,6,':',0,1);


$pdf->Cell(43.9 ,6,'     - Penghasilan Tetap',0,0);
$pdf->Cell(37.5 ,6,':',0,0);
$pdf->Cell(10 ,6,'Rp '.number_format($tun_pph21_tetap , 0, ',', '.').'',0,1,'R');


$pdf->Cell(43.9 ,6,'     - Penghasilan Tidak Tetap',0,0);
$pdf->Cell(37.5 ,6,':',0,0);
$pdf->Cell(10 ,6,'Rp '.number_format($tun_pph21_tidak , 0, ',', '.').'',0,1,'R');




$subpen=$pen_jamsostek+$bpjstk_jampes+$bpjstk_jamkes+$tun_pph21_tetap+$tun_pph21_tidak;
$faygg=mysqli_query($config,"SELECT SUM(jumlah) FROM tbl_penerimaan WHERE id_user='$id_user' AND id_gaji='$id_gaji'");
	list($jumla)=mysqli_fetch_array($faygg);
$pdf->Line(68,216,103,216);
$pdf->Cell(27,6,'',0,0);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(16.8 ,6,'Sub Total',0,0);
$pdf->Cell(36.5 ,6,':',0,0);
$pdf->Cell(11 ,6,'Rp '.number_format($subpen , 0, ',', '.').'',0,1,'R');


$pdf->Cell(43.8 ,6,'     Koreksi PPh-21',0,0);
$pdf->Cell(37.5 ,6,':',0,0);
$pdf->Cell(10 ,6,'Rp '.number_format($koreksipph , 0, ',', '.').'',0,1,'R');


$pdf->Cell(43.8 ,6,'     Lain - Lain',0,0);
$pdf->Cell(37.5 ,6,':',0,0);
$pdf->Cell(10 ,6,'Rp '.number_format($jumla , 0, ',', '.').'',0,0,'R');
$fayggz=mysqli_query($config,"SELECT SUM(jumlah) FROM tbl_potongan WHERE id_user='$id_user' AND(id_gaji='$id_gaji' AND kode_potongan<>28)");
list($jumlah)=mysqli_fetch_array($fayggz);




$pdf->Cell(48.9 ,6,'           Lain - Lain',0,0);
$pdf->Cell(29 ,6,':',0,0);
$pdf->Cell(15 ,6,'Rp '.number_format($jumlah , 0, ',', '.').'',0,1,'R');
$income=$subpen+$jumla+$sub2+$koreksipph;




$pdf->Cell(43.8 ,6,'     Total Penerimaan',0,0);
$pdf->Cell(37.5 ,6,':',0,0);
$pdf->Cell(10 ,6,'Rp '.number_format($income , 0, ',', '.').'',0,0,'R');


$outcome=$sub3+$jumlah+$kehadiran;
$pdf->Cell(48.9 ,6,'           Total Potongan',0,0);
$pdf->Cell(29 ,6,':',0,0);
$pdf->Cell(15 ,6,'Rp '.number_format($outcome , 0, ',', '.').'',0,1,'R');




$pdf->Cell(67 ,1,'',0,1);
$pdf->Cell(67 ,1,'',0,1);
$pdf->Cell(67 ,6,' III. PENERIMAAN BERSIH',0,0);
$pdf->SetFillColor(255,255,0);
$pdf->Cell(28 ,6,'Rp '.number_format($income-$outcome , 0, ',', '.').'',0,1,'C',1);
$pdf->Cell(67 ,2,'',0,1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(64 ,6,' Keterangan :',0,1);
$pdf->SetFont('Arial','',9);

$pdf->Cell(80.8 ,5,'    1.Jamsostek merupakan tunjangan yang dibayarkan Perusahaan (4,54 %) dan Karyawan (2 %)',0,1);
$pdf->Cell(80.8 ,5,'    2.PJS Tenaga Kerja Jaminan Pensiun dibayarkan Perusahaan (2%) dan Karyawan (1%), Maks Penghasilan Rp. 8.512.400',0,1);
$pdf->Cell(80.8 ,5,'    3.BPJS Tenaga Kerja Jaminan Kesehatan dibayarkan Perusahaan (4%) dan Karyawan (1%), Maks Penghasilan Rp. 8.000.000',0,1);
$pdf->Cell(80.8 ,5,'    4.PPh 21 adalah jumlah Pajak yang seharusnya disetor ke Kantor Pajak',0,1);

$cekpenerimaan=mysqli_query($config,"SELECT * FROM tbl_penerimaan WHERE id_user='$id_user' AND id_gaji='$id_gaji'");
$cekpotongan=mysqli_query($config,"SELECT * FROM tbl_potongan WHERE id_user='$id_user' AND id_gaji='$id_gaji'");
if(mysqli_num_rows($cekpenerimaan)>0 || mysqli_num_rows($cekpotongan)>0){
	
$totpotlain=mysqli_query($config,"SELECT SUM(jumlah) FROM tbl_potongan WHERE id_user='$id_user' AND(id_gaji='$id_gaji' AND kode_potongan<>28)");
list($totpot)=mysqli_fetch_array($totpotlain);
$totpenlain=mysqli_query($config,"SELECT SUM(jumlah) FROM tbl_penerimaan WHERE id_user='$id_user' AND id_gaji='$id_gaji'");
list($totpen)=mysqli_fetch_array($totpenlain);

$pdf->AddPage();
$pdf->SetFont('Arial','B',9);
$pdf->SetFillColor(176,224,230);
$pdf->Cell(95,5,'Rincian Penerimaan Lain - Lain',1,0,'C',1);
$pdf->Cell(95,5,'Rincian Potongan Lain - Lain',1,1,'C',1);
$pdf->Cell(95,3,'',0,1);

$x=$pdf->GetX();
$y=$pdf->GetY();
$mos=0;
$pdf->SetFont('Arial','',9);
if(mysqli_num_rows($cekpenerimaan)>0){
$kods=mysqli_query($config,"SELECT * FROM tbl_penerimaan WHERE id_user='$id_user' AND id_gaji='$id_gaji'");
while($row=mysqli_fetch_array($kods)){
	$contal=mysqli_query($config,"SELECT uraian FROM tbl_jenis_penerimaan WHERE id='".$row['kode_penerimaan']."'");
	list($uraiterima)=mysqli_fetch_array($contal);
$pdf->Cell(2,3,'',0,0);
$pdf->MultiCell(95 ,6,'- '.$uraiterima.' : Rp '.number_format($row['jumlah'] , 0, ',', '.').'',0,'L');
$mos=$mos+$row['jumlah'];

}
$pdf->Cell(2,3,'',0,0);
$pdf->SetFont('Arial','B',9);
$x1=$pdf->GetX();
$y1=$pdf->GetY();
$pdf->Line($x1,$y1,$x1+93,$y1);
$pdf->MultiCell(95 ,6,'  Sub Total : Rp '.number_format($mos , 0, ',', '.').'',0,'');
}
$yowp=0;
$pdf->SetFont('Arial','',9);
$pdf->SetXY($x + 98, $y);
if(mysqli_num_rows($cekpotongan)>0){
$kodsa=mysqli_query($config,"SELECT * FROM tbl_potongan WHERE id_user='$id_user' AND(id_gaji='$id_gaji' AND kode_potongan<>28)");
while($row=mysqli_fetch_array($kodsa)){
	$yowp=$yowp+$row['jumlah'];
	$contals=mysqli_query($config,"SELECT uraian FROM tbl_ref_potongan WHERE id='".$row['kode_potongan']."'");
	list($uraipotong)=mysqli_fetch_array($contals);
$y=$pdf->GetY();
$pdf->SetXY($x + 98, $y);
$pdf->MultiCell(150 ,6,'- '.$uraipotong.' : Rp '.number_format($row['jumlah'] , 0, ',', '.').'',0,'L');	

}
$pdf->SetFont('Arial','B',9);
$y=$pdf->GetY();
$pdf->SetXY($x + 98, $y);
$pdf->Line($x+98,$y,$x+98+92,$y);
$pdf->MultiCell(150 ,6,'  Sub Total : Rp '.number_format($yowp , 0, ',', '.').'',0,'L');	

	
}







}





$pdf->Output();


?>
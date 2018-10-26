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
                                                            $statkel = 'Duda / Anak 1';
                                                        } else if($status_keluarga == 7) {
                                                            $statkel = 'Duda / Anak 1';
                                                        } else if($status_keluarga == 8) {
                                                            $statkel = 'Duda / Anak 1';
                                                        } else if($status_keluarga == 9) {
                                                            $statkel = 'Duda / Anak 1';
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
$pdf->Image('./upload/logopdf.png',10,10,-300);
$pdf->Cell(189 ,23,'',0,1);//end of line
$pdf->Cell(57 ,23,'',0,0);//end of line
$pdf->Multicell(80,6,'Rincian Penghasilan Karyawan '.$nm.' '.$tahuns.'',0,'C');
$pdf->Line(10,55,200,55);
$pdf->Line(10,93,200,93);
$pdf->Line(10,55,10,285);
$pdf->Line(200,55,200,285);
$pdf->Line(10,285,200,285);
$pdf->Line(105,93,105,285);


//Cell(width , height , text , border , end line , [align] )


//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,6,'',0,1);//end of line



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
$pdf->SetFont('Arial','B',11);
$pdf->Cell(120 ,1,' Unit Kerja : '.$gobloz.'',0,0);
$pdf->Cell(130 ,1,'Pembayaran : '.$nama_bank.'',0,0);
$pdf->Cell(1 ,5,'',0,1);


$pdf->SetFont('Arial','',11);
$pdf->Cell(12.1,6,' Nama',0,0,'L'); 
$pdf->SetFont('Arial','B',11);
$pdf->Cell(10,6,'                                    :   '.strtoupper($nama),0,1, 'L');
$pdf->SetFont('Arial','',11);

$pdf->Cell(12.1,6,' Jabatan',0,0,'L'); 
$pdf->SetFont('Arial','B',11);
$pdf->Cell(20,6,'                                    :   '.$jabatans,0,1, 'L');
$pdf->SetFont('Arial','',11);
$pdf->Cell(12.1,6,' NIK',0,0,'L'); 
$pdf->SetFont('Arial','B',11);
$pdf->Cell(10,6,'                                    :   '.$nik,0,1, 'L');
$pdf->SetFont('Arial','',11);
$pdf->Cell(12.1,6,' Nomor Pokok Wajib Pajak',0,0,'L');
$pdf->SetFont('Arial','B',11);
$pdf->Cell(25,6,'                                    :   '.$npwp,0,1, 'L');
$pdf->SetFont('Arial','',11);
$pdf->Cell(12.1,6,' Tanggal Masuk Bekerja',0,0,'L');
$pdf->SetFont('Arial','B',11);
$pdf->Cell(85,6,'                                    :   '.date('d',strtotime($tgl_bakti)).' - '.$nms.' - '.date('Y',strtotime($tgl_bakti)),0,0, 'L');
$pdf->SetFont('Arial','',11);
$pdf->Cell(10,6,' Status Keluarga',0,0,'L'); 
$pdf->SetFont('Arial','B',11);
$pdf->Cell(20,6,'            					         :   '.$statkel,0,1, 'L');
$pdf->SetFont('Arial','',11);
$pdf->Cell(12.1,6,' Masa Kerja Efektif',0,0,'L');
$pdf->SetFont('Arial','B',11);
$pdf->Cell(85,6,'                                    :   '.date_diff(date_create($tgl_bakti), date_create('now'))->y.' Tahun / '.date_diff(date_create($tgl_bakti), date_create('now'))->m.' Bulan',0,0, 'L');
$pdf->SetFont('Arial','',11);
$pdf->Cell(10,6,' Status Karyawan',0,0,'L');
$pdf->SetFont('Arial','B',11); 
$pdf->Cell(20,6,'                          :   '.$status_karyawan,0,1, 'L');

//Numbers are right-aligned so we give 'R' after new line parameter

				$numpang=mysqli_query($config,"SELECT admin,status_karyawan,status_tugas FROM tbl_user WHERE id_user='$id_user'");
					list($admin,$status_karyawan,$status_tugas)=mysqli_fetch_array($numpang);
										
				$gajing=mysqli_query($config,"SELECT gaji,t_jabatan,t_fungsional,t_transportasi,t_utilitas,t_perumahan,t_komunikasi FROM tbl_gaji_pokok WHERE admin='$admin' AND(status_karyawan='$status_karyawan' AND status_tugas='$status_tugas')");
					list($gajix,$tun_jabatan,$tun_fungsional,$tun_transportasi,$tun_utilitas,$tun_perumahan,$tun_komunikasi)=mysqli_fetch_array($gajing);
//summary
$pdf->Cell(1 ,5,'',0,1);
$pdf->Cell(1 ,5,'',0,0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(10 ,5,' I. PENERIMAAN',0,1);

$pdf->Cell(10 ,5,'',0,1);
$pdf->Cell(10 ,5,'     Gaji',0,1);
$pdf->SetFont('Arial','',12);
$pdf->Cell(81.5 ,8,'     1. Gaji                            :',0,0);
$pdf->Cell(10 ,8,'Rp '.number_format($gajix , 0, ',', '.').'',0,1,'R');
$pdf->Line(68,120,103,120);

$pdf->Cell(30.6 ,5,'',0,0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(25 ,7,'Sub Total :',0,0);
$pdf->Cell(36 ,7,'Rp '.number_format($gajix , 0, ',', '.').'',0,1,'R');//end of line

$pdf->Cell(10 ,5,'',0,1);
$pdf->Cell(10 ,5,'     Tunjangan',0,1);
$pdf->SetFont('Arial','',12);
$pdf->Cell(0.8 ,1,'',0,0);
$pdf->Cell(80.8 ,8,'    1. Tunjangan Jabatan    :',0,0);
$pdf->Cell(10 ,8,'Rp '.number_format($tun_jabatan , 0, ',', '.').'',0,1,'R');
$pdf->Line(68,120,103,120);

$pdf->Cell(0.8 ,1,'',0,0);
$pdf->Cell(80.8 ,8,'    2. Tunjangan Fungsional    :',0,0);
$pdf->Cell(10 ,8,'Rp '.number_format($tun_fungsional , 0, ',', '.').'',0,1,'R');
$pdf->Line(68,120,103,120);

$pdf->Cell(0.8 ,1,'',0,0);
$pdf->Cell(80.8 ,8,'    3. Tunjangan Transport    :',0,0);
$pdf->Cell(10 ,8,'Rp '.number_format($tun_transportasi , 0, ',', '.').'',0,1,'R');
$pdf->Line(68,120,103,120);
$pdf->Cell(0.8 ,1,'',0,0);
$pdf->Cell(80.8 ,8,'    4. Tunjangan Utilitas    :',0,0);
$pdf->Cell(10 ,8,'Rp '.number_format($tun_utilitas , 0, ',', '.').'',0,1,'R');
$pdf->Line(68,120,103,120);

$pdf->Cell(0.8 ,1,'',0,0);
$pdf->Cell(80.8 ,8,'    5. Tunjangan Perumahan    :',0,0);
$pdf->Cell(10 ,8,'Rp '.number_format($tun_perumahan , 0, ',', '.').'',0,1,'R');
$pdf->Line(68,120,103,120);

$pdf->Cell(0.8 ,1,'',0,0);
$pdf->Cell(80.8 ,8,'    6. Tunjangan Komunikasi    :',0,0);
$pdf->Cell(10 ,8,'Rp '.number_format($tun_komunikasi , 0, ',', '.').'',0,1,'R');
$pdf->Line(68,120,103,120);

$sub1=$tun_jabatan+$tun_fungsional+$tun_transportasi+$tun_utilitas+$tun_perumahan+$tun_komunikasi;
$sub2=$gajix+$tun_jabatan+$tun_fungsional+$tun_transportasi+$tun_utilitas+$tun_perumahan+$tun_komunikasi;
$pdf->Cell(30.6 ,5,'',0,0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(25 ,7,'Sub Total :',0,0);
$pdf->Cell(36 ,7,'Rp '.number_format($sub1 , 0, ',', '.').'',0,1,'R');//end of line

$pdf->Cell(10 ,5,'',0,0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(48 ,7,'Jumlah Penghasilan :',0,0);
$pdf->Cell(33.5 ,7,'Rp '.number_format($sub2 , 0, ',', '.').'',0,1,'R');//end of line

//TUNJANGAN UMUM


$pdf->Cell(10 ,5,'     Umum',0,1);
$pdf->SetFont('Arial','',12);
$pdf->Cell(0.8 ,1,'',0,0);
$pdf->Cell(80.8 ,8,'    1. Tunjangan Jabatan    :',0,0);
$pdf->Cell(10 ,8,'Rp '.number_format($tun_jabatan , 0, ',', '.').'',0,1,'R');
$pdf->Line(68,120,103,120);

$pdf->Cell(0.8 ,1,'',0,0);
$pdf->Cell(80.8 ,8,'    2. Tunjangan Fungsional    :',0,0);
$pdf->Cell(10 ,8,'Rp '.number_format($tun_fungsional , 0, ',', '.').'',0,1,'R');
$pdf->Line(68,120,103,120);

$pdf->Cell(0.8 ,1,'',0,0);
$pdf->Cell(80.8 ,8,'    3. Tunjangan Transport    :',0,0);
$pdf->Cell(10 ,8,'Rp '.number_format($tun_transportasi , 0, ',', '.').'',0,1,'R');
$pdf->Line(68,120,103,120);
$pdf->Cell(0.8 ,1,'',0,0);
$pdf->Cell(80.8 ,8,'    4. Tunjangan Utilitas    :',0,0);
$pdf->Cell(10 ,8,'Rp '.number_format($tun_utilitas , 0, ',', '.').'',0,1,'R');
$pdf->Line(68,120,103,120);

$pdf->Cell(0.8 ,1,'',0,0);
$pdf->Cell(80.8 ,8,'    5. Tunjangan Perumahan    :',0,0);
$pdf->Cell(10 ,8,'Rp '.number_format($tun_perumahan , 0, ',', '.').'',0,1,'R');
$pdf->Line(68,120,103,120);

$pdf->Cell(0.8 ,1,'',0,0);
$pdf->Cell(80.8 ,8,'    6. Tunjangan Komunikasi    :',0,0);
$pdf->Cell(10 ,8,'Rp '.number_format($tun_komunikasi , 0, ',', '.').'',0,1,'R');
$pdf->Line(68,120,103,120);

$sub1=$gajix+$tun_jabatan+$tun_fungsional+$tun_transportasi+$tun_utilitas+$tun_perumahan+$tun_komunikasi;
$pdf->Cell(30.6 ,5,'',0,0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(25 ,7,'Sub Total :',0,0);
$pdf->Cell(36 ,7,'Rp '.number_format($sub1 , 0, ',', '.').'',0,1,'R');//end of line

$pdf->Output();

  ob_end_flush();
?>
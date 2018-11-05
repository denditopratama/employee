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
$pdf->SetFont('Arial','B',10);
$pdf->Image('./upload/logopdf.png',10,10,-400);
$pdf->Cell(189 ,20,'',0,1);
$pdf->Cell(57 ,6,'Lampiran',0,1);
$pdf->Cell(57 ,6,'Permohonan Pembayaran Penghasilan Bulanan Bulan : '.$nm.' Tahun '.$tahuns.'',0,1);
$pdf->Cell(189 ,8,'',0,1);
$pdf->Line(10,45,200,45);


$pdf->Line(10,234,200,234);
$pdf->Line(10,240,200,240);
$pdf->Line(10,250,200,250);




//invoice contents
$pdf->SetFont('Arial','B',10);
$pdf->Cell(100 ,1,'A. Penerimaan :',0,0);
$pdf->Cell(130 ,1,'Rincian Penerimaan Lain :',0,0);

					
$totaljabatan=0;
$totalfungsional=0;				
$totalkomunikasi=0;
$totaltransportasi=0;
$totalutilitas=0;
$totalperumahan=0;
$jamsostek=0;
//summary
$yok=mysqli_query($config,"SELECT SUM(total_penerimaan) FROM tbl_gaji WHERE id_gaji='$id_gaji'");
list($totalpenerimaan)=mysqli_fetch_array($yok);

$yoks=mysqli_query($config,"SELECT * FROM tbl_gaji WHERE id_gaji='$id_gaji' AND status=1");
while($row=mysqli_fetch_array($yoks)){
	$jis=mysqli_query($config,"SELECT admin,status_karyawan,status_tugas FROM tbl_user WHERE id_user='".$row['id_user']."'");
	list($admin,$statkar,$statugas)=mysqli_fetch_array($jis);
	
	$jiz=mysqli_query($config,"SELECT t_jabatan,t_fungsional,t_komunikasi,t_transportasi,t_utilitas,t_perumahan FROM tbl_gaji_pokok WHERE admin='$admin' AND(status_karyawan='$statkar' AND status_tugas='$statugas')");
	list($totaljabatans,$totalfungsionals,$totalkomunikasis,$totaltransportasis,$totalutilitass,$totalperumahans)=mysqli_fetch_array($jiz);
	$totaljabatan=$totaljabatan+$totaljabatans;
	$totalfungsional=$totalfungsional+$totalfungsionals;
	$totalkomunikasi=$totalkomunikasi+$totalkomunikasis;
	$totaltransportasi=$totaltransportasi+$totaltransportasis;
	$totalutilitas=$totalutilitas+$totalutilitass;
	$totalperumahan=$totalperumahan+$totalperumahans;
	$jamsostek=$jamsostek+$row['pen_jamsostek'];
	
}

$pdf->Cell(10 ,6,'Umum',0,1);
$pdf->SetFont('Arial','',9);
$pdf->Cell(71.4 ,6,'     1. Gaji',0,0);
$pdf->Cell(20 ,6,'Rp '.number_format($totalpenerimaan , 0, ',', '.').'',0,1,'R');




$pdf->Cell(81.5 ,6,'     2. Tunjangan Jabatan',0,0);
$pdf->Cell(10 ,6,'Rp '.number_format($totaljabatan , 0, ',', '.').'',0,1,'R');



$pdf->Cell(81.4 ,6,'     4. Tunjangan Fungsional',0,0);
$pdf->Cell(10 ,6,'Rp '.number_format($totalfungsional , 0, ',', '.').'',0,1,'R');



$pdf->Cell(81.4 ,6,'     6. Tunjangan Transportasi',0,0);
$pdf->Cell(10 ,6,'Rp '.number_format($totaltransportasi , 0, ',', '.').'',0,1,'R');



$pdf->Cell(81.4 ,6,'     8. Tunjangan Utilitas',0,0);
$pdf->Cell(10 ,6,'Rp '.number_format($totalutilitas , 0, ',', '.').'',0,1,'R');





$pdf->Cell(81.4 ,6,'     5. Tunjangan Perumahan',0,0);
$pdf->Cell(10 ,6,'Rp '.number_format($totalperumahan , 0, ',', '.').'',0,1,'R');




$pdf->Cell(81.4 ,6,'     6. Tunjangan Komunikasi',0,0);
$pdf->Cell(10 ,6,'Rp '.number_format($totalkomunikasi, 0, ',', '.').'',0,1,'R');

$pdf->SetY(56);
$pdf->SetX(110.2);
$jarak=6;
$mh=mysqli_query($config,"SELECT * FROM tbl_penerimaan WHERE id_gaji='$id_gaji' GROUP BY kode_penerimaan");
while($row=mysqli_fetch_array($mh)){
	$anjos=mysqli_query($config,"SELECT uraian FROM tbl_jenis_penerimaan WHERE id='".$row['kode_penerimaan']."'");
	list($uraiterima)=mysqli_fetch_array($anjos);
	$noy=mysqli_query($config,"SELECT SUM(jumlah) FROM tbl_penerimaan WHERE id_gaji='$id_gaji' AND kode_penerimaan='".$row['kode_penerimaan']."' GROUP BY kode_penerimaan");
	list($jumlahpen)=mysqli_fetch_array($noy);
$pdf->Cell(57 ,6,''.$uraiterima.'',0,0);
$pdf->Cell(30 ,6,'Rp '.number_format($jumlahpen, 0, ',', '.').'',0,0,'R');
$pdf->SetY(56+$jarak);
$pdf->SetX(110.2);
$jarak=$jarak+6;
}
$pdf->SetFont('Arial','B',9);
$pdf->Cell(57 ,6,'Jumlah Penerimaan Lain :',0,0);
















$pdf->Output();


?>
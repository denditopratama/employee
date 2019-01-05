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

class enjoy extends FPDF
{
	function Footer(){
		$this->SetLineWidth(0.4);
		$this->SetFont('Arial','',7);
	$this->Cell(1,1,'',0,1);
	$this->Line(11,280,199,280);
	  $this->SetY(-17);
	  $this->SetX(-344);
        $this->SetFont('Arial','',7);
        $this->Cell(0,7,'PT Jasamarga Properti : '.date('d').' - '.date('M').' - '.date('Y').'',0,0,'C');
	   $this->SetX(182);
        $this->SetFont('Arial','I',7);
        $this->Cell(0,7,'Halaman '.$this->PageNo().'/{nb}',0,0,'C');
	}
}	
	
$pdf = new enjoy('P','mm','A4');

$pdf->AddPage();
$pdf->AliasNbPages();
//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',10);
$pdf->Image('./upload/logopdf.png',10,10,-400);
$pdf->Cell(189 ,20,'',0,1);
$pdf->Cell(57 ,6,'Lampiran',0,1);
$pdf->Cell(57 ,6,'Permohonan Pembayaran Penghasilan Bulanan Bulan : '.$nm.' Tahun '.$tahuns.'',0,1);
$pdf->Cell(189 ,8,'',0,1);
$pdf->Line(10,45,200,45);






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
$koreksipph=0;
$bpjsjamkes=0;
$bpjsjampes=0;
$tunpph21ttp=0;
$tunpph21tt=0;
//summary
$yok=mysqli_query($config,"SELECT SUM(total_penerimaan) FROM tbl_gaji WHERE id_gaji='$id_gaji'");
list($totalpenerimaan)=mysqli_fetch_array($yok);

$yoks=mysqli_query($config,"SELECT * FROM tbl_gaji WHERE id_gaji='$id_gaji' AND status=1");
while($row=mysqli_fetch_array($yoks)){
	$jis=mysqli_query($config,"SELECT kelas_jabatan,status_karyawan,status_tugas FROM tbl_user WHERE id_user='".$row['id_user']."'");
	list($admin,$statkar,$statugas)=mysqli_fetch_array($jis);
	
	$jiz=mysqli_query($config,"SELECT t_jabatan,t_fungsional,t_komunikasi,t_transportasi,t_utilitas,t_perumahan FROM tbl_gaji_pokok WHERE kelas_jabatan='$admin' AND(status_karyawan='$statkar' AND status_tugas='$statugas')");
	list($totaljabatans,$totalfungsionals,$totalkomunikasis,$totaltransportasis,$totalutilitass,$totalperumahans)=mysqli_fetch_array($jiz);
	$totaljabatan=$totaljabatan+$totaljabatans;
	$totalfungsional=$totalfungsional+$totalfungsionals;
	$totalkomunikasi=$totalkomunikasi+$totalkomunikasis;
	$totaltransportasi=$totaltransportasi+$totaltransportasis;
	$totalutilitas=$totalutilitas+$totalutilitass;
	$totalperumahan=$totalperumahan+$totalperumahans;
	$jamsostek=$jamsostek+$row['pen_jamsostek'];
	$koreksipph=$koreksipph+$row['koreksi_pph21'];
	$bpjsjamkes=$bpjsjamkes+$row['bpjstk_jamkes'];
	$bpjsjampes=$bpjsjampes+$row['bpjstk_jampes'];
	$tunpph21ttp=$tunpph21ttp+$row['tun_pph21_tetap'];
	$tunpph21tt=$tunpph21tt+$row['tun_pph21_tidak'];
	$waduh=mysqli_query($config,"SELECT SUM(jumlah) FROM tbl_penerimaan WHERE id_gaji='$id_gaji'");
	list($jumpenlain)=mysqli_fetch_array($waduh);
}

$pdf->Cell(10 ,6,'',0,1);
$pdf->SetFont('Arial','',9);
$pdf->Cell(71.4 ,6,'     1. Gaji',0,0);
$pdf->Cell(20 ,6,'Rp '.number_format($totalpenerimaan , 0, ',', '.').'',0,1,'R');




$pdf->Cell(71.4 ,6,'     2. Tunjangan Jabatan',0,0);
$pdf->Cell(20 ,6,'Rp '.number_format($totaljabatan , 0, ',', '.').'',0,1,'R');



$pdf->Cell(71.4 ,6,'     3. Tunjangan Fungsional',0,0);
$pdf->Cell(20 ,6,'Rp '.number_format($totalfungsional , 0, ',', '.').'',0,1,'R');



$pdf->Cell(71.4 ,6,'     4. Tunjangan Transportasi',0,0);
$pdf->Cell(20 ,6,'Rp '.number_format($totaltransportasi , 0, ',', '.').'',0,1,'R');



$pdf->Cell(71.4 ,6,'     5. Tunjangan Utilitas',0,0);
$pdf->Cell(20 ,6,'Rp '.number_format($totalutilitas , 0, ',', '.').'',0,1,'R');



$pdf->Cell(71.4 ,6,'     6. Tunjangan Perumahan',0,0);
$pdf->Cell(20 ,6,'Rp '.number_format($totalperumahan , 0, ',', '.').'',0,1,'R');



$pdf->Cell(71.4 ,6,'     7. Tunjangan Komunikasi',0,0);
$pdf->Cell(20 ,6,'Rp '.number_format($totalkomunikasi, 0, ',', '.').'',0,1,'R');


$pdf->Cell(71.4 ,6,'     8. Jamsostek',0,0);
$pdf->Cell(20 ,6,'Rp '.number_format($jamsostek, 0, ',', '.').'',0,1,'R');


$pdf->Cell(71.4 ,6,'     9. BPJSTK Jaminan Kesehatan',0,0);
$pdf->Cell(20 ,6,'Rp '.number_format($bpjsjamkes, 0, ',', '.').'',0,1,'R');


$pdf->Cell(71.4 ,6,'    10. BPJSTK Jaminan Pensiun',0,0);
$pdf->Cell(20 ,6,'Rp '.number_format($bpjsjampes, 0, ',', '.').'',0,1,'R');


$pdf->Cell(71.4 ,6,'    11. Penerimaan Lainnya',0,0);
$pdf->Cell(20 ,6,'Rp '.number_format($jumpenlain, 0, ',', '.').'',0,1,'R');


$pdf->Cell(71.4 ,6,'    12. Tunjangan PPh-21',0,0);
$pdf->Cell(20 ,6,'Rp '.number_format($tunpph21tt+$tunpph21ttp, 0, ',', '.').'',0,1,'R');


$pdf->Cell(71.4 ,6,'    13. Koreksi PPh-21',0,0);
$pdf->Cell(20 ,6,'Rp '.number_format($koreksipph, 0, ',', '.').'',0,1,'R');

$pdf->Line(71,134,101,134);

$pdf->SetFont('Arial','B',9);
$pdf->Cell(8.5 ,6,'',0,0);
$pdf->Cell(53 ,6,'Total Penerimaan',0,0);
$totpen=$totalpenerimaan+$totaljabatan+$totalfungsional+$totaltransportasi+$totalutilitas+$totalperumahan+$totalkomunikasi+$jamsostek+$bpjsjamkes+$bpjsjampes+$jumpenlain+$tunpph21tt+$tunpph21ttp+$koreksipph;
$pdf->Cell(30 ,6,'Rp '.number_format($totpen, 0, ',', '.').'',0,1,'R');


//RINCIAN PENERIMANA LAIN
$pdf->SetY(56);
$pdf->SetX(110.2);
$pdf->SetFont('Arial','',9);
$jarak=6;
$no=1;
$mh=mysqli_query($config,"SELECT * FROM tbl_penerimaan WHERE id_gaji='$id_gaji' GROUP BY kode_penerimaan");
while($row=mysqli_fetch_array($mh)){
	$anjos=mysqli_query($config,"SELECT uraian FROM tbl_jenis_penerimaan WHERE id='".$row['kode_penerimaan']."'");
	list($uraiterima)=mysqli_fetch_array($anjos);
	$noy=mysqli_query($config,"SELECT SUM(jumlah) FROM tbl_penerimaan WHERE id_gaji='$id_gaji' AND kode_penerimaan='".$row['kode_penerimaan']."' GROUP BY kode_penerimaan");
	list($jumlahpen)=mysqli_fetch_array($noy);
$pdf->Cell(57 ,6,''.$no++.'. '.$uraiterima.'',0,0);
$pdf->Cell(30 ,6,'Rp '.number_format($jumlahpen, 0, ',', '.').'',0,0,'R');
$pdf->SetY(56+$jarak);
$pdf->SetX(110.2);
$jarak=$jarak+6;
}


$pdf->SetFont('Arial','B',9);
$pdf->Cell(57 ,6,'Jumlah Penerimaan Lain',0,0);
$pdf->Cell(30 ,6,'Rp '.number_format($jumpenlain, 0, ',', '.').'',0,0,'R');

$y=$pdf->GetY();
$x=$pdf->GetX();
$pdf->SetXY($x, $y-20);
$pdf->Line($x-30,$y,$x,$y);
$y=$pdf->GetY();
$x=$pdf->GetX();
$pdf->SetXY($x, $y+103);

//POTONGANNNNNNNNNNNNNNNNNNNNNNNNN

$gv=mysqli_query($config,"SELECT SUM(pot_jamsostek_kar),SUM(pot_bpjstk_jampes),SUM(pot_bpjstk_jamkes),SUM(pot_pph21_tetap),SUM(pot_pph21_tidak) FROM tbl_gaji WHERE id_gaji='$id_gaji'");
list($potjamsostek,$potbpjsjampes,$potbpjsjamkes,$potpph21ttp,$potpph21tdk)=mysqli_fetch_array($gv);


$pdf->SetFont('Arial','B',10);
$pdf->Cell(10 ,5,'',0,1);
$pdf->Cell(100 ,1,'B. Potongan :',0,1);
$pdf->Cell(10 ,5,'',0,1);


$pdf->SetFont('Arial','',9);

$pdf->Cell(71.4 ,6,'     1. Jamsostek',0,0);
$pdf->Cell(20 ,6,'Rp '.number_format($potjamsostek, 0, ',', '.').'',0,1,'R');


$pdf->Cell(71.4 ,6,'     2. BPJSTK Jaminan Kesehatan',0,0);
$pdf->Cell(20 ,6,'Rp '.number_format($potbpjsjamkes, 0, ',', '.').'',0,1,'R');


$pdf->Cell(71.4 ,6,'     3. BPJSTK Jaminan Pensiun',0,0);
$pdf->Cell(20 ,6,'Rp '.number_format($potbpjsjampes, 0, ',', '.').'',0,1,'R');


$pdf->Cell(71.4 ,6,'     4. PPh-21',0,0);
$pdf->Cell(20 ,6,'Rp '.number_format($potpph21ttp+$potpph21tdk, 0, ',', '.').'',0,1,'R');

$moi=mysqli_query($config,"SELECT * FROM tbl_potongan GROUP BY kode_potongan");
$nos=5;
$jumlahpotong=0;
while($row=mysqli_fetch_array($moi)){
	$jil=mysqli_query($config,"SELECT uraian,jenis_bank,atas_nama,no_rekening FROM tbl_ref_potongan WHERE id='".$row['kode_potongan']."'");
	list($namapotong,$jenbank,$an,$norek)=mysqli_fetch_array($jil);
	$mnb=mysqli_query($config,"SELECT SUM(jumlah) FROM tbl_potongan WHERE kode_potongan='".$row['kode_potongan']."'");
	list($jumpotong)=mysqli_fetch_array($mnb);
	$bl=mysqli_query($config,"SELECT nama_bank FROM tbl_ref_bank WHERE kode_bank='".$jenbank."'");
	list($jenisbank)=mysqli_fetch_array($bl);
	
	if($nos<10){
	$pdf->Cell(71.4 ,6,'     '.$nos++.'. '.$namapotong.'',0,0);
	$pdf->Cell(20 ,6,'Rp '.number_format($jumpotong, 0, ',', '.').'',0,0,'R');
	$pdf->Cell(9 ,6,'',0,0,'R');
	$yzd=$pdf->GetY();
	$xzd=$pdf->GetX();
	$pdf->MultiCell(62 ,4,''.$an.'',0,'L');
	$pdf->SetXY($xzd+63,$yzd);
	$pdf->Cell(25 ,6,''.$norek.'',0,1,'R');
	$pdf->Cell(9 ,4,'',0,1,'R');
	}
	else if ($nos>=10){
		$pdf->Cell(71.4 ,6,'    '.$nos++.'. '.$namapotong.'',0,0);
		$pdf->Cell(20 ,6,'Rp '.number_format($jumpotong, 0, ',', '.').'',0,0,'R');
		$pdf->Cell(9 ,6,'',0,0,'R');
		$yzd=$pdf->GetY();
		$xzd=$pdf->GetX();
		$pdf->MultiCell(62 ,4,''.$an.'',0,'L');
		$pdf->SetXY($xzd+63,$yzd);
		$pdf->Cell(25 ,6,''.$norek.'',0,1,'R');
		$pdf->Cell(9 ,4,'',0,1,'R');
	}
	$jumlahpotong=$jumlahpotong+$jumpotong;
}

$pdf->SetFont('Arial','B',9);
$y=$pdf->GetY();
$x=$pdf->GetX();

$pdf->Line($x+61,$y,$x+91,$y);
$pdf->Cell(8.5 ,6,'',0,0);
$pdf->Cell(53 ,6,'Total Potongan',0,0);
$pdf->Cell(30 ,6,'Rp '.number_format($jumlahpotong+$potjamsostek+$potbpjsjamkes+$potbpjsjampes+$potpph21ttp+$potpph21tdk, 0, ',', '.').'',0,1,'R');
$gjd=$totpen-($jumlahpotong+$potjamsostek+$potbpjsjamkes+$potbpjsjampes+$potpph21ttp+$potpph21tdk);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(10 ,5,'',0,1);
$pdf->Cell(60 ,6,'C. Gaji Yang Dibayarkan (A-B) :',0,0);
$pdf->SetFillColor(255,255,0);
$pdf->Cell(40 ,6,'Rp '.number_format($gjd, 0, ',', '.').'',0,1,'C',1);
$pdf->SetFont('Arial','',9);
$pdf->Cell(4.5 ,1,'',0,0);

function terbilang($nilai) {
	if($nilai<0) {
		$hasil = "minus ". trim(penyebut($nilai));
	} else {
		$hasil = trim(penyebut($nilai));
	}     		
	return $hasil;
}

function penyebut($nilai) {
		$nilai = abs($nilai);
		$huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
		$temp = "";
		if ($nilai < 12) {
			$temp = " ". $huruf[$nilai];
		} else if ($nilai <20) {
			$temp = penyebut($nilai - 10). " belas";
		} else if ($nilai < 100) {
			$temp = penyebut($nilai/10)." puluh". penyebut($nilai % 10);
		} else if ($nilai < 200) {
			$temp = " seratus" . penyebut($nilai - 100);
		} else if ($nilai < 1000) {
			$temp = penyebut($nilai/100) . " ratus" . penyebut($nilai % 100);
		} else if ($nilai < 2000) {
			$temp = " seribu" . penyebut($nilai - 1000);
		} else if ($nilai < 1000000) {
			$temp = penyebut($nilai/1000) . " ribu" . penyebut($nilai % 1000);
		} else if ($nilai < 1000000000) {
			$temp = penyebut($nilai/1000000) . "juta" . penyebut($nilai % 1000000);
		} else if ($nilai < 1000000000000) {
			$temp = penyebut($nilai/1000000000) . " milyar" . penyebut(fmod($nilai,1000000000));
		} else if ($nilai < 1000000000000000) {
			$temp = penyebut($nilai/1000000000000) . " trilyun" . penyebut(fmod($nilai,1000000000000));
		}     
		return $temp;
	}

$pdf->Cell(60 ,6,'(Terbilang : '.terbilang($gjd).' rupiah)',0,0);




















$pdf->Output();


?>
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
	function Header(){
		global $nm;
		global $tahuns;
$this->SetFont('Arial','B',12);
$this->Image('./upload/logopdf.png',10,10,-400);
$this->Cell(189 ,15,'',0,1);
$this->Cell(40 ,23,'',0,0);
$this->Multicell(110,6,'REKAPITULASI POTONGAN LAIN KARYAWAN BULAN : '.strtoupper($nm).' '.$tahuns.'',0,'C');
$this->Cell(30 ,2,'',0,1);
	}
	
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






$pdf->SetFillColor(176,224,230);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(12 ,6,'No.',1,0,'C',1);
$pdf->Cell(103 ,6,'Uraian Penerimaan',1,0,'C',1);
$pdf->Cell(35 ,6,'Jumlah Karyawan',1,0,'C',1);
$pdf->Cell(40 ,6,'Jumlah',1,0,'C',1);
$pdf->Cell(1 ,8,'',0,1);

$pdf->SetFont('Arial','',9);
$no=1;
$totalpenerimaan=0;
$ngitung=0;
$konco=mysqli_query($config,"SELECT * FROM tbl_penerimaan WHERE id_gaji='$id_gaji' GROUP BY kode_penerimaan");
while($row=mysqli_fetch_array($konco)){
	$hasilbanks=0;
	$jhg=mysqli_query($config,"SELECT uraian FROM tbl_jenis_penerimaan WHERE id='".$row['kode_penerimaan']."'");
	list($jumlahkeun)=mysqli_fetch_array($jhg);
	$mng=mysqli_query($config,"SELECT COUNT(id_user) FROM tbl_penerimaan WHERE id_gaji='$id_gaji' AND kode_penerimaan='".$row['kode_penerimaan']."'");
	list($jumlahorang)=mysqli_fetch_array($mng);
	$mngs=mysqli_query($config,"SELECT SUM(jumlah) FROM tbl_penerimaan WHERE id_gaji='$id_gaji' AND kode_penerimaan='".$row['kode_penerimaan']."'");
	list($penerimaan)=mysqli_fetch_array($mngs);
$pdf->Cell(11.5 ,6,''.$no++.'',1,0,'C');
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(102 ,6,''.$jumlahkeun.'',1,0,'C');
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(34 ,6,''.$jumlahorang.'',1,0,'C');
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(39.5 ,6,'Rp '.number_format($penerimaan , 0, ',', '.').'',1,1,'R');
$pdf->Cell(1 ,1,'',0,1);
$totalpenerimaan=$totalpenerimaan+$penerimaan;
$ngitung=$ngitung+$jumlahorang;
}

$man=mysqli_query($config,"SELECT nama,nip FROM tbl_user WHERE jabatan=108 AND status_aktif=1");
list($manager,$nomornip)=mysqli_fetch_array($man);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(114.5 ,6,'Jumlah Keseluruhan',1,0,'C',1);
$pdf->Cell(1 ,1,'',0,0,'C');
$pdf->Cell(34 ,6,''.$ngitung.'',1,0,'C',1);
$pdf->Cell(1 ,1,'',0,0,'C');
$pdf->Cell(39.5 ,6,'Rp '.number_format($totalpenerimaan , 0, ',', '.').'',1,1,'R',1);
$pdf->Cell(1 ,6,'',0,1,'C');
$pdf->Cell(110 ,6,'',0,0,'C');
$pdf->Cell(20 ,1,'',0,0,'C');
$pdf->Cell(34 ,6,'Jakarta, '.date('d').' - '.date('F').' - '.date('Y').'',0,0,'C');
$pdf->Cell(1 ,6,'',0,1,'C');
$pdf->Cell(130 ,1,'',0,0,'C');
$pdf->Cell(34 ,6,'MANAGER HR & GENERAL AFFAIR',0,0,'C');
$pdf->Cell(1 ,26,'',0,1,'C');
$pdf->Cell(130 ,1,'',0,0,'C');
$pdf->Cell(34 ,6,''.strtoupper($manager).'',0,0,'C');
$pdf->Cell(1 ,6,'',0,1,'C');
$pdf->Cell(130 ,1,'',0,0,'C');
$pdf->Cell(34 ,6,'NIP : '.$nomornip.'',0,0,'C');




$pdf->Output();


?>
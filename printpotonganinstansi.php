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
	function Header1(){
		global $nm;
		global $tahuns;
$this->SetFont('Arial','B',12);
$this->Image('./upload/logopdf.png',10,10,-400);
$this->Cell(189 ,15,'',0,1);
$this->Cell(48 ,23,'',0,0);
$this->Multicell(100,6,'DAFTAR POTONGAN LAIN KARYAWAN PERIODE : '.strtoupper($nm).' '.$tahuns.'',0,'C');
$this->Cell(30 ,2,'',0,1);
$this->SetFont('Arial','B',9);
$this->Cell(1 ,6,'Asal Intansi : PT Jasamarga Properti',0,1);
$this->SetFont('Arial','',9);
$this->SetFillColor(176,224,230);
$this->SetFont('Arial','B',9);
$this->Cell(6.5 ,6,'No.',1,0,'C',1);
$this->Cell(1 ,1,'',0,0);
$this->Cell(57 ,6,'NIK / Nama',1,0,'C',1);
$this->Cell(1 ,1,'',0,0);
$this->Cell(84 ,6,'Bank Transfer dan Nomor Rekening',1,0,'C',1);
$this->Cell(1 ,1,'',0,0);
$this->Cell(39.5 ,6,'Jumlah',1,0,'C',1);
$this->Cell(1 ,8,'',0,1);
    }
    
    function Header2(){
		global $nm;
		global $tahuns;
$this->SetFont('Arial','B',12);
$this->Image('./upload/logopdf.png',10,10,-400);
$this->Cell(189 ,15,'',0,1);
$this->Cell(48 ,23,'',0,0);
$this->Multicell(100,6,'DAFTAR POTONGAN LAIN KARYAWAN PERIODE : '.strtoupper($nm).' '.$tahuns.'',0,'C');
$this->Cell(30 ,2,'',0,1);
$this->SetFont('Arial','B',9);
$this->Cell(1 ,6,'Asal Intansi : PT Jasa Marga (Persero) Tbk.',0,1);
$this->SetFont('Arial','',9);
$this->SetFillColor(176,224,230);
$this->SetFont('Arial','B',9);
$this->Cell(6.5 ,6,'No.',1,0,'C',1);
$this->Cell(1 ,1,'',0,0);
$this->Cell(57 ,6,'NIK / Nama',1,0,'C',1);
$this->Cell(1 ,1,'',0,0);
$this->Cell(84 ,6,'Bank Transfer dan Nomor Rekening',1,0,'C',1);
$this->Cell(1 ,1,'',0,0);
$this->Cell(39.5 ,6,'Jumlah',1,0,'C',1);
$this->Cell(1 ,8,'',0,1);
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






$pdf->Header1();
$pdf->SetFillColor(176,224,230);
$pdf->SetFont('Arial','',9);
$no=1;
$totalpenerimaan=0;
$ngitung=0;
$konco=mysqli_query($config,"SELECT tbl_potongan.*,tbl_user.nama,tbl_user.nip FROM tbl_potongan,tbl_user WHERE tbl_potongan.id_gaji='$id_gaji' AND (tbl_user.id_user=tbl_potongan.id_user AND kode_potongan<>28 AND tbl_user.status_tugas=2) GROUP BY tbl_potongan.id_user");
while($row=mysqli_fetch_array($konco)){
	

$pdf->Cell(6.5 ,6,''.$no++.'',1,0,'C');
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(11 ,6,''.$row['nip'].'',1,0,'C');
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(170.5 ,6,''.$row['nama'].'',1,1,'L');
$pdf->Cell(1 ,1,'',0,1);


$jhg=mysqli_query($config,"SELECT tbl_potongan.*,tbl_ref_potongan.uraian,tbl_ref_potongan.jenis_bank,tbl_ref_bank.nama_bank,tbl_ref_potongan.no_rekening,tbl_ref_potongan.atas_nama 
FROM tbl_potongan,tbl_ref_potongan,tbl_ref_bank WHERE tbl_potongan.kode_potongan=tbl_ref_potongan.id AND (tbl_ref_potongan.jenis_bank=tbl_ref_bank.kode_bank AND tbl_potongan.kode_potongan<>28 AND tbl_potongan.id_user='".$row['id_user']."')");
while($dat=mysqli_fetch_array($jhg)){
    $pdf->Cell(7.5 ,2,'',0,0);
    $pdf->Cell(57 ,12,''.$dat['uraian'].'',1,0,'L');
    $pdf->Cell(1 ,6,'',0,0);
    $x=$pdf->GetX();
    $y=$pdf->GetY();
    $pdf->Multicell(84,6,''.$dat['nama_bank'].', No. Rekening : '.$dat['no_rekening'].', Atas Nama : '.$dat['atas_nama'].' ',1,'L');
    
    $pdf->setXY($x+84,$y);
    $pdf->Cell(1 ,6,'',0,0);
    $pdf->Cell(39.5 ,12,'Rp '.number_format($dat['jumlah'] , 0, ',', '.').'',1,1,'R');
    $pdf->Cell(1 ,1,'',0,1);
    $totalpenerimaan=$totalpenerimaan+$dat['jumlah'];
}






$pdf->SetFillColor(255,255,0);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(149.5 ,6,'Sub Total',1,0,'R',1);
$pdf->Cell(1 ,1,'',0,0);
$pdf->Cell(39.5 ,6,'Rp '.number_format($totalpenerimaan , 0, ',', '.').'',1,1,'R',1);
$pdf->Cell(1 ,1,'',0,1);
$pdf->SetFont('Arial','',9);
$ngitung=$ngitung+$totalpenerimaan;
}






$pdf->SetFillColor(176,224,230);
$man=mysqli_query($config,"SELECT nama,nip FROM tbl_user WHERE jabatan=108 AND status_aktif=1");
list($manager,$nomornip)=mysqli_fetch_array($man);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(149.5 ,6,'Jumlah Keseluruhan',1,0,'C',1);
$pdf->Cell(1 ,1,'',0,0,'C');
$pdf->Cell(39.5 ,6,'Rp '.number_format($ngitung , 0, ',', '.').'',1,1,'R',1);
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



$pdf->AddPage();
$pdf->AliasNbPages();






$pdf->Header2();
$pdf->SetFillColor(176,224,230);
$pdf->SetFont('Arial','',9);
$no=1;

$ngitung=0;
$konco=mysqli_query($config,"SELECT tbl_potongan.*,tbl_user.nama,tbl_user.nip FROM tbl_potongan,tbl_user WHERE tbl_potongan.id_gaji='$id_gaji' AND (tbl_user.id_user=tbl_potongan.id_user AND kode_potongan<>28 AND tbl_user.status_tugas=1) GROUP BY tbl_potongan.id_user");
while($row=mysqli_fetch_array($konco)){
	

$pdf->Cell(6.5 ,6,''.$no++.'',1,0,'C');
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(11 ,6,''.$row['nip'].'',1,0,'C');
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(170.5 ,6,''.$row['nama'].'',1,1,'L');
$pdf->Cell(1 ,1,'',0,1);

$totalpenerimaan=0;
$jhg=mysqli_query($config,"SELECT tbl_potongan.*,tbl_ref_potongan.uraian,tbl_ref_potongan.jenis_bank,tbl_ref_bank.nama_bank,tbl_ref_potongan.no_rekening,tbl_ref_potongan.atas_nama 
FROM tbl_potongan,tbl_ref_potongan,tbl_ref_bank WHERE tbl_potongan.kode_potongan=tbl_ref_potongan.id AND (tbl_ref_potongan.jenis_bank=tbl_ref_bank.kode_bank AND tbl_potongan.kode_potongan<>28 AND tbl_potongan.id_user='".$row['id_user']."')");
while($dat=mysqli_fetch_array($jhg)){
    $pdf->Cell(7.5 ,2,'',0,0);
    $pdf->Cell(57 ,12,''.$dat['uraian'].'',1,0,'L');
    $pdf->Cell(1 ,6,'',0,0);
    $x=$pdf->GetX();
    $y=$pdf->GetY();
    $pdf->Multicell(84,6,''.$dat['nama_bank'].', No. Rekening : '.$dat['no_rekening'].', Atas Nama : '.$dat['atas_nama'].' ',1,'L');
    
    $pdf->setXY($x+84,$y);
    $pdf->Cell(1 ,6,'',0,0);
    $pdf->Cell(39.5 ,12,'Rp '.number_format($dat['jumlah'] , 0, ',', '.').'',1,1,'R');
    $pdf->Cell(1 ,1,'',0,1);
    $totalpenerimaan=$totalpenerimaan+$dat['jumlah'];
}






$pdf->SetFillColor(255,255,0);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(149.5 ,6,'Sub Total',1,0,'R',1);
$pdf->Cell(1 ,1,'',0,0);
$pdf->Cell(39.5 ,6,'Rp '.number_format($totalpenerimaan , 0, ',', '.').'',1,1,'R',1);
$pdf->Cell(1 ,1,'',0,1);
$pdf->SetFont('Arial','',9);
$ngitung=$ngitung+$totalpenerimaan;
}






$pdf->SetFillColor(176,224,230);
$man=mysqli_query($config,"SELECT nama,nip FROM tbl_user WHERE jabatan=108 AND status_aktif=1");
list($manager,$nomornip)=mysqli_fetch_array($man);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(149.5 ,6,'Jumlah Keseluruhan',1,0,'C',1);
$pdf->Cell(1 ,1,'',0,0,'C');
$pdf->Cell(39.5 ,6,'Rp '.number_format($ngitung , 0, ',', '.').'',1,1,'R',1);
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
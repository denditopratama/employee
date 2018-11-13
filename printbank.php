<?php
    //cek session
	session_start();
   if(empty($_SESSION['admin'])){
	   include 'logout.php';
   }
		 require('include/config.php');
		 date_default_timezone_set("Asia/Bangkok");
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
$this->Cell(30 ,23,'',0,0);
$this->Multicell(130,6,'REKAPITULASI PEMBAYARAN PENGHASILAN KARYAWAN BULAN : '.strtoupper($nm).' '.$tahuns.'',0,'C');
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
$pdf->Cell(103 ,6,'Nama Bank',1,0,'C',1);
$pdf->Cell(35 ,6,'Jumlah Karyawan',1,0,'C',1);
$pdf->Cell(40 ,6,'Jumlah Penghasilan',1,0,'C',1);
$pdf->Cell(1 ,8,'',0,1);

$pdf->SetFont('Arial','',9);
$no=1;
$totalbank=0;
$ngitung=0;
$konco=mysqli_query($config,"SELECT * FROM tbl_ref_bank");
while($row=mysqli_fetch_array($konco)){
	$hasilbanks=0;
	$jhg=mysqli_query($config,"SELECT COUNT(*) FROM tbl_identitas WHERE jenis_bank='".$row['kode_bank']."'");
	list($jumlahkeun)=mysqli_fetch_array($jhg);
	$mng=mysqli_query($config,"SELECT * FROM tbl_identitas WHERE jenis_bank='".$row['kode_bank']."'");
	while($rows=mysqli_fetch_array($mng)){
	$koncak=mysqli_query($config,"SELECT penerimaan_bersih FROM tbl_gaji WHERE id_gaji='$id_gaji' AND id_user='".$rows['id_user']."'");
	list($hasilbank)=mysqli_fetch_array($koncak);
	$hasilbanks=$hasilbanks+$hasilbank;
	$ngitung=$ngitung+1;
	}
$pdf->Cell(11.5 ,6,''.$no++.'',1,0,'C');
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(102 ,6,''.$row['nama_bank'].'',1,0,'C');
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(34 ,6,''.$jumlahkeun.'',1,0,'C');
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(39.5 ,6,'Rp '.number_format($hasilbanks , 0, ',', '.').'',1,1,'R');
$pdf->Cell(1 ,1,'',0,1);
$totalbank=$totalbank+$hasilbanks;
}

$man=mysqli_query($config,"SELECT nama,nip FROM tbl_user WHERE jabatan=108 AND status_aktif=1");
list($manager,$nomornip)=mysqli_fetch_array($man);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(114.5 ,6,'Jumlah Keseluruhan',1,0,'C',1);
$pdf->Cell(1 ,1,'',0,0,'C');
$pdf->Cell(34 ,6,''.$ngitung.'',1,0,'C',1);
$pdf->Cell(1 ,1,'',0,0,'C');
$pdf->Cell(39.5 ,6,'Rp '.number_format($totalbank , 0, ',', '.').'',1,1,'R',1);
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

//RINCIAN PENGHASILAN PERORANG BRAAAAAAAAAAAAAAAAAAAAAAAAAAY

$pdf->AddPage();
$totalbank=0;
$ngeb=mysqli_query($config,"SELECT * FROM tbl_ref_bank");
while($row=mysqli_fetch_array($ngeb)){
$pdf->SetFillColor(176,224,230);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(70 ,6,'Bank : '.$row['nama_bank'].'',0,1,'L');
$pdf->Cell(12 ,6,'No.',1,0,'C',1);
$pdf->Cell(15 ,6,'NIK',1,0,'C',1);
$pdf->Cell(88 ,6,'Nama',1,0,'C',1);
$pdf->Cell(35 ,6,'Nomor Rekening',1,0,'C',1);
$pdf->Cell(40 ,6,'Jumlah Penghasilan',1,0,'C',1);
$pdf->Cell(1 ,8,'',0,1);

$pdf->SetFont('Arial','',9);
$no=1;

$konco=mysqli_query($config,"SELECT * FROM tbl_identitas WHERE jenis_bank='".$row['kode_bank']."' AND(id_user<>8 AND id_user<>1 AND id_user<>9999)");
while($rows=mysqli_fetch_array($konco)){
$mu=mysqli_query($config,"SELECT nama,nip FROM tbl_user WHERE id_user='".$rows['id_user']."'");
list($nama,$nip)=mysqli_fetch_array($mu);
$bersih=mysqli_query($config,"SELECT penerimaan_bersih FROM tbl_gaji WHERE id_user='".$rows['id_user']."'");
list($pen_bersih)=mysqli_fetch_array($bersih);
	
	
	
$pdf->Cell(11.5 ,6,''.$no++.'',1,0,'C');
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(14 ,6,''.$nip.'',1,0,'C');
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(87 ,6,''.$nama.'',1,0,'C');
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(34 ,6,''.$rows['no_rekening'].'',1,0,'C');
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(39.5 ,6,'Rp '.number_format($pen_bersih , 0, ',', '.').'',1,1,'R');
	$pdf->Cell(1 ,1,'',0,1);
	$totalbank=$totalbank+$pen_bersih;}
	

}




$man=mysqli_query($config,"SELECT nama,nip FROM tbl_user WHERE jabatan=108 AND status_aktif=1");
list($manager,$nomornip)=mysqli_fetch_array($man);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(149.5 ,6,'Jumlah Keseluruhan',1,0,'C',1);

$pdf->Cell(1 ,1,'',0,0,'C');
$pdf->Cell(39.5 ,6,'Rp '.number_format($totalbank , 0, ',', '.').'',1,1,'R',1);
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
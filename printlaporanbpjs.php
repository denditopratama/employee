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
	if($this->page>0){

$this->SetFont('Arial','B',13);
$this->Image('./upload/logopdf.png',15,10,-500);

global $nm;
global $tahuns;
$this->Cell(0 ,0,'',0,1);
$this->Cell(60 ,0,'',0,0);
$this->Multicell(200,11,'DAFTAR PEMBAYARAN PREMI BPJS KETENAGAKERJAAN PERIODE '.strtoupper($nm).' '.$tahuns.'',0,'C');

$this->SetFont('Arial','B',9);
$this->Cell(1 ,3,'',0,1);

$this->SetFillColor(176,224,230);

$this->Multicell(8,15,'No.',1,'C',1);
$x=$this->GetX();
$y=$this->GetY();
$this->SetXY($x+9,$y-15);
$this->Multicell(70,15,'NIK / Nama',1,'C',1);
$xs=$this->GetX();
$ys=$this->GetY();
$this->SetXY($xs+80,$ys-15);
$this->Multicell(45,15,'NO. BPJSKT',1,'C',1);

$xs1=$this->GetX();
$ys1=$this->GetY();
$this->SetXY($xs1+126,$ys1-15);
$this->Cell(79 ,7,'KETENAGAKERJAAN',1,1,'C',1);
$this->Cell(10 ,6,'',0,1); 

$xs1=$this->GetX();
$ys1=$this->GetY();
$this->SetXY($xs1+206,$ys1-13);
$this->Cell(47 ,7,'JAMINAN PENSIUN',1,1,'C',1);
$this->Cell(10 ,6,'',0,1); 

$this->SetFont('Arial','B',6.5);


$xa=$this->GetX();
$ya=$this->GetY();
$this->SetXY($xa+126,$ya-5);
$this->Cell(15 ,7,'Upah',1,1,'C',1);
$this->Cell(10 ,6,'',0,1); 

$xa=$this->GetX();
$ya=$this->GetY();
$this->SetXY($xa+142,$ya-13);
$this->Cell(15 ,7,'JHT(5,70%)',1,1,'C',1);
$this->Cell(10 ,6,'',0,1); 

$xa=$this->GetX();
$ya=$this->GetY();
$this->SetXY($xa+158,$ya-13);
$this->Cell(15 ,7,'JKK(0,54%)',1,1,'C',1);
$this->Cell(10 ,6,'',0,1); 

$xa=$this->GetX();
$ya=$this->GetY();
$this->SetXY($xa+174,$ya-13);
$this->Cell(15 ,7,'JKM(0.30%)',1,1,'C',1);
$this->Cell(10 ,6,'',0,1); 

$xa=$this->GetX();
$ya=$this->GetY();
$this->SetXY($xa+190,$ya-13);
$this->Cell(15 ,7,'Jumlah',1,1,'C',1);
$this->Cell(10 ,6,'',0,1); 

$xa=$this->GetX();
$ya=$this->GetY();
$this->SetXY($xa+206,$ya-13);
$this->Cell(15 ,7,'PRSH(2%)',1,1,'C',1);
$this->Cell(10 ,6,'',0,1); 

$xa=$this->GetX();
$ya=$this->GetY();
$this->SetXY($xa+222,$ya-13);
$this->Cell(15 ,7,'KARY(1%)',1,1,'C',1);
$this->Cell(10 ,6,'',0,1); 

$xa=$this->GetX();
$ya=$this->GetY();
$this->SetXY($xa+238,$ya-13);
$this->Cell(15 ,7,'Jumlah',1,1,'C',1);
$this->Cell(10 ,6,'',0,1); 
$this->SetFont('Arial','B',9);
$xsz=$this->GetX();
$ysz=$this->GetY();
$this->SetXY($xsz+254,$ysz-21);
$this->Multicell(24,15,'TOTAL',1,'C',1);

	}
}
function Footer(){
	if($this->page>0){
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


//ASAL DARI JASA MARGA
$hj=mysqli_query($config,"SELECT * FROM tbl_user WHERE admin<>1 AND(admin<>9 AND id_user<>9999 AND status_aktif=1 AND status_tugas=1)");
$pdf->SetFont('Arial','B',9);
$pdf->Cell(46 ,2,'',0,1);
$pdf->Cell(46 ,6,'Asal Instansi : PT Jasa Marga (Persero) Tbk.',0,1);
$no=1;
$jmgaji=0;

$moki=0;
while($row=mysqli_fetch_array($hj)){
$jabax=mysqli_query($config,"SELECT no_bpjskt FROM tbl_identitas WHERE id_user='".$row['id_user']."'");	
list($nobpjs)=mysqli_fetch_array($jabax);
$gajix=mysqli_query($config,"SELECT gaji,t_jabatan,t_fungsional,t_perumahan,t_utilitas,t_transportasi,t_komunikasi FROM tbl_gaji_pokok WHERE admin='".$row['admin']."' AND(status_karyawan='".$row['status_karyawan']."' AND status_tugas='".$row['status_tugas']."')");
list($duitd,$t_jabatan,$t_fungsional,$t_perumahan,$t_utilitas,$t_transport,$t_komunikasi)=mysqli_fetch_array($gajix);

$ngejum=mysqli_query($config,"SELECT SUM(gaji)+SUM(t_jabatan)+SUM(t_fungsional)+SUM(t_perumahan)+SUM(t_utilitas)+SUM(t_transportasi)+SUM(t_komunikasi) FROM tbl_gaji_pokok WHERE admin='".$row['admin']."' AND(status_karyawan='".$row['status_karyawan']."' AND status_tugas='".$row['status_tugas']."')");
list($jumlahperorg)=mysqli_fetch_array($ngejum);

$pdf->SetFont('Arial','',10);

$pdf->SetTextColor(0,0,0);

$hmm=mysqli_query($config,"SELECT gaji_jm FROM tbl_gaji WHERE id_user='".$row['id_user']."' AND id_gaji='$id_gaji'");
list($gajijm)=mysqli_fetch_array($hmm);

$duit=$duitd+$t_jabatan+$t_fungsional+$t_perumahan+$t_utilitas+$t_transport+$t_komunikasi;

if($duit>=$gajijm){
	$duitgaji=$duit;
}	else if($duit<$gajijm){
	$duitgaji=$gajijm;
}
if($duitgaji>8000000){
	$prsh=161880;
	$kary=80940;
} else {
$prsh=round($duit*2/100);
$kary=round($duit*1/100);
}


$a1=round($duitgaji*5.70/100);
$a2=round($duitgaji*0.54/100);
$a3=round($duitgaji*0.30/100);
$jumlahprem=$a1+$a2+$a3;

$pdf->SetFont('Arial','',7);

$pdf->Cell(8 ,6,''.$no++.'.',1,0,'C');
$pdf->Cell(1 ,6,'',0,0,'C');
$pdf->Cell(10 ,6,''.$row['nip'].'',1,0,'C');
$pdf->Cell(1 ,6,'',0,0,'C');
$pdf->Cell(59 ,6,''.$row['nama'].'',1,'L');
$pdf->Cell(1 ,6,'',0,0,'C');
$pdf->Cell(45 ,6,''.$nobpjs.'',1,0,'R');
$pdf->Cell(1 ,6,'',0,0,'C');
$pdf->Cell(15 ,6,''.number_format($duitgaji , 0, ',', '.').'',1,0,'R');
$pdf->Cell(1 ,6,'',0,0,'C');
$pdf->Cell(15 ,6,''.number_format($a1 , 0, ',', '.').'',1,0,'R');
$pdf->Cell(1 ,6,'',0,0,'C');
$pdf->Cell(15 ,6,''.number_format($a2 , 0, ',', '.').'',1,0,'R');
$pdf->Cell(1 ,6,'',0,0,'C');
$pdf->Cell(15 ,6,''.number_format($a3 , 0, ',', '.').'',1,0,'R');
$pdf->Cell(1 ,6,'',0,0,'C');
$pdf->Cell(15 ,6,''.number_format($jumlahprem , 0, ',', '.').'',1,0,'R');
$pdf->Cell(1 ,6,'',0,0,'C');
$pdf->Cell(15 ,6,''.number_format($prsh , 0, ',', '.').'',1,0,'R');
$pdf->Cell(1 ,6,'',0,0,'C');
$pdf->Cell(15 ,6,''.number_format($kary , 0, ',', '.').'',1,0,'R');
$pdf->Cell(1 ,6,'',0,0,'C');

$pdf->SetFillColor(176,224,230);
$pdf->Cell(15 ,6,''.number_format($jumlahperorg , 0, ',', '.').'',1,0,'R');
$pdf->Cell(1 ,6,'',0,0,'C');
$pdf->Cell(24 ,6,''.number_format($jumlahperorg , 0, ',', '.').'',1,1,'R');

$jmgaji=$jmgaji+$duitgaji;
$moki=$moki+$jumlahperorg;
}

$jumlahorg=mysqli_num_rows($hj);
$q=$pdf->GetX();
$w=$pdf->GetY();
$pdf->Line($q,$w+1,$q+277.8,$w+1);
$pdf->Line($q,$w+8,$q+277.8,$w+8);
$pdf->Cell(52 ,1,'',0,0,'R');
$pdf->Cell(40 ,8.5,'Jumlah Karyawan : '.$jumlahorg.' Orang',0,0,'L');
$pdf->Cell(49 ,1,'',0,0,'R');
$pdf->Cell(21 ,8.5,''.number_format(123 , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,8.5,''.number_format(123 , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,8.5,''.number_format(123 , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,8.5,''.number_format(123 , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,8.5,''.number_format(123 , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,8.5,''.number_format(123 , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,8.5,''.number_format(123 , 0, ',', '.').'',0,0,'R');
$pdf->Cell(21 ,8.5,''.number_format($moki , 0, ',', '.').'',0,1,'R');

















//ASAL BUKAN DARI JASA MARGA :(
$pdf->Cell(21 ,7,'',0,1,'R');
$hjf=mysqli_query($config,"SELECT * FROM tbl_user WHERE admin<>1 AND(admin<>9 AND id_user<>9999 AND status_aktif=1 AND status_tugas=2)");
$pdf->SetFont('Arial','B',9);
$pdf->Cell(46 ,2,'',0,1);
$pdf->Cell(46 ,6,'Asal Instansi : PT Jasamarga Properti.',0,1);
$no=1;
$jmgaji=0;

$moki=0;
while($row=mysqli_fetch_array($hjf)){
$jabax=mysqli_query($config,"SELECT no_bpjskt FROM tbl_identitas WHERE id_user='".$row['id_user']."'");	
list($nobpjs)=mysqli_fetch_array($jabax);
$gajix=mysqli_query($config,"SELECT gaji,t_jabatan,t_fungsional,t_perumahan,t_utilitas,t_transportasi,t_komunikasi FROM tbl_gaji_pokok WHERE admin='".$row['admin']."' AND(status_karyawan='".$row['status_karyawan']."' AND status_tugas='".$row['status_tugas']."')");
list($duitd,$t_jabatan,$t_fungsional,$t_perumahan,$t_utilitas,$t_transport,$t_komunikasi)=mysqli_fetch_array($gajix);

$ngejum=mysqli_query($config,"SELECT SUM(gaji)+SUM(t_jabatan)+SUM(t_fungsional)+SUM(t_perumahan)+SUM(t_utilitas)+SUM(t_transportasi)+SUM(t_komunikasi) FROM tbl_gaji_pokok WHERE admin='".$row['admin']."' AND(status_karyawan='".$row['status_karyawan']."' AND status_tugas='".$row['status_tugas']."')");
list($jumlahperorg)=mysqli_fetch_array($ngejum);

$pdf->SetFont('Arial','',10);

$pdf->SetTextColor(0,0,0);

$hmm=mysqli_query($config,"SELECT gaji_jm FROM tbl_gaji WHERE id_user='".$row['id_user']."' AND id_gaji='$id_gaji'");
list($gajijm)=mysqli_fetch_array($hmm);

$duit=$duitd+$t_jabatan+$t_fungsional+$t_perumahan+$t_utilitas+$t_transport+$t_komunikasi;

if($duit>=$gajijm){
	$duitgaji=$duit;
}	else if($duit<$gajijm){
	$duitgaji=$gajijm;
}
if($duitgaji>8000000){
	$prsh=161880;
	$kary=80940;
} else {
$prsh=round($duit*2/100);
$kary=round($duit*1/100);
}


$a1=round($duitgaji*5.70/100);
$a2=round($duitgaji*0.54/100);
$a3=round($duitgaji*0.30/100);
$jumlahprem=$a1+$a2+$a3;

$pdf->SetFont('Arial','',7);

$pdf->Cell(8 ,6,''.$no++.'.',1,0,'C');
$pdf->Cell(1 ,6,'',0,0,'C');
$pdf->Cell(10 ,6,''.$row['nip'].'',1,0,'C');
$pdf->Cell(1 ,6,'',0,0,'C');
$pdf->Cell(59 ,6,''.$row['nama'].'',1,'L');
$pdf->Cell(1 ,6,'',0,0,'C');
$pdf->Cell(45 ,6,''.$nobpjs.'',1,0,'R');
$pdf->Cell(1 ,6,'',0,0,'C');
$pdf->Cell(15 ,6,''.number_format($duitgaji , 0, ',', '.').'',1,0,'R');
$pdf->Cell(1 ,6,'',0,0,'C');
$pdf->Cell(15 ,6,''.number_format($a1 , 0, ',', '.').'',1,0,'R');
$pdf->Cell(1 ,6,'',0,0,'C');
$pdf->Cell(15 ,6,''.number_format($a2 , 0, ',', '.').'',1,0,'R');
$pdf->Cell(1 ,6,'',0,0,'C');
$pdf->Cell(15 ,6,''.number_format($a3 , 0, ',', '.').'',1,0,'R');
$pdf->Cell(1 ,6,'',0,0,'C');
$pdf->Cell(15 ,6,''.number_format($jumlahprem , 0, ',', '.').'',1,0,'R');
$pdf->Cell(1 ,6,'',0,0,'C');
$pdf->Cell(15 ,6,''.number_format($prsh , 0, ',', '.').'',1,0,'R');
$pdf->Cell(1 ,6,'',0,0,'C');
$pdf->Cell(15 ,6,''.number_format($kary , 0, ',', '.').'',1,0,'R');
$pdf->Cell(1 ,6,'',0,0,'C');

$pdf->SetFillColor(176,224,230);
$pdf->Cell(15 ,6,''.number_format($jumlahperorg , 0, ',', '.').'',1,0,'R');
$pdf->Cell(1 ,6,'',0,0,'C');
$pdf->Cell(24 ,6,''.number_format($jumlahperorg , 0, ',', '.').'',1,1,'R');

$jmgaji=$jmgaji+$duitgaji;
$moki=$moki+$jumlahperorg;
}

$jumlahorg=mysqli_num_rows($hj);
$q=$pdf->GetX();
$w=$pdf->GetY();
$pdf->Line($q,$w+1,$q+277.8,$w+1);
$pdf->Line($q,$w+8,$q+277.8,$w+8);
$pdf->Cell(52 ,1,'',0,0,'R');
$pdf->Cell(40 ,8.5,'Jumlah Karyawan : '.$jumlahorg.' Orang',0,0,'L');
$pdf->Cell(49 ,1,'',0,0,'R');
$pdf->Cell(21 ,8.5,''.number_format(123 , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,8.5,''.number_format(123 , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,8.5,''.number_format(123 , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,8.5,''.number_format(123 , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,8.5,''.number_format(123 , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,8.5,''.number_format(123 , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,8.5,''.number_format(123 , 0, ',', '.').'',0,0,'R');
$pdf->Cell(21 ,8.5,''.number_format($moki , 0, ',', '.').'',0,1,'R');







$pdf->Output();


?>
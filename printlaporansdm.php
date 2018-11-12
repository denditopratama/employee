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
$this->Cell(85 ,0,'',0,0);
$this->Multicell(107,6,'DAFTAR GAJI KARYAWAN YANG DITUGASKAN DI PT JASAMARGA PROPERTI PERIODE : '.strtoupper($nm).' '.$tahuns.'',0,'C');

$this->SetFont('Arial','B',9);
$this->Cell(1 ,3,'',0,1);

$this->SetFillColor(176,224,230);

$this->Multicell(8,15,'No.',1,'C',1);
$x=$this->GetX();
$y=$this->GetY();
$this->SetXY($x+9,$y-15);
$this->Multicell(60,15,'Nama',1,'C',1);
$xs=$this->GetX();
$ys=$this->GetY();
$this->SetXY($xs+70,$ys-15);
$this->Multicell(70,15,'Jabatan',1,'C',1);
$xsz=$this->GetX();
$ysz=$this->GetY();
$this->SetXY($xsz+141,$ysz-15);
$this->Multicell(20,15,'Gaji',1,'C',1);

$xs1=$this->GetX();
$ys1=$this->GetY();
$this->SetXY($xs1+162,$ys1-15);
$this->Cell(95 ,7,'Tunjangan',1,1,'C',1);
$this->Cell(10 ,6,'',0,1); 
$this->SetFont('Arial','B',6.5);
$xa=$this->GetX();
$ya=$this->GetY();
$this->SetXY($xa+162,$ya-5);
$this->Cell(15 ,7,'Jabatan',1,1,'C',1);
$this->Cell(10 ,6,'',0,1); 

$xa=$this->GetX();
$ya=$this->GetY();
$this->SetXY($xa+178,$ya-13);
$this->Cell(15 ,7,'Fungsional',1,1,'C',1);
$this->Cell(10 ,6,'',0,1); 

$xa=$this->GetX();
$ya=$this->GetY();
$this->SetXY($xa+194,$ya-13);
$this->Cell(15 ,7,'Perumahan',1,1,'C',1);
$this->Cell(10 ,6,'',0,1); 

$xa=$this->GetX();
$ya=$this->GetY();
$this->SetXY($xa+210,$ya-13);
$this->Cell(15 ,7,'Utilitas',1,1,'C',1);
$this->Cell(10 ,6,'',0,1); 

$xa=$this->GetX();
$ya=$this->GetY();
$this->SetXY($xa+226,$ya-13);
$this->Cell(15 ,7,'Transport',1,1,'C',1);
$this->Cell(10 ,6,'',0,1); 

$xa=$this->GetX();
$ya=$this->GetY();
$this->SetXY($xa+242,$ya-13);
$this->Cell(15 ,7,'Komunikasi',1,1,'C',1);
$this->Cell(10 ,6,'',0,1); 
$this->SetFont('Arial','B',9);
$xsz=$this->GetX();
$ysz=$this->GetY();
$this->SetXY($xsz+258,$ysz-21);
$this->Multicell(20,15,'TOTAL',1,'C',1);

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
$jmjabat=0;
$jmfungsional=0;
$jmperumahan=0;
$jmutilitas=0;
$jmtransport=0;
$jmkomunikasi=0;
$moki=0;
while($row=mysqli_fetch_array($hj)){
$jabax=mysqli_query($config,"SELECT jabatan FROM tbl_ref_jabatan WHERE id='".$row['jabatan']."'");	
list($jabatans)=mysqli_fetch_array($jabax);
$gajix=mysqli_query($config,"SELECT gaji,t_jabatan,t_fungsional,t_perumahan,t_utilitas,t_transportasi,t_komunikasi FROM tbl_gaji_pokok WHERE kelas_jabatan='".$row['kelas_jabatan']."' AND(status_karyawan='".$row['status_karyawan']."' AND status_tugas='".$row['status_tugas']."')");
list($duit,$t_jabatan,$t_fungsional,$t_perumahan,$t_utilitas,$t_transport,$t_komunikasi)=mysqli_fetch_array($gajix);

$ngejum=mysqli_query($config,"SELECT SUM(gaji)+SUM(t_jabatan)+SUM(t_fungsional)+SUM(t_perumahan)+SUM(t_utilitas)+SUM(t_transportasi)+SUM(t_komunikasi) FROM tbl_gaji_pokok WHERE kelas_jabatan='".$row['kelas_jabatan']."' AND(status_karyawan='".$row['status_karyawan']."' AND status_tugas='".$row['status_tugas']."')");
list($jumlahperorg)=mysqli_fetch_array($ngejum);

$pdf->SetFont('Arial','',10);

$pdf->SetTextColor(0,0,0);

	

$pdf->SetFont('Arial','',7);

$pdf->Cell(8 ,6,''.$no++.'.',0,0,'C');
$pdf->Cell(50 ,6,''.$row['nama'].'',0,'L');
$pdf->Cell(11 ,6,'',0,0,'C');
$pdf->Cell(49 ,6,''.$jabatans.'',0,'L');
$pdf->Cell(28 ,6,'',0,0,'C');
$pdf->Cell(16 ,6,''.number_format($duit , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,6,''.number_format($t_jabatan , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,6,''.number_format($t_fungsional , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,6,''.number_format($t_perumahan , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,6,''.number_format($t_utilitas , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,6,''.number_format($t_transport , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,6,''.number_format($t_komunikasi , 0, ',', '.').'',0,0,'R');

$pdf->SetFillColor(176,224,230);
$pdf->Cell(21 ,6,''.number_format($jumlahperorg , 0, ',', '.').'',0,1,'R');
$jmgaji=$jmgaji+$duit;
$jmjabat=$jmjabat+$t_jabatan;
$jmfungsional=$jmfungsional+$t_fungsional;
$jmperumahan=$jmperumahan+$t_perumahan;
$jmutilitas=$jmutilitas+$t_utilitas;
$jmtransport=$jmtransport+$t_transport;
$jmkomunikasi=$jmkomunikasi+$t_komunikasi;
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
$pdf->Cell(21 ,8.5,''.number_format($jmgaji , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,8.5,''.number_format($jmjabat , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,8.5,''.number_format($jmfungsional , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,8.5,''.number_format($jmperumahan , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,8.5,''.number_format($jmutilitas , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,8.5,''.number_format($jmtransport , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,8.5,''.number_format($jmkomunikasi , 0, ',', '.').'',0,0,'R');
$pdf->Cell(21 ,8.5,''.number_format($moki , 0, ',', '.').'',0,1,'R');

















//ASAL BUKAN DARI JASA MARGA :(
$pdf->Cell(21 ,7,'',0,1,'R');
$hjf=mysqli_query($config,"SELECT * FROM tbl_user WHERE admin<>1 AND(admin<>9 AND id_user<>9999 AND status_aktif=1 AND status_tugas=2)");
$pdf->SetFont('Arial','B',9);
$pdf->Cell(46 ,2,'',0,1);
$pdf->Cell(46 ,6,'Asal Instansi : PT Jasamarga Properti',0,1);
$no=1;
$duits=0;
$totjabat=0;
$totfungsional=0;
$totperumahan=0;
$totutilitas=0;
$tottransport=0;
$totkomunikasi=0;
$mokay=0;
while($row=mysqli_fetch_array($hjf)){
$jabax=mysqli_query($config,"SELECT jabatan FROM tbl_ref_jabatan WHERE id='".$row['jabatan']."'");	
list($jabatans)=mysqli_fetch_array($jabax);
$gajix=mysqli_query($config,"SELECT gaji,t_jabatan,t_fungsional,t_perumahan,t_utilitas,t_transportasi,t_komunikasi FROM tbl_gaji_pokok WHERE kelas_jabatan='".$row['kelas_jabatan']."' AND(status_karyawan='".$row['status_karyawan']."' AND status_tugas='".$row['status_tugas']."')");
list($duit,$t_jabatan,$t_fungsional,$t_perumahan,$t_utilitas,$t_transport,$t_komunikasi)=mysqli_fetch_array($gajix);

$ngejum=mysqli_query($config,"SELECT SUM(gaji)+SUM(t_jabatan)+SUM(t_fungsional)+SUM(t_perumahan)+SUM(t_utilitas)+SUM(t_transportasi)+SUM(t_komunikasi) FROM tbl_gaji_pokok WHERE kelas_jabatan='".$row['kelas_jabatan']."' AND(status_karyawan='".$row['status_karyawan']."' AND status_tugas='".$row['status_tugas']."')");
list($jumlahperorgs)=mysqli_fetch_array($ngejum);

$pdf->SetFont('Arial','',10);

$pdf->SetTextColor(0,0,0);

	

$pdf->SetFont('Arial','',7);

$pdf->Cell(8 ,6,''.$no++.'.',0,0,'C');
$pdf->Cell(50 ,6,''.$row['nama'].'',0,'L');
$pdf->Cell(11 ,6,'',0,0,'C');
$pdf->Cell(49 ,6,''.$jabatans.'',0,'L');
$pdf->Cell(28 ,6,'',0,0,'C');
$pdf->Cell(16 ,6,''.number_format($duit , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,6,''.number_format($t_jabatan , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,6,''.number_format($t_fungsional , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,6,''.number_format($t_perumahan , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,6,''.number_format($t_utilitas , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,6,''.number_format($t_transport , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,6,''.number_format($t_komunikasi , 0, ',', '.').'',0,0,'R');

$pdf->SetFillColor(176,224,230);
$pdf->Cell(21 ,6,''.number_format($jumlahperorgs , 0, ',', '.').'',0,1,'R');
$duits=$duits+$duit;
$totjabat=$totjabat+$t_jabatan;
$totfungsional=$totfungsional+$t_fungsional;
$totperumahan=$totperumahan+$t_perumahan;
$totutilitas=$totutilitas+$t_utilitas;
$tottransport=$tottransport+$t_transport;
$totkomunikasi=$totkomunikasi+$t_komunikasi;
$mokay=$mokay+$jumlahperorgs;
}



$jumlahorgjmp=mysqli_num_rows($hjf);
$q=$pdf->GetX();
$w=$pdf->GetY();
$pdf->Line($q,$w+1,$q+277.8,$w+1);
$pdf->Line($q,$w+8,$q+277.8,$w+8);
$pdf->Cell(52 ,1,'',0,0,'R');
$pdf->Cell(40 ,8.5,'Jumlah Karyawan : '.$jumlahorgjmp.' Orang',0,0,'L');
$pdf->Cell(49 ,1,'',0,0,'R');
$pdf->Cell(21 ,8.5,''.number_format($duits , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,8.5,''.number_format($totjabat , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,8.5,''.number_format($totfungsional , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,8.5,''.number_format($totperumahan , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,8.5,''.number_format($totutilitas , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,8.5,''.number_format($tottransport , 0, ',', '.').'',0,0,'R');
$pdf->Cell(16 ,8.5,''.number_format($totkomunikasi , 0, ',', '.').'',0,0,'R');
$pdf->Cell(21 ,8.5,''.number_format($mokay , 0, ',', '.').'',0,1,'R');







$pdf->Output();


?>
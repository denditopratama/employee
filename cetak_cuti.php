<?php
    //cek session
	session_start();
   if(empty($_SESSION['admin'])){
	   include 'logout.php';
   }
		 require('include/config.php');
		 
	$id=mysqli_real_escape_string($config,base64_decode($_GET['id']));
	$is=mysqli_query($config,"SELECT id_user,alasan,tgl_awal,tgl_akhir,status_manager,status_gm,status_sdm,nama,divisi,status_sdm,file,ket FROM tbl_cuti WHERE id='$id'");
    list($id_user,$alasan,$tgl_awal,$tgl_akhir,$status_manager,$status_gm,$status_sdm,$nama,$divisi,$status_sdm,$file,$keterangans)=mysqli_fetch_array($is);
    $gb=mysqli_query($config,"SELECT tgl_bakti FROM tbl_identitas WHERE id_user='$id_user'");
    list($tgl_bakti)=mysqli_fetch_array($gb);
    $mb=mysqli_query($config,"SELECT admin,jabatan,divisi,sub_unit,nip FROM tbl_user WHERE id_user='$id_user'");
    list($admin,$jabatan,$divisi,$sub_unit,$nip)=mysqli_fetch_array($mb);
		
		$bulans=date('m',strtotime($tgl_bakti));
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

                                        $bulanawal=date('m',strtotime($tgl_awal));
										if($bulanawal == "01"){
                                            $nms = "Januari";
                                        } elseif($bulanawal == "02"){
                                            $nms = "Februari";
                                        } elseif($bulanawal == "03"){
                                            $nms = "Maret";
                                        } elseif($bulanawal == "04"){
                                            $nms = "April";
                                        } elseif($bulanawal == "05"){
                                            $nms = "Mei";
                                        } elseif($bulanawal == "06"){
                                            $nms = "Juni";
                                        } elseif($bulanawal == "07"){
                                            $nms = "Juli";
                                        } elseif($bulanawal == "08"){
                                            $nms = "Agustus";
                                        } elseif($bulanawal == "09"){
                                            $nms = "September";
                                        } elseif($bulanawal == "10"){
                                            $nms = "Oktober";
                                        } elseif($bulanawal == "11"){
                                            $nms = "November";
                                        } elseif($bulanawal == "12"){
                                            $nm = "Desember";
                                        }

                                        $bulanakhir=date('m',strtotime($tgl_akhir));
										if($bulanakhir == "01"){
                                            $nmd = "Januari";
                                        } elseif($bulanakhir == "02"){
                                            $nmd = "Februari";
                                        } elseif($bulanakhir == "03"){
                                            $nmd = "Maret";
                                        } elseif($bulanakhir == "04"){
                                            $nmd = "April";
                                        } elseif($bulanakhir == "05"){
                                            $nmd = "Mei";
                                        } elseif($bulanakhir == "06"){
                                            $nmd = "Juni";
                                        } elseif($bulanakhir == "07"){
                                            $nmd = "Juli";
                                        } elseif($bulanakhir == "08"){
                                            $nmd = "Agustus";
                                        } elseif($bulanakhir == "09"){
                                            $nmd = "September";
                                        } elseif($bulanakhir == "10"){
                                            $nmd = "Oktober";
                                        } elseif($bulanakhir == "11"){
                                            $nmd = "November";
                                        } elseif($bulanakhir == "12"){
                                            $nmd = "Desember";
                                        }
		
		ob_start();
	require('./fpdf/fpdf.php');

$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();

//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',16);
$pdf->Image('./upload/logopdf.png',10,10,-400);
$pdf->Cell(189 ,15,'',0,1);//end of line
$pdf->Cell(57 ,23,'',0,0);//end of line
$pdf->Cell(189 ,7,'',0,1);//end of line
$pdf->Cell(48 ,23,'',0,0);//end of line
$pdf->Multicell(100,6,'PERMOHONAN CUTI TAHUNAN',0,'C');
$pdf->Cell(189 ,8,'',0,1);//end of line
$pdf->Line(30,28,180,28);
$pdf->Line(30,41,180,41);
$pdf->Line(30,28,30,41);
$pdf->Line(180,28,180,41);

				

$pdf->SetFont('Arial','',12);
$pdf->Cell(130 ,5,'',0,1);
$pdf->Cell(130 ,5,'',0,1);
$pdf->Cell(15 ,1,'',0,0);
$pdf->Cell(8 ,1,'Yth.',0,0);
$pdf->SetFont('Arial','B',12);
if($admin>5){
    $hj=mysqli_query($config,"SELECT tbl_ref_jabatan.jabatan,tbl_user.nama,tbl_user.jabatan FROM tbl_user,tbl_ref_jabatan WHERE tbl_user.jabatan=tbl_ref_jabatan.id AND(tbl_user.admin=5 AND tbl_user.sub_unit='$sub_unit' AND tbl_user.divisi='$divisi')");
    if(mysqli_num_rows($hj)>0){
        list($jbtn,$atasan)=mysqli_fetch_array($hj);
        $pdf->Cell(120 ,1,''.ucwords(strtolower($jbtn)).'',0,1);
    } else {
        $jh=mysqli_query($config,"SELECT tbl_ref_jabatan.jabatan,tbl_user.nama,tbl_user.jabatan FROM tbl_user,tbl_ref_jabatan WHERE tbl_user.jabatan=tbl_ref_jabatan.id AND(tbl_user.admin=4 AND tbl_user.divisi='$divisi')");
        list($jbtn,$atasan)=mysqli_fetch_array($jh);
        $pdf->Cell(120 ,1,''.ucwords(strtolower($jbtn)).'',0,1);
    }
    
    
} else if($admin==5){
   
   
        $jh=mysqli_query($config,"SELECT tbl_ref_jabatan.jabatan,tbl_user.nama,tbl_user.jabatan FROM tbl_user,tbl_ref_jabatan WHERE tbl_user.jabatan=tbl_ref_jabatan.id AND(tbl_user.admin=4 AND tbl_user.divisi='$divisi')");
        list($jbtn,$atasan)=mysqli_fetch_array($jh);
        $pdf->Cell(120 ,1,''.ucwords(strtolower($jbtn)).'',0,1);
    }

    else if($admin==4){
    if($divisi==4){
        $hj=mysqli_query($config,"SELECT tbl_ref_jabatan.jabatan,tbl_user.nama,tbl_user.jabatan FROM tbl_user,tbl_ref_jabatan WHERE tbl_user.jabatan=tbl_ref_jabatan.id AND(tbl_ref_jabatan.jabatan LIKE '%DIREKTUR TEKNIK%' AND tbl_user.admin=3)");  
    } else {
        $hj=mysqli_query($config,"SELECT tbl_ref_jabatan.jabatan,tbl_user.nama,tbl_user.jabatan FROM tbl_user,tbl_ref_jabatan WHERE tbl_user.jabatan=tbl_ref_jabatan.id AND(tbl_ref_jabatan.jabatan LIKE '%DIREKTUR KEUANGAN%' AND tbl_user.admin=3)");
    }
    
    if(mysqli_num_rows($hj)>0){
        list($jbtn,$atasan)=mysqli_fetch_array($hj);
      
        $pdf->Cell(120 ,1,''.ucwords(strtolower($jbtn)).'',0,1);
    } 
    
   
} else if($admin==3 || $admin==2 || $admin==1){
    $jh=mysqli_query($config,"SELECT tbl_ref_jabatan.jabatan,tbl_user.nama,tbl_user.jabatan FROM tbl_user,tbl_ref_jabatan WHERE tbl_user.jabatan=tbl_ref_jabatan.id AND tbl_user.admin=2");
        list($jbtn,$atasan)=mysqli_fetch_array($jh);
        $pdf->Cell(120 ,1,''.ucwords(strtolower($jbtn)).'',0,1);
    } 
    
   

$pdf->SetFont('Arial','',12);
$pdf->Cell(15 ,1,'',0,0);
$pdf->Cell(8 ,10,'PT Jasamarga Properti',0,1);
$pdf->Cell(15 ,1,'',0,0);
$pdf->Cell(8 ,1,'Di',0,1);
$pdf->Cell(15 ,1,'',0,0);
$pdf->Cell(8 ,10,'Tempat',0,1);
$pdf->Cell(15 ,1,'',0,1);
$pdf->Cell(15 ,1,'',0,0);
$pdf->Cell(8 ,14,'Yang bertandatangan dibawah ini :',0,1);
$pdf->Cell(25 ,5,'',0,0);
$pdf->Cell(7.5 ,5,'a.',0,0);
$pdf->Cell(30 ,5,'Nama / NIK',0,0);
$pdf->Cell(8 ,5,':',0,0,'R');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(37 ,5,''.$nama.' / '.$nip.'',0,1,'L');
$pdf->SetFont('Arial','',12);
$hjs=mysqli_query($config,"SELECT tbl_ref_jabatan.jabatan,tbl_user.jabatan FROM tbl_user,tbl_ref_jabatan WHERE tbl_user.jabatan=tbl_ref_jabatan.id AND tbl_user.id_user='$id_user'");
list($jabatung)=mysqli_fetch_array($hjs);
$pdf->Cell(25 ,7,'',0,0);
$pdf->Cell(7.5 ,7,'b.',0,0);
$pdf->Cell(30 ,7,'Jabatan',0,0);
$pdf->Cell(8 ,7,':',0,0,'R');
$pdf->Cell(37 ,7,''.ucwords(strtolower($jabatung)).'',0,1,'L');

$pdf->Cell(25 ,6,'',0,0);
$pdf->Cell(7.5 ,6,'c.',0,0);
$pdf->Cell(30 ,6,'Tanggal Bakti',0,0);
$pdf->Cell(8 ,6,':',0,0,'R');
$pdf->Cell(37 ,6,''.date('d',strtotime($tgl_bakti)).' '.$nm.' '.date('Y',strtotime($tgl_bakti)).'',0,1,'L');


$pdf->Cell(15 ,1,'',0,1);
$pdf->Cell(15 ,1,'',0,0);
$pdf->Cell(8 ,14,'Bermaksud mengajukan permohonan Cuti :',0,1);
$thn=date('Y',strtotime($tgl_awal));
$uu=array();
$no=1;

 $yokitas=mysqli_query($config,"SELECT * FROM tbl_cuti WHERE YEAR(tgl_awal)='$thn' AND(id_user='$id_user') ORDER BY id ASC");
 while($d=mysqli_fetch_array($yokitas)){
     array_push($uu,$d['id']);
 }
 $kog=array_search($id, $uu);
$pdf->Cell(25 ,6,'',0,0);
$pdf->Cell(7.5 ,6,'a.',0,0);
$pdf->Cell(30 ,6,'Cuti Tahunan yang ke',0,0);
$pdf->Cell(20 ,6,':',0,0,'R');
$pdf->Cell(37 ,6,''.($kog+1).' Tahun '.$thn.'',0,1,'L');

$perbedaans = mysqli_real_escape_string($config,date_diff(date_create($tgl_akhir), date_create($tgl_awal))->days+1);
$pdf->Cell(25 ,6,'',0,0);
$pdf->Cell(7.5 ,6,'b.',0,0);
$pdf->Cell(30.5 ,6,'Lamanya Cuti / Tanggal',0,0);
$pdf->Cell(19.5 ,6,':',0,0,'R');
$pdf->SetFont('Arial','B',12);
if($perbedaans>9){
    $pdf->Cell(6 ,6,''.$perbedaans.'',0,0,'L');
}else{
    $pdf->Cell(4 ,6,''.$perbedaans.'',0,0,'L');
}

$pdf->SetFont('Arial','',12);
$pdf->Cell(8 ,6,' Hari / '.date('d',strtotime($tgl_awal)).' '.$nms.' '.date('Y',strtotime($tgl_awal)).' s/d '.date('d',strtotime($tgl_akhir)).' '.$nmd.' '.date('Y',strtotime($tgl_akhir)).'',0,1,'L');

$pdf->Cell(25 ,6,'',0,0);
$pdf->Cell(7.5 ,6,'c.',0,0);
$pdf->Cell(30 ,6,'Alasan Cuti',0,0);
$pdf->Cell(20 ,6,':',0,0,'R');
$pdf->Cell(37 ,6,''.$alasan.'',0,1,'L');

$pdf->Cell(25 ,6,'',0,0);
$pdf->Cell(7.5 ,6,'d.',0,0);
$pdf->Cell(30 ,6,'Cuti yang telah diambil',0,0);
$pdf->Cell(20 ,6,':',0,0,'R');
$mgz=mysqli_query($config,"SELECT COUNT(*) FROM tbl_cuti WHERE YEAR(tgl_awal)='$thn' AND(id_user='$id_user' AND id<'$id')");
list($cutiyangtelah)=mysqli_fetch_array($mgz);
$pdf->Cell(37 ,6,''.$cutiyangtelah.' Hari',0,1,'L');

$per=array();
$mgzx=mysqli_query($config,"SELECT * FROM tbl_cuti WHERE YEAR(tgl_awal)='$thn' AND(id_user='$id_user' AND id>'$id')");
if(mysqli_num_rows($mgz)<0){
    $mgz=mysqli_query($config,"SELECT * FROM tbl_cuti WHERE YEAR(tgl_awal)='$thn' AND(id_user='$id_user' AND id='$id')");   
} else {
    $mgz=mysqli_query($config,"SELECT * FROM tbl_cuti WHERE YEAR(tgl_awal)='$thn' AND(id_user='$id_user' AND id>'$id')"); 
}
while($x=mysqli_fetch_array($mgz)){
    $perbedaanx = mysqli_real_escape_string($config,date_diff(date_create($x['tgl_akhir']), date_create($x['tgl_awal']))->days); 
    array_push($per,$perbedaanx); 
}
$konx=array_sum($per);
$pdf->Cell(25 ,6,'',0,0);
$pdf->Cell(7.5 ,6,'e.',0,0);
$pdf->Cell(30 ,6,'Sisa Cuti',0,0);
$pdf->Cell(20 ,6,':',0,0,'R');
$mgzd=mysqli_query($config,"SELECT cuti FROM tbl_user WHERE id_user='$id_user'");
list($sisa)=mysqli_fetch_array($mgzd);
$pdf->Cell(37 ,6,''.($sisa+$konx).' Hari',0,1,'L');



$pdf->Line(23,170,187,170);
$pdf->Line(23,255,187,255);
$pdf->Line(23,170,23,255);
$pdf->Line(187,170,187,255);
$pdf->Line(115,170,115,255);
$pdf->Line(23,188,187,188);
$pdf->Line(23,205,115,205);


$pdf->SetFont('Arial','B',12);
$pdf->Cell(25 ,20,'',0,1);
$pdf->Cell(30 ,6,'',0,0);
$pdf->Cell(101 ,6,'Putusan Pejabat Berwenang',0,0);
$pdf->Cell(7.5 ,6,'Pemohon',0,1);
$pdf->Cell(25 ,10,'',0,0);
$pdf->Cell(25 ,10,'',0,1);
$pdf->Cell(27 ,10,'',0,0);

if($admin>5){
    if($status_manager==1){
        $setuju=3;
        $tidaksetuju='';
    } else {
        $setuju='';
        $tidaksetuju=3;
    }
} else if($admin==5){
    if($status_gm==1){
        $setuju=3;
        $tidaksetuju='';
    } else {
        $setuju='';
        $tidaksetuju=3;
    } 
}  else if($admin==4){
    if($status_sdm==1){
        $setuju=3;
        $tidaksetuju='';
    } else {
        $setuju='';
        $tidaksetuju=3;
    } 
} else if($admin<=3){
 
        $setuju=3;
        $tidaksetuju='';
   
}


$pdf->SetFont('ZapfDingbats','', 14);
$pdf->Cell(8, 8, $setuju, 1, 0,'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(2, 8, '', 0, 0,'C');
$pdf->Cell(25, 8, 'Setuju', 0, 0,'L');

$pdf->SetFont('ZapfDingbats','', 14);
$pdf->Cell(8, 8, $tidaksetuju, 1, 0,'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(30, 8, 'Tidak Setuju', 0, 0,'C');

$bulanakhirx=date('m');
if($bulanakhirx == "01"){
    $nmdx = "Januari";
} elseif($bulanakhirx == "02"){
    $nmdx = "Februari";
} elseif($bulanakhirx == "03"){
    $nmdx = "Maret";
} elseif($bulanakhirx == "04"){
    $nmdx = "April";
} elseif($bulanakhirx == "05"){
    $nmdx = "Mei";
} elseif($bulanakhirx == "06"){
    $nmdx = "Juni";
} elseif($bulanakhirx == "07"){
    $nmdx = "Juli";
} elseif($bulanakhirx == "08"){
    $nmdx = "Agustus";
} elseif($bulanakhirx == "09"){
    $nmdx = "September";
} elseif($bulanakhirx == "10"){
    $nmdx = "Oktober";
} elseif($bulanakhirx == "11"){
    $nmdx = "November";
} elseif($bulanakhirx == "12"){
    $nmdx = "Desember";
}

$pdf->Cell(12, 8, '', 0, 0,'C');
$pdf->Cell(60, 8, 'Jakarta, '.date('d').' '.$nmdx.' '.date('Y').' ', 0, 1,'C');
$pdf->Cell(25 ,6,'',0,1);
$pdf->Cell(15 ,6,'',0,0);
$pdf->Cell(20 ,6,'Catatan :',0,0);
$pdf->Cell(20 ,6,''.$keterangans.'',0,1);

$pdf->SetFont('Arial','BU',12);
$pdf->Cell(25 ,6,'',0,1);
$pdf->Cell(15 ,18,'',0,1);
$pdf->Cell(15 ,20,'',0,0);
$pdf->Cell(88,6,''.$atasan.'',0,0,'C');
$pdf->Cell(1 ,6,'',0,0);
$stringd = strip_tags($nama);
if (strlen($stringd) > 26) { $stringCutd = substr($stringd, 0, 15);
$endPointd = strrpos($stringCutd, 15);

  //if the string doesn't contain any space then it will cut without word basis.
$stringd = $endPointd? substr($stringCutd, 0, $endPointd) : substr($stringCutd, 0);
              $stringd .= '';}    
$pdf->Cell(73,6,''.$stringd.'',0,1,'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(15 ,6,'',0,0);

$pdf->MultiCell(88 ,6,''.ucwords(strtolower($jbtn)).'',0,'C');
$x=$pdf->GetX();
$y=$pdf->GetY();
$stringdx = strip_tags($jbtn);
if (strlen($stringdx) > 44) {
    $pdf->SetXY($x+106,$y-12);
} else {
    $pdf->SetXY($x+106,$y-6);
}

$pdf->MultiCell(70 ,6,''.ucwords(strtolower($jabatung)).'',0,'C');


$pdf->Output();


?>
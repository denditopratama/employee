<?php 

error_reporting(0);

session_start();

  

  include_once("../include/config.php");

  include_once("fungsi_indotgl.php");	

  include_once("fungsi_hari.php");	

  include_once("terbilang.php");	

  

  $id=mysqli_escape_string($configtm,$_GET['noperj']);

  

  $sql = "select perjanjian.*, branch.ttd,

  tbl_customer.nama, tbl_customer.namab, tbl_customer.alamat 

  from branch, perjanjian, tbl_customer 

  where perjanjian.id='$id' and perjanjian.customer=tbl_customer.id";  

  $sql1 = mysqli_query($configtm,$sql);			

  while($r2=mysqli_fetch_array($sql1)){						

	$nama=$r2['nama'].' '.$r2['namab'];

	$alamat=$r2['alamat'];

	$obyek=$r2['obyek'];

	$jenisusaha=$r2['jenisusaha'];

	$usaha=$r2['usaha'];

	$nolokasi=$r2['nolokasi'];

	$luas=$r2['luas'];

	

	$deposit=format_rp($r2['deposit']);

	$harga=format_rp($r2['harga']);

	$total=format_rp($r2['total']);

	$sc=format_rp($r2['sc']);

	$totalsc=$r2['sc']*$r2['periode'];

	$jumlah=$totalsc+$r2['total'];

	$ppn=10/100*$jumlah;

	$totalsewa=$jumlah+$jumlah;

	$terbilang=toTerbilang($totalsewa);	

	$terbilang=strtolower($terbilang);	

	$terbilang=ucwords($terbilang);	

	

	$periode=$r2['periode'];

	$sdate=tgl_indo($r2['sdate']);	

	$edate=tgl_indo($r2['edate']);	

	

	$surat1=$r2['surat1'];

	$suratd1=tgl_indo($r2['suratd1']);	

	

	$surat2=$r2['surat2'];

	$suratd2=tgl_indo($r2['suratd2']);	

	

	$surat3=$r2['surat3'];

	$suratd3=tgl_indo($r2['suratd3']);	

	

	$noperj=$r2['noperj'];

	$ttd=$r2['ttd'];

	

	if ($r2['branch']=='4') {

		$namatol="jalan tol purbaleunyi KM 88 jalur A";

		$kabupaten="Kabupaten Purwakarta";

	} else if ($r2['branch']=='5') {

		$namatol="jalan tol purbaleunyi KM 88 jalur B";

		$kabupaten="Kabupaten Purwakarta";

	} else if ($r2['branch']=='3') {

		$namatol="jalan tol palikanci KM 207";

		$kabupaten="Kabupaten Cirebon";

	}  else if ($r2['branch']=='2') {

		$namatol="GTO";

		$kabupaten="Provinsi DKI Jakarta";

	} else if ($r2['branch']=='6') {

		$namatol="Graha Simatupang";

		$kabupaten="Provinsi DKI Jakarta";

	}

	$hariw=date('d');
	$bulaw=date('m');
	if($bulaw=1){
		$bulans='Januari';
	} else if($bulaw=2){
		$bulans='Febuari';
	} else if($bulaw=3){
		$bulans='Maret';
	} else if($bulaw=4){
		$bulans='April';
	} else if($bulaw=5){
		$bulans='Mei';
	} else if($bulaw=6){
		$bulans='Juni';
	} else if($bulaw=7){
		$bulans='Juli';
	} else if($bulaw=8){
		$bulans='Agustus';
	} else if($bulaw=9){
		$bulans='September';
	} else if($bulaw=10){
		$bulans='Oktober';
	} else if($bulaw=11){
		$bulans='November';
	} else if($bulaw=12){
		$bulans='Desember';
	}
	$tahunw=date('Y');

	$dt=explode("-",$r2['tglperj']);

	$tanggal=toTerbilang($dt[2]);	

	$bulan=getBulan($dt[1]);	

	$tahun=toTerbilang($dt[0]);	

	$hari=hari_indo($r2[tglperj]);	

	

  }


echo '<div id="export-content">
<h2 style="font-family: tahoma; font-size: 12px;">Perjanjian Sewa Menyewa</h2>
<img src="../upload/screenshots.png" width="300" height="80"/>';
$content = '<table>';            

			$content .= "<style type='text/css'>

			  .fulljustify {

			  text-align: justify;
			  

			}

			.fulljustify:after {

			  content: '';

			  display: inline-block;

			  width: 100%;

			}
			

			</style>";

	echo '<style>
	td{
		line-height:115%;
	}';

            $content .= "<table width='630'><tr height='20'>

            <td align='center'><font style='font-family: tahoma; font-size: 12px;'><b>PERJANJIAN SEWA MENYEWA</b></td>

			</tr>

			
			<tr><td align='center'><font style='font-family: tahoma; font-size: 12px;'>Nomor : ".$noperj."</td></tr>

			</table>

			<br>

			<table>

			<tr height='20'>            

			<td class='fulljustify'><font style='font-family: tahoma; font-size: 10.5px;'>Perjanjian Sewa Menyewa (Kententuan Umum Sewa Menyewa) ini dibuat
			dan ditandatangani pada hari <b>".$hari."</b> tanggal <b>".$hariw."</b> <b>".$bulans."</b> <b>".$tahunw."</b> oleh dan antara : </td>              

            </tr>";

			$mrk=mysqli_query($config,"SELECT tbl_user.nama,tbl_ref_jabatan.jabatan FROM tbl_user,tbl_ref_jabatan
			WHERE tbl_user.admin=4 AND(tbl_user.divisi=6 AND tbl_user.jabatan=tbl_ref_jabatan.id)");
			list($namas,$jabatung)=mysqli_fetch_array($mrk);


			$content .= "</table>

			<br>

			<table>

			<tr valign='top'>   

			<td align='left' width='30'><font style='font-family: tahoma; font-size: 10.5px;'><b>1.</b></td><td class='fulljustify'><font style='font-family: tahoma; font-size: 10.5px;'><b>PT JASAMARGA PROPERTI</b>, 
			suatu perseroan terbatas yang didirikan dan tunduk berdasarkan hukum dan peraturan perundang-undangan Republik Indonesia, 
			berkedudukan di Graha Simatupang Tower 2b, Jl. TB Simatupang Kav. 38 RT/RW 04/08, Kec. Pasar Minggu, Kel. Jatipadang, Pasar Minggu
			dalam perbuatan hukum ini diwakili oleh <b>".strtoupper($namas)."</b> dalam jabatannya sebagai <i><u>".ucwords(strtolower($jabatung))."</u></i><b> PT JASAMARGA PROPERTI</b>,
			dengan demikian berhak dan berwenang bertindak secara sah untuk dan atas nama <b>PT JASAMARGA PROPERTI</b>.<br>
			(Untuk selanjutnya disebut <b><i>\"PIHAK PERTAMA\"</i></b>).</td>     
            </tr>
			<tr height='20'><td colspan='2'></td></tr>
			<tr valign='top'>   
			<td align='left' width='30'><font style='font-family: tahoma; font-size: 10.5px;'><b>2.</b></td><td class='fulljustify'><font style='font-family: tahoma; font-size: 10.5px;'>
			<b>".strtoupper($usaha)."</b> suatu perseroan terbatas yang sudah terdaftar sebagai perseroan terbuka, didirikan dan tunduk berdasarkan hukum dan peraturan perundang-undangan Republik Indonesia, 
			berkedudukan di Graha Simatupang Tower 2b, Jl. TB Simatupang Kav. 38 RT/RW 04/08, Kec. Pasar Minggu, Kel. Jatipadang, Pasar Minggu
			dalam perbuatan hukum ini diwakili oleh <b>".strtoupper($nama)."</b> dalam jabatannya sebagai <i><u>Direktur Utama</u></i> <b>".strtoupper($usaha)."</b>,
			dengan demikian berhak dan berwenang bertindak secara sah untuk dan atas nama <b>".strtoupper($usaha)."</b>.<br>
			(Untuk selanjutnya disebut <b><i>\"PIHAK KEDUA\"</i></b>).

			</td>              

            </tr>

			<tr height='20'><td colspan='2'></td></tr>

			<tr valign='top'>   

			<td class='fulljustify' colspan='2'><font style='font-family: tahoma; font-size: 15px;'>

			Para Pihak masing masing dalam kedudukan tersebut diatas menerangkan terlebih dahulu:

			</td>              

            </tr>

			<tr valign='top'>   

			<td align='right'><font style='font-family: tahoma; font-size: 15px;'>1.</td><td class='fulljustify'><font style='font-family: tahoma; font-size: 15px;'>

			BAHWA,  <b>Pihak Pertama</b>  berdasarkan  Surat Keputusan Direktur Utama PT Jasamarga Properti Nomor : 007/KPTS-JMP/2016 tanggal 25 April 2016 tentang Tarif, Kewenangan, serta dasar Aturan Kontrak Sewa Tanah, 

			Bangunan dan Iklan di Tempat Istirahat dan Pelayanan (TIP) 

			KM 88 A/B Jalan Tol Purbaleunyi dan TIP KM 207A Jalan Tol Palikanci;

			</td>              

            </tr>

			<tr height='20'><td colspan='2'></td></tr>

			<tr valign='top'>   

			<td align='right'><font style='font-family: tahoma; font-size: 15px;'>2.</td><td class='fulljustify'><font style='font-family: tahoma; font-size: 15px;'>

			BAHWA,  <b>Pihak Kedua</b>  adalah penyewa ".$obyek." dengan nama usaha ".$usaha." pada ".ucwords($namatol)."

			</td>              

            </tr>

			<tr height='30'><td colspan='2'></td></tr>

			<tr valign='top'>   

			<td class='fulljustify' colspan='2'><font style='font-family: tahoma; font-size: 15px;'>

			Berdasarkan :

			</td>              

            </tr>";

			$content .= "</table>

			<table>

			<tr valign='top'>   

			<td align='right'><font style='font-family: tahoma; font-size: 15px;'>1.</td>

			<td colspan='3'><font style='font-family: tahoma; font-size: 15px;'>Surat Pernyataan Minat Pihak Kedua</td>              

            </tr>

			<tr valign='top'>   

			<td align='right'><font style='font-family: tahoma; font-size: 15px;'></td>

			<td width='20'><font style='font-family: tahoma; font-size: 15px;'>Nomor</td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'>:</td>

			<td><font style='font-family: tahoma; font-size: 15px;'>".$surat1."</td>

            </tr>

			<tr valign='top'>   

			<td align='right'><font style='font-family: tahoma; font-size: 15px;'></td>

			<td width='20'><font style='font-family: tahoma; font-size: 15px;'>Tanggal</td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'>:</td>

			<td><font style='font-family: tahoma; font-size: 15px;'>".$suratd1."</td>

            </tr>

			

			<tr valign='top'>   

			<td align='right'><font style='font-family: tahoma; font-size: 15px;'>2.</td>

			<td colspan='3'><font style='font-family: tahoma; font-size: 15px;'>Berita Acara Negosiasi Harga Sewa</td>              

            </tr>

			<tr valign='top'>   

			<td align='right'><font style='font-family: tahoma; font-size: 15px;'></td>

			<td width='20'><font style='font-family: tahoma; font-size: 15px;'>Nomor</td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'>:</td>

			<td><font style='font-family: tahoma; font-size: 15px;'>".$surat2."</td>

            </tr>

			<tr valign='top'>   

			<td align='right'><font style='font-family: tahoma; font-size: 15px;'></td>

			<td width='20'><font style='font-family: tahoma; font-size: 15px;'>Tanggal</td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'>:</td>

			<td><font style='font-family: tahoma; font-size: 15px;'>".$suratd2."</td>

            </tr>

			

			<tr valign='top'>   

			<td align='right'><font style='font-family: tahoma; font-size: 15px;'>3.</td>

			<td colspan='3'><font style='font-family: tahoma; font-size: 15px;'>Surat Persetujuan Hasil Negosiasi Direktur Utama</td>              

            </tr>

			<tr valign='top'>   

			<td align='right'><font style='font-family: tahoma; font-size: 15px;'></td>

			<td width='20'><font style='font-family: tahoma; font-size: 15px;'>Nomor</td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'>:</td>

			<td><font style='font-family: tahoma; font-size: 15px;'>".$surat3."</td>

            </tr>

			<tr valign='top'>   

			<td align='right'><font style='font-family: tahoma; font-size: 15px;'></td>

			<td width='20'><font style='font-family: tahoma; font-size: 15px;'>Tanggal</td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'>:</td>

			<td><font style='font-family: tahoma; font-size: 15px;'>".$suratd3."</td>

            </tr>

			</table>

			<table>			

			<tr height='20'><td></td></tr>

			<tr height='20'><td class='fulljustify'><font style='font-family: tahoma; font-size: 15px;'>

			<b>PARA PIHAK</b> telah setuju dan sepakat untuk mengadakan suatu Perjanjian Sewa-Menyewa  

			(untuk selanjutnya disebut 'perjanjian'), 

			dengan ketentuan dan syarat-syarat sebagai berikut:</td></tr>			

			</table>";

			

			$content .= "

			<br>			

			<table>			

			<tr height='20'>

			<td colspan='4' align='center'><font style='font-family: tahoma; font-size: 15px;'><b>PASAL 1</b></td>

			</tr>			

			<tr height='20'>

			<td colspan='4' align='center'><font style='font-family: tahoma; font-size: 15px;'><b>POKOK PERJANJIAN</b></td>

			</tr>			

			<tr height='20'><td colspan='4'></td></tr>

			<tr valign='top'>

			<td><font style='font-family: tahoma; font-size: 15px;'>1.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>

			Lokasi yang disewakan oleh <b>Pihak Pertama</b> kepada <b>Pihak Kedua</b> adalah sebagai berikut (denah terlampir):</td></tr>

			

			<tr height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td width='20'><font style='font-family: tahoma; font-size: 15px;'>Obyek Sewa</td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'>:</td>

			<td><font style='font-family: tahoma; font-size: 15px;'>".$obyek."</td> 

			</tr>

			

			<tr height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td width='20'><font style='font-family: tahoma; font-size: 15px;'>Jenis Usaha</td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'>:</td>

			<td><font style='font-family: tahoma; font-size: 15px;'>".$jenisusaha."</td> 

			</tr>

			

			<tr height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td width='20'><font style='font-family: tahoma; font-size: 15px;'>Nomor</td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'>:</td>

			<td><font style='font-family: tahoma; font-size: 15px;'>".$nolokasi."</td> 

			</tr>

			

			<tr height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td width='20'><font style='font-family: tahoma; font-size: 15px;'>Luas</td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'>:</td>

			<td><font style='font-family: tahoma; font-size: 15px;'><u>+</u>".$luas."</td> 

			</tr>

			

			<tr height='20'>

			<td valign='top'><font style='font-family: tahoma; font-size: 15px;'>2.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>

			<b>Pihak Kedua</b> hanya berhak untuk mendapatkan hak sewa atas objek tersebut di ayat 1 dan tidak diperbolehkan 

			menempati objek lain kecuali dengan persetujuan secara tertulis dari <b>Pihak Pertama</b>.</td></tr>

			

			<tr height='20'>

			<td valign='top'><font style='font-family: tahoma; font-size: 15px;'>3.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>

			<b>Pihak Pertama</b> berhak memindahkan <b>Pihak Kedua</b> dari objek tersebut di ayat 1 ke objek yang lain yang masih dalam lokasi 

			TIP yang sama apabila akan dilakukan konstruksi dan atau pembangunan di lokasi objek perjanjian.</td></tr>

			</table>";                          

			

			$content .= "

			<br>			

			<table>			

			<tr height='20'>

			<td colspan='4' align='center'><font style='font-family: tahoma; font-size: 15px;'><b>PASAL 2</b></td>

			</tr>			

			<tr height='20'>

			<td colspan='4' align='center'><font style='font-family: tahoma; font-size: 15px;'><b>JANGKA WAKTU PERJANJIAN</b></td>

			</tr>			

			<tr height='20'><td colspan='4'></td></tr>

			<tr valign='top'>

			<td><font style='font-family: tahoma; font-size: 15px;'>1.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>

			Perjanjian ini berlaku ".$periode." bulan terhitung 

			sejak tanggal ".$sdate." sampai dengan tanggal ".$edate.".</td></tr>

			

			<tr valign='top'>

			<td><font style='font-family: tahoma; font-size: 15px;'>2.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>

			Apabila dikehendaki oleh <b>Para Pihak</b>, sewa Tempat Usaha sebagaimana dimaksud dalam ayat (1) Pasal ini dapat 

			diperpanjang untuk jangka waktu tertentu berdasarkan kesepakatan <b>Para Pihak</b>, yang dituangkan dalam suatu kesepakatan 

			tertulis dan ditandatangani oleh <b>Para Pihak</b>.</td></tr>

			

			<tr valign='top'>

			<td><font style='font-family: tahoma; font-size: 15px;'>3.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>

			Untuk maksud sebagaimana ayat (2) tersebut, maka <b>Pihak Kedua</b> harus mengajukan permohonan secara 

			tertulis dalam bentuk Surat Pernyataan Minat kepada <b>Pihak Pertama</b> selambat-lambatnya 1 bulan sebelum berakhirnya 

			Perjanjian ini.</td></tr>

			

			<tr valign='top'>

			<td><font style='font-family: tahoma; font-size: 15px;'>4.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>

			Terhadap perpanjangan jangka waktu sebagaimana dimaksud dalam ayat 2 dan ayat 3 Pasal ini, maka <b>Pihak Kedua</b> akan 

			dikenakan biaya yang akan ditentukan oleh <b>Pihak Pertama</b>.</td></tr>			

			</table>";                          

			

			$content .= "

			<br>			

			<table>			

			<tr height='20'>

			<td colspan='4' align='center'><font style='font-family: tahoma; font-size: 15px;'><b>PASAL 3</b></td>

			</tr>			

			<tr height='20'>

			<td colspan='4' align='center'><font style='font-family: tahoma; font-size: 15px;'><b>BIAYA SEWA MENYEWA DAN <i>SERVICE CHARGE</i><br>UNIT OBJEK SEWA  </b></td>

			</tr>			

			<tr height='20'><td colspan='4'></td></tr>

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>1.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>

			Atas Objek Sewa ".$obyek."

			sebagaimana dimaksud dalam Pasal 2 Perjanjian ini, <b>Pihak Kedua</b> dikenakan biaya sewa sebagai berikut : </td></tr>

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td width='30'><font style='font-family: tahoma; font-size: 15px;'>Sewa ".$obyek." (Rp.".$harga."X".$periode." bulan)</td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'>=&nbsp;Rp</td>

			<td align='right'><font style='font-family: tahoma; font-size: 15px;'>".$total."</td>

			</tr>

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td width='30'><font style='font-family: tahoma; font-size: 15px;'>Service Charge (Rp.".$harga."X".$periode." bulan)</td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'>=&nbsp;Rp</td>

			<td align='right'><font style='font-family: tahoma; font-size: 15px;'>".format_rp($totalsc)."</td>

			</tr>

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td width='30'><font style='font-family: tahoma; font-size: 15px;'>Jumlah</td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'>=&nbsp;Rp</td>

			<td align='right'><font style='font-family: tahoma; font-size: 15px;'>".format_rp($jumlah)."</td>

			</tr>

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td width='30'><font style='font-family: tahoma; font-size: 15px;'>PPN 10%</td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'>=&nbsp;Rp</td>

			<td align='right'><font style='font-family: tahoma; font-size: 15px;'>".format_rp($ppn)."</td>

			</tr>

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td width='30'><font style='font-family: tahoma; font-size: 15px;'>Total Biaya Sewa Yang Harus Dibayarkan</td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'>=&nbsp;Rp</td>

			<td align='right'><font style='font-family: tahoma; font-size: 15px;'>".format_rp($totalsewa)."</td>

			</tr>

			<tr valign='top' height='20'>

			<td colspan='4'><font style='font-family: tahoma; font-size: 15px;'></td>			

			</tr>			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td width='30' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>Terbilang : ".$terbilang."</td>			

			</tr>

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>2</td>

			<td width='30' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>Biaya sewa menyewa dan service charge unit Tempat Usaha sebagaimana 

			dimaksud ayat 1 Pasal  ini belum termasuk biaya pemakaian Listrik dan Air yang dibebankan kepada <b>Pihak Kedua</b> setiap bulannya.</td>			

			</tr>

			</table>";                          

			

			$content .= "

			<br>			

			<table>			

			<tr height='20'>

			<td colspan='4' align='center'><font style='font-family: tahoma; font-size: 15px;'><b>PASAL 4</b></td>

			</tr>			

			<tr height='20'>

			<td colspan='4' align='center'><font style='font-family: tahoma; font-size: 15px;'><b>TATA CARA PEMBAYARAN</b></td>

			</tr>			

			<tr height='20'><td colspan='4'></td></tr>

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>1.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>

			Biaya sewa sebagaimana dimaksud ayat 1 Pasal 4 Perjanjian ini, dibayarkan oleh <b>Pihak Kedua</b> 

			kepada <b>Pihak Pertama</b> secara tunai selambat-lambatnya 14 (empat belas) hari kalender setelah Berita Acara Negosiasi 

			ditandatangani oleh <b>Para Pihak</b></td></tr>

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>2.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>

			Pembayaran biaya listrik dan air sebagaimana dimaksud ayat 2 pasal 4 perjanjian ini, dibayarkan selambat-lambatnya tanggal 10 bulan 

			berikutnya. Khusus untuk pengguna listrik dan air bulan terakhir masa sewa dibayarkan bersamaan  dengan pembayaran bulan sebelumnya</td></tr>

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>3.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>

			Pembayaran dilakukan dalam Rupiah dan dapat dinyatakan sah apabila sudah masuk ke rekening <b>Pihak Pertama</b> sebagai berikut :</td></tr>

			</table>";                          

			

			$content .= "

			<br>			

			<table>			

			<tr height='20'>

			<td colspan='4' align='center'><font style='font-family: tahoma; font-size: 15px;'><b>PASAL 5</b></td>

			</tr>			

			<tr height='20'>

			<td colspan='4' align='center'><font style='font-family: tahoma; font-size: 15px;'><b>PERUBAHAN, PENAMBAHAN DAN PERALIHAN</b></td>

			</tr>			

			<tr height='20'><td colspan='4'></td></tr>

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>1.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>

			Semua perubahan, penambahan dan Peralihan yang dilakukan atas ruangan hanya dapat dilakukan apabila 

			memenuhi syarat syarat dan ketentuan sebagai berikut:</td></tr>

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='5'><font style='font-family: tahoma; font-size: 15px;'>

			a.</td>

			<td class='fulljustify' colspan='2'><font style='font-family: tahoma; font-size: 15px;'>

			Perubahan dan atau penambahan luasan harus seijin Pihak Pertama;</td>

			</tr>

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='5'><font style='font-family: tahoma; font-size: 15px;'>

			b.</td>

			<td class='fulljustify' colspan='2'><font style='font-family: tahoma; font-size: 15px;'>

			Pihak Kedua tidak diperkenankan untuk memindahtangankan kepada pihak lain tanpa seijin Pihak Pertama;</td>

			</tr>

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>2.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>

			Segala biaya biaya, resiko dan akibat hukum yang timbul sehubungan dengan perubahan dan atau penambahan 

			yang dilakukan tanpa persetujuan tertulis terlebih dahulu dari Pihak Pertama menjadi beban dan tanggung 

			jawab <b>Pihak Kedua</b> sendiri sepenuhnya, dan sehubungan dengan hal tersebut <b>Pihak Kedua</b> 

			dengan ini membebaskan <b>Pihak Pertama</b> dari segala tuntutan dan atau gugatan dari pihak manapun juga mengenai hal tersebut.</td></tr>

			</table>";                          

			

			$content .= "

			<br>			

			<table>			

			<tr height='20'>

			<td colspan='4' align='center'><font style='font-family: tahoma; font-size: 15px;'><b>PASAL 6</b></td>

			</tr>			

			<tr height='20'>

			<td colspan='4' align='center'><font style='font-family: tahoma; font-size: 15px;'><b>PENGGUNAAN TEMPAT USAHA</b></td>

			</tr>			

			<tr height='20'><td colspan='4'></td></tr>

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>1.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>

			<b>Pihak Kedua</b> hanya diperkenankan untuk menggunakan Tempat Usaha dengan objek sewa ".$obyek."

			dengan nama usaha ".$usaha.", dan <b>Pihak Kedua</b> menjamin kepada <b>Pihak Pertama</b> bahwa 

			<b>Pihak Kedua</b> telah mendapatkan usahanya tersebut dari Pihak yang berwenang termaksud pajak 

			iklan/reklame Unit Lahan Usaha pada objek sewa tersebut.</td></tr>

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>2.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>

			<b>Pihak Kedua</b> wajib mendapatkan persetujuan terlebih dahulu dari <b>Pihak Pertama</b>, jika <b>Pihak Kedua</b> 

			hendak memakai objek sewa untuk Jenis Usaha lain daripada yang telah ditetapkan di atas.</td></tr>

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>3.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>

			Jika <b>Pihak Kedua</b> menggunakan Tempat Usaha menyimpang dari tujuan yang diuraikan pada ayat 2 Pasal ini 

			dan <b>Pihak Pertama</b> telah memberikan teguran mengenai hal tersebut sebanyak 3 (tiga) kali kepada 

			<b>Pihak Kedua</b>, maka <b>Pihak Pertama</b> berhak untuk menutup Objek Sewa dan mematikan listrik serta 

			memutuskan perjanjian ini, sampai <b>Pihak Kedua</b> membuktikan kepada <b>Pihak Pertama</b> bahwa Objek Sewa 

			hanya dipergunakan untuk jenis usaha yang telah ditetapkan di atas dalam waktu paling lambat 1 ( satu ) minggu</td></tr>

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>4.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>

			Dalam hal sebagaimana diatur Pasal 4 Perjanjian ini, <b>Pihak Kedua</b> 

			tetap berkewajiban membayar biaya pemakaian listrik, air dan biaya lainnya sesuai yang ditetapkan dalam Perjanjian ini.</td></tr>

			</table>";                          

			

			$content .= "

			<br>			

			<table>			

			<tr height='20'>

			<td colspan='4' align='center'><font style='font-family: tahoma; font-size: 15px;'><b>PASAL 7</b></td>

			</tr>			

			<tr height='20'>

			<td colspan='4' align='center'><font style='font-family: tahoma; font-size: 15px;'><b>KLAIM DARI PIHAK KETIGA</b></td>

			</tr>			

			<tr height='20'><td colspan='4'></td></tr>

			<tr valign='top' height='20'>			

			<td class='fulljustify' colspan='4'><font style='font-family: tahoma; font-size: 15px;'>

			<b>Pihak Kedua</b> menjamin dan membebaskan <b>Pihak Pertama</b> dari tuntutan ataupun dakwaan dari <b>Pihak Ketiga</b> yang 

			terjadi karena kelalaian ataupun kesalahan <b>Pihak Kedua</b> akibat penggunaan Objek Sewa tersebut selama perjanjian berlangsung.</td></tr>

			</table>";                          

			

			$content .= "

			<br>			

			<table>			

			<tr height='20'>

			<td colspan='4' align='center'><font style='font-family: tahoma; font-size: 15px;'><b>PASAL 8</b></td>

			</tr>			

			<tr height='20'>

			<td colspan='4' align='center'><font style='font-family: tahoma; font-size: 15px;'><b>HAK DAN KEWAJIBAN PARA PIHAK</b></td>

			</tr>			

			<tr height='20'><td colspan='4'></td></tr>

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>1.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>

			Hak dan Kewajiban <b>Pihak Pertama</b> :</td></tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'>a.</td>

			<td class='fulljustify' colspan='2'><font style='font-family: tahoma; font-size: 15px;'>Pihak Pertama berhak :</td>			

			</tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'>-</td>			

			<td class='fulljustify'><font style='font-family: tahoma; font-size: 15px;'>Menerima Pendapatan dari Hasil Objek Sewa.</td>			

			</tr>

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'>-</td>			

			<td class='fulljustify'><font style='font-family: tahoma; font-size: 15px;'>Menegur, memberi peringatan dan memutuskan kontrak kepada Pihak Kedua apabila melanggar kesepakatan Kontrak.</td>			

			</tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'>b.</td>

			<td class='fulljustify' colspan='2'><font style='font-family: tahoma; font-size: 15px;'>Pihak Pertama Wajib :</td>			

			</tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'>-</td>			

			<td class='fulljustify'><font style='font-family: tahoma; font-size: 15px;'>Menyediakan Fasilitas Objek Sewa, Listrik dan Air.</td>			

			</tr>

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'>-</td>			

			<td class='fulljustify'><font style='font-family: tahoma; font-size: 15px;'>Memelihara Fasilitas umum yang berada diluar Objek Sewa agar dapat berfungsi

            dengan baik.</td>			

			</tr>

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'>-</td>			

			<td class='fulljustify'><font style='font-family: tahoma; font-size: 15px;'>Menjaga Kebersihan Lingkungan di wilayah Objek Sewa.</td>

			</tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>2.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>

			Hak dan Kewajiban para Pihak Kedua</td></tr>

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'>a.</td>

			<td class='fulljustify' colspan='2'><font style='font-family: tahoma; font-size: 15px;'>Pihak Kedua berhak :</td>			

			</tr>

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'>-</td>			

			<td class='fulljustify'><font style='font-family: tahoma; font-size: 15px;'>Menerima Objek Sewa dengan kondisi siap diserah terimakan.</td>

			</tr>

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'>-</td>			

			<td class='fulljustify'><font style='font-family: tahoma; font-size: 15px;'>Mendapatkan Fasilitas Listrik dan Air.</td>

			</tr>

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'>-</td>			

			<td class='fulljustify'><font style='font-family: tahoma; font-size: 15px;'>Menerima informasi dengan jelas dari Pihak Pengelola.</td>

			</tr>

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'>b.</td>

			<td class='fulljustify' colspan='2'><font style='font-family: tahoma; font-size: 15px;'>Pihak Kedua wajib :</td>			

			</tr>

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'>-</td>			

			<td class='fulljustify'><font style='font-family: tahoma; font-size: 15px;'>Membayar Uang sewa, Listrik dan Air  tepat waktu.</td>

			</tr>

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'>-</td>			

			<td class='fulljustify'><font style='font-family: tahoma; font-size: 15px;'>Memelihara Objek Sewa dari kerusakan, baik yang diakibatkan karena

			kesengajaan maupun tidak disengaja.</td>

			</tr>

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'>-</td>			

			<td class='fulljustify'><font style='font-family: tahoma; font-size: 15px;'>Mencantumkan daftar harga produk yang dijual.</td>

			</tr>

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'>-</td>			

			<td class='fulljustify'><font style='font-family: tahoma; font-size: 15px;'>Menjaga Kebersihan Lingkungan di wilayah Objek Sewa.</td>

			</tr>

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'>-</td>			

			<td class='fulljustify'><font style='font-family: tahoma; font-size: 15px;'>Mentaati peraturan yang telah ditetapkan <b>Pihak Pertama</b>.</td>

			</tr>

			</table>";                          

			

			$content .= "

			<br>			

			<table>			

			<tr height='20'>

			<td colspan='4' align='center'><font style='font-family: tahoma; font-size: 15px;'><b>PASAL 9</b></td>

			</tr>			

			<tr height='20'>

			<td colspan='4' align='center'><font style='font-family: tahoma; font-size: 15px;'><b>BERAKHIRNYA PERJANJIAN</b></td>

			</tr>			

			<tr height='20'><td colspan='4'></td></tr>

			

			<tr valign='top' height='20'>			

			<td class='fulljustify' colspan='4'><font style='font-family: tahoma; font-size: 15px;'>

			Perjanjian ini berakhir apabila :</td></tr>

						

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>1.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>

			Berakhirnya jangka waktu Perjanjian ini</td></tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>2.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>Diakhiri lebih awal karena :</td></tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'>a.</td>

			<td class='fulljustify' colspan='2'><font style='font-family: tahoma; font-size: 15px;'><b>Pihak Kedua </b>menghendaki pengakhiran; atau</td>			

			</tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'>b.</td>

			<td class='fulljustify' colspan='2'><font style='font-family: tahoma; font-size: 15px;'>Kelalaian yang yang dirinci dalam Pasal 9 Perjanjian ini.</td>			

			</tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>3.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>Apabila Perjanjian ini berakhir maka <b>Pihak Pertama</b> 

			mempunyai hak untuk melakukan segala tindakan yang diperlukan untuk kepentingan <b>Pihak Pertama</b>.</td></tr>

			</table>";                          

			

			$content .= "

			<br>			

			<table>			

			<tr height='20'>

			<td colspan='4' align='center'><font style='font-family: tahoma; font-size: 15px;'><b>PASAL 10</b></td>

			</tr>			

			<tr height='20'>

			<td colspan='4' align='center'><font style='font-family: tahoma; font-size: 15px;'><b>DEPOSIT UNTUK LISTRIK DAN AIR</b></td>

			</tr>			

			<tr height='20'><td colspan='4'></td></tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>1.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>Kepada para penyewa dikenakan Deposit untuk Listrik 

			dan Air sebesar Rp. ".$deposit."</td></tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>2.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>Deposit sebagaimana dimaksud ayat 1 pasal ini akan 

			dikembalikan kepada <b>Pihak Kedua</b> apabila setelah berakhirnya masa sewa tidak terdapat tunggakan pembayaran listrik dan air</td></tr>

			</table>";                          

			

			$content .= "

			<br>			

			<table>			

			<tr height='20'>

			<td colspan='4' align='center'><font style='font-family: tahoma; font-size: 15px;'><b>PASAL 11</b></td>

			</tr>			

			<tr height='20'>

			<td colspan='4' align='center'><font style='font-family: tahoma; font-size: 15px;'><b>KELALAIAN DAN SANKSI</b></td>

			</tr>			

			<tr height='20'><td colspan='4'></td></tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>1.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>Apabila <b>PIHAK KEDUA</b> tidak dapat 

			membayar kewajiban kepada <b>PIHAK PERTAMA</b>  tepat pada waktunya, maka <b>PIHAK KEDUA</b> akan diberikan teguran 

			tertulis maksimal 3 (tiga) kali.</td></tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>2.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>Atas kelalaian sebagaimana dimaksud dalam ayat 1 pasal ini, 

			maka <b>Pihak Pertama</b> akan melakukan penutupan Objek Sewa.</td></tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>3.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>Apabila <b>Pihak Kedua</b> tidak 

			memperbaiki kelalaiannya sesuai dengan jangka waktu yang ditentukan sebagaimana dimaksud dalam ayat 2 pasal ini, 

			maka <b>Pihak Pertama</b> berhak memutuskan Perjanjian ini.</td></tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>4.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>Untuk melaksanakan pemutusan sebagaimana 

			dimaksud ayat 3 pasal ini <b>Pihak Pertama</b> cukup memberitahukan maksud pengakhiran Perjanjian ini 

			kepada <b>Pihak Kedua</b> selambat-lambatnya 7 (tujuh) hari kalender sebelumnya.</td></tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>5.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>Bahwa atas pemutusan Perjanjian tersebut di atas, 

			maka <b>Pihak Kedua</b> setuju untuk melepaskan berlakunya ketentuan pasal 1266 & 1267 Kitab Undang Undang Hukum Perdata.</td></tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>6.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>Apabila Pihak Kedua menghendaki berakhirnya masa sewa sebelum 

			waktu Perjanjian ini berakhir maka <b>Pihak Pertama</b> tidak dapat mengembalikan uang yang telah dibayarkan.</td></tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>7.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>Apabila Pihak Pertama menghendaki berakhirnya masa 

			sewa sebelum waktu Perjanjian ini berakhir yang diakibatkan oleh kesalahan <b>Pihak Kedua</b>, 

			maka <b>Pihak Pertama</b> tidak akan mengembalikan uang sewa yang sudah dibayarkan oleh  <b>Pihak Kedua</b>.</td></tr>

			

			</table>";                          

			

			$content .= "

			<br>			

			<table>			

			<tr height='20'>

			<td colspan='4' align='center'><font style='font-family: tahoma; font-size: 15px;'><b>PASAL 12</b></td>

			</tr>			

			<tr height='20'>

			<td colspan='4' align='center'><font style='font-family: tahoma; font-size: 15px;'><b>KEADAAN MEMAKSA ( FORCE MAJEURE )</b></td>

			</tr>			

			<tr height='20'><td colspan='4'></td></tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>1.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>Setiap peristiwa diluar kekuasaan Para Pihak 

			( atau akibatnya ) yang mengakibatkan Para Pihak tidak dapat memenuhi kewajibannya berdasarkan Perjanjian ini adalah meliputi :</td></tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'>a.</td>

			<td class='fulljustify' colspan='2'><font style='font-family: tahoma; font-size: 15px;'>Perang, permusuhan 

			( baik diumumkan maupun tidak ), invasi, serbuan musuh Negara asing, 

			pemberontakan, revolusi, kerusuhan, konflik senjata atau tindakan dari militer, perang saudara, 

			terorisme/gangguan terhadap masyarakat sipil, kerusuhan, sabotase;</td></tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'>b.</td>

			<td class='fulljustify' colspan='2'><font style='font-family: tahoma; font-size: 15px;'>Ionisasi, radiasi atau pencemaran radio aktif 

			dari limbah nuklir, dari pembuangan bahan bakar nuklir, ledakan toksik radioaktif, atau jenis ledakan yang membahayakan 

			barang-barang milik lainnya, kumpulan nuklir atau komponen nuklir;</td></tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'>c.</td>

			<td class='fulljustify' colspan='2'><font style='font-family: tahoma; font-size: 15px;'>Bencana alam, termasuk tetapi tidak terbatas pada gempa bumi, banjir, guntur, 

			tanah longsor, dan perubahan cuaca yang sangat buruk;</td></tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'>d.</td>

			<td class='fulljustify' colspan='2'><font style='font-family: tahoma; font-size: 15px;'>Kerusuhan massa, pemogokan, 

			<i>lock out ( penutupan perusahaan oleh pengusaha )</i>, 

			atau gangguan industri lainnya ( yang mempengaruhi pelaksanaan Perjanjian ini ) yang bukan merupakan kelalaian <b>Pihak Kedua</b>;</td></tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'>e.</td>

			<td class='fulljustify' colspan='2'><font style='font-family: tahoma; font-size: 15px;'>Terjadinya keadaan-keadaan di bawah ini :</td></tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'>(i)</td>

			<td class='fulljustify'><font style='font-family: tahoma; font-size: 15px;'>Adanya tindakan Pemerintah atau badan-badan yang bernaung dibawahnya 

			yang berdampak negatif terhadap kesanggupan <b>Pihak Kedua</b> untuk melaksanakan Perjanjian 

			( selain daripada alasan-alasan yang merupakan kelalaian Pihak Kedua ); atau</td>

			</tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'></td>

			<td class='fulljustify' width='3'><font style='font-family: tahoma; font-size: 15px;'>(ii)</td>

			<td class='fulljustify'><font style='font-family: tahoma; font-size: 15px;'>Suatu perubahan pada hukum, peraturan atau kebijaksanaan 

			yang terkait ( selain daripada alasan-alasan yang merupakan kelalaian <b>Pihak Kedua</b> ) yang dapat menjadi tidak mungkin 

			atau bertentangan dengan hukum bagi <b>Pihak Kedua</b> untuk melaksanakan hak-haknya atau untuk memenuhi setiap 

			kewajibannya sehubungan dengan perjanjian. atau</td>

			</tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>2.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>Jika terjadi Keadaan Kahar <i>(Force Majeure)</i>

			yang mengakibatkan salah satu pihak tidak dapat melaksanakan kewajibannya berdasarkan Perjanjian, maka pihak yang 

			berkepentingan harus segera memberitahukan kepada pihak lainnya secara tertulis tentang Keadaan Kahar <i>(Force Majeure)</i></td></tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>3.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>Apabila waktu 14 (Empat belas) hari sebagaimana 

			dimaksud dalam ayat 2 terlampaui, maka Keadaan Kahar <i>(Force Majeure)</i> dianggap tidak pernah ada</td></tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>4.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>Apabila pemberitahuan disampaikan oleh salah satu 

			pihak, maka pihak lainnya akan melakukan pemeriksaan terlebih dahulu, dan akan menyetujui atau 

			menolak secara tertulis mengenai Keadaan Kahar <i>( Force Majeure )</i> tersebut dalam jangka waktu selambat-lambatnya 7 ( Tujuh ) 

			hari sejak disampaikan pemberitahuan. Apabila dalam jangka waktu 7 ( Tujuh ) hari tersebut pihak yang diberitahu 

			tidak memberikan tanggapan, maka yang bersangkutan dianggap menyetujui Keadaan Kahar ( Force Majeure ) yang diberitahukan tersebut</td></tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>5.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>Sebagai akibat adanya Keadaan Kahar <i>( Force Majeure )</i>, 

			Perjanjian sewa menyewa ini diakhiri berdasarkan persetujuan kedua belah pihak, maka kerugian yang 

			timbul sebagai akibat adanya Keadaan Kahar ( Force Majeure ) tersebut ditanggung oleh masing-masing pihak 

			dan masing-masing pihak tidak dapat menuntut ganti rugi apapun terhadap pihak lainnya</td></tr>				

			</table>";                          

			

			$content .= "

			<br>			

			<table>			

			<tr height='20'>

			<td colspan='4' align='center'><font style='font-family: tahoma; font-size: 15px;'><b>PASAL 13</b></td>

			</tr>			

			<tr height='20'>

			<td colspan='4' align='center'><font style='font-family: tahoma; font-size: 15px;'><b>PERSELISIHAN</b></td>

			</tr>			

			<tr height='20'><td colspan='4'></td></tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>1.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>Jika terjadi Perselisihan antara 

			<b>PIHAK PERTAMA</b> dengan <b>PIHAK KEDUA</b>, maka Perselisihan tersebut akan diselesaikan 

			dengan cara musyawarah antara kedua belah pihak</td></tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>2.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>Jika dimaksud peselisihan ayat (1) 

			pasal ini tidak dapat dicapai, maka penyelesaiannya kepada penengah yaitu <b>PIHAK KETIGA</b> yang ditunjuk bersama 

			oleh <b>PIHAK PERTAMA dan KEDUA</b></td></tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>3.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>Jika penyelesaian dengan kedua belah pihak cara dimaksud ayat (1) 

			dan ayat (2) pasal ini tidak juga tercapai maka kedua belah pihak memilih penyelesaian melalui 

			Pengadilan Negeri ".$kabupaten.".</td></tr>			

			</table>";                          

			

			$content .= "

			<br>			

			<table>			

			<tr height='20'>

			<td colspan='4' align='center'><font style='font-family: tahoma; font-size: 15px;'><b>PASAL 14</b></td>

			</tr>			

			<tr height='20'>

			<td colspan='4' align='center'><font style='font-family: tahoma; font-size: 15px;'><b>PEMBERITAHUAN</b></td>

			</tr>			

			<tr height='20'><td colspan='4'></td></tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>1.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>Semua pemberitahuan dan surat menyurat 

			berdasarkan Perjanjian Sewa Menyewa ini hanya dianggap telah diterima apabila dibuat secara tertulis 

			disampaikan langsung atau melalui facsimile atau dengan surat tercatat dan disertai dengan tanda penerimaannya yang sah ke alamat :</td></tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td width='20'><font style='font-family: tahoma; font-size: 15px;'>Pihak Pertama</td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'>:</td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'><b>PT. Jasamarga Properti</b></td>

			</tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td width='20'><font style='font-family: tahoma; font-size: 15px;'>Alamat</td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'>:</td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'></td>

			</tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td width='20'><font style='font-family: tahoma; font-size: 15px;'>Telp/Fax</td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'>:</td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'></td>

			</tr>

			

			<tr valign='top' height='20'>

			<td colspan='4'><font style='font-family: tahoma; font-size: 15px;'></td>			

			</tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td width='20'><font style='font-family: tahoma; font-size: 15px;'>Pihak Kedua</td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'>:</td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'><b>".$nama."</b></td>

			</tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td width='20'><font style='font-family: tahoma; font-size: 15px;'>Alamat</td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'>:</td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'>".$alamat."</td>

			</tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'></td>

			<td width='20'><font style='font-family: tahoma; font-size: 15px;'>Telp/Fax</td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'>:</td>

			<td width='5'><font style='font-family: tahoma; font-size: 15px;'>".$phone."</td>

			</tr>

			

			</table>";                          

			

			$content .= "

			<br>			

			<table>			

			<tr height='20'>

			<td colspan='4' align='center'><font style='font-family: tahoma; font-size: 15px;'><b>PASAL 15</b></td>

			</tr>			

			<tr height='20'>

			<td colspan='4' align='center'><font style='font-family: tahoma; font-size: 15px;'><b>LAIN-LAIN DAN PENUTUP</b></td>

			</tr>			

			<tr height='20'><td colspan='4'></td></tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>1.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>Pihak Kedua dan / atau karyawan / pekerja / mitra 

			yang memiliki hubungan dengan Pihak Kedua wajib mengikuti tata tertib yang berlaku di TIP.</td></tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>1.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'><b>Pihak Kedua</b> dan / atau karyawan / pekerja / mitra 

			yang memiliki hubungan dengan <b>Pihak Kedua</b> wajib mengikuti tata tertib yang berlaku di TIP.</td></tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>2.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'><b>Pihak Kedua</b>

			tidak berhak mengatur dan melakukan keberatan atas kebijakan <b>Pihak Pertama</b> yang berhubungan 

			dengan Tata Ruang dan masuknya tenant baru.</td></tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>3.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'><b>Pihak Kedua</b>

			harus mematuhi ketentuan/peraturan lalu lintas, sesuai dengan ketentuan dan perundang-undangan yang berlaku.</td></tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>4.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>Hal-hal yang belum cukup diatur 

			dalam perjanjian ini akan diatur lebih lanjut dalam perjanjian tambahan atau addendum berdasarkan kesepakatan <b>Para Pihak</b>.</td></tr>

			

			<tr valign='top' height='20'>

			<td><font style='font-family: tahoma; font-size: 15px;'>5.</td>

			<td class='fulljustify' colspan='3'><font style='font-family: tahoma; font-size: 15px;'>Perjanjian ini dibuat dalam rangkap 2 (dua) 

			yang masing-masing bermaterai cukup dan mempunyai hukum sama-sama asli.</b></td></tr>

			

			</table>";                          

			

			$content .= "

			<br>			

			<br>

			<br>

			<table>			

			<tr height='100' valign='top'>

			<td align='center' width='290'><font style='font-family: tahoma; font-size: 15px;'><b>PIHAK KEDUA</b></td>

			<td align='center' width='290'><font style='font-family: tahoma; font-size: 15px;'><b>PIHAK PERTAMA</b></td>

			</tr>									

			<tr valign='top'>

			<td align='center'><font style='font-family: tahoma; font-size: 15px;'><b><u>".$nama."</b></td>

			<td align='center'><font style='font-family: tahoma; font-size: 15px;'><b><u>".$ttd."</b></td>

			</tr>									

			";

$content .= '</table>';



	echo $content;
echo '</div>';
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#export-content").wordExport();
});
</script>

<script type="text/javascript" src="../asset/js/Filesaver.js"></script>
<script type="text/javascript" src="../asset/js/jquery.wordexport.js"></script>

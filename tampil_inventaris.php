<head>

    <title>E-mployee JMP</title>

    <!-- Meta START -->
	<!-- E-mployee JMP By Dendito Pratama || denditoprtm@gmail.com -->
    <meta charset="utf-8" />
	<meta name="author" content="Dendito Pratama">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
    <meta name="google-signin-scope" content="profile email">
	<meta name="google-signin-client_id" content="49446115720-gacrc8lhqmdj9rpn3efdpdsa3kh74usu.apps.googleusercontent.com">
    
    
   <link rel="icon" href="./upload/logo.png" type="image/x-icon">
    
    <!-- Meta END -->

    <!--[if lt IE 9]>
    <script src="./asset/js/html5shiv.min.js"></script>
    <![endif]-->

    <!-- Global style START -->
    <link type="text/css" rel="stylesheet" href="./asset/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="./asset/css/jquery-ui.css"  media="screen,projection"/>
 </head>
 <style>
 h5{
     line-height:30px
 }
 .stok{
     width:50%;
     margin-bottom:20px;
 }
 @media only screen and (max-width: 600px) {.stok{
        max-width:180%;
    height:auto;
    }} 

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {.stok{
        max-width:210%;
    height:auto;
    }} 

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {.stok{
        max-width:110%;
    height:auto;
    }} 

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {  .stok{
        max-width:100%;
    height:auto;
    }} 

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {  .stok{
        max-width:100%;
    height:auto;
    }}
 </style>
<?php
include('/include/config.php');
$idd=mysqli_real_escape_string($config,base64_decode($_GET['id']));
echo '

<div style="margin:auto;text-align:center">';
$gow=mysqli_query($config,"SELECT * FROM tbl_inventaris WHERE id_invent='$idd'");
while($row=mysqli_fetch_array($gow)){
    $m=mysqli_query($config,"SELECT jenis_barang FROM tbl_ref_jenis_barangs WHERE id='".$row['kode_jenis_barang']."' ");
    list($brg)=mysqli_fetch_array($m);
    $lok=mysqli_query($config,"SELECT sub_unit FROM tbl_sub_unit WHERE id='".$row['KD_UNIT']."' ");
    list($kd)=mysqli_fetch_array($lok);
    $loks=mysqli_query($config,"SELECT nama FROM tbl_user WHERE id_user='".$row['pj']."' ");
    list($kds)=mysqli_fetch_array($loks);
    echo '
    <h5>Nama Barang : '.$row['nama_barang'].'</h5><br>
    <h5>Tipe Barang : '.$row['tipe_barang'].'</h5><br>
    <h5>Jenis Barang : '.$brg.'</h5><br>
    <h5>Nomor Seri : '.$row['no_seri'].'</h5><br>
    ';
    $y = substr($row['tanggal_invent'],0,4);
    $m = substr($row['tanggal_invent'],5,2);
    $d = substr($row['tanggal_invent'],8,2);
if($m=="" || $m ==0){$nm="";}
    if($m == "01"){
        $nm = "Januari";
    } elseif($m == "02"){
        $nm = "Februari";
    } elseif($m == "03"){
        $nm = "Maret";
    } elseif($m == "04"){
        $nm = "April";
    } elseif($m == "05"){
        $nm = "Mei";
    } elseif($m == "06"){
        $nm = "Juni";
    } elseif($m == "07"){
        $nm = "Juli";
    } elseif($m == "08"){
        $nm = "Agustus";
    } elseif($m == "09"){
        $nm = "September";
    } elseif($m == "10"){
        $nm = "Oktober";
    } elseif($m == "11"){
        $nm = "November";
    } elseif($m == "12"){
        $nm = "Desember";
    }

    echo '<h5>Tanggal Inventarisasi : '.$d." ".$nm." ".$y.'</h5><br>';
    echo '<h5>Lokasi Unit : '.$kd.'</h5><br>';
    echo '<h5>PIC : <b>'.$kds.'</b></h5><br>';
    if(!empty($row['foto'])){
        echo '<img class="stok" src="upload/inventaris/'.$row['foto'].'"><br>';
    } else {
        echo '<img class="stok" src="upload/inventaris/default.png"><br>';
    }
  

}
echo '</span></div>';
echo '<a style="width:50%;text-align:center!important;margin:auto" class="btn small blue" href="https://employee.jasamargaproperti.co.id/scan.php">KLIK UNTUK PINDAH KEPEMILIKAN</a>';
?>
<?php
include('/include/config.php');
$idd=mysqli_real_escape_string($config,base64_decode($_GET['id']));

$gow=mysqli_query($config,"SELECT * FROM tbl_inventaris WHERE id_invent='$idd'");
while($row=mysqli_fetch_array($gow)){
    echo '
    <h5>Nama Barang : '.$row['nama_barang'].'
    ';
}

echo '<a href="https://employee.jasamargaproperti.co.id/scan.php">SCAN UNTUK PINDAH KEPEMILIKAN</a>';
?>
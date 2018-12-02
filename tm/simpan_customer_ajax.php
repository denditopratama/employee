<?php
session_start();
if(empty($_SESSION['admin'])){
	echo '
	<script>
	alert(\'ACCESS DENIED WOI!\');
	window.location.href=\'../\';
	</script>';
} else {
require('../include/config.php');

                    $token=mysqli_real_escape_string($configtm,$_POST['token']);

                    if($_SESSION['tokeneditcustomer']==$token)
                    { $id=mysqli_real_escape_string($configtm,$_POST['id']);
                        $nama_depan=mysqli_real_escape_string($configtm,$_POST['nama_depan']); 
                        $nama_belakang=mysqli_real_escape_string($configtm,$_POST['nama_belakang']);
                        $provinsi=mysqli_real_escape_string($configtm,$_POST['provinsi']);
                        $kota=mysqli_real_escape_string($configtm,$_POST['kota']);
                        $alamat=mysqli_real_escape_string($configtm,$_POST['alamat']);
                        $kode_pos=mysqli_real_escape_string($configtm,$_POST['kode_pos']);
                        $nomorhp=mysqli_real_escape_string($configtm,$_POST['nomorhp']);
                        $telepon=mysqli_real_escape_string($configtm,$_POST['telepon']);
                        $email=mysqli_real_escape_string($configtm,$_POST['email']);
                        $npwp=mysqli_real_escape_string($configtm,$_POST['npwp']);
                        $stataktif=mysqli_real_escape_string($configtm,$_POST['stataktif']);
                        $unit=mysqli_real_escape_string($configtm,$_POST['unit']);
                        $pic=mysqli_real_escape_string($configtm,$_POST['pic']);
                        
                      $youkg=mysqli_query($configtm,"UPDATE tbl_customer SET nama='$nama_depan',namab='$nama_belakang',propinsi='$provinsi',
                      kota='$kota',alamat='$alamat',kodepos='$kode_pos',hp='$nomorhp',phone='$telepon',email='$email',npwp='$npwp',status='$stataktif'
                      ,unit='$unit',pic='$pic' WHERE id='$id'");
                     $_SESSION['tokeneditcustomer']==0;
                    }
                      else {
                        echo '
                        <script>
                        alert(\'ACCESS DENIED WOI!\');
                        window.location.href=\'../\';
                        </script>'; 
                      }
                   


}

                    ?>

<?php

if(empty($_SESSION['admin']) ){
	echo '
	<script>
	alert(\'AKSES DITOLAK KODE TOKEN KEAMANAN TIDAK SAMA!\');
	window.location.href=\'../\';
	</script>';
} else {    
    $id=mysqli_real_escape_string($config,$_GET['id']);
    $id_users=mysqli_real_escape_string($config,$_GET['id_user']);
    $aksi=mysqli_real_escape_string($config,$_GET['aksi']);

    if($aksi=='gm1'){
        if($_SESSION['admin']==1 || $_SESSION['admin']==2 || $_SESSION['admin']==3 || $_SESSION['admin']==4){
            $mov=mysqli_query($config,"UPDATE tbl_status_keterangan_presensi SET status_gm=1,status_manager=1 WHERE id_presensi='$id' AND id_user='$id_users'");
            $_SESSION['succAdd']='SUKSES ! Data berhasil disetujui';
            header("Location: ./admin.php?page=pres&act=ketpres&id=$id");
            die();
        } else {
            echo '
            <script>
            alert(\'AKSES DITOLAK!\');
            window.location.href=\'./admin.php?page=pres&act=ketpres&id='.$id.'"\';
            </script>';
        }

    } else if($aksi=='gm0') {
        if($_SESSION['admin']==1 || $_SESSION['admin']==2 || $_SESSION['admin']==3 || $_SESSION['admin']==4){
            $mov=mysqli_query($config,"UPDATE tbl_status_keterangan_presensi SET status_gm=0,status_manager=0 WHERE id_presensi='$id' AND id_user='$id_users'");
            $_SESSION['succAdd']='SUKSES ! Persetujuan data telah dibatalkan';
            header("Location: ./admin.php?page=pres&act=ketpres&id=$id");
            die();
        } else {
            echo '
            <script>
            alert(\'AKSES DITOLAK!\');
            window.location.href=\'./admin.php?page=pres&act=ketpres&id='.$id.'"\';
            </script>';
        } 
    }

    if($aksi=='m1'){
        if($_SESSION['admin']==1 || $_SESSION['admin']==2 || $_SESSION['admin']==3 || $_SESSION['admin']==4){
            $mov=mysqli_query($config,"UPDATE tbl_status_keterangan_presensi SET status_manager=1,status_gm=1 WHERE id_presensi='$id' AND id_user='$id_users'");
            $_SESSION['succAdd']='SUKSES ! Data berhasil disetujui';
            header("Location: ./admin.php?page=pres&act=ketpres&id=$id");
            die();
        } else if($_SESSION['admin']==5){
            $mov=mysqli_query($config,"UPDATE tbl_status_keterangan_presensi SET status_manager=1 WHERE id_presensi='$id' AND id_user='$id_users'");
            $_SESSION['succAdd']='SUKSES ! Data berhasil disetujui';
            header("Location: ./admin.php?page=pres&act=ketpres&id=$id");
            die();
        } else {
            echo '
            <script>
            alert(\'AKSES DITOLAK!\');
            window.location.href=\'./admin.php?page=pres&act=ketpres&id='.$id.'"\';
            </script>';
        }

    } else if($aksi=='m0') {
        if($_SESSION['admin']==1 || $_SESSION['admin']==2 || $_SESSION['admin']==3 || $_SESSION['admin']==4){
            $mov=mysqli_query($config,"UPDATE tbl_status_keterangan_presensi SET status_manager=0,status_gm=0 WHERE id_presensi='$id' AND id_user='$id_users'");
            $_SESSION['succAdd']='SUKSES ! Persetujuan data telah dibatalkan';
            header("Location: ./admin.php?page=pres&act=ketpres&id=$id");
            die();
        } else if($_SESSION['admin']==5){
            $mov=mysqli_query($config,"UPDATE tbl_status_keterangan_presensi SET status_manager=0 WHERE id_presensi='$id' AND id_user='$id_users'");
            $_SESSION['succAdd']='SUKSES ! Persetujuan data telah dibatalkan';
            header("Location: ./admin.php?page=pres&act=ketpres&id=$id");
            die();
        } else {
            echo '
            <script>
            alert(\'AKSES DITOLAK!\');
            window.location.href=\'./admin.php?page=pres&act=ketpres&id='.$id.'"\';
            </script>';
        } 
    }

   
                                    }
                            ?>
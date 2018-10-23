
<?php

  if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {
		
		
	$id = mysqli_real_escape_string($config, $_REQUEST['id']);	
		$ngapus=mysqli_query($config,"SELECT file FROM tbl_file_sharing WHERE id='$id'");
		list($namafile)=mysqli_fetch_array($ngapus);
		
		$files='./upload/file_sharing/'.$namafile.'';
		unlink($files);
    
		$querys = mysqli_query($config, "DELETE FROM tbl_file_sharing WHERE id='$id'");
		
	
			if($querys == true){
				echo' <script>
				alert(\'Data Berhasil Di Hapus!\');
				window.location.href=\'admin.php?page=files\';
				</script> ';
	die();}}
?>
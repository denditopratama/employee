
<?php
if(isset($_REQUEST['simpanseluruh'])){
					
						$oikgic=mysqli_query($config,"UPDATE tbl_gaji SET status=1 WHERE id_user='$id_user' AND id_gaji='$id'");
					}
					if($oikgic==true){
						$_SESSION['succd']='SUKSES! Data Berhasil Di Simpan';
						header("Location: ./admin.php?page=pros&id=".$id."");
					}
					?>
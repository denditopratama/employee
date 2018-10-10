<?php
    //cek session
    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {
$id = mysqli_real_escape_string($config, $_REQUEST['id']);
        if(isset($_SESSION['errQ'])){
            $errQ = $_SESSION['errQ'];
            echo '<div id="alert-message" class="row jarak-card">
                    <div class="col m12">
                        <div class="card red lighten-5">
                            <div class="card-content notif">
                                <span class="card-title red-text"><i class="material-icons md-36">clear</i> '.$errQ.'</span>
                            </div>
                        </div>
                    </div>
                </div>';
            unset($_SESSION['errQ']);
        }

    	
    	$query = mysqli_query($config, "SELECT * FROM tbl_sppd WHERE id='$id'");

    	if(mysqli_num_rows($query) > 0){
            $no = 1;
            while($row = mysqli_fetch_array($query)){

            if($_SESSION['admin']!=1){
                echo '<script language="javascript">
                        window.alert("ERROR! Anda tidak memiliki hak akses untuk menghapus data ini");
                        window.location.href="./admin.php?page=sppd";
                      </script>';
            } else {

    		  echo '<!-- Row form Start -->
				<div class="row jarak-card">
				    <div class="col m12">
                        <div class="card">
                            <div class="card-content">
        				        <table>
        				            <thead class="red lighten-5 red-text">
        				                <div class="confir red-text"><i class="material-icons md-36">error_outline</i>
        				                Apakah Anda yakin akan menghapus data ini?</div>
        				            </thead>

        				            <tbody>
        				                <tr>
        				                    <td width="13%">Nomor ID</td>
        				                    <td width="1%">:</td>
        				                    <td width="86%">'.$row['id'].'</td>
        				                </tr>
										<tr>
        				                    <td width="13%">Keberangkatan</td>
        				                    <td width="1%">:</td>
        				                    <td width="86%">'.$row['keberangkatan'].'</td>
        				                </tr>
        				                   <tr>
                                            <td width="13%">Destinasi</td>
                                            <td width="1%">:</td>
                                            <td width="86%">'.$row['destinasi'].'</td>
                                        </tr>
        				                <tr>
        				                    <td width="13%">Tanggal Berangkat</td>
        				                    <td width="1%">:</td>
        				                    <td width="86%">'.$tgl = date('d M Y ', strtotime($row['tanggal_awal'])).'</td>
        				                </tr>
										<tr>
        				                    <td width="13%">Tanggal Pulang</td>
        				                    <td width="1%">:</td>
        				                    <td width="86%">'.$tgl = date('d M Y ', strtotime($row['tanggal_akhir'])).'</td>
        				                </tr>
        				                <tr>
        				                    <td width="13%">File</td>
        				                    <td width="1%">:</td>
                                            <td width="86%">';
                                            if(!empty($row['file'])){
                                                echo ' <a class="blue-text" href="./upload/sppd/'.$row['file'].'">'.$row['file'].'</a>';
                                            } else {
                                                echo ' Tidak ada file yang diupload';
                                            } echo '</td>
                                        </tr>
        				                
										<tr>
        				                    <td width="13%">Deskripsi </td>
        				                    <td width="1%">:</td>
        				                    <td width="86%">'.$row['deskripsi'].'</td>
        				                </tr>
        				               
                                     
        				            </tbody>
    				   		    </table>
				            </div>
								
                            <div class="card-action">
							<a href="?page=sppd&act=del&submit=yes&id='.$row['id'].'" class="btn-large deep-orange waves-effect waves-light white-text">HAPUS <i class="material-icons">delete</i></a>';

							
							 echo'
							<a href="?page=sppd" class="btn-large blue waves-effect waves-light white-text">BATAL <i class="material-icons">clear</i></a>';
						 
								
								echo'
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row form END -->';

            	if(isset($_REQUEST['submit'])){
            		

                    //jika ada file akan mengekseskusi script dibawah ini
                    if(!empty($row['file'])){

                        unlink("upload/sppd/".$row['file']);
                        $query = mysqli_query($config, "DELETE FROM tbl_sppd WHERE id='$id'");

                		if($query == true){
							if($_SESSION['admin']==1){
                            $_SESSION['succDel'] = 'SUKSES! Data berhasil dihapus<br/>';
						header("Location: ./admin.php?page=sppd");}
						else{
                            $_SESSION['succDel'] = 'SUKSES! Data berhasil dihapus<br/>';
						header("Location: ./admin.php?page=sppd");
						}
							
                            die();
                		} else {
                            $_SESSION['errQ'] = 'ERROR! Ada masalah dengan query';
                            echo '<script language="javascript">
                                    window.location.href="./admin.php?page=sppd&act=del&id='.$id.'";
                                  </script>';
                		}
                	} else {

                        //jika tidak ada file akan mengekseskusi script dibawah ini
                        $query = mysqli_query($config, "DELETE FROM tbl_sppd WHERE id='$id'");
						$querys = mysqli_query($config, "DELETE FROM tbl_sppd WHERE id='$id'");

                       	if($query == true){
							if($_SESSION['admin']==1){
                            $_SESSION['succDel'] = 'SUKSES! Data berhasil dihapus<br/>';
						header("Location: ./admin.php?page=sppd");}
						else{
                            $_SESSION['succDel'] = 'SUKSES! Data berhasil dihapus<br/>';
						header("Location: ./admin.php?page=sppd");
						}
							
                            die();
                        } else {
                            $_SESSION['errQ'] = 'ERROR! Ada masalah dengan query';
                            echo '<script language="javascript">
                                    window.location.href="./admin.php?page=sppd&act=del&id='.$id.'";
                                  </script>';
                        }
                    }
                }
		    }
	    }
    }
}
?>

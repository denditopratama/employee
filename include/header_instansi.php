<?php
    //cek session
  
            echo '
                <div class="col s12" id="header-instansi" >
                    <div class="card blue-grey black-text"style="background-color:transparent!important" >
                        <div class="card-content"style="background-color:transparent">';
                            if(!empty($data['logo'])){
                               /*  echo '<div class="circle left"><img class="logo" src="./upload/'.$data['logo'].'" style="margin: 12px 15px 15px 0; width: 200px; height: 50px; border-radius:0%;"/></div>';
                            } else {
                                echo '<div class="circle left"><img class="logo" src="./asset/img/screenshot.png"/></div>'; */
                            }
							
						echo '<h4 style="font-weight:bold;line-height:20px;">Dashboard Karyawan</h4>';	
                           

    // output data of each row
		$jig=mysqli_query($config,"SELECT jabatan FROM tbl_user WHERE id_user='$id_user'");
		list($jabatanx)=mysqli_fetch_array($jig);
		$ggo=mysqli_query($config,"SELECT jabatan FROM tbl_ref_jabatan WHERE id='".$jabatanx."'");
		list($kok)=mysqli_fetch_array($ggo);
       
                               echo 'Anda Login Sebagai <i><strong>'.$kok.'</strong></i><br>';  
                          
						  if($_SESSION['admin']==1){
							 echo '<strong>BERITA HARI INI :</strong><br>';   
						  }
						  
						  if($_SESSION['admin']==1){
                          $cekkontrak=mysqli_query($config,"SELECT * FROM tbl_kontrak WHERE status='mauhabis'");
						  if(mysqli_num_rows($cekkontrak)>0){
						  while($rowf=mysqli_fetch_array($cekkontrak)){
							  $namakeun=mysqli_query($config,"SELECT nama FROM tbl_user WHERE id_user='".$rowf['id_user']."'");
							  list($namakon)=mysqli_fetch_array($namakeun);
							  echo 'Kontrak Atas Nama : <strong>'.$namakon.'</strong> akan segera habis dalam <span class="red-text"><strong>'.$rowf['hari'].' HARI</strong></span></br>';
						  }
						  }}
						 
                            echo '
                        </div>
                    </div>
                </div>';
        
  
     
?>

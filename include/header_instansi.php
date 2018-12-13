<?php
    //cek session
  
            echo '
                <div class="col s12"  >
                    <div class="card blue-grey black-text"style="background-color:transparent!important" >
                        <div class="card-content"style="background-color:transparent">';
                            if(!empty($data['logo'])){
                               /*  echo '<div class="circle left"><img class="logo" src="./upload/'.$data['logo'].'" style="margin: 12px 15px 15px 0; width: 200px; height: 50px; border-radius:0%;"/></div>';
                            } else {
                                echo '<div class="circle left"><img class="logo" src="./asset/img/screenshot.png"/></div>'; */
                            }
                            
                            if($_SESSION['admin']!=1){
                                echo '<h4 style="font-weight:bold;line-height:30px;">Dashboard Karyawan</h4><hr>';
                            } else {
                                echo '<h4 style="font-weight:bold;line-height:30px;">Dashboard Karyawan</h4>';
                            }
							
                           

    // output data of each row
		$jig=mysqli_query($config,"SELECT jabatan FROM tbl_user WHERE id_user='$id_user'");
		list($jabatanx)=mysqli_fetch_array($jig);
		$ggo=mysqli_query($config,"SELECT jabatan FROM tbl_ref_jabatan WHERE id='".$jabatanx."'");
		list($kok)=mysqli_fetch_array($ggo);
       
                               echo 'Anda Login Sebagai <i><strong>'.$kok.'</strong></i><br>';  
                          
						  if($_SESSION['admin']==1 && $_SESSION['divisi']==2){
                            
                             echo '<button id="beritakeun" class="btn-small green" style="color:white"><i class="material-icons">add</i>TAMBAH BERITA</button>';
                            
                             $yow=mysqli_query($config,"SELECT status FROM tbl_akses_user WHERE id=1");
                             list($akses)=mysqli_fetch_array($yow);
                             if($akses==1){
                                 echo '&nbsp<button id="bukaakses" class="btn-small green" style="color:white"><i class="material-icons">error</i> BUKA AKSES ISI DATA</button>
                                 <script>
                                 $(document).ready(function(){
                                     $("#bukaakses").click(function(){
                                        var x = confirm("Apakah anda yakin ingin membuka akses user untuk mengisi, menghapus, mengubah data karyawan ?");
                                        if(x==true){
                                            var y = confirm("Sekali lagi anda yakin ?");
                                            if (y==true){
                                        var gas = 0;
                                        $.post(\'./js/akses.php\',{gas : gas},function(data){
                                            alert("Sukses ! akses user untuk mengisi, menghapus, mengubah data karyawan telah dibuka");
                                            location.reload();
                                        });
                                            }
                                        }
                                         
                                     });
                                 });
                                 </script>';
                             } else {
                                echo '&nbsp<button id="tutupakses" class="btn-small red" style="color:white"><i class="material-icons">warning</i> TUTUP AKSES ISI DATA</button>
                                <script>
                                $(document).ready(function(){
                                    $("#tutupakses").click(function(){
                                       var x = confirm("Apakah anda yakin ingin menutup akses user untuk mengisi, menghapus, mengubah data karyawan ?");
                                       if(x==true){
                                           var y = confirm("Sekali lagi anda yakin ?");
                                           if (y==true){
                                       var gas = 1;
                                       $.post(\'./js/akses.php\',{gas : gas},function(data){
                                           alert("Sukses ! akses user untuk mengisi, menghapus, mengubah data karyawan telah ditutup");
                                           location.reload();
                                       });
                                           }
                                       }
                                        
                                    });
                                });
                                </script>';
                             }
                             

                             echo'
                             <br><hr><strong>NOTIFIKASI :</strong><br>';  
						  }
						  
						  if($_SESSION['admin']==1  && $_SESSION['divisi']==2){
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
                if($_SESSION['admin']==1 && $_SESSION['divisi']==2){
        echo'
                <div id="modalzd">
				<div id="modalz" class="modal" style="background-color:yellow">
                <div class="modal-content yellow" style="padding-top:1px!important;background-color:#ffff00!important">
				<div class="input-field col s12">
				<h5><i class="material-icons" style="margin-bottom:8px">announcement</i> Tambah Berita</h5>
                <small class="blue-text">* Klik Tambah untuk menambah Running Text Berita.</small><br>
                <p>Berita</p>
                <textarea placeholder="Masukkan Berita disini.." id="beritanya" name="beritanjay" class="materialize-textarea"></textarea>
                <p>Tanggal akhir tayang berita</p>
                <input id="tgl_berita" type="date">
                <button id="ajaxberita" class="btn-large green">PUBLISH</button>
                </div>
                </div>
                </div>
				</div>';
     
                echo'
                <script>
                $(document).ready(function(){
                    $("#beritakeun").click(function(){
                        $("#modalz").openModal()
                    });
                    $("#ajaxberita").click(function(){
                       
                        var berita = $("#beritanya").val();
                        var tgl = $("#tgl_berita").val();
                     
                        if(berita!="" && tgl!=""){
                        var y = confirm ("Apakah anda yakin akan mem-publish berita ini?");
                        if(y==true){
                            $.post("./js/inputajaxberita.php", {berita : berita, tgl_berita : tgl});
                        alert("Berita Berhasil di Publish !");
                        location.reload();}
                        else {}}
                        else {
                            alert("Berita atau Tanggal tidak boleh kosong !");
                        }

                });
            });

                   
                </script>
                ';}
?>

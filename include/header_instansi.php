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

                            date_default_timezone_set('Asia/Jakarta');
                            $userlog=mysqli_real_escape_string($config,$_SESSION['id_user']);
                            $lastlog=mysqli_query($config,"SELECT last_log FROM tbl_user WHERE id_user='$userlog'");
                            list($last_login)=mysqli_fetch_array($lastlog);
                            echo '<h6 style="display:inline!important">Login IP : <b><a style="margin-right:5px!important" id="ganting"></a></b>Lokasi Login : <b><a style="margin-right:5px!important" id="gontong"></a></b>Aktivitas Terakhir : <b><a>'.$last_login.'</a></b></h6><br>';
                           
                           
                            $nyatetlogin=mysqli_real_escape_string($config,date('d M Y H:i:s'));
                            $ngupdatelogin=mysqli_query($config,"UPDATE tbl_user SET last_log='$nyatetlogin' WHERE id_user='$userlog'");
           
                echo '<script>
                $.get("https://ipinfo.io", function(response) {
                   $("#ganting").html(response.ip);
                   $("#gontong").html(response.country + ", " + response.city);
                  }, "jsonp")</script>';

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
                             $anc=mysqli_query($config,"SELECT maintenance FROM tbl_akses_user WHERE id=1");
                             list($mnt)=mysqli_fetch_array($anc);
                             if($mnt==0){
                                echo '<button id="maintenance" class="btn-small orange" value="1" style="color:white"><i class="material-icons">warning</i> HIDUPKAN MAINTENANCE MODE</button>'; 
                             } else {
                                echo '<button id="maintenance" class="btn-small red" value="0" style="color:white"><i class="material-icons">warning</i> MATIKAN MAINTENANCE MODE</button>';  
                             }
                            
                             $tokenheaderadmin=mt_rand(0,99999);
                             $_SESSION['tokenheaderadmin']=$tokenheaderadmin;
                             echo '<script>
                             $(document).ready(function(){
                                $("#maintenance").click(function(){
                                    var mt = $(this).val();
                                    if(mt==1){
                                    var c = confirm("Anda yakin ingin menutup akses sistem?");}
                                    else {var c = confirm("Anda yakin ingin membuka akses sistem?");}
                                    if (c==true){
                                        if(mt==1){
                                            var d = confirm("Sekali lagi Anda yakin ingin menutup akses sistem?");}
                                            else {var d = confirm("Sekali lagi Anda yakin ingin membuka akses sistem?");}
                                        if(d==true){
                                            var tokens='.$tokenheaderadmin.';
                                            
                                            $.post(\'./js/maintenance.php\',{tokens : tokens, mt : mt},function(data){
                                                if(mt==1){
                                                 alert("Sukses ! akses user ke sistem telah ditutup");
                                                alert("Maintenance Mode : ON");
                                                window.location.href="./";}
                                                else {
                                                    alert("Sukses ! akses user ke sistem telah dibuka");
                                                    alert("Maintenance Mode : OFF");
                                                    window.location.href="./";
                                                }
                                                
                                        
                                       });
                                        }
                                    }


                                });

                             });

                             </script>';
                             echo'
                             <br><hr><strong>NOTIFIKASI :</strong><br>';  
						  } else {
                            echo '<hr>
                            <strong>NOTIFIKASI :</strong><br>';
                              if($_SESSION['admin']==4){
                                  $ketpres=mysqli_query($config,"SELECT tbl_status_keterangan_presensi.*,tbl_user.divisi FROM tbl_status_keterangan_presensi,tbl_user
                                   WHERE tbl_status_keterangan_presensi.status_gm=0 AND(tbl_status_keterangan_presensi.id_user=tbl_user.id_user AND tbl_user.divisi='".$_SESSION['divisi']."')");
                                  $jumlahket=mysqli_num_rows($ketpres);
                                $gmjk=mysqli_query($config,"SELECT * FROM tbl_lembur WHERE divisi='".$_SESSION['divisi']."' AND status_gm=0 ");
                                $jumlahna=mysqli_num_rows($gmjk);
                                if($jumlahna>0){
                                      echo '<strong>*</strong><strong class="red-text"> <b>'.$jumlahna.'</b></strong><strong> Orang telah menunggu konfirmasi Lembur dari anda.</strong><br>';
                                }
                                if($jumlahket>0){
                                    echo '<strong>*</strong><strong class="red-text"> <b>'.$jumlahket.'</b></strong><strong> Orang telah menunggu konfirmasi Keterangan Presensi dari anda.</strong><br>';
                                }
                               
                              } else if($_SESSION['admin']==5) {
                                $ketpres=mysqli_query($config,"SELECT tbl_status_keterangan_presensi.*,tbl_user.divisi FROM tbl_status_keterangan_presensi,tbl_user
                                WHERE tbl_status_keterangan_presensi.status_manager=0 AND(tbl_status_keterangan_presensi.id_user=tbl_user.id_user AND tbl_user.divisi='".$_SESSION['divisi']."')");
                               $jumlahket=mysqli_num_rows($ketpres);
                                $gmjk=mysqli_query($config,"SELECT * FROM tbl_lembur WHERE divisi='".$_SESSION['divisi']."' AND status_manager=0 ");
                                $jumlahna=mysqli_num_rows($gmjk);
                                if($jumlahna>0){
                                      echo '<strong>*</strong><strong class="red-text"> <b>'.$jumlahna.'</b></strong><strong> orang telah menunggu konfirmasi Lembur dari anda.</strong>';
                                }
                                if($jumlahket>0){
                                    echo '<strong>*</strong><strong class="red-text"> <b>'.$jumlahket.'</b></strong><strong> Orang telah menunggu konfirmasi Keterangan Presensi dari anda.</strong><br>';
                                }
                               
                              }
                             
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

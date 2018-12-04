<?php
    //cek session
    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {

        if(isset($_REQUEST['submit'])){
			

            //validasi form kosong
            if($_REQUEST['tujuan'] == "" || $_REQUEST['isi'] == ""
                || $_REQUEST['tgl_surat'] == ""  || $_REQUEST['keterangan'] == ""){
                $_SESSION['errEmpty'] = 'ERROR! Semua form wajib diisi';
                echo '<script language="javascript">window.history.back();</script>';
            } else {

                
                $no_surat = $_REQUEST['no_surat'];
                $tujuan = $_REQUEST['tujuan'];
                $isi = $_REQUEST['isi'];
				$kode=$_POST['nomor_surat'];
                $tgl_surat = $_REQUEST['tgl_surat'];
                $keterangan = $_REQUEST['keterangan'];
                $id_user = $_SESSION['id_user'];
				$ditujukan= mysqli_real_escape_string($config,$_POST['ditujukan']);
				$tunjukan= mysqli_real_escape_string($config,$_POST['tunjukan']);
				$nuhun=mysqli_query($config,"SELECT no_agenda FROM tbl_surat_keluar ORDER BY id_surat DESC LIMIT 1");
				list($no_agendas)=mysqli_fetch_array($nuhun);
				$tahuns=date('Y');
				$pemisah=explode("/",$no_agendas);
				if($pemisah[1]!=$tahuns){
					$no_agendas=0;
				}
				$no_agendas=$no_agendas+1;
				$no_agenda=$no_agendas .'/'. $tahuns;

                //validasi input data
                 

                    

                        if(!preg_match("/^[a-zA-Z0-9.,() \/ -]*$/", $tujuan)){
                            $_SESSION['tujuan_surat'] = 'Form Tujuan Surat hanya boleh mengandung karakter huruf, angka, spasi, titik(.), koma(,), minus(-), kurung() dan garis miring(/)';
                            echo '<script language="javascript">window.history.back();</script>';
                        } else {

                            if(!preg_match("/^[a-zA-Z0-9.,_()%&@\/\r\n -]*$/", $isi)){
                                $_SESSION['isik'] = 'Form Isi Ringkas hanya boleh mengandung karakter huruf, angka, spasi, titik(.), koma(,), minus(-), garis miring(/), kurung(), underscore(_), dan(&) persen(%) dan at(@)';
                                echo '<script language="javascript">window.history.back();</script>';
                            } else {

                                if(!preg_match("/^[a-zA-Z0-9., ]*$/", $kode)){
                                    $_SESSION['kodek'] = 'Form Kode Klasifikasi hanya boleh mengandung karakter huruf, angka, spasi, titik(.) dan koma(,)';
                                    echo '<script language="javascript">window.history.back();</script>';
                                } else {

                                    if(!preg_match("/^[0-9.-]*$/", $tgl_surat)){
                                        $_SESSION['tgl_suratk'] = 'Form Tanggal Surat hanya boleh mengandung angka dan minus(-)';
                                        echo '<script language="javascript">window.history.back();</script>';
                                    } else {

                                        if(!preg_match("/^[a-zA-Z0-9.,()\/ -]*$/", $keterangan)){
                                            $_SESSION['keterangank'] = 'Form Keterangan hanya boleh mengandung karakter huruf, angka, spasi, titik(.), koma(,), minus(-), garis miring(/), dan kurung()';
                                            echo '<script language="javascript">window.history.back();</script>';
                                        } else {

                                           

                                           

                                                $ekstensi = array('jpg','png','jpeg','doc','docx','pdf','mp4','xls','xlsx','mov','rar','zip','ppt','pptx','exe','iso','mp3','avi','vid');
                                                $file = $_FILES['file']['name'];
                                                $x = explode('.', $file);
                                                $eks = strtolower(end($x));
                                                $ukuran = $_FILES['file']['size'];
                                                $target_dir = "upload/surat_keluar/";
												$target_dir2 = "upload/surat_masuk/";
											

                                                //jika form file tidak kosong akan mengekse
                                                if($file != ""){

                                                    $rand = rand(1,10000);
                                                    $nfile = $rand."-".$file;
                                                    if(in_array($eks, $ekstensi) == true){
                                                        if($ukuran < 25000000000000000000000){

                                                            move_uploaded_file($_FILES['file']['tmp_name'], $target_dir.$nfile);
															copy($target_dir.$nfile, $target_dir2.$nfile);

															  if($_POST['tujuan']==2){
														
												
													
                                                            foreach ($_POST['tunjukan'] as $menunjukans){
                                                                $menunjukan=mysqli_real_escape_string($config,$menunjukans);
                                                                $hasil_explode = explode('|', $menunjukan);
                                                                $query = mysqli_query($config, "INSERT INTO tbl_surat_keluar(no_agenda,tujuan,no_surat,isi,kode,tgl_surat,tgl_catat,file,keterangan,id_user,dari)
                                                                VALUES('$no_agenda','$hasil_explode[1]','$no_surat','$isi','$kode','$tgl_surat',NOW(),'$nfile','$keterangan','$id_user','".$_SESSION['nama']."')");
        
                                                                $queryzz = mysqli_query($config, "INSERT INTO tbl_surat_masuk(no_agenda,kode,asal_surat,isi,tgl_surat,tgl_diterima,file,keterangan,id_user)
                                                                VALUES('$no_agenda','$no_surat','".$_SESSION['nama']."','$isi','$tgl_surat',NOW(),'$nfile','$keterangan','$hasil_explode[0]')");
                                                            }     
                                                           
															}
															else{
															$query = mysqli_query($config, "INSERT INTO tbl_surat_keluar(no_agenda,tujuan,no_surat,isi,kode,tgl_surat,
                                                                tgl_catat,file,keterangan,id_user,dari)
															VALUES('$no_agenda','$ditujukan','$no_surat','$isi','$kode','$tgl_surat',NOW(),'$nfile','$keterangan','$id_user','".$_SESSION['nama']."')");
															
															$queryzz = mysqli_query($config, "INSERT INTO tbl_surat_masuk(no_agenda,kode,asal_surat,isi,tgl_surat,tgl_diterima,file,keterangan,id_user)
															VALUES('$no_agenda','$no_surat','".$_SESSION['nama']."','$isi','$tgl_surat',NOW(),'$nfile','$keterangan','9999')");
															
															}

                                                        if($query == true){
														if($_SESSION['admin']==1){
                                                        $_SESSION['succAdd'] = 'SUKSES! Data berhasil ditambahkan';
                                                        header("Location: ./admin.php?page=tskall");}
														else {
														 $_SESSION['succAdd'] = 'SUKSES! Data berhasil ditambahkan';
                                                        header("Location: ./admin.php?page=tsk");	
														}
                                                        die();
                                                            } else {
                                                                $_SESSION['errQ'] = 'ERROR! Ada masalah dengan query';
                                                                echo '<script language="javascript">window.history.back();</script>';
                                                            }
                                                        } else {
                                                            $_SESSION['errSize'] = 'Ukuran file yang diupload terlalu besar!';
                                                            echo '<script language="javascript">window.history.back();</script>';
                                                        }
                                                    } 
                                                } else {
													
														
													
                                                    if($_POST['tujuan']==2){
														
												
														foreach ($_POST['tunjukan'] as $menunjukans){
                                                            $menunjukan=mysqli_real_escape_string($config,$menunjukans);
                                                            $hasil_explode = explode('|', $menunjukan);
														
                                                            $query = mysqli_query($config, "INSERT INTO tbl_surat_keluar(no_agenda,tujuan,no_surat,isi,kode,tgl_surat,tgl_catat,file,keterangan,id_user,dari)
															VALUES('$no_agenda','$hasil_explode[1]','$no_surat','$isi','$kode','$tgl_surat',NOW(),'$file','$keterangan','$id_user','".$_SESSION['nama']."')");
	
															$queryzz = mysqli_query($config, "INSERT INTO tbl_surat_masuk(no_agenda,kode,asal_surat,isi,tgl_surat,tgl_diterima,file,keterangan,id_user)
															VALUES('$no_agenda','$no_surat','".$_SESSION['nama']."','$isi','$tgl_surat',NOW(),'$file','$keterangan','$hasil_explode[0]')");
															}}
															else{
																
															$query = mysqli_query($config, "INSERT INTO tbl_surat_keluar(no_agenda,tujuan,no_surat,isi,kode,tgl_surat,
                                                                tgl_catat,file,keterangan,id_user,dari)
															VALUES('$no_agenda','$ditujukan','$no_surat','$isi','$kode','$tgl_surat',NOW(),'$file','$keterangan','$id_user','".$_SESSION['nama']."')");
															
														$queryzz = mysqli_query($config, "INSERT INTO tbl_surat_masuk(no_agenda,kode,asal_surat,isi,tgl_surat,tgl_diterima,file,keterangan,id_user)
															VALUES('$no_agenda','$no_surat','".$_SESSION['nama']."','$isi','$tgl_surat',NOW(),'$file','$keterangan','9999')");
															
															}


                                                    if($query == true){
														if($_SESSION['admin']==1){
                                                        $_SESSION['succAdd'] = 'SUKSES! Data berhasil ditambahkan';
                                                        header("Location: ./admin.php?page=tskall");}
														else {
														 $_SESSION['succAdd'] = 'SUKSES! Data berhasil ditambahkan';
                                                        header("Location: ./admin.php?page=tsk");	}
														
                                                        die();
                                                    } else {
                                                        $_SESSION['errQ'] = 'ERROR! Ada masalah dengan query';
                                                        echo '<script language="javascript">window.history.back();</script>';
                                                    }
                                                }
                                            
                                        }
                                    }
                                }
                            }
                        }
                    
                
            }
        } else {?>

            <!-- Row Start -->
            <div class="row">
                <!-- Secondary Nav START -->
                <div class="col s12">
                    <nav class="secondary-nav">
                        <div class="nav-wrapper blue-grey darken-1">
                            <ul class="left">
                                <li class="waves-effect waves-light"><a style="font-size:24px!important" href="?page=kontrak&act=add" class="judul"><i class="material-icons">chrome_reader_mode</i> Tambah Kontrak</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- Secondary Nav END -->
            </div>
            <!-- Row END -->

            <?php
                if(isset($_SESSION['errQ'])){
                    $errQ = $_SESSION['errQ'];
                    echo '<div id="alert-message" class="row">
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
                if(isset($_SESSION['errEmpty'])){
                    $errEmpty = $_SESSION['errEmpty'];
                    echo '<div id="alert-message" class="row">
                            <div class="col m12">
                                <div class="card red lighten-5">
                                    <div class="card-content notif">
                                        <span class="card-title red-text"><i class="material-icons md-36">clear</i> '.$errEmpty.'</span>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    unset($_SESSION['errEmpty']);
                }
            ?>

            <!-- Row form Start -->
            <div class="row jarak-form">

                <!-- Form START -->
                <form class="col s12" method="POST" enctype="multipart/form-data">

                    <!-- Row in form START -->
                    <div class="row">

					         <div class="input-field col s6">
                            <i id="surat" class="material-icons prefix md-prefix">looks_two</i>
                            <input id="no_kontrak" type="text" class="validate" name="no_kontrak">
                         
                            <label for="no_kontrak">Nomor Kontrak</label>
                        </div>

                          <div class="input-field col s6">
                            <i class="material-icons prefix md-prefix">date_range</i>
                            <input id="tgl_surat" type="text" name="tgl_kontrak" class="datepicker" required>
                           
                            <label for="tgl_surat" style="margin-top:5px">Tanggal Kontrak</label>
                        </div>


                         <div class="input-field col s6" >
                            <i class="material-icons prefix md-prefix" >work</i><label>Jenis Unit</label><br/>	
                            <select class="browser-default" name="unit" id="unit" >
						<?php	$query = mysqli_query($configtm,"SELECT * FROM branch");	
							while ($row = mysqli_fetch_array($query)) {		
									echo "<option value='".$row['id']."'>".$row['description']."</option>";	
                                }
                                $tokeneditcustomer = bin2hex(mt_rand(0,9999));
                                $_SESSION['tokeneditcustomer']=$tokeneditcustomer;
                                
						?>
                        </select>
							</div>
                                    
                            <script>
                            $(document).ready(function(){
                                $("#unit").change(function(){
                                var id = $('#unit').val();
                                var token = <?php echo $tokeneditcustomer; ?>;
                                
                                $.post("./tm/pilih_tenant.php",
                                {
                                    id: id,
                                    token: token
                                },
                                function(data){
                                    $('#tenant').html(data);
                                });

                                $.post("./tm/pilih_lokasi.php",
                                {
                                    id: id,
                                    token: token
                                },
                                function(data){
                                    $('#lokasi').html(data);
                                });
                                
                            });
                            });
                          
                            </script>
						
                            <div class="input-field col s6" >
                            <i class="material-icons prefix md-prefix" >people</i><label>Nama Tenant</label><br/>	
                            <select class="browser-default" name="tenant" id="tenant" >
						
                        </select>
							</div>
                      
                        <div class="input-field col s6" style="margin-top:46.5px">
                            <i class="material-icons prefix md-prefix">featured_play_list</i>
                            <input id="objek" type="text" class="validate" name="objek" required>
                            <label for="objek">Objek Sewa</label>
                        </div>
                     
                        <div class="input-field col s6" >
                            <i class="material-icons prefix md-prefix" >home</i><label>Lokasi</label><br/>	
                            <select class="browser-default" name="lokasi" id="lokasi" >
						
                        </select>
                        
							</div>

                            <div class="input-field col s6" style="margin-top:40px">
                            <i class="material-icons prefix md-prefix">featured_play_list</i>
                            <input id="jenisusaha" type="text" class="validate" name="jenisusaha" required>
                            <label for="jenisusaha">Jenis Usaha</label>
                        </div>
                        <div class="input-field col s6" style="margin-top:-60px">
                            <i class="material-icons prefix md-prefix">featured_play_list</i>
                            <input id="namausaha" type="text" class="validate" name="namausaha" required>
                            <label for="namausaha">Nama Usaha</label>
                        </div>
                        
                      
                    </div>
                    
                    <div class="row">
                    <div class="input-field col s6">
                            <i class="material-icons prefix md-prefix">date_range</i>
                            <input id="tgl_surat" type="text" name="tgl_awal" class="datepicker" required>
                           
                            <label for="tgl_surat" style="margin-top:5px">Awal Periode</label>
                        </div>

                         <div class="input-field col s6" >
                            <i class="material-icons prefix md-prefix">date_range</i>
                            <input id="tgl_surat" type="text" name="tgl_akhir" class="datepicker" required>
                           
                            <label for="tgl_surat" style="margin-top:5px">Akhir Periode</label>
                        </div>

                         <div class="input-field col s6">
                            <i class="material-icons prefix md-prefix">date_range</i>
                            <input id="periode" type="number" class="validate" name="periode" min="1" required>
                            <label for="periode">Jumlah Periode</label>
                        </div>
                        </div>
                        <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix md-prefix">attach_money</i>
                            <input id="nilaikontrak" type="text" class="validate" name="nilaikontrak" min="0" required>
                            <label for="nilaikontrak">Nilai Kontrak</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix md-prefix">attach_money</i>
                            <input id="sewabulan" type="text" class="validate" name="sewabulan" min="0">
                            <label for="sewabulan" id="gow">Harga Sewa Perbulan</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix md-prefix">attach_money</i>
                            <input id="servicecharge" type="text" class="validate" name="servicecharge" min="0">
                            <label for="servicecharge">Service Charge Perbulan</label>
                        </div>

                         <div class="input-field col s6">
                            <i class="material-icons prefix md-prefix">attach_money</i>
                            <input id="listrik" type="text" class="validate" name="listrik" min="0">
                            <label for="listrik">Deposit Air dan Listrik</label>
                        </div>

                       

                    </div>
                    
                    <!-- Row in form END -->

                    <div class="row">
                    <div class="col 6">
						<a id="berita" class="btn-large orange waves-effect waves-light">BERITA ACARA <i class="material-icons">add</i></a>
                        </div>
                        <div class="col 6">
                            <button type="submit" name="submit" class="btn-large blue waves-effect waves-light">SIMPAN <i class="material-icons">done</i></button>
                        </div>
                        <div class="col 6">
						<?php if ($_SESSION['admin']==1){ echo'
						<a href="?page=tskall" class="btn-large deep-orange waves-effect waves-light">BATAL <i class="material-icons">clear</i></a>';}
						else {echo '<a href="?page=tsk" class="btn-large deep-orange waves-effect waves-light">BATAL <i class="material-icons">clear</i></a>';}
						?>
							
                        </div>
                    </div>

                </form>
                <!-- Form END -->

            </div>
            <!-- Row form END -->

<?php
        }
    }
?>
<script type="text/javascript" src="asset/js/jquery.maskMoney.js"></script>

<script>
$(document).ready(function(){
            $('#sewabulan').maskMoney({thousands:'.',precision :0});
            $('#servicecharge').maskMoney({thousands:'.',precision :0});
            $('#listrik').maskMoney({thousands:'.',precision :0});
            $('#nilaikontrak').maskMoney({thousands:'.',precision :0});

    

         $('#nilaikontrak').keyup(function(){
            var x = $('#periode').val();
             var y = $('#nilaikontrak').val();
             var number = y.split('.').join('');
             var zd = number/x;
            var z = zd.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.");
             $('#sewabulan').val(z);
             
             $('#gow').addClass("active");
         });

           $('#periode').keyup(function(){
            var x = $('#periode').val();
             var y = $('#nilaikontrak').val();
             var number = y.split('.').join('');
             var zd = number/x;
            var z = zd.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.");
            
            if(z=='Infinity'){
               var z=0;
            }
             $('#sewabulan').val(z);
             
             $('#gow').addClass("active");
         });


});
            </script>
<?php
    //cek session
    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {

        if(isset($_REQUEST['submit'])){

            //validasi form kosong
           

                $tanggal = mysqli_real_escape_string($config,$_REQUEST['bulangaji']);
				
               

                //validasi input data
               


                                                  $query = mysqli_query($config, "INSERT INTO tbl_bulan_gaji(bulan)
                                                            VALUES('$tanggal')");
															$_SESSION['succg']='SUKSES ! Tanggal / Bulan telah ditambahkan';
															header("Location: ./admin.php?page=gjh");
                                                
                                            
                                        
                                    
                                
                            
                        
                    
                
            
        } else {?>

            <!-- Row Start -->
            <div class="row">
                <!-- Secondary Nav START -->
                <div class="col s12">
                    <nav class="secondary-nav">
                        <div class="nav-wrapper blue-grey darken-1">
                            <ul class="left">
                                <li class="waves-effect waves-light"><a href="?page=gjh&act=add" class="judul"><i class="material-icons">attach_money</i> Tambah Gaji</a></li>
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
                        
                 
                        <div class="row col s6">
						
                            <i class="material-icons prefix md-prefix" style="margin-top:-10px;">date_range</i>&nbsp&nbsp<a style="color:#000000!important;font-size:1.1rem;">Bulan</a>
							
                            <input type="text" id="tgl_surat" name="bulangaji" class="datepicker" style="margin-top:9px;" required>
                               
                            
                        </div>
						
						
                      
                    
                        
                    </div>
                    <!-- Row in form END -->

                    <div class="row">
                        <div class="col 6">
                            <button type="submit" name="submit" class="btn-large blue waves-effect waves-light">TAMBAH <i class="material-icons">done</i></button>
                        </div>
                        <div class="col 6">
                           <a href="?page=gjh" class="btn-large deep-orange waves-effect waves-light">BATAL <i class="material-icons">clear</i></a>
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

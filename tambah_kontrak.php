<?php
    //cek session
    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {

        if(isset($_POST['submit'])){
			
            $no_kontrak=mysqli_real_escape_string($configtm,$_POST['no_kontrak']);
            $tgl_kontrak=mysqli_real_escape_string($configtm,$_POST['tgl_kontrak']);
            $unit=mysqli_real_escape_string($configtm,$_POST['unit']);
            $tenant=mysqli_real_escape_string($configtm,$_POST['tenant']);
            $objek=mysqli_real_escape_string($configtm,$_POST['objek']);
            if(!empty($_POST['lokasi'])){
                $lokasi=mysqli_real_escape_string($configtm,$_POST['lokasi']);
            } else { $lokasi = 0;}
            
            $namausaha=mysqli_real_escape_string($configtm,$_POST['namausaha']);
            $jenisusaha=mysqli_real_escape_string($configtm,$_POST['jenisusaha']);
            $tgl_awal=mysqli_real_escape_string($configtm,$_POST['tgl_awal']);
            $tgl_akhir=mysqli_real_escape_string($configtm,$_POST['tgl_akhir']);
            $periode=mysqli_real_escape_string($configtm,$_POST['periode']);
            $jenisgto=mysqli_real_escape_string($configtm,$_POST['jenisgto']);
            $nilaikontrak=mysqli_real_escape_string($configtm,str_replace('.', '', $_POST['nilaikontrak']));
            $sewabulan=mysqli_real_escape_string($configtm,str_replace('.', '', $_POST['sewabulan']));
            $servicecharge=mysqli_real_escape_string($configtm,str_replace('.', '', $_POST['servicecharge']));
            $listrik=mysqli_real_escape_string($configtm,str_replace('.', '', $_POST['listrik']));
            $nosurat=mysqli_real_escape_string($configtm,$_POST['nosurat']);
            $tglminat=mysqli_real_escape_string($configtm,$_POST['tglminat']);
            $nonego=mysqli_real_escape_string($configtm,$_POST['nonego']);
            $nonegodirut=mysqli_real_escape_string($configtm,$_POST['nonegodirut']);
            $tglnegodirut=mysqli_real_escape_string($configtm,$_POST['tglnegodirut']);
            $tglbanego=mysqli_real_escape_string($configtm,$_POST['tglbanego']);

            $kuy=mysqli_query($configtm,"INSERT INTO perjanjian(noperj,tglperj,customer,lokasi,sdate,edate,luas,
            harga,jenis,total,periode,branch,usaha,nolokasi,surat1,suratd1,surat2,suratd2,surat3,suratd3,obyek,jenisusaha) 
            VALUES('$no_kontrak','$tgl_kontrak','$tenant','$lokasi','$tgl_awal','$tgl_akhir','0','$sewabulan','$jenisgto','$nilaikontrak','$periode','$unit','$namausaha','',
            '$nosurat','$tglminat','$nonego','$tglbanego','$nonegodirut','$tglnegodirut','$objek','$jenisusaha')");
            echo '<script>alert(\'Kontrak Berhasil ditambah ! \');
            window.location.href="./indexnyatm.php?page=kontrak";
            </script>';
           
            

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
                <form class="col s12" method="POST">
                <small class="blue-text">*Kosongkan yang tidak perlu</small>
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
                                    echo "<option value='".$row['id']."' data-jenis='".$row['jenis']."'>".$row['description']."</option>";	
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
                                var x = $('option:selected', this).attr('data-jenis');
                                if(x==1){
                                    $('#cas').hide();
                                    $('#nyetrum').hide();
                                    $('#jenisgto').show('slow');
                                    
                                } else {
                                    $('#cas').show('slow');
                                    $('#nyetrum').show('slow');
                                    $('#jenisgto').hide();  
                                   
                                }

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
                            
                            var element = $('#unit').find('option:selected'); 
                             var myTag = element.attr("data-jenis"); 
                                if(myTag==1){
                                    $('#cas').hide();
                                    $('#nyetrum').hide();
                                    $('#jenisgto').show();
                                 
                                } else {
                                    $('#cas').show();
                                    $('#nyetrum').show(); 
                                    $('#jenisgto').hide();
                                  
                                }
                            
                            
                            });
                          
                            </script>
						
                            <div class="input-field col s6" >
                            <i class="material-icons prefix md-prefix" >people</i><label>Nama Tenant</label><br/>	
                            <select class="browser-default" name="tenant" id="tenant" required>
						
                        </select>
							</div>
                      
                        <div class="input-field col s6" id="sewas" style="margin-top:46.5px">
                            <i class="material-icons prefix md-prefix">featured_play_list</i>
                            <input id="objek" type="text" class="validate" name="objek">
                            <label for="objek">Objek Sewa</label>
                        </div>
                     
                        <div class="input-field col s6" >
                            <i class="material-icons prefix md-prefix" >home</i><label>Lokasi</label><br/>	
                            <select class="browser-default" name="lokasi" id="lokasi" >
						
                        </select>
                        
							</div>

                            <div class="input-field col s6" style="margin-top:40px">
                            <i class="material-icons prefix md-prefix">featured_play_list</i>
                            <input id="jenisusaha" type="text" class="validate" name="jenisusaha">
                            <label for="jenisusaha">Jenis Usaha</label>
                        </div>
                        <div class="input-field col s6" id="usaha" style="margin-top:-60px">
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
                        <div class="row" id="jenisgto">
                        <div class="input-field col s6" >
                            <i class="material-icons prefix md-prefix" >people</i><label>Jenis</label><br/>	
                            <select class="browser-default" name="jenisgto"  >
                        <?php 
                        $ko=mysqli_query($configtm,"SELECT * FROM jenisgto");
                        while($row=mysqli_fetch_array($ko)){
                            echo '<option value="'.$row['id'].'">'.$row['description'].'</option>';
                        }
                        ?>
                        </select>
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

                        <div class="input-field col s6" id="cas">
                            <i class="material-icons prefix md-prefix">attach_money</i>
                            <input id="servicecharge" type="text" class="validate" name="servicecharge" min="0">
                            <label for="servicecharge">Service Charge Perbulan</label>
                        </div>

                         <div class="input-field col s6" id="nyetrum">
                            <i class="material-icons prefix md-prefix">attach_money</i>
                            <input id="listrik" type="text" class="validate" name="listrik" min="0">
                            <label for="listrik">Deposit Air dan Listrik</label>
                        </div>

                       

                    </div>
                    
                    <!-- Row in form END -->

                    

                    <div id="modald">
				<div id="modalkontrak" class="modal" style="height:120%">
                <div class="modal-content white" style="height:120%">
            
                <div class="col s12" style="text-align:center!important">
                <h4>Nomor dan Tanggal Berita Acara</h4>
                <small class="blue-text">* Kosongkan yang tidak perlu</small>
				        <div class="input-field col s12">
                            <i class="material-icons prefix md-prefix">looks_two</i>
                            <input type="text" class="validate" name="nosurat">
                            <label for="nosurat">Nomor Surat Pernyataan Minat Pihak Kedua</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix md-prefix">date_range</i>
                            <input id="tgl_surat" type="date" name="tglminat">
                            <label for="tglminat">Tanggal Surat Pernyataan Minat Pihak Kedua</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix md-prefix">looks_two</i>
                            <input type="text" class="validate" name="nonego">
                            <label for="nonego">Nomor Berita Acara Negosiasi Harga Sewa</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix md-prefix">date_range</i>
                            <input id="tgl_akhir" type="text" class="datepicker" name="tglbanego">
                            <label for="tglbanego">Tanggal Berita Acara Negosiasi Harga Sewa</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix md-prefix">attach_money</i>
                            <input type="text" class="validate" name="nonegodirut">
                            <label for="nonegodirut">Nomor Surat Persetujuan Hasil Negosiasi Direktur Utama</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix md-prefix">date_range</i>
                            <input id="tgl_awal" type="text" class="datepicker" name="tglnegodirut">
                            <label for="tglnegodirut">Tgl Surat Persetujuan Hasil Negosiasi Direktur Utama</label>
                        </div>
                </div>
               
                <br>
                </div>
                </div>
                </div>
                <div class="row">
                    <div class="col 6">
						<a id="berita" class="btn-large orange waves-effect waves-light">BERITA ACARA <i class="material-icons">add</i></a>
                        </div>
                        <div class="col 6">
                            <button type="submit" name="submit" class="btn-large blue waves-effect waves-light">SIMPAN <i class="material-icons">done</i></button>
                        </div>
                        <div class="col 6">
						
						<a href="?page=kontrak" class="btn-large deep-orange waves-effect waves-light">BATAL <i class="material-icons">clear</i></a>
						
                        </div>
                    </div>

                </form>
                <!-- Form END -->

            </div>
            <!-- Row form END -->

<?php
        
    }}
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
             var z = formatCurrency(zd);
            if(z=='Infinity'){
               var z=0;
            }

             $('#sewabulan').val(z);
             
             $('#gow').addClass("active");
         });

           $('#periode').keyup(function(){
            var x = $('#periode').val();
             var y = $('#nilaikontrak').val();
             var number = y.split('.').join('');
             var zd = number/x;
            var z = formatCurrency(zd);
            
            if(z=='Infinity'){
               var z=0;
            }
             $('#sewabulan').val(z);
             
             $('#gow').addClass("active");
         });
         
         $('#berita').click(function(){
             $('#modalkontrak').openModal();
         });

         $('#tutup').click(function(){
             $('#modalkontrak').closeModal();
         });

});

function formatCurrency(num) {    

num = num.toString().replace(/\$|\,/g,'');

if(isNaN(num))

num = "0";

sign = (num == (num = Math.abs(num)));

num = Math.floor(num*100+0.50000000001);

cents = num%100;

num = Math.floor(num/100).toString();

if(cents<10)

cents = "0" + cents;

for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)

num = num.substring(0,num.length-(4*i+3))+'.'+

num.substring(num.length-(4*i+3));

//return (((sign)?'':'-') + 'Rp' + num + '.' + cents);

return (((sign)?'':'-') + num );

}
            </script>
            
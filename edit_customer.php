<?php 
                                        $yoyoy=mysqli_query($configtm,"SELECT nama,alamat,hp,phone,email,pic,npwp,idt,status,kota,propinsi,kodepos,namab,unit 
                                        FROM tbl_customer WHERE id='$id'");
                                        list($nama,$alamat,$hp,$phone,$email,$pic,$npwp,$idt,$status,$kota,$propinsi,$kodepos,$namab,$unit)
                                        =mysqli_fetch_array($yoyoy);
                                        ?>


									     <div id="modald">
                                        <div id="modaltm" class="modal">
                                        <div class="modal-content white" style="height:100%">
        
									 <div class="row">
									<div class="col s12 m12">
									  <div class="card blue-grey darken-1" style="background-color:#ffffff!important">
										<div class="card-content black-text">
									
						
                                        <div class="input-field col s6" style="width:100%;text-align:center">
						<h5><i class="material-icons md-36" style="font-size:28px;margin-bottom:6px">person_add</i> Prospective Costumer</h5><br>
						</div>
                              <form method="POST">
							
								
							
							
							<div class="input-field col s6">
                                <i class="material-icons prefix md-prefix">perm_identity</i>
                                <input type="text" name="nama_depan" value="<?php echo $nama;?>" required>
                                    
                                <label for="nama_depan">Nama Depan</label>
                            </div>
									
							<div class="input-field col s6">
                                <i class="material-icons prefix md-prefix">perm_identity</i>
                                <input type="text" name="nama_belakang" value="<?php echo $namab;?>" required>
                                    
                                <label for="nama_belakang">Nama Belakang</label>
                            </div>

                            

                            	<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">flag</i><label>Provinsi</label><br/>
                                        <div class="input-field col s11 right">
                                            <select class="browser-default" name="provinsi" id="propinsi" style="margin-bottom:24px;" required>
											
											<?php
														
                                               $bangku=mysqli_query($configtm,"SELECT * FROM propinsi");
											   while($row=mysqli_fetch_array($bangku)){
                                                   if($row['id']==$propinsi){
                                                    echo '<option value="'.$row['id'].'" selected>'.$row['propinsi'].'</option>';
                                                   } else {
                                                    echo '<option value="'.$row['id'].'">'.$row['propinsi'].'</option>';
                                                   }
                                                   
                                                
                                                }
											   
														?>
														
                                            </select>
                                        </div>
                                          
                                    </div>

                                 <script>
                                  $(document).ready(function() {		

                                $("#propinsi").change(function ()      
                                { 
                                    var propinsi = $(this).val();       	       			
                                    $.post('./tm/proses_kota.php', { propinsi : propinsi }, function(data){
                    
                                            $("#kota").html(data);
                                        });
                                });			    
                                });
                                </script>	

                                    <div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">flag</i><label>Kota</label><br/>
                                        <div class="input-field col s11 right">
                                            <select class="browser-default" name="kota" id="kota" style="margin-bottom:24px;" required>
                                            <?php
                                            $koi=mysqli_query($configtm,"SELECT * FROM kota");
                                            while($data=mysqli_fetch_array($koi)){
                                                if($data['id']==$kota){
                                                    echo'<option value="'.$kota.'" selected>'.$data['kota'].'</option>';
                                                }
                                            }
                                            ?>
													
                                            </select>
                                        </div>
                                          
                                    </div>

									
									<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">place</i>
                                        <input type="text" name="alamat" id="alamat"  value="<?php echo $alamat;?>" required>    
                                        <label for="alamat">Alamat</label>
                                      
                                          
                                    </div>
									
									<div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">looks_one</i><label>Kode Pos</label>
                                       
                                        <input type="number" class="validate" name="kode_pos" id="kode_pos"  value="<?php echo $kodepos;?>">   
                                          
                                    </div>

                                    <div class="input-field col s6">
                                <i class="material-icons prefix md-prefix">phone_iphone</i>
                                <input type="number" min ="0" name="nomorhp"  value="<?php echo $hp;?>" required>
                                    
                                <label for="nomorhp">Nomor HP</label>
                            </div>

                             <div class="input-field col s6">
                                <i class="material-icons prefix md-prefix">phone</i>
                                <input type="number" min="0" name="telepon"  value="<?php echo $phone;?>" required>
                                    
                                <label for="telepon">No. Telpon</label>
                            </div>
                                
                                
                             <div class="input-field col s6">
                                <i class="material-icons prefix md-prefix">email</i>
                                <input type="email" id="email" class="validate" name="email"  value="<?php echo $email;?>" required>
                                <label for="email">E-mail</label>
                                
                            </div>
                           

                            <div class="input-field col s6">
                                <i class="material-icons prefix md-prefix">card_membership</i>
                                <input type="text" name="npwp" value="<?php echo $npwp;?>" required>
                                <label for="npwp">NPWP</label>
                            </div>

                           <div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">verified_user</i><label>Status Aktif</label><br/>
                                        <div class="input-field col s11 right">
                                            <select class="browser-default" name="stataktif" id="stataktif" style="margin-bottom:24px;" required>
                                            <?php
                                            if($status==1){
                                                echo 
                                                '<option value="1" selected>Aktif</option>
                                                <option value="0">Tidak Aktif</option>';
                                                
                                            } else {
                                                echo 
                                                '<option value="1">Aktif</option>
                                                <option value="0" selected>Tidak Aktif</option>';
                                            }
                                                
                                            ?>
                                            
                                            
													
                                            </select>
                                        </div>
                                          
                                    </div>

                            <div class="input-field col s6">
                                        <i class="material-icons prefix md-prefix">work</i><label>Unit</label><br/>
                                        <div class="input-field col s11 right">
                                            <select class="browser-default" name="unit" id="unit" style="margin-bottom:24px;" required>
                                            <?php 
                                            $eliji=mysqli_query($configtm,"SELECT * FROM tbl_unit");
                                            while($row=mysqli_fetch_array($eliji)){
                                                if($row['id']==$unit){
                                                    echo '<option value="'.$row['id'].'" selected>'.$row['unit'].'</option>';
                                                } else {
                                                    echo '<option value="'.$row['id'].'">'.$row['unit'].'</option>';
                                                }
                                                
                                            }

                                            ?>
                                            </select>
                                        </div>
                                          
                                    </div>	
									
                                    <div class="input-field col s6">
                                <i class="material-icons prefix md-prefix">perm_identity</i>
                                <input type="text" name="pic" value="<?php echo $pic;?>" required>
                                    
                                <label for="pic">PIC</label>
                            </div>
		
		
								
								</div>
                                </div>
                                </div>
                                </div>
		
									
				
									
										
									<div class="input-field col s6" style="width:100%;text-align:left">	
                                    <button type="submit" name="tambahcustomer" class="btn-large green waves-effect waves-light">TAMBAH <i class="material-icons">add</i></button>
                                </div>
									</form>
									
                                    </div>
                                    </div>
                                    </div>
					
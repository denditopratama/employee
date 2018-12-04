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
                               <input type="text" class="browser-default" name="nama_depan" required>
                                   
                               <label for="nama_depan">Nama Depan</label>
                           </div>
                                   
                           <div class="input-field col s6">
                               <i class="material-icons prefix md-prefix">perm_identity</i>
                               <input type="text" name="nama_belakang" required>
                                   
                               <label for="nama_belakang">Nama Belakang</label>
                           </div>

                           

                               <div class="input-field col s6">
                                       <i class="material-icons prefix md-prefix">flag</i><label>Provinsi</label><br/>
                                       <div class="input-field col s11 right">
                                           <select class="browser-default" name="provinsi" id="propinsi" style="margin-bottom:24px;" required>
                                           
                                           <?php
                                                       
                                                       // $jiod=mysqli_query($configtm,"SELECT jenis_bank FROM tbl_identitas WHERE id_user='$id_user'");
                                                       // list($bank)=mysqli_fetch_array($jiod);
                                                       
                                              $bangku=mysqli_query($configtm,"SELECT * FROM propinsi");
                                              while($row=mysqli_fetch_array($bangku)){
                                                  echo '<option value="'.$row['id'].'">'.$row['propinsi'].'</option>';}
                                              
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
                   
                                                   
                                           </select>
                                       </div>
                                         
                                   </div>

                                   
                                   <div class="input-field col s6">
                                       <i class="material-icons prefix md-prefix">place</i>
                                       <input type="text" name="alamat" id="alamat" required>    
                                       <label for="alamat">Alamat</label>
                                     
                                         
                                   </div>
                                   
                                   <div class="input-field col s6">
                                       <i class="material-icons prefix md-prefix">looks_one</i><label>Kode Pos</label>
                                      
                                       <input type="number" class="validate" name="kode_pos" id="kode_pos">   
                                         
                                   </div>

                                   <div class="input-field col s6">
                               <i class="material-icons prefix md-prefix">phone_iphone</i>
                               <input type="number" min ="0" name="nomorhp" required>
                                   
                               <label for="nomorhp">Nomor HP</label>
                           </div>

                            <div class="input-field col s6">
                               <i class="material-icons prefix md-prefix">phone</i>
                               <input type="number" min="0" name="telepon" required>
                                   
                               <label for="telepon">No. Telpon</label>
                           </div>
                               
                               
                            <div class="input-field col s6">
                               <i class="material-icons prefix md-prefix">email</i>
                               <input type="email" id="email" class="validate" name="email" required>
                               <label for="email">E-mail</label>
                               
                           </div>
                          

                           <div class="input-field col s6">
                               <i class="material-icons prefix md-prefix">card_membership</i>
                               <input type="text" name="npwp" required>
                               <label for="npwp">NPWP</label>
                           </div>

                          <div class="input-field col s6">
                                       <i class="material-icons prefix md-prefix">verified_user</i><label>Status Aktif</label><br/>
                                       <div class="input-field col s11 right">
                                           <select class="browser-default" name="stataktif" id="stataktif" style="margin-bottom:24px;" required>
                                           <option value="1">Aktif</option>
                                           <option value="2">Tidak Aktif</option>
                                                   
                                           </select>
                                       </div>
                                         
                                   </div>

                           <div class="input-field col s6">
                                       <i class="material-icons prefix md-prefix">work</i><label>Unit</label><br/>
                                       <div class="input-field col s11 right">
                                           <select class="browser-default" name="unit" id="unit" style="margin-bottom:24px;" required>
                                           <?php 
                                           $eliji=mysqli_query($configtm,"SELECT * FROM branch");
                                           while($row=mysqli_fetch_array($eliji)){
                                               echo '<option value="'.$row['id'].'">'.$row['description'].'</option>';
                                           }

                                           ?>
                                           </select>
                                       </div>
                                         
                                   </div>	
                                   
                                   <div class="input-field col s6">
                               <i class="material-icons prefix md-prefix">perm_identity</i>
                               <input type="text" name="pic" required>
                                   
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
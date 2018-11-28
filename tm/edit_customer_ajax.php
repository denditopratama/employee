
<?php
session_start();
if(empty($_SESSION['admin'])){
	echo '
	<script>
	alert(\'ACCESS DENIED WOI!\');
	window.location.href=\'../\';
	</script>';
} else {
require('../include/config.php');


			$id=mysqli_real_escape_string($configtm,$_POST['datake']);
			$laks=mysqli_query($configtm,"SELECT nama,alamat,hp,phone,email,pic,npwp,status,kota,propinsi,kodepos,namab,unit FROM tbl_customer WHERE id='$id'");
			list($nama,$alamat,$hp,$phone,$email,$pic,$npwp,$status,$kota,$propinsi,$kodepos,$namab,$unit)=mysqli_fetch_array($laks);


echo'
<div class="col s12 m12">
  <div class="card blue-grey darken-1" style="background-color:#ffffff!important">
    <div class="card-content black-text">


    <div class="input-field col s6" style="width:100%;text-align:center">
<h5><i class="material-icons md-36" style="font-size:28px;margin-bottom:6px">person_add</i> Edit Costumer</h5><br>
</div>



<div class="input-field col s6">
<i class="material-icons prefix md-prefix">perm_identity</i>
<input type="text" name="nama_depan" id="nama_depan" value="'.$nama.'" required>

<label for="nama_depan" class="active">Nama Depan</label>
</div>

<div class="input-field col s6">
<i class="material-icons prefix md-prefix">perm_identity</i>
<input type="text" name="nama_belakang" id="nama_belakang" value="'.$namab.'" required>

<label for="nama_belakang" class="active">Nama Belakang</label>
</div>



<div class="input-field col s6">
    <i class="material-icons prefix md-prefix">flag</i><label>Provinsi</label><br/>
    <div class="input-field col s11 right">
        <select class="browser-default" name="provinsi" id="propinsis" style="margin-bottom:24px;" required>';
        
   
        
           $bangku=mysqli_query($configtm,"SELECT * FROM propinsi");
           while($row=mysqli_fetch_array($bangku)){
               if($row['id']==$propinsi){
                echo '<option value="'.$row['id'].'" selected>'.$row['propinsi'].'</option>';
               } else {
                echo '<option value="'.$row['id'].'">'.$row['propinsi'].'</option>';
               }
               
            
            }
       
                
            echo'        
        </select>
    </div>
      
</div>

<script>
$(document).ready(function() {		

$("#propinsis").change(function ()      
{ 
var propinsi = $(this).val();       	       			
$.post(\'./tm/proses_kota.php\', { propinsi : propinsi }, function(data){

        $("#kotay").html(data);
    });
});




});
</script>	

<div class="input-field col s6">
    <i class="material-icons prefix md-prefix">flag</i><label>Kota</label><br/>
    <div class="input-field col s11 right">
		<select class="browser-default" name="kota" id="kotay" style="margin-bottom:24px;" required>';
		
       
        $koi=mysqli_query($configtm,"SELECT * FROM kota");
        while($data=mysqli_fetch_array($koi)){
            if($data['id']==$kota){
                echo'<option value="'.$data['id'].'" selected>'.$data['kota'].'</option>';
            } 
        }
        
       
			echo' 
		
        </select>
    </div>
      
</div>


<div class="input-field col s6">
    <i class="material-icons prefix md-prefix">place</i>
    <input type="text" name="alamat" id="alamat" value="'.$alamat.'"  required>    
    <label for="alamat" class="active" >Alamat</label>
  
      
</div>

<div class="input-field col s6">
    <i class="material-icons prefix md-prefix">looks_one</i><label class="active">Kode Pos</label>
   
    <input type="number" class="validate" name="kode_pos" id="kode_pos"  value="'.$kodepos.'">   
      
</div>

<div class="input-field col s6">
<i class="material-icons prefix md-prefix">phone_iphone</i>
<input type="number" min ="0" name="nomorhp" id="nomorhp" value="'.$hp.'" required>

<label for="nomorhp" class="active">Nomor HP</label>
</div>

<div class="input-field col s6">
<i class="material-icons prefix md-prefix">phone</i>
<input type="number" min="0" name="telepon"  id="telepon" value="'.$phone.'" required>

<label for="telepon" class="active">No. Telpon</label>
</div>


<div class="input-field col s6">
<i class="material-icons prefix md-prefix">email</i>
<input type="email" id="email" class="validate" name="email" id="email" value="'.$email.'" required>
<label for="email" class="active">E-mail</label>

</div>


<div class="input-field col s6">
<i class="material-icons prefix md-prefix">card_membership</i>
<input type="text" name="npwp" id="npwp" value="'.$npwp.'" required>
<label for="npwp" class="active">NPWP</label>
</div>

<div class="input-field col s6">
    <i class="material-icons prefix md-prefix">verified_user</i><label>Status Aktif</label><br/>
    <div class="input-field col s11 right">
		<select class="browser-default" name="stataktif" id="stataktif" style="margin-bottom:24px;" required>';
		
      
        if($status==1){
            echo 
            '<option value="1" selected>Aktif</option>
            <option value="2">Tidak Aktif</option>';
            
        } else {
            echo 
            '<option value="1">Aktif</option>
            <option value="2" selected>Tidak Aktif</option>';
        }
           echo'
        </select>
    </div>
      
</div>

<div class="input-field col s6">
    <i class="material-icons prefix md-prefix">work</i><label>Unit</label><br/>
    <div class="input-field col s11 right">
		<select class="browser-default" name="unit" id="unit" style="margin-bottom:24px;" required>';
		
        
        $eliji=mysqli_query($configtm,"SELECT * FROM tbl_unit");
        while($row=mysqli_fetch_array($eliji)){
            if($row['id']==$unit){
                echo '<option value="'.$row['id'].'" selected>'.$row['unit'].'</option>';
            } else {
                echo '<option value="'.$row['id'].'">'.$row['unit'].'</option>';
            }
            
        }

      echo'
        </select>
    </div>
      
</div>	

<div class="input-field col s6">
<i class="material-icons prefix md-prefix">perm_identity</i>
<input type="text" name="pic" id="pic" value="'.$pic.'" required>

<label for="pic" class="active">PIC</label>
</div>



</div>
</div>
</div>





    
<div class="input-field col s6" style="width:100%;text-align:left">	
<button type="submit" name="tambahcustomer" class="btn-large green waves-effect waves-light">SIMPAN <i class="material-icons">done</i></button>
</div>';
	}
?>
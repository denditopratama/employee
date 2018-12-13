<?php
if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {
		$id_user=mysqli_real_escape_string($config,$_REQUEST['id_user']);
		
                
			?>
			<div class="row">
								<div class="col s12" style="text-align:center">
										<h5><u><i class="material-icons md-36">people</i> Keluarga</u></h5>
										</div>
										
										
							<div class="col m12" id="colres">	
							<?php $yow=mysqli_query($config,"SELECT status FROM tbl_akses_user WHERE id=1");
										list($akses)=mysqli_fetch_array($yow);
										if($akses!=1 || $_SESSION['admin']==1 && $_SESSION['divisi']==2){?>
                            <table class="bordered" id="tbls">
                                <thead class="blue lighten-4" id="head" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)"><small class="green-text">*Kosongkan yang tidak diketahui datanya<br>*Klik Tambah data di tabel baris pertama untuk menambahkan data</small>
                                    <tr>
										<th width="5%" style="color:#fff;text-align:center">Nomor</th>
                                        <th width="15%"style="color:#fff;text-align:center">Nama</th>
										<th width="15%"style="color:#fff;text-align:center">Jenis Kelamin</th>
										<th width="10%"style="color:#fff;text-align:center">Tempat Lahir</th>
                                        <th width="20%"style="color:#fff;text-align:center">Tanggal Lahir</th>
										<th width="10%"style="color:#fff;text-align:center">Usia</th>
										<th width="25%"style="color:#fff;text-align:center">Hubungan Keluarga</th>
										<th width="15%"style="color:#fff;text-align:center">Tindakan</th>
										
										</tr>
										</thead>
									
										<form method="POST">
										<tbody style="background-color:rgba(255,255,0,0.7)">
										<td style="text-align:center">-</td>
										
										<td style="text-align:center">
										<input type="text" name="namakeluarga" style="text-align:center" required>
										</td>
										
										<td style="text-align:center">
										<select class="browser-default" name="jeniskelaminkeluarga" style="text-align:center;margin-bottom:23px">
										<option value="L">Laki-Laki</option>
										<option value="P">Perempuan</option>
										</select>
										</td>
										
										<td style="text-align:center">
										<input type="text" name="tempatlahir" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<input id="tgl_awal" type="text" name="tanggallahir" style="text-align:center;">
										</td>
										
										
										<td style="text-align:center">
										<input type="text" name="usia" placeholder="Otomatis" style="text-align:center;" disabled>
										</td>
										
										
										<td style="text-align:center">
										<select class="browser-default" name="hubungankeluarga" style="text-align:center;margin-bottom:23px" required>
										<?php 
										$x=9;
										$o=18;
										$k=27;
										$h=30;
											for($i=1;$i<=9;$i++){
											echo'<option value="'.$i.'">Anak Ke-'.$i.'</option>';}
											for($i=10;$i<=18;$i++){
											echo'<option value="'.$i.'">Kakak Ke-'.($i-$x).'</option>';}
											for($i=19;$i<=27;$i++){
											echo'<option value="'.$i.'">Adik Ke-'.($i-$o).'</option>';}
											for($i=28;$i<=30;$i++){
											echo'<option value="'.$i.'">Suami Ke-'.($i-$k).'</option>';}
											for($i=31;$i<=33;$i++){
											echo'<option value="'.$i.'">Istri Ke-'.($i-$h).'</option>';}
										?>
										</select>
										</td>
										
										<td style="text-align:center">
										<button id="tambah" type="submit" name="tambahkeluarga" class="btn-large" style="text-align:center;">TAMBAH</button>
										</td>
										
										</tbody>
										</form>
										</table>
											<?php } ?>
										 <table class="bordered" id="tbls">
                                <thead class="blue lighten-4" id="head" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                                    <tr>
										<th width="5%" style="color:#fff;text-align:center">Nomor</th>
                                        <th width="15%"style="color:#fff;text-align:center">Nama</th>
										<th width="15%"style="color:#fff;text-align:center">Jenis Kelamin</th>
										<th width="10%"style="color:#fff;text-align:center">Tempat Lahir</th>
                                        <th width="20%"style="color:#fff;text-align:center">Tanggal Lahir</th>
										<th width="10%"style="color:#fff;text-align:center">Usia</th>
										<th width="25%"style="color:#fff;text-align:center">Hubungan Keluarga</th>
										<th width="15%"style="color:#fff;text-align:center">Tindakan</th>
										
										</tr>
										</thead>
										<?php 
										$queryp=mysqli_query($config,"SELECT * FROM tbl_keluarga WHERE id_user='$id_user'");
										$no=0;
										while($data=mysqli_fetch_array($queryp)){
											$no++;
										echo'
										<tbody>
										<form method="POST">
										<td style="text-align:center">'.$no.'</td>
										
										<td style="text-align:center">
										<input type="text" name="namakeluarga'.$data['id'].'" value="'.$data['nama'].'" class="browser-default" style="text-align:center">';
										
										echo'
										</td>
										
										<td style="text-align:center">
										<select class="browser-default" name="jeniskelaminkeluarga'.$data['id'].'" id="jenis_kelamin" style="margin-bottom:24px;">';
                                                   
                                                        if($data['jenis_kelamin'] == 'L'){
                                                            echo '<option value="L" selected>Laki - Laki</option>
																  <option value="P">Perempuan</option>';
                                                        } else if($data['jenis_kelamin'] == 'P') {
                                                            echo '<option value="L">Laki - Laki</option>
																  <option value="P" selected>Perempuan</option>';
                                                        }
														 
                                                   echo'
                                                
										</select>
										</td>
										
										<td style="text-align:center">
										<input type="text" name="tempatlahir'.$data['id'].'" value="'.$data['tempat_lahir'].'" style="text-align:center;">
										</td>
										
										<td style="text-align:center">';
										$lahiran=date('d M Y',strtotime($data['tanggal_lahir']));
										echo'
										<input id="tgl_awal" type="text" name="tanggallahir'.$data['id'].'" value="'.$lahiran.'" style="text-align:center;">
										</td>';
										
										
										echo'
										<td style="text-align:center">
										<input type="text" name="usia'.$data['id'].'" value="'.$data['usia'].'" style="text-align:center;" disabled>
										</td>
										
										<td style="text-align:center">
										<select class="browser-default" name="hubungankeluarga'.$data['id'].'" style="text-align:center;margin-bottom:23px" required>';
										
										$x=9;
										$o=18;
										$k=27;
										$h=30;
											for($i=1;$i<=9;$i++){
												if($data['hubungan_keluarga']==$i){
											echo'<option value="'.$i.'" selected>Anak Ke-'.$i.'</option>';}
											else{echo'<option value="'.$i.'">Anak Ke-'.$i.'</option>';}}
											for($i=10;$i<=18;$i++){
												if($data['hubungan_keluarga']==$i){
											echo'<option value="'.$i.'" selected>Kakak Ke-'.($i-$x).'</option>';}
											else{echo'<option value="'.$i.'">Kakak Ke-'.($i-$x).'</option>';}}
											for($i=19;$i<=27;$i++){
												if($data['hubungan_keluarga']==$i){
											echo'<option value="'.$i.'" selected>Adik Ke-'.($i-$o).'</option>';}
											else{echo'<option value="'.$i.'">Adik Ke-'.($i-$o).'</option>';}}
											for($i=28;$i<=30;$i++){
												if($data['hubungan_keluarga']==$i){
											echo'<option value="'.$i.'" selected>Suami Ke-'.($i-$k).'</option>';}
											else{echo'<option value="'.$i.'">Suami Ke-'.($i-$k).'</option>';}}
											for($i=31;$i<=33;$i++){
												if($data['hubungan_keluarga']==$i){
											echo'<option value="'.$i.'" selected>Istri Ke-'.($i-$h).'</option>';}
											else{echo'<option value="'.$i.'">Istri Ke-'.($i-$h).'</option>';}}
										
										echo'
										</select>
										</td>
										
										<td style="text-align:center">';
										if($akses!=1 || $_SESSION['admin']==1 && $_SESSION['divisi']==2){
											echo'
										<button type="submit" name="simpankeluarga'.$data['id'].'" class="btn small blue waves-effect waves-light">
                                                    <i class="material-icons">edit</i> SIMPAN</button>
										<button type="submit" name="hapuskeluarga'.$data['id'].'" class="btn small deep-orange waves-effect waves-light">
													<i class="material-icons">delete</i> DEL</button>';}
													else {
														echo '<a class="btn small blue-grey"><i class="material-icons">error</i></a>';
													}
													echo'
										</td>
										</form>
										</tbody>';}
										?>
										
										
										
										</table>
									
									</div>
									</div>
									
	<?php } ?>
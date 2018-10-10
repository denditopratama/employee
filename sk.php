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
										<h5><u><i class="material-icons md-36">stars</i> Jabatan</u></h5>
										</div>
										
										
							<div class="col m12" id="colres">		
                            <table class="bordered" id="tbls">
                                <thead class="blue lighten-4" id="head" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)"><small class="green-text">*Kosongkan yang tidak diketahui datanya<br>*Klik Tambah data di tabel baris pertama untuk menambahkan data</small>
                                    <tr>
										<th width="5%" style="color:#fff;text-align:center">Nomor</th>
                                        <th width="15%"style="color:#fff;text-align:center">Jabatan</th>
                                        <th width="20%"style="color:#fff;text-align:center">Uraian Jabatan</th>
										<th width="20%"style="color:#fff;text-align:center">Unit Kerja</th>
										<th width="10%"style="color:#fff;text-align:center">Tanggal</th>
										<th width="25%"style="color:#fff;text-align:center">Nomor SK</th>
										<th width="15%"style="color:#fff;text-align:center">Tindakan</th>
										
										</tr>
										</thead>
										<?php if($_SESSION['admin']==1){?>
										<form method="POST">
										<tbody style="background-color:rgba(255,255,0,0.7)">
										<td style="text-align:center">-</td>
										
										<td style="text-align:center">
										<select name="tingkat" class="browser-default" style="margin-top:-13px;">
										<option value="'.$data['tingkat'].'">SD</option>
										<option value="1">SD</option>
										<option value="2">SMP</option>
										<option value="3">SMA/SMU/SMK</option>
										<option value="4">S1</option>
										<option value="5">S2</option>
										<option value="6">S3</option>
										</select>
										</td>
										
										<td style="text-align:center">
										<input type="text" name="namainstansi" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<input type="text" name="jurusan" placeholder="Kosongkan jika tidak ada" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<input id="lulus" type="number" name="lulus" value="'.$data['lulus'].'" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<input type="text" name="no_serti" placeholder="contoh : AA/123/CS/VII/2018" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<button id="tambah" type="submit" name="pendidikanformal" class="btn-large" style="text-align:center;">TAMBAH DATA</button>
										</td>
										</form>
										</tbody>
										
										
										<?php 
										}$querschool=mysqli_query($config,"SELECT * FROM tbl_pendidikan WHERE jenis=1 AND id_user='".$_REQUEST['id_user']."'");
										$no=0;
										while($data=mysqli_fetch_array($querschool)){
											$no++;
										echo'
										<tbody>
										<form method="POST">
										<td style="text-align:center">'.$no.'</td>
										
										<td style="text-align:center">
										<select name="tingkat'.$data['id'].'" class="browser-default" style="margin-top:-13px;">';
										
										if($data['tingkat']==1){
											echo'
										<option value="1">SD</option>';}
										
										else if($data['tingkat']==2){
											echo'
										<option value="2">SMP</option>';}
										
										else if($data['tingkat']==3){
											echo'
										<option value="3">SMA/SMU/SMK</option>';}
										
										else if($data['tingkat']==4){
											echo'
										<option value="4">S1</option>';}
										
										else if($data['tingkat']==5){
											echo'
										<option value="5">S2</option>';}
										
										else if($data['tingkat']==6){
											echo'
										<option value="6">S3</option>';}
								
										echo'
										</select>
										</td>
										
										<td style="text-align:center">
										<input type="text" name="namainstansi'.$data['id'].'" value="'.$data['instansi'].'" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<input type="text" name="jurusan'.$data['id'].'" value="'.$data['jurusan'].'" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<input id="lulus" type="number" name="lulus'.$data['id'].'" value="'.$data['lulus'].'" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<input type="text" name="no_serti'.$data['id'].'" value="'.$data['no_serti'].'" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<button type="submit" name="simpans'.$data['id'].'" class="btn small blue waves-effect waves-light">
                                                    <i class="material-icons">edit</i> SIMPAN</button>
										<button type="submit" name="hapuss'.$data['id'].'" class="btn small deep-orange waves-effect waves-light">
                                                    <i class="material-icons">delete</i> DEL</button>
										</td>
										</form>
										</tbody>';}
										?>
										
										
										
										</table>
									
									</div>
									</div>
									
	<?php } ?>
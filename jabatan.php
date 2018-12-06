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
                                        <th width="20%"style="color:#fff;text-align:center">File</th>
										<th width="15%"style="color:#fff;text-align:center">Unit Kerja</th>
										<th width="10%"style="color:#fff;text-align:center">Tanggal</th>
										<th width="12%"style="color:#fff;text-align:center">Nomor SK</th>
										<th width="5%"style="color:#fff;text-align:center">Tindakan</th>
										
										</tr>
										</thead>
										
										<form method="POST" enctype="multipart/form-data">
										<tbody style="background-color:rgba(255,255,0,0.7)">
										<td style="text-align:center">-</td>
										
										<td style="text-align:center">
										<input type="text" name="jabatang" style="text-align:center">
										</td>
										
										<td>
										<div class="file-field input-field tooltipped" data-position="top" data-tooltip="Upload SK">
										<div class="btn light-green darken-1" style="align:left!important;">
										<span>File</span>
										<input type="file" id="file" name="file">
										</div>
										 <div class="file-path-wrapper">
										<input class="file-path validate" type="text" placeholder="Upload SK" disabled>
										</div>
										</div>
										</td>
										
										<td style="text-align:center">
										<input type="text" name="unitkerja" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<input id="tgl_awal" type="text" name="tanggaljabatan" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<input type="text" name="no_sk" placeholder="contoh : AA/123/CS/VII/2018" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<button id="tambah" type="submit" name="tambahjabatan" class="btn-large" style="text-align:center;">TAMBAH</button>
										</td>
										
										</tbody>
										</form>
										</table>
										
										 <table class="bordered" id="tbls">
                                <thead class="blue lighten-4" id="head" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                                    <tr>
										<th width="5%" style="color:#fff;text-align:center">Nomor</th>
                                        <th width="15%"style="color:#fff;text-align:center">Jabatan</th>
                                        <th width="20%"style="color:#fff;text-align:center">File</th>
										<th width="15%"style="color:#fff;text-align:center">Unit Kerja</th>
										<th width="10%"style="color:#fff;text-align:center">Tanggal</th>
										<th width="12%"style="color:#fff;text-align:center">Nomor SK</th>
										<th width="5%"style="color:#fff;text-align:center">Tindakan</th>
										
										</tr>
										</thead>
										<?php 
										$query=mysqli_query($config,"SELECT * FROM tbl_jabatan WHERE id_user='".$_REQUEST['id_user']."'");
										$no=0;
										while($data=mysqli_fetch_array($query)){
											$no++;
										echo'
										<tbody>
										<form method="POST" enctype="multipart/form-data">
										<td style="text-align:center">'.$no.'</td>
										
										<td style="text-align:center">
										<input type="text" name="jabatans'.$data['id'].'" value="'.$data['jabatan'].'" class="browser-default" style="text-align:center">';
										
										echo'
										</td>
										
										
										<td>
										<div class="file-field input-field tooltipped" data-position="top" data-tooltip="Upload SK">
										<div class="btn light-green darken-1" style="text-align:left!important">
										<span>File</span>
										<input type="file" id="file" name="file'.$data['id'].'">
										</div>
										 <div class="file-path-wrapper">
										<input class="file-path validate" type="text" placeholder="Upload SK" disabled>
										<strong>Lihat file : </strong><a class="blue-text" href="./upload/SK_jabatan/'.$data['file'].'" target="_blank">'.$data['file'].'</a>
										</div>
										</div>
										</td>
										
										
										<td style="text-align:center">
										<input type="text" name="unit_kerja'.$data['id'].'" value="'.$data['unit_kerja'].'" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<input id="tgl_awal" type="text" name="tanggaljabatan'.$data['id'].'" value="'.$data['tanggal'].'" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<input type="text" name="no_sk'.$data['id'].'" value="'.$data['no_sk'].'" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<button type="submit" name="simpanjabatan'.$data['id'].'" class="btn small blue waves-effect waves-light">
                                                    <i class="material-icons">edit</i> SIMPAN</button>
										<button type="submit" name="hapusjabatan'.$data['id'].'" class="btn small deep-orange waves-effect waves-light">
                                                    <i class="material-icons">delete</i> DEL</button>
										</td>
										</form>
										</tbody>';}
										?>
										
										
										
										</table>
									
									</div>
									</div>
									
	<?php } ?>
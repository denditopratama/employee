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
										<h5><u><i class="material-icons md-36">people</i> Organisasi</u></h5>
										</div>
										
										
							<div class="col m12" id="colres">		
                            <table class="bordered" id="tbls">
                                <thead class="blue lighten-4" id="head" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)"><small class="green-text">*Kosongkan yang tidak diketahui datanya<br>*Klik Tambah data di tabel baris pertama untuk menambahkan data</small>
                                    <tr>
										<th width="5%" style="color:#fff;text-align:center">Nomor</th>
                                        <th width="15%"style="color:#fff;text-align:center">Nama Organisasi</th>
                                        <th width="20%"style="color:#fff;text-align:center">Jabatan</th>
										<th width="10%"style="color:#fff;text-align:center">Tanggal Masuk</th>
										<th width="10%"style="color:#fff;text-align:center">Tanggal Keluar</th>
										<th width="25%"style="color:#fff;text-align:center">Nomor Surat</th>
										<th width="15%"style="color:#fff;text-align:center">Tindakan</th>
										
										</tr>
										</thead>
								
										<form method="POST">
										<tbody style="background-color:rgba(255,255,0,0.7)">
										<td style="text-align:center">-</td>
										
										<td style="text-align:center">
										<input type="text" name="namaorganisasi" style="text-align:center">
										</td>
										
										<td style="text-align:center">
										<input type="text" name="jabatanorganisasi" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<input id="tgl_awal" type="text" name="tanggalorganisasiawal" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<input id="tgl_awal" type="text" name="tanggalorganisasiakhir" style="text-align:center;">
										</td>
										
										
										<td style="text-align:center">
										<input type="text" name="nomororganisasi" placeholder="contoh : AA/123/CS/VII/2018" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<button id="tambah" type="submit" name="tambahorganisasi" class="btn-large" style="text-align:center;">TAMBAH</button>
										</td>
										
										</tbody>
										</form>
										</table>
										
										 <table class="bordered" id="tbls">
                                <thead class="blue lighten-4" id="head" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                                    <tr>
										<th width="5%" style="color:#fff;text-align:center">Nomor</th>
                                        <th width="15%"style="color:#fff;text-align:center">Nama Organisasi</th>
                                        <th width="20%"style="color:#fff;text-align:center">Jabatan</th>
										<th width="10%"style="color:#fff;text-align:center">Tanggal Masuk</th>
										<th width="10%"style="color:#fff;text-align:center">Tanggal Keluar</th>
										<th width="25%"style="color:#fff;text-align:center">Nomor Surat</th>
										<th width="15%"style="color:#fff;text-align:center">Tindakan</th>
										
										</tr>
										</thead>
										<?php 
										$queryr=mysqli_query($config,"SELECT * FROM tbl_organisasi WHERE id_user='$id_user'");
										$no=0;
										while($data=mysqli_fetch_array($queryr)){
											$no++;
										echo'
										<tbody>
										<form method="POST">
										<td style="text-align:center">'.$no.'</td>
										
										<td style="text-align:center">
										<input type="text" name="namaorganisasi'.$data['id'].'" value="'.$data['nama_organisasi'].'" class="browser-default" style="text-align:center">';
										
										echo'
										</td>
										
										<td style="text-align:center">
										<input type="text" name="jabatanorganisasi'.$data['id'].'" value="'.$data['jabatan'].'" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<input type="text" name="tanggalorganisasiawal'.$data['id'].'" value="'.$data['tanggal_masuk'].'" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<input id="tgl_awal" type="text" name="tanggalorganisasiakhir'.$data['id'].'" value="'.$data['tanggal_keluar'].'" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<input type="text" name="nomororganisasi'.$data['id'].'" value="'.$data['nomor_surat'].'" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<button type="submit" name="simpanorganisasi'.$data['id'].'" class="btn small blue waves-effect waves-light">
                                                    <i class="material-icons">edit</i> SIMPAN</button>
										<button type="submit" name="hapusorganisasi'.$data['id'].'" class="btn small deep-orange waves-effect waves-light">
                                                    <i class="material-icons">delete</i> DEL</button>
										</td>
										</form>
										</tbody>';}
										?>
										
										
										
										</table>
									
									</div>
									</div>
									
	<?php } ?>
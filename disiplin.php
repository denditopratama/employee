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
										<h5><u><i class="material-icons md-36">warning</i> Hukuman Disiplin</u></h5>
										</div>
										
										
							<div class="col m12" id="colres">		
                            <table class="bordered" id="tbls">
                                <thead class="blue lighten-4" id="head" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)"><small class="green-text">*Kosongkan yang tidak diketahui datanya<br>*Klik Tambah data di tabel baris pertama untuk menambahkan data</small>
                                    <tr>
										<th width="5%" style="color:#fff;text-align:center">Nomor</th>
                                        <th width="15%"style="color:#fff;text-align:center">Jenis Hukuman</th>
                                        <th width="20%"style="color:#fff;text-align:center">Uraian Hukuman</th>
										<th width="10%"style="color:#fff;text-align:center">Tanggal Awal</th>
										<th width="10%"style="color:#fff;text-align:center">Tanggal Akhir</th>
										<th width="25%"style="color:#fff;text-align:center">Nomor Surat</th>
										<th width="15%"style="color:#fff;text-align:center">Tindakan</th>
										
										</tr>
										</thead>
										<?php if($_SESSION['admin']==1){?>
										<form method="POST">
										<tbody style="background-color:rgba(255,255,0,0.7)">
										<td style="text-align:center">-</td>
										
										<td style="text-align:center">
										<input type="text" name="jenishukum" style="text-align:center">
										</td>
										
										<td style="text-align:center">
										<input type="text" name="uraihukum" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<input id="tgl_awal" type="text" name="tanggalhukumawal" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<input id="tgl_awal" type="text" name="tanggalhukumakhir" style="text-align:center;">
										</td>
										
										
										<td style="text-align:center">
										<input type="text" name="nomorhukum" placeholder="contoh : AA/123/CS/VII/2018" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<button id="tambah" type="submit" name="tambahhukuman" class="btn-large" style="text-align:center;">TAMBAH</button>
										</td>
										
										</tbody>
										</form>
										</table>
										
										 <table class="bordered" id="tbls">
                                <thead class="blue lighten-4" id="head" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                                    <tr>
										<th width="5%" style="color:#fff;text-align:center">Nomor</th>
                                        <th width="15%"style="color:#fff;text-align:center">Jenis Hukuman</th>
                                        <th width="20%"style="color:#fff;text-align:center">Uraian Hukuman</th>
										<th width="10%"style="color:#fff;text-align:center">Tanggal Awal</th>
										<th width="10%"style="color:#fff;text-align:center">Tanggal Akhir</th>
										<th width="25%"style="color:#fff;text-align:center">Nomor Surat</th>
										<th width="15%"style="color:#fff;text-align:center">Tindakan</th>
										
										</tr>
										</thead>
										<?php 
										}$query=mysqli_query($config,"SELECT * FROM tbl_hukuman WHERE id_user='".$_REQUEST['id_user']."'");
										$no=0;
										while($data=mysqli_fetch_array($query)){
											$no++;
										echo'
										<tbody>
										<form method="POST">
										<td style="text-align:center">'.$no.'</td>
										
										<td style="text-align:center">
										<input type="text" name="jenishukum'.$data['id'].'" value="'.$data['jenis_hukuman'].'" class="browser-default" style="text-align:center">';
										
										echo'
										</td>
										
										<td style="text-align:center">
										<input type="text" name="uraihukum'.$data['id'].'" value="'.$data['uraianhukuman'].'" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<input type="text" name="tanggalhukumawal'.$data['id'].'" value="'.$data['tanggalawal'].'" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<input id="tgl_awal" type="text" name="tanggalhukumakhir'.$data['id'].'" value="'.$data['tanggalakhir'].'" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<input type="text" name="nomorhukum'.$data['id'].'" value="'.$data['no_surat'].'" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<button type="submit" name="simpanhukuman'.$data['id'].'" class="btn small blue waves-effect waves-light">
                                                    <i class="material-icons">edit</i> SIMPAN</button>
										<button type="submit" name="hapushukuman'.$data['id'].'" class="btn small deep-orange waves-effect waves-light">
                                                    <i class="material-icons">delete</i> DEL</button>
										</td>
										</form>
										</tbody>';}
										?>
										
										
										
										</table>
									
									</div>
									</div>
									
	<?php } ?>
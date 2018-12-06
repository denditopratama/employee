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
										<h5><u><i class="material-icons md-36">school</i> Pendidikan</u></h5>
										</div>
										
										
							<div class="col m12" id="colres">		
                            <table class="bordered" id="tbls">
                                <thead class="blue lighten-4" id="head" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)"><h6 style="font-size:18px"><b>A. Formal</b></h6><small class="green-text">*Kosongkan yang tidak diketahui datanya<br>*Klik Tambah data di tabel baris pertama untuk menambahkan data</small>
                                    <tr>
										<th width="5%" style="color:#fff;text-align:center">Nomor</th>
                                        <th width="15%"style="color:#fff;text-align:center">Tingkat</th>
                                        <th width="20%"style="color:#fff;text-align:center">Nama Instansi</th>
										<th width="20%"style="color:#fff;text-align:center">Jurusan</th>
										<th width="10%"style="color:#fff;text-align:center">Tahun Lulus</th>
										<th width="25%"style="color:#fff;text-align:center">Nomor Sertifikat</th>
										<th width="15%"style="color:#fff;text-align:center">Tindakan</th>
										
										</tr>
										</thead>
										<form method="POST">
										<tbody style="background-color:rgba(255,255,0,0.7)">
										<td style="text-align:center">-</td>
										
										<td style="text-align:center">
										<select name="tingkat" class="browser-default" style="margin-top:-13px;">
										
										<option value="1">SD</option>
										<option value="2">SMP</option>
										<option value="3">SMA/SMU/SMK</option>
										<option value="4">S1</option>
										<option value="5">S2</option>
										<option value="6">S3</option>
										<option value="7">D3</option>
										<option value="8">D1</option>
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
										$querschool=mysqli_query($config,"SELECT * FROM tbl_pendidikan WHERE jenis=1 AND id_user='".$_REQUEST['id_user']."'");
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
										<option value="1" selected>SD</option>
										<option value="2">SMP</option>
										<option value="3">SMA/SMU/SMK</option>
										<option value="4">S1</option>
										<option value="5">S2</option>
										<option value="6">S3</option>
										<option value="7">D3</option>
										<option value="8">D1</option>';}
										
										else if($data['tingkat']==2){
											echo'
										
										<option value="1">SD</option>
										<option value="2" selected>SMP</option>
										<option value="3">SMA/SMU/SMK</option>
										<option value="4">S1</option>
										<option value="5">S2</option>
										<option value="6">S3</option>
										<option value="7">D3</option>
										<option value="8">D1</option>';}
										
										else if($data['tingkat']==3){
											echo'
										
										<option value="1">SD</option>
										<option value="2">SMP</option>
										<option value="3" selected>SMA/SMU/SMK</option>
										<option value="4">S1</option>
										<option value="5">S2</option>
										<option value="6">S3</option>
										<option value="7">D3</option>
										<option value="8">D1</option>';}
										
										else if($data['tingkat']==4){
											echo'
										
										<option value="1">SD</option>
										<option value="2">SMP</option>
										<option value="3">SMA/SMU/SMK</option>
										<option value="4" selected>S1</option>
										<option value="5">S2</option>
										<option value="6">S3</option>
										<option value="7">D3</option>
										<option value="8">D1</option>';}
										
										else if($data['tingkat']==5){
											echo'
										
										<option value="1">SD</option>
										<option value="2">SMP</option>
										<option value="3">SMA/SMU/SMK</option>
										<option value="4">S1</option>
										<option value="5" selected>S2</option>
										<option value="6">S3</option>
										<option value="7">D3</option>
										<option value="8">D1</option>';}
										
										else if($data['tingkat']==6){
											echo'
										
										<option value="1">SD</option>
										<option value="2">SMP</option>
										<option value="3">SMA/SMU/SMK</option>
										<option value="4">S1</option>
										<option value="5">S2</option>
										<option value="6" selected>S3</option>
										<option value="7">D3</option>
										<option value="8">D1</option>';}

										else if($data['tingkat']==7){
											echo'
										
										<option value="1">SD</option>
										<option value="2">SMP</option>
										<option value="3">SMA/SMU/SMK</option>
										<option value="4">S1</option>
										<option value="5">S2</option>
										<option value="6">S3</option>
										<option value="7" selected>D3</option>
										<option value="8">D1</option>';}

										else if($data['tingkat']==8){
											echo'
										
										<option value="1">SD</option>
										<option value="2">SMP</option>
										<option value="3">SMA/SMU/SMK</option>
										<option value="4">S1</option>
										<option value="5">S2</option>
										<option value="6">S3</option>
										<option value="7">D3</option>
										<option value="8" selected>D1</option>';}
								
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
								
								
								<div class="row">	
															
							<div class="col m12" id="colres">	
													
                            <table class="bordered" id="tblas">
                                <thead class="blue lighten-4" id="head" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)"><h6 style="font-size:18px"><b>A. Non Formal</b></h6><small class="green-text">*Kosongkan yang tidak diketahui datanya<br>*Klik Tambah data di tabel baris pertama untuk menambahkan data</small>
                                    <tr>
										<th width="5%" style="color:#fff;text-align:center">Nomor</th>
                                        <th width="15%"style="color:#fff;text-align:center">Uraian</th>
                                        <th width="20%"style="color:#fff;text-align:center">Tanggal Awal</th>
										<th width="20%"style="color:#fff;text-align:center">Tanggal Akhir</th>
										<th width="10%"style="color:#fff;text-align:center">Tempat</th>
										<th width="25%"style="color:#fff;text-align:center">Tindakan</th>
									
										</tr>
										</thead>
										<form method ="POST">
										<tbody style="background-color:rgba(255,255,0,0.7)">
										<td style="text-align:center">-</td>
										
										<td style="text-align:center">
										<input type="text" name="uraianpendidikan" placeholder="judul kegiatan" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<input type="text" id="tgl_awal" name="tgl_awal" class="datepicker" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<input type="text" id="tgl_akhir" name="tgl_akhir" class="datepicker" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<input type="text" id="tempat" name="tempat" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<button type="submit" name="pendidikannonformal" class="btn-large" style="text-align:center;" >Tambah Data</button>
										</td>
										</tbody>
										</form>
										
										<table class="bordered" id="tblass">
                                <thead class="blue lighten-4" id="head" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)"><h6 style="font-size:18px">
                                    <tr>
										<th width="5%" style="color:#fff;text-align:center">Nomor</th>
                                        <th width="15%"style="color:#fff;text-align:center">Uraian</th>
                                        <th width="20%"style="color:#fff;text-align:center">Tanggal Awal</th>
										<th width="20%"style="color:#fff;text-align:center">Tanggal Akhir</th>
										<th width="10%"style="color:#fff;text-align:center">Tempat</th>
										<th width="25%"style="color:#fff;text-align:center">Tindakan</th>
									
										</tr>
										</thead>
										
										<?php 
										
										$querschool=mysqli_query($config,"SELECT * FROM tbl_pendidikan WHERE jenis=2 AND id_user='$id_user'");
										$no=0;
										while($data=mysqli_fetch_array($querschool)){
											$no++;
										echo'
										
										<tbody>
										<form method ="POST">
										<td style="text-align:center">'.$no.'</td>
										
										<td style="text-align:center">
										<input type="text" name="uraian'.$data['id'].'"value="'.$data['uraian'].'" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<input id="tgl_surat" name="tgl_awal'.$data['id'].'" type="text" class="datepicker" value="'.$data['tgl_awal'].'" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<input id="tgl_surat" name="tgl_akhir'.$data['id'].'" type="text" class="datepicker" value="'.$data['tgl_akhir'].'" style="text-align:center;">
										</td>
										
										<td style="text-align:center">
										<input type="text" name="tempat'.$data['id'].'" value="'.$data['tempat'].'" style="text-align:center;">
										</td>
										
										
										<td style="text-align:center">
										<button type="submit" name="simpan'.$data['id'].'" class="btn small blue waves-effect waves-light">
                                                    <i class="material-icons">edit</i> SIMPAN</button>
										<button type="submit" name="hapus'.$data['id'].'" class="btn small deep-orange waves-effect waves-light">
                                                    <i class="material-icons">delete</i> DEL</button>
										</td>
										</form>
										</tbody>';
										
										}
										?>
										
										
										</table>
										
									
										
										
									</div>
									</div>
								
	<?php  
	
					}?>
								
							
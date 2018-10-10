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
										<h5><u><i class="material-icons md-36">library_books</i> Riwayat Perjanjian Kerja</u></h5>
										</div>
										
										
							<div class="col m12" id="colres">	
						<?php if($_SESSION['admin']==1){?>							
                            <table class="bordered" id="tbls">
                                <thead class="blue lighten-4" id="head" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                                    <tr>
										<th width="5%" style="color:#fff;text-align:center">No.</th>
                                        <th width="20%"style="color:#fff;text-align:center">File</th>
                                        <th width="15%"style="color:#fff;text-align:center">Tanggal Awal</th>
										<th width="15%"style="color:#fff;text-align:center">Tanggal Akhir</th>
										<th width="15%"style="color:#fff;text-align:center">Tindakan</th>
										
										</tr>
										</thead>
									
										<form method="POST" enctype="multipart/form-data">
										<tbody style="background-color:rgba(255,255,0,0.7)">
										<td style="text-align:center">-</td>
										
										<td>
										<div class="file-field input-field tooltipped" data-position="top" data-tooltip="Upload Surat Perjanjian">
										<div class="btn light-green darken-1">
										<span>File</span>
										<input type="file" id="file" name="file">
										</div>
										 <div class="file-path-wrapper">
										<input class="file-path validate" type="text" placeholder="Upload Surat Perjanjian" disabled>
										</div>
										</div>
										</td>
										
										<td style="text-align:center">
										<input id="tgl_awal" type="text" name="tanggalawals" style="text-align:center;" required>
										</td>
										
										<td style="text-align:center">
										<input id="tgl_awal" type="text" name="tanggalakhirs" style="text-align:center;" required>
										</td>
									
										<td style="text-align:center">
										<button id="tambah" type="submit" name="tambahkontrak" class="btn-large" style="text-align:center;">TAMBAH</button>
										</td>
										
										</tbody>
										</form>
										</table> 
						<?php } ?>
										
										 <table class="bordered" id="tbls">
                                <thead class="blue lighten-4" id="head" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                                    <tr>
										<th width="5%" style="color:#fff;text-align:center">No.</th>
                                        <th width="20%"style="color:#fff;text-align:center">File</th>
                                        <th width="15%"style="color:#fff;text-align:center">Tanggal Awal</th>
										<th width="15%"style="color:#fff;text-align:center">Tanggal Akhir</th>
										<th width="15%"style="color:#fff;text-align:center">Tindakan</th>
										
										</tr>
										</thead>
										<?php 
										$queryr=mysqli_query($config,"SELECT * FROM tbl_kontrak WHERE id_user='$id_user' ORDER by id DESC");
										$no=0;
										while($data=mysqli_fetch_array($queryr)){
											$no++;
										echo'
										<tbody>
										<form method="POST" enctype="multipart/form-data">
										<td style="text-align:center">'.$no.'</td>';
										
										if($_SESSION['admin']==1){
										echo'
									
										<td>
										<div class="file-field input-field tooltipped" data-position="top" data-tooltip="Upload Surat Perjanjian">
										<div class="btn light-green darken-1">
										<span>File</span>
										<input type="file" id="file" name="file'.$data['id'].'">
										</div>
										 <div class="file-path-wrapper">
										<input class="file-path validate" type="text" placeholder="Upload Surat Perjanjian" disabled>
										<strong>Lihat file : </strong><a class="blue-text" href="./upload/kontrak/'.$data['file'].'" target="_blank">'.$data['file'].'</a>
										</div>
										</div>
										</td>';}
										else{echo'<td><strong>Lihat file : </strong><a class="blue-text" href="./upload/kontrak/'.$data['file'].'" target="_blank">'.$data['file'].'</a></td>';}
										$lahirand=date('d M Y',strtotime($data['tgl_awal']));
										$lahirands=date('d M Y',strtotime($data['tgl_akhir']));
										if($_SESSION['admin']==1){
										echo'
										<td style="text-align:center">
										<input id="tgl_awal" type="text" name="tanggalawals'.$data['id'].'" value="'.$lahirand.'" style="text-align:center;">
										</td>
										<td style="text-align:center">
										<input id="tgl_awal" type="text" name="tanggalakhirs'.$data['id'].'" value="'.$lahirands.'" style="text-align:center;">
										</td>';}
										else
											{
										echo'
										<td style="text-align:center">
										<input id="tgl_awal" type="text" name="tanggalawal'.$data['id'].'" value="'.$lahirand.'" style="text-align:center;" disabled>
										</td>
										<td style="text-align:center">
										<input id="tgl_awal" type="text" name="tanggalakhir'.$data['id'].'" value="'.$lahirands.'" style="text-align:center;" disabled>
										</td>';}
										
										if($_SESSION['admin']==1){
										echo'
										
										<td style="text-align:center">
										<button type="submit" name="simpankontrak'.$data['id'].'" class="btn small blue waves-effect waves-light">
                                                    <i class="material-icons">edit</i> SIMPAN</button>
										<button type="submit" name="hapuskontrak'.$data['id'].'" class="btn small deep-orange waves-effect waves-light" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\');">
                                                    <i class="material-icons">delete</i> DEL</button>
										</td>';}
										else {echo '<td style="text-align:center"><a class="btn small blue-grey waves-effect waves-light"><i class="material-icons">error</i> No Action</a></td>';}
										echo'
										</form>
										</tbody>';}
										?>
										
										</table>
									
									</div>
									</div>
									
	<?php } ?>
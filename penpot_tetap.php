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
										<h5><u><i class="material-icons md-36">attach_money</i> Penerimaan Tetap</u></h5>
										</div>
										
										
							<div class="col m12" id="colres">	
						
                            <table class="bordered" id="tbls">
                                <thead class="blue lighten-4" id="head" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)"><small class="black-text">* Klik Tambah data di tabel baris pertama untuk menambahkan data</small>
                                    <tr>
										<th width="5%" style="color:#fff;text-align:center">Nomor</th>
                                        <th width="15%"style="color:#fff;text-align:center">Jenis Penerimaan</th>
										<th width="15%"style="color:#fff;text-align:center">Jumlah</th>
										<th width="10%"style="color:#fff;text-align:center">Tindakan</th>
                                      
										</tr>
										</thead>
									
										<form method="POST">
										<tbody style="background-color:rgba(255,255,0,0.7)">
										<td style="text-align:center">-</td>
										
										<td style="text-align:center">
										<select class="browser-default" name="jenispenerimaan" style="text-align:center;margin-bottom:23px">
										<?php
                                        $pr=mysqli_query($config,"SELECT * FROM tbl_jenis_penerimaan");
                                        while($kuy=mysqli_fetch_array($pr)){
                                            echo '<option value="'.$kuy['id'].'">'.$kuy['uraian'].'</option>';
                                        }
                                        ?>
										</select>
										</td>
										
										<td style="text-align:center">
										<input type="number" id="penjum" name="penjum" style="text-align:center;">
										</td>
										
                                        <input type="hidden" value="<?php echo $id_user; ?>" name="id_user">
										
										
										<td style="text-align:center">
										<button id="tambah" type="submit" name="tambahpen" class="btn-large" style="text-align:center;">TAMBAH</button>
										</td>
										
										</tbody>
										</form>
										</table>
										
										 <table class="bordered" id="tbls">
                                <thead class="blue lighten-4" id="head" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                                    <tr>
                                    <th width="5%" style="color:#fff;text-align:center">Nomor</th>
                                        <th width="15%"style="color:#fff;text-align:center">Jenis Penerimaan</th>
										<th width="15%"style="color:#fff;text-align:center">Jumlah</th>
										<th width="10%"style="color:#fff;text-align:center">Tindakan</th>
										
										</tr>
										</thead>
										<?php 
										$queryp=mysqli_query($config,"SELECT tbl_penerimaan_tetap.*,tbl_jenis_penerimaan.uraian FROM tbl_penerimaan_tetap,tbl_jenis_penerimaan WHERE tbl_penerimaan_tetap.id_user='$id_user' AND tbl_penerimaan_tetap.kode_penerimaan=tbl_jenis_penerimaan.id ");
                                        $no=0;
                                        if(mysqli_num_rows($queryp)>0){
										while($data=mysqli_fetch_array($queryp)){
											$no++;
										echo'
                                        <tbody>
                                        <tr>
										<form method="POST">
                                        <td style="text-align:center">'.$no.'</td>
                                        <td style="text-align:center">
                                        <select class="browser-default" name="jenpen'.$data['id'].'" style="text-align:center;margin-bottom:23px">';
                                        
                                        $prs=mysqli_query($config,"SELECT * FROM tbl_jenis_penerimaan");
                                        while($kuys=mysqli_fetch_array($prs)){
                                            if($kuys['id']==$data['kode_penerimaan']){
                                                echo '<option value="'.$kuys['id'].'" selected>'.$kuys['uraian'].'</option>';
                                            } else {
                                                echo '<option value="'.$kuys['id'].'">'.$kuys['uraian'].'</option>';
                                            }
                                           
                                        }
                                        echo'</select></td>';
										echo '<td style="text-align:center"><input type="number" value="'.$data['jumlah'].'" name="jums'.$data['id'].'" style="text-align:center;"></td>';
										echo'
										<td style="text-align:center">';
										
											echo'
										<button type="submit" name="simpanpenerimaan'.$data['id'].'" class="btn small blue waves-effect waves-light">
                                                    <i class="material-icons">edit</i> SIMPAN</button>
										<button type="submit" name="hapuspenerimaan'.$data['id'].'" class="btn small deep-orange waves-effect waves-light">
													<i class="material-icons">delete</i> DEL</button>';
												
													echo'
										</td>
                                        </form>
                                        </tr>
                                        </tbody>';}
                                                }
                                                else {
                                                    echo '<tr><td style="text-align:center" colspan="4"><h5>Tidak ada Data</h5></td></tr>';
                                                }
										?>
										
										
										
										</table>
									
									</div>
									</div>



                                    <!--POTONGAN TETAP!-->

                                    <div class="row">
								<div class="col s12" style="text-align:center">
										<h5><u><i class="material-icons md-36">attach_money</i> Potongan Tetap</u></h5>
										</div>
										
										
							<div class="col m12" id="colres">	
						
                            <table class="bordered" id="tbls">
                                <thead class="blue lighten-4" id="head" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)"><small class="black-text">* Klik Tambah data di tabel baris pertama untuk menambahkan data</small>
                                    <tr>
										<th width="5%" style="color:#fff;text-align:center">Nomor</th>
                                        <th width="15%"style="color:#fff;text-align:center">Jenis Potongan</th>
										<th width="15%"style="color:#fff;text-align:center">Jumlah</th>
										<th width="10%"style="color:#fff;text-align:center">Tindakan</th>
                                      
										</tr>
										</thead>
									
										<form method="POST">
										<tbody style="background-color:rgba(255,255,0,0.7)">
										<td style="text-align:center">-</td>
										
										<td style="text-align:center">
										<select class="browser-default" name="jenispotongan" style="text-align:center;margin-bottom:23px">
										<?php
                                        $prs=mysqli_query($config,"SELECT * FROM tbl_ref_potongan");
                                        while($kuys=mysqli_fetch_array($prs)){
                                            echo '<option value="'.$kuys['id'].'">'.$kuys['uraian'].'</option>';
                                        }
                                        ?>
										</select>
										</td>
										
										<td style="text-align:center">
										<input type="number" id="potjum" name="potjum" style="text-align:center;">
										</td>
										
                                        <input type="hidden" value="<?php echo $id_user; ?>" name="id_user">
										
										
										<td style="text-align:center">
										<button id="tambah" type="submit" name="tambahpot" class="btn-large" style="text-align:center;">TAMBAH</button>
										</td>
										
										</tbody>
										</form>
										</table>
										
										 <table class="bordered" id="tbls">
                                <thead class="blue lighten-4" id="head" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                                    <tr>
                                    <th width="5%" style="color:#fff;text-align:center">Nomor</th>
                                        <th width="15%"style="color:#fff;text-align:center">Jenis Potongan</th>
										<th width="15%"style="color:#fff;text-align:center">Jumlah</th>
										<th width="10%"style="color:#fff;text-align:center">Tindakan</th>
										
										</tr>
										</thead>
										<?php 
										$queryps=mysqli_query($config,"SELECT tbl_potongan_tetap.*,tbl_ref_potongan.uraian FROM tbl_potongan_tetap,tbl_ref_potongan WHERE tbl_potongan_tetap.id_user='$id_user' AND tbl_potongan_tetap.kode_potongan=tbl_ref_potongan.id ");
                                        $no=0;
                                        if(mysqli_num_rows($queryps)>0){
										while($data=mysqli_fetch_array($queryps)){
											$no++;
										echo'
                                        <tbody>
                                        <tr>
										<form method="POST">
                                        <td style="text-align:center">'.$no.'</td>
                                        <td style="text-align:center">
                                        <select class="browser-default" name="jenpot'.$data['id'].'" style="text-align:center;margin-bottom:23px">';
                                        
                                        $prsd=mysqli_query($config,"SELECT * FROM tbl_ref_potongan");
                                        while($kuyds=mysqli_fetch_array($prsd)){
                                            if($kuyds['id']==$data['kode_potongan']){
                                                echo '<option value="'.$kuyds['id'].'" selected>'.$kuyds['uraian'].'</option>';
                                            } else {
                                                echo '<option value="'.$kuyds['id'].'">'.$kuyds['uraian'].'</option>';
                                            }
                                           
                                        }
                                        echo'</select></td>';
										echo '<td style="text-align:center"><input type="number" value="'.$data['jumlah'].'" name="jumsd'.$data['id'].'" style="text-align:center;"></td>';
										echo'
										<td style="text-align:center">';
										
											echo'
										<button type="submit" name="simpanpotongan'.$data['id'].'" class="btn small blue waves-effect waves-light">
                                                    <i class="material-icons">edit</i> SIMPAN</button>
										<button type="submit" name="hapuspotongan'.$data['id'].'" class="btn small deep-orange waves-effect waves-light">
													<i class="material-icons">delete</i> DEL</button>';
												
													echo'
										</td>
                                        </form>
                                        </tr>
                                        </tbody>';}
                                                }
                                                else {
                                                    echo '<tr><td style="text-align:center" colspan="4"><h5>Tidak ada Data</h5></td></tr>';
                                                }
										?>
										
										
										
										</table>
									
									</div>
									</div>
									
	<?php } ?>
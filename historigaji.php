<?php
if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {
		$id_user=mysqli_real_escape_string($config,$_REQUEST['id_user']);
		
                
			?>
		
										 <table class="bordered" id="tbls">
                                <thead class="blue lighten-4" id="head" style="background-color:#39424c!important;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                                    <tr>
										<th width="5%" style="color:#fff;text-align:center">Nomor</th>
                                        <th width="15%"style="color:#fff;text-align:center">Bulan</th>
                                        <th width="15%"style="color:#fff;text-align:center">Penerimaan Bersih</th>
                                        <th width="15%"style="color:#fff;text-align:center">Tindakan</th>
										
										
										</tr>
										</thead>
										<?php 
										$querypd=mysqli_query($config,"SELECT tbl_gaji.*,tbl_bulan_gaji.bulan FROM tbl_gaji,tbl_bulan_gaji WHERE tbl_gaji.id_user='$id_user' AND tbl_gaji.id_gaji=tbl_bulan_gaji.id");
										$no=0;
										while($row=mysqli_fetch_array($querypd)){
											$no++;
										echo'
										<tbody>
									
										<td style="text-align:center">'.$no.'</td>
										
                                        <td style="text-align:center">';
                                        
                                        $y = substr($row['bulan'],0,4);
                                        $m = substr($row['bulan'],5,2);
                                      
                                    if($m=="" || $m ==0){$nm="";}
                                        if($m == "01"){
                                            $nm = "Januari";
                                        } elseif($m == "02"){
                                            $nm = "Februari";
                                        } elseif($m == "03"){
                                            $nm = "Maret";
                                        } elseif($m == "04"){
                                            $nm = "April";
                                        } elseif($m == "05"){
                                            $nm = "Mei";
                                        } elseif($m == "06"){
                                            $nm = "Juni";
                                        } elseif($m == "07"){
                                            $nm = "Juli";
                                        } elseif($m == "08"){
                                            $nm = "Agustus";
                                        } elseif($m == "09"){
                                            $nm = "September";
                                        } elseif($m == "10"){
                                            $nm = "Oktober";
                                        } elseif($m == "11"){
                                            $nm = "November";
                                        } elseif($m == "12"){
                                            $nm = "Desember";
                                        }
                                    
                                        echo ''.$nm.' - '.$y.'';
										
										echo'
										</td>
										
										<td style="text-align:center">Rp '.number_format($row['penerimaan_bersih'] , 0, ',', '.').'</td>
										
									
										
										
										<td style="text-align:center">';
									
                                        echo'
                                        <form method="POST" action="printslipgaji.php">
                                        <input type="hidden" value="'.$row['id_gaji'].'" name="zero">
                                        <input type="hidden" value="'.$id_user.'" name="zeros">
                                        <button name="buttong" type="submit"  class="btn small orange darken-3 waves-effect waves-light tooltipped" data-position="left" data-tooltip="Klik Untuk Memproses Gaji">
                                                  <i class="material-icons">print</i> CETAK</button>
                                                  </form>';
												
													echo'
										</td>
										
										</tbody>';}
										?>
										
										
										
										</table>
									
									</div>
									</div>
									
	<?php } ?>
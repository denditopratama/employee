<?php
    //cek session
    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<strong>ERROR!</strong> Anda harus login terlebih dahulu.';
        header("Location: ./");
        die();
	
		
    } else {

        echo '
        <style type="text/css">
			h6 {
				font-size: 1.875em;
				font-family: "Sans", Times, serif;
			}
			h4 {
				font-size: 0.875em;
				font-family: "Calibri", calibri, serif;
			}
			
			h5 {
				
				font-family: "Calibri", calibri, serif;
			}
			
            table {
                background: #fff;
                padding: 5px;
            }
            tr, td {
                border: table-cell;
                border: 0px  solid rgba(0,0,0,0);
            }
            tr,td {
                vertical-align: top!important;
            }
            #right {
                border-right: none !important;
				 border-left: none !important;
				  border-top: none !important;
				   border-bottom: none !important;
            }
            #left {
                border-left: none !important;
            }
            .isi {
                height: 300px!important;
            }
            .disp {
                text-align: center;
                padding: 1.5rem 0;
                margin-bottom: .5rem;
            }
            .logodisp {
                float: left;
                position: relative;
                width: 110px;
                height: 110px;
                margin: 0 0 0 1rem;
            }
            #lead {
                width: auto;
                position: relative;
                margin: 25px 0 0 75%;
            }
            .lead {
                font-weight: bold;
                text-decoration: underline;
                margin-bottom: -10px;
            }
            .tgh {
                text-align: center;
            }
            #nama {
                font-size: 2.1rem;
                margin-bottom: -1rem;
            }
            #alamat {
                font-size: 16px;
            }
            .up {
                text-transform: uppercase;
                margin: 0;
                line-height: 2.2rem;
                font-size: 1.5rem;
				
            }
            .status {
                margin: 0;
                font-size: 1.3rem;
                margin-bottom: .5rem;
            }
            #lbr {
                font-size: 20px;
                font-weight: bold;
            }
            .separator {
                border-bottom: 0px solid #616161;
                margin: -1.3rem 0 1.5rem;
            }
            @media print{
                body {
                    font-size: 12px;
                    color: #212121;
                }
                table {
                    width: 100%;
                    font-size: 12px;
                    color: #212121;
                }
                tr, td {
                    border: table-cell;
                    border: 0px  solid #444;
                    padding: 8px!important;

                }
                tr,td {
                    vertical-align: top!important;
                }
                #lbr {
                    font-size: 20px;
                }
                .isi {
                    height: 200px!important;
                }
                .tgh {
                    text-align: center;
                }
                .disp {
                    text-align: center;
                    margin: -.5rem 0;
                }
                .logodisp {
                    float: left;
                    position: relative;
                    width: 150px;
                    height: 40px;
                    margin: .5rem ;
                }
                #lead {
                    width: auto;
                    position: relative;
                    margin: 15px 0 0 75%;
                }
                .lead {
                    font-weight: bold;
                    text-decoration: underline;
                    margin-bottom: -10px;
                }
                #nama {
                    font-size: 20px!important;
                    font-weight: bold;
                    text-transform: uppercase;
                    margin: -10px 0 -20px 0;
                }
                .up {
                    font-size: 17px!important;
                    font-weight: normal;
                }
                .status {
                    font-size: 17px!important;
                    font-weight: normal;
                    margin-bottom: -.1rem;
                }
                #alamat {
                    margin-top: -15px;
                    font-size: 13px;
                }
                #lbr {
                    font-size: 17px;
                    font-weight: bold;
                }
                .separator {
                    border-bottom: 0px solid #616161;
                    margin: -1rem 0 1rem;
                }

            }
        </style>

        <body onload="window.print()">

        <!-- Container START -->
        <div class="container">
            <div id="colres">
                <div class="disp">';
				  $id_surat = mysqli_real_escape_string($config, $_REQUEST['id_surat']);
				$queros=mysqli_query($config,"SELECT * FROM tbl_surat_masuk WHERE id_surat='$id_surat'");
				while($row=mysqli_fetch_array($queros)){
				 $y = substr($row['tgl_diterima'],0,4);
                 $m = substr($row['tgl_diterima'],5,2);
                  $d = substr($row['tgl_diterima'],8,2);
                    $query2 = mysqli_query($config, "SELECT sifat FROM tbl_disposisi");
                    list($sifat) = mysqli_fetch_array($query2);
                   
                        echo '<img class="logodisp" src="./asset/img/screenshots.png"/>'; //cetak logo
                        echo '<h5 class="up" id="nama" style="margin-top:100px;">Disposisi</h5><br/>';
                      
					   echo'<h4 style="margin-top:-7rem;margin-left:30rem;">SIFAT SURAT</h4>';
					   echo '<svg width="80" height="50" style="margin-right:-20.2rem;margin-top:-0.7rem;"><g>
								<rect width="70" height="20" style="fill:rgba(0,0,0,0);stroke-width:1;stroke:rgb(0,0,0)"/></rect>
								
								<text x="21" y="14" font-family="calibri" font-size="12" fill="black">'.$sifat.'</text></g>
								</svg>';
					   echo'<h4 style="margin-top:-2rem;margin-left:30rem;">TANGGAL TERIMA</h4>';
					    
						echo '<svg width="100" height="150" style="margin-right:-29.9rem;margin-top:-10px;"><g>
								<rect width="100" height="20" style="fill:rgba(0,0,0,0);stroke-width:1;stroke:rgb(0,0,0)"/></rect>
								
								<text x="22" y="14" font-family="calibri" font-size="12" fill="black">'.$d.'-'.$m.'-'.$y.'</text></g>
								</svg>';
                    
                    
                     
                    
                    
                echo '</div>';
				}

                $id_surat = mysqli_real_escape_string($config, $_REQUEST['id_surat']);
                $query = mysqli_query($config, "SELECT * FROM tabel_surat WHERE id_surat='$id_surat'");

                if(mysqli_num_rows($query) > 0){
                $no = 0;
                while($row = mysqli_fetch_array($query)){

                echo '
                    <table class="bordered" id="tbl" style="margin-top:-6rem;stroke:rgba(0,0,0,0)">
                        <tbody>
                       
					   <tr>
                             <td id="right" width="18%"><strong>Perihal</strong></td>
							    <td id="right" style="border-right: none;" width="57%">: '.$row['keterangan'].'</td> 
							 </tr>
							<tr> 
								<td id="right" width="18%"><strong>Nomor Surat</strong></td>
							    <td id="right" style="border-right: none;" width="57%">: '.$row['kode'].'</td> 
							</tr>
                            <tr>';

                                $y = substr($row['tgl_surat'],0,4);
                                $m = substr($row['tgl_surat'],5,2);
                                $d = substr($row['tgl_surat'],8,2);

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
                                echo '

                                <td id="right"><strong>Tanggal Surat</strong></td>
                                <td id="right" colspan="2">: '.$d." ".$nm." ".$y.'</td>
                            </tr>
                          
                            <tr>
                                <td id="right"><strong>Asal Surat</strong></td>
                                <td id="right" colspan="2">: '.$row['asal_surat'].'</td>
                            </tr>';
							 $query3 = mysqli_query($config, "SELECT * FROM tbl_disposisi JOIN tbl_surat_masuk ON tbl_disposisi.id_surat = tbl_surat_masuk.id_surat WHERE tbl_disposisi.id_surat='$id_surat'");

                           
							 echo'
							 <tr>
                                <td id="right"><strong>Ditujukan</strong></td>
                                <td id="right" colspan="2">: '.$row['nama'].'</td>
                            </tr>
                            <tr>
                                <td id="right"><strong>Nomor Agenda</strong></td>
                                <td id="right" colspan="2">: '.$row['id_surat'].'</td>
                            </tr>
                          
                          
                            <tr>';
                            $query3 = mysqli_query($config, "SELECT * FROM tbl_disposisi JOIN tbl_surat_masuk ON tbl_disposisi.id_surat = tbl_surat_masuk.id_surat WHERE tbl_disposisi.id_surat='$id_surat'");

                            if(mysqli_num_rows($query3) > 0){
                                $no = 0;
                                $row = mysqli_fetch_array($query3);{
                                echo '
                            <tr class="isi">
                                <td colspan="2">
                                    <strong>Perihal Disposisi :</strong><br/>'.$row['isi_disposisi'].'
                                    <div style="height: 50px;"></div>
                                    <strong>Batas Waktu</strong> : '.$d." ".$nm." ".$y.'<br/>
                                  
                                    <strong>Isi Disposisi</strong> :<br/> '.$row['catatan'].'
                                    <div style="height: 25px;"></div>
                                </td>
                                <td><strong>Diteruskan Kepada</strong> : <br/>'.$row['tujuan'].'</td>
                            </tr>';
                                }
                            } else {
                                echo '
                                <tr class="isi">
                                    <td colspan="2"><strong>Perihal Disposisi :</strong>
                                    </td>
                                    <td><strong>Diteruskan Kepada</strong> : </td>
                                </tr>';
                            }
                        } echo '
                </tbody>
            </table>
            <div id="lead">
                <p></p>
                <div style="height: 150px;"></div>';
				$id_surat=mysqli_real_escape_string($config,$_REQUEST['id_surat']);
                $query = mysqli_query($config, "SELECT nama,nip FROM tabel_surat WHERE id_surat='$id_surat'");
                list($nama,$nip) = mysqli_fetch_array($query);
                if(!empty($nama)){
                    echo '<p class="lead">'.$nama.'</p>';
                } else {
                    echo '<p class="lead">PT Jasamarga Properti</p>';
                }
               
                    echo '<p>NIP : '.$nip.'</p>';
               
                echo '
            </div>
        </div>
        <div class="jarak2"></div>
    </div>
    <!-- Container END -->

    </body>';
    }
}
?>

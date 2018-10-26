						<?php
						 if(isset($_REQUEST['uploadx'])){

            
                                                   
                                                    
													$total = count($_FILES['file']['name']);
													for( $i=0 ; $i < $total ; $i++ ) {
													$file = $_FILES['file']['name'][$i];
                                                    $x = explode('.', $file);
                                                    $eks = strtolower(end($x));
                                                    $ukuran = $_FILES['file']['size'][$i];
                                                    $target_dir = "upload/file_sharing/";
												

                                                    //jika form file tidak kosong akan mengeksekusi script dibawah ini
                                                    if($file != ""){

                                                        $rand = rand(1,100);
                                                        $nfile = $rand."-".$file;

                                                        //validasi file
                                                     
                                                            if($ukuran < 3000000000){
																
															
                                                                move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_dir.$nfile);
																// edit the virustotal.com api key, get one from the site
												$virustotal_api_key = "3e41bae47dad3ed2d3f6064987a6de3f1f9e9285604a8fbc7772277c1f59ee74";

												// enter here the path of the file to be scanned
												$file_to_scan = "upload/file_sharing/".$nfile."";

												// get the file size in mb, we will use it to know at what url to send for scanning (it's a different URL for over 30MB)
												$file_size_mb = filesize($file_to_scan)/1024/1024;

												// calculate a hash of this file, we will use it as an unique ID when quering about this file
												$file_hash = hash('sha256', file_get_contents($file_to_scan));


												// [PART 1] hecking if a report for this file already exists (check by providing the file hash (md5/sha1/sha256) 
												// or by providing a scan_id that you receive when posting a new file for scanning
												// !!! NOTE that scan_id is the only one that indicates file is queued/pending, the others will only report once scan is completed !!!
												$report_url = 'https://www.virustotal.com/vtapi/v2/file/report?apikey='.$virustotal_api_key."&resource=".$file_hash;

												$api_reply = file_get_contents($report_url);

												// convert the json reply to an array of variables
												$api_reply_array = json_decode($api_reply, true);



												// your resource is queued for analysis
												if($api_reply_array['response_code']==-2){
													echo $api_reply_array['verbose_msg'];
												}

												// reply is OK (it contains an antivirus report)
												// use the variables from $api_reply_array to process the antivirus data
												if($api_reply_array['response_code']==1){
													echo '<script> 
														alert(\'Error! Telah Ditemukan '.$api_reply_array['positives'].' Virus!\');
														 window.location.href=\'admin.php?page=files\';
														</script>';
														unlink("upload/file_sharing/".$nfile."");
													if($api_reply_array['positives']>0){
														unlink("upload/file_sharing/".$nfile."");
													}
													exit;
												}



												// [PART 2] a report for this file was not found, upload file for scanning
												if($api_reply_array['response_code']=='0'){

													// default url where to post files
													$post_url = 'https://www.virustotal.com/vtapi/v2/file/scan';

													// get a special URL for uploading files larger than 32MB (up to 200MB)
													if($file_size_mb >= 32){
														$api_reply = @file_get_contents('https://www.virustotal.com/vtapi/v2/file/scan/upload_url?apikey='.$virustotal_api_key);
														$api_reply_array = json_decode($api_reply, true);
														if(isset($api_reply_array['upload_url']) and $api_reply_array['upload_url']!=''){
															$post_url = $api_reply_array['upload_url'];
														}
													}
													
													// send a file for checking

													// curl will accept an array here too:
													$post['apikey'] = $virustotal_api_key;
													$post['file'] = '@'.$file_to_scan;
													
													$ch = curl_init();
													curl_setopt($ch, CURLOPT_URL,$post_url);
													curl_setopt($ch, CURLOPT_POST,1);
													curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
													curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
													$api_reply = curl_exec ($ch);
													curl_close ($ch);
													
													$api_reply_array = json_decode($api_reply, true);
													
													if($api_reply_array['response_code']==1){
														echo '<script> 
														alert(\'File aman dari virus, file Berhasil diupload\');
														 window.location.href=\'admin.php?page=files\';
														</script>';
														
													}

												}
															
																$divisi=mysqli_real_escape_string($config,$_SESSION['divisi']);
                                                                $query = mysqli_query($config, "INSERT INTO tbl_file_sharing(id_user,file,divisi)
															VALUES('$id_user','$nfile','$divisi')");
																
                                                                if($query == true){
                                                                     echo '';
                                                                } else {
                                                                    echo '<script> 
															 alert(\'Error !\');
															 window.location.href=\'admin.php?page=files\';
															 </script>';
                                                                }
                                                            } else {
                                                                echo '<script> 
															 alert(\'Ukuran File Terlalu Besar !\');
															 window.location.href=\'admin.php?page=files\';
															 </script>';
                                                            }
                                                       
                                                    } else {

                                                             echo '<script> 
															 alert(\'File Tidak Boleh Kosong !\');
															 window.location.href=\'admin.php?page=files\';
															 </script>';
															
                                                            die();
                                                        
													}
                                            
                                        
            
						 }}?>
						
						<form method="POST" enctype="multipart/form-data">
						<div class="input-field col m4">
                            <div class="file-field input-field tooltipped" data-position="top" data-tooltip="Upload">
                                <div class="btn light-green darken-1">
                                    <span>File</span>
                                    <input type="file" id="file" name="file[]" multiple>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Upload File" disabled>
                                        <?php
                                            if(isset($_SESSION['errSize'])){
                                                $errSize = $_SESSION['errSize'];
                                                echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$errSize.'</div>';
                                                unset($_SESSION['errSize']);
                                            }
                                            if(isset($_SESSION['errFormat'])){
                                                $errFormat = $_SESSION['errFormat'];
                                                echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$errFormat.'</div>';
                                                unset($_SESSION['errFormat']);
                                            }
                                        ?>
										
                                    <small class="red-text">*Semua jenis File diperbolehkan. Ukuran maksimal file <strong>3000 MB / 3 GB</strong></small>
                                </div>
								
								
                            </div>
							<div class="input-field col s12" style="text-align:center">
							
							<button type="submit" name="uploadx" class="btn light-blue darken-1"><i class="material-icons">cloud_upload</i> UPLOAD</button>
							</form>
							</div>
                        </div>
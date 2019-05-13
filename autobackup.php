<?php
 function backup($host,$user,$pass,$name,$nama_file,$tables){

                    //untuk koneksi database
                    $return = "";
                    $link = mysqli_connect($host,$user,$pass,$name);

                    //backup semua tabel database
                    if($tables == '*'){
                        $tables = array();
                        $result = mysqli_query($link, 'SHOW TABLES');
                        while($row = mysqli_fetch_row($result)){
                            $tables[] = $row[0];
                        }
                    } else {

                        //backup tabel tertentu
                        $tables = is_array($tables) ? $tables : explode(',',$tables);
                    }

                    //looping table
                    foreach($tables as $table){
                        $result = mysqli_query($link, 'SELECT * FROM '.$table);
                        $num_fields = mysqli_num_fields($result);

                        $return.= 'DROP TABLE '.$table.';';
                        $row2 = mysqli_fetch_row(mysqli_query($link, 'SHOW CREATE TABLE '.$table));
                        $return.= "\n\n".$row2[1].";\n\n";

                        //looping field table
                        for($i = 0; $i < $num_fields; $i++){
                            while($row = mysqli_fetch_row($result)){
                                $return.= 'INSERT INTO '.$table.' VALUES(';

                                for($j=0; $j<$num_fields; $j++){
                                    $row[$j] = addslashes($row[$j]);
                                    $row[$j] = ereg_replace("\n","\\n",$row[$j]);

                                    if(isset($row[$j])){
                                        $return.= '"'.$row[$j].'"' ;
                                    } else {
                                        $return.= '""';
                                    }
                                    if ($j<($num_fields-1)){
                                        $return.= ',';
                                    }
                                }
                                $return.= ");\n";
                            }
                        }
                        $return.="\n\n\n";
                    }

                    //otomatis menyimpan hasil backup database dalam root folder aplikasi
                    $nama_file;
                    $handle = fopen('./database/'.$nama_file,'w+');
                    fwrite($handle,$return);
                    fclose($handle);
                }
			  $database = 'Backup';
                $file = $database.'_'.date("d_M_Y").'_'.time().'.sql';
              backup("localhost","root","euiver7v","dbjmproperti",$file,"*");     
						
						
// Include and instantiate PHPMailer()
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require ('PHPMailer/src/Exception.php');
require ('PHPMailer/src/PHPMailer.php');
require ('PHPMailer/src/SMTP.php');
$toAddress = "jasamargapropertibackup@gmail.com"; //To whom you are sending the mail.
date_default_timezone_set("Asia/Bangkok");
$message   = '
    <html>
       <body>
          <h>Backup Database E-mployee JMP <br>Tanggal : '.date("d-M-Y").' <br>Jam : '.date('H:i').'</h>
          
       </body>
    </html>
';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth    = true;
$mail->Host        = "smtp.gmail.com";
$mail->Port        = 587;
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->IsHTML(true);
$mail->Username = "jasamargapropertibackup@gmail.com"; // your gmail address
$mail->Password = "euiver7v"; // password
$mail->SetFrom("jasamargapropertibackup@gmail.com");
$mail->Subject = "AUTO BACKUP DATABASE"; // Mail subject
$mail->Body    = $message;
$mail->AddAddress($toAddress);


$mail->AddAttachment('./database/'.$file.'');
$mail->Send();
?>
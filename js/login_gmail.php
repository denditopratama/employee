 <?php
session_start();
 require('../include/config.php');
 require_once '../gapi/src/Google/autoload.php'; // or wherever autoload.php is located
 $id_token=mysqli_real_escape_String($config,$_POST['id_token']);
 $clienid='49446115720-gacrc8lhqmdj9rpn3efdpdsa3kh74usu.apps.googleusercontent.com';
 $client = new Google_Client(['client_id' => $clienid]);  // Specify the CLIENT_ID of the app that accesses the backend
 $client->setAuthConfigFile('../client_secret_49446115720-gacrc8lhqmdj9rpn3efdpdsa3kh74usu.apps.googleusercontent.com.json');
 $token_data = $client->verifyIdToken($id_token)->getAttributes();
 if(!empty($_POST['daftar'])){
    $daftar=mysqli_real_escape_String($config,$_POST['daftar']);
    if($daftar==1){
       if ($token_data) {
           $user_id = $token_data['payload']['sub'];
           $daf=mysqli_query($config,"UPDATE tbl_user SET gmail='$user_id' WHERE id_user='".$_SESSION['id_user']."'");
           $_SESSION['tokengmail'] = $id_token;
           echo 'admin.php?page=usr&act=edit&id_user='.$_SESSION['id_user'].'';
       } else {
           echo 'TOKEN SALAH';
       }
    
 }} else {
    if ($token_data) {
        $user_id = $token_data['payload']['sub'];
        $query = mysqli_query($config, "SELECT id_user, username, nama, nip, admin,role,unit,sub_unit,divisi,status_aktif FROM tabel_role WHERE gmail='$user_id'");
       
          if(mysqli_num_rows($query) > 0){
           list($id_user, $username, $nama, $nip, $admin,$role,$unit,$sub_unit,$divisi,$status_aktif) = mysqli_fetch_array($query);
           if($status_aktif==0){
           $_SESSION['errLog'] = '<center>User tidak Aktif!, silahkan hubungi admin</center>';
           echo 'index.php';
            die();
                   }
         
           $_SESSION['id_user'] = $id_user;
           $_SESSION['username'] = $username;
           $_SESSION['nama'] = $nama;
           $_SESSION['nip'] = $nip;
           $_SESSION['admin'] = $admin;
           $_SESSION['role'] = $role;
           $_SESSION['unit'] = $unit;
           $_SESSION['divisi'] = $divisi;
           $_SESSION['sub_unit'] = $sub_unit;
           $_SESSION['tokengmail'] = $id_token;
           session_regenerate_id();
           echo 'admin.php';
           die();
                                       } else {
                                           $_SESSION['errLog'] = '<center>Akun Google anda tidak terdaftar di Sistem !</center>';
                                          echo 'index.php';
                                           
                                       }
    } else {
        echo 'TOKEN SALAH';
    }

 }
 
 


 

                                ?>
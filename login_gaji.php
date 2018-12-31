
<?php if(empty($_SESSION['admin']) || $_SESSION['admin']!=1 || $_SESSION['admin']==1 && $_SESSION['divisi']!=2){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {
        if(isset($_SESSION['gaji'])){
            header("Location: ./admin.php?page=gjh");
        }?>
<style>
#logo {
            display: block;
            margin: 0px auto -5px;
      
     border-radius: 0%; 
	 margin-top:100px;
    width: 200px;
height: 50px;}
        
    </style>


        <!-- Row START -->
        <div class="row">
            <!-- Col START -->
            <div class="col s12 m6 offset-m3 offset-m3" style="padding-top:100px">

                <!-- Box START -->
                <div class="card-panel z-depth-2" id="login" style="margin-top:-40px">
				
                    <!-- Row Form START -->
                    <div class="row">

                    <?php
                        $query = mysqli_query($config, "SELECT * FROM tbl_instansi");
                        while($data = mysqli_fetch_array($query)){
                    ?>
                    <!-- Logo and title START -->
                    <div class="col s12">
                        <div class="card-content">
                           
                            <?php
                                if(!empty($data['logo'])){
                                    echo '<img id="logo" src="./upload/screenshots.png" style="margin-top:30px;"/>';
                                } else {
                                    echo '<img id="logo" src="./asset/img/logo.png"/>';
                                }
                            ?>
                            <h4 class="center" id="smk">
                           
                            </h4>
                            <div class="batas"></div><br>
							<div style="Text-align:center!Important"><h6 style="text-align:center"><strong>LOGIN ADMIN GAJI</strong></h6></div>
                        </div>
                    </div>
                    <!-- Logo and title END -->
                    <?php
                        }
                    ?>

                    <?php
                        if(isset($_POST['submitf'])){

                            //validasi form kosong
                            if($_POST['usernamef'] == "" || $_POST['passwordf'] == ""){
                                echo '<div class="upss red-text"><i class="material-icons">error_outline</i> <strong>ERROR!</strong> Username dan Password wajib diisi.
                                <a class="btn-large waves-effect waves-light blue-grey col s11" href="./" style="margin: 20px 0 0 5px;"><i class="material-icons md-24">arrow_back</i> Kembali ke login form</a></div>';
                            } else {

                                $usernamef = trim(htmlspecialchars(mysqli_real_escape_string($config, $_REQUEST['usernamef'])));
                                $passwordf = trim(htmlspecialchars(mysqli_real_escape_string($config, $_REQUEST['passwordf'])));

                                $querybz = mysqli_query($config, "SELECT * FROM tbl_user_gaji WHERE username=BINARY'$usernamef' AND password=MD5('$passwordf')");

                                if(mysqli_num_rows($querybz) > 0){
										$_SESSION['gaji']=1;
										header("Location: ./admin.php?page=gjh");
										
                                    
                                } else {

								
                                    //session error
                                    $_SESSION['errLogf'] = '<center>Username & Password tidak ditemukan!</center>';
                                    header("Location: ./admin.php?page=loggjh");
                                    die();
                                }
                            }
                        } else {
                    ?>

                    <!-- Form START -->
                    <form class="col s12 m12 offset-4 offset-4" method="POST">
                        <div class="row">
                            <?php
                                if(isset($_SESSION['errLogf'])){
                                    $errLog = $_SESSION['errLogf'];
                                    echo '<div id="alert-message" class="error red lighten-5"><div class="center"><i class="material-icons">error_outline</i> <strong>LOGIN GAGAL!</strong></div>
                                    '.$errLog.'</div>';
                                    unset($_SESSION['errLogf']);
                                }
                                if(isset($_SESSION['errf'])){
                                    $err = $_SESSION['errf'];
                                    echo '<div id="alert-message" class="error red lighten-5"><div class="center"><i class="material-icons">error_outline</i> <strong>ERROR!</strong></div>
                                    '.$err.'</div>';
                                    unset($_SESSION['err']);
                                }
                            ?>
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix md-prefix">account_circle</i>
                            <input id="username" type="text" class="validate" name="usernamef" required autocomplete="off" oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                            <label for="usernamef">Username</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix md-prefix">lock</i>
                            <input id="password" type="password" class="validate" name="passwordf" required autocomplete="off" oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                            <label for="passwordf">Password</label>
                        </div>
						
                        <div class="input-field col s12">
                            <button type="submit" class="btn-large waves-effect waves-light blue-grey col s12" name="submitf">LOGIN</button>
                        </div>
                    </form>
                    <!-- Form END -->
                    <?php
                        }
                    ?>
                    </div>
                    <!-- Row Form START -->

                </div>
                <!-- Box END-->

            </div>
            <!-- Col END -->

        </div>
		
        <!-- Row END -->
	<?php } ?>
   
<head>

<title>E-mployee JMP</title>

<!-- Meta START -->
<!-- E-mployee JMP By Dendito Pratama || denditoprtm@gmail.com -->
<meta charset="utf-8" />
<meta name="author" content="Dendito Pratama">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
<meta name="google-signin-scope" content="profile email">
<meta name="google-signin-client_id" content="49446115720-gacrc8lhqmdj9rpn3efdpdsa3kh74usu.apps.googleusercontent.com">


<link rel="icon" href="./upload/logo.png" type="image/x-icon">

<!-- Meta END -->

<!--[if lt IE 9]>
<script src="./asset/js/html5shiv.min.js"></script>
<![endif]-->

<!-- Global style START -->
<link type="text/css" rel="stylesheet" href="./asset/css/materialize.min.css"  media="screen,projection"/>
<link type="text/css" rel="stylesheet" href="./asset/css/jquery-ui.css"  media="screen,projection"/>
</head>


   <?php 
   session_start();
   if(empty($_SESSION['admin'])){
    $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
    header("Location: ./");
    die();
   } else {
   ?>
  
    <script type="text/javascript" src="js/instascan.min.js"></script>
    <div style="margin:auto;text-align:center;border:2px dotted black">
<div style="margin:15px">
    <img src="upload/screenshot.png">
    <h4>Scan Barcode Inventaris</h4>
	<video playsinline controls="true" id="preview"></video>
  </div>
  </div>

    <script type="text/javascript">
      let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
      scanner.addListener('scan', function (content) {
          
        window.location.href=content;
      });
      Instascan.Camera.getCameras().then(function (cameras) {
          
        if(cameras[1]){ scanner.start(cameras[1]); 
        } else { scanner.start(cameras[0]); 
        }
      }).catch(function (e) {
        console.error(e);
      });
    </script>

    <?php } ?>
    
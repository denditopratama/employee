	
   <?php 
   session_start();
   if(empty($_SESSION['admin'])){
    $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
    header("Location: ./");
    die();
   } else {
   ?>
  
    <script type="text/javascript" src="js/instascan.min.js"></script>
	<video playsinline controls="true" id="preview"></video>

    <script type="text/javascript">
      let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
      scanner.addListener('scan', function (content) {
          
        window.location.href=content;
      });
      Instascan.Camera.getCameras().then(function (cameras) {
        if(cameras[1]){ scanner.start(cameras[1]); } else { scanner.start(cameras[0]); }
     
      }).catch(function (e) {
        console.error(e);
      });
    </script>

    <?php } ?>
    
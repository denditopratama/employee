

<?php $time=mysqli_query($config,"SELECT waktugame FROM tbl_user WHERE id_user='".$_SESSION['id_user']."'");
list($waktusisa)=mysqli_fetch_array($time); 

if($waktusisa <=0){
	echo '<script>
	alert(\'Waktu anda sudah habis, silahkan kembali bekerja\');
	window.location=\'./\'
</script>';
	
}?>
   
      
      
      
      <link href="css/reset.css" rel="stylesheet">
      <link href="css/main.css" rel="stylesheet">
   <script>
 
  
  
   
  
   
   </script>

   <div class="card" style="height:480px!important;">
      <div id="gamecontainer">
         <div id="gamescreen">
            <div id="sky" class="animated">
               <div id="flyarea">
                  <div id="ceiling" class="animated"></div>
                  <!-- This is the flying and pipe area container -->
                  <div id="player" class="bird animated"></div>
                  
                  <div id="bigscore"></div>
                  
                  <div id="splash"></div>
                  
                  <div id="scoreboard"style="margin-top:-50px!important;">
                     <div id="medal"></div>
                     <div id="currentscore"></div>
                     <div id="highscore"></div>
                     <div id="replay"><img src="assets/replay.png" alt="replay"></div>
                  </div>
                  
                  <!-- Pipes go here! -->
               </div>
            </div>
            <div id="land" class="animated"><div id="debug"></div></div>
         </div>
      </div>
      <div id="footer" style="background-color:transparent!important;">
         
         <a style="font-family:monospace!important;">2018 © Information and Technology PT Jasamarga Properti</a>
      </div>
      <div class="boundingbox" id="playerbox"></div>
      <div class="boundingbox" id="pipebox"></div>
      
      
   </div>
    
   <script>
   

var timeRemaining = <?php echo $waktusisa; ?>;
var timer = setInterval('countdown()',1000);

function countdown() {
 timeRemaining -= 1;
 $.post('./js/update_waktu.php', { waktu: timeRemaining }, function(data){ });
 if (timeRemaining  == 0 ) {
  clearInterval(timer);
  alert("Waktu anda sudah habis, silahkan kembali Bekerja");
  window.location= './'
 
 }
}
   </script>
   
<?php
    //cek session
    if(!empty($_SESSION['admin'])){
?>

<noscript>
    <meta http-equiv="refresh" content="0;URL='./enable-javascript.html'" />
</noscript>

<!-- Footer START -->
<?php 
if(isset($_REQUEST['page'])){
$pages=$_REQUEST['page'];
		if($pages!='game'){ ?>
<footer class="page-footer">
    <div class="container">
           <div class="row">
               <br/>
           </div>
    </div>
	
    <div class="footer-copyright blue-grey darken-1 white-text" style="background-color:#39424c!important">
        <div class="container" style="background-color:#39424c!important" id="footer">
            <?php
                $query = mysqli_query($config, "SELECT * FROM tbl_instansi");
                while($data = mysqli_fetch_array($query)){
            ?>
            <span class="white-text">&copy; <?php echo date("Y"); ?>
                <?php
                    if(!empty($data['nama'])){
                        echo 'Information & Technology PT Jasamarga Properti';
                    } else {
                        echo '';
                    }
                ?>
            </a>
            </span>
            <div class="right">
                <?php
                    if(!empty($data['website'])){
                        echo '<i class="material-icons md-12">public</i> https://jasamargaproperti.co.id &nbsp;&nbsp;';
                    } else {
                        echo '<i class="material-icons md-12">public</i>  &nbsp;&nbsp;';
                    }
                    if(!empty($data['email'])){
                        echo '<i class="material-icons">mail_outline</i> '.$data['email'].'';
                    } else {
                        echo '<i class="material-icons">mail_outline</i>  ';
                    }
                }
                ?>
            </div>
        </div>
    </div>
		</footer> <?php }} else { ?>
		<footer class="page-footer">
    <div class="container">
           <div class="row">
               <br/>
           </div>
    </div>
	
    <div class="footer-copyright blue-grey darken-1 white-text" style="background-color:#39424c!important">
        <div class="container" style="background-color:#39424c!important" id="footer">
            <?php
                $query = mysqli_query($config, "SELECT * FROM tbl_instansi");
                while($data = mysqli_fetch_array($query)){
            ?>
            <span class="white-text">&copy; <?php echo date("Y"); ?>
                <?php
                    if(!empty($data['nama'])){
                        echo 'Information & Technology PT Jasamarga Properti';
                    } else {
                        echo '';
                    }
                ?>
            </a>
            </span>
            <div class="right">
                <?php
                    if(!empty($data['website'])){
                        echo '<i class="material-icons md-12">public</i> https://jasamargaproperti.co.id &nbsp;&nbsp;';
                    } else {
                        echo '<i class="material-icons md-12">public</i>  &nbsp;&nbsp;';
                    }
                    if(!empty($data['email'])){
                        echo '<i class="material-icons">mail_outline</i> '.$data['email'].'';
                    } else {
                        echo '<i class="material-icons">mail_outline</i>  ';
                    }
                }
                ?>
            </div>
        </div>
    </div>
		</footer> <?php } ?>
<!-- Footer END -->

<!-- Javascript START -->
<?php 
if(isset($_REQUEST['page'])){
$pages=$_REQUEST['page'];
		if($pages!='game'){echo'
		<script type="text/javascript" src="asset/js/jquery-2.1.1.min.js"></script>';}
		else {echo' <script src="js/jquery.min.js"></script>
      <script src="js/jquery.transit.min.js"></script>
      <script src="js/buzz.min.js"></script>
<script src="js/main.js"></script>';}} else {
	echo'
		<script type="text/javascript" src="asset/js/jquery-2.1.1.min.js"></script>';
}

?>
<script type="text/javascript" src="asset/js/materialize.min.js"></script>
<script type="text/javascript" src="asset/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
<script type="text/javascript" src="asset/js/jquery.simplePagination.js"></script>
<script data-pace-options='{ "ajax": false }' src='asset/js/pace.min.js'></script>

<script type="text/javascript">

function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
$('table').on('click', '.RemoveRow', function(){
  $(this).closest('tr').remove();
});

//jquery dropdown
$(".dropdown-button").dropdown({ hover: false });

//jquery sidenav on mobile
$('.button-collapse').sideNav({
    menuWidth: 260,
    edge: 'left',
    closeOnClick: true
});

//jquery datepicker
$('#tgl_surat,#batas_waktu,#dari_tanggal,#sampai_tanggal,#tgl_awal,#tgl_akhir').pickadate({
    selectMonths: true,
    selectYears: 150,
    format: "yyyy-mm-dd"
});

//jquery teaxtarea
$('#isi_ringkas').val('');
$('#isi_ringkas').trigger('autoresize');

//jquery dropdown select dan tooltip
$(document).ready(function(){
    $('select').material_select();
    $('.tooltipped').tooltip({delay: 10});
});

//jquery autocomplete
$(function() {
    $( "#kode" ).autocomplete({
        source: 'kode.php'
    });
});

//jquery untuk menampilkan pemberitahuan
$("#alert-message").alert().delay(5000).fadeOut('slow');

//jquery modal
$(document).ready(function(){
   $('.modal-trigger').leanModal();
 });

 $('#hah').dropdown({
		
		hover: true, // Activate on hover
	
		}
	);
	
	
	
</script>
<!-- Javascript END -->

<?php
    } else {
        header("Location: ../");
        die();
    }
?>

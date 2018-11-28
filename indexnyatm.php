<?php
    ob_start();
    //cek session
	
    session_start();
	

    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {
		
							
?>

<!doctype html>
<html lang="en">

<!-- Include Head START -->
<!-- E-mployee JMP By Dendito Pratama || denditoprtm@gmail.com -->
<?php include('include/head.php'); ?>
<!-- Include Head END -->

<!-- Body START -->
<body id="vv" class="bg">

<!-- Header START -->
<header>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"/>

<!-- Include Navigation START -->
<?php include('include/menutm.php'); ?>
<!-- Include Navigation END -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</header>
<!-- Header END -->

<!-- Main START -->
<main>


    <!-- container START -->
    <div class="container">

    <?php
        if(isset($_REQUEST['page'])){
            $page = $_REQUEST['page'];
            switch ($page) {
                case 'tsm':
                    include "transaksi_surat_masuk.php";
                    break;
               
					
            }
        } else {
    ?>
       
           
			
				
							
				
	
	
        <!-- Row END -->
   
    

        
		<style>
		#chart_wrap {
    position: relative;
    padding-bottom: 83%;
    height: 0;
    overflow:hidden;
}
		#piechart{
	position: absolute;
    top: 0;
    left: 0;
    width:100%;
    height:350px;
	display:inline;
	margin:0 auto;
		}
		
		#chart_wraps {
    position: relative;
    padding-bottom: 83%;
    height: 0;
    overflow:hidden;
}
		#piechartsd{
	position: absolute;
    top: 0;
    left: 0;
    width:100%;
    height:350px;
	display:inline;
	margin:0 auto;
		}
		
		</style>
	
	<div class="row">
	<div class="col s12 m4">
	<div class="card yellow">
     <div class="card-content">
	 
	<?php  
			$rekapkel=0;
			$rekapkels=0;
			$nbmb=mysqli_query($config,"SELECT * FROM tbl_user WHERE admin<>1 AND(status_aktif=1 AND id_user<>9999 AND admin<>9)");
			while($dab=mysqli_fetch_array($nbmb)){
				$rekapjenkel=mysqli_query($config,"SELECT jenis_kelamin FROM tbl_identitas WHERE jenis_kelamin='L' AND id_user='".$dab['id_user']."'");
				list($rekapkelb)=mysqli_fetch_array($rekapjenkel);
				$rekapbz=count($rekapkelb);
				$rekapkel+=$rekapbz;
			}
			
			$nbmbf=mysqli_query($config,"SELECT * FROM tbl_user WHERE admin<>1 AND(status_aktif=1 AND id_user<>9999 AND admin<>9)");
			while($dabs=mysqli_fetch_array($nbmbf)){
				$rekapjenkels=mysqli_query($config,"SELECT jenis_kelamin FROM tbl_identitas WHERE jenis_kelamin='P' AND id_user='".$dabs['id_user']."'");
				list($rekapkelsd)=mysqli_fetch_array($rekapjenkels);
				$rekapbzd=count($rekapkelsd);
				$rekapkels+=$rekapbzd;
			}

		
			
			?> 		
			<div style="text-align:center"><i class="material-icons prefix md-prefix">wc</i><p style="text-align:center;display:inline"><strong> Jumlah Kelamin</strong></p></div>
			<div id="chart_wrap" style="height:270px!important">
			<div id="piechart" style="text-align:center"></div>
			</div>
	</div>
	</div>
	
	<div class="card" style="background-color:#0099bf!important;">
     <div class="card-content">
	 
	<?php  
	
			
			$rekapjenkel1=mysqli_query($config,"SELECT COUNT(status_karyawan) FROM tbl_user WHERE status_karyawan='1' AND(admin<>1 AND admin<>9 AND id_user<>9999 AND status_aktif=1)");
			list($komisarisv)=mysqli_fetch_array($rekapjenkel1);
			$rekapjenkel2=mysqli_query($config,"SELECT COUNT(status_karyawan) FROM tbl_user WHERE status_karyawan='2' AND(admin<>1 AND admin<>9 AND id_user<>9999 AND status_aktif=1)");
			list($direksiv)=mysqli_fetch_array($rekapjenkel2);
			$rekapjenkel3=mysqli_query($config,"SELECT COUNT(status_karyawan) FROM tbl_user WHERE status_karyawan='3' AND(admin<>1 AND admin<>9 AND id_user<>9999 AND status_aktif=1)");
			list($karyawanbantuv)=mysqli_fetch_array($rekapjenkel3);
			$rekapjenkel4=mysqli_query($config,"SELECT COUNT(status_karyawan) FROM tbl_user WHERE status_karyawan='4' AND(admin<>1 AND admin<>9 AND id_user<>9999 AND status_aktif=1)");
			list($karyawantetapv)=mysqli_fetch_array($rekapjenkel4);
			$rekapjenkel5=mysqli_query($config,"SELECT COUNT(status_karyawan) FROM tbl_user WHERE status_karyawan='5' AND(admin<>1 AND admin<>9 AND id_user<>9999 AND status_aktif=1)");
			list($pkwtv)=mysqli_fetch_array($rekapjenkel5);
			
			?> 		
			<div style="text-align:center"><i class="material-icons prefix md-prefix">people</i><p style="text-align:center;display:inline"><strong> Status Karyawan</strong></p></div>
			<div id="chart_wraps" style="height:270px!important">
			<div id="piechartsd" style="text-align:center"></div>
			</div>
	</div>
	</div>
	
	</div>
	
	    
	

		
		 <?php
        }
    ?>		
		
	
	
	
	
	
	</div>
	

                <div id="modald">
				<div id="modaltm" class="modal">
                <div class="modal-content white" style="height:100%">
                <div class="col s12" style="text-align:center!important">
				<img src="./asset/img/tenancy.png" style="width:90%"/>
                </div>
                <br>
                <br>
				<h5 style="text-align:center;">Selamat Datang Di <strong>Tenancy Management</strong> PT Jasamarga Properti</h5>
                <br>
                <div class="col s12" style="text-align:center">
                <a id="tutup" style="text-align:center" class="btn green"><i class="material-icons">arrow_forward</i> Lanjutkan</a>
                </div>
                <br>
                </div>
                </div>
                </div>


	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Gender', 'Number'],
	<?php 
		echo"['Laki - Laki',".$rekapkel."],";
		echo"['Perempuan',".$rekapkels."],";
	
  ?>
 
 
]);

  // Optional; add a title and set the width and height of the chart
  var options = {is3D: true,legend: {position:'top',alignment:'center'}, width:'100%', height:'200px',backgroundColor: 'transparent',colors:['#FFCC00','#1e558d']};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>




<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Gender', 'Number'],
	<?php 
		echo"['Komisaris',".$komisarisv."],";
		echo"['Direksi',".$direksiv."],";
		echo"['Karyawan Perbantuan',".$karyawanbantuv."],";
		echo"['Karyawan Tetap',".$karyawantetapv."],";
		echo"['PKWT',".$pkwtv."],";
	
  ?>
 
 
]);

  // Optional; add a title and set the width and height of the chart
  var options = {is3D: true,legend: {position:'top',alignment:'center'}, width:'100%', height:'200px',backgroundColor: 'transparent',colors:['#FFCC00','#1e558d','#f2f40b','#fd9735','#737373']};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechartsd'));
  chart.draw(data, options);
}


  
    if(sessionStorage.getItem("keyd")!=='true'){
	$(document).ready(function(){
	$("#modaltm").openModal()
                        });
    
    $('#tutup').click(function(){
        $('#modaltm').closeModal();
    });
sessionStorage.setItem('keyd', 'true');}     

</script>
	
	
	
    <!-- container END -->

</main>
<!-- Main END -->

<!-- Include Footer START -->
<?php include('include/footer.php'); ?>
<!-- Include Footer END -->

	
</body>
<!-- Body END -->

</html>

<?php
    }
?>

<?php
    ob_start();
    //cek session
	
    session_start();
	require('./include/config.php');

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

  <link href="./vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="./vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="./vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="./vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="./vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="./vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>

     <link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet"/>
	
	<!-- asd
    <!-- Datatables -->
    <link href="./vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="./vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="./vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="./vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="./vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
	
    <!-- Custom Theme Style -->
   
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

<style>
.previous {
margin-right:50px!important;
}
body ,header {
    font-size:14px!important;
}
a.paginate_button:hover {
   color:transparent!important;
}
a.paginate_button.current {
    color:transparent!important;
}
.paginate{
    padding:110px !important;
}
.paginate_button {
    padding:0px 0px 0px!important;
}
.select-dropdown{
    display:none!important;
}
#dendibrow {
    margin-top:0px!important;
}

.modal {
    top:0%!important;
    max-height:100%!important;
}
label,input {
font-size:14px!important;
}



</style>
    <!-- container START -->
    <div class="container">
    <?php
        
                
                if(isset($_POST['tambahcustomer'])){
                    $nama_depan=mysqli_real_escape_string($configtm,$_POST['nama_depan']); 
                    $nama_belakang=mysqli_real_escape_string($configtm,$_POST['nama_belakang']);
                    $provinsi=mysqli_real_escape_string($configtm,$_POST['provinsi']);
                    $kota=mysqli_real_escape_string($configtm,$_POST['kota']);
                    $alamat=mysqli_real_escape_string($configtm,$_POST['alamat']);
                    $kode_pos=mysqli_real_escape_string($configtm,$_POST['kode_pos']);
                    $nomorhp=mysqli_real_escape_string($configtm,$_POST['nomorhp']);
                    $telepon=mysqli_real_escape_string($configtm,$_POST['telepon']);
                    $email=mysqli_real_escape_string($configtm,$_POST['email']);
                    $npwp=mysqli_real_escape_string($configtm,$_POST['npwp']);
                    $stataktif=mysqli_real_escape_string($configtm,$_POST['stataktif']);
                    $unit=mysqli_real_escape_string($configtm,$_POST['unit']);
                    $pic=mysqli_real_escape_string($configtm,$_POST['pic']);
                    
        
                    $tamboh=mysqli_query($configtm,"INSERT INTO tbl_customer(nama,alamat,hp,phone,email,pic,npwp,idt,status,kota,propinsi,kodepos,namab,unit) 
                    VALUES('$nama_depan','$alamat','$nomorhp','$telepon','$email','$pic','$npwp',0,'$stataktif','$kota','$provinsi','$kode_pos','$nama_belakang','$unit') ");
                    $ten=mysqli_query($configtm,"SELECT id FROM tbl_customer ORDER BY id DESC LIMIT 1");
                    list($nampung)=mysqli_fetch_array($ten);
                    $kode_tenant=$unit.$nampung;
                    $masukinid=mysqli_query($configtm,"UPDATE tbl_customer SET idt='$kode_tenant' WHERE id='$nampung'");
                    
                    echo '
                    <script>
                    alert(\'Data Berhasil di Input !\');
                    </script>';
                    
        
                }  
                
                ?>
   
        <!-- Row START -->
        <div class="row">
        
        <div class="col s12" style="text-align:right!important">
        <a class="btn" style="margin-top:50px" id="tambah" role="button"><i class="fa fa-plus"></i> Tambah Data</a>
        </div>
            <div class="col m12" id="colres">
              
           
<table id="datatable">

   <thead class="grey darken-2 white-text">

    <tr>

      <th width="1%" >No</th>

      <th style="text-align:center">ID</th>

      <th style="text-align:center">Nama Tenant</th>

      <th style="text-align:center">Unit</th>                        

      <th style="text-align:center">Status</th>

      <th style="text-align:center">Aksi</th>

    </tr>

  </thead>
  <tbody>

<?php

  



  $no = 1;					                   

                                                                     


  $sql = mysqli_query($configtm,"SELECT * from tbl_customer");
  $no = 1;
  while ($row = mysqli_fetch_array($sql)) {                                        		
  

      ?>		                                            			

      <tr>                            

          <td style="text-align:center"><?php echo $no; ?></td>               

          <td style="text-align:center"><?php 
          $koya=mysqli_query($configtm,"SELECT kode_unit FROM tbl_unit WHERE id='".$row['unit']."'");
          list($unitlokasi)=mysqli_fetch_array($koya);
          echo $unitlokasi.$row['id']; ?></td>        							

          <td style="text-align:center"><?php echo $row['nama'].' '.$row['namab']; ?></td>        

          <td style="text-align:center"><?php echo $unitlokasi; ?></td>        

          

          <td style="text-align:center">
           <?php 
           if($row['status']==0){
               echo '<a class="btn btn-primary red btn-md"><i class="material-icons" style="font-size:24px;line-height:11px">error</i> tidak aktif</a>';
           } else {
               echo '<a class="btn btn-primary green btn-md"><i class="material-icons" style="font-size:24px;line-height:11px">done_all</i> aktif</a>';
           }
           ?>
           </td>                            

          <td style="text-align:center"><a data-id="<?php echo $row['id'];?>" class="btn blue"><i class="material-icons" style="font-size:24px;line-height:11px">create</i> edit</a>                              

              <a onclick="return confirm('Apakah benar akan menghapus data ini ?')" href="modul/customer/proses_data.php?action=delete&id=<?php echo $row['id'];?>"  class="btn btn-primary orange btn-md"><i class="material-icons" style="font-size:24px;line-height:11px">delete_forever</i> delete</a>                                 																										

          </td>

      </tr>                                            

  <?php

  $no++;

  }

  ?>

</tbody>



 
</table>

<?php include 'customer.php';


?>

               


<!-- /footer content -->

</div>

</div>



   
   <div id="modald">
    <div id="modaledit" class="modal">
    <div class="modal-content white" style="height:100%">

 <div class="row" id="terimajax">
 </div>

</div>
</div>
</div>            




<!-- Datatables -->

<script>

$(document).ready(function() {
   
 
  
        $('.blue').click(function(){
            $('#modaledit').openModal();
            var datake = $(this).attr("data-id");

            $.post('./tm/edit_customer_ajax.php', { datake : datake }, function(data){

                $("#terimajax").html(data);
                });
                });
        
    
   
    
    $('#tambah').click(function(){
        $('#modaltm').openModal();
            });

var handleDataTableButtons = function() {

if ($("#datatable-buttons").length) {

$("#datatable-buttons").DataTable({

dom: "Bfrtip",

buttons: [

{

extend: "copy",

className: "btn-sm"

},

{

extend: "csv",

className: "btn-sm"

},

{

extend: "excel",

className: "btn-sm"

},

{

extend: "pdfHtml5",

className: "btn-sm"

},

{

extend: "print",

className: "btn-sm"

},

],

responsive: true

});

}

};



TableManageButtons = function() {

"use strict";

return {

init: function() {

handleDataTableButtons();

}

};

}();



$('#datatable').dataTable();



$('#datatable-keytable').DataTable({

keys: true

});



$('#datatable-responsive').DataTable();



$('#datatable-scroller').DataTable({

ajax: "js/datatables/json/scroller-demo.json",

deferRender: true,

scrollY: 380,

scrollCollapse: true,

scroller: true

});



$('#datatable-fixed-header').DataTable({

fixedHeader: true

});



var $datatable = $('#datatable-checkbox');



$datatable.dataTable({

'order': [[ 1, 'asc' ]],

'columnDefs': [

{ orderable: false, targets: [0] }

]

});

$datatable.on('draw.dt', function() {

$('input').iCheck({

checkboxClass: 'icheckbox_flat-green'

});

});



TableManageButtons.init();

});

</script>

<!-- /Datatables -->


            </div>
            <!-- Welcome Message END -->

				
				
            </div>
			
	
	
	
	
    <!-- container END -->

</main>
<!-- Main END -->

<!-- Include Footer START -->
<?php include('include/footer.php'); ?>
<!-- Include Footer END -->

<!-- Datatables -->

<script src="./vendors/datatables.net/js/jquery.dataTables.min.js"></script>

<script src="./vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script src="./vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>

<script src="./vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>

<script src="./vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>

<script src="./vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>

<script src="./vendors/datatables.net-buttons/js/buttons.print.min.js"></script>

<script src="./vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>

<script src="./vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>

<script src="./vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>

<script src="./vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>

<script src="./vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>

<script src="./vendors/jszip/dist/jszip.min.js"></script>

<script src="./vendors/pdfmake/build/pdfmake.min.js"></script>

<script src="./vendors/pdfmake/build/vfs_fonts.js"></script>


<!-- Custom Theme Scripts -->


	
</body>
<!-- Body END -->

</html>

<?php
    }
?>

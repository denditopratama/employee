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


</style>
    <!-- container START -->
    <div class="container">
    <?php
        if(isset($_REQUEST['page'])){
            $page = $_REQUEST['page'];
            switch ($page) {
                case 'add':
                    include "./tm/customer.php";
                    break;}
            } else { ?>
   
        <!-- Row START -->
        <div class="row">

            <div class="col m12" id="colres">
              
            <a class="btn" style="margin-top:50px" href="customer.php" role="button"><i class="fa fa-plus"></i> Add Data</a>
	



<table id="datatable">

   <thead class="blue lighten-4">

    <tr>

      <th width="1%" >No</th>

      <th style="text-align:center">ID</th>

      <th style="text-align:center">Nama Tenant</th>

      <th style="text-align:center">Alamat</th>                        

      <th style="text-align:center">Telp</th>

      <th style="text-align:center">Aksi</th>

    </tr>

  </thead>
  <tbody>

<?php

  



  $no = 1;					                   

                                                                     

  $sql1="SELECT * from customer where ctype='GS'";

  $sql = mysqli_query($configtm,$sql1);

  $no = 1;

  while ($row = mysqli_fetch_array($sql)) {                                        		

      ?>		                                            			

      <tr>                            

          <td style="text-align:center"><?php echo $no; ?></td>               

          <td style="text-align:center"><?php echo $row['idt']; ?></td>        							

          <td style="text-align:center"><?php echo $row['nama'].' '.$row['namab']; ?></td>        

          <td style="text-align:center"><?php echo $row['alamat']; ?></td>        

          

          <td><?php echo $row['phone']; ?></td>                            

          <td style="text-align:center"><a href="modul/customer/customer.php?action=update&id=<?php echo $row['id'];?>" class="btn btn-primary btn-md"><span class="glyphicon icon-edit"></span>edit</a>                              

              <a onclick="return confirm('Apakah benar akan menghapus data ini ?')" href="modul/customer/proses_data.php?action=delete&id=<?php echo $row['id'];?>"  class="btn btn-primary red btn-md"><span class="glyphicon icon-remove"></span>delete</a>                                 																										

          </td>

      </tr>                                            

  <?php

  $no++;

  }

  ?>

</tbody>



 
</table>





<!-- /footer content -->

</div>

</div>








<!-- Datatables -->

<script>

$(document).ready(function() {

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

<script src="./build/js/custom.min.js"></script>
	
</body>
<!-- Body END -->

</html>

<?php
    }}
?>


<table>
<thead>

<th>No.</th>
<th>Nama</th>
<th>Jumlah Keluarga</th>
<th>keterangan</th>
<tbody>
<?php
function kons(){
    $x='wayaw';
    echo '<td>wayaw</td>';
}
$no=1;
$store=array();
$tes=mysqli_query($config,"SELECT tbl_user.*,tbl_identitas.tanggal_lahir,tbl_keluarga.usia FROM tbl_user,tbl_identitas,tbl_keluarga WHERE tbl_user.id_user=tbl_identitas.id_user
AND(tbl_user.id_user=tbl_keluarga.id_user) GROUP BY id_user");
while($row=mysqli_fetch_array($tes)){
$kb=mysqli_query($config,"SELECT COUNT(id) FROM tbl_keluarga WHERE id_user='".$row['id_user']."' ");
list($jus)=mysqli_fetch_array($kb);
array_push($store,$jus);

echo '<tr>'; 

    echo '<td>'.$no++.'</td>';

    echo '<td>'.$row['nama'].'</td>';



    echo '<td>'.$jus.'</td>';

   kons();

    echo '</tr>';

}



?>
<tr>
<td colspan="2" style="text-align:center!important"><b>JUMLAH</b></td>
<td><?php echo array_sum($store);?></td>
</tr>

</tbody>


</thead>
</table>


<?php

  function hari_indo($tglh){
      $tanggalh = substr($tglh,8,2);
    	$bulanh = substr($tglh,5,2);
    	$tahunh = substr($tglh,0,4);
    			
      $x = mktime(0, 0, 0, $bulanh, $tanggalh, $tahunh);
      $namahari = date('l', $x);
      
      if ($namahari == "Sunday")
        return "Minggu";
      elseif ($namahari == "Monday")
        return "Senin";
      elseif ($namahari == "Tuesday")
        return "Selasa";
      elseif ($namahari == "Wednesday")
        return "Rabu";
      elseif ($namahari == "Thursday")
        return "Kamis";
      elseif ($namahari == "Friday")
        return "Jumat";
      else
        return "Sabtu";                                      
  }
?>

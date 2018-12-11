<?php

    function format_rp($angka){
	 $hasil = number_format($angka,0,",",",");
	 return $hasil;
    }

	function tgl_indo($tgl){
			$tanggal = substr($tgl,8,2);
			$bulan = getBulan(substr($tgl,5,2));
			$tahun = substr($tgl,0,4);
			return $tanggal.' '.$bulan.' '.$tahun;		 
	}	

	function getBulan($bln){
				switch ($bln){
					case 1: 
						return "Januari";
						break;
					case 2:
						return "Februari";
						break;
					case 3:
						return "Maret";
						break;
					case 4:
						return "April";
						break;
					case 5:
						return "Mei";
						break;
					case 6:
						return "Juni";
						break;
					case 7:
						return "Juli";
						break;
					case 8:
						return "Agustus";
						break;
					case 9:
						return "September";
						break;
					case 10:
						return "Oktober";
						break;
					case 11:
						return "November";
						break;
					case 12:
						return "Desember";
						break;
				}
			} 
     
     function gethari($tgl){
        $namahari = date("l", strtotime($tgl));
        if ($namahari == "Sunday") $namahari = "Minggu";
        else if ($namahari == "Monday") $namahari = "Senin";
        else if ($namahari == "Tuesday") $namahari = "Selasa";
        else if ($namahari == "Wednesday") $namahari = "Rabu";
        else if ($namahari == "Thursday") $namahari = "Kamis";
        else if ($namahari == "Friday") $namahari = "Jumat";
        else if ($namahari == "Saturday") $namahari = "Sabtu";
        
        return $namahari;
    }            
?>

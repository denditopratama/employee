<?php




function terbilang_get_valid($str,$from,$to,$min=1,$max=9){

	$val=false;

	$from=($from<0)?0:$from;

	for ($i=$from;$i<$to;$i++){

		if (((int) $str{$i}>=$min)&&((int) $str{$i}<=$max)) $val=true;

	}

	return $val;

}

function terbilang_get_str($i,$str,$len){

	$numA=array("","Satu","Dua","Tiga","Empat","Lima","Enam","Tujuh","Delapan","Sembilan");

	$numB=array("","Se","Dua ","Tiga ","Empat ","Lima ","Enam ","Tujuh ","Delapan ","Sembilan ");

	$numC=array("","Satu ","Dua ","Tiga ","Empat ","Lima ","Enam ","Tujuh ","Delapan ","Sembilan ");

	$numD=array(0=>"Puluh",1=>"Belas",2=>"Ratus",4=>"Ribu", 7=>"Juta", 10=>"Milyar", 13=>"Triliun");

	$buf="";

	$pos=$len-$i;

	switch($pos){

		case 1:

				if (!terbilang_get_valid($str,$i-1,$i,1,1))

					$buf=$numA[(int) $str{$i}];

			break;

		case 2:	case 5: case 8: case 11: case 14:

				if ((int) $str{$i}==1){

					if ((int) $str{$i+1}==0)

						$buf=($numB[(int) $str{$i}]).($numD[0]);

					else

						$buf=($numB[(int) $str{$i+1}]).($numD[1]);

				}

				else if ((int) $str{$i}>1){

						$buf=($numB[(int) $str{$i}]).($numD[0]);

				}				

			break;

		case 3: case 6: case 9: case 12: case 15:

				if ((int) $str{$i}>0){

						$buf=($numB[(int) $str{$i}]).($numD[2]);

				}

			break;

		case 4: case 7: case 10: case 13:

				if (terbilang_get_valid($str,$i-2,$i)){

					if (!terbilang_get_valid($str,$i-1,$i,1,1))

						$buf=$numC[(int) $str{$i}].($numD[$pos]);

					else

						$buf=$numD[$pos];

				}

				else if((int) $str{$i}>0){

					if ($pos==4)

						$buf=($numB[(int) $str{$i}]).($numD[$pos]);

					else

						$buf=($numC[(int) $str{$i}]).($numD[$pos]);

				}

			break;

	}

	return $buf;

}

function toTerbilang($nominal){

	$buf="";

	$str=$nominal."";

	$len=strlen($str);

	for ($i=0;$i<$len;$i++){

		$buf=trim($buf)." ".terbilang_get_str($i,$str,$len);

	}

	return trim($buf);

}



?>


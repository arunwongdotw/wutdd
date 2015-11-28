<?php
class RomanNumber
{
	public  function convert($number)
	{
		//$string = $number % 100; 
		if($number == 0){
			return "null";
		}
		if ($number ==100) {
			$data1=$data1."C";
			$number = $number-100;
		}
		if ($number >=90) {
			$data1=$data1."XC";
			$number = $number-90;
		}
		if ($number >=80) {
			$data1=$data1."LXXX";
			$number = $number-80;
		}

		if($number >= 60){
			$data1=$data1."LX";
			$number = $number-60;
		}
		if($number >= 50){
			$data1=$data1."L";
			$number = $number-50;
		}
		if($number >= 40){
			$data1=$data1."XL";
			$number = $number-40;
		}
		if($number >= 30){
			$data1=$data1."XXX";
			$number = $number-30;
		}
		if($number >= 20){
			$data1=$data1."XX";
			$number = $number-20;
		}
		if($number >= 10){
			$data1=$data1."X";
			$number = $number-10;
		}
		switch ($number) {
			case 9:
				$data2=$data2."IX";
				break;
			case 8:
				$data2=$data2."VIII";
				break;
			case 7:
				$data2=$data2."VII";
				break;
			case 6:
				$data2=$data2."VI";
				break;
			case 5:
				$data2=$data2."V";
				break;
			case 4:
				$data2=$data2."IV";
				break;
			case 3:
				$data2=$data2."III";
				break;
			case 2:
				$data2=$data2."II";
				break;
			case 1:
				$data2=$data2."I";
				break;
			default:
				break;
		}
		return $data1.$data2;
	}
	// echo convert(59);
}
$obj = new RomanNumber;
echo $obj->convert(35);
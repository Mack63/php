<?

function SixteenLetters($lettter){
	switch($lettter){
		case 'A':
			return 10;
			break;
		case 'B':
			return 11;
			break;
		case 'C':
			return 12;
			break;
		case 'D':
			return 13;
			break;
		case 'E':
			return 14;
			break;
		case 'F':
			return 15;
			break;
		default:
			return (int)$lettter;
	}
}

function SixteenNumbers($number){
	switch($number){
		case 10:
			return 'A';
			break;
		case 11:
			return 'B';
			break;
		case 12:
			return 'C';
			break;
		case 13:
			return 'D';
			break;
		case 14:
			return 'E';
			break;
		case 15:
			return 'F';
			break;
		default:
			return (string)$number;
	}
}

function ToDecimal_($number, $numberSystem){
	$number = strrev($number);
	$result = 0;
	for($i = 0; $i < strlen($number); $i++) 
	  { 
		$num = SixteenLetters($number[$i]);
		if($i === 0){
			$result+= $num;
		}else{
			$result+= $num * pow($numberSystem, $i);
		}
		
	  } 	  
	  echo $result;
}

function ToDecimal($number, $numberSystem){
	$number = strrev((string)$number);
	$arrayNumber = str_split($number);
	$result = 0;
	$iterator = 0;
	foreach($arrayNumber as $value ){
		$temporary = SixteenLetters($value);
		if($iterator === 0){
			$result+= $temporary;
		}else{
			$result+= $temporary * pow($numberSystem, $iterator);
		}
		$iterator++;
	}
	  
	  echo $result;
}



function FromDecimal($number10, $numberSystem){
	$number10 = (int)$number10;
	$divisionRemainder = 0;
	$result = '';
	while($number10 != 0) 
	  { 
		$divisionRemainder = $number10 % $numberSystem;
		$number10 = intval($number10 / $numberSystem);
		$result.= SixteenNumbers($divisionRemainder);
	  } 	  
	  echo strrev($result);
}


ToDecimal('8E68', 16);
echo "<br>";
FromDecimal('12345', 2);




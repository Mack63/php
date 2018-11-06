<?

$weatherYesterday = 14;
$weatherToday = 10;
$weatherTomorrow = 4;
$isRainfall = true;
$annSaid = 'Передают заморозки и я замерзла';

function CheckWhatAnnSaidHard($annSaid){
		return (strpos($annSaid, 'холодно') <> false && strpos($annSaid, 'заморозки') <> false) || (strpos($annSaid, 'холодно') <> false && strpos($annSaid, 'замерзла') <> false) || (strpos($annSaid, 'заморозки') <> false && strpos($annSaid, 'замерзла') <> false);

}

function CheckWhatAnnSaidSoft($annSaid){
		return (strpos($annSaid, 'холодно') <> false || strpos($annSaid, 'заморозки') <> false || strpos($annSaid, 'замерзла') <> false);

}

function IsNeedHat($weatherToday, $weatherYesterday, $weatherTomorrow){
	return $weatherToday < 13 && $weatherYesterday >= 11 && $weatherTomorrow >= 11;
}

function IsNeedWinterHat($weatherToday, $weatherYesterday, $weatherTomorrow){
	return ($weatherToday < 13 && $weatherYesterday < 11 && $weatherTomorrow < 11);
}

function IsTooCold($weatherToday, $weatherYesterday, $weatherTomorrow, $annSaid){
	return $weatherYesterday > $weatherToday && $weatherToday > $weatherTomorrow && CheckWhatAnnSaidSoft($annSaid);
}

function CheckWeather($weatherYesterday, $weatherToday, $weatherTomorrow, $isRainfall, $annSaid){
	
	if(IsNeedHat($weatherToday, $weatherYesterday, $weatherTomorrow)){
		echo 'одень шапку';
	}else if(IsNeedWinterHat($weatherToday, $weatherYesterday, $weatherTomorrow)){
		echo 'Одень зимнюю шапку';
	}else if(IsTooCold($weatherToday, $weatherYesterday, $weatherTomorrow, $annSaid)){
		$str = 'ты хорошо оделся?';
		if($isRainfall){
			$str = " $str И возьми с собой зонтик";
			if($weatherTomorrow < $weatherToday - 3){
				$str = "$str и шарф";
			}
		}
		
		if($weatherTomorrow < $weatherToday - 5 && CheckWhatAnnSaidHard($annSaid)){
			$str = "ты не пройдешь!";
		}
		echo $str;
	}
	
	
}

CheckWeather($weatherYesterday, $weatherToday, $weatherTomorrow, $isRainfall, $annSaid);







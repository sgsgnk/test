<?php
//何日分か
$days = fgets(STDIN);
for ($i=0; $i < $days; $i++) {
	$weekday[] = trim(str_replace("\n",'',fgets(STDIN)));
	//var_dump($weekday);
	if ($i > 6) {
		$amount = $weekday[$i - 7] + $weekday[$i];
		//echo "$amount\n";
	}elseif ($i < 6) {
		
		$amount = 0 + $weekday[$i];
		//echo "$amount\n";
	}
	echo "$amount\n";
	
}
//var_dump($weekday);
?>
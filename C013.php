<?php
//まだテストケースに通していません。
//ローカルでも成功していないです。
//嫌いな数字
$hate = fgets(STDIN);
//病院の数
$room = fgets(STDIN);
//部屋の数だけ繰り返す
for($i = 0; $i < $room; $i++){
	$roomNo[] = fgets(STDIN);	//部屋番号を配列に入れる
	$roomSep = str_split($roomNo[$i]);	//部屋番号を分ける
	var_dump($roomSep);
	for($j = 0; $j < 3; $j++){
		if (strstr($roomSep[$j],$hate)) {
			# code...
		}else{
			$like[] = $roomSep[$j];
		}
		//もじ一つもないときはNone
		$count = count($like);
		if ($count == 0) {
			echo "None";
		}
		echo $like;
	//print $total;
	}
	echo "\n";
}


?>
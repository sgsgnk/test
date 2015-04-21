<?php
/*//嫌いな数字
$hate = fgets(STDIN);
//病院の数
$room = fgets(STDIN);
//部屋の数だけ繰り返す
for($i = 0; $i < $room; $i++){
	$roomNo[] = fgets(STDIN);	//部屋番号を配列に入れる
	$roomSep = str_split($roomNo[$i]);	//部屋番号を分ける
	var_dump($roomSep);
	for($j = 0; $j < 3; $j++){
		//部屋番号一つ一つを嫌いな数字か比べていく
			if (in_array($hate, $roomSep)){
				$j = 3;
			}else{
				$like = $roomSep[$j];
				echo $like;
			}
		}
		echo "\n";
	}
	echo "\n";
*/
//嫌いな数字
$hate = fgets(STDIN);
$hate = str_replace("\n", '', $hate);
$count = 0;
//var_dump($hate);
//病院の数
$room = fgets(STDIN);
//部屋の数だけ繰り返す
for($i = 0; $i < $room; $i++){
	$roomNo[] = str_replace("\n", '', fgets(STDIN));	//部屋番号を配列に入れる
	$roomSep = str_split($roomNo[$i]);	//部屋番号を分ける
	$flg = 0;	//フラグ初期化
	//var_dump($roomSep);
	for($j = 0; $j < 3; $j++){
		//echo strcmp($roomSep[$j], $hate);
		if(strcmp($roomSep[$j], $hate) == 0){
		    $flg = 1;
		    //break;
		}
	//echo "\n";
	}
	//echo "$flg";
	//フラグが立っていなかったら出力
		if($flg == 0){
		    echo "$roomNo[$i]\n";
		    $count = $count + 1;
		}

}
if ($count == 0) {
			echo "none";
		}
?>

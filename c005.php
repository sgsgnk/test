<?php
//数習得
$num = fgets(STDIN);
//配列にIPアドレスを入れる
for($i =0; $i < $num; $i++){
$ipadd[] = fgets(STDIN);
//配列の[i]番目を抜き取り分割する
$ipcheck = explode('.' , $ipadd[$i]);
//var_dump($ipcheck);
//配列4つ以上はFalse
 $count = count($ipcheck);
//print $count;
//配列の数が4個以上だったらFalse
if($count > 4){
$ipans = "False";
 }else if($ipcheck[$i] >256 && empty($ipcheck[$i])){		//255以上だったらFalse
 $ipans = "False";
 }else{
 $ipans = "True";
 }
echo $ipans."¥n";
}
?>

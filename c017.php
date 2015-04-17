<?php
    //C017 ハイアンドロー
    //全パス済みです

    $par = fgets(STDIN);    //親の数字
    $parSep = explode(' ', $par);
    $childNum = fgets(STDIN); //子の数
    //子の数分繰り返す
    for($i = 0; $i < $childNum; $i++){
        //子の数字を配列に入れる
        $child[] = fgets(STDIN);
        //var_dump($child);
        //スペースで区切る
        $childSep = explode(" ", $child[$i]);
        //var_dump($childSep);
        for($j = 0; $j < 1; $j++){
            //print $childSep[$j];
            //print $parSep[$j];
            if($childSep[$j] < $parSep[$j]){
                echo "High\n";

            }elseif ($childSep[$j] == $parSep[$j] ) {
                $j = 1;
                if ($childSep[$j] > $parSep[$j]) {
                    echo "High\n";
                }else{
                    echo "Low\n";
                }
            }else{
                echo "Low\n";
            }
        }
    }
?>

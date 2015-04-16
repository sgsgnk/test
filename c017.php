<?php
    $par = fgets(STDIN); //親の数字
    $num = fgets(STDIN); //子の数
    for($i = 0; $i <$num; $i++){
        $child[] = fgets(STDIN);
        //空白で分ける
        $childnum = explode(" ",$child[$i]);
        $count = count($child);
        //var_dump($childnum);
        for($j = 0; $j < $i; $j++){
            for($k = 0; $k < $j; $k++){
                print $childnum[$j][$k];
            }
        }
    }
    
    
    
?>
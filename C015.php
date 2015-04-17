<?php
    //C015 ポイントカード
    //全パスできました。   
     $num = fgets(STDIN); //レシートの数
     for($i = 0;$i < $num; $i++){
         $bill[] = fgets(STDIN);
         $point = 0;
         //$total = 0;
         $billSep = explode(' ',$bill[$i]);
          for($j = 0; $j < 1; $j++){
             if(strstr($billSep[$j], '3')){
                 $point = $billSep[$j + 1] * 0.03;
                 $point = floor($point);
                 $total += $point;
             }elseif(strstr($billSep[$j], '5')){
                 $point = $billSep[$j + 1] * 0.05;
                 $point = floor($point);
                 $total += $point;
            }else{
                 $point = $billSep[$j + 1] * 0.01;
                 $point = floor($point);
                 $total += $point;
             }
             
   
         }
         
     }
     echo $total;
    
　　
    
?>

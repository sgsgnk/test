<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $char = fgets(STDIN);
    $char = str_replace("\n","",$char);
    //var_dump("$char");
    for($i = 0; $i < strlen($char); $i++) {
    	if($i % 2 == 0){
    		echo $char[$i];
    	}
    }

?>

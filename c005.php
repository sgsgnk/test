<?php
//動作確認では答えは判定できているのですが、
//for文が間違っていて２重表示されてしまいます。
//デバック中です。

//IPアドレスの数
$num = fgets(STDIN);
for($i = 0; $i < $num; $i++){
    $ipadd = fgets(STDIN);
    $ipans = filter_var($ipadd, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4);
    var_dump($ipans);
    if($ipans == false){
        echo "False\n";
        
        }
        echo "True\n";
}
?>
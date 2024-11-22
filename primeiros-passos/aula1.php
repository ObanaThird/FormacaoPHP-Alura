<?php
#impar if($c % 2 != 0)
#par if($c % 2 == 0)
/*for ($c = 1; $c <= 100; $c++){
    if($c % 2 == 0)
        echo "$c" . PHP_EOL;
}*/

$num = 5;

for ($i = 1; $i <= 10; $i++){
    $res = $num * $i;
    echo "$num * $i = $res" . PHP_EOL;
}
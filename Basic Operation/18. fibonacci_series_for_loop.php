<?php

//0 1 1 2  3 5 8 13 21 34 

$veryOld = 0;
$old= 1;
$new=1;
for ($i=0; $i<=10; $i++){
    echo $veryOld." ";// 0 1 2
    $old = $new;
    $new = $old + $veryOld;
    $veryOld = $old;
}
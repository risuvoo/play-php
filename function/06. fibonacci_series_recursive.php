<?php


/* function fibonacci($old,$new,$start,$end){
    if($start>$end){
        return;
    }
    $start++;
    echo $old." ";
    $_temp=$old+$new;
    $old = $new;
    $new=$_temp;
    fibonacci($old,$new,$start,$end);

}
fibonacci(0,1,1,10); */



//update $start value is static


function fibonacci($old,$new,$end){
    static $start;
    $start= $start ?? 1; //0
    if($start>$end){
        return;
    }
    $start++;
    echo $old." ";
    $_temp=$old+$new;
    $old = $new;
    $new=$_temp;
    fibonacci($old,$new,$end);

}
fibonacci(0,1,10);
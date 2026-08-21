<?php
//je function nije nijeke call kore take bole recursive function
/* function printN($b){
    echo $b;
    $b++;
    printN($b);

    //cholte ee thakbe loop ta

}
printN(1); */

//jodi loop ta break korte chai tahole

/* function printN($b){
    if($b>=10){
        return;
    }
    echo $b ."\n";
    $b++;
    printN($b);
    
}
printN(1); */

//akhon amra chaitesi je eto - eto  porjonto count hobe ar eto eto kore barbe 

//recursive funtion
//full operation ta holo recursion
function printN($count,$end,$stepping=1){
    if($count>$end){
        return;
    }
    echo $count."\n";
    $count +=$stepping;
    printN($count,$end,$stepping);
}
printN(20,30,5);
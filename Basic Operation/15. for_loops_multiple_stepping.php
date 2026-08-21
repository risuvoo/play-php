<?php
// evabe ber kora jae


/* for ($i=0;$i<100;$i++){
    if ($i % 7 ===0){
        echo $i."\n";
    }
    
}
echo "\n";
for ($i=0;$i<100;$i++){
    if ($i % 11 ===0){
        echo $i."\n";
    }
    
}
echo "\n"; */


//smart vabe korte gele

/* for ($i=0;$i<100;$i+=11){
    echo $i."\n";
}
 */
// another way 

/* for ($i=0;$i<100;$i++){
    echo $i % 7 == 0 ?$i."\n" : "";
}
 */

 //for loop multipal staping

 for ($i=0,$j=0;$i<100;$i+=7,$j+=11){
     echo $i."\n";
     echo $j<100? $j."\n":"";
 }

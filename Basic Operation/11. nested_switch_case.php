 <?php
 // nasted switch case

 $n = -13 ;
 $r = $n % 2;
 //even and odd positive number or negative number
 //switch(true) dia case er moddhe condition dite pari
 //ex:case ($n<0);
 //ex:case ($n<0 && $n===0);
 //switch case true mane jai hok na kano aita cheak korbe

 switch($r){
     case 0:
     switch($n){
         case $n>0:
         echo "{$n} is positive even number";
         break;
         case $n<0:
         echo "{$n} is negative even number";
     }
     break;
     default:
     switch($n){
         case $n>0:
         echo "{$n} is positive odd number";
         break;
         case $n<0:
         echo "{$n} is negative odd number";
     }
}

 
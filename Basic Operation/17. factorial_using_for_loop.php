<?php 
//factorial program
$number=6;
$factorial = 1; 
    for ($i = 1; $i <= $number; $i++){ 
      $factorial = $factorial * $i;
    } 
printf("Factorial number is %d = %d",$number,$factorial);
echo "\n";
//dam coding 1 to 10 factorial number
$j = 1; //j ta dia shudhu operation hoice koeta ta cheak korlam aita factorial program er kono ongsho na
for ($n=1;$n<=10;$n++){
    $factorial =1;
    for ($i=$n;$i>1;$i--){
        $factorial= $factorial * $i;
        $j++;
        
    }
    printf("Factorial number is %d = %d\n",$i,$factorial);
}
echo "$j total operation";
//smart coding 1 to 10 factorial number

$factorial = 1; 
    for ($i = 1; $i <=10; $i++){ 
      $factorial = $factorial * $i;
      printf("Factorial number is %d = %d",$number,$factorial);
    } 
echo "\n";

//shortcut factorial program
$n=6;
for($i=$n,$factorial=1;$i>1;$i--){
    $factorial = $factorial * $i;
}
printf("Factorial number is %d = %d",$n,$factorial);
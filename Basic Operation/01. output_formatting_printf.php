<?php
// $ sign take sting korte hole single cottion er moddhe rakhte hobe '';
$fname= 'suvo';
$lname='khan';
$middleName='rafiq';
$forth='engr';
$fivth='programmer';
//shuvo khan->want output
printf('His name is %2$s %1$s',$lname,$fname); 
echo "\n";
//rafiq khan suvo->want output
printf('His name is %3$s %1$s %2$s',$lname,$fname,$middleName);
echo "\n";    
//shuvo khan engr rafiq->want output
printf('His name is %2$s %1$s, %4$s %3$s',$lname,$fname,$middleName,$forth);
echo "\n";
//programmer shuvo is engr rafiq khan
printf('His name is %5$s %2$s is %4$s %3$s %1$s',$lname,$fname,$middleName,
$forth,$fivth);
echo "\n";
printf('binary convert %1$d is %1$b',12);
echo "\n";
$n=12.456;
//doshomiker por 2 ta shonkha kore felte hobe;
// way No.1->
echo number_format($n,2);
echo "\n";
// way No.2->echo number_format($n,2);
printf("%.2f",$n);
echo "\n";

/* $n=23; //00023
$m=12345;//12345
$p=156;//00156
printf("%05d",$n); 
echo "\n";
printf($m);
echo "\n";
printf("%05d",$p); */

/* $n=23.2354; //00023.23
$m=12345.234;//12345.23
$p=156.123;//00156.12
printf("%08.2f\n",$n);
printf("%.2f\n",$m);
printf("%08.2f\n",$p);
 */






<?php
//odd(B) and even(J) number ber korte hobe 
//kono number ke 2 dia vag korle vagses 0 hole sheta even nohole odd
$n=13;
if ($n%2){
    echo "$n is even number\n";
}else{
    echo "$n is odd number\n";
}
//logical operator
$suvo = 100;
$moin= 10;

if ($suvo==$moin){
    echo "same amount of 2 person\n";

}elseif($suvo<$moin){
    echo "suvo more then moin\n";

}elseif($suvo>$moin){
    echo "moin more then suvo\n";
}else{
    echo "money doesn't exist\n";
}

//wrong output
$food = "apple"; 
/* if($food == "tuna"){
    echo "it has vitamin D\n";//wrong
} */


//right anar jonno scaler valure ke age pass korte hobe
if("tuna"==$food){
    echo "It has a vitamin D \n ";
}

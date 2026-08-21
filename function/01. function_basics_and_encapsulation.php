<?php

/* function evenORodd($n){//paramitter
    if($n % 2== 0){
        return true;
    }else{
        return false;
    }
}
$x=13;
if(evenORodd($x)){//argument
    echo "{$x} is even number";
}else{
    echo "{$x} is odd number";
}
 */


 //best pratice holo meaningful name dea jate function nam dakhle bujha jae

//funtion ta je ki kaj kore ta obossoi comment kore bole dite hobe

/*
*this function return even and odd number
*/
 function isEven($n){
     if($n%2==0){     //function er moddhe else er dorkar pore na 
         return true;
     }
     return false;
 }

 $x=11;
 if(isEven($x)){
     echo "{$x} is even number";
 }
 else{
    echo "{$x} is odd number";
 }
 
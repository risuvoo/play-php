<?php 

//break 

for($i=0;$i<100;$i++){
    echo $i."\n";
    if($i == 6){
        break;
    }
   
}

//continue
for ($i=0;$i<20;$i++){
    
    if($i<13){
       continue; 
    }
    echo $i."\n";
}
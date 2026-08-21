<?php 
for ($i=1;$i<10;$i++){
    echo PHP_EOL;
    for ($j=0;$j<$i;$j++){
        echo "*";
    }
}
echo "\n";
/* outpur
    *
    **
    ***
    ****
    *****
    ******
    *******
    ********
    ********* 
*/

for  ($i=10;$i>0;$i--){
    echo $i.":".(10-$i);
    echo PHP_EOL;
}
/*  output
10:0
9:1
8:2
7:3
6:4
5:5
4:6
3:7
2:8
1:9 
*/
echo "\n";
// multipal looping

for ($i=10,$j=0;$i>0;$i--,$j++){
    echo $i.":".$j;
    echo PHP_EOL;
}
/*  output
10:0
9:1
8:2
7:3
6:4
5:5
4:6
3:7
2:8
1:9 
*/
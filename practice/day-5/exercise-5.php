<?php

$numbers = [50, 10, 80, 30, 20, 70];

// reuseable funtion for sorting
function numberSorting($arr, $sortType = 'asce'){
    if ($sortType === 'asc') {
        sort($arr);
        return $arr;
    }

    if ($sortType === 'desc') {
        rsort($arr);
        return $arr;
    }

    return [];
}

// array iteration
function arrIteration($arr){
    foreach($arr as $arrItem){
        echo $arrItem."\n";
    }
}

// print ascending order
echo "===================Ascending========================\n";
arrIteration(numberSorting($numbers));


// print descending order
echo "===================Descending=======================\n";
arrIteration(numberSorting($numbers, 'dsce'));

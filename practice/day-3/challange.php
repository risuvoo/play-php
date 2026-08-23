<?php

$totalAmount = 7500;

function calculateDiscount(int $total, int $discountPercent){
    $discountAmount = $total * ($discountPercent / 100);
    $finalAmount = $total - $discountAmount;

    echo "Total: ".$total;
    echo "Discount: ".$discountPercent."%";
    echo "Discount Amount: ".$discountAmount;
    echo "Final Amount: ". $finalAmount;
}

if($totalAmount >= 10000){ // 20% discount
   calculateDiscount($totalAmount, 20);
}elseif($totalAmount >= 5000 ){ // 10% discount
    calculateDiscount($totalAmount, 10);
}elseif($totalAmount >= 3000){ // 5% discount
    calculateDiscount($totalAmount, 5);
}elseif($totalAmount < 3000){ // 0% discount
    calculateDiscount($totalAmount, 0);
}else{
    echo "No Discount Available";
}
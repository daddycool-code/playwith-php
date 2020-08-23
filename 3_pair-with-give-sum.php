<?php
/*
Find pairs with given sum in a sorted array.

Given an array A of size N. 
Write a code to find all pairs in the array that sum to a number equal to K. 
If no such pair exists then output will be –1.

For example 
array = {1, 2, 3, 4, 5, 6, 7};
sum = 9

Output:

Pairs with given sum 9 is
Pair (2 , 7 )
Pair (3 , 6 )
Pair (4 , 5 )

*/
$array = array( 1, 2, 3, 4, 5, 6, 7 );
$sum = 9;
$pair = [];

#  INGENERING Approach it works even with unsorted 
for ($i=0; $i < ceil($sum/2); $i++) {  // I decrease the number from the sum and i check if we have pairs 
    #ex sum = 9;  9 - 1: pairs (1 , 8=(9-1); 9 - 2: pairs (2, 7 ); 9 - 3: pairs (2, 7 ); 9 - 4: pairs (3, 6 ); 9 - 5: pairs (4, 5 )
    $first_val = $sum - $i;
    $second_val = $i;
    if(in_array( $first_val ,$array) && in_array( $second_val ,$array) ){
        $pair[] = array($first_val=>$second_val);
    }
    
}



## PRO Approach

$array = array( 1, 2, 3, 4, 5, 6, 7 );
$pair = [];
$sum = 9;
$low = 0;
$high = count($array) - 1;

while($low < $high){
    if($array[$low] + $array[$high] < $sum ){
        $low++;
    }elseif($array[$low] + $array[$high] > $sum ){
        $high--;
    }elseif ($array[$low] + $array[$high]  == $sum) {
        # code...
        $first_val = $array[$low];
        $second_val = $array[$high];
        $pair[] = array($first_val=>$second_val);
        $low++;
        $high--;
    }

}

foreach ($pair as $key => $value) {
    # code...
    echo " Pair Elements : ".print_r($value);
}
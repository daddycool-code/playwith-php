<?php
/**
 * 
 * Segregate 0s and 1s in array.
 * 
 * Given an array A of size N of 0's and 1's in a random order. 
 * Write a code to segregate 0's n left side and 1's on right side of the array;
 * 
 * Input arr : {1, 1, 1, 1, 0, 1, 0, 0, 1, 1, 1, 0}
 * Output arr: 
 * 
 * 
 */
include_once("./array-helper.php");
$obg_array = new ArrayHelper();

$array_1 = [0,0,0,0,1,1,1,1,1,1,1,1];
$low = 0;
$high = count($array_1) - 1;


#ENGINEERING Solution

while ($low < $high) {
    # code...
    if($array_1[$low] == 0 && $array_1[$high] == 0 ){ // Cannot swap because 0 - low is in ccrrect position
        $low++;
    }elseif($array_1[$low] == 1 && $array_1[$high] == 1 ){ // Cannot swap because 1 - high is in ccrrect position
        $high--;
    }elseif($array_1[$low] == 1 && $array_1[$high] == 0 ){ // Swap to place them in the correct position 
        //swap 
        $array_1 = $obg_array->swap($array_1 , $low , $high );
        $low ++;
        $high--;
    }elseif($array_1[$low] == 0 && $array_1[$high] == 1 ){ // Both already in correct postion
        $low ++;
        $high--;
    }
}


#PRO Solution

$array_1 = [0,0,0,0,1,1,1,1,1,1,1,1];
//Shift action
$j = 0;

for ($i=0; $i < count($array_1) ; $i++) { 
    # code...
    if($array_1[$i] ==  0){
        $final_array[$j++] = $array_1[$i];  // Import not: $j++, is increas the $j value of one only after the first execution of the for loop. 
    }
}

while ($j < count($array_1)) {
    # code...
    $final_array[$j++] = 1;
}

echo " Final Array";
print_r($final_array);
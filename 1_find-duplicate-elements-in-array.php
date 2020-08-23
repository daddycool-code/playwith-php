<?php

//Given an array A of size N. 
// Write a  code to find duplicate elements in array.  Print Duplicate 


// Input   :{5, 1, 2, 6, 4, 4, 5}
// Output :{5 , 4}

// In this example, 4 and 5 appear multiple times in an input array.


$array_unique = [];
$arry_duplicate = [];

$array = array(5, 1, 2, 6, 4, 4, 5);

$n = count($array);
for ($i=0; $i < $n; $i++) { 
    if(in_array($array[$i], $array_unique)){
        $arry_duplicate[] = $array[$i];
    }else{
        $array_unique[] = $array[$i];
    }
    
}
// Print duplicate
foreach ($arry_duplicate as $key => $value) {
    # code...
    echo " Duplicate Element : ".$value." \n";
}
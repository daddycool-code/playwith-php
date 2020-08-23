<?php

/*
Given 3 array A,B,C of size N,M,K. 
Write a program to find common elements in three sorted arrays. 

For example –
arr1 = {1, 5, 10, 20, 40, 80};
arr2 = {6, 7, 20, 80, 100};
arr3 = {3, 4, 15, 20, 30, 70, 80, 120};

Output : {20, 80}
*/

$array_1 = array(1, 5, 10, 20, 40, 80);
$array_2 = array(6, 7, 20, 80, 100);
$array_3 = array(3, 4, 15, 20, 30, 70, 80, 120);

## *BEGINNER* approach O(n^3).

for ($i=0; $i < count($array_1); $i++) { 
    for ($j=0; $j < count($array_2) ; $j++) { 
        for ($k=0; $k < count($array_3) ; $k++) { 
            if ($array_1[$i] == $array_2[$j] &&  $array_2[$j] == $array_3[$k]){
                $array_common[] = $array_3[$j];
            }
        }
    }
}

print_r($array_common);


//  *PRO* approach

$array_1 = array(1, 5, 10, 20, 40, 80);
$array_2 = array(6, 7, 20, 80, 100);
$array_3 = array(3, 4, 15, 20, 30, 70, 80, 120);

$i = $j =  $k = 0;

while ($i < count($array_1)  && $j <  count($array_2) && $k < count($array_3) ) {

    if ($array_1[$i] == $array_2[$j] &&  $array_2[$j] == $array_3[$k]){
        $array_common[] = $array_1[$i];
        $i++;
        $j++;
        $k++;
    } elseif ($array_1[$i] > $array_2[$j] ){
        $j++;
    }elseif ($array_2[$j] > $array_3[$k] ){
        $k++;
    }else{
        $i++;
    }
}

print_r($array_common);
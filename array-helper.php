<?php
/**
 * It helps the array
 */

class ArrayHelper{

    function __construct()
    {

       
    }

    /**
     * 
     * Swap one array[$source] with array[$destination] without losing data
     */
    function swap( array $array , int $source , int $destination ){
        (int) $tmp =  $array[$source];  //store the source in a tmp file
        $array[$source] = $array[$destination];
        $array[$destination] = $tmp;
        return $array;
    }
    /**
     * It orders array with their index
     */

    function orderArrayNumberWithIndix($array)
    {
        (int) $n = count($array);
        for ($i = 0; $i < $n; $i++) {

            
            //Swithch array value  with it's postion
            $counter = 0;
            while ( $array[$i] > 0   // if  value > 0
            && $array[$i] <= $n   // if value is <= of array size 
            && $array[$i] != $array[ $array[$i] - 1] // this number is in the correct postion value -1 
            ) {
                $correct_index = $array[$i]  - 1;  // the correct index  of this number is n-1 in the array  
                $array = $this->swap( $array , $i  , $correct_index );
            }          
            
        }
        return $array;
    }

}



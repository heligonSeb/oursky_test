<?php
    /*****
     * Get a array of Fibonacci number from an array with number
     * 
     * $array1 (array) 
     * 
     * return   new array of all Fibonacci number from $array1
     */
    function nextFibonacci($array1){
        if(!is_array($array1))
            return "the function only work with an array";

        $FibonacciList = array();

        foreach ($array1 as $value) {
            if(!is_numeric($value))
                return 'Array should have only numeric value';

            $FibonacciList[] = getNextFibNum($value);
        }

        return $FibonacciList;
    }



    /*****
     * find the Fibonacci number from a number
     * 
     * $int (int)  
     *  
     * return Fibonacci number
     */
    function getNextFibNum($int) {

        $fibArr = array();   
        $fibArr[0] = 0;
        $fibArr[1] = 1; 

        if($int > 2){
            for ($i=2;$i<=$int+2;$i++) {
                $fibArr[$i] = $fibArr[$i-1]+$fibArr[$i-2];

                if ($fibArr[$i] > $int)  
                    return $fibArr[$i];     
    
            } 
        } else if($int < 0){ // if $int is a negative number

            $int = abs($int);

            for ($i=2;$i<=$int+2;$i++) {
                $fibArr[$i] = $fibArr[$i-1]+$fibArr[$i-2];


                if ($fibArr[$i] > $int) 
                    if($i&1){                   // if $i is odd so the value will be positive else is negative
                        var_dump($i);
                        return $fibArr[$i];
                    } else {
                        var_dump($i);
                        return -$fibArr[$i];
                    }    
            } 
        } else if( $int == 1 || $int == 2) {
            return $fibArr[1] + $int;
        } else {
            return $fibArr[1];
        }
    }





    /****** function test ******/
    // var_dump(getNextFibNum(-4));
    // var_dump(getNextFibNum(-14));
    var_dump(nextFibonacci([1,22,9]));
    // var_dump(nextFibonacci([1,'22',9]));
    // var_dump(nextFibonacci([1,'a',9]));


?>
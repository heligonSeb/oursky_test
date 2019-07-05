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
        $fibArr[0] = 0; $fibArr[1] = 1; // set initial array keys
        $i;

     
        for ($i=2;$i<=$int+1;$i++) {
            $fibArr[$i] = $fibArr[$i-1]+$fibArr[$i-2];

            if ($fibArr[$i] > $int)  
                return $fibArr[$i];     

        } 
        
        if ($fibArr[$i] = $int-1) 
            return $fibArr[$i-1] + $fibArr[$i-2];
        
            
        if ($fibArr[$i-1] = 1)
            return $int + $int;    
    
    }




    /****** function test ******/
    // var_dump(getFibNum(1));
    // var_dump(getFibNum(9));
    //var_dump(getFibNum(500));
    //var_dump(getFibNum(0));
    var_dump(nextFibonacci([1,22,9]));
    // var_dump(nextFibonacci([1,'22',9]));
    // var_dump(nextFibonacci([1,'a',9]));


?>
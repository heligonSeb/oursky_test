<?php
    /*****
     *  It's compare 2 array and check if the second array is a subset of the first array
     * 
     * array1 (array)
     * array2 (array)
     * 
     * return true or false
     */
    function isSubset($array1, $array2){

        if(!is_array($array1) || !is_array($array2))
            return "the function only work with an array";

        $diff = array_diff($array2, $array1); /**** return an array with all value(letter) in array2 is not in the array1 or return an empty array ****/

        if(!empty($diff))
            return false;

        return true;
    }

    /****** function test ******/
    var_dump(isSubset(["A","B","C","D","E"],["A","E","D"]));
    var_dump(isSubset(["A","B","C","D","E"],["A","D","Z"]));
    var_dump(isSubset(["A","D","E"],["A","A","D","E"]));
    var_dump(isSubset(["A","D","E"],"not array"));
    var_dump(isSubset("not array",["A","A","D","E"]));


?>
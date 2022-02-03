<?php

/**
 * This function takes in an array and an integer.
 * The function returns an array on success and False on error.
 * The result array contains sum of values in the array, the average
 * of values, and the sum result of multiplying each number in the array
 * with the given integer.
 * @param Array $arr_in
 * @param Integer $int_in
 * @return Array
 */
function array_operations(array $arr_in, int $int_in) : array {
    //Edge case of empty array.
    if(count($arr_in) == 0){
        return [false];
    }
    //Associative array to hold results.
    $result = array();
    //Sum of all values in $arr_in
    $result_sum = 0;
    foreach ($arr_in as $num){
        $result_sum += $num;
    }
    $result["result_sum"] = $result_sum;
    //Average of values in $arr_in
    $result_average = $result_sum / count($arr_in);
    $result["result_average"] = $result_average;
    //Result by multiplying $arr_in with each value and sum of all values.
    $result_multiplication = 0;
    foreach ($arr_in as $num){
        $temp = $num * $int_in;
        $result_multiplication += $temp;
    }
    $result["multiplication"] = $result_multiplication;
    return $result;
}

$arr_in = [1, 2, 3, 4, 5];
$int_in = 10;
var_dump(array_operations($arr_in, $int_in));

?>
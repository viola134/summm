<?php
function even($var)
{
    //return !($var & 1);
    return $var % 2 == 0;
}
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$arr_f = array_filter($array, "even");
$arr_fsum = array_sum($arr_f );
print_r($arr_fsum);

<?php

function even($var)
{
    return !($var & 1);
}
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
array_filter($array, "even");
array_sum(array_filter($array, "even"));
print_r(array_sum(array_filter($array, "even")));
<?php
/* Task 2: Array Manipulation */

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];


function removeEvenNumbers($numbers)
{
    $filterNumbers = array_filter($numbers, function ($value) {
        return $value % 2 !== 0;
    });
    print_r($filterNumbers);
}

removeEvenNumbers($numbers);
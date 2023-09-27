<?php
/* Task 3: Array Sorting */

$grades = [85, 92, 78, 88, 95];

function descendingArray($grades)
{
    arsort($grades);
    print_r($grades);
}

descendingArray($grades);
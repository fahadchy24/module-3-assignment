<?php
/* Task 1: String Manipulation */

$text = "The quick brown fox jumps over the lazy dog.";

function changeText($text)
{
    return strtolower(str_replace("brown", "red", $text));
}

echo changeText($text);
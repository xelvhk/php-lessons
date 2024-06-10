<?php

// =========== Task 23. Happy ticket ==============
function isHappy (string $num)
{
    $trim = strlen($num)/2;
    $partOne = array_sum(str_split(substr($num, 0, $trim)));
    $partTwo = array_sum(str_split(substr($num, $trim)));
    if ($partOne == $partTwo) {
        return true;
    }
    else {
        return false;
    }
    }

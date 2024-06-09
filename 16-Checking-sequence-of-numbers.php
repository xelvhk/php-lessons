<?php
// =========== Task 16. Checking the sequence of numbers in an array ==============
function isContinuousSequence($numbers)
{
    if (count($numbers) <= 1) {
        return false;
    }
    $start = $numbers[0];
    foreach ($numbers as $num) {
        if ($num !== $start) {
            return false;
        }
        $start++;
    }
    return true;
}

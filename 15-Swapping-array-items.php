<?php

// =========== Task 15. Swapping array items ==============
function swap($arr, $index)
{
    if (array_key_exists($index, $arr) && array_key_exists($index - 1, $arr) && array_key_exists($index + 1, $arr)) {
        $temp = $arr[$index - 1];
        $arr[$index - 1] = $arr[$index + 1];
        $arr[$index + 1] = $temp;
    }
    return $arr;
}

<?php

// =========== Task 21. Counting of unique elements of two arrays ==============
function getSameCount(array $first, array $second)
{
    $unique1 = array_unique($first);
    $unique2 = array_unique($second);
    $intersection = array_intersect($unique1, $unique2);
    return count($intersection);
}

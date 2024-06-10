<?php

// =========== Task 24. Searching for intersections of sorted arrays ==============
function getIntersectionOfSortedArray($arr1, $arr2) {
    $result = [];
    $i = 0;
    $j = 0;
    while ($i < count($arr1) && $j < count($arr2)) {
        if ($arr1[$i] === $arr2[$j]) {
            $result[] = $arr1[$i];
            $i++;
            $j++;
        } elseif ($arr1[$i] > $arr2[$j]) {
            $j++;
        } else {
            $i++;
        }
    }
    return $result;
}

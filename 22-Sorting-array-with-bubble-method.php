<?php

// =========== Task 22. Sorting array with bubble method ==============
function bubbleSort($array) {
    $num = count($array);
    do {
        $swapped = false;
        for ($i = 0; $i < $num - 1; $i++) {
            if ($array[$i] > $array[$i + 1]) {
                $temp = $array[$i];
                $array[$i] = $array[$i + 1];
                $array[$i + 1] = $temp;
                $swapped = true;
            }
        }
        $num--;
    }
    while ($swapped);
    return $array;
}

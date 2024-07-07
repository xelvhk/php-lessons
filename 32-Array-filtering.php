<?php

function without(array $array, ...$valuesToExclude) {
    $filteredArray = array_filter($array, function($item) use ($valuesToExclude) {
        return !in_array($item, $valuesToExclude, true);
    });
    return array_values($filteredArray);
}

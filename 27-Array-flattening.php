<?php

// =========== Task 27. Array flattening ==============
function flatten($array) {
    $result = [];
    foreach ($array as $item) {
        if (is_array($item)) {
            $result = [...$result, ...$item];
        } else {
            $result[] = $item;
        }
    }
    return $result;
}

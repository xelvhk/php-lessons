<?php

// =========== Task 26. Searching for nearest locations v.2 ==============
function getDistance(array $point1, array $point2) {
    [$x1, $y1] = $point1;
    [$x2, $y2] = $point2;
    $xs = $x2 - $x1;
    $ys = $y2 - $y1;
    return sqrt($xs ** 2 + $ys ** 2);
}

function getTheNearestLocation($locations, $point) {
    if (empty($locations)) {
        return null;
    }
    $nearestLocation = null;
    $minDistance = PHP_INT_MAX;
    foreach ($locations as $location) {
        $locationPoint = $location[1];
        $distance = getDistance($point, $locationPoint);    
        if ($distance < $minDistance) {
            $minDistance = $distance;
            $nearestLocation = $location;
        }
    }
    return $nearestLocation;
}

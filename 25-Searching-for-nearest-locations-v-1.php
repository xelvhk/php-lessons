<?php

// =========== Task 25. Searching for nearest locations v.1 ==============
function getDistance(array $point1, array $point2) {
    [$x1, $y1] = $point1;
    [$x2, $y2] = $point2;
    $xs = $x2 - $x1;
    $ys = $y2 - $y1;
    return sqrt($xs ** 2 + $ys ** 2);
}

function getTheNearestLocation(array $locations, array $currentPoint) {
    if (empty($locations)) {
        return null;
    }
    [$nearestLocation] = $locations;
    [, $nearestPoint] = $nearestLocation;
    $lowestDistance = getDistance($currentPoint, $nearestPoint);
    foreach ($locations as $location) {
        [, $point] = $location;
        $distance = getDistance($currentPoint, $point);
        if ($distance < $lowestDistance) {
            $lowestDistance = $distance;
            $nearestLocation = $location;
        }
    }
    return $nearestLocation;
}

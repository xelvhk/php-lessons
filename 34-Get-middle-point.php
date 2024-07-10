<?php

function getMidpoint($point1,$point2) {
    $result = ['x' => ($point1['x'] + $point2['x']) / 2,'y' => ($point1['y'] + $point2['y']) / 2];
    return $result;
}

// function getMidpoint($point1, $point2)
// {
//     $x = ($point1['x'] + $point2['x']) / 2;
//     $y = ($point1['y'] + $point2['y']) / 2;

//     return [ 'x' => $x, 'y' => $y ];
// }

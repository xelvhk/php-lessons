<?php

// v.1
function getMidpoint($point1,$point2)
{
    $result = ['x' => ($point1['x'] + $point2['x']) / 2,'y' => ($point1['y'] + $point2['y']) / 2];
    return $result;
}

// v.2
// function getMidpoint($point1, $point2)
// {
//     $x = ($point1['x'] + $point2['x']) / 2;
//     $y = ($point1['y'] + $point2['y']) / 2;

//     return [ 'x' => $x, 'y' => $y ];
// }

// v.3 hiding functions

// $point1 = ['x' => 0, 'y' => 0];
// $point2 = ['x' => 4, 'y' => 3];

// function getX($point1, $point2){
//     $x = ($point1['x'] + $point2['x']) / 2;
//     return $x;
// };
// function getY($point1, $point2)
// {
//     $y = ($point1['y'] + $point2['y']) / 2;
//   return $y;
// };
// function getMidpoint($point1, $point2)
// {
// return [ 'x' => getX($point1, $point2), 'y' => getY($point1, $point2) ];
// }

<?php

// =========== Task 20. Censoring a line ==============
// function makeCensored(string $text, array $stopWords)
// {
//     $words = explode(' ', $text);
//     $result = [];
//     foreach ($words as $word) {
//         $result[] = in_array($word, $stopWords) ? '$#%!' : $word;
//     }
//     return implode(' ', $result);
// }

// =========== Task 21. Counting of unique elements of two arrays ==============
// function getSameCount(array $first, array $second)
// {
//     $unique1 = array_unique($first);
//     $unique2 = array_unique($second);
//     $intersection = array_intersect($unique1, $unique2);
//     return count($intersection);
// }

// =========== Task 22. Sorting array with bubble method ==============
// function bubbleSort($array)
// {
//     $num = count($array);
//     do {
//         $swapped = false;
//         for ($i = 0; $i < $num - 1; $i++) {
//             if ($array[$i] > $array[$i + 1]) {
//                 $temp = $array[$i];
//                 $array[$i] = $array[$i + 1];
//                 $array[$i + 1] = $temp;
//                 $swapped = true;
//             }
//         }
//         $num--;
//     } while ($swapped);
//     return $array;
// }

// =========== Task 23. Happy ticket ==============
// function isHappy (string $num)
// {
//     $trim = strlen($num)/2;
//     $partOne = array_sum(str_split(substr($num, 0, $trim)));
//     $partTwo = array_sum(str_split(substr($num, $trim)));
//     if ($partOne == $partTwo) {
//         return true;
//     }
//     else {
//         return false;
//     }
//     }

// =========== Task 24. Searching for intersections of sorted arrays ==============
// function getIntersectionOfSortedArray($arr1, $arr2) {
//     $result = [];
//     $i = 0;
//     $j = 0;
//     while ($i < count($arr1) && $j < count($arr2)) {
//         if ($arr1[$i] === $arr2[$j]) {
//             $result[] = $arr1[$i];
//             $i++;
//             $j++;
//         } elseif ($arr1[$i] > $arr2[$j]) {
//             $j++;
//         } else {
//             $i++;
//         }
//     }
//     return $result;
// }

// =========== Task 25. Searching for nearest locations v.1 ==============
// function getDistance(array $point1, array $point2)
// {
//     [$x1, $y1] = $point1;
//     [$x2, $y2] = $point2;
//     $xs = $x2 - $x1;
//     $ys = $y2 - $y1;
//     return sqrt($xs ** 2 + $ys ** 2);
// }

// function getTheNearestLocation(array $locations, array $currentPoint)
// {
//     if (empty($locations)) {
//         return null;
//     }
//     [$nearestLocation] = $locations;
//     [, $nearestPoint] = $nearestLocation;
//     $lowestDistance = getDistance($currentPoint, $nearestPoint);
//     foreach ($locations as $location) {
//         [, $point] = $location;
//         $distance = getDistance($currentPoint, $point);
//         if ($distance < $lowestDistance) {
//             $lowestDistance = $distance;
//             $nearestLocation = $location;
//         }
//     }
//     return $nearestLocation;
// }


// =========== Task 26. Searching for nearest locations v.2 ==============
// function getDistance(array $point1, array $point2)
// {
//     [$x1, $y1] = $point1;
//     [$x2, $y2] = $point2;
//     $xs = $x2 - $x1;
//     $ys = $y2 - $y1;
//     return sqrt($xs ** 2 + $ys ** 2);
// }

// function getTheNearestLocation($locations, $point) {
//     if (empty($locations)) {
//         return null;
//     }
//     $nearestLocation = null;
//     $minDistance = PHP_INT_MAX;
//     foreach ($locations as $location) {
//         $locationPoint = $location[1];
//         $distance = getDistance($point, $locationPoint);    
//         if ($distance < $minDistance) {
//             $minDistance = $distance;
//             $nearestLocation = $location;
//         }
//     }
//     return $nearestLocation;
// }

// =========== Task 27. Array flattening ==============
// function flatten($array) {
//     $result = [];
//     foreach ($array as $item) {
//         if (is_array($item)) {
//             $result = [...$result, ...$item];
//         } else {
//             $result[] = $item;
//         }
//     }
//     return $result;
// }

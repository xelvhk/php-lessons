// <?php
// =========== Task 1. Trimming function ==============
// function truncate($text,$count) {
//     $res = substr($text,0,$count)."...";
//     return $res;
// }

// =========== Task 2. Leap year detection function ==============
//function isLeapYear($year) {
//    return $year % 400 == 0 || ($year % 100 != 0 && $year % 4 == 0);
//}

// =========== Task 3. URL normalizing function ==============
// function normalizeUrl($url) {
//     if (strpos($url, 'http://') === 0) {
//         $domain = substr($url, 7);
//     } elseif (strpos($url, 'https://') === 0) {
//         $domain = substr($url, 8);
//     } else {
//         $domain = $url;
//     }
//     return "https://{$domain}";
// }

// =========== Task 4. Simple calculator ==============
// function calculate($op,$num1,$num2) {
//     switch ($op){
//         case '+':
//             return $num1 + $num2;
//         case '-':
//             return $num1 - $num2;
//         case '/':
//             return $num1 / $num2;
//         case '*':
//             return $num1 * $num2;
//         default:
//             return null;
//     }
// }

// =========== Task 5. Checking arguments for substr function ==============
// function isArgumentsForSubstrCorrect($str,$index,$length) {
//     if ($index < 0 || $index >= strlen($str))
//     {
//         return false;
//         }
//     elseif ($length < 0 || $length + $index > strlen($str))
//     {
//         return false;
//     }
//     else {
//         return true;
//     }
// }

// =========== Task 6. Сase inversion ==============
// function invertCase($text) {
//     $result = '';
//     for ($i = 0; $i < mb_strlen($text); $i += 1)
//     {
//         $temp = mb_substr($text,$i,1);
//         if ($temp === mb_strtoupper($temp)){
//             $result = $result.mb_strtolower($temp);
//         }
//         else {
//             $result = $result.mb_strtoupper($temp);
//         }   
//     } 
//     return $result;
// }

// =========== Task 7. Timestamp format ==============
// function getCustomDate($time)
// {
//  $fdate = date('d/m/Y', $time);
//  return $fdate;
// }

// =========== Task 8. Palindrom check function ==============
// function isPalindrome(string $word) {
//     $lastIndex = mb_strlen($word) - 1;
//     $middleIndex = $lastIndex / 2;
//     for ($i = 0; $i < $middleIndex; $i++) {
//         $symbol = mb_substr($word, $i, 1);
//         $mirroredSymbol = mb_substr($word, $lastIndex - $i, 1);
//         if ($symbol !== $mirroredSymbol) {
//             return false;
//         }
//     }
//     return true;
// }

// =========== Task 9. Vowel check function ==============
// namespace App\Symbols;
// function isVowel($char)
// {
//     $vowels = 'aeiouy';
//     return str_contains($vowels, strtolower($char));
// }
// namespace App\Solution;
// use function \App\Symbols\isVowel;
// function countVowels($text)
// {
//     $count = 0;
//  for ($i = 0; $i < mb_strlen($text); $i++){
//     if (isVowel($text[$i])){
//         $count +=1;
//     };}
// return $count;
// }

// =========== Task 10. Number flip function ==============
// function reverse (int $num) 
// {
//     if ($num > 0){
//         $temp = strrev(strval($num));
//     }
//     elseif ($num === 0) {
//         $temp = 0;
//     }
//     else {
//         $temp = "-".strrev(strval($num));
//     }
//     return intval($temp);
// }

// =========== Task 11. Sum of binary digits ==============
// function binarySum (string $num1, string $num2)
// {
//     $sum = bindec($num1) + bindec($num2);
//     return decbin($sum);
// }

// =========== Task 12. Removing, changing and reset array values ==============
// function apply(array $items, string $operationName, int $index = null, $value = null): array
// {
// $result = $items;
//     switch ($operationName) 
// {
//         case 'reset':
//             $result = [];
//             break;
//         case 'change':
//             $result[$index] = $value;
//             break;
//         case 'remove':
//             unset($result[$index]);
//             break;
//     }
// return $result;
  
// =========== Task 13. Array item index check with ternary operator ==============
// function get(array $arr, int $index, $default = null)
// {
//     return array_key_exists($index, $arr) ? $arr[$index] : $default;
// }

// =========== Task 14. Adding prefix to array items ==============
// function addPrefix($arr, $pref)
// {
//     for ($i = 0; $i < count($arr); $i++)
//     {
//         $arr[$i] = $pref . " " . $arr[$i];
//     }
//     return $arr;
// }

// =========== Task 15. Swapping array items ==============
// function swap($arr, $index)
// {
//     if (array_key_exists($index, $arr) && array_key_exists($index - 1, $arr) && array_key_exists($index + 1, $arr)) {
//         $temp = $arr[$index - 1];
//         $arr[$index - 1] = $arr[$index + 1];
//         $arr[$index + 1] = $temp;
//     }
//     return $arr;
// }

// =========== Task 16. Checking the sequence of numbers in an array ==============
// function isContinuousSequence($numbers)
// {
//     if (count($numbers) <= 1) {
//         return false;
//     }
//     $start = $numbers[0];
//     foreach ($numbers as $num) {
//         if ($num !== $start) {
//             return false;
//         }
//         $start++;
//     }
//     return true;
// }

// =========== Task 17. Сhecking for closing parentheses ==============
// function isBalanced($str)
// {
//     $openBracket = 0;
//     for ($i = 0; $i < strlen($str); $i++) {
//         if ($str[$i] == '(') {
//             $openBracket++;
//         } elseif ($str[$i] == ')') {
//             if ($openBracket == 0) {
//                 return false;
//             }
//             $openBracket--;
//         }
//     }
//     return $openBracket == 0;
// }

// =========== Task 18. Getting total amount from array ==============
// function getTotalAmount ($values, $currency)
// {
//     $sum = 0;
//     foreach($values as $value)
//     {   
//         list($cur, $amount) = explode(' ', $value);
//         if ($cur == $currency)
//         {
//             $sum += $amount;
//         }
//     }
//     return $sum;
// }

// =========== Task 19. Formatting html code from array ==============
// function buildDefinitionList($definitions)
// {
//     $parts = [];
//     if (empty($definitions)) {
//         return '';
//     }
//     foreach ($definitions as $item) {
//         $parts[] = "<dt>{$item[0]}</dt><dd>{$item[1]}</dd>";
//     }
//     $code = implode('', $parts);
//     return "<dl>{$code}</dl>";
// }

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

// =========== Task 25. Searching for nearest locations ==============
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

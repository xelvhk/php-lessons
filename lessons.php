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

// =========== Task 8. Vowel check function ==============
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

// =========== Task 9. Number flip function ==============
// function reverse (int $num) 
{
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

// =========== Task 10. Sum of binary digits ==============
// function binarySum (string $num1, string $num2)
{
//     $sum = bindec($num1) + bindec($num2);
//     return decbin($sum);
// }

// =========== Task 11. Removing, changing and reset array values ==============
// function apply(array $items, string $operationName, int $index = null, $value = null): array {
// $result = $items;
//     switch ($operationName) 
{
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
// =========== Task 11. Array item index check with ternary operator ==============

// function get(array $arr, int $index, $default = null)
// {
//     return array_key_exists($index, $arr) ? $arr[$index] : $default;
// }

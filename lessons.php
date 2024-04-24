// <?php
// =========== Task 1. Trimming function ==============
// function truncate($text,$count)
// {
//     $res = substr($text,0,$count)."...";
//     return $res;
// }

// =========== Task 2. Leap year detection function ==============
//function isLeapYear($year)
//{
//    return $year % 400 == 0 || ($year % 100 != 0 && $year % 4 == 0);
//}

// =========== Task 3. URL normalizing function ==============
// function normalizeUrl($url)
// {
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
// function calculate($op,$num1,$num2)
// {
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
// function isArgumentsForSubstrCorrect($str,$index,$length)
// {
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
// function invertCase($text)
// {
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
// function isPalindrome(string $word)
// {
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

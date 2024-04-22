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

<?php
// =========== Task 9. Vowel check function ==============
namespace App\Symbols;
function isVowel($char) {
    $vowels = 'aeiouy';
    return str_contains($vowels, strtolower($char));
}

namespace App\Solution;
use function \App\Symbols\isVowel;
function countVowels($text) {
    $count = 0;
 for ($i = 0; $i < mb_strlen($text); $i++) {
    if (isVowel($text[$i])) {
        $count +=1;
    };
}
return $count;
}

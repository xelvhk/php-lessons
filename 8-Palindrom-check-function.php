=========== Task 8. Palindrom check function ==============
function isPalindrome(string $word) {
    $lastIndex = mb_strlen($word) - 1;
    $middleIndex = $lastIndex / 2;
    for ($i = 0; $i < $middleIndex; $i++) {
        $symbol = mb_substr($word, $i, 1);
        $mirroredSymbol = mb_substr($word, $lastIndex - $i, 1);
        if ($symbol !== $mirroredSymbol) {
            return false;
        }
    }
    return true;
}

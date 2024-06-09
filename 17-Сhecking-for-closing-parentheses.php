<?php

// =========== Task 17. Сhecking for closing parentheses ==============
function isBalanced($str)
{
    $openBracket = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == '(') {
            $openBracket++;
        } elseif ($str[$i] == ')') {
            if ($openBracket == 0) {
                return false;
            }
            $openBracket--;
        }
    }
    return $openBracket == 0;
}

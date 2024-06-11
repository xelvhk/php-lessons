<?php
// =========== Task 11. Sum of binary digits ==============
function binarySum (string $num1, string $num2) {
    $sum = bindec($num1) + bindec($num2);
    return decbin($sum);
}

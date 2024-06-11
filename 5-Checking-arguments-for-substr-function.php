<?php
//=========== Task 5. Checking arguments for substr function ==============
function isArgumentsForSubstrCorrect($str,$index,$length) {
    if ($index < 0 || $index >= strlen($str)){
        return false;
        }
    elseif ($length < 0 || $length + $index > strlen($str)) {
        return false;
    }
    else {
        return true;
    }
}

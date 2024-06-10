<?php

// =========== Task 18. Getting total amount from array ==============
function getTotalAmount ($values, $currency)
{
    $sum = 0;
    foreach($values as $value)
    {   
        list($cur, $amount) = explode(' ', $value);
        if ($cur == $currency)
        {
            $sum += $amount;
        }
    }
    return $sum;
}

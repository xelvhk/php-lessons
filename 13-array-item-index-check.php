<?php

// =========== Task 13. Array item index check with ternary operator ==============
function get(array $arr, int $index, $default = null)
{
  return array_key_exists($index, $arr) ? $arr[$index] : $default;
}

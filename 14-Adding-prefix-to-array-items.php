<?php

// =========== Task 14. Adding prefix to array items ==============
function addPrefix($arr, $pref)
{
  for ($i = 0; $i < count($arr); $i++)
  {
    $arr[$i] = $pref . " " . $arr[$i];
  }
  return $arr;
}

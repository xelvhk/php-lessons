<?php
// Task 1. Trimming function
function truncate($text,$count)
{
    $res = substr($text,0,$count)."...";
    return $res;
}

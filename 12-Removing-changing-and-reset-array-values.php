<?php
=========== Task 12. Removing, changing and reset array values ==============
function apply(array $items, string $operationName, int $index = null, $value = null): array
{
$result = $items;
    switch ($operationName) 
{
        case 'reset':
            $result = [];
            break;
        case 'change':
            $result[$index] = $value;
            break;
        case 'remove':
            unset($result[$index]);
            break;
    }
return $result;

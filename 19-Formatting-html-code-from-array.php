<?php

=========== Task 19. Formatting html code from array ==============
function buildDefinitionList($definitions)
{
    $parts = [];
    if (empty($definitions)) {
        return '';
    }
    foreach ($definitions as $item) {
        $parts[] = "<dt>{$item[0]}</dt><dd>{$item[1]}</dd>";
    }
    $code = implode('', $parts);
    return "<dl>{$code}</dl>";
}

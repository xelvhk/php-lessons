<?php

//Version 1
$check1 = get(['hello' => 'world'], 'hello');
if ($check1 !== 'world') {
    throw new Exception('Тест 1 не пройден');
}

$check2 = get([], 'hello', 'kitty');
if ($check2 !== 'kitty') {
    throw new Exception('Тест 2 не пройден');
}

$check3 = get(['hello' => 'world'], 'hello', 'kitty');
if ($check3 !== 'world') {
    throw new Exception('Тест 3 не пройден');
}
//Version 2
// if (get(['key' => 'value'], 'key') !== 'value') {
//     throw new \Exception('Boom!');
// }

// if (get([], 'key', 'default') !== 'default') {
//     throw new \Exception('Boom!');
// }

// if (get(['key' => 'value'], 'key', 'default') !== 'value') {
//     throw new \Exception('Boom!');
// }

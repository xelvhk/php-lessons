<?php

namespace App\Tests;

use Webmozart\Assert\Assert;

use function App\Implementations\take;

$functionName = getenv('FUNCTION_VERSION');

require_once __DIR__ . "/../implementations/take.{$functionName}.php";

assert(take([], 2) === [], 'Тест 1 не пройден');

assert(take([1, 2, 3]) === [1], 'Тест 2 не пройден');

assert(take([1, 2, 3], 2) === [1, 2], 'Тест 3 не пройден');

assert(take([4, 3], 9) === [4, 3], 'Тест 4 не пройден');

echo "Все тесты пройдены успешно";

<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

use function App\Implementations\without;

class TestSolution extends TestCase
{
    public function testWithout()
    {
        $this->assertEquals([], without([], [3]));
        $this->assertEquals([3, 9], without([3, 8, 9, 8, 10], [8, 10]));
    }
}

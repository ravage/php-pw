<?php

use PHPUnit\Framework\TestCase;
require 'fill-and-count.php';

class FillCountTest extends TestCase
{
    public function testEmpty()
    {
        $this->assertTrue(empty(countValues()));
    }

    public function testCountOne()
    {
        $this->assertSame([3 => 1], countValues([3]));
    }

    public function testCountMultiple()
    {
        $this->assertSame([
            3   => 3,
            10  => 2,
            20  => 1,
            1   => 1,
            -5  => 1
        ], countValues([3, 10, 20, 1, -5, 3, 10, 3]));
    }

    public function testCountDigitsAndWords()
    {
        $this->assertSame(
            [
                10      => 2,
                'PW'    => 2,
                'PHP'   => 1,
                1       => 1
            ],
            countValues([10, 'PW', 'PHP', 1, 10, 'PW'])
        );
    }
}

<?php

require 'fill-and-sum.php';
use PHPUnit\Framework\TestCase;

class FillAndSumTest extends TestCase
{
    public function testSumEmpty()
    {
        $values = fill(0);
        $this->assertSame(0, sum($values));
    }

    public function testSumOne()
    {
        $values = fill(1);
        $this->assertSame($values[0], sum($values));
    }

    public function testSumMultiple()
    {
        $values = fill(3);
        $this->assertSame($values[0] + $values[1] + $values[2], sum($values));
    }
}

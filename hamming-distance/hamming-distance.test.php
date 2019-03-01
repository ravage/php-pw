<?php

require 'hamming-distance.php';

class HammingDistanceTest extends PHPUnit\Framework\TestCase
{
    public function testNoDistanceBetweenSameValues()
    {
        $this->assertSame(0, hammingDistance('A', 'A'));
    }

    public function testNoDistanceBetweenMultipleEqualValues()
    {
        $this->assertSame(0, hammingDistance('ABCDEF', 'ABCDEF'));
    }

    public function testCountsDistanceForSingleDifferentValues()
    {
        $this->assertSame(1, hammingDistance('AB', 'AC'));
    }

    public function testCountsDistanceNotMindingOrder()
    {
        $this->assertSame(2, hammingDistance('AB', 'BA'));
    }

    public function testCountsDistanceBigStrings()
    {
        $this->assertSame(3, hammingDistance('ABCDEFGHIJK', 'ABZDEOGHWJK'));
    }

    public function testThrowExceptionWhenDifferentLenghts()
    {
        $this->expectException(InvalidArgumentException::class);
        hammingDistance('abcdef', 'abcdefg');
    }
}

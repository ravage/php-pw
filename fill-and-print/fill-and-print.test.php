<?php

require 'fill-and-print.php';
use PHPUnit\Framework\TestCase;

class FillAndPrintTest extends TestCase
{
    public function testPrintEmpty()
    {
        $values = fill(0);
        $this->assertSame('', display($values));
    }

    public function testPrintOne()
    {
        $values = fill(1);
        $this->assertEquals($values[0], display($values));
    }

    public function testPrintMultiple()
    {
        $values = fill(3);
        $this->assertSame("$values[0], $values[1], $values[2]", display($values));
    }
}

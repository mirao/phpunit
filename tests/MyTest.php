<?php
use PHPUnit\Framework\TestCase;

class MyTest extends TestCase
{
    public function testSame()
    {
        $this->assertSame('2222', 2222);
    }

    public function testThatOnePlusOneIsTwo()
    {
        $this->assertEquals(3, 1 + 2);
    }
}
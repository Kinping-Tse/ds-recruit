<?php

use PHPUnit\Framework\TestCase;
use Src\MyGreeter;

class MyGreeterTest extends TestCase
{
    private MyGreeter $greeter;

    public function setUp(): void
    {
        $this->greeter = new MyGreeter();
    }

    public function test_init()
    {
        $this->assertInstanceOf(
            MyGreeter::class,
            $this->greeter
        );
    }

    public function test_greeting()
    {
        $this->assertTrue(
            strlen($this->greeter->greeting()) > 0
        );
    }

    /**
     * 测试输出Good morning
     */
    public function test_greeting_morning()
    {
        $hourList = [6, 7, 8, 9, 10, 11];

        foreach ($hourList as $hour) {
            $this->assertEquals(
                'Good morning', $this->greeter->greeting($hour)
            );
        }
    }

    /**
     * 测试输出Good afternoon
     */
    public function test_greeting_afternoon()
    {
        $hourList = [12, 13, 14, 15, 16, 17];

        foreach ($hourList as $hour) {
            $this->assertEquals(
                'Good afternoon', $this->greeter->greeting($hour)
            );
        }
    }

    /**
     * 测试输出Good evening
     */
    public function test_greeting_evening()
    {
        $hourList = [18, 19, 20, 21, 22, 23, 0, 1, 2, 3, 4, 5];

        foreach ($hourList as $hour) {
            $this->assertEquals(
                'Good evening', $this->greeter->greeting($hour)
            );
        }
    }
}

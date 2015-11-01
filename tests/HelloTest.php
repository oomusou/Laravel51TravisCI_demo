<?php

use App\Services\Hello;

class HelloTest extends TestCase
{
    /**
     * 待測物件
     *
     * @var Hello
     */
    protected $target;

    public function testSay()
    {
        // Arrange
        $this->target = new Hello();
        $expected = "Hello World";

        // Act
        $actual = $this->target->say();

        // Assert
        $this->assertEquals($expected, $actual);
    }
}

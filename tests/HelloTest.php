<?php

use App\Services\Hello;

class HelloTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */

    /**
     * @var Hello
     */
    protected $target;

    public function testSay()
    {
//        $this->visit('/')
//             ->see('Laravel 5');

        // Arrange
        $this->target = new Hello();
        $expected = "Hello World";

        // Act
        $actual = $this->target->say();

        // Assert
        $this->assertEquals($expected, $actual);
    }
}

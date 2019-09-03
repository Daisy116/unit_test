<?php
require "Math.php";

use PHPUnit\Framework\TestCase;
class MathTest extends TestCase
{
    // public function testsum()
    // {
    //     $this -> assertEquals(55,Math::sum(1,10));
    //     $this -> assertEquals(5050,Math::sum(1,100));
    // }

	    // 利用PHPUnit @dataProvider annotation來引用自訂的DataProvider
	    /**
	     *  @dataProvider sumDataProvider
	     */

    public function testsum($expected, $min, $max)
    {
        $this -> assertEquals($expected,Math::sum($min,$max));
    }
    public function sumDataProvider()
    {
        return array(
            array(55,1,10),
            array(5050,1,100),
            );
    }



    // public function testFailure()
    // {
    //     $this->assertEquals(1, 0);
    // }

    // public function testFailure2()
    // {
    //     $this->assertEquals('bar', 'baz');
    // }

    // public function testFailure3()
    // {
    //     $this->assertEquals("foo\nbar\nbaz\n", "foo\nbah\nbaz\n");
    // }

    // public function testFailure4()
    // {
    //     $this->assertEquals("foo\nbar\nbaz\n", "foo\nbah\nbaz\n");
    // }


    public function testPushAndPop() 
    { 
        $stack = []; 
        $this->assertEquals(0, count($stack)); 
        array_push($stack, 'foo'); 
        $this->assertEquals('foo', $stack[count($stack)-1]); 
        $this->assertEquals(1, count($stack)); 
        $this->assertEquals('foo', array_pop($stack)); 
        $this->assertEquals(0, count($stack)); 
    }
}
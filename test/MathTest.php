<?php

class MathTest extends \PHPUnit\Framework\TestCase
{
    public function testAdd(){
        $this->assertEquals(7,\Ylamalem\DevEst\Math::add(3,4));
    }

}
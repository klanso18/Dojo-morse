<?php

namespace App;

use PHPUnit\Framework\TestCase;

class MorseTest extends TestCase
{
    public function testMorse()
    {
        $morse = new Morse();
        $this->assertEquals('W', $morse->convertToLetters('.--'));
        $this->assertEquals('WILD', $morse->convertToLetters('.-- .. .-.. -..'));
        $this->assertEquals('WILD CODE SCHOOL', $morse->convertToLetters('.-- .. .-.. -..   -.-. --- -.. .   ... -.-. .... --- --- .-..'));
    }
}

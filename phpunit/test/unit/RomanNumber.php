<?php
/**
 * Created by PhpStorm.
 * User: viva
 * Date: 5/2/18
 * Time: 9:29 AM
 */
require_once 'RomanNumberConvert.php';
use PHPUnit\Framework\TestCase;

class RomanNumber extends TestCase
{
    private $converter;

    protected function setup()
    {
        $this->converter = new RomanNumberConvert();
    }

    public function arrayConver()
    {
        return [
            ['I', 1],
            ['II', 2],
            ['III', 3],
            ['IV', 4],
            ['V',5],
            ['VI', 6],
            ['VII', 7],
            ['IX', 9],
            ['X', 10],
            ['XI', 11],
        ];
    }
    public function testConversion($expectedValue, $inputValue){
        $actualValue =$this->converter->convert($inputValue);
        $this->assertEquals($expectedValue,$actualValue);
    }
}
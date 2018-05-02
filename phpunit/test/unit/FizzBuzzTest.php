<?php
/**
 * Created by PhpStorm.
 * User: viva
 * Date: 4/27/18
 * Time: 3:36 PM
 */
require_once 'FizzBuzz.php';
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testIs_Show_Fizz()
    {
        $fizz = new FizzBuzz ();
        $this->assertEquals($fizz->showFizz(), 'Fizz');
    }

    public function testIs_Show_Buzz()
    {
        $buzz = new FizzBuzz();
        $this->assertEquals($buzz->showBuzz(), 'Buzz');
    }

    public function testCheck_To_Show_Fizz()
    {
        $fizz = new FizzBuzz();
        $this->assertEquals($fizz->check_To_Show_Fizz(9), 'Fizz');
    }
}
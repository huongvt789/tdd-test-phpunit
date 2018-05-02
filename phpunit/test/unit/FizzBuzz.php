<?php
/**
 * Created by PhpStorm.
 * User: viva
 * Date: 4/27/18
 * Time: 3:51 PM
 */
class FizzBuzz {
    function showFizz(){
        return "Fizz";
    }
    function showBuzz(){
        return "Buzz";
    }
    function check_To_Show_Fizz($giatri){
        if($giatri %3==0){
            return $this->showFizz();
        }
    }
}
<?php

class fizzbuzzTest extends \PHPUnit\Framework\TestCase{

    public function test_number(){
        $fizzbuzz = new App\FizzBuzz;
        $this->assertEquals(1, $fizzbuzz->check_fizzbuzz(1));
        $this->assertEquals(23, $fizzbuzz->check_fizzbuzz(23));
    }
    public function test_fizz(){ 
        $fizzbuzz = new App\FizzBuzz;
        $this->assertEquals("Fizz", $fizzbuzz->check_fizzbuzz(3));
        $this->assertEquals("Fizz", $fizzbuzz->check_fizzbuzz(18));
    }
    public function test_buzz(){
        $fizzbuzz = new App\FizzBuzz;
        $this->assertEquals("Buzz", $fizzbuzz->check_fizzbuzz(5));
        $this->assertEquals("Buzz", $fizzbuzz->check_fizzbuzz(35));
    }
    public function test_fizzbuzz(){
        $fizzbuzz = new App\FizzBuzz;
        $this->assertEquals("FizzBuzz", $fizzbuzz->check_fizzbuzz(15));
        $this->assertEquals("FizzBuzz", $fizzbuzz->check_fizzbuzz(45));
    }
}

?>
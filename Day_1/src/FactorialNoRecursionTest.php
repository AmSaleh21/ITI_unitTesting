<?php

  use PHPUnit\Framework\TestCase;

  include("factorial.php");

  class FactorialNoRecursionTest extends TestCase
  {
    public function testFactorialZero(){
      $this->assertEquals(1, factorialNoRecursion(0), "Factorial 0 should return one");
    }
    public function testFactorialOne(){
      $this->assertEquals(1, factorialNoRecursion(1), "Factorial 1 should return one");
    }
    public function testFactorialFive(){
      $this->assertEquals(120, factorialNoRecursion(5), "Factorial 5 should return 120");
    }
    public function testFactorialRandom_4To20(){
      $random = rand(4, 20);
      $value = factorialNoRecursion($random);
      $this->assertEquals($value, factorialNoRecursion($random), "Factorial $random should return $value");
    }
    public function testFactorialMinusThreeIsNull(){
      $this->assertEquals(null, factorialNoRecursion(-3), "Factorial -3 should return null");
    }
    public function testFactorialOnePointFiveNoDouble(){
      $this->assertEquals(null, factorialNoRecursion(1.5), "Factorial 1.5 should return null");
    }
    public function testFactorialFalseNoValue(){
      $this->assertEquals(null, factorialNoRecursion(false), "Factorial false should return null");
    }
    public function testFactorialStringNotAccepted(){
      $this->assertEquals(null, factorialNoRecursion("abc"), "Factorial <string> should return null");
    }
  }
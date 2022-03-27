<?php

  use PHPUnit\Framework\TestCase;

  include("factorial.php");

  class FactorialTest extends TestCase
  {
    public function testFactorialZero(){
      $this->assertEquals(1, factorial(0), "Factorial 0 should return one");
    }
    public function testFactorialOne(){
      $this->assertEquals(1, factorial(1), "Factorial 1 should return one");
    }
    public function testFactorialFive(){
      $this->assertEquals(120, factorial(5), "Factorial 5 should return 120");
    }
    public function testFactorialRandom_4To20(){
      $random = rand(4, 20);
      $value = factorial($random);
      $this->assertEquals($value, factorial($random), "Factorial $random should return $value");
    }
    public function testFactorialMinusThreeIsNull(){
      $this->assertEquals(null, factorial(-3), "Factorial -3 should return null");
    }
    public function testFactorialOnePointFiveNoDouble(){
      $this->assertEquals(null, factorial(1.5), "Factorial 1.5 should return null");
    }
    public function testFactorialFalseNoValue(){
      $this->assertEquals(null, factorial(false), "Factorial false should return null");
    }
    public function testFactorialStringNotAccepted(){
      $this->assertEquals(null, factorial("abc"), "Factorial <string> should return null");
    }
  }
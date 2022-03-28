<?php

use PHPUnit\Framework\TestCase;

include_once('User.php');

class UserTest extends TestCase
{
    private static $user;

    public static function setUpBeforeClass() : void
    {
        self::$user = new User('ams', "ams@mail.me");
    }

    public function testGetUserNameValidString()
    {
        $this->assertTrue(
            is_string(self::$user->getName())
        );
    }

    public function testGetEmailValidEmailRegex()
    {
        if(filter_var(self::$user->getEmail(), FILTER_VALIDATE_EMAIL)){
            $validate = true;
        }else{
            $validate = false;
        }
        $this->assertTrue($validate);
    }

    public function testSetInsertValidName()
    {
        $this->assertEquals(
            'Samy', self::$user->setName('Samy'), "name not correctly set"
        );
    }

    public function testSetInsertValidEmail()
    {
        if (filter_var(self::$user->getEmail(), FILTER_VALIDATE_EMAIL)) {
            $validate = true;
        } else {
            $validate = false;
        }
        $this->assertTrue($validate);
    }

    public function testSetInsertInvalidName()
    {
        $this->assertEquals(
            null, self::$user->setName(123), "name must be a string"
        );
    }

    public function testSetInsertInvalidEmail()
    {
        $this->assertEquals(
            null, self::$user->setEmail('samy'), "email is invalid format"
        );
    }
}

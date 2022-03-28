<?php

class User {
    private $name;
    private $email;

    function __construct($name, $email){
        $this->name = $name;
        $this->email = $email;
    } 

    public function setName($name){
        if(is_string($name) && !empty($name)){
            $this->name = $name;
            return $name;
        }
        return null;
    }

    public function setEmail($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
            return $email;
        }
        return null;
    }
    
    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }

}
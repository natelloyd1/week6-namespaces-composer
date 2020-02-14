<?php

namespace App; 

//1 

class Hello {

    public function hello($name)
    {
        return "Hello {$name}";
    }
};

//2

class Person {

    private $firstname;
    private $secondname;

    public function __construct($first, $second)
    {
        $this->firstname = $first;
        $this->secondname = $second;
    }

    public function fullName()
    {
    return "{$this->firstname} {$this->secondname}"; 
    }

    public function sayHelloTo($person)
    {
        return "Hello {$person->fullName()}";
    }
};


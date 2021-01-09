<?php

/**
* Class that encapsulates a Person.
* 
* User: mark
* Date: 9/3/16
* Time: 12:23 PM
*/
class Person
{
    // Properties
    private $name;
    
        // constructor for creating new person
    public function __construct($name)
    {
        echo "Hello my name is " .$name . "<br>";
        $this->name = $name;
        $this->username = "shad";
        $this->password = "password";
    }
    
    // methods - what a person can do
    
    public function walk()
    {
        echo "I am walking...." . "<br>";
    }
    
    public function formalGreeting()
    {
        echo "Good day to you sir. You can address me as " . $this->name . "<br>";
    }
    
    public function spanishGreeting()
    {
        echo "Hola. Me llamo " . $this->name . "<br>";
    }
    
    public function login($a, $b)
    {
    if ($a == $this->username && $b == $this->password)
    {
        echo $this->name . " has been logged in successfully<br>";
    }
    else
    {
        echo "Login failed. That doesn't seem quite right<br>";
    }
}

}
?>
<?php
/**
 * Class that encapsulates a Car.
 *
 * User: Mercedes Thigpen
 * Date: 12/19/20
 * Time: 11:30 AM
 */
class Car
{
    // Properties
    private $name;
    
    // constructor for creating new person
    public function __construct($name)
    {
        echo "Hello racer! This is race car... " .$name . "<br>";
        $this->name = $name;
        $this->tires = 4;
        $this->pressure = 32;
        $this->engine = 1;
        $this->speed = 60;
    }
    
    // methods - what a car can do
    
    public function checkTires()
    {
        echo "Tire check... I have " .$this->tires. " tires" . "<br>";
    }
    
    public function engineCheck()
    {
        echo "This car has  " . $this->engine ." engine" . "<br>";
    }
    
    public function checkPressure()
    {
        echo "The tire pressure is  " . $this->pressure . " psi" . "<br>";
    }
    
    public function startEngine($a, $b)
    {
        if ($a == $this->tires && $b >= $this->pressure)
        {
            echo $this->name . " Engine has been started-- VROOM!!!<br>";
        }
        else
        {
            echo "This engine has stopped<br>";
        }
    }
    
   
    public function restartEngine($a, $b)
    {
        if ($a == $this->tires && $b >= $this->pressure)
        {
            echo $this->name . " Engine has been restarted-- VROOM!!!<br>";
        }
        else
        {
            echo "This engine has stopped again<br>";
        }
    }
    
    public function mph($c)
    {
        if ($c >= $this->speed)
        {
            echo $this->name . " is too FAST!!!<br>";
        }
        else if ($c < 1)
        {
            echo $this->name . " is too SLOW!!!<br>";
        }
        else 
        {
        echo $this->name . " is cruising at " . $c . " mph" ."<br>";
        }
    }
    
}
?>
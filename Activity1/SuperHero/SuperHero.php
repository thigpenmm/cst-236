<?php
/**
 * Class that encapsulates a SuperHero.
 *
 * User: Mercedes Thigpen
 * Date: 12/21/20
 * Time: 12:13 PM
 */
require_once 'Person.php';
class SuperHero extends Person
{
    // Properties
    private $hasCape;
    private $health;
    private $isDead;
    
    /**
     * @return number
     */
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * @param number $health
     */
    public function setHealth($health)
    {
        $this->health = $health;
    }

    public function __construct($name)
    {
        $this->name = $name;
        $this->health = 100;
        $this->isDead = FALSE;
        
    }
    
    public function isHeDead()
    {
        if ($this->isDead)
        {
            return "dead";
        }
        else 
        {
            return "alive";
        }
    }
    
    public function takeDamage($hitAgainstMe)
    {
       $this->health = $this->health - $hitAgainstMe;    
       if ($this->health <= 0)
       {
           $this->isDead = TRUE;
       }
    }
    
    public function attack($enemy)
    //pick a random value between 1 and 10 for damage
    //subtract that value for the enemy
    {
        $damage = rand(1,10);
        $enemy->takeDamage($damage);
        echo $this->name . " has attacked " . $enemy->name. " and caused " . $damage . " hit points against him <br>";
    }
    
}
<?php

class CreditCardService {
    private $owner = "";
    private $cvv = "";
    private $cardnumber = "";
    private $month = "";
    private $year = "";
    
    
    function __construct($owner, $cvv, $cardnumber, $month, $year){
        $this->owner = $owner;
        $this->cvv = $cvv;
        $this->cardnumber = $cardnumber;
        $this->month = $month;
        $this->year = $year;
    }
    
    public function authenticate(){
        
        if ($this->owner == "Mickey Mouse" && this-cvv == 123 && $this->cardnumber == "1111 1111 1111 1111" && $this->month == 01 && $this->year == 2021)
        return true;
        header('Location: checkout.html');
        
    }
}
   
   
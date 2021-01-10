<?php
require_once 'header.php';
require_once 'Autoloader.php';
class SecurityService{
    
    private $password = "";
    private $username = "";
    
    public function __construct($username, $password){
        $this->username = $username;
        $this->password = $password;
    }
    
    //authenticating login credentials
    public function authenticate(){
        if ($this->password == "" || $this->username==""){
            return FALSE;
        }
        if ($this->password == "secretpw" && $this->username=="Test"){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
}
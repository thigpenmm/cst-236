<?php
require_once 'Autoloader.php';

class UserBusinessService{
    

function searchByFirstname($n){
    
    $persons = Array();
    
    $service = new UserDataService();
    return $service->findByFirstName($n);
    
    return $persons;
}
}
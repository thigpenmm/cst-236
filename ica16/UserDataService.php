<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'Autoloader.php';
require_once 'Database.php';

class UserDataService{
    
    function findByFirstName($n){
        $db = new Database();
        $connection = $db->getConnect();
        $stmt = $connection->prepare("SELECT ID, FIRST_NAME, LAST_NAME FROM users WHERE FIRST_NAME LIKE ?");
        
        if (!$stmt){
            echo "Something wrong in the binding process. sql error?";
            exit;
        }
        
         /*bind parameters for markers */
        $like_n = "%" . $n . "%";
        $stmt->bind_param("s", $like_n);
        
        //execute query
        $stmt->execute();
        
        $stmt->store_result();
        
        $number_of_rows = $stmt->num_rows;
        echo "Number of rows fetched " . $number_of_rows;
       
        
        
        if (!$result){
            echo "assume the SQL statement has an error";
            return null;
            exit;
        }
        if($result->num_rows == 0){
            return null;
            exit;
        }
        
        // display results in an array
        else {
       $person_array = array();
       while ($person = $result->fetch_assoc()) {
           array_puch($person_array, $person);
       }
       return $person_array;
        }
    }
}


    
    

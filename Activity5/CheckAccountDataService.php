<?php
require_once 'Autoloader.php';


class CheckAccountDataService{
    
    private $conn;
    
    function __construct($conn){
        $this->$conn;
    }
    
    function getBalance(){
        
        // get a database connection
        //$db = new Database();
        //$conn = $db->getConnect();
        
        //run query to get balance
        $sql = "SELECT `BALANCE` FROM `CHECKING` ";
        $result =  $this->conn->query($sql);
        
        if ($result->num_rows == 0){
            
            //nothing found
            //$conn->close();
            return -1;
        }
        else{
            // return balance
            $row = $result->fetch_assoc();
            $balance = $row['BALANCE'];
           // $conn->close();
            return $balance;
        }
    }
    
    function updateBalance($balance){
        // get a database connection
       // $db = new Database();
        //$conn = $db->getConnect();
        
        //run query to get balance
        $sql = "UPDATE `CHECKING` SET BALANCE= $balance";
        $result =  $this->conn->query($sql);
        
        if ($result){           
            //update successful
            //$conn->close();
            return 1;
        }
        else{
            // update failed
            //$conn->close();
            return 0;
        }
    }
}
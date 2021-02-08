<?php
require_once 'Autoloader.php';

class Database{

    
   private $servername = "localhost";
   private $database = "ica17";
   private $username = "root";
   private $password = "root";
   private $port = "3307";
    
    // Create connection
   function getConnect(){
    $conn = mysqli_connect($this->servername, $this->username, $this->password, $this->database, $this->port);
    
    // Check connection
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
    
  
}
}
    ?>
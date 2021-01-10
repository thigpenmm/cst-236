<?php
require_once 'Autoloader.php';

class Database{

    
   private $servername = "localhost";
   private $database = "ica17";
   private $username = "root";
   private $password = "root";
    
    // Create connection
   function getConnect(){
    $conn = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
    
    // Check connection
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    echo "Connected Successfully";
    
  
}
}
    ?>
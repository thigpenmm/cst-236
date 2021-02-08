<?php
require_once 'Autoloader.php';
require_once 'Database.php';

class UserDataService {
    function findByFirstName($pattern){
        //creating a connection with the database
        $db = new Database();
        $conn = $db->getConnect();
        $sql =  "SELECT ID, FIRST_NAME, LAST_NAME FROM users WHERE `FIRST_NAME` LIKE '%$pattern%'";
        $result = $conn->query($sql);
        if($result->num_rows == 0){
            $conn->close();
            echo "nothing found";
            return null;
        }
        $index = 0;
        $users = array();
        while($row = $result->fetch_assoc()){
            $users[$index] = array($row['ID'], $row['FIRST_NAME'], $row['LAST_NAME']);
            ++$index;
        }
        
        $conn->close();
        
        //returning array of users
        return $users;
    }
  
}

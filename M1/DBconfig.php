<?php
// Logging into the database

define('dbservername', 'localhost');
define('dbusername', 'root');
define('dbpassword', 'root');
define('database', 'store');

// Create connection
function getConnect(){
    $link = mysqli_connect(dbservername, dbusername, dbpassword, database);
    
    // Check connection
    
    if ($link->connect_error) {
        die("Connection failed: " . $link->connect_error);
    }
    
    echo "Connected Successfully";
    
    
}

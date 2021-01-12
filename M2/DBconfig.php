<?php
// Logging into the database



// Create connection
function getConnect(){
    $conn = mysqli_connect("localhost", "root", "root", "store");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
        
    echo "Connected Successfully";
    
    
}

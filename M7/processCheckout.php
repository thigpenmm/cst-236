<?php
session_start();
require_once 'showTopMenu.php';
require 'DBconfig.php';
require 'Order.php';
require 'Cart.php';


if (isset($_SESSION['shopping_cart']) && (isset($_SESSION['username'])) ){
    $c = $_SESSION['shopping_cart'];
}
else{
    echo "No products or you are not logged in yet.<br>";
    exit;
}

//checking credit card
//require_once 'checkCredit.php';


// creating variables
$date = CURRENT_DATE();
$username = [$_SESSION['username']];
$total = $_POST["item_price"];

//starting a new session

require('DBconfig.php');
//inserts new data into database (orders)
$sql_statement = "INSERT INTO orders (`DATE`,`USERNAME`,`TOTAL`) VALUES ('$date', '$username','$total');";

if (mysqli_query($dbconn, $sql_statement)) {
    echo "Your order has been completed!<br><br>";
} else {
    echo "Error: " . $sql_statement . "<br>" . mysqli_error($dbconn);//error if connection fails
}


mysqli_close($dbconn);
?>


?>

    
    

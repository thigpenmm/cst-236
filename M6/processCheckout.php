<?php
require_once 'showTopMenu.php';
require 'DBconfig.php';
require 'OrderBusinessService.php';
require_once 'checkout.php';



if (isset($_SESSION['shopping_cart']) && (isset($_SESSION['username'])) ){
    $c = $_SESSION['shopping_cart'];
}
else{
    echo "No products or you are not logged in yet.<br>";
    exit;
}

//checking credit card
require_once 'checkCredit.php';


//connecting to database
$conn = mysqli_connect("localhost", "root", "root", "store", "3307");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$c = new Cart();
$items->getCartItems();
$total->getTotal_price();

$order = new Order(null, date("Y/m/d h:i:sa"), $_SESSION['username'], 2, $total);


$orderbs = new OrderBusinessService($conn);
$orderDatabs = new OrderDataService($conn);

$newOrderNumber = $orderbs->makeNew($order);


$newOrderNumber->checkOut();


?>

    
    

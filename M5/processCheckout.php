<?php
require_once 'showTopMenu.php';
require 'OrderBusinessService.php';
require_once 'checkout.php';
?>
<!DOCTYPE html>
<html>
<head>
<style>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="styles.css">
    
table {
border-collapse: collapse;
width: 100%;
color: darkCyan;
font-family: calibri;
font-size: 20px;
text-align: center;
}
th {
background-color: darkCyan;
color: white;
text-align: center;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>ID</th>
<th>ITEM_NO</th>
<th>PROD_DESC</th>
<th>PRICE</th>
<th>QUANTITY</th>

</tr>



<?php

if (isset($_SESSION['shopping_cart']) && (isset($_SESSION['username'])) ){
    $c = $_SESSION['shopping_cart'];
}
else{
    echo "No products or you are not logged in yet.<br>";
    exit;
}

//checking credit card
require_once 'checkCredit.php';

//$c = new Cart();
$items->getItems();
$total->getTotal_price();

$order = new Order(null, date("Y/m/d h:i:sa"), $_SESSION['username'], 2, $total);


$orderbs = new OrderBusinessService();


$newOrderNumber = $orderbs->makeNew($order);
?>

    
    

<?php
session_start ();
require 'cart.php';
require 'DBconfig.php';
require 'item.php';

// Save new order
mysqli_query($dbconn, 'insert into orders(name, datecreation, status, username)
values("New Order", "'.date('Y-m-d').'", 0, .$username');
$ordersid = mysqli_insert_id($dbconn);

// Save order details for new order
$cart = unserialize ( serialize ( $_SESSION ['shopping_cart'] ) );
for($i=0; $i<count($cart); $i++) {
    mysqli_query($dbconn, 'insert into ordersdetail(productid, ordersid, price, quantity)
values('.$cart[$i]->id.', '.$ordersid.','.$cart[$i]->price.', '.$cart[$i]->quantity.')');
}

// Clear all products in cart
unset($_SESSION['cart']);

?>
Thanks for buying products. Click <a href="searchCatalog.php">here</a> to continue buy product.
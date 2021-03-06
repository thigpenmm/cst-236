<?php
require_once 'Cart.php';
class OrderDataService{

    
    function createDetailsLine($order, $conn){
        //add order information to order details table
        
        $conn = mysqli_connect("localhost", "root", "root", "store", "3307");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $stmt = "INSERT INTO orderdetails (ORDERS_ID, PRODUCTS_ID, QUANTITY, CURRENTPRICE, CURRENTDESCRIPTION) VALUES (?,?,?,?,?)";
        if(!stmt){
            echo "something went wrong with the binding process, SQL error...";
            return -1;
        }
    $product_id = $orderDetails->getProduct_id();
    $quantity = $orderDetails->getQuantity();
    $price = $orderDetails->getCurrent_price();
    $description = $orderDetails->getCurrent_Description();
    
    $stmt->bind_param("iiids", $order_id, $product_id, $quantity, $current_price, $current_description);
    
    /*execute query*/
    $stmt->execute();
    
    //get results
    
    if ($stmt->affected_row > 0){
        //$conn->close();
        return $conn->insert_id;
    }
    else {
        // $conn->close();
        echo "nothing inserted into the database during new order.";
        return false;
    }
    
    
    function createnew($order){
        
        $conn = mysqli_connect("localhost", "root", "root", "store", "3307");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $stmt = "INSERT INTO ORDERS(DATE,USERNAME,TOTALPRICE) VALUES (?,?,?)";
    
    
    
    /* Bind paramerter for markers */
    
    $order_id = $order->getId();
    $order_date = $order->getDate();
    $user_id = $order->getUser();
    $order_total = $order->getTotal();
    
    $stmt->bind_param("sid", $order_date, $user_id, $order_total);
    
    /*execute query*/
    $stmt->execute();
    
    //get results
    
    if ($stmt->affected_row > 0){
        //$conn->close();
        return $conn->insert_id;
    }
    else {
       // $conn->close();
        echo "nothing inserted into the database during new order.";
        return false;
    }
    }
    }
}
    
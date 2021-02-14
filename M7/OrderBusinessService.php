<?php
require_once 'DBconfig.php';
require 'OrderDataService';

class OrderBusinessService{
    
    function makeNew($order, $conn){
        //accepts a new $order object. Ignores the id number, will auto-assign one in the db
        //returns id number for the last inserted record.
        
        $dbService = new OrderDataService();
        return $dbService->createNew($order, $conn);
    }
    
    function getAllOrders(){
        // $products = Array();
     
        $dbService = new OrderDataService();
        $orders = $dbService->getAllOrders();
        
        return $orders;
    }
    
    function checkOut($order, $cart){
        // creates a new line in the orders table.
        //creates multiple lines in the orders details table as an atomic transaction
        $conn = mysqli_connect("localhost", "root", "root", "store", "3307");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $conn->autocommit(FALSE);
        $conn->begin_transaction();
        
        $orderadd = $this->createnew($order);
        
        $orders1 = new OrderDataService($conn);
        $orderupdate = createnew($orders1);
        
       
        $ordersdetails = new OrderDataService($conn);
        $orderdetailsupdate = createDetailsLine($orders1);
        
        if ($orderupdate && $orderdetailsupdate){
            $conn->commit();
        }
        else{
            $conn->rollback();
            echo "error";
        }
        $conn->close();
        
    }
}
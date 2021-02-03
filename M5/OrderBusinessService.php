<?php
require_once 'DBconfig.php';

class OrderBusinessService{
    
    function makeNew($order, $dbconn){
        //accepts a new $order object. Ignores the id number, will auto-assign one in the db
        //returns id number for the last inserted record.
        
        $dbService = new OrderDataService();
        return $dbService->createNew($order, $dbconn);
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
        
    }
}
<?php
require_once 'Autoloader.php';

class BankBusinessService{
    

function getCheckingBalance() {
    
    $db = new Database();
    $conn = $db->getConnect();
    
    $checkingservice = new CheckAccountDataService($conn);
    $balance = $checkingservice->getBalance();
    
    $conn->close();
    return $balance;
}


    
function getSavingsBalance() {
    $db = new Database();
    $conn = $db->getConnect();
    
    $savingservice = new SavingsAccountDataService($conn);
    $balance = $savingservice->getBalance();
    
    return $balance;

}

function transaction($transfer){
    $db = new Database();
    $conn = $db->getConnect();
    
    $conn->autocommit(FALSE);
    $conn->begin_transaction();
    
    $checkingbalance = $this->getCheckingBalance();
    
    $checking = new CheckAccountDataService($conn);
    $okchecking = $checking->updateBalance($checkingbalance - $transfer);
    
    $savingsbalance = $this->getSavingsBalance();
    $savings = new SavingsAccountDataService($conn);
    $oksavings = $savings->updateBalance($savingsbalance + $transfer);
    
    if ($okchecking && $oksavings){
        $conn->commit();
    }
    else{
        $conn->rollback();
        echo "error";
    }
    $conn->close();
   
    
}
}
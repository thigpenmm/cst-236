<?php
require_once 'Autoloader.php';

//$checking = new CheckAccountDataService();
//$saving = new SavingsAccountDataService();

//$checkbalance = $checking->getBalance();
//$savingbalance = $saving->getBalance();

//echo "Current values: <br>";
//echo "Checking balance = " . $checkbalance . "<br>";
//echo "Saving balance = " . $savingbalance . "<br>";

//echo "Take 10 from checking and put it into savings<br>";
//$checking->updateBalance($checkbalance - 100);
//$saving->updateBalance($savingbalance + 100);

//$checkbalance = $checking->getBalance();
//$savingbalance = $saving->getBalance();

$bs = new BankBusinessService();

$checkingbalance = $bs->getCheckingBalance();
$savingsbalance= $bs->getSavingsBalance();

echo "Current values: <br>";
echo "Checking balance = " . $checkingbalance . "<br>";
echo "Saving balance = " . $savingsbalance . "<br>";

//transferring $100 between accounts
$bs->transaction(100);

$checkingbalance = $bs->getCheckingBalance();
$savingsbalance= $bs->getSavingsBalance();

echo "Current values: <br>";
echo "Checking balance = " . $checkingbalance . "<br>";
echo "Saving balance = " . $savingsbalance . "<br>";

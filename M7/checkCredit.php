<?php
require 'CreditCardService.php';

$owner = $_GET['owner'];
$cvv = $_GET['cvv'];
$cardnumber = $_GET['cardnumber'];
$month = $_GET['month'];
$year = $_GET['year'];

$ccservice = new CreditCardService($owner, $cvv, $cardnumber, $month, $year);
if ($ccservice->authenticate()){
    echo "<h5>authenticated!</h5>";
}
else{
    echo "<h5>Credit Card Failed</h5>";
    exit;
}
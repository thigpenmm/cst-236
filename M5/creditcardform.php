<?php 
session_start();
require_once 'showTopMenu.php';
require_once 'DBconfig.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment Information</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href=" styles.css">
</head>

<body>
<div class="creditCardForm">
<div class="heading" align= "center" >
<h1>Confirm Purchase</h1>
</div>
<div class="payment" align= "center" >
<form action= "processCheckout.php">
<div class="form-group owner">
<label for="owner">Owner</label>
<input type="text" class="form-control" id="owner">
</div>
<div class="form-group CVV" align= "center" >
<label for="cvv">CVV</label>
<input type="text" class="form-control" id="cvv">
</div>
<div class="form-group" id="card-number-field" align= "center" >
<label for="cardNumber">Card Number</label>
<input type="text" class="form-control" id="cardNumber">
</div>
<div class="form-group" id="expiration-date"align= "center" >
<label>Expiration Date</label>
<select>
<option value="01">January</option>
<option value="02">February </option>
<option value="03">March</option>
<option value="04">April</option>
<option value="05">May</option>
<option value="06">June</option>
<option value="07">July</option>
<option value="08">August</option>
<option value="09">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>
<select>
<option value="21"> 2021</option>
<option value="22"> 2022</option>
<option value="23"> 2023</option>
<option value="24"> 2024</option>
<option value="25"> 2025</option>
<option value="26"> 2026</option>
</select>
</div>
<div class="form-group" id="credit_cards"align= "center" >
<img src="visa.jpg" id="visa">
<img src="mastercard.jpg" id="mastercard">
<img src="amex.jpg" id="amex">
</div>
<div class="form-group" id="pay-now">
<button type="submit" class="btn btn-default" id="confirm-purchase">Confirm</button>
</div>
</form>
</div>
</div>
</body>
</html>
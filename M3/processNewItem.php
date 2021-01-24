<?php
session_start();
require_once 'showTopMenu.php';
?>
 <html>
</style>
<title> Add A Catalog Item </title>

</head>
<body>
<form method="POST" action = "searchCatalog.php">
  <div class="container">
    <h1>Add A Catalog Item</h1>
    
    <hr>
  Product No: <input type= "text" name="prodNo" value="<?php echo $prodNo;?>"></input><br><br>
  Product Desc: <input type="text" name="prodDesc" value="<?php echo $prodDesc;?>"></input><br><br>
  Product Price: <input type="text" name="price" value="<?php echo $price;?>"></input><br><br>
  Product Quantity: <input type="text" name="quantity" value="<?php echo $quantity;?>"></input><br><br>

      <button type="submit">Submit Changes</button>
    </div>
  
</form>
</body>


</html>
<?php 

if ($_SESSION ['Role'] != '1') {
    echo "You do not have permissions for this page. Please login as an administrator.";
    exit;
}

// creating variables
$prodNo = $_POST['prodNo'];
$prodDesc = $_POST['prodDesc'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

//starting a new session

require('DBconfig.php');
//inserts new data into database (items)
$sql_statement = "INSERT INTO `items` (`ID`,`ITEM_NO`,`PROD_DESC`,`PRICE`,`QUANTITY`) VALUES (NULL,'$prodNo', '$prodDesc','$price','$quantity');";

if (mysqli_query($dbconn, $sql_statement)) {
    echo "One item has been added to the catalog"."<br><br>";
} else {
    echo "Error: " . $sql_statement . "<br>" . mysqli_error($dbconn);//error if connection fails
}


mysqli_close($dbconn);
?>

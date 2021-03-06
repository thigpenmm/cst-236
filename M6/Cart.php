 <?php   
 session_start();
 require_once 'showTopMenu.php';
 require_once 'DBconfig.php';
 
 class Cart{
     private $cartItems = array();
     private $userID;
     private $total;
     
     public function __construct($userID, $cartItems, $total)
     {
         $this->cartItems = $cartItems;
         $this->userID = $userID;
         $this->total = $total;
         
     }
     
     
     public function getCount() {
         return count($this->cartItems);
     }
     
     function getCartItems($productOperations) {
         if ($this->getCount() == 0) {
             return;
         }
         
         $products = array();
         foreach ($this->cartItems as $item) {
             $products[] = $productOperations->getProductAsProduct($item->getProductID());
         }
         
         return $products;
     }
     
     function getItemCount($id) {
         
         foreach ($this->cartItems as $item) {
             if ($item->getProductID() == $id)
                 return $item->getQuantity();
         }
         
         return 0;
     }
     
     function getTotal_price(){
      return $total;
     }
    
     
 }
 
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="Cart.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="Cart.php"</script>';  
                }  
           }  
      }  
 }  
 

 ?> 
 <!DOCTYPE html>
<html>
<head>
<title>Shopping Cart</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<br />
<div class="container" style="width:700px;">
<h3 align="center">Shopping Cart</h3><br />
<?php
require_once 'DBconfig.php';
?>
 
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td>$ <?php echo $values["item_price"]; ?></td>  
                               <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td><a href="Cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">$ <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                           
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                      <h3><a href="creditcardform.php">Checkout</a></h3>
                </div>  
           </div>  
           <br />  
      </body>  
 </html>
    
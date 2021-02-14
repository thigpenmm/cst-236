<?php 
require_once 'showTopMenu.php';
require_once 'processOrdersReport.php';
//displaying table of orders for sales report
?>

<!DOCTYPE html>
<html>
<head>

<style>
table {
    border-collapse: collapse;
    width: 100%;
    color: darkCyan;
    font-family: calibri;
    font-size: 20px;
    text-align: center;
}
th {
    background-color: darkCyan;
    color: white;
    text-align: center;
}
tr:nth-child(even) {background-color: #f2f2f2}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}


</style>
<!-- Datatable plugin CSS file -->
    <link rel="stylesheet" href= 
"https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" /> 
  
<link rel= "stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css"/>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"/>

<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} ); 

</script>

<table>
<tr>
<th>ORDER ID</th>
<th>PRODUCT ID</th>
<th>QUANTITY</th>
<th>PRICE</th>
<th>PROD DESC</th>

</tr>

</head>

<?php 
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["ORDERS_ID"]. "</td><td>" . $row["PRODUCTS_ID"] . "</td><td>". $row["QUANTITY"] . "</td><td>"
        . $row["CURRENTPRICE"] . "</td><td>". $row["CURRENTDESCRIPTION"]. "</td></tr>";
    }
    echo "</table>";
} else{
    echo "No data found"; }
$conn->close();
?>

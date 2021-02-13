<?php
require_once 'DBconfig.php';


$query = $_GET['startdate'];
$query2 = $_GET['enddate'];
// gets value sent over search form
$conn = mysqli_connect("localhost", "root", "root", "store", "3307");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM orderdetails";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["ORDERS_ID"]. "</td><td>" . $row["PRODUCTS_ID"] . "</td><td>". $row["QUANTITY"] . "</td><td>"
            . $row["CURRENTPRICE"] . "</td><td>". $row["CURRENTDESCRIPTION"]. "</td></tr>";
    }
    echo json_encode($result);
} else{
    echo "No data found"; }
    $conn->close();

?>
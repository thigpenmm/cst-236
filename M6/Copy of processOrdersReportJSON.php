<?php
require_once 'DBconfig.php';
require_once 'ordersReportCreator.php';

$query = $_GET['startdate'];
$query2 = $_GET['enddate'];
// gets value sent over search form
$conn = mysqli_connect("localhost", "root", "root", "store", "3307");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM orders ";
$result = $conn->query($sql);

include 'displayOrdersReportTable.php';
?>
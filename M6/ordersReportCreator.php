<?php
session_start();
require_once 'showTopMenu.php';

?>

<!DOCTYPE html>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href= "styles.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <style type="text/css">
  body{ font: 14px sans-serif; text-align: center; }
  </style>


<title> Reports </title>
</head>
<body>
<div class="container">
<form method="POST" action = "processOrdersReport.php">
<div class="form-input">
<h1 style="color:gray;"> <br> Generate Product Report</h1>
<input type="date" name="startdate" />
</time>
</div>
<div class="form-input">
<input type="date" name="enddate"/>
</div>
<input type="submit" type="submit" value="Generate Report" class="btn-submit"/>
</form>
</div>
</body>
</html>


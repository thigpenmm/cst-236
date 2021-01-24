
<html>

<title> My Supply Store </title>
<head>
<link rel="stylesheet" type="text/css" href=" styles.css">
</head>

<body>

<div class="container">


<?php
//if the user doesn't match the session username, login again
if (!isset($_SESSION['username'])):?>

<span><a href="login.html">Login</a></span>
<hr>
<?php else:
//if the user does match the session username, welcome and menu options
?>

<span><h2> Welcome <?php echo $_SESSION['username']; ?> </h2> <a href = "logout.php">Logout</a></span> 
| <span> <a href="searchCatalog.php">Search Products</a></span> 
<?php endif; ?>

<?php
// if the user is an Admin, MyAdmin page is available
if ($_SESSION['Role'] == '1'):?>
| <span><a href = "processNewItem.php">Add a Product </a></span>| <span><a href = "showAdminPage.php">My Admin </a></span>
<hr>

<?php endif; ?>
</div>
</body>



</html>
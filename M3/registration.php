<html>
<head>
<style>
body {font-family: Calibri, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: lightCyan;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: darkCyan;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}


/* Float cancel and signup buttons and add an equal width */
.signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .signupbtn {
     width: 100%;
  }
}
</style>


</head>
<body>
<form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create new user account.</p>
    <hr>
    
    <label for="firstName"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="firstName">
    
    <label for="lastName"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lastName" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

 
    
    <p>Welcome to the Supply Store!</p>

    <div class="clearfix">
      <button type="submit" class="signupbtn">Sign Me Up!</button>
    </div>
  </div>
</form>
</body>


</html>


<?php
require_once 'DBconfig.php';

//creating an array of the new user data
print_r($_GET);


//creating variables from the form text fields
$firstName = $_GET['firstName'];
$lastName = $_GET['lastName'];
$username = $_GET['username'];
$email = $_GET['email'];
$password = $_GET['psw'];

echo "<br> New User Confirmation Page <br>";

// Check connection
if (!$dbconn) {
    die("<br> Connection failed: " . mysqli_connect_error()); //error message is connection fails
}
echo "New User created successfully";
echo "<br> Click <a href= 'login.html'>here</a> to return"."<br><br>";

//inserts new data into database (users)
$sql_statement = "INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `Admin`) VALUES (NULL, '$firstName', '$lastName', '$username', '$email', '$password', '0')";

if (mysqli_query($dbconn, $sql_statement)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql_statement . "<br>" . mysqli_error($dbconn);//error if connection fails
}

mysqli_close($dbconn);
?>


 
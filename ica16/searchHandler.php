<?php
require_once 'UserBusinessService.php';

//get the search term from the input form
$searchPhrase = $_GET['fname'];

// create an instance of the user business service class
$ubs = new UserBusinessService();

//find the results of the search
$persons = $ubs->searchByFirstname($searchPhrase);
?>
//displaying results
<h2>Search Results</h2>
<p> The names found: </p>

<?php 
if($persons){
    //displaying the results
    include ('displayAllUsers.php');
}
else{
    echo "No results found";
}
?>

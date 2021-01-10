<?php 
include_once 'header.php';

if(isset($_SESSION['principal'])== FALSE || $_SESSION['principal']== null || $_SESSION['principal']== FALSE){
    header("Location: login.html");
    
}
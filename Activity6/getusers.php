<?php
require_once 'UserBusinessService.php';
require 'Users.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$users = new UserBusinessService();
$list = $users->searchByFirstName("z");

echo json_encode($list);

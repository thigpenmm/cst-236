<?php
require_once 'User.php';

//validating a short password
//$pw = 'asdf';

//if(User::validatePassword($pw)) {
 //   echo "Password is long enough!<br>";
//}
//else{
 //   echo "Your password is too short!<br>";
//}

//validating a longer password
$pw2 = 'asdfhowengohehw';
if(User::validatePassword($pw2)) {
    echo "Password is long enough!<br>";
}
else{
    echo "Your password is too short!<br>";
}
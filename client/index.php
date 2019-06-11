<?php
include 'security/authentication.php';

// unset($_SESSION['hash']);

if(!isset($_SESSION['hash'])){
    header('Location:security/login.php');
}else{
    echo 'Hello';
}

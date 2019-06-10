<?php
include 'security/authentication.php';
include 'templates/header.php';
if(!isset($_SESSION['hash'])){
    //header('Location:security/authentication.php');
}
include 'templates/footer.php';
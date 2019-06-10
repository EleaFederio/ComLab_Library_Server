<?php
include 'security/authentication.php';

if(!isset($_SESSION['hash'])){
    header('Location:security/login.php');
}

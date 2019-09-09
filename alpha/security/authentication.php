<?php
include 'database.php';
session_start();
$db = new Database();
$usernameError = '';
$passwordError = '';

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    if(empty($username)){
        $usernameError = 'Username require';
    }
    if(empty($password)){
        $passwordError = 'Password require';
    }

    if(!empty($username) && !empty($password)){
        $query = "SELECT * FROM `alpha` WHERE `username` = '$username' AND `password` = '$password' ";
        $result = $db->connect()->query($query);
        if($row = $result->fetch_object()){
            $_SESSION['hash'] = md5(rand(00000,99999));
            header('location: ../index.php');
        }else{
            header('location: login.php?loginError=1');
        }
    }
}

if(isset($_GET['logout'])){
    if($_GET['logout'] == 1){
        unset($_SESSION['hash']);
        session_destroy();
        header('location: ../index.php');
    }
}

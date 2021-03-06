<?php
session_start();
require 'database.php';

$db = new Database();

if(isset($_POST['login'])){
    $studentId = $_POST['studentId'];
    $password = md5($_POST['password']);
    $query = "SELECT * FROM `students` WHERE `studentId` = '$studentId' AND `appPassword` = '$password'";
    if($result = $db->connect()->query($query)){
        if($student = $result->fetch_object()){
            $_SESSION['studentId'] = $student->studentId;
            $_SESSION['hash'] = rand(00000000, 99999999);
        }
        header('location: ../index.php');
    }
}

if(isset($_POST['studentIdInput']) && isset($_POST['studentPinInput'])){
    $studentId = $_POST['studentIdInput'];
    $studentPin = $_POST['studentPinInput'];
    if(empty($studentId)){
        echo 'ID Require';
    }
    if(empty($studentPin)){
        echo 'PIN require';
    }
    if(!empty($studentId) && !empty($studentPin)){
        $query = "SELECT * FROM `students` WHERE `studentId` = '$studentId' AND `hash` = '$studentPin' ";
        echo $query;
        $result = $db->connect()->query($query);
        if($result->num_rows){
            while ($row = $result->fetch_object()){
                echo $row->firstName;
                $_SESSION['id'] = $row->id;
                $_SESSION['stagehash'] = md5(rand(00000000, 99999999));
                header('location: create_account.php');
            }
        }else{
            header('location: register.php?erro=200');
        }
    }
}

if(isset($_POST['createTag'])){
    $studentId = $_POST['studentId'];
    $firstname = $_POST['studentFirstName'];
    $lastname = $_POST['studentLastName'];
    $middlename = $_POST['middleName'];
    $password = $_POST['studentPassword'];
    $confirmPassword = $_POST['studentConfirmPassword'];
    $phone = $_POST['studentPhoneNumber'];

    $createAccountError = array();

    if($studentId == ""){
        array_push($createAccountError, 'Student ID require!');
    }if($firstname == ""){
        array_push($createAccountError, 'Firstname require!');
    }if($lastname == ""){
        array_push($createAccountError, 'Lastname require!');
    }if($password == ""){
        array_push($createAccountError, 'Password require!');
    }else{
        if(strlen($password) < 8){
            array_push($createAccountError, 'Password Should be least than 8 characters!');
        }else{
            if($confirmPassword == ""){
                array_push($createAccountError, 'Confirm Password Require!');
            }
            if($password != $confirmPassword){
                array_push($createAccountError, 'Confirm Password mismatch!');
            }
        }
    }
    if($phone == ""){
        array_push($createAccountError, 'Phone Number require!');
    }
    
    if(empty($createAccountError)){
        $password = md5($password);
        $query = "UPDATE `students` SET `firstName`= '$firstname',`lastName`= '$lastname', `phoneNumber`= '$phone' ,`appPassword`= '$password' WHERE `studentId` = '$studentId' ";
        if($db->connect()->query($query)){
            header('location: login.php?registered=1');
        }
    }

}else{
    
}

if(isset($_GET['logout'])){
    unset($_SESSION['studentId']);
    unset($_SESSION['stagehash']);
    session_destroy();
    header('location: ../index.php');
}
<?php
session_start();
require 'database.php';

$db = new Database();

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
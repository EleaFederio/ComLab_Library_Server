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
        $result = $db->connect()->query($query);
        echo '<pre>';
        var_dump($result);
        echo '</pre>';
    }

}
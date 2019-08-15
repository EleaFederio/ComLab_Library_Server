<?php
include '../templates/header.php';
include '../security/authentication.php';
if(!isset($_SESSION['hash'])){
    header('Location:../security/login.php');
}

$studentId = $_SESSION['studentId'];

$query = "SELECT * FROM `students` WHERE `studentId` = '$studentId'";
if($result = $db->connect()->query($query)){
    if($student = $result->fetch_object()){
        $fullname = $student->firstName.' '.$student->lastName;
        $course = $student->course;
        $year = $student->year;
        $id = $student->studentId;
        $phone = $student->phoneNumber;
    }
}

?>

<!-- <script src="https://kit.fontawesome.com/dec3cdcb69.js"></script> -->
<link rel="stylesheet" href="../design/account.css" >

<div class="profile-card">
    <div class="image-container">
        <img src="../pics/pic1.jpg" alt="" style="width: 100%">
        <div class="title">
            <h1><?php echo $fullname ?></h1>
        </div>
    </div>
    <div class="main-container">
        <p><i class="fas fa-briefcase fa-lg info"></i><?php echo $course.' '.$year ?></p>
        <p><i class="fas fa-map-marker-alt fa-lg info"></i><?php echo $id ?></p>
        <p><i class="fas fa-phone-square-alt fa-lg info"></i><?php echo $phone ?></p>
        <hr>
        <p><b><i class="fas fa-fingerprint fa-lg info"></i></b></p>
        <center><button class="btn btn-primary"><i class="fas fa-sign-out-alt"></i> LOGOUT</button></center>
    </div>
</div>


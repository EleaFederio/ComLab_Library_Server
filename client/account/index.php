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
            <center><h1><?php echo $fullname ?></h1></center>
        </div>
    </div>
    <div class="main-container">
        <p><i class="fas fa-briefcase fa-lg info"></i><?php echo $course.' '.$year ?></p>
        <p><i class="fas fa-map-marker-alt fa-lg info"></i><?php echo $id ?></p>
        <p><i class="fas fa-phone-square-alt fa-lg info"></i><?php echo $phone ?></p>
        <hr>
        <p><b><i class="fas fa-fingerprint fa-lg info"></i></b></p>
        <p><p>Library Activity</p></p>
        <div class="skill-bar">
            <div class="progress-bar" style="width:80%">80%</div>
        </div>
        <center><a class="btn btn-danger" href="../security/authentication.php?logout=0"><i class="fas fa-sign-out-alt"></i> LOGOUT</a></center>
    </div>
</div>


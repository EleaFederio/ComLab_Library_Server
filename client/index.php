<?php
include 'security/authentication.php';

// unset($_SESSION['hash']);

if(!isset($_SESSION['hash'])){
    header('Location:security/login.php');
}else{
    
}
include 'templates/header.php';
echo $_SESSION['hash'];
$studentId = $_SESSION['studentId'];

    $query = "SELECT * FROM `students` WHERE `studentId` = '$studentId'";
    if($result = $db->connect()->query($query)){
        if($student = $result->fetch_object()){
            $_SESSION['fullname'] = $student->firstName.' '.$student->lastName;
        }
    }

?>
<!-- ************************************************************************* -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <header class="showcase">
        <div class="content"></div>
        <img src="pics/bugcTransparentLogo.png" class="logo" alt="BUGC LIBRARY">
        <div class="title">
            WELCOME TO BICOL UNIVERSITY GUBAT CAMPUS LIBRARY!
            <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, aperiam?</div>
        </div>
    </header>

    <section class="services">
        <div class="container grid-3"></div>
    </section>
</body>
</html>







<!-- ************************************************************************** -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems, options);
    });

    // Or with jQuery

    $(document).ready(function(){
        $('.sidenav').sidenav();
    });
</script>
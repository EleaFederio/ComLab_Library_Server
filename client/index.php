<?php
include 'security/authentication.php';

// unset($_SESSION['hash']);

if(!isset($_SESSION['hash'])){
    header('Location:security/login.php');
}else{
    
}
include 'templates/header.php';
// echo $_SESSION['hash'];
$studentId = $_SESSION['studentId'];

    $query = "SELECT * FROM `students` WHERE `studentId` = '$studentId'";
    if($result = $db->connect()->query($query)){
        if($student = $result->fetch_object()){
            $_SESSION['fullname'] = $student->firstName.' '.$student->lastName;
        }
    }

?>
<!-- ************************************************************************* -->
<link rel="stylesheet" href="design/home.css">
<div id="home">
    <div class="landing-text">
        <div class="text">
            <h1>LIBRARY</h1>
            <h3>Bicol University Gubat Campus</h3>
        </div>
        <br>
        <!-- <a href="#" class="btn btn-default btn-lg">Get Started</a> -->
    </div>
</div>
<p class="lead text-justify">
Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo magnam provident quis libero qui? Iusto rerum ratione nesciunt minus consequuntur incidunt minima nostrum similique possimus adipisci alias nemo quae iste labore accusantium modi tempora iure, magnam, exercitationem vero id! Porro exercitationem voluptatibus dolorem voluptatem corrupti quibusdam voluptatum mollitia rem a quam dolore enim, deleniti alias accusamus in amet optio! Aliquam dignissimos sint voluptatibus eos natus magnam distinctio suscipit accusamus unde hic alias mollitia tempora nobis, est similique nesciunt? Iusto ullam dicta, quidem quia delectus eum unde doloribus enim quae? Unde facere placeat cum dignissimos saepe porro aliquam ad quia quaerat.
</p>





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
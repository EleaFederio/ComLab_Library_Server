<?php
include 'security/authentication.php';

if(!isset($_SESSION['hash'])){
    header('Location:security/login.php');
}else{
    
}
include 'templates/header.php';

// echo $_SESSION['hash'];
    // $studentId = $_SESSION['studentId'];

    if(isset($_SESSION['studentId'])){
        $studentId = $_SESSION['studentId'];
        $query = "SELECT * FROM `students` WHERE `studentId` = '$studentId'";
        if($result = $db->connect()->query($query)){
            if($student = $result->fetch_object()){
                $_SESSION['fullname'] = $student->firstName.' '.$student->lastName;
            }
        }
    }

?>
<!-- ************************************************************************* -->
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<link rel="stylesheet" href="design/home.css">

<style>
    p{
        padding-top: 0%;
        padding-bottom: 0%;
    }
</style>

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

<section style="margin-bottom: 5%">
        <center><h4 style="margin-top: 1%;color:#000; margin-bottom: 2%">BULS VISION</h4></center>
        <p class="lead text-justify" style="margin-bottom:0%">
            To be a world-class library that offers a dynamic and modern academic library services and programs responsive to the varied demands of Bicol University utilizing effective and efficient delivery system and communication technology. 
        </p>
</section>

<section style="margin-bottom: 5%">
        <center><h4 style="margin-top: 1%;color:#000; margin-bottom: 2%">BULS MISSION</h4></center>
        <p class="lead text-justify" style="margin-bottom:0%">
            To support the vision, mission and goals of Bicol University by providing quality resources, services and information access through application of multi-media system in information storage, delivery and retrival.
        </p>
</section>

<section style="margin-bottom: 5%">
        <center><h4 style="margin-top: 1%;color:#000; margin-bottom: 2%">PERFORMANCE PLEDGE</h4></center>
        <p class="lead text-justify" style="margin-bottom:0%">
            We, the employees of the Bicol University Library System pledge and commit to deliver quality public service as promised in the Citizen's Charter: Specifically, we will,
        </p>
        <p class="lead text-center">
            Serve with integrety, dedication and commitment.
            Be promt and timely.
            Display procedures, fees and charges.
            Be consistent in applying rules.
            Provide feedback mechanism.
            Be polite and courteous.
            Demonstrate-sensitivity and appropriate behavior
            and professionalism.
            Wear proper uniform and identification.
            Be available during office hours.
            Respond to complaints.
            Provide comfortable waiting area.
            Treat everyone equally.
        </p>
</section>





<!-- ************************************************************************** -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
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

<?php
    include 'templates/footer.php';
?>
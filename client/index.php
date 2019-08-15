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
<nav>
    <div class="nav-wrapper teal lighten-2">
    <a href="#" class="brand-logo"><?php echo $_SESSION['fullname'] ?></a>
    
    </div>
</nav>

<input type="file" accept="image/*" />
<br><br><br><br><br>
<input type="file" accept="image/*" capture="camera" />
<!-- 7a7 -->







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
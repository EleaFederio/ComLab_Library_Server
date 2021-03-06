<?php 
include 'authentication.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <title>Document</title>
</head>
<body>
    
    <section class="container-fluid">
        <section class="row justify-content-center" style="margin-top: 15%">
            <section class="col-12 col-sm-6 col-md-3">
                <form class="form-container" action="login.php" method="POST">
                    <h3 class="text-center">LOGIN FORM</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Student ID" required>
                    <div class="invalid-feedback">
                        First name require!
                    </div>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <p style="color: red"><?php echo $passwordError ?></p>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="login">Submit</button>
            </section>
        </section>
    </section>

    <?php
        if(isset($_GET['loginError'])){
            if($_GET['loginError'] == 1){
                echo "<script>
                        Swal.fire({
                        imageUrl: 'https://img.icons8.com/officel/80/000000/decision.png',
                        title: 'Login Error!!',
                        text: 'Wrong Username or Password!',
                        });
                    </script>";
            }
        }
    ?>

    

</body>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
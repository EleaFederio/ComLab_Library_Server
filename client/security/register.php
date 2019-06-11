<?php
  include 'authentication.php';
  if(isset($_GET['erro'])){
    if($_GET['erro'] == 200){
      echo "<script>alert('Wrong Username or Password!')</script>";
    }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Own Design -->
    <link rel="stylesheet" href="../lib/css/auth.css">
    
    <title>Hello, world!</title>
  </head>
  <body>
      
    <section class="container-fluid">
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-3">
                <form class="form-container" action="register.php" method="POST">
                    <h3 class="text-center">REGISTER FORM</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="studentIdInput" aria-describedby="emailHelp" placeholder="Student ID" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="studentPinInput" placeholder="PIN" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                <p class="text-center">or</p>
                <center><a style="color:blue" href="login.php">Login</a></center>
                </form>
            </section>
        </section>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
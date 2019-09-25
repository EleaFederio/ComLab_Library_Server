<?php
  include 'authentication.php';

  if(isset($_SESSION['id']) && isset($_SESSION['stagehash']))

$oneStudentSelect = $db->connect()->query("SELECT * FROM `students` WHERE `id` = {$_SESSION['id']}");
if($selectedStudent = $oneStudentSelect->fetch_object()){
    $studentFirstName = $selectedStudent->firstName;
    $studentLastName = $selectedStudent->lastName;
    $middleName = $selectedStudent->middleName;
    $phone = $selectedStudent->phoneNumber;
    $email = $selectedStudent->email;
    $studentId = $selectedStudent->studentId;
    $brgy = $selectedStudent->brgy_street;
    $town = $selectedStudent->town;
    $province = $selectedStudent->province;
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
    <link rel="stylesheet" href="../lib/css/reg.css">
    
    <title>Create Account</title>
  </head>
  <body>
      
    <!-- <section class="container-fluid">
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-3">
                <form class="form-container" action="create_account.php" method="POST">
                    <h3 class="text-center">CREATE ACCOUNT</h3>
                    <input type="hidden" name="createTag" value="true" >
                <div class="form-group">
                    <input type="text" class="form-control" name="studentFirstName" placeholder="First Name" value="<?php echo $studentFirstName ?>" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="studentLastName" placeholder="Last Name" value="<?php echo $studentLastName ?>" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="studentId" placeholder="Student ID" value="<?php echo $studentId ?>" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="studentPassword" placeholder="Password" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="studentConfirmPassword" placeholder="Confirm Password" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="studentPhoneNumber" placeholder="Phone Number" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                <p class="text-center">or</p>
                <center><a style="color:blue" href="login.php">Login</a></center>
                </form>
            </section>
        </section>
    </section> -->

    <div class="container">
        <form class="needs-validation" novalidate>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationCustom01">First name</label>
                    <input type="text" class="form-control" id="validationCustom01" name="studentFirstName" placeholder="<?php echo $studentFirstName ?>" value="<?php echo $studentFirstName ?>" required>
                    <div class="invalid-feedback">
                        First name require!
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Last name</label>
                    <input type="text" class="form-control" id="validationCustom02" name="studentLastName" placeholder="<?php echo $studentLastName ?>" value="<?php echo $studentLastName ?>" required>
                    <div class="invalid-feedback">
                        Last name require!
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustomUsername">Middle Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="validationCustomUsername" name="studentMiddleName" placeholder="<?php echo $middleName ?>" value="<?php echo $middleName ?>" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback"> 
                            Please choose a username.
                        </div>
                    </div>
                </div>
            </div>


            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="validationDefault01">Phone Number</label>
                    <input type="number" class="form-control" id="validationDefault01" minlength="11"  maxlength="11" placeholder="09---------" value="<?php echo $phone ?>" required>
                    <div class="invalid-feedback">
                        Phone number require!
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationDefault02">Student ID</label>
                    <input type="text" class="form-control" id="validationDefault02" placeholder="2019-GC-000000" value="<?php echo $studentId ?>"  minlength="14" maxlength="14" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationDefaultUsername">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend2">@</span>
                        </div>
                        <input type="email" class="form-control" id="validationDefaultUsername" placeholder="myemail@mail.com" value="<?php echo $email ?>" aria-describedby="inputGroupPrepend2" required>
                        <div class="invalid-feedback">
                            Email require!
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom03">Barangay/Street</label>
                    <input type="text" class="form-control" id="validationCustom03" placeholder="Pinontingan" value="<?php echo $brgy ?>" required>
                    <div class="invalid-feedback">
                        Please provide barangay/street
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom04">Town</label>
                    <input type="text" class="form-control" id="validationCustom04" placeholder="Gubat" value="<?php echo $town ?>" required>
                    <div class="invalid-feedback">
                        Please provide a Town
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom05">Province</label>
                    <input type="text" class="form-control" id="validationCustom05" placeholder="Sorsogon" value="<?php echo $province ?>" required>
                    <div class="invalid-feedback">
                        Please provide a Province
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
    </div>
    <br><br><br><br>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
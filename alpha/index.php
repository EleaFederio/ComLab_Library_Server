<?php
include 'security/authentication.php';
include 'templates/header.php';
if(!isset($_SESSION['hash'])){
    header('Location:security/login.php');
}
?>

<?php

if(isset($_GET['loginError'])){
  if($_GET['loginError'] == 1){
      echo "<script>
              Swal.fire({
              type: 'error',
              title: 'Login Error!!',
              text: 'Wrong Username or Password!',
              });
          </script>";
  }
}

?>

<div class="card-header text-center">
    BICOL UNIVERSITY GUBAT CAMPUS
</div>
<h1 class="h1 text-center library-name">LIBRARY</h1>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="resource/libpic1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="resource/libpic2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="resource/libpic3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container">

  <!-- Library Data -->
  <div class="row" style="margin-top: 3%">
    <div class="col-md-4 library-data">
      <i class="fas fa-book-reader fa-4x fa-color" style="display: table; margin: auto"></i><br>
      <h5 class="text-center">Students Inside the Library</h5>
      <h1 class="text-center" id="demo">0</h1>
    </div>
    <div class="col-md-4 library-data">
      <i class="fas fa-users fa-4x" style="display: table; margin: auto"></i><br>
      <h5 class="text-center">Students who Enter Library</h5>
      <?php
        $counter = 0;
        $db = new Database();
        $result = $db->connect()->query("SELECT * FROM `library_log` WHERE `date` = CURRENT_DATE()");
        while($row = $result->fetch_object()){
          $counter ++;
        }
      ?>
      <h1 class="text-center"><?php echo $counter ?></h1>
    </div>
    <div class="col-md-4 library-data">
      <i class="fas fa-book fa-4x" style="display: table; margin: auto"></i><br>
      <h5 class="text-center">Borrow book request</h5>
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
</div>

<script>

function loadDoc() {
  setInterval(function(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("demo").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "library_active_students.php", true);
    xhttp.send();
  }, 1000);
}

</script>

<?php
include 'templates/footer.php';
?>

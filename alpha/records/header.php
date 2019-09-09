<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="lib/home.css">
  <link rel="stylesheet" href="../lib/bootstrap-datepicker.css">
  <script type="text/javascript" src="../lib/bootstrap-datepicker.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <!-- <a class="navbar-brand" href="#"><img src="../records/bugcTransparentLogo.png" alt="" width="30"></a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../books">Books</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../students">Students</a>
          </li>
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Records
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="create_id.php" target="_blank">Generate Student Id</a>
              <a class="dropdown-item" href="ibrecord.php" >DTR</a>
              <a class="dropdown-item" href="#">Evaluation</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>

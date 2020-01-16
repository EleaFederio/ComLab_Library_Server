<?php
include 'header.php';
include '../security/database.php';

$db = new Database();

$query = "SELECT * FROM `borrows` JOIN `students` ON `borrows`.`student` = `students`.`studentId` JOIN `books` ON `borrows`.`book` = `books`.`book_id`";
$result = $db->connect()->query($query);



?>



<div class="container" style="margin-top:5%">

    <ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link" href="#">borrow Request</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Approved Books</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Returned Books</a>
    </li>
    </ul>

    <br>
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">Student Name</th>
        <th scope="col">Book</th>
        <th scope="col">Author</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <?php
        while($request = $result->fetch_object()){
    ?>
    <tbody>
        <tr>
        <td><?php echo $request->firstName.' '.$request->lastName; ?></td>
        <td><?php echo $request->title; ?></td>
        <td><?php echo $request->author; ?></td>
        <td><a href="" class="btn btn-primary"><i class="fas fa-check"></i></a>  <a href="" class="btn btn-danger"><i class="fas fa-times"></i></a></td>
        </tr>
    </tbody>
    <?php
        }
    ?>
    </table>
</div>
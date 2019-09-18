<?php
include '../security/database.php';
$db = new Database();

if(isset($_GET['bookid']) && isset($_GET['studentId'])){
    $book = $_GET['bookid'];
    $student = $_GET['studentId'];
    $query = "INSERT INTO borrows (`book`, `student`) VALUES ('$book', '$student')";
    if($db->connect()->query($query)){
        header('location: index.php?borrow_request=1');
    }
}



?>
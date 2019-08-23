<?php
include '../security/database.php';

$db = new Database();
$id = $_GET['id'];

if(isset($_POST['title']) && isset($_POST['author']) && isset($_POST['publisher']) && isset($_POST['class_number']) && isset($_POST['year']) && isset($_POST['edition'])
    && isset($_POST['pages']) && isset($_POST['remarks']) && isset($_POST['copies'])){
        $title = $_POST['title'];
        $author = $_POST['author'];
        $publisher = $_POST['publisher'];
        $className = $_POST['class_number'];
        $year = $_POST['year'];
        $edition = $_POST['edition'];
        $pages = $_POST['pages'];
        $copies = $_POST['copies'];
        $remarks = $_POST['remarks'];

        $query = "UPDATE `books` SET `copies`=$copies,`title`='$title',`call_number`='$className',`author`='$author',`edition`='$edition',`pages`='$pages',`year`=$year,`publisher`='$publisher',`remarks`='$remarks' WHERE `book_id` = $id";
        
        if( $db->connect()->query($query)){
            echo "<script>alert('Data Saved!')</script>";
            header('Location:index.php');
        }
}
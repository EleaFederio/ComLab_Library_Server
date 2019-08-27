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

        //get picture
        $file = $_FILES['book_image'];
        $fileName = $_FILES['book_image']['name'];
        $fileTmpName = $_FILES['book_image']['tmp_name'];
        $fileSize = $_FILES['book_image']['size'];
        $fileError = $_FILES['book_image']['error'];
        $fileType = $_FILES['book_image']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png');

        if(in_array($fileActualExt, $allowed)){
            if($fileError === 0){
                if($fileSize < 100000000){
                    $newBookPicName = uniqid('', true).".".$fileActualExt;
                    $fileDestination = 'bookpics/'.$newBookPicName;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header('Location: index.php');
                }else{
                    echo 'Picture is to big';
                }
            }else{
                echo 'Upload Error!';
            }
        }else{
            echo 'You cannot upload this file';
        }

        $query = "UPDATE `books` SET `copies`=$copies,`title`='$title',`call_number`='$className',`author`='$author',`edition`='$edition',`pages`='$pages',`year`=$year,`publisher`='$publisher',`remarks`='$remarks', `book_pic` = '$fileDestination' WHERE `book_id` = $id";
        
        if( $db->connect()->query($query)){
            echo "<script>alert('Data Saved!')</script>";
            header('Location:index.php');
        }
}
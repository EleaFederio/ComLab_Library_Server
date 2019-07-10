<?php
$bookId = $_GET['id'];
include 'header.php';
    include '../security/database.php';
    $booktTitle = '';
    $bookAuthur = '';
    $bookPublisher = '';
    $bookCallNumber = '';
    $bookEdition = '';
    $bookPages = '';
    $bookYear = '';
    $bookCopies = '';
    $bookRemarks = '';

    $db = new Database(); 

    $selectBook = "SELECT * FROM `books` WHERE `book_id` = $bookId";
    $result = $db->connect()->query($selectBook);
    if ($book = $result->fetch_object()){
        $booktTitle = $book->title;
        $bookAuthur =$book->author;
        $bookPublisher = $book->publisher;
        $bookCallNumber = $book->call_number;
        $bookEdition = $book->edition;
        $bookCopies = $book->copies;
        $bookPages = $book->pages;
        $bookYear = $book->year;
        $bookRemarks = $book->remarks;
    }

    ?>

<h1 style="background-color: #656168; color: white; padding: 1%"><?php echo $booktTitle ?></h1>
    <div class="container" style="background-color: #e1e4f3; padding: 1%">
        
        <h5><?php echo 'Author: '. $bookAuthur ?></h5>
        <h5><?php echo 'Publisher: '.$bookPublisher ?></h5>
        <h4><?php echo 'Class ID: '. '<b>'.$bookCallNumber .'</b>' ?></h4>

    </div>

    <div class="container" style="background-color: #f5f6f8;" class="col-md-3">
        <h6><?php echo 'Edition: '. '<b>'.$bookEdition .'</b>' ?></h6>
        <h6><?php echo 'Available Copies: '. '<b>'.$bookCopies .'</b>' ?></h6>
        <h6><?php echo 'Number of Pages: '. '<b>'.$bookPages .'</b>' ?></h6>
        <h6><?php echo 'Remark: '. '<b>'.$bookRemarks .'</b>' ?></h6>
    </div>
    
    </div>
<?php
include '../templates/footer.php';
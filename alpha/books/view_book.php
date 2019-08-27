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
        $bookImage = $book->book_pic;
    }

    ?>

    <link rel="stylesheet" href="../lib/view_book.css">

    <div class="container" style="margin-top: 5%">
        <div class="row">
            <div class="col-md-5">
            <div class="book-pic">
                <img src="<?php echo ($bookImage == '')? "bookpics/no_image_book.jpg": $bookImage?>" alt="" width="350">
            </div>
            </div>
            <div class="col-md-7">
            <p class="detail-title">Title</p>
            <h2 class="details-info"><?php echo $booktTitle ?></h2>
            <p class="detail-title">Author</p>
            <h6 class="details-info"><?php echo $bookAuthur ?></h6>
            <p class="detail-title">Publisher</p>
            <h6 class="details-info"><?php echo $bookPublisher ?></h6>
            <p class="detail-title">Call Number</p>
            <h3 class="details-info"><?php echo $bookCallNumber ?></h3>
            <p class="detail-title">Edition</p>
            <h6 class="details-info"><?php echo $bookEdition ?></h6>
            <p class="detail-title">Available Copies</p>
            <h6 class="details-info"><?php echo $bookCopies ?></h6>
            <p class="detail-title">Number of Pages</p>
            <h6 class="details-info"><?php echo $bookPages ?></h6>
            <p class="detail-title">Remarks</p>
            <h6 class="details-info"><?php echo $bookRemarks ?></h6>
            </div>
        </div>
    </div>
<?php
include '../templates/footer.php';
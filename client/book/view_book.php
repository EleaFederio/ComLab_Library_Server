<?php

$bookId = $_GET['id'];
include '../templates/header.php';
    include '../security/authentication.php';
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

    <style>
        .detail-title{
            margin-top: 5%; 
            margin-bottom: 0;
            background-color: #eee;
            width: 95%;
        }
        .detail-info{
            margin-bottom: 3%;
            margin-left: auto;
            margin-right: auto;
        }
        .book-pic{
            margin-bottom: 5%;
            margin-left: auto;
            margin-right: auto;
        }
        .nopad{
            padding-right: 0%;
            width: 100%;
        }
    </style>

    
        <div class="container" style="margin-top: 3%">
            <div class="row">
                <div class="col-md-5 nopad">
                <div class="book-pic">
                    <img src="<?php echo ($bookImage == '')? "../../book_images/no_image_book.jpg": "http://192.168.0.222/ComLab_Library_Server/alpha/books/".$bookImage?>" alt="" width="330">
                </div>
                </div>
                <div class="col-md-7 nopad " >
                <p class="detail-title">Title</p>
                <h2 class="details-info"><?php echo $booktTitle ?></h2>
                <p class="detail-title">Author</p>
                <h4 class="details-info"><?php echo $bookAuthur ?></h4>
                <p class="detail-title">Publisher</p>
                <h4 class="details-info"><?php echo $bookPublisher ?></h4>
                <p class="detail-title">Call Number</p>
                <h3 class="details-info"><?php echo $bookCallNumber ?></h3>
                <p class="detail-title">Edition</p>
                <h4 class="details-info"><?php echo $bookEdition ?></h4>
                <p class="detail-title">Available Copies</p>
                <h4 class="details-info"><?php echo $bookCopies ?></h4>
                <p class="detail-title">Number of Pages</p>
                <h4 class="details-info"><?php echo $bookPages ?></h4>
                <p class="detail-title">Remarks</p>
                <h4 class="details-info"><?php echo $bookRemarks ?></h4>
                </div>
            </div>

            <center><a href="book_manager.php?bookid=<?php echo $bookId ?>&studentId=<?php echo $_SESSION['studentId'] ?>" class="btn btn-primary" style="margin-top: 10%">Borrow this book</a></center>
        </div>
        <br><br><br><br>
        

        
    
<?php

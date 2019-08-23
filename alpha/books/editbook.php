<?php
include 'header.php';
include '../security/database.php';
$bookId = $_GET['id'];
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

<div class="container" style="margin-top: 5%">
    <form action="editthisbook.php?id=<?php echo $bookId?>" method="POST">
        <div class="row">
            <div class="col-md-5">
                <div class="book-pic">
                    <img src="../resource/noli me tangere.jpg" alt="" width="350">
                    <input type="file" value="upload picture">
                </div>
                </div>
                <div class="col-md-7">
                <div class="form-group col-md-6">
                <label>Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Book Title..." value="<?php echo $booktTitle ?>">
                </div>
                <div class="form-group col-md-6">
                    <label>Author</label>
                    <input type="text" class="form-control" name="author" placeholder="Author's Name..." value="<?php echo $bookAuthur ?>">
                </div>
                <div class="form-group col-md-10">
                    <label>Publisher</label>
                    <input type="text" class="form-control" name="publisher" placeholder="Publishers Name..." value="<?php echo $bookPublisher ?>">
                </div>
                <div class="form-group col-md-3">
                    <label>Class Number</label>
                    <input type="text" class="form-control" name="class_number" placeholder="Class Number here..." value="<?php echo $bookCallNumber ?>">
                </div>
                <div class="form-row col-md-10">
                    <div class="form-group col-md-2">
                    <label for="inputCity">Edition</label>
                    <input type="text" class="form-control" name="edition" placeholder="Edition" value="<?php echo $bookEdition ?>">
                    </div>
                    <div class="form-group col-md-2">
                    <label for="inputState">Pages</label>
                    <input type="text" class="form-control" name="pages" placeholder="Pages..." value="<?php echo $bookPages ?>">
                    </div>
                    <div class="form-group col-md-2">
                    <label for="inputState">Copies</label>
                    <input type="text" class="form-control" name="copies" placeholder="Copies..." value="<?php echo $bookCopies ?>">
                    </div>
                    <div class="form-group col-md-2">
                    <label for="inputZip">Year</label>
                    <input type="text" class="form-control" name="year" placeholder="Year..." value="<?php echo $bookYear ?>">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputZip">Remarks</label>
                    <input type="text" class="form-control" name="remarks" placeholder="Remarks..." value="<?php echo $bookRemarks ?>">
                    </div>
                </div>
                <div class="form-row col-md-10">
                    <input type="submit" class="btn btn-primary" value="Edit">
                </div>
            </div>
        </div>
    </form>
</div>

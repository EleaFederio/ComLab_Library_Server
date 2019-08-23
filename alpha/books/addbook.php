<?php
include 'header.php';
include_once 'savebook.php';
?>

<div class="container" style="margin-top: 5%">
    <form action="addbook.php" method="POST">
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
                    <input type="text" class="form-control" name="title" placeholder="Book Title...">
                </div>
                <div class="form-group col-md-6">
                    <label>Author</label>
                    <input type="text" class="form-control" name="author" placeholder="Author's Name...">
                </div>
                <div class="form-group col-md-10">
                    <label>Publisher</label>
                    <input type="text" class="form-control" name="publisher" placeholder="Publishers Name...">
                </div>
                <div class="form-group col-md-3">
                    <label>Class Number</label>
                    <input type="text" class="form-control" name="class_number" placeholder="Class Number here...">
                </div>
                <div class="form-row col-md-10">
                    <div class="form-group col-md-2">
                    <label for="inputCity">Edition</label>
                    <input type="text" class="form-control" name="edition" placeholder="Edition">
                    </div>
                    <div class="form-group col-md-2">
                    <label for="inputState">Pages</label>
                    <input type="text" class="form-control" name="pages" placeholder="Pages..." >
                    </div>
                    <div class="form-group col-md-2">
                    <label for="inputState">Copies</label>
                    <input type="text" class="form-control" name="copies" placeholder="Copies..." >
                    </div>
                    <div class="form-group col-md-2">
                    <label for="inputZip">Year</label>
                    <input type="text" class="form-control" name="year" placeholder="Year...">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputZip">Remarks</label>
                    <input type="text" class="form-control" name="remarks" placeholder="Remarks...">
                    </div>
                </div>
                <div class="form-row col-md-10">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </div>
        </div>
    </form>
</div>

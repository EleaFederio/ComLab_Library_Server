<?php
include 'header.php';
?>
<div class="container">
    <!-- <a class="btn btn-primary" href="addbook.php" style="margin-top: 1%">ADD BOOK</a> -->
    <!-- Button trigger modal -->
    <br><br>
<div class="row">
    <div class="col-md-6">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Add Books
        </button>
    </div>
    <div class="col-md-6">
        <form action="excel.php" action="" method="POST">
            <input type="submit" value="Export Report" name="export_excel" class="btn btn-success">
        </form>
    </div>
</div>
</div>

<?php
    include '../security/database.php';

    $db = new Database();
    
    $result = $db->connect()->query("SELECT * FROM `books`");
    
    ?>
    
    <div class="container" style="margin-top: 2%">
        <table class="table" id="table_id">
            <thead>
                <tr>
                    <th scope="col">TITLE</th>
                    <th scope="col">AUTHOR</th>
                    <th scope="col">PUBLISHER</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = $result->fetch_object()){
                        $title = $row->title;
                        $author = $row->author;
                        $publisher = $row->publisher;
                ?>
                <tr scope="row">
                    <td><?php echo $title ?></td>
                    <td><?php echo $author ?></td>
                    <td><?php echo $publisher ?></td>
                    <td><a href="view_book.php?id=<?php echo $row->book_id ?>" class="btn btn-primary">View</a></td>
                    <td><a href="editbook.php?id=<?php echo $row->book_id ?>" class="btn btn-secondary">Update</a></td>
                    <td><a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
?>


<!-- Modals -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="width:100%;">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document" >
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add New Book</h5>
        </div>
        
        <!-- dsdsdsds -->
        
      <div class="modal-body">
        <form action="addbook.php" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-5">
                <div class="book-pic">
                    <img src="bookpics/no_image_book.jpg" id="bookpic" alt="" width="350">
                    <input type="file" onchange="imagePreview.call(this)" name="book_image" value="upload picture">
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


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );

    function imagePreview(){
        var reader = new FileReader();
        var imageField = document.getElementById("bookpic");
        reader.onload = function(){
            if(reader.readyState == 2){
                imageField.src = reader.result;
            }
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
<?php
include '../templates/footer.php';
?>

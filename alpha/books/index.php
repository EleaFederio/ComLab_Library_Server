<?php
include 'header.php';
?>
<div class="container">
    <a class="btn btn-primary" href="addbook.php" style="margin-top: 1%">ADD BOOK</a>
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
                    <td><a href="#" class="btn btn-secondary">Update</a></td>
                    <td><a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
?>

<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>
<?php
include '../templates/footer.php';
?>

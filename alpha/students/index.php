<?php 
include 'header.php';
include '../security/database.php';

$db = new Database();

$result = $db->connect()->query("SELECT * FROM `students` JOIN `courses` ON `students`.`course` = `courses`.`courseId`");

?>

<div class="container" style="margin-top: 2%">
    <table class="table" id="table_id">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Course</th>
                <th scope="col">Year</th>
                <th scope="col">Block</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($row = $result->fetch_object()){
                    $fullname = $row->firstName . " " . $row->lastName;
                    $course = $row->courseName;
                    $year = $row->year;
                    $block = $row->block;
            ?>
            <tr scope="row">
                <td><?php echo $fullname ?></td>
                <td><?php echo $course ?></td>
                <td><?php echo $year ?></td>
                <td><?php echo $block ?></td>
                <td><a href="viewStudent.php?id=<?php echo $row->id ?>" class="btn btn-primary">View</a></td>
                <td><a href="#" class="btn btn-secondary">Update</a></td>
                <td><a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>
<?php
include '../templates/footer.php';
?>

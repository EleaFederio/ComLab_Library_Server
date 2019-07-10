<?php
$studentId = $_GET['id'];
include 'header.php';
    include '../security/database.php';
    $studentFullname;
    $studentCourse;
    $studentYear;
    $studentBlock;
    $studentAddress;

    $db = new Database(); 

    $selectStudent = "SELECT * FROM `students` JOIN `courses` ON `students`.`course` = `courses`.`courseId` WHERE `id` = $studentId";
    $result = $db->connect()->query($selectStudent);
    if ($student = $result->fetch_object()){
        $studentFullname = $student->firstName . " " . $student->lastName;
        $studentCourse = $student->courseName;
        $studentYear = $student->year;
        $studentBlock = $student->block;
        
    }

    ?>

    <div class="container">
        <h1><?php echo $studentFullname ?></h1>
        <h5><?php echo $studentCourse . " " . $studentYear . " " . $studentBlock ?></h5>
        
    </div>

    <div class="container" style="margin-top: 2%">
        <table class='table' id="example" style="width: 100%">
            <thead>
                <th>Date</th>
                <th>Time in</th>
                <th>Time out</th>
            </thead>
            <tbody>
                <?php
                    $selectLogs = "SELECT * FROM `library_log` WHERE `student` = $studentId";
                    $logRecords = $db->connect()->query($selectLogs);
                    while($log = $logRecords->fetch_object()){
                        echo '<tr>';
                            echo "<td>$log->date</td>";
                            echo "<td>$log->time_in</td>";
                            echo "<td>$log->time_out</td>";
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>
<?php
include '../templates/footer.php';
?>

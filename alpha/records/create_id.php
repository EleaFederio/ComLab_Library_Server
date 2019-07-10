<?php
include 'id_generator.php';
include '../security/database.php';

$db = new Database();

$docs = new IdGenerator();

$query = "SELECT * FROM `studyantes`";
$result = $db->connect()->query($query);
$counter = $result->num_rows;

$data = $result->fetch_all();

// var_dump($data);

for($x = 0; $x < $counter; $x = $x + 4){
    $student1 = $data[$x];
    $student2 = $data[$x + 1];
    $student3 = $data[$x + 2];
    $student4 = $data[$x + 3];

    $docs->template($student1[2]." ". substr($student1[3], 0, 1) .". " . $student1[4], $student2[2]." ". substr($student2[3], 0, 1) .". " .$student2[4], $student3[2]." ". substr($student3[3], 0, 1) .". " . $student3[4], $student4[2]." ". substr($student4[3], 0, 1) .". " .$student4[4],
    $student1[5]. ", ".$student1[6], $student2[5].", ".$student2[6], $student3[5].", ".$student3[6], $student4[5].", ".$student4[6],
    // $student1[5]. ", ".$student1[6]. ", ".$student1[7], $student2[5].", ".$student2[6]. ", ".$student2[7], $student3[5].", ".$student3[6]. ", ".$student3[7], $student4[5].", ".$student4[6]. ", ".$student4[7],
    $student1[10].".".$student1[1], $student2[10].".".$student2[1], $student3[10].".".$student3[1], $student4[10].".".$student4[1]);
}
$docs->output();
// while($row = $result->fetch_object()){
//     echo $row->firstName . " ". $row->lastName. "<br>";
// }

// $docs->template();



?>
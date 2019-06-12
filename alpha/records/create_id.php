<?php
include 'id_generator.php';
include '../security/database.php';

$db = new Database();

$docs = new IdGenerator();

$query = "SELECT * FROM `students`";
$result = $db->connect()->query($query);
$counter = $result->num_rows;

$data = $result->fetch_all();

// var_dump($data);

for($x = 0; $x < $counter; $x = $x + 4){
    $student1 = $data[$x];
    $student2 = $data[$x + 1];
    $student3 = $data[$x + 2];
    $student4 = $data[$x + 3];

    $docs->template($student1[1]. " " . $student1[2], $student2[1]. " " . $student2[2], $student3[1]. " " . $student3[2], $student4[1]. " " . $student4[2],
    $student1[8], $student2[8], $student3[8], $student4[8],
    $student1[7], $student2[7], $student3[7], $student4[7]);
}
$docs->output();
// while($row = $result->fetch_object()){
//     echo $row->firstName . " ". $row->lastName. "<br>";
// }

// $docs->template();



?>
<?php
    include '../security/database.php';
    function generateRandomString($length = 10) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    if(isset($_GET['generateRand']) && $_GET['generateRand'] == 1){
        $db = new Database();
        $selectStudents = "SELECT * FROM `students`";
        $result = $db->connect()->query($selectStudents);
        while($student = $result->fetch_object()){
            $changeHash = 'UPDATE `students` SET `hash` = \''.generateRandomString().'\' WHERE `id` = '.$student->id.'';
            $db->connect()->query($changeHash);
        }
        header('Location:index.php?updateHash=1');
    }
?>
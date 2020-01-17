<?php

    $connect = mysqli_connect('localhost', 'root', '', 'bugc');
    $output = '';
    if(isset($_POST['export_excel'])){
        $sql = "SELECT * FROM `books`";
        $result = mysqli_query($connect, $sql);
        if(mysqli_num_rows($result) > 0){
            $output .= '
                <table class="table" bordered="1">
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Publisher</th>
                    <th>Call No.</th>
                    <th>Edition</th>
                    <th>Year</th>
                    <th>Pages</th>
                    <th>Remarks</th>
                    <th>Copies</th>
                </tr>
            ';
            while($row = mysqli_fetch_array($result)){
                $output .= '
                <tr>
                    <th>'.$row["title"].'</th>
                    <th>'.$row["author"].'</th>
                    <th>'.$row["publisher"].'</th>
                    <th>'.$row["call_number"].'</th>
                    <th>'.$row["edition"].'</th>
                    <th>'.$row["year"].'</th>
                    <th>'.$row["pages"].'</th>
                    <th>'.$row["remarks"].'</th>
                    <th>'.$row["copies"].'</th>
                </tr>
                ';
            }
            $output .= '</table>';
            header("Content-Type: application/xls");
            header("Content-Disposition:attachment; filename=download.xls");
            echo $output;
        }
    }
?>
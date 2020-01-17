<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Database.php';
include_once '../../models/book.php';

$database = new Database();
$db = $database->connect();

$book = new Books($db);

$result = $book->read();

$num = $result->rowCount();

if($num > 0){
    $book_arr = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $book_item = array(
            'id' => $book_id,
            'title' => $title,
            'author' => $author,
            'publisher' => $publisher,
            'edition' => $edition,
            'pages' => $pages,
            'call_number' => $call_number,
            'year' => $year,
            'book_pic' => $book_pic
        );

        array_push($book_arr, $book_item);
    }
    echo json_encode($book_arr);
}else{
    echo json_encode(
        array('message' => 'No Books found')
    );
}

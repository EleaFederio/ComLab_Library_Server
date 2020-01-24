<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require '../../config/database.php';
include '../../model/book.php';

$database = new Database();
$db = $database->connect();
$book = new Book($db);
$result = $book->read($db);

if($result != null){
    $book_arr = array();
    while($row = $result->fetch_object()){
        $book_item = array(
            'id' => $row->book_id,
            'title' => $row->title,
            'author' => $row->author,
            'publisher' => $row->publisher,
            'edition' => $row->edition,
            'pages' => $row->pages,
            'call_number' => $row->call_number,
            'year' => $row->year,
            'book_pic' => $row->book_pic
        );
        array_push($book_arr, $book_item);
    }
    echo json_encode($book_arr);
}else{
    echo json_encode(
        array('message' => 'No Books found')
    );
}

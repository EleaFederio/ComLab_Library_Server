<?php
class Book{
    private $conn;
    public $id;
    public $title;
    public $author;
    public $publisher;
    public $edition;
    public $pages;
    public $callNumber;
    public $year;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function read($db){
        $query = "SELECT * FROM `books`";
        return $result = $this->conn->query($query);
    }

}

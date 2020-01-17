<?php
class Books{
    private $conn;
    private $table = 'books';

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

    public function read(){
        $query = 'SELECT * FROM `books`';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
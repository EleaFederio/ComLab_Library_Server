<?php

class Database{
    private $server = '127.0.0.1';
    private $username = 'root';
    private $password = '';
    private $dbname = 'bugc';

    function connect(){
        return new mysqli('127.0.0.1', 'root', '', 'bugc');
    }
}

// $db = new Database();
// var_dump($db->connect());
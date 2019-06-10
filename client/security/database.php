<?php

class Database{
    private $server = '127.0.0.1';
    private $user = 'root';
    private $password = '';
    private $dbName = 'bugc';

    function connect(){
        return new mysqli($this->server, $this->user, $this->password, $this->dbName);
    }

}
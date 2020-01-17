<?php
class Database{
    private $host = '127.0.0.1';
    private $user = 'root';
    private $password = '';
    private $db = 'bugc';
    private $con;

    public function connect(){
        $this->con = null;

        try{
            $this->con = new PDO('mysql: host='.$this->host.'; dbname='.$this->db, $this->user, $this->password);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo 'Erro: '.$e->getMessage();
        }

        return $this->con;
    }
}

// $db = new Database();
// $db->connect();
<?php

class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $name = DB_NAME;
    
    // variabel untuk database PDO
    private $dbh; // database handler
    private $stmt; // statement
    
    // koneksi ke database
    public function __construct()
    {
        // data source name
        $dsn = "mysql:host=$this->host;dbname=$this->name";

        // konfigurasi database
        $option = [
            
            PDO::ATTR_PERSISTENT => true, // untuk membuat koneksi database terjaga terus
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
        } catch(PDOException $error) {
            die($error->getMessage());
        }
    }

    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type = null)
    {
        if(is_null($type)){
            switch(true){
                case is_int($value) : 
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value) : 
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value) : 
                    $type = PDO::PARAM_NULL;
                    break;
                default : 
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute()
    {
        $this->stmt->execute();
    }

    // jika data yang ingin dihasilkan banyak
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // jika data yang ingin dihasilkan satu saja
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
}
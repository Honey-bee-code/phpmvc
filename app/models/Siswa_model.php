<?php

class Siswa_model {
    // variabel untuk database PDO
    private $dbh; // database handler
    private $stmt; // statement
    
    // koneksi ke database
    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $error) {
            die($error->getMessage());
        }
    }

    public function get_all_siswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM siswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
<?php

class Database {
    private $login = "root";
    private $password = "root";
    private $host = "localhost";
    private $bd = "BD_PHASMO";
    private $charset = "utf8mb4";
    private $conn;

    public function __construct() {
        $this->connect();
    }

    public function connect() {
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->bd};charset={$this->charset}", $this->login, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    public function getConnection() {
        return $this->conn;
    }
}
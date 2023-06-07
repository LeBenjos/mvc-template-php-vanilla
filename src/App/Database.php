<?php

namespace App;

use PDO;
use PDOException;

class Database {
    private string $_motor = "mysql";
    private string $_host = "localhost";
    private string $_dbName = "templateMVC";
    private string $_userName = "root";
    private string $_userPassword = "";
    public PDO $_pdo;

    public function __construct(){
        try {
            $this->_pdo = new PDO(
                "$this->_motor:host=$this->_host;dbname=$this->_dbName", 
                $this->_userName, 
                $this->_userPassword,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4')
            );
            $this->_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->_pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            http_response_code(500);
            echo json_encode([
                "code" => $e->getCode(),
                "message" => $e->getMessage(),
                "file" => $e->getFile(),
                "line" => $e->getLine()
            ]);
            exit;
        }
    }

}

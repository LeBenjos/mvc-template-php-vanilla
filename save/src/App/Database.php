<?php

namespace App;

use PDO;
use PDOException;

class Database {
    private string $motor = DB_MOTOR;
    private string $host = DB_HOST;
    private string $dbName = DB_NAME;
    private string $userName = DB_USERNAME;
    private string $userPassword = DB_PASSWORD;
    public PDO $pdo;

    private static ?self $instance = null;
    public static function getInstance(): self{
        if (static::$instance === null) {
            static::$instance = new self;
        }
        
        return static::$instance;
    }

    private function __construct(){
        try {
            $this->pdo = new PDO(
                "$this->motor:host=$this->host;dbname=$this->dbName", 
                $this->userName, 
                $this->userPassword,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4')
            );
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
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

<?php

namespace Models;

use Database\Database;
use PDO;
use PDOException;

class Template{
    private Database $_db;

    public function __construct(){
        require_once '../src/models/Database.php';
        $this->_db = new Database;
    }

    public function getContent(){
        $stmt = $this->_db->_pdo->prepare("SELECT template_content FROM templates");
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC)["template_content"];
    }
}
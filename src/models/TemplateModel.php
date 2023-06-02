<?php

namespace models;

use models\Database;
use PDO;
use PDOException;

class TemplateModel{
    private Database $_db;

    public function __construct(){
        $this->_db = new Database;
    }

    public function getContent(){
        $stmt = $this->_db->_pdo->prepare("SELECT template_content FROM templates");
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC)["template_content"];
    }
}
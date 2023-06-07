<?php 

namespace repository;

use app\Database;
use PDO;
use PDOException;
use models\TemplateModel;

class TemplateRepository {
    private Database $_db;

    public function __construct(){
        $this->_db = new Database;
    }

    public function getContent(): array {
        $stmt = $this->_db->_pdo->prepare("SELECT template_content FROM templates");
        $stmt->execute();

        $contents = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)["template_content"]) {
            $contents[] = new TemplateModel($row["template_content"]);
        }

        return $contents;
    }
}
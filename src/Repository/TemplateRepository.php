<?php 

namespace Repository;

use App\Database;
use PDO;
use PDOException;

use Model\TemplateModel;

class TemplateRepository{
    private Database $db;

    public function __construct(){
        $this->db = Database::getInstance();
    }

    public function getContent(): string{
        $stmt = $this->db->pdo->prepare("SELECT template_content FROM templates");
        $stmt->execute();

        return ((new TemplateModel($stmt->fetchAll(PDO::FETCH_ASSOC)))->getContent());
    }
}

<?php 

namespace Repository;

use Repository\Repository;

use App\Database;
use PDO;
use PDOException;

use Model\TemplateModel;

class TemplateRepository extends Repository{
    public function getContent(): TemplateModel{
        $stmt = $this->db->pdo->prepare("SELECT template_id, template_content FROM templates");
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if(!$result){
            throw new NotFoundException();
        }

        return new TemplateModel($result);
    }

    public function selectAllContent(): array{
        $stmt = $this->db->pdo->prepare("SELECT template_id, template_content FROM templates");
        $stmt->execute();
        
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $templates = [];
        foreach($results as $r){
            $templates[] = new TemplateModel($r);
        }

        return $templates;
    }
}

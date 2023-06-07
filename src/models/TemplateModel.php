<?php

namespace models;

// use app\Database;
// use PDO;
// use PDOException;

// class TemplateModel{
//     private Database $_db;

//     public function __construct(){
//         $this->_db = new Database;
//     }

//     public function getContent(){
//         $stmt = $this->_db->_pdo->prepare("SELECT template_content FROM templates");
//         $stmt->execute();

//         return $stmt->fetch(PDO::FETCH_ASSOC)["template_content"];
//     }
// }

class TemplateModel {
    public function __construct(private ?string $templateContent){}

    public function getTemplateContent(): ?string{
        return $this->templateContent;
    }

    public function setTemplateContent(?string $templateContent): void{
        $this->templateContent = $templateContent;
    }
}
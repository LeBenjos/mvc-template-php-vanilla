<?php

namespace Model;

use App\Database;
use PDO;
use PDOException;

class TemplateModel{
    private readonly int $id;
    private ?string $content;

    public function __construct(array $contents){
        $this->id = $contents["template_id"];
        $this->content = $contents["template_content"] ?? null;
    }

    public function getId(): ?string{
        return $this->id;
    }

    public function getContent(): ?string{
        return $this->content;
    }
}

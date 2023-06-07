<?php

namespace Model;

use App\Database;
use PDO;
use PDOException;

class TemplateModel{
    private string|array $content;

    public function __construct(array $contents){
        $this->content = $this->getSentence($contents);
    }

    public function getSentence(array $contents){
        $sentence = '';
        foreach($contents as $i => $content){
            if ($i == 0){
                $sentence .= $content["template_content"];
            } else {
                $sentence .= ' ' . $content["template_content"];
            }
        }

        return $sentence;
    }

    public function getContent(): string{
        return $this->content;
    }
}

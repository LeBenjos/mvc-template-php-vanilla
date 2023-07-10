<?php 

namespace src\Repository;

use src\App\Database\Database;
use PDO;
use PDOException;

abstract class Repository{
    protected Database $db;

    public function __construct(){
        $this->db = Database::getInstance();
    }
}

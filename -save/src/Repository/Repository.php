<?php 

namespace Repository;

use App\Database;
use PDO;
use PDOException;

abstract class Repository{
    protected Database $db;

    public function __construct(){
        $this->db = Database::getInstance();
    }
}

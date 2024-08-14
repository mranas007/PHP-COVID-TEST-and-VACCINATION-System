<?php
require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../models/crudModel.php';

class crudController
{
    private $db;
    private $conn;

    function __construct()
    {
        $this->db = new Database();
        $this->conn = $this->db->getConnection();
    }

    function readAll($table)
    {
        $crudModel = new crudModel($this->conn);
        $result = $crudModel->readAll($table);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }
}

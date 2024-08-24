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
    // you can use this method to see any kinda table just in one method, insert the table into parameter and you get your table 
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

    function readOne($tableName, $userId)
    {
        $crudModel = new crudModel($this->conn);
        $result = $crudModel->readOne($tableName, $userId);
        if ($result == true) {
            return $result;
        } else {
            return false;
        }
    }

    function deleteOne($tableName, $userId)
    {
        $crudModel = new crudModel($this->conn);
        $result = $crudModel->deleteOne($tableName, $userId);
        if ($result === true) {
            return true;
        } else {
            return false;
        }
    }

    function update($tableName, $userId, $name, $age, $gender, $etc)
    {
        $crudModel = new crudModel($this->conn);
        $result = $crudModel->update($tableName, $userId, $name, $age, $gender, $etc);
        if ($result === true) {
            return true;
        } else {
            return false;
        }
    }
}

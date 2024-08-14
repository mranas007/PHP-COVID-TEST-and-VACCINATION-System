<?php

class crudModel
{
    private $conn;
    function __construct($conn)
    {
        $this->conn = $conn;
    }

    function readAll($table)
    {
        // Escape the table name to prevent SQL injection
        $table = $this->conn->real_escape_string($table);
        $query = "SELECT * FROM " . $table . " WHERE 1";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }
}

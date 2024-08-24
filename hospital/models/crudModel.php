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

    function readOne($tableName, $userId)
    {
        $query = "SELECT * FROM `$tableName` WHERE `id`=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    function deleteOne($tableName, $userId, $hospital_id = null)
    {
        // Check if table name is provided
        if (empty($tableName)) {
            throw new Exception("Table name cannot be empty.");
        }

        // Handle specific cases where foreign key constraints are present
        if ($tableName === 'hospital') {
            // Delete dependent records in hospital_appointment table
            $query = "DELETE FROM hospital_appointment WHERE hospital_id = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param("i", $hospital_id);
            $stmt->execute();

            // (Add similar blocks here for other tables if needed)
        }

        // Perform the main delete operation
        $query = "DELETE FROM `$tableName` WHERE `id`=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $userId);

        // Execute the main delete query
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // updating someone
    function update($tableName, $userId, $name, $age, $gender, $etc)
    {
        $query = "UPDATE `$tableName`
        SET `name`='',`email`='',`password`='',`age`='',`gender`='',`address`='',`phone_number`='' 
        WHERE `id`='$userId';";
        $stmt = $this->conn->prepare($query);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
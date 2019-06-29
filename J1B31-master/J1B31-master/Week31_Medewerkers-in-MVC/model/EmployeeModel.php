<?php

function getAllEmployees(){
    $conn = openDatabaseConnection();
    $stmt = $conn->prepare("SELECT * FROM employees");
    $stmt->execute();
    $result = $stmt->fetchAll();
    $conn = null;
    return $result;
}

function getEmployee($id){
    $conn=openDatabaseConnection();
    $stmt = $conn->prepare("SELECT * FROM employees WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $result = $stmt->fetch();
    $conn = null;
    return $result;
}

function createEmployee($data){
    try {
        $conn = openDatabaseConnection();
        $stmt = $conn->prepare("INSERT INTO `employees`(`name`, `age`) VALUES (?,?)");
        $data = array_values($data);
        $stmt->execute($data);
        $result = $stmt->fetchAll();
    }
    catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
    return $result;
}

function updateEmployee($data){
    $conn = openDatabaseConnection();
    $stmt = $conn->prepare("UPDATE `employees` SET name = :name, age = :age WHERE id = :id");
    $stmt->execute([":name" => $data["name"], ":age" => $data["age"], ":id" => $data["id"]]);
    $conn = null;
}

function deleteEmployee($id){
    $conn = openDatabaseConnection();
    $stmt = $conn->prepare("DELETE FROM employees WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $conn = null;
}

?>
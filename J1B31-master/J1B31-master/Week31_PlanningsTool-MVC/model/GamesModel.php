<?php
function getAllGames()
{
    $conn = openDatabaseConnection();
    $stmt = $conn->prepare("SELECT * FROM games");
    $stmt->execute();
    $result = $stmt->fetchAll();
    $conn = null;
    return $result;
}

function getGame($id)
{
    $conn = openDatabaseConnection();
    $stmt = $conn->prepare("SELECT * FROM games WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $result = $stmt->fetch();
    $conn = null;
    return $result;
}
?>
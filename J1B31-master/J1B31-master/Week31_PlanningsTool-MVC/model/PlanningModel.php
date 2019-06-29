<?php
function createUserInput($data)
{
    try {
        $conn = openDatabaseConnection();
        $query = $conn->prepare("INSERT INTO `user_input` (game_name, host_name, players, time_start, time_end)
        VALUES (:game_name, :host_name, :players, :time_start, :time_end)");
        $query->execute([":game_name" => $data["game_name"], ":host_name" => $data["host_name"], ":players" => $data["players"], ":time_start" => $data["time_start"], ":time_end" => $data["time_end"]]);
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
}

function getAllUserInputs()
{
    $conn = openDatabaseConnection();
    $stmt = $conn->prepare("SELECT * FROM user_input ORDER BY time_start ASC");
    $stmt->execute();
    $result = $stmt->fetchAll();
    $conn = null;
    return $result;
}

function getUserInput($id)
{
    $conn=openDatabaseConnection();
    $stmt = $conn->prepare("SELECT * FROM user_input WHERE id = :id");
    $stmt->execute([":id" => $id]);
    $result = $stmt->fetch();
    $conn = null;
    return $result;
}

function updateUserInput($data, $id)
{
    $conn = openDatabaseConnection();
    $sql = $conn->prepare("UPDATE `user_input` SET game_name = :game_name, host_name = :host_name, players = :players, time_start = :time_start, time_end = :time_end WHERE id = :id");
    $sql->execute([':id'=>$id, ':game_name'=>$data['game_name'],':host_name'=>$data['host_name'],':players'=>$data['players'],':time_start'=>$data['time_start'],':time_end'=>$data['time_end']]);
    $conn = null;
}

function deleteUserInput($id)
{
    $conn = openDatabaseConnection();
    $stmt = $conn->prepare("DELETE FROM user_input WHERE id = :id");
    $stmt->execute([":id" => $id]);
    $conn = null;
}

?>
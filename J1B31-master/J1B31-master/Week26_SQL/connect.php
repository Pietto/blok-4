<?php
function databaseConnect() {
    $servername = "localhost";
    $username = "root";
    $password = "mysql";
    $dbname = "PlanningsTool";
    // $conn = null;
  
    try {
    $conn = new PDO("mysql:host=".$servername.";dbname=".$dbname.";", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
        echo 'Connection failed: '. $e->getMessage();
    }
    return $conn;
}

function getAllGames() {
    $conn = databaseConnect();
    $sql =  $conn->prepare("SELECT * FROM games");
    $sql->execute();
    $result = $sql->fetchAll();
    $conn = null;
    return $result;
}

function getGameById($id) {
    $conn = databaseConnect();
    $sql = $conn->prepare("SELECT * FROM games where id=:id");
    $sql->execute([':id' => $id]);
    $result = $sql->fetch();
    $conn = null;
    return $result;
}

function getInfoUserInput($id) {
    $conn = databaseConnect();
    $sql = $conn->prepare("SELECT * FROM user_input WHERE id = :id");
    $sql->execute([':id' => $id]);
    $result = $sql->fetch();
    $conn = null;
    return $result;
}


function changeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function controle($data) {
    $error = [];
    foreach ($data as $key => $value) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($value)) {
                $error[$key] = "Dit veld is verplicht";
            }
        }
    }
    return $error;
}

function convertPost() {
    $data = [];
    foreach($_POST as $key => $value){
        $data[$key] = changeInput($_POST[$key]);
    }
    return $data;
}

function insertPlanning($data) {
    $conn = databaseConnect();
    $gameName = $data["game_name"];
    $host = $data["host_name"];
    $player = $data["players"];
    $startTime = $data["time_start"];
    $endTime = $data["time_end"];

    $query = $conn->prepare("INSERT INTO `user_input` (game_name, host_name, players, time_start, time_end)
    VALUES ('".$gameName."', '".$host."', '".$player."', '".$startTime."', '".$endTime."')");
    $query->execute();
    $conn = null;
}

function updatePlanning($data) {
    $conn = databaseConnect();

    $sql = $conn->prepare("UPDATE user_input SET game_name = :game_name, host_name = :host_name, players = :players, time_start = :time_start, time_end = :time_end WHERE id = :id");
    $sql->execute([':id'=>$_GET['id'], ':game_name'=>$data['game_name'],':host_name'=>$data['host_name'],':players'=>$data['players'],':time_start'=>$data['time_start'],':time_end'=>$data['time_end']]);
    $conn = null;
    header('Location: overzicht.php');
}
?>
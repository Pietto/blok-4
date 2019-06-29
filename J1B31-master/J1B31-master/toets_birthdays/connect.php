<?php
function databaseConnect() {
    $servername = "localhost";
    $username = "root";
    $password = "mysql";
    $dbname = "kalender";
  
    try {
    $conn = new PDO("mysql:host=".$servername.";dbname=".$dbname.";", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
        echo 'Connection failed: '. $e->getMessage();
    }
    return $conn;
}

function getAllData() {
    $conn = databaseConnect();
    $sql =  $conn->prepare("SELECT * FROM user_input");
    $sql->execute();
    $result = $sql->fetchAll();
    $conn = null;
    return $result;
}

function getUserInputById($id) {
    $conn = databaseConnect();
    $sql = $conn->prepare("SELECT * FROM user_input where id=:id");
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

function insertPlanning($data) {
    $conn = databaseConnect();
    $person = $data["person"];
    $day = $data["day"];
    $month = $data["month"];
    $year = $data["year"];

    $query = $conn->prepare("INSERT INTO `user_input` (person, day, month, year) VALUES ('".$person."', '".$day."', '".$month."', '".$year."')");
    $query->execute();
    $conn = null;
}

function updatePlanning($data) {
    $conn = databaseConnect();

    $sql = $conn->prepare("UPDATE user_input SET person = :person, day = :day, month = :month, year = :year WHERE id = :id");
    $sql->execute([':id'=>$_GET['id'], ':person'=>$data['person'],':day'=>$data['day'],':month'=>$data['month'],':year'=>$data['year']]);
    $conn = null;
    header('Location: overzicht.php');
}
?>
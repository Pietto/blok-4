<?php
function databaseConnect(){
    $servername = "localhost";
    $username = "root";
    $password = "mysql";
    $dbname = "boekenclub";
  
    try {
    $conn = new PDO("mysql:host=".$servername.";dbname=".$dbname.";", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
        echo 'Connection failed: '. $e->getMessage();
    }
    return $conn;
}

function getAllData(){
    $conn = databaseConnect();
    $sql =  $conn->prepare("SELECT * FROM user_input");
    $sql->execute();
    $result = $sql->fetchAll();
    return $result;
}

if(isset($_POST['submit'])) {
    $conn = databaseConnect();
    $bookName = $_POST["book_name"];
    $bookAuthor = $_POST["book_author"];
    $bookComment = $_POST["book_comment"];

    $query = $conn->prepare("INSERT INTO `user_input` (book_name, book_author, book_comment) VALUES ('".$bookName."', '".$bookAuthor."', '".$bookComment."')");
    $query->execute();
    $conn = null;
}

function readPerson($id) {
    $conn = databaseConnect();
    $sql =  $conn->prepare("SELECT * FROM  WHERE id = :id");
    $sql->execute();
    $result = $sql->fetch();
    return $result;
}

// function getData(); {
//     $conn = databaseConnect();
//     $sql =  $conn->prepare("SELECT * FROM  WHERE id = :id");
//     $sql->execute();
//     $result = $sql->fetch();
//     return $result;
// }

function updateToDatabase($id) {
    if(isset($_POST['submit'])) {
        $conn = databaseConnect();
        $bookName = $_POST["book_name"];
        $bookAuthor = $_POST["book_author"];
        $bookComment = $_POST["book_comment"];

        $query = $conn->prepare("UPDATE `user_input` SET book_name = :book_name, book_author = :book_author, book_comment = :book_comment WHERE id = :id");
        $query->execute([":book_name" => $_POST["book_name"], ":book_author" => $_POST["book_author"], ":book_comment" => $_POST["book_comment"], ":id" => $id]);
        $conn = null;
    }
}

// function getDataFromId($id) {
    
// }
?>
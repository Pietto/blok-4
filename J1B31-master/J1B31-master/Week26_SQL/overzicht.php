<?php
require 'connect.php';
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Plannings Tool</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
</head>

<body>
    <div class="logo">
        <h1>Plannings Tool</h1>
    </div>

    <div class="container">
        <?php
            require "menu.php";
        ?>

        <?php
        $conn = databaseConnect();
        $sql = $conn->prepare("SELECT * FROM user_input ORDER BY time_start ASC");
        $sql->execute();
        $result = $sql->fetchALL();

        foreach ($result as $row) {
        ?>
        <div class="gamecontainer">
            <p>
                Game naam: <?php echo $row['game_name'] ?><br>
                Spelers: <?php echo $row['players'] ?><br>
                Host: <?php echo $row['host_name'] ?><br>
                Start tijd: <?php echo $row['time_start'] ?><br>
                Eind tijd: <?php echo $row['time_end'] ?>
            </p>
            <div class="edit_buttons">
                <a class='btn btn-secondary' href='edit.php?id=<?php echo $row['id'];?>'>Aanpassen</a>
                <a class='btn btn-secondary' href='delete.php?id=<?php echo $row['id'];?>'>Verwijderen</a>
            </div>
        </div>
        <?php
            }
        ?>

        <?php
            require "footer.php";
        ?>
    </div>
</body>

</html>
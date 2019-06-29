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
            require 'menu.php';

            require "connect.php";

            require "getgamebyid.php";
        ?>

        <div class="container">
            <?php 
                if($_SERVER["REQUEST_METHOD"] == "POST") {
                        if($_POST['confirm'] == 'Ja') {
                            $conn = databaseConnect();
                            $sql = $conn->prepare("DELETE FROM user_input WHERE id = :id");
                            $sql->execute([':id' => $_GET['id']]);
                            $conn = null;
                            header('Location: overzicht.php');
                        }
                        elseif($_POST['confirm'] == 'Nee') {
                            header('Location: overzicht.php');
                        }
                }        
            ?>

            <div class="col-5 offset-3 submit-delete">
                <p class="submit-delete">Weet jij zeker dat je dit spel wilt verwijderen?</p>
                <form method="post" action="<?php echo $_SERVER['SELF_PHP']; ?>">
                    <input class="btn btn-secondary" name="confirm" value="Ja" type="submit">
                    <input class="btn btn-secondary" name="confirm" value="Nee" type="submit">
                </form>
            </div>
        </div>

        <?php
            require "footer.php";
        ?>
    </div>
</body>

</html>
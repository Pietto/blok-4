<!DOCTYPE html>
<html lang="nl">

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css"
        integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Toets herkansing PHP</title>
</head>

<body>
    <div id="container">
        <nav>
            <ul>
                <li><a href="index.php"><i class="fas fa-list"></i></a></li>
                <li><a href="create.php"><i class="fas fa-calendar-plus"></i></a></li>
            </ul>
        </nav>

        <h1>VERWIJDER EEN VERJAARDAG</h1>
        <?php
            require "connect.php";

            if($_SERVER["REQUEST_METHOD"] == "POST") {
                if($_POST['confirm'] == 'Ja') {
                    $conn = databaseConnect();
                    $sql = $conn->prepare("DELETE FROM user_input WHERE id = :id");
                    $sql->execute([':id' => $_GET['id']]);
                    $conn = null;
                    header('Location: index.php');
                }
                elseif($_POST['confirm'] == 'Nee') {
                    header('Location: index.php');
                }
            }
        ?>

        <?php
        $data = getUserInputById($_GET['id']);
        ?>
        <p>Wilt u deze persoon verwijderen? <?php echo $data["person"]. " " . $data["day"]. "-" .  $data["month"]. "-" .  $data["year"]; ?></p>

        <form method="post" action="<?php echo $_SERVER['SELF_PHP']; ?>">
            <input class="btn btn-secondary" name="confirm" value="Ja" type="submit">
            <input class="btn btn-secondary" name="confirm" value="Nee" type="submit">
        </form>
        <!-- <h2>Anoushka</h2><br /><i class="fas fa-calendar-day"></i> 22-2-1981<br /><br />
        <a href="#"><button class="btn btn-primary">Verwijderen</button></a> -->
    </div>
    <footer>&copy; Olaf Schouten</footer>
</body>

</html>
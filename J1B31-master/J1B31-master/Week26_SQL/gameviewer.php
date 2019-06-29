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

            $id = $_GET['id'];

            $game = getGameById($id);
        ?>

        <div id="item<?php echo $row['id']; ?>" class="col-md-12">
            <div class="thumbnail">
                <img class="images" <?php echo ' alt="img" src= "img/'.$game['image'].'"/'?>>
                <h1><?php echo $game["name"];?></h1>
                <?php echo $game["description"];?>
                <div class="description">
                    <p>Minimale spelers: <?php echo $game["min_players"];?></p>
                    <p>Maximale spelers: <?php echo $game["max_players"];?></p>
                    <p>Speeltijd: <?php echo $game["play_minutes"];?> minuten</p>
                    <p>Uitlegtijd: <?php echo $game["explain_minutes"];?> minuten</p>
                </div>

                <div class="embed-responsive embed-responsive-16by9">
                    <?php echo "<br>". $game["youtube"] . "<br>";?>
                </div>
            </div>
        </div>

        <?php
            require "footer.php";
        ?>
    </div>
</body>

</html>
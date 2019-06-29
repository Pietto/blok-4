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
        <br>
            <div class="row">
                <?php
                $result = getAllGames();
                foreach($result as $row){
                ?>
                <div id="item<?php echo $row['id']; ?>" class="col-md-2">
                    <div class="thumbnail">
                        <a href="gameviewer.php?id=<?php echo $row['id'] ?>">
                            <img class="images"<?php echo ' alt="img" src= "img/'.$row['image'].'"/'?>></a>
                            <?php echo "<br>". $row["name"] . "<br>";  ?>   
                    </div>
                </div>
                <?php
                }
                ?>

            </div>
        </div>

        <?php
            require "footer.php";
        ?>
    </div>
</body>

</html>
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

        <h1>Verjaardagen</h1>


        <div class="row">
            <?php
                require "connect.php";
            
                $result = getAllData();
                foreach($result as $row){
                ?>
            <div id="item<?php echo $row['id']; ?>" class="col-md-2">
                <a href="delete.php?id=<?php echo $row['id'] ?>"></a>
                <?php echo "<br>". $row["person"]?>
                <?php echo "<br>". $row["day"]?>
                <?php echo "<br>". $row["month"]?>
                <?php echo "<br>". $row["year"]?>
                <a href="update.php?id=<?php echo $row["id"] ?>"><i class="fas fa-pen"></i></a><a
                    href="delete.php?id=<?php echo $row["id"] ?>"><i class="fas fa-trash-alt"></i></a>
            </div>
            <?php
                }
                ?>
        </div>
    </div>
    <footer>&copy; Olaf Schouten</footer>
</body>

</html>
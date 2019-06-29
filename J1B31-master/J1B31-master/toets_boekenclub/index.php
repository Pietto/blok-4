<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <title>Boekenclub van Tante Toos</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="container">
        <h1>Boekenclub van tante Toos</h1>
        <table>

            <?php
				require 'connect.php';

				$conn = databaseConnect();
				$sql = $conn->prepare("SELECT * FROM user_input ");
				$sql->execute();
				$results = $sql->fetchall();
			foreach ($results as $row) {
			?>
            <div class="gamecontainer">
                <p>
                    Titel: <?php echo $row['book_name'] ?><br>
                    Auteur: <?php echo $row['book_author'] ?><br>
                    Beschrijving: <?php echo $row['book_comment'] ?>
                </p>
                <a href='update.php?id=<?php echo $row['id'];?>'>Edit</a>
                <a href='delete.php?id=<?php echo $row['id'];?>'>Delete</a>
            </div>
            <?php
				}
			?>
        </table>
        <p><a href="create.php" class="btn btn-primary">Toevoegen</a></p>
    </div>
</body>

</html>
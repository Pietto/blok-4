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
        <h1>Boek toevoegen</h1>
        <form action="index.php" method="post">

            <?php
				require 'connect.php';
            ?>

            <div class="form-group">
                <label for="book">Naam</label>
                <input type="text" class="form-control" name="book_name" placeholder="" required>
            </div>

            <div class="form-group">
                <label for="author">Auteur</label>
                <input type="text" class="form-control" name="book_author" placeholder="" required>
            </div>

            <div class="form-group">
                <label for="description">Beschrijving</label>
                <input type="text" class="form-control" name="book_comment" placeholder="" required>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Toevoegen</button>
        </form>
    </div>
</body>

</html>
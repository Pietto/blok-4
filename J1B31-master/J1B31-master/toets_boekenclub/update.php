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
        <h1>Boek bewerken</h1>
        <form action="index.php" method="post">

            <?php
				require 'connect.php';

				$id = $_GET['id'];

                $conn = databaseConnect();
                $sql = $conn->prepare("SELECT * FROM `user_input` WHERE `id` = :id");
                $sql->execute([":id"=>$_GET['id']]);
                $result = $sql->fetchAll();

                foreach($result as $row){
                    $bookName = $row['book_name'];
                    $bookAuthor = $row['book_author'];
                    $bookComment = $row['book_comment'];
                }
                
                // updateToDatabase($id);
			?>

            <form method="post">
                <div class="col-6 offset-3">
                    <h1>Edit spel</h1>

                    <p>Book naam <input type='text' name='book_name' class="float-right"
                            value="<?php echo $bookName?>"></p>

                    <p>Auteur <input type="text" name="book_author" class="float-right"
                            value="<?php echo $bookAuthor?>"></p>

                    <p>Beschrijving <input type="text" name="book_comment" class="float-right"
                            value="<?php echo $bookComment?>">
                    </p>

                    <button type="submit" name="update" class="btn btn-primary">Bewerken</button>
                </div>
            </form>
        </form>
    </div>
</body>

</html>
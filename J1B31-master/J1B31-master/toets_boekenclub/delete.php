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
        <h1>Boek verwijderen</h1>

        <form>

            <?php
				require 'connect.php';

                $id = $_GET['id'];
                
                $conn = databaseConnect();
                $sql = $conn->prepare("DELETE FROM user_input WHERE id = :id");
                $sql->execute([':id'=>$_GET['id']]);
                header('Location: index.php');
			?>

            <h4>Wilt u dit boek verwijderen?</h4>
            <button type="submit" class="btn btn-primary">Verwijderen</button>
        </form>
        <p><a href="index.php">Overzicht boeken</a></p>
    </div>
</body>

</html>
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

        <?php
        require "connect.php";

        $data = $_POST;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $fields = ["person", 'day', 'month', 'year'];
            $cleanFields = [];

            foreach ($fields as $field) {
                $cleanFields[$field] = changeInput($_POST[$field]);
            }
            
            insertPlanning($cleanFields);
            header("Location: index.php");
            exit();
        }
        ?>

        <h1>Voeg een verjaardag toe</h1>
        <form method="post" class="was-validated">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Naam</span>
                </div>
                <input required name="person" type="text" class="form-control" placeholder="Naam">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Datum</span>
                </div>
                <input required name="day" type="number" min="1" max="31" class="form-control" placeholder="Dag">
                <input required name="month" type="number" min="1" max="12" class="form-control" placeholder="Maand">
                <input required name="year" type="number" min="1900" max="2019" class="form-control" placeholder="Jaar">
            </div>

            <button type="submit" class="btn btn-primary">Toevoegen</button>
        </form>
    </div>
    <footer>&copy; Olaf Schouten</footer>
</body>

</html>
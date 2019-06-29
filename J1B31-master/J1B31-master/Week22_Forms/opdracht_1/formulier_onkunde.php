<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>formulier_onkunde</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
</head>

<body>
    <div class="logo">
        <h1>MAD LIBS</h1>
    </div>

    <div class="container">

        <?php require 'menu.php' ?>

        <?php
    function changeInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $data;
    $dataErr;
    $canProcess = true;
    foreach ($_POST as $key => $value) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($value)) {
                $canProcess = false;
                $dataErr[$key] = "Dit veld is verplicht";
            }
            else {
                $data[$key] = changeInput($value);
            }
        }
    }
    ?>

        <h2>Onkunde</h2>
        <div id="contentForm">
            <form class="form-horizontal" action="formulier_onkunde.php" method="post">

                <div class="form-group">
                    <div class="label">Wat zou je graag willen kunnen? <input type="text" name="vraag1"
                            value="<?php echo $data["vraag1"] ?>"> <span>* <?php echo $dataErr["vraag1"]?></span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="label">Met welke persoon kun je goed opschieten? <input type="text" name="vraag2"
                            value="<?php echo $data["vraag2"] ?>"> <span>* <?php echo $dataErr["vraag2"]?></span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="label">Wat is je favoriete getal? <input type="text" name="vraag3"
                            value="<?php echo $data["vraag3"] ?>"> <span>* <?php echo $dataErr["vraag3"]?></span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="label">Wat heb je altijd bij je als je op vakantie gaat? <input type="text"
                            name="vraag4" value="<?php echo $data["vraag4"] ?>"> <span>*
                            <?php echo $dataErr["vraag4"]?></span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="label">Wat is je beste persoonlijke eigenschap? <input type="text" name="vraag5"
                            value="<?php echo $data["vraag5"] ?>"> <span>* <?php echo $dataErr["vraag5"]?></span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="label">Wat is je slechtste persoonlijke eigenschap? <input type="text" name="vraag6"
                            value="<?php echo $data["vraag6"] ?>"> <span>* <?php echo $dataErr["vraag6"]?></span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="label">Wat is het ergste dat je kan overkomen? <input type="text" name="vraag7"
                            value="<?php echo $data["vraag7"] ?>"> <span>* <?php echo $dataErr["vraag7"]?></span>
                    </div>
                </div>

                <input type="submit" id="submit">
            </form>
        </div>

        <div id="result">
            <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($canProcess) {
                echo
                "<script>
                document.getElementById('contentForm').style.display = 'none';
                document.getElementById('result').style.display = 'block';
                </script>";
            
                echo "<p>"."Er zij veel mensen die niet kunnen " . $data["vraag1"] . ". " .
                    "Neem nou " . $data["vraag2"] . ". " .
                    "Zelfs met de hulp van een " . $data["vraag4"] . " of zelfs tien kan " . $data["vraag2"] . " niet " . $data["vraag1"] . ". " .
                    "Dat heeft niet te maken met een gebrek aan " . $data["vraag5"] . ", maar met een te veel aan " . $data["vraag6"] . ". " .
                    "Te veel " . $data["vraag6"] . " leidt tot " . $data["vraag7"] . " en dat is niet goed als je wilt " . $data["vraag1"] . ". " .
                    "Helaas voor " . $data["vraag2"] . "."."</p>";
            }
        }
        ?>
        </div>

        <?php require 'footer.php' ?>

    </div>
</body>

</html>
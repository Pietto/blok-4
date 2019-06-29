<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Page Title</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Archivo" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>MAD LIBS</h1>
    <div class="container">
        <div class="nav">
            <a href="opdracht.html">Er heerst paniek...</a>
            <a href="#">Onkunde</a>
        </div>

        <?php
    function changeInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $vragen = ["vraag1", "vraag2", "vraag3", "vraag4", "vraag5", "vraag6", "vraag7"];
    $data = [];
    $dataErr = [];
    foreach ($vragen as $value) {
        $data[$value] = "";
        $dataErr[$value] = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST[$value])) {
                $dataErr[$value] = "Dit veld is verplicht";
            }
            else {
                $data[$value] = changeInput($_POST[$value]);
            }
        }
    }
    ?>

        <h2>Onkunde</h2>
        <div id="content">
            <form class="form-horizontal" action="formlier_onkunde.php" method="post">

                <div class="form-group">
                    <label class="col-sm-6" for="vraag1" style="margin-top: 5px">Wat zou je graag willen
                        kunnen?</label>
                    <span class="error">* <?php echo $dataErr["vraag1"]?></span>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="vraag1" value="<?php echo $data["vraag1"] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-6" for="vraag2">Met welke persoon kun je goed opschieten?</label> <span
                        class="error">* <?php echo $dataErr["vraag2"]?></span>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="vraag2" name="vraag2"
                            value="<?php echo $data["vraag2"] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-6" for="vraag3">Wat is je favoriete vraag3?</label> <span class="error">*
                        <?php echo $dataErr["vraag3"]?></span>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="vraag3" name="vraag3"
                            value="<?php echo $data["vraag3"] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-6" for="vraag4">Wat heb je altijd bij je als je op vakantie gaat?</label>
                    <span class="error">* <?php echo $dataErr["vraag4"]?></span>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="vraag4" name="vraag4"
                            value="<?php echo $data["vraag4"] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-6" for="vraag5">Wat is je beste vraag2lijke eigenschap</label> <span
                        class="error">* <?php echo $dataErr["vraag5"]?></span>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="vraag5" name="vraag5"
                            value="<?php echo $data["vraag5"] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-6" for="vraag6">Wat is je slechtste vraag2lijke vraag5?</label> <span
                        class="error">* <?php echo $dataErr["vraag6"]?></span>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="vraag6" name="vraag6"
                            value="<?php echo $data["vraag6"] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-6" for="vraag7">Wat is het ergste dat je kan overkomen?</label> <span
                        class="error">* <?php echo $dataErr["vraag7"]?></span>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="vraag7" name="vraag7"
                            value="<?php echo $data["vraag7"] ?>">
                    </div>
                </div>

                <input type="submit" id="submit">
            </form>
        </div>

        <div id="result">
            <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data = [];
            $dataErr = [];
            $canProcess = true;
            foreach ($vragen as $value) {
                if (empty($_POST[$value])) {
                    $canProcess = false;
                    break;
                }
                else {
                    $data[$value] = changeInput($_POST[$value]);
                }
            }
            if ($canProcess) {
                echo
                "<script>
                document.getElementById('content').style.display = 'none';
                document.getElementById('result').style.display = 'block';
                </script>";
            
                echo "Er zij veel mensen die niet kunnen " . $data["vraag1"] . ". " .
                    "Neem nou " . $data["vraag2"] . ". " .
                    "Zelfs met de hulp van een " . $data["vraag4"] . " of zelfs tien kan " . $data["vraag2"] . " niet " . $data["vraag1"] . ". " .
                    "Dat heeft niet te maken met een gebrek aan " . $data["vraag5"] . ", maar met een te veel aan " . $data["vraag6"] . ". " .
                    "Te veel " . $data["vraag6"] . " leidt tot " . $data["vraag7"] . " en dat is niet goed als je wilt " . $data["vraag1"] . ". " .
                    "Helaas voor " . $data["vraag2"] . ".";
            }
        }
        ?>
        </div>

        <div class="footer">
            <p>Olaf Schouten ©</p>
        </div>
    </div>
</body>

</html>
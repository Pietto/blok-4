<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <title>Page Title</title>
    <meta name="author" content="SitePoint">
    <meta name=”viewport” content=”width=device-width, initial-scale=1.0″ />

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <h1>MAD LIBS</h1>

    <div class="container">
        <div class="nav">
            <a href="opdracht.html">Er heerst paniek...</a>
            <a href="opdracht_onkunde.html">Onkunde</a>
        </div>
        <h2>Onkunde</h2>
        <?php
            echo "<p>", "Er zijn mensen die niet kunnen ", $_POST["vraag1"], ". Neem nou ", $_POST["vraag2"], ". Zelfs met de hulp <br>
            van een ", $_POST["vraag4"], " of zelfs ", $_POST["vraag3"], " kan meneer ", $_POST["vraag2"], " niet ", $_POST["vraag1"], ". <br>";
            echo " Dat heeft niet te maken met het gebrek van ", $_POST["vraag_onkunde5"], ", maar met teveel aan ", $_POST["vraag6"], 
            ". <br> Teveel ", $_POST["vraag6"], " leidt tot ", $_POST["vraag7"], "<br> en dat is niet goed als je wilt ", $_POST["vraag1"], 
            ". Helaas voor meneer ", $_POST["vraag2"], ".", "</p>";       
            
        ?>
        <div class="footer">
            <p>Olaf Schouten ©</p>
        </div>
    </div>
</body>

</html>
 <!DOCTYPE html>
 <html>

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>resultaat_onkunde</title>
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

         <h2>Onkunde</h2>
         <?php
            echo "<p>", "Er zijn mensen die niet kunnen ", $_POST["vraag1"], ". Neem nou ", $_POST["vraag2"], ". Zelfs met de hulp <br>
            van een ", $_POST["vraag4"], " of zelfs ", $_POST["vraag3"], " kan meneer ", $_POST["vraag2"], " niet ", $_POST["vraag1"], ". <br>";
            echo " Dat heeft niet te maken met het gebrek van ", $_POST["vraag_onkunde5"], ", maar met teveel aan ", $_POST["vraag6"], 
            ". <br> Teveel ", $_POST["vraag6"], " leidt tot ", $_POST["vraag7"], "<br> en dat is niet goed als je wilt ", $_POST["vraag1"], 
            ". Helaas voor meneer ", $_POST["vraag2"], ".", "</p>";       
            
        ?>

         <?php require 'footer.php' ?>

     </div>
 </body>

 </html>
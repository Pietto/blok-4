<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <?php
$name = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

    <h1>Opdracht 2 - POST</h1>
    <h1>De ingevulde gegevens zijn:</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Naam : <input type="text" name="name"><br>
        Emailadres : <input type="text" name="email"><br>
        <input type="submit">
    </form>

    <?php 
    echo "Name : ". $name;
    echo "<br>";
    echo "Email : ". $email;
    ?>

    <!--    
    Wat valt je op bij de GET methode in de URL? 
    Wanneer ga je de GET methode beslist niet gebruiken?
    Wanneer zou de GET methode handig zijn om wel te gebruiken? 
    
    De informatie die je typt verschijnt in de url bar.
    Als het belangrijke informatie is die niet weer gegeven mag worden.
    Dat de informatie goed naar de data base geschreven kan worden.
    -->


</body>

</html>
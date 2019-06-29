<!DOCTYPE <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <?php
    echo "<h1>Hello World!</h1>";

    $array = ["<br>Learning PHP", "<br>Hello", " World!"];
    echo $array[0];

    echo "<br>";

    define("test", "$array[1]");
    echo test;

    echo "<br>";

    foreach($array as $value){
        echo $value;
    }

    echo "<br>";

    $word1 = "<h1>Hello</h1>";
    $word2 = "<h1> World!</h1>";
    echo $word1, $word2;

    echo "<br>";

    $array1 = ["Hello", " World!"];

    foreach($array1 as $value){
        echo $value;
    }

    // --------- lab 3a --------- //
    echo "<br><br>Lab3a";

    $randGetal = rand(1,10);
    $somGetal = rand(1,10);

    echo '<br>' .$randGetal. ' x ' .$somGetal. ' = ' .$randGetal * $somGetal;

    // --------- lab 3b.1 --------- //
    echo "<br><br>Lab3b.1";

    $randGetal1 = 1;
    $somGetal1 = 6;

    for($i = 0; $i < 10; $i++){
        echo '<br>'.$randGetal1. ' x ' .$somGetal1. ' = ' .$randGetal1 * $somGetal1;
        $randGetal1++;
    }

    // --------- lab 3b.2 --------- //
    echo "<br><br>Lab3b.2";

    // $randGetal3 = 1;
    // $somGetal3 = 6;
    tafels(1, 6);
    

    function tafels($randGetal2, $getal){
        for($i = 0; $i < 10; $i++){
            echo '<br>'.$randGetal2. ' x ' .$getal. ' = ' .$randGetal2 * $getal;
            $randGetal2++;
        }
    }
    
    // --------- lab 3b.3 --------- //
    echo "<br><br><h1>Lab3b.3</h1>";

    $arrayLab3 = [3, 5, 8, 12];

    foreach($arrayLab3 as $value){
        for($i = 0; $i <= 10; $i++){
            echo '<br>'.$value. ' x ' .$i. ' = ' .$value * $i;
        }
        echo '<br>';
    }

    // --------- lab 4 --------- //
    

    ?>
</body>

</html>
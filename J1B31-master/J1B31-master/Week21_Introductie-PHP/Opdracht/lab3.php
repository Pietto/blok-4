<link rel="stylesheet" href="style.css">

<?php
include 'menu.php';

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
?>
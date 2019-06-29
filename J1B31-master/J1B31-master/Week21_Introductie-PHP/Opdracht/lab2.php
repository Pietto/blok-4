<link rel="stylesheet" href="style.css">

<?php
    include 'menu.php';

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
?>
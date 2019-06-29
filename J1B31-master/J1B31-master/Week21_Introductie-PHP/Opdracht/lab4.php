<!doctype html>

<html lang="nl">

<head>
    <meta charset="utf-8">

    <title>Lab 4</title>
    <meta name="author" content="SitePoint">
    <meta name=”viewport” content=”width=device-width, initial-scale=1.0″ />

    <link rel="stylesheet" href="opdracht1.css">
</head>

<body>
    <?php include 'menu.php'; ?>
    <?php
    $game = "Schaken";
    $integer = 200;
    $boolean = true;

    date_default_timezone_set('Europe/Amsterdam');
    $hour = date("H");
    $minute = date("i");
    $seconds = date('s');

    if ($hour >= "6" && $hour < "12") {
        echo '<body class="morning">';
       $dagdeel = 'morning';
    }elseif ($hour >= "12" && $hour < "18") {
        echo '<body class="afternoon">';
       $dagdeel = 'afternoon';
    }elseif ($hour >= "18" && $hour < "00") {
        echo '<body class="evening">';
       $dagdeel = 'evening';
    }elseif ($hour >= "00" && $hour < "6") {
        echo '<body class="night">';
       $dagdeel = 'night';
    }


    switch ($game) {
        case "Yathzee":
            echo '<p>'."Your game is: Yathzee". "<br>".'</p>';
            if ($boolean == true) {
                echo '<p>'."Yes". "<br>".'</p>';

                if ($integer < 15 || $integer > 30 ) {
                    echo '<p>'."Je wilt Yathzee spelen want: dat vindt je gewoon leuk".'</p>';
                } 
                else {
                    echo '<p>'."Je wilt Yathzee spelen want: je hebt tussende 15 en 30 minuten tijd".'</p>';
                }
            } 
            else {
                echo '<p>'."No". "<br>".'</p>';
                if ($integer <= 100) {
                    echo '<p>'."Je wilt geen Yathzee spelen want: je wilt meer dan 100x met een dobbelsteen gooien".'</p>';
                } 
                else {
                    echo '<p>'."Je wilt geen Yathzee spelen want: je wilt minder dan 100 punten halen".'</p>';
                }
            }
            break;
        case "Monopoly":
            echo '<p>'."Your game is: Monopoly". "<br>".'</p>';
            if ($boolean == true) {
                echo '<p>'."Yes". "<br>".'</p>';

                if ($integer == 1) {
                    echo '<p>'."Je wil Monopoly spelen want je hebt aan 1 spelletje genoeg".'</p>';
                } 
                else {
                    echo '<p>'."Je wil Monopoly spelen want je houd ervan om iedereen blut te maken".'</p>';
                }
            } 
            else {
                echo '<p>'."No". "<br>".'</p>';

                if ($integer == 2 || $integer > 120) {
                    echo '<p>'."Je wilt Monopoly niet spelen want je hebt geen zin in een spel van 2uur".'</p>';
                } 
                else {
                    echo '<p>'."Je wilt Monopoly niet spelen want je houd niet van hotels".'</p>';
                }
            }
            break;
        case "Schaken":
            echo '<p>'."Your game is: Schaken". "<br>".'</p>';
            if ($boolean == true) {
                echo '<p>'."Yes". "<br>".'</p>';

                if ($integer == 2) {
                    echo '<p>'."Je wilt Schaken want je vindt zwart en wit leuk".'</p>';
                } 
                else {
                    echo '<p>'."Je wilt Schaken want je denkt slimmer dan mij te zijn".'</p>';
                }
            } 
            else {
                echo '<p>'."No". "<br>".'</p>';

                if ($integer == -1) {
                    echo '<p>'."Je wilt echt niet Schaken".'</p>';
                } 
                else {
                    echo '<p>'."Je wilt gewoon niet Schaken".'</p>';
                }
            }
            break;
        default:
            echo '<p>'."No game geselect".'</p>';
    }
  ?>
</body>

</html>
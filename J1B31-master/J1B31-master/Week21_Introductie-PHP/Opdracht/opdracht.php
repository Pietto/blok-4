<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class=container>
        <?php
        include 'menu.php';
        
        date_default_timezone_set('Europe/Amsterdam');
        $uren = date("H")+10;
        $minuten = date("i");

        
        if ($uren >= "6" && $uren < "12") {
            echo '<body class="morning">';
            $dagdelen = 'morning';
        }
        
        elseif ($uren >= "12" && $uren < "18") {
            echo '<body class="afternoon">';
            $dagdelen = 'afternoon';
        }
        
        elseif ($uren >= "18" && $uren < "24") {
            echo '<body class="evening">';
            $dagdelen = 'evening';
        }
        
        elseif ($uren >= "00" && $uren < "6") {
            echo '<body class="night">';
            $dagdelen = 'night';
        }

        echo '<h1>' , 'Good ' , $dagdelen , '</h1>';
        echo '<h1>' , 'The time is ' , $uren , ":" , $minuten , ":" , ' right now' , '</h1>';
        ?>
    </div>
</body>

</html>
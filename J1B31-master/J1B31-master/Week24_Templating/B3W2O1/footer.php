<div class="footer-copyright text-center py-3">© 2019 Copyright: Olaf Schouten
    <a href="https://www.linkedin.com/in/olaf-schouten-85a046183/"><i class="fa fa-linkedin-square"></i> Linkedin</a>
    <?php       
        date_default_timezone_set('Europe/Amsterdam');
        $uren = date("H");
        $minuten = date("i");
        $date = date("d-m-Y");

        echo $date;

        echo '<h1>' , $uren , ":" , $minuten , '</h1>';
        ?>
</div>
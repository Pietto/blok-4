<?php

// maak een bevestig pagina voor het verwijderen van een mededwerker
?>
<div class="">
    <p>Weet jij zeker dat je dit spel wilt verwijderen?</p>
    <form name="delete" method="post" action="<?=URL?>employee/destroy/<?php echo $id ?>">
        <input type="text" name="id" value="<?= $id ?>" />
        <input name="confirm" value="Ja" type="submit">
    </form>
</div>
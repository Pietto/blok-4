<?php
// maak een bevestig pagina voor het verwijderen van een mededwerker
?>
<div class="">
    <?php echo 'Weet je zeker dat je medewerker \''.$data['name'].'\' wilt verwijderen?'; ?>
    <form name="delete" method="post" action="<?=URL?>employee/destroy/<?php echo $id ?>">
        <input type="text" name="id" id="hide" value="<?= $id ?>" />
        <input name="confirm" value="Ja" type="submit">
        <button type='button' onclick='nodelete()'>nee</button>
    </form>
</div>
<script>
	function nodelete(){
		window.location = '../../index.php';
	}
</script>
<h1>Persoon wijzigen</h1>
<form name="update" method="post" action="<?=URL?>employee/update/ <? echo $id ?>">
    <input type="text" name="id" id="hide" value="<?= $id ?>" />
    <div class="userInput">
    	<?php 
	    	echo '<p>naam: '.'<input type="text" name="name" value="'.$data['name'].'">'.'</p>';
	    	echo '<p>leeftijd: '.'<input type="number" name="age" value="'.$data['age'].'">'.'</p>';
	    	echo '<button type="submit">Wijzigen</button>';
        ?>
    </div>
</form>
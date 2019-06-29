<h1>Persoon wijzigen</h1>
<form name="update" method="post" action="<?=URL?>employee/update/ <? echo $id ?>">
    <input type="text" name="id" value="<?= $id ?>" />
<? var_dump($data)?>
    <div class="userInput">
        <p>name <input type="text" name="name" value=<?php echo $data['name']; ?>></p>
        <p>age <input type="number" name="age" value=<?php echo $data['age']; ?>></p>
        <button type="submit">Verzenden</button>
    </div>
</form>
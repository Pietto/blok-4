<h1>Persoon wijzigen</h1>
<form name="update" method="post" action="<?=URL?>planning/update/<? echo $data["userInput"]['id'] ?>">
    <div class="userInput">

        <h2>Edit spel</h2>
        <p>Game naam
            <select name="game_name" class="games-select">
                <?
                foreach ($data["games"] as $row) {
                $selected = ($data['game_name'] == $row['name']? ' selected' : '');
                echo "<option value='".$row['name']."'".$selected.">".$row['name']."</option>";
            }
        ?>
            </select>
        </p>

        <p>Spel verteller
            <input type='text' name='host_name' value="<?php echo $data["userInput"]['host_name']?>">*
            <?php if (!empty($data["error"]["host_name"])) echo $data["error"]["host_name"] ?></p>

        <p>Aantal spelers
            <input type="text" name="players" value="<?php echo $data["userInput"]['players']?>">*
            <?php if (!empty($data["error"]["players"])) echo $data["error"]["players"] ?>
        </p>

        <p>Start tijd
            <input type="time" name="time_start" value="<?php echo $data["userInput"]['time_start']?>">*
            <?php if (!empty($data["error"]["time_start"])) echo $data["error"]["time_start"] ?>
        </p>

        <p>Eind tijd
            <input type="time" name="time_end" value="<?php echo $data["userInput"]['time_end']?>">*
            <?php if (!empty($data["error"]["time_end"])) echo $data["error"]["time_end"] ?>
        </p>

        <button type="submit">Verzenden</button>
    </div>
</form>
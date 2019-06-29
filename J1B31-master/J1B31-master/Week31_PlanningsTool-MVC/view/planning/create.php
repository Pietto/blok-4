<h1>Voeg een planning toe</h1>
<form name="create" method="post" action="store">
    <h2>Game inplannen</h2>

    <p>Game naam
        <select name="game_name" class="games-select">
            <?php
            foreach ($data["games"] as $row) 
            {
                echo "<option value='".$row['name']."'>".$row['name']."</option>";
            }
        ?>
        </select>
    </p>

    <p>Host <input type="text" name="host_name" value="<?php echo $data["userInput"]["host_name"];?>">*
        <?php if (!empty($data["error"]["host_name"])) echo $data["error"]["host_name"] ?></p>

    <p>Spelers <input type="number" min=2 name="players" value="<?php echo $data["userInput"]["players"];?>">*
        <?php if (!empty($data["error"]["players"])) echo $data["error"]["players"] ?></p>

    <p>Start tijd <input type="time" name="time_start" value="<?php echo $data["userInput"]["time_start"];?>">*
        <?php if (!empty($data["error"]["time_start"])) echo $data["error"]["time_start"] ?></p>

    <p>Eind tijd <input type="time" name="time_end" value="<?php echo $data["userInput"]["time_end"];?>">*
        <?php if (!empty($data["error"]["time_end"])) echo $data["error"]["time_end"] ?></p>

    <button type="submit">Verzenden</button>
</form>
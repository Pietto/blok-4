<?php
foreach ($data as $row) {
?>
<div class="gamecontainer">
    <p>
        Game naam: <?php echo $row['game_name'] ?><br>
        Spelers: <?php echo $row['players'] ?><br>
        Host: <?php echo $row['host_name'] ?><br>
        Start tijd: <?php echo $row['time_start'] ?><br>
        Eind tijd: <?php echo $row['time_end'] ?>
        <div class="edit_buttons">
            <a class='btn btn-secondary' href='edit/<?php echo $row['id'];?>'>Aanpassen</a>
            <a class='btn btn-secondary' href='delete/<?php echo $row['id'];?>'>Verwijderen</a>
        </div>
    </p>
</div>
<?php
    }
?>
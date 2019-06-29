<h1>Overzicht van games</h1>
<div class="row">
    <?php
	foreach($data as $row){
	?>
    <div id="item<?php echo $row['id']; ?>" class="col-md-2">
        <div class="thumbnail">
            <a href="gameviewer/<?php echo $row['id'] ?>">
                <img class="images"
                    src="<?php echo  URL .'/' . URL_PUBLIC_FOLDER ?>/img/<?php echo $row['image']; ?>" />
            </a>
            <?php echo "<br>". $row["name"] . "<br>";  ?>
        </div>
    </div>
    <?php
	}
	?>
</div>
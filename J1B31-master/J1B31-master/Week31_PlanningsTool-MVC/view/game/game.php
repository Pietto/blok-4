<div class="container">
    <div class="thumbnail">
        <img class="image" <?php echo ' alt="img" src= "../../public/img/'.$data['image'].'"/'?>>
        <h1><?php echo $data["name"];?></h1>
        <?php echo $data["description"];?>
        <div class="description">
            <p>Minimale spelers: <?php echo $data["min_players"];?></p>
            <p>Maximale spelers: <?php echo $data["max_players"];?></p>
            <p>Speeltijd: <?php echo $data["play_minutes"];?> minuten</p>
            <p>Uitlegtijd: <?php echo $data["explain_minutes"];?> minuten</p>
        </div>

        <div class="embed-responsive embed-responsive-16by9">
            <?php echo "<br>". $data["youtube"] . "<br>";?>
        </div>
    </div>
</div>
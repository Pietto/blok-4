	<?php
		// maak een overzicht lijst van ALLE personen
	?>
	<h1>Overzicht van personen</h1>
	<ul>
	    <?php

			foreach($data as $info){
			?>
	    <div class="userInput">
	        <li>
	            <p class=""><?php echo $info['name']; ?> <?php echo $info['age']; ?>
	                <a href="<?=URL?>employee/edit/<?php echo $info["id"]?>"> Wijzigen </a>
	                <a href="<?=URL?>employee/delete/<?php echo $info["id"]?>"> Verwijderen</a></p>
	        </li>
	    </div>

	    <?php
			}





			// de opbouw van de link bepaald welke method in welke controller aangeroepen wordt.
			// het woordje "employee" in de url betekent dat het framework moet zoeken naar een controller genaamd "EmployeeController".
			// Hij maakt van de eerste letter een hoofdletter en plakt er zelf "Controller" achter.
			// Het woordje "update" of "delete" betekent dat hij in deze controller moet zoeken naar een method met deze naam.
			?>
	</ul>
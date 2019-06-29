	<?php
		// maak een overzicht lijst van ALLE personen
	?>
	<h1>Overzicht van personen</h1>
	<ul>
	    <?php

			foreach($data as $data){
				echo '<div id="content"><li>';
				echo '<p id="content-text">'.$data['name'].', '.$data['age'].' jaar oud';
				echo '<a href="employee/edit/'.$data['id'].'"> Wijzigen</a>';
				echo '<a href="employee/delete/'.$data['id'].'"> Verwijderen</a>';
				echo '</p>';
				echo '</li></div>';
			?>

	    <?php
			}
			// de opbouw van de link bepaald welke method in welke controller aangeroepen wordt.
			// het woordje "employee" in de url betekent dat het framework moet zoeken naar een controller genaamd "EmployeeController".
			// Hij maakt van de eerste letter een hoofdletter en plakt er zelf "Controller" achter.
			// Het woordje "update" of "delete" betekent dat hij in deze controller moet zoeken naar een method met deze naam.
			?>
	</ul>
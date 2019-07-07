<div class='container'>
	<form class="form-horizontal" method="POST" action='createDate'>
	    <div class='form-group'>
			<label class='control-label col-sm-2' for='name'><p>Naam:</p></label>
			<div class='col-sm-10'>
	    		<?php $name = $_POST['name']; ?>
				<input type="text" name="name" class='form-control input' placeholder="naam" value='<?php echo $name; ?>'>
			</div>
	    </div>
	    <div class='form-group'>
			<label class='control-label col-sm-2' for='name'><p>Tijd reservering</p></label>
			<div class='col-sm-10'>
	    		<?php $time = $_POST['time']; ?>
				<input type="time" name="time" class='form-control input' min='08:00' max='20:00' value='<?php echo $time; ?>'>
			</div>
	    </div>
	    <div class='form-group'>
			<label class='control-label col-sm-2' for='name'><p>Hoelang wilt u paardrijden?</p><a onclick='howlong()'>meer weten</a></label>
			<div class='col-sm-10'>
	    		<?php $length = $_POST['length']; ?>
				<input type="number" name="length" class='form-control input' placeholder="tijd in uren" value='<?php echo $length; ?>' min="1" max="3">
			</div>
	    </div>
	    <div class='form-group'>
	    		<?php $horse = $_POST['horse']; ?>
			<label class='control-label col-sm-2'><p>Op welk paard wilt u rijden?</p></label>
			<select class="form-control input" id="horse-select" name='horse' value='<?php echo $horse; ?>'>
 				<option selected disabled hidden><?php echo $horse; ?></option>
		        <option>Stormy</option>
		        <option>Sok</option>
		        <option>Vriend</option>
		        <option>Bliksem</option>
		        <option>Lucky</option>
		        <option>Belle</option>
		        <option>Blackie</option>
		        <option>Shadow</option>
		        <option>Majoor</option>
		        <option>Apollo</option>
		        <option>Honey</option>
		        <option>Snickers</option>
		        <option>Misty</option>
		        <option>Ranger</option>
		        <option>Whiskey</option>
		        <option>Romeo</option>
		        <option>Boef</option>
		        <option>Bob</option>
		        <option>London</option>
		        <option>Lady</option>
      		</select>
	    </div>
	    <div class='form-group'>
			<label class='control-label col-sm-2' for='name'><p>klik hier voor een willekeurig paard</p></label>
			<div class='col-sm-10'>
				<input type="button" name="length" class='form-control input' value='random paard' id='randomizer'>
			</div>
	    </div>
	    <div class='form-group'>
			<label class='control-label col-sm-2' for='name'><p> </p></label>
			<div class='col-sm-10'>
				<input class='form-control input' type='submit'></input>
			</div>
	    </div>
	</form>
</div>

<script>
	function howlong(){
		alert('Een paardrit is standaard één (1) uur lang, u kunt dit verlengen t/m maximaal drie (3) uur.');
	}
	var randomizer = document.getElementById('randomizer');
	randomizer.onclick=randomize
	function randomize(){
		var choice = Math.floor((Math.random() * 20) + 1);
		var choices = ['-','Stormy','Sok','Vriend','Bliksem','Lucky','Belle','Blackie','Shadow','Majoor','Apollo','Honey','Snickers','Misty','Ranger','Whiskey','Romeo','Boef','Bob','London','Lady'];
		var chosen = choices[choice];
		console.log(chosen);
		document.getElementById('horse-select').value=chosen;
	}
</script>
<?php $id = $_GET['id'] ?>



<div class="container">
	<h1>weet u zeker dat u <? echo $_GET['name']; ?> wilt verwijderen?</h1>
	<a href="<?= URL ?>home/keep">terug</a>

	<form method='POST' action='../delete'>
		<div class='form-group' id='display-none'>
			<label class='control-label col-sm-2' for='name'><p>id:</p></label>
			<div class='col-sm-10'>
				<input type="text" name="id" class='form-control input' placeholder="id" value='<?php echo $id; ?>'>
			</div>
		</div>
	    <div class='form-group'>
			<label class='control-label col-sm-2' for='name'><p> </p></label>
			<div class='col-sm-10'>
				<input class='form-control input' type='submit' value="verwijderen"></input>
			</div>
		</div>
	</form>
</div>
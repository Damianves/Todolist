<?php
	require_once "edit.logic.php";
?>
	<h1>Edit Task</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$todo['id']?>">
			<label for="name">Naam Omschrijving:</label>
			<input type="text" id="omschrijving" name="omschrijving" value="<?=$todo['omschrijving']?>">
		</div>
		
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>

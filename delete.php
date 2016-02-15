<?php
	require_once "delete.logic.php";
?>
	<h1>Delete task</h1>
	<p>Are you sure you want to delete:</p>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$todo['id']?>">
			<label for="name">Name:</label>
			<span><?=$todo['omschrijving']?></span>
		</div>
		
		<div>
			<label></label>
			<input type="submit" name="confirmed" value="Yes">
			<input type="submit" name="canceled" value="No">
		</div>
	</form>

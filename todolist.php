<?php
	$connection = new mysqli('localhost','root','','todolist');
		
	$sql = "SELECT * from todo";
	
	$result = $connection->query($sql);
	
	$todos = $result->fetch_all(MYSQLI_ASSOC);
	//var_dump($todo);


?>

<!DOCTYPE html>
<html>
<head>
<title>todo</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="todolist.css" />
</head>

<body>
<div id="up">
		<img src="todo_burned.png"/>
		<h1> Jouw eigen to-do list</h1>
	</div>
		<div id="middle">	
			<form action="todoadd.php" method="get"> <!-- post = get  -->
				<label>To do :</label>
				<input name="omschrijving"placeholder="Invoeren taak">
					<input type="submit" name="submit" value="save">
			</form>
		
		
<table>
<?php
	foreach($todos as $todo):
?>
	
	<tr>
		<td><?php echo  $todo['omschrijving'];?></td>
		<td><a href="delete.php?id=<?=$todo['id']?>">delete</a></td>
		<td><a href="edit.php?id=<?=$todo['id']?>">Edit</a></td>
					
	</tr>	
	
<?php
	endforeach;
?>
</table>
		
		


</body>
</html>
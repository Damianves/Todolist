<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$todo = NULL;
		if (isset($_GET['id'])):
			// Get Patient for id
			$db = new mysqli('localhost','root','','todolist');
			$id = $db->escape_string($_GET["id"]);
			
			$query = "SELECT * from todo where id=$id";
			$result = $db->query($query);
		
			$todo = $result->fetch_assoc();		
		endif;
		if ($todo == NULL):
			// No patient found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','todolist');
		
		// Prepare data for update
		$id = $db->escape_string($_POST["id"]);
		$omschrijving = $db->escape_string($_POST["omschrijving"]);
		

		
		
		// Prepare query and execute
		$query = "UPDATE todo set Omschrijving='$omschrijving' where id=$id";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header('Location:./todolist.php');
    exit();
	endif;

?>
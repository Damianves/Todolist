<?php

$connection = new mysqli('localhost','root','','todolist');
echo $connection->connect_error;

$omschrijving = $_GET['omschrijving'];

$sql ="INSERT INTO todo(omschrijving) VALUES('$omschrijving')";

echo $sql;

$result =$connection->query($sql);

?>

<?php
header('Location:./todolist.php');

?>
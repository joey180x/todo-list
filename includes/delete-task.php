<?php 
	$task_id = strip_tags($_POST['id']);//task id take away tags
	require('connect.php');//requiring the connect.php file
	$mysqli = new mysqli('localhost', 'root', 'root', 'todo');//new mysqli connection

	if ($result = $mysqli->query("DELETE FROM todo WHERE if='task_id'")) {//if result is a query delete task id
	}

 ?>
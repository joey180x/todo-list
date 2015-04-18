<?php
	$task = strip_tags($_POST['tasks']);//strip tags off post coming in
	$date = date('Y-m-d');//date stamp
	$time = date('H:i:s');//time including single date

	include('connect.php');

	$mysqli = new mysqli('localhost', 'root', 'root', 'todo');//new mysqli connection
	$mysqli ->query("INSERT INTO todo VALUES ('', '$task', '$date', '$time')");//insert values into tasks

	$query = "SELECT * FROM todo WHERE task='$task' and date='$date' and time='$time' ";//query select from tasks where task and date and time

	if ($result = $mysqli->query($query)) {
		while ($row = $result->fetch_assoc()){
			$task_id = $row['id'];
			$task_name = $row['task'];
		}
}
	echo '<li><span>'.$task_name.'</span><img id"'.$task_id.'" class="delete-button" width="10px" src=images/close.svg" /></li>';
	$mysqli->close();
	?>
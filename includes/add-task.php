<?php
	$task = strip_tags($_POST['task']);//strip tags off post coming in
	$date = date('Y-m-d');//date stamp
	$time = date('H:i:s');//time including single date

	include('connect.php');

	$mysqli = new mysqli('localhost', 'root', 'root', 'task');//new mysqli connection
	$mysqli ->query("INSERT INTO tasks VALUES ('', '$task', '$date', '$time')");//insert values into tasks

	$query = "SELECT * FROM tasks WHERE task='$task' and date='$date' and time'$time' ";//query select from tasks where task and date and time

	?>
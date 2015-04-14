<?php

$mysqli = new mysqli('localhost', 'root', 'root', 'tasks');//connecting to to mysqli server
if ($mysqli->connect_error) {//if$mysqli->connect_error then we want it to die and have this message
die('Connect Error (' . $mysqli->connect_errno. ')'
	. $mysqli->connect_error);
}
else{
	echo"Connection made";
}
$mysqli->(close);

?>
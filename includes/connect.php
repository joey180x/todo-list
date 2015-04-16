<?php

$mysqli = new mysqli('localhost', 'root', 'root', 'todo');//connecting to to mysqli server
if ($mysqli->connect_error) {//if$mysqli->connect_error then we want it to die and have this message
die('Connect Error (' . $mysqli->connect_errno.')' //die if theres no connecion
	. $mysqli->connect_error);
}
else{
	// echo "Connection made";//echoing connection is made
}
$mysqli->close();//closing mysqli

?>
<!DOCTYPE html>
<html><!--opening html tag-->
<head><!--header tag-->
	<title>Simple To-Do List</title><!--adding title for webpage in tab-->
	<link rel="stylesheet" type="text/css" href="css/main.css"><!--linking to main.css from css file-->
</head><!--closing header tag-->
<body><!--opening body tag-->
	<div class="wrap"><!--A wrapper is an element, commonly a div, that encloses one or more other elements in the HTML markup-->
		<div class="task-list">
			<ul><!--opening unordered-list tag-->
				<?php require("includes/connect.php"); ?><!--Requiring connect.php file to connect to database-->
			</ul><!--closing ul tag-->
		</div><!--closing divider-->
	<form class="add-new-task" autocomplete="off"><!--adding new task, turning autocomplete off-->
		<input type="text" name="new-task" placeholder="Add new item.."/><!--new task-->
	</form><!--closing form tag-->
	</div><!--closing divider-->
</body><!--closing html tag-->
</html><!--closing html tag-->
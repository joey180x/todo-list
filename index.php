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
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>//opening script tag
	add_task(); //calling the add task function

	function add_task(){//add task function
		$('.add-new-task').submit(function() {//add new task and submit
			var new_task = $('.add-new-task input [name=new-task').val();

			if (new_task != '') {//if theres nothing
				$.post('includes/add-task.php', {task: new_task}, function(data) {//post add task. task new task. 
					$('add-new-task input[name=new-task]').val();//add new task input
						$(data).appendTo('task-list ul').hide().fadeIn();//variable data append to task list ul hide and fade in
				});
			}
			return false;//return false
		});
	}

	$('.delete-button').click(function(){//delete button function
		var current_element = $(this) = $(this); //variable this is the current element
		var task_id = $(this).attr('id');// method returns undefined for attributes that have not been set.

		$.post('includes/delete-task.php', {id: task_id}, function(){//post deleted task
		current_element.parent().fadeOut("fast", function(){//fade out fast when task is deleted
			$(this).remove();//remove this
		});
	});
});
</script><!--closing script tag-->

</html><!--closing html tag-->
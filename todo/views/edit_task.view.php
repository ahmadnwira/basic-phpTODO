<?php include 'header.view.php' ; ?>

<div class="col-md-10 col-md-offset-1">
	<form action="../controllers/add_task.controller.php" method="post" class="form">
		<div class="form-group">
	    	<input type="text" class="form-control input-lg" name="task" placeholder="Task">
	  	</div>

		<div class=" form-group">
		   	<input type="text" class="form-control input-lg" 
		   		name="imprtance" placeholder="imprtance">
		</div>
		
	  	<button type="submit" class="btn btn-primary">Add Task</button>

	</form>
</div>

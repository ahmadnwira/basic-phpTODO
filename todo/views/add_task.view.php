<?php include 'header.view.php' ; ?>

<div class="col-md-10 col-md-offset-1">
	<form action="../controllers/add_task.controller.php" method="post" class="form">
		<div class="form-group">
	    	<input type="text" class="form-control input-lg" name="task" placeholder="Task">
	  	</div>

		<div class=" form-group">
		   <select class="form-control" name="importance"> 
		    <option value="">importance</option>
		    <option value="1">1</option>
		    <option value="2">2</option>
		    <option value="3">3</option>
	  	  </select>
		</div>
		
	  	<button type="submit" class="btn btn-primary">Add Task</button>

	</form>
</div>

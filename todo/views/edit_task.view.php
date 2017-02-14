<?php include 'header.view.php' ; ?>

<div class="col-md-10 col-md-offset-1">
	<form action="../controllers/edit_task.controller.php" method="post">

		<div class="form-group">
	    	<input type="text" class="form-control input-lg" 
	    		name="task" value="<?=$_GET['task']?>">
	  	</div>

		<div class=" form-group">
		   	<input type="text" class="form-control input-lg" 
		   		name="importance" value="<?=$_GET['importance']?>">
		</div>
		<input type="hidden" name="id" value="<?=$_GET['id']?>">
		
	  	<button type="submit" class="btn btn-info">submit changes</button>

	</form>
</div>
 